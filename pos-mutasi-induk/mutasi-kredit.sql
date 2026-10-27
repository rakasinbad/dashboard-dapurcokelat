SELECT
  t.kode,
  t.jenis,
  SUM(t.kredit) AS jml
FROM
  (
    SELECT
      kode,
      kredit,
      jenis
    FROM
      stok_card
    WHERE
      kredit != '0'
      AND jenis != '0'
      AND `owner` in ('AD', 'PT', 'PM')
      and (
        kode LIKE '4%'
        OR kode LIKE '5%'
      )
      and created BETWEEN '2026-09-01 00:00:00'
      and '2026-09-30 23:59:59'
    ORDER BY
      kode ASC,
      id DESC
  ) AS t
GROUP BY
  kode,
  jenis