SELECT
  GROUP_CONCAT(
    DISTINCT CONCAT(outlet.namaoutlet, ' (', outlet.kodeoutlet, ')')
    ORDER BY
      outlet.kodeoutlet ASC SEPARATOR ', '
  ) AS outlet_list
FROM
  master.outlet
  LEFT JOIN master.alamat_outlet ON outlet.kodeoutlet = alamat_outlet.kodeoutlet
  LEFT JOIN master.`latlng` ON outlet.kodeoutlet = latlng.kode
WHERE
  jenis_outlet NOT IN ('0', '3')
  AND posweb = '1'
  AND alamat_outlet.status = 1
  AND latlng.status = 1;