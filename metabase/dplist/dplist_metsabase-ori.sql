WITH ConsolidatedDeposit AS (
  SELECT
    idcustomer,
    -- 1. Opening Balance (Net total before today)
    SUM(
      CASE
        WHEN waktu < CONCAT({ { start } }, ' 00:00:00') THEN depositplus - depositmin
        ELSE 0
      END
    ) AS start,
    -- 2. Today's total additions and deductions
    SUM(
      CASE
        WHEN waktu BETWEEN CONCAT({ { start } }, ' 00:00:00')
        AND CONCAT({ {end } },
        ' 23:59:59'
      ) THEN depositplus
      ELSE 0
    END
) AS dpplus,
SUM(
  CASE
    WHEN waktu BETWEEN CONCAT({ { start } }, ' 00:00:00')
    AND CONCAT({ {end } },
    ' 23:59:59'
  ) THEN depositmin
  ELSE 0
END
) AS dpmin,
-- 3. Today's additions broken down by payment channel (pintu)
SUM(
  CASE
    WHEN waktu BETWEEN CONCAT({ { start } }, ' 00:00:00')
    AND CONCAT({ {end } },
    ' 23:59:59'
  )
  AND pintu = 'cash' THEN depositplus
  ELSE 0
END
) AS cash,
SUM(
  CASE
    WHEN waktu BETWEEN CONCAT({ { start } }, ' 00:00:00')
    AND CONCAT({ {end } },
    ' 23:59:59'
  )
  AND pintu = 'debit' THEN depositplus
  ELSE 0
END
) AS debit,
SUM(
  CASE
    WHEN waktu BETWEEN CONCAT({ { start } }, ' 00:00:00')
    AND CONCAT({ {end } },
    ' 23:59:59'
  )
  AND pintu = 'cc' THEN depositplus
  ELSE 0
END
) AS cc,
MAX(waktu) AS waktu
FROM
  dci.deposit
WHERE
  1 + 1
  AND outlet != '' [[ AND {{outlet}} ]]
      AND status = '1'
    GROUP BY
      idcustomer
  )
SELECT
  idcustomer,
  start,
  dpplus,
  cash,
  debit,
  cc,
  dpmin,
  (start + dpplus - dpmin) AS balance, -- 4. Clean Closing Balance calculation
  waktu
FROM
  ConsolidatedDeposit
WHERE
  start > 0
  OR dpplus > 0
  OR dpmin > 0 -- 5. Filter out completely inactive accounts
ORDER BY
  idcustomer ASC