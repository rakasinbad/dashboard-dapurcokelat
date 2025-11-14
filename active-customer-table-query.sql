SELECT
  cast(customer.id AS CHAR) AS 'No. Member',
  customer.nama AS 'Name',
  alamat AS 'Address',
  email AS 'Email',
  phone AS 'Phone',
  customer_dob AS 'Date of Birth',
  created_at AS 'Registration Date',
  GROUP_CONCAT(
    DISTINCT outlet.kodeoutlet
ORDER BY
      storage_transaksi.tgl_trx DESC SEPARATOR ' , '
  ) AS 'Latest Purchase Outlet Code',
  GROUP_CONCAT(
    DISTINCT outlet.namaoutlet
    ORDER BY
      storage_transaksi.tgl_trx DESC SEPARATOR ' , '
  ) AS 'Latest Outlet Name',
  max(storage_transaksi.tgl_trx) AS 'Latest Trx',
  sum(bruto) AS 'Total Trx in Periode',
  customer.customer_type AS 'Customer Type',
  count(storage_transaksi.no_trx) AS 'Number of Trx'
FROM
  tempo.customer
  JOIN dci.storage_transaksi ON customer.id = cast(storage_transaksi.nomember AS int)
  JOIN master.outlet ON outlet.kodeoutlet = storage_transaksi.outlet
WHERE
  storage_transaksi.nomember not in(
    '571580',
    '568792',
    '517298',
    '1009134',
    '589021',
    '807227',
    '667098',
    '568787',
    '1009136',
    '587249',
    '582950',
    '641591',
    '904831',
    '898724',
    ''
  )
   AND dci.storage_transaksi.outlet IN (
    SELECT
      kodeoutlet
    FROM
      master.outlet
    WHERE
      (
        franchise != 1
        AND jenis_outlet IN ('', '1', '2')
        AND kodeoutlet not in('XX', 'XB', 'XC', 'XT')
      )
    OR kodeoutlet IN (SELECT kodeoutlet FROM master.`outlet` WHERE jenis_outlet = '5' AND status_report = '1')
  )
  AND storage_transaksi.status not in('0', '')
  AND storage_transaksi.jenistrx IN ('1', '4', '8')
  AND storage_transaksi.spoil = 0
  AND storage_transaksi.compliment = 0 AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-11-03' AND date '2025-11-09'  
GROUP BY
  customer.nomember,
  customer.nama,
  alamat,
  email,
  phone,
  customer_dob,
  customer_register
ORDER BY
  sum(bruto) DESC