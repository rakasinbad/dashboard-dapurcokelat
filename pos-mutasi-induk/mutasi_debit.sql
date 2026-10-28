SELECT
  t.kode,
  t.jenis,
  SUM(t.debet) AS jml
FROM
  (
    SELECT
      kode,
      sum(debet) as debet,
      jenis
    FROM
      stok_card
    WHERE
      debet != '0'
      AND jenis != '0'
      AND `owner` in ('DT', 'PL', 'GO')
      AND kode = '01440601'
      and created BETWEEN '2026-09-01 00:00:00'
      and '2026-09-30 23:59:59'
    GROUP BY
      jenis,
      kode
    ORDER BY
      kode ASC,
      id DESC
  ) AS t
GROUP BY
  jenis,
  kode