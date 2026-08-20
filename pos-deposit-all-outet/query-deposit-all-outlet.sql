SELECT
  idcustomer,
  SUM(`start`) AS `start`,
  SUM(dpplus) AS dpplus,
  SUM(cash) AS cash,
  SUM(debit) AS debit,
  SUM(cc) AS cc,
  SUM(dpmin) AS dpmin,
  (SUM(`start`) + SUM(dpplus) - SUM(dpmin)) AS balance,
  outlet,
  MAX(waktu) waktu
FROM
  (
    SELECT
      idcustomer,
      (SUM(depositplus) - SUM(depositmin)) AS `start`,
      0 AS dpplus,
      0 AS cash,
      0 AS debit,
      0 AS cc,
      0 AS dpmin,
      outlet,
      waktu
    FROM
      dci.deposit
    WHERE
      waktu < '2026-01-01 00:00:00'
      AND status = '1'
    GROUP BY
      idcustomer,
      outlet
    HAVING
      `start` > 0
    UNION
    ALL
    SELECT
      idcustomer,
      0 AS `start`,
      SUM(depositplus) AS dpplus,
      SUM(
        CASE
          WHEN pintu = 'cash' THEN depositplus
          ELSE 0
        END
      ) AS cash,
      SUM(
        CASE
          WHEN pintu = 'debit' THEN depositplus
          ELSE 0
        END
      ) AS debit,
      SUM(
        CASE
          WHEN pintu = 'cc' THEN depositplus
          ELSE 0
        END
      ) AS cc,
      SUM(depositmin) AS dpmin,
      outlet,
      waktu
    FROM
      dci.deposit
    WHERE
      waktu BETWEEN '2026-01-01 00:00:00'
      AND '2026-01-31 23:59:59'
      AND status = '1'
    GROUP BY
      idcustomer,
      outlet
  ) AS combined_data
GROUP BY
  idcustomer,
  outlet
ORDER BY
  waktu DESC;