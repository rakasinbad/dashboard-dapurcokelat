SELECT
  -- Individual Transaction Columns (Query 1)
  tgl_trx,
  waktu,
  no_trx,
  bruto,
  diskon_rupiah,
  voucher,
  compliment,
  spoil,
  remark,
  namapemesan,
  namakasir,
  kode_promo,
  outlet
FROM
  dci.storage_transaksi
WHERE
  status != '0'
  AND tgl_trx BETWEEN '2026-01-01'
  AND '2026-01-31'
  AND spoil != '0'
  AND outlet IN (
    SELECT
      kodeoutlet
    FROM
      master.outlet
    WHERE
      produksi IN (
        SELECT
          id
        FROM
          master.produksi
        WHERE
          lokasidb = 'dci'
          AND status = '1'
      )
      AND franchise != '1'
      AND jenis_outlet IN ('', '1', '2')
      AND kodeoutlet != 'XX'
  )
ORDER BY
  outlet,
  waktu ASC;