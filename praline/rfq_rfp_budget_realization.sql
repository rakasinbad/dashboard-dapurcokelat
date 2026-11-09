-- =====================================================================
-- RFQ / RFP Budget vs Quotation Realization Summary
-- MySQL 8.0+ (uses CTEs)
--
-- Adjust the quotable_type values below to match your app:
--   Laravel default : 'App\\Models\\Rfq' / 'App\\Models\\Rfp'
--   With morphMap   : 'rfq' / 'rfp'
-- =====================================================================

-- ---------------------------------------------------------------------
-- QUERY 1: One row per RFQ / RFP
-- ---------------------------------------------------------------------
WITH tenders AS (
    SELECT 'RFQ'           AS tender_type,
           r.id            AS tender_id,
           r.rfq_number    AS tender_number,
           r.type          AS tender_method,
           r.status        AS tender_status,
           r.project_id,
           r.published_at
    FROM rfqs r
    WHERE r.deleted_at IS NULL

    UNION ALL

    SELECT 'RFP',
           p.id,
           p.rfp_number,
           p.tender_method,
           p.status,
           p.project_id,
           p.published_at
    FROM rfps p
    WHERE p.deleted_at IS NULL
),

-- Budget built from item target prices (min and max range)
item_budget AS (
    SELECT pi.project_id,
           COUNT(*)                                                         AS item_count,
           SUM(pi.quantity * pi.target_unit_price)                          AS target_budget,
           SUM(pi.quantity * COALESCE(pi.target_unit_price_max,
                                      pi.target_unit_price))                AS target_budget_max
    FROM project_items pi
    GROUP BY pi.project_id
),

-- Vendors invited / participating
invites AS (
    SELECT 'RFQ' AS tender_type, ri.rfq_id AS tender_id, COUNT(DISTINCT ri.vendor_id) AS vendors_invited
    FROM rfq_invitations ri
    GROUP BY ri.rfq_id

    UNION ALL

    SELECT 'RFP', rs.rfp_id, COUNT(DISTINCT rs.vendor_id)
    FROM rfp_submissions rs
    WHERE rs.deleted_at IS NULL
    GROUP BY rs.rfp_id
),

-- Normalize the polymorphic relation once
quotes_base AS (
    SELECT q.*,
           CASE
               WHEN q.quotable_type IN ('App\\Models\\Rfq', 'rfq') THEN 'RFQ'
               WHEN q.quotable_type IN ('App\\Models\\Rfp', 'rfp') THEN 'RFP'
           END AS tender_type
    FROM quotations q
    WHERE q.deleted_at IS NULL
      AND q.status <> 'draft'
),

-- Quotation statistics (all submitted offers)
quote_stats AS (
    SELECT qb.tender_type,
           qb.quotable_id                 AS tender_id,
           COUNT(DISTINCT qb.vendor_id)   AS vendors_quoted,
           MIN(qb.total_amount)           AS lowest_quote,
           AVG(qb.total_amount)           AS avg_quote,
           MAX(qb.total_amount)           AS highest_quote
    FROM quotes_base qb
    GROUP BY qb.tender_type, qb.quotable_id
),

-- Realization = item lines actually awarded to the quoting vendor
-- (supports partial award across multiple vendors)
awarded AS (
    SELECT qb.tender_type,
           qb.quotable_id                       AS tender_id,
           SUM(qi.total_price)                  AS awarded_amount,
           COUNT(DISTINCT qi.project_item_id)   AS items_awarded,
           COUNT(DISTINCT qb.vendor_id)         AS awarded_vendors
    FROM quotes_base qb
    JOIN quotation_items qi ON qi.quotation_id = qb.id
    WHERE qi.awarded_vendor_id = qb.vendor_id
    GROUP BY qb.tender_type, qb.quotable_id
)

SELECT
    t.tender_type,
    t.tender_number,
    t.tender_method,
    t.tender_status,
    t.published_at,
    pr.project_code,
    pr.title                                   AS project_title,
    pr.department,
    pr.sub_department,

    -- Budget
    pr.estimated_budget,
    ib.target_budget,
    ib.target_budget_max,

    -- Participation
    COALESCE(iv.vendors_invited, 0)            AS vendors_invited,
    COALESCE(qs.vendors_quoted, 0)             AS vendors_quoted,

    -- Market response
    qs.lowest_quote,
    ROUND(qs.avg_quote, 2)                     AS avg_quote,
    qs.highest_quote,

    -- Realization
    COALESCE(aw.awarded_amount, 0)             AS awarded_amount,
    COALESCE(aw.items_awarded, 0)              AS items_awarded,
    COALESCE(ib.item_count, 0)                 AS total_items,
    COALESCE(aw.awarded_vendors, 0)            AS awarded_vendors,

    -- Analysis
    pr.estimated_budget - COALESCE(aw.awarded_amount, 0)                     AS budget_remaining,
    ROUND(aw.awarded_amount / NULLIF(pr.estimated_budget, 0) * 100, 2)       AS realization_pct,
    ROUND((pr.estimated_budget - aw.awarded_amount)
          / NULLIF(pr.estimated_budget, 0) * 100, 2)                         AS savings_pct,
    ROUND(qs.lowest_quote / NULLIF(pr.estimated_budget, 0) * 100, 2)         AS lowest_quote_vs_budget_pct,
    CASE
        WHEN aw.awarded_amount IS NULL                    THEN 'Not awarded'
        WHEN aw.awarded_amount > pr.estimated_budget      THEN 'Over budget'
        WHEN aw.items_awarded < ib.item_count             THEN 'Partially awarded'
        ELSE 'Within budget'
    END                                                                      AS realization_flag

FROM tenders t
JOIN projects pr          ON pr.id = t.project_id AND pr.deleted_at IS NULL
LEFT JOIN item_budget ib  ON ib.project_id = t.project_id
LEFT JOIN invites iv      ON iv.tender_type = t.tender_type AND iv.tender_id = t.tender_id
LEFT JOIN quote_stats qs  ON qs.tender_type = t.tender_type AND qs.tender_id = t.tender_id
LEFT JOIN awarded aw      ON aw.tender_type = t.tender_type AND aw.tender_id = t.tender_id
-- Optional filters:
-- WHERE t.published_at BETWEEN '2026-01-01' AND '2026-12-31'
--   AND t.tender_status NOT IN ('draft', 'cancelled')
ORDER BY t.published_at DESC, t.tender_type, t.tender_number;


-- ---------------------------------------------------------------------
-- QUERY 2: Rollup by department and tender type
-- ---------------------------------------------------------------------
WITH tenders AS (
    SELECT 'RFQ' AS tender_type, r.id AS tender_id, r.project_id, r.status AS tender_status
    FROM rfqs r WHERE r.deleted_at IS NULL
    UNION ALL
    SELECT 'RFP', p.id, p.project_id, p.status
    FROM rfps p WHERE p.deleted_at IS NULL
),
quotes_base AS (
    SELECT q.*,
           CASE
               WHEN q.quotable_type IN ('App\\Models\\Rfq', 'rfq') THEN 'RFQ'
               WHEN q.quotable_type IN ('App\\Models\\Rfp', 'rfp') THEN 'RFP'
           END AS tender_type
    FROM quotations q
    WHERE q.deleted_at IS NULL AND q.status <> 'draft'
),
awarded AS (
    SELECT qb.tender_type, qb.quotable_id AS tender_id, SUM(qi.total_price) AS awarded_amount
    FROM quotes_base qb
    JOIN quotation_items qi ON qi.quotation_id = qb.id
    WHERE qi.awarded_vendor_id = qb.vendor_id
    GROUP BY qb.tender_type, qb.quotable_id
)
SELECT
    COALESCE(pr.department, '(none)')                          AS department,
    COALESCE(t.tender_type, 'ALL')                             AS tender_type,
    COUNT(*)                                                   AS tender_count,
    SUM(CASE WHEN aw.awarded_amount IS NOT NULL THEN 1 ELSE 0 END) AS awarded_count,
    SUM(pr.estimated_budget)                                   AS total_budget,
    SUM(COALESCE(aw.awarded_amount, 0))                        AS total_awarded,
    SUM(pr.estimated_budget) - SUM(COALESCE(aw.awarded_amount, 0)) AS total_remaining,
    ROUND(SUM(COALESCE(aw.awarded_amount, 0))
          / NULLIF(SUM(pr.estimated_budget), 0) * 100, 2)      AS realization_pct
FROM tenders t
JOIN projects pr     ON pr.id = t.project_id AND pr.deleted_at IS NULL
LEFT JOIN awarded aw ON aw.tender_type = t.tender_type AND aw.tender_id = t.tender_id
WHERE t.tender_status NOT IN ('draft', 'cancelled')
GROUP BY pr.department, t.tender_type WITH ROLLUP;


-- ---------------------------------------------------------------------
-- QUERY 3: Tender x Quotation detail
-- One row per quotation under each RFQ / RFP.
-- Tenders without any quotation still appear (award_status = 'No quotation').
-- ---------------------------------------------------------------------
WITH tenders AS (
    SELECT 'RFQ' AS tender_type, r.id AS tender_id, r.rfq_number AS tender_number,
           r.type AS tender_method, r.status AS tender_status, r.project_id, r.published_at
    FROM rfqs r WHERE r.deleted_at IS NULL
    UNION ALL
    SELECT 'RFP', p.id, p.rfp_number, p.tender_method, p.status, p.project_id, p.published_at
    FROM rfps p WHERE p.deleted_at IS NULL
),
quotes_base AS (
    SELECT q.*,
           CASE
               WHEN q.quotable_type IN ('App\\Models\\Rfq', 'rfq') THEN 'RFQ'
               WHEN q.quotable_type IN ('App\\Models\\Rfp', 'rfp') THEN 'RFP'
           END AS tender_type
    FROM quotations q
    WHERE q.deleted_at IS NULL AND q.status <> 'draft'
),
quote_lines AS (
    SELECT qi.quotation_id,
           COUNT(*)                                                               AS items_quoted,
           SUM(qi.total_price)                                                    AS lines_total,
           SUM(CASE WHEN qi.awarded_vendor_id = q.vendor_id THEN 1 ELSE 0 END)    AS items_awarded,
           SUM(CASE WHEN qi.awarded_vendor_id = q.vendor_id
                    THEN qi.total_price ELSE 0 END)                               AS awarded_amount
    FROM quotation_items qi
    JOIN quotations q ON q.id = qi.quotation_id
    GROUP BY qi.quotation_id
),
item_count AS (
    SELECT project_id, COUNT(*) AS total_items
    FROM project_items
    GROUP BY project_id
)
SELECT
    -- Tender
    t.tender_type,
    t.tender_number,
    t.tender_method,
    t.tender_status,
    t.published_at,
    pr.project_code,
    pr.title                                  AS project_title,
    pr.department,
    pr.estimated_budget,

    -- Vendor / participation
    qb.vendor_id,
    -- v.name AS vendor_name,                 -- uncomment if you have a vendors table
    CASE t.tender_type WHEN 'RFQ' THEN ri.status ELSE rs.status END AS participation_status,

    -- Quotation
    qb.quotation_number,
    qb.status                                 AS quotation_status,
    qb.current_version,
    qb.submitted_at,
    qb.valid_until,
    qb.payment_terms,
    qb.delivery_lead_time,
    qb.total_amount                           AS quoted_amount,

    -- Comparison within the tender
    RANK() OVER (PARTITION BY t.tender_type, t.tender_id
                 ORDER BY qb.total_amount IS NULL, qb.total_amount)              AS price_rank,
    MIN(qb.total_amount) OVER (PARTITION BY t.tender_type, t.tender_id)          AS lowest_quote_in_tender,
    qb.total_amount - MIN(qb.total_amount)
        OVER (PARTITION BY t.tender_type, t.tender_id)                           AS diff_vs_lowest,
    qb.total_amount - pr.estimated_budget                                        AS diff_vs_budget,
    ROUND(qb.total_amount / NULLIF(pr.estimated_budget, 0) * 100, 2)             AS quote_vs_budget_pct,

    -- RFP scoring (NULL for RFQ)
    rs.technical_score_raw,
    rs.technical_score_weighted,
    rs.financial_score_weighted,
    rs.total_combined_score,

    -- Item coverage and award
    COALESCE(ql.items_quoted, 0)              AS items_quoted,
    ic.total_items,
    COALESCE(ql.items_awarded, 0)             AS items_awarded,
    COALESCE(ql.awarded_amount, 0)            AS awarded_amount,
    CASE
        WHEN qb.id IS NULL                          THEN 'No quotation'
        WHEN ql.items_awarded = ic.total_items      THEN 'Fully awarded'
        WHEN ql.items_awarded > 0                   THEN 'Partially awarded'
        WHEN qb.status = 'awarded'                  THEN 'Awarded (no item lines)'
        WHEN qb.status = 'rejected'                 THEN 'Rejected'
        ELSE 'Not awarded'
    END                                       AS award_status

FROM tenders t
JOIN projects pr              ON pr.id = t.project_id AND pr.deleted_at IS NULL
LEFT JOIN item_count ic       ON ic.project_id = t.project_id
LEFT JOIN quotes_base qb      ON qb.tender_type = t.tender_type AND qb.quotable_id = t.tender_id
LEFT JOIN quote_lines ql      ON ql.quotation_id = qb.id
LEFT JOIN rfq_invitations ri  ON t.tender_type = 'RFQ' AND ri.rfq_id = t.tender_id
                             AND ri.vendor_id = qb.vendor_id
LEFT JOIN rfp_submissions rs  ON t.tender_type = 'RFP' AND rs.rfp_id = t.tender_id
                             AND rs.vendor_id = qb.vendor_id AND rs.deleted_at IS NULL
-- LEFT JOIN vendors v        ON v.id = qb.vendor_id
ORDER BY t.published_at DESC, t.tender_type, t.tender_number, price_rank;


-- ---------------------------------------------------------------------
-- QUERY 4: Item-level matching (Tender x Project item x Vendor offer)
-- Compares each vendor's offered unit price against the item target.
-- Items nobody quoted still appear (price_flag = 'No offer').
-- ---------------------------------------------------------------------
WITH tenders AS (
    SELECT 'RFQ' AS tender_type, r.id AS tender_id, r.rfq_number AS tender_number,
           r.status AS tender_status, r.project_id
    FROM rfqs r WHERE r.deleted_at IS NULL
    UNION ALL
    SELECT 'RFP', p.id, p.rfp_number, p.status, p.project_id
    FROM rfps p WHERE p.deleted_at IS NULL
),
offers AS (
    SELECT CASE
               WHEN q.quotable_type IN ('App\\Models\\Rfq', 'rfq') THEN 'RFQ'
               WHEN q.quotable_type IN ('App\\Models\\Rfp', 'rfp') THEN 'RFP'
           END                    AS tender_type,
           q.quotable_id          AS tender_id,
           q.vendor_id,
           q.quotation_number,
           q.status               AS quotation_status,
           qi.project_item_id,
           qi.offered_qty,
           qi.offered_unit_price,
           qi.tax_percentage,
           qi.total_price,
           qi.remarks,
           (qi.awarded_vendor_id = q.vendor_id) AS is_awarded
    FROM quotations q
    JOIN quotation_items qi ON qi.quotation_id = q.id
    WHERE q.deleted_at IS NULL AND q.status <> 'draft'
)
SELECT
    t.tender_type,
    t.tender_number,
    t.tender_status,
    pr.project_code,

    -- Requested item
    pi.id                                         AS project_item_id,
    pi.item_name,
    pi.quantity                                   AS requested_qty,
    pi.uom,
    pi.target_unit_price,
    pi.target_unit_price_max,
    pi.quantity * pi.target_unit_price            AS target_line_budget,

    -- Vendor offer
    o.vendor_id,
    o.quotation_number,
    o.quotation_status,
    o.offered_qty,
    o.offered_unit_price,
    o.tax_percentage,
    o.total_price,
    o.remarks,

    -- Analysis
    o.offered_qty - pi.quantity                                                   AS qty_gap,
    o.offered_unit_price - pi.target_unit_price                                   AS unit_price_diff,
    ROUND((o.offered_unit_price - pi.target_unit_price)
          / NULLIF(pi.target_unit_price, 0) * 100, 2)                             AS unit_price_variance_pct,
    CASE
        WHEN o.vendor_id IS NULL                                            THEN 'No offer'
        WHEN o.offered_unit_price <= pi.target_unit_price                   THEN 'At/below target'
        WHEN o.offered_unit_price <= COALESCE(pi.target_unit_price_max,
                                              pi.target_unit_price)         THEN 'Within max'
        ELSE 'Above max'
    END                                                                           AS price_flag,
    RANK() OVER (PARTITION BY t.tender_type, t.tender_id, pi.id
                 ORDER BY o.offered_unit_price IS NULL, o.offered_unit_price)     AS item_price_rank,
    COUNT(o.vendor_id) OVER (PARTITION BY t.tender_type, t.tender_id, pi.id)      AS offers_for_item,
    CASE WHEN o.is_awarded = 1 THEN 'Yes' ELSE 'No' END                           AS is_awarded

FROM tenders t
JOIN projects pr       ON pr.id = t.project_id AND pr.deleted_at IS NULL
JOIN project_items pi  ON pi.project_id = t.project_id
LEFT JOIN offers o     ON o.tender_type = t.tender_type
                      AND o.tender_id = t.tender_id
                      AND o.project_item_id = pi.id
ORDER BY t.tender_type, t.tender_number, pi.id, item_price_rank;
