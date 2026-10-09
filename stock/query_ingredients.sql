SELECT stok.*,
       mb.name AS nama,
       mb.usage_unit AS unit,
       1 AS usage_konversi,
       mb.req_unit,
       mb.req_packing,
       stok.stok * mb.usage_konversi AS 'smallest_stock',
       usage_unit
FROM dci.stok
INNER JOIN master.mb
  ON stok.kode = mb.item AND buaran = '1'
WHERE stok.owner = 'XX'
  AND (stok.kode LIKE '2%' OR stok.kode LIKE '3%' OR stok.kode LIKE '65%')
GROUP BY stok.kode