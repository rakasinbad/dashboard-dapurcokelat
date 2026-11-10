SELECT
  s.kode,
  p.nama,
  CASE
    WHEN s.kode LIKE '05%' THEN 'COOKIES'
    WHEN s.kode LIKE '0%' THEN 'CAKE'
    WHEN s.kode LIKE '1%'
    AND s.kode NOT LIKE '10000%'
    AND s.kode NOT LIKE '1009%'
    AND s.kode NOT LIKE '14%'
    AND s.kode NOT IN (
      '10010300',
      '10010800',
      '10011000',
      '10020400',
      '10020600',
      '10020700',
      '10020800',
      '10020900',
      '10050203',
      '10050204',
      '10050205',
      '10050206',
      '10050300',
      '10060900'
    ) THEN 'CHOCOLATE'
    WHEN s.kode LIKE '2%'
    OR s.kode LIKE '3%'
    OR s.kode LIKE '65%' THEN 'INGREDIENTS'
    ELSE 'OTHER'
  END AS kategori,
  s.owner AS 'outlet',
  MAX(CAST(s.sell AS DECIMAL(15, 2))) AS sell_price
FROM
  dci.stok s
  JOIN master.produk p ON p.kode = s.kode
WHERE
  p.status = 'AKTIF'
  AND s.owner IN (
    SELECT
      `source`.`kodeoutlet` AS `kodeoutlet`
    FROM
      (
        SELECT
          *
        FROM
          master.outlet
        WHERE
          (
            status = 1
            AND franchise = 0
            AND kodeoutlet NOT IN ('XX', 'XY', 'CXX')
          )
          OR kodeoutlet IN (
            SELECT
              kodeoutlet
            FROM
              master.`outlet`
            WHERE
              jenis_outlet = '5'
              AND status_report = '1'
          )
      ) AS `source`
  )
  AND s.owner NOT IN ('CR_BUARAN', 'CR_SURABAYA', 'B2B', 'B2BS')
  AND s.sell > 0
GROUP BY
  s.kode,
  p.nama,
  s.owner
ORDER BY
  s.kode,
  s.owner;