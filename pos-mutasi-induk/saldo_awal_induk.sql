SELECT
  stok_card.owner,
  kode,
  sum(saldo) as saldo
FROM
  stok_card
  INNER JOIN (
    SELECT
      kode AS k,
      MAX(id) AS max_id,
      owner
    FROM
      stok_card
    WHERE
      stok_card.owner in ('DT', 'PL', 'GO')
      AND kode = '01440601'
      AND jenis != 0
      AND (
        doc != 'START'
        AND doc != 'END'
      )
      and created BETWEEN DATE_SUB('2026-09-01 00:00:00', INTERVAL 3 YEAR)
      and '2026-09-01 00:00:00'
    GROUP BY
      owner,
      kode
  ) AS su ON stok_card.kode = su.k
  AND stok_card.`id` = su.max_id
  AND stok_card.`owner` = su.owner
WHERE
  jenis != 0
  and stok_card.owner in ('DT', 'PL', 'GO')
  and created BETWEEN DATE_SUB('2026-09-01 00:00:00', INTERVAL 3 YEAR)
  and '2026-09-01 00:00:00'
GROUP BY
  su.k