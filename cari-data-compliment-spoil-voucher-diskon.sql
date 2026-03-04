SELECT
  -- Detail Columns from Query 2
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
  outlet,
  -- Summary Columns from Query 1 (Calculated via Window Functions)
  SUM(bruto) OVER(PARTITION BY namakasir) AS total_bruto_kasir,
  SUM(diskon_rupiah) OVER(PARTITION BY namakasir) AS total_diskon_kasir,
  SUM(voucher) OVER(PARTITION BY namakasir) AS total_voucher_kasir,
  SUM(compliment) OVER(PARTITION BY namakasir) AS total_compliment_kasir,
  SUM(spoil) OVER(PARTITION BY namakasir) AS total_spoil_kasir,
  -- The combined "Total Reductions" per cashier
  (
    SUM(diskon_rupiah) OVER(PARTITION BY namakasir) + SUM(voucher) OVER(PARTITION BY namakasir) + SUM(compliment) OVER(PARTITION BY namakasir) + SUM(spoil) OVER(PARTITION BY namakasir)
  ) AS grand_total_reductions_kasir
FROM
  dci.storage_transaksi
WHERE
  status != '0'
  AND tgl_trx BETWEEN '2026-02-01'
  AND '2026-02-28'
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
  namakasir,
  waktu ASC;