SELECT
  stok.*,
  produk.nama,
  produk.unitusage AS unit,
  stok.stok * produk.convusage AS 'smallest_stock',
  produk.unitusage AS usage_unit,
  produk.convusage usage_konversi
FROM
  dci.stok
  INNER JOIN master.produk ON stok.kode = produk.kode
  AND buaran = '1'
WHERE
  stok.owner = 'XX'
  AND (
    stok.kode LIKE '1%'
    AND stok.kode NOT LIKE '10000%'
    AND stok.kode != '10010300'
    AND stok.kode != '10010800'
    AND stok.kode != '10011000'
    AND stok.kode != '10020400'
    AND stok.kode != '10020600'
    AND stok.kode != '10020700'
    AND stok.kode != '10020800'
    AND stok.kode != '10020900'
    AND stok.kode != '10050203'
    AND stok.kode != '10050204'
    AND stok.kode != '10050205'
    AND stok.kode != '10050206'
    AND stok.kode != '10050300'
    AND stok.kode != '10060900'
    AND stok.kode NOT LIKE '1009%'
    AND stok.kode NOT LIKE '14%'
  )
GROUP BY
  stok.kode