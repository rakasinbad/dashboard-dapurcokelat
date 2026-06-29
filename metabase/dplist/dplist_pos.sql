SELECT
  b.idcustomer,
  SUM(b.start) AS `start`,
  SUM(dpplus) AS dpplus,
  (
    SELECT
      IF(
        SUM(depositplus) IS NOT NULL,
        SUM(depositplus),
        '0'
      )
    FROM
      dci.deposit
    WHERE
      outlet in ('AD', 'PT', 'PM')
      and waktu BETWEEN '2026-06-29 00:00:00'
      AND '2026-06-29 23:59:59'
      AND idcustomer = b.idcustomer
      AND pintu = 'cash'
      and status = '1'
  ) AS cash,
  (
    SELECT
      IF(
        SUM(depositplus) IS NOT NULL,
        SUM(depositplus),
        '0'
      )
    FROM
      dci.deposit
    WHERE
      outlet in ('AD', 'PT', 'PM')
      and waktu BETWEEN '2026-06-29 00:00:00'
      AND '2026-06-29 23:59:59'
      AND idcustomer = b.idcustomer
      AND pintu = 'debit'
      and status = '1'
  ) AS debit,
  (
    SELECT
      IF(
        SUM(depositplus) IS NOT NULL,
        SUM(depositplus),
        '0'
      )
    FROM
      dci.deposit
    WHERE
      outlet in ('AD', 'PT', 'PM')
      and waktu BETWEEN '2026-06-29 00:00:00'
      AND '2026-06-29 23:59:59'
      AND idcustomer = b.idcustomer
      AND pintu = 'cc'
      and status = '1'
  ) AS cc,
  SUM(dpmin) AS dpmin,
  ((SUM(b.start) + SUM(b.dpplus)) - SUM(b.dpmin)) AS balance,
  MAX(b.waktu) AS waktu
FROM
  (
    (
      SELECT
        a.*
      FROM
        (
          SELECT
            outlet,
            idcustomer,
            (SUM(depositplus) - SUM(depositmin)) AS `start`,
            waktu,
            '0' AS dpplus,
            '0' AS dpmin
          FROM
            dci.deposit
          WHERE
            outlet in ('AD', 'PT', 'PM')
            and waktu < '2026-06-29 00:00:00'
            and status = '1'
          GROUP BY
            idcustomer
          ORDER BY
            idcustomer ASC
        ) AS a
      WHERE
        a.start > 0
    )
    UNION
    (
      SELECT
        outlet,
        idcustomer,
        '0' AS `start`,
        waktu,
        SUM(depositplus) AS dpplus,
        SUM(depositmin) AS dpmin
      FROM
        dci.deposit
      WHERE
        outlet in ('AD', 'PT', 'PM')
        and waktu BETWEEN '2026-06-29 00:00:00'
        AND '2026-06-29 23:59:59'
        and status = '1'
      GROUP BY
        idcustomer
      ORDER BY
        idcustomer ASC
    )
  ) AS b
where
  outlet in ('AD', 'PT', 'PM')
GROUP BY
  b.idcustomer
ORDER BY
  b.idcustomer ASC