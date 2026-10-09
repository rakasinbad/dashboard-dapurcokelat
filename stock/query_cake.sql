SELECT
  stok.*,
  produk.nama,
  produk.unit,
  stok.stok * produk.convusage AS 'smallest_stock',
  produk.unitusage AS usage_unit,
  produk.convusage usage_konversi
FROM
  dci.stok
  INNER JOIN master.produk ON stok.kode = produk.kode
  AND buaran = '1'
WHERE
  stok.owner = 'XX'
  AND stok.kode LIKE '0%'
  AND stok.kode NOT LIKE '05______'
GROUP BY
  stok.kode