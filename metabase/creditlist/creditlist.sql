SELECT
  data.outlet,
  sum(data.Start_Balance) Start,
  sum(data.Sales) Sales,
  sum(data.cash) Cash,
  sum(data.debit) Debit,
  sum(data.cc) CC,
  SUM(data.trf_customer) AS Trf_Customer,
  SUM(data.trf_ojol) AS Trf_Ojol,
  SUM(data.trf_ewallet) AS Trf_Ewallet,
  SUM(data.trf_delivery) AS Trf_Delivery,
  SUM(data.trf_karyawan) AS Trf_Karyawan
FROM
  (
    SELECT
      id AS Id,
      `creditlist`.idcustomer AS Idcustomer,
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
      trf,
      CASE
        WHEN (`creditlist`.jenis = '1')
        AND jo.idcustomer IS NULL
        AND eo.id_emoney IS NULL THEN trf
        ELSE 0
      END AS trf_karyawan,
      CASE
        WHEN `creditlist`.jenis = '2'
        AND jo.idcustomer IS NULL
        AND eo.id_emoney IS NULL THEN trf
        ELSE 0
      END AS trf_customer,
      CASE
        WHEN (
          `creditlist`.jenis = '3'
          OR `creditlist`.jenis = '4'
        )
        AND jo.idcustomer IS NULL
        AND eo.id_emoney IS NULL THEN trf
        ELSE 0
      END AS trf_delivery,
      -- 💡 NEW: If idcustomer matches Ojol table, route trf here; otherwise 0
      CASE
        WHEN jo.idcustomer IS NOT NULL
        AND `creditlist`.jenis = '2' THEN trf
        ELSE 0
      END AS trf_ojol,
      -- 💡 NEW: If idcustomer matches E-Money table, route trf here; otherwise 0
      CASE
        WHEN eo.id_emoney IS NOT NULL
        AND `creditlist`.jenis = '2' THEN trf
        ELSE 0
      END AS trf_ewallet,
      -- 1. Usia (Date Difference between tglbuku and Parameter End Date)
      DATEDIFF({ {end } },
      tglbuku
  ) AS Usia,
  -- 2. Posisi Mapping
  CASE
    WHEN (
      paiddate = '0000-00-00'
      OR paiddate IS NULL
    ) THEN 1
    WHEN paiddate > { {
  end } } THEN 2
  ELSE 3
END AS Posisi,
-- 3. Status Aging Mapping
CASE
  WHEN (
    paiddate = '0000-00-00'
    OR paiddate IS NULL
    OR paiddate > { {
  end } }
) THEN '1'
ELSE '2'
END AS Status_Aging,
-- 4. Start (Prior Balance calculation: credits from before the start period)
CASE
  WHEN tglbuku < { { start } } THEN jmlcredit
  ELSE 0
END AS Start_Balance,
-- 5. Sales (Current Period transactions)
CASE
  WHEN tglbuku >= { { start } }
  AND tglbuku <= { {
end } } THEN jmlcredit
ELSE 0
END AS Sales,
-- 6. Balance (Outstanding Credit amount)
CASE
  WHEN (
    paiddate = '0000-00-00'
    OR paiddate IS NULL
    OR paiddate > { {
  end } }
) THEN jmlcredit
ELSE 0
END AS Balance,
-- 7. Aging Bucket: Satu (0 - 30 Days)
CASE
  WHEN (
    paiddate = '0000-00-00'
    OR paiddate IS NULL
    OR paiddate > { {
  end } }
)
AND DATEDIFF({ {end } },
tglbuku
) >= 0
AND DATEDIFF({ {end } },
tglbuku
) <= 30 THEN jmlcredit
ELSE 0
END AS Satu,
-- 8. Aging Bucket: Dua (31 - 60 Days)
CASE
  WHEN (
    paiddate = '0000-00-00'
    OR paiddate IS NULL
    OR paiddate > { {
  end } }
)
AND DATEDIFF({ {end } },
tglbuku
) > 30
AND DATEDIFF({ {end } },
tglbuku
) <= 60 THEN jmlcredit
ELSE 0
END AS Dua,
-- 9. Aging Bucket: Tiga (61 - 90 Days)
CASE
  WHEN (
    paiddate = '0000-00-00'
    OR paiddate IS NULL
    OR paiddate > { {
  end } }
)
AND DATEDIFF({ {end } },
tglbuku
) > 60
AND DATEDIFF({ {end } },
tglbuku
) <= 90 THEN jmlcredit
ELSE 0
END AS Tiga,
-- 10. Aging Bucket: Empat (> 90 Days)
CASE
  WHEN (
    paiddate = '0000-00-00'
    OR paiddate IS NULL
    OR paiddate > { {
  end } }
)
AND DATEDIFF({ {end } },
tglbuku
) > 90 THEN jmlcredit
ELSE 0
END AS Empat
FROM
  creditlist -- 💡 to get trf_ojol value
  LEFT JOIN (
    SELECT
      idcustomer
    FROM
      master.`jenis_trxonline`
    WHERE
      idcustomer > 10
      AND STATUS = '1'
    GROUP BY
      idcustomer
  ) jo ON `creditlist`.idcustomer = jo.idcustomer -- to get trf_ewallet
  LEFT JOIN (
    SELECT
      id_emoney
    FROM
      master.emoney_to_outlet
    WHERE
      STATUS > 0
    GROUP BY
      id_emoney
  ) eo ON `creditlist`.idcustomer = eo.id_emoney
WHERE
  (
    (
      tglbuku BETWEEN { { start } }
      AND { {
    end } }
    AND status != '0'
  )
  OR (
    tglbuku < { { start } }
    AND STATUS = '1'
  )
  OR (
    tglbuku < { { start } }
    AND STATUS = '2'
    AND paiddate >= { { start } }
  )
)
AND outlet != '' [[ AND {{outlet}} ]]

    ORDER BY

      jenis ASC,

      `creditlist`.idcustomer ASC,

      trxdate ASC

  ) AS data

GROUP BY

  data.outlet