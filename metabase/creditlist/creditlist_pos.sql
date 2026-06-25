SELECT
  *
FROM
  creditlist
WHERE
  outlet in ('AD', 'PT', 'PM')
  and (
    (
      tglbuku BETWEEN '2026-06-25'
      AND '2026-06-25'
      AND status != '0'
    )
    OR (
      tglbuku < '2026-06-25'
      AND STATUS = '1'
    )
    OR (
      tglbuku < '2026-06-25'
      AND STATUS = '2'
      AND paiddate >= '2026-06-25'
    )
  )
ORDER BY
  jenis asc,
  idcustomer ASC,
  trxdate ASC