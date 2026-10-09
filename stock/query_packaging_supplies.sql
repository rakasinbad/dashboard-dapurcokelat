SELECT
  stok.*,
  mb.name as nama,
  mb.usage_unit as unit,
  1 as usage_konversi,
  mb.req_unit,
  mb.req_packing,
  stok.stok * mb.usage_konversi as 'smallest_stock',
  usage_unit
FROM
  dci.stok
  INNER JOIN master.mb ON stok.kode = mb.item
  AND buaran = '1'
where
  stok.owner = 'XX'
  AND (
    stok.kode LIKE '4%'
    OR stok.kode LIKE '5%'
    OR stok.kode LIKE '66%'
  )
GROUP BY
  stok.kode