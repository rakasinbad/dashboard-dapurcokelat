SELECT
  data.outlet,
  sum(data.Start_Balance) Start,
  sum(data.Sales) Sales,
  sum(data.cash) Cash,
  sum(data.debit) Debit,
  sum(data.cc) CC
FROM
  (
    SELECT
      id AS Id,
      idcustomer AS Idcustomer,
      tglbuku AS Tglbuku,
      trxdate AS Trxdate,
      trxno AS Trxno,
      jmlcredit AS Jmlcredit,
      paiddate AS Paiddate,
      status AS Status_Original,
      outlet AS Outlet,
      cash,
      debit,
      cc,
      -- 1. Usia (Date Difference between tglbuku and Parameter End Date)
      DATEDIFF(date '2026-06-23', tglbuku) AS Usia,
      -- 2. Posisi Mapping
      CASE
        WHEN (
          paiddate = '0000-00-00'
          OR paiddate IS NULL
        ) THEN 1
        WHEN paiddate > date '2026-06-23' THEN 2
        ELSE 3
      END AS Posisi,
      -- 3. Status Aging Mapping
      CASE
        WHEN (
          paiddate = '0000-00-00'
          OR paiddate IS NULL
          OR paiddate > date '2026-06-23'
        ) THEN '1'
        ELSE '2'
      END AS Status_Aging,
      -- 4. Start (Prior Balance calculation: credits from before the start period)
      CASE
        WHEN tglbuku < date '2026-06-23' THEN jmlcredit
        ELSE 0
      END AS Start_Balance,
      -- 5. Sales (Current Period transactions)
      CASE
        WHEN tglbuku >= date '2026-06-23'
        AND tglbuku <= date '2026-06-23' THEN jmlcredit
        ELSE 0
      END AS Sales,
      -- 6. Balance (Outstanding Credit amount)
      CASE
        WHEN (
          paiddate = '0000-00-00'
          OR paiddate IS NULL
          OR paiddate > date '2026-06-23'
        ) THEN jmlcredit
        ELSE 0
      END AS Balance,
      -- 7. Aging Bucket: Satu (0 - 30 Days)
      CASE
        WHEN (
          paiddate = '0000-00-00'
          OR paiddate IS NULL
          OR paiddate > date '2026-06-23'
        )
        AND DATEDIFF(date '2026-06-23', tglbuku) >= 0
        AND DATEDIFF(date '2026-06-23', tglbuku) <= 30 THEN jmlcredit
        ELSE 0
      END AS Satu,
      -- 8. Aging Bucket: Dua (31 - 60 Days)
      CASE
        WHEN (
          paiddate = '0000-00-00'
          OR paiddate IS NULL
          OR paiddate > date '2026-06-23'
        )
        AND DATEDIFF(date '2026-06-23', tglbuku) > 30
        AND DATEDIFF(date '2026-06-23', tglbuku) <= 60 THEN jmlcredit
        ELSE 0
      END AS Dua,
      -- 9. Aging Bucket: Tiga (61 - 90 Days)
      CASE
        WHEN (
          paiddate = '0000-00-00'
          OR paiddate IS NULL
          OR paiddate > date '2026-06-23'
        )
        AND DATEDIFF(date '2026-06-23', tglbuku) > 60
        AND DATEDIFF(date '2026-06-23', tglbuku) <= 90 THEN jmlcredit
        ELSE 0
      END AS Tiga,
      -- 10. Aging Bucket: Empat (> 90 Days)
      CASE
        WHEN (
          paiddate = '0000-00-00'
          OR paiddate IS NULL
          OR paiddate > date '2026-06-23'
        )
        AND DATEDIFF(date '2026-06-23', tglbuku) > 90 THEN jmlcredit
        ELSE 0
      END AS Empat
    FROM
      creditlist
    WHERE
      (
        (
          tglbuku BETWEEN '2026-06-23'
          AND '2026-06-23'
          AND status != '0'
        )
        OR (
          tglbuku < '2026-06-23'
          AND STATUS = '1'
        )
        OR (
          tglbuku < '2026-06-23'
          AND STATUS = '2'
          AND paiddate >= '2026-06-23'
        )
      )
      AND outlet != ''
    ORDER BY
      jenis ASC,
      idcustomer ASC,
      trxdate ASC
  ) AS data
GROUP BY
  data.outlet