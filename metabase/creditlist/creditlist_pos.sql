select
  *
FROM
  (
    SELECT
      *
    FROM
      dci.creditlist
    WHERE
      outlet in ('AD', 'PT', 'PM')
      and (
        (
          tglbuku BETWEEN '2026-06-24'
          AND '2026-06-25'
          AND status != '0'
        )
        OR (
          tglbuku < '2026-06-24'
          AND STATUS = '1'
        )
        OR (
          tglbuku < '2026-06-24'
          AND STATUS = '2'
          AND paiddate >= '2026-06-24'
        )
      )
    ORDER BY
      jenis asc,
      idcustomer ASC,
      trxdate ASC
  ) as data