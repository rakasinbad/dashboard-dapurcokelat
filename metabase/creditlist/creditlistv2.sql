SELECT
  `creditlist`.outlet,
  SUM(
    CASE
      WHEN tglbuku < { { start } } THEN jmlcredit
      ELSE 0
    END
  ) AS Start,
  SUM(
    CASE
      WHEN tglbuku >= { { start } }
      AND tglbuku <= { {
    end } } THEN jmlcredit
    ELSE 0
  END
) AS Sales,
SUM(cash) AS Cash,
SUM(debit) AS Debit,
SUM(cc) AS CC,
-- Transfer Breakdowns
SUM(
  CASE
    WHEN `creditlist`.jenis = '2'
    AND `creditlist`.status = '2'
    AND jo.idcustomer IS NULL
    AND `creditlist`.paiddate != '0000-00-00'
    AND `creditlist`.paiddate <= { {
  end } }
  AND eo.id_emoney IS NULL THEN trf
  ELSE 0
END
) AS Trf_Customer,
SUM(
  CASE
    WHEN jo.idcustomer IS NOT NULL
    AND `creditlist`.status = '2'
    AND `creditlist`.jenis = '2'
    AND `creditlist`.paiddate != '0000-00-00'
    AND `creditlist`.paiddate <= { {
  end } } THEN trf
  ELSE 0
END
) AS Trf_Ojol,
SUM(
  CASE
    WHEN eo.id_emoney IS NOT NULL
    AND `creditlist`.jenis = '2'
    AND `creditlist`.status = '2'
    AND `creditlist`.paiddate != '0000-00-00'
    AND `creditlist`.paiddate <= { {
  end } } THEN trf
  ELSE 0
END
) AS Trf_Ewallet,
SUM(
  CASE
    WHEN (
      `creditlist`.jenis = '3'
      OR `creditlist`.jenis = '4'
    )
    AND `creditlist`.status = '2'
    AND jo.idcustomer IS NULL
    AND eo.id_emoney IS NULL
    AND `creditlist`.paiddate != '0000-00-00'
    AND `creditlist`.paiddate <= { {
  end } } THEN trf
  ELSE 0
END
) AS Trf_Delivery,
SUM(
  CASE
    WHEN `creditlist`.jenis = '1'
    AND `creditlist`.status = '2'
    AND jo.idcustomer IS NULL
    AND eo.id_emoney IS NULL
    AND `creditlist`.paiddate != '0000-00-00'
    AND `creditlist`.paiddate <= { {
  end } } THEN trf
  ELSE 0
END
) AS Trf_Karyawan,
-- 💡 NEW: True Weekly Aging Periods (Calculated Inline)
SUM(
  CASE
    WHEN (
      paiddate = '0000-00-00'
      OR paiddate IS NULL
      OR paiddate > { {
    end } }
  )
  AND DATEDIFF({ {end } },
  tglbuku
) BETWEEN 0
AND 7 THEN jmlcredit
ELSE 0
END
) AS Week_1,
SUM(
  CASE
    WHEN (
      paiddate = '0000-00-00'
      OR paiddate IS NULL
      OR paiddate > { {
    end } }
  )
  AND DATEDIFF({ {end } },
  tglbuku
) BETWEEN 8
AND 14 THEN jmlcredit
ELSE 0
END
) AS Week_2,
SUM(
  CASE
    WHEN (
      paiddate = '0000-00-00'
      OR paiddate IS NULL
      OR paiddate > { {
    end } }
  )
  AND DATEDIFF({ {end } },
  tglbuku
) BETWEEN 15
AND 21 THEN jmlcredit
ELSE 0
END
) AS Week_3,
SUM(
  CASE
    WHEN (
      paiddate = '0000-00-00'
      OR paiddate IS NULL
      OR paiddate > { {
    end } }
  )
  AND DATEDIFF({ {end } },
  tglbuku
) >= 22 THEN jmlcredit
ELSE 0
END
) AS Week_4_Plus
FROM
  creditlist
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
  ) jo ON `creditlist`.idcustomer = jo.idcustomer
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
    AND status = '1'
  )
  OR (
    tglbuku < { { start } }
    AND status = '2'
    AND paiddate >= { { start } }
  )
)
AND outlet != '' [[ AND {{outlet}} ]]
GROUP BY
  `creditlist`.outlet;