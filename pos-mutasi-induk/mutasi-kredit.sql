SELECT
  t.kode,
  t.jenis,
  t.id,
  SUM(t.kredit) AS jml
FROM
  (
    SELECT
      kode,
      kredit,
      jenis,
      id
    FROM
      stok_card
    WHERE
      kredit != '0'
      AND jenis != '0'
      AND `owner` in ('KG', 'RM', 'CH')
      and (
        kode LIKE '4%'
        OR kode LIKE '5%'
      )
      AND kode = '50020110'
      and created BETWEEN '2026-09-01 00:00:00'
      and '2026-09-30 23:59:59'
    ORDER BY
      kode ASC,
      id DESC
  ) AS t
GROUP BY
  kode,
  jenis