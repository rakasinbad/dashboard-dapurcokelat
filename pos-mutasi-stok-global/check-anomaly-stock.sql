-- ==========================================
-- 1. Check for Duplicate IDs
-- ==========================================
SELECT
    'DUPLICATE_ID' AS anomaly_type,
    id,
    COUNT(*) AS duplicate_count,
    GROUP_CONCAT(
        created
        ORDER BY
            created ASC
    ) AS timestamps,
    GROUP_CONCAT(
        saldo
        ORDER BY
            created ASC
    ) AS saldo_values,
    GROUP_CONCAT(
        kredit
        ORDER BY
            created ASC
    ) AS kredit_values,
    GROUP_CONCAT(
        debet
        ORDER BY
            created ASC
    ) AS debet_values
FROM
    stok_card
WHERE
    kode = '50010001'
    AND owner = 'KW'
    AND created BETWEEN '2026-01-01 00:00:00'
    AND '2026-01-31 23:59:59'
GROUP BY
    id
HAVING
    COUNT(*) > 1;

-- ==========================================
-- 2. Check for Incorrect Running Balance
-- ==========================================
WITH ranked AS (
    SELECT
        id,
        created,
        kredit,
        debet,
        saldo,
        LAG(saldo) OVER (
            ORDER BY
                id ASC
        ) AS prev_saldo,
        LAG(id) OVER (
            ORDER BY
                id ASC
        ) AS prev_id,
        LAG(created) OVER (
            ORDER BY
                id ASC
        ) AS prev_created,
        ROW_NUMBER() OVER (
            ORDER BY
                id ASC
        ) AS rn
    FROM
        stok_card
    WHERE
        kode = '50010001'
        AND owner = 'KW'
        AND created BETWEEN '2026-01-01 00:00:00'
        AND '2026-01-31 23:59:59'
),
anomalies AS (
    SELECT
        id,
        created,
        kredit,
        debet,
        saldo,
        prev_id,
        prev_created,
        prev_saldo,
        (
            CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
        ) AS expected_saldo,
        CAST(saldo AS DECIMAL(10, 2)) - (
            CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
        ) AS difference,
        CASE
            WHEN prev_saldo IS NULL THEN 'FIRST_RECORD'
            WHEN CAST(saldo AS DECIMAL(10, 2)) != (
                CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
            ) THEN 'INCORRECT_BALANCE'
            ELSE 'OK'
        END AS status
    FROM
        ranked
)
SELECT
    'INCORRECT_BALANCE' AS anomaly_type,
    id,
    created,
    prev_id,
    prev_created,
    prev_saldo,
    kredit,
    debet,
    saldo AS current_saldo,
    expected_saldo,
    difference,
    status
FROM
    anomalies
WHERE
    status = 'INCORRECT_BALANCE'
ORDER BY
    id ASC;

-- ==========================================
-- 3. Check for Negative Balance (if not allowed)
-- ==========================================
SELECT
    'NEGATIVE_BALANCE' AS anomaly_type,
    id,
    created,
    saldo,
    kredit,
    debet,
    remark
FROM
    stok_card
WHERE
    kode = '50010001'
    AND owner = 'KW'
    AND created BETWEEN '2026-01-01 00:00:00'
    AND '2026-01-31 23:59:59'
    AND CAST(saldo AS DECIMAL(10, 2)) < 0;

-- ==========================================
-- 4. Check for Missing Previous Record
-- ==========================================
WITH ranked AS (
    SELECT
        id,
        created,
        saldo,
        LAG(id) OVER (
            ORDER BY
                id ASC
        ) AS prev_id,
        LAG(created) OVER (
            ORDER BY
                id ASC
        ) AS prev_created,
        ROW_NUMBER() OVER (
            ORDER BY
                id ASC
        ) AS rn
    FROM
        stok_card
    WHERE
        kode = '50010001'
        AND owner = 'KW'
        AND created BETWEEN '2026-01-01 00:00:00'
        AND '2026-01-31 23:59:59'
)
SELECT
    'MISSING_PREVIOUS' AS anomaly_type,
    id,
    created,
    prev_id,
    prev_created,
    CASE
        WHEN rn > 1
        AND prev_id IS NULL THEN 'PREVIOUS_ID_MISSING'
        WHEN rn > 1
        AND prev_created IS NULL THEN 'PREVIOUS_CREATED_MISSING'
        ELSE 'OK'
    END AS status
FROM
    ranked
WHERE
    rn > 1
    AND (
        prev_id IS NULL
        OR prev_created IS NULL
    );

-- ==========================================
-- 5. Check for Unusual Large Transactions
-- ==========================================
SELECT
    'UNUSUAL_TRANSACTION' AS anomaly_type,
    id,
    created,
    kredit,
    debet,
    saldo,
    CASE
        WHEN CAST(kredit AS DECIMAL(10, 2)) > 1000 THEN 'LARGE_CREDIT'
        WHEN CAST(debet AS DECIMAL(10, 2)) > 1000 THEN 'LARGE_DEBIT'
        ELSE 'NORMAL'
    END AS status
FROM
    stok_card
WHERE
    kode = '50010001'
    AND owner = 'KW'
    AND created BETWEEN '2026-01-01 00:00:00'
    AND '2026-01-31 23:59:59'
    AND (
        CAST(kredit AS DECIMAL(10, 2)) > 1000
        OR CAST(debet AS DECIMAL(10, 2)) > 1000
    );

-- ==========================================
-- 6. Comprehensive Anomaly Report
-- ==========================================
WITH ranked AS (
    SELECT
        id,
        created,
        kredit,
        debet,
        saldo,
        LAG(saldo) OVER (
            ORDER BY
                id ASC
        ) AS prev_saldo,
        LAG(id) OVER (
            ORDER BY
                id ASC
        ) AS prev_id,
        ROW_NUMBER() OVER (
            ORDER BY
                id ASC
        ) AS rn
    FROM
        stok_card
    WHERE
        kode = '50010001'
        AND owner = 'KW'
        AND created BETWEEN '2026-01-01 00:00:00'
        AND '2026-01-31 23:59:59'
)
SELECT
    'ANOMALY_REPORT' AS report_type,
    id,
    created,
    prev_id,
    prev_saldo,
    kredit,
    debet,
    saldo AS current_saldo,
    CASE
        WHEN rn = 1 THEN 'START_BALANCE'
        WHEN prev_saldo IS NULL THEN 'MISSING_PREVIOUS_BALANCE'
        WHEN CAST(saldo AS DECIMAL(10, 2)) != (
            CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
        ) THEN 'INCORRECT_BALANCE'
        WHEN CAST(saldo AS DECIMAL(10, 2)) < 0 THEN 'NEGATIVE_BALANCE'
        ELSE 'OK'
    END AS status,
    (
        CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
    ) AS expected_saldo,
    CAST(saldo AS DECIMAL(10, 2)) - (
        CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
    ) AS difference
FROM
    ranked
WHERE
    rn = 1
    OR prev_saldo IS NULL
    OR CAST(saldo AS DECIMAL(10, 2)) != (
        CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
    )
    OR CAST(saldo AS DECIMAL(10, 2)) < 0
ORDER BY
    id ASC;

-- ==========================================
-- 7. Summary Statistics
-- ==========================================
WITH ranked AS (
    SELECT
        id,
        created,
        kredit,
        debet,
        saldo,
        LAG(saldo) OVER (
            ORDER BY
                id ASC
        ) AS prev_saldo,
        ROW_NUMBER() OVER (
            ORDER BY
                id ASC
        ) AS rn
    FROM
        stok_card
    WHERE
        kode = '50010001'
        AND owner = 'KW'
        AND created BETWEEN '2026-01-01 00:00:00'
        AND '2026-01-31 23:59:59'
)
SELECT
    'SUMMARY' AS report_type,
    COUNT(*) AS total_records,
    SUM(
        CASE
            WHEN rn = 1 THEN 1
            ELSE 0
        END
    ) AS start_records,
    SUM(
        CASE
            WHEN prev_saldo IS NULL
            AND rn > 1 THEN 1
            ELSE 0
        END
    ) AS missing_previous,
    SUM(
        CASE
            WHEN CAST(saldo AS DECIMAL(10, 2)) != (
                CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
            )
            AND rn > 1 THEN 1
            ELSE 0
        END
    ) AS incorrect_balance,
    SUM(
        CASE
            WHEN CAST(saldo AS DECIMAL(10, 2)) < 0 THEN 1
            ELSE 0
        END
    ) AS negative_balance,
    SUM(CAST(kredit AS DECIMAL(10, 2))) AS total_kredit,
    SUM(CAST(debet AS DECIMAL(10, 2))) AS total_debet,
    (
        SELECT
            CAST(saldo AS DECIMAL(10, 2))
        FROM
            stok_card
        WHERE
            kode = '50010001'
            AND owner = 'KW'
            AND created < '2026-01-01 00:00:00'
        ORDER BY
            id DESC
        LIMIT
            1
    ) AS previous_month_balance,
    (
        SELECT
            CAST(saldo AS DECIMAL(10, 2))
        FROM
            stok_card
        WHERE
            kode = '50010001'
            AND owner = 'KW'
            AND created BETWEEN '2026-01-01 00:00:00'
            AND '2026-01-31 23:59:59'
        ORDER BY
            id DESC
        LIMIT
            1
    ) AS latest_balance
FROM
    ranked;