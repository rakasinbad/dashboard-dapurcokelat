SELECT
  outlet,
  SUM(bruto) AS gross,
  SUM(diskon_rupiah) AS diskon,
  SUM(compliment) AS compliment,
  SUM(spoil) AS spoil,
  SUM(bruto) - (
    SUM(diskon_rupiah) + SUM(compliment) + SUM(spoil)
  ) AS netto
FROM
  storage_transaksi
WHERE
  STATUS = '1'
  AND jenistrx IN (1, 4, 6, 8)
  AND outlet IN ('CK', 'JB', 'BU')
  AND tgl_trx BETWEEN '2026-05-01'
  AND '2026-05-31'
  and bruto > 0
GROUP BY
  outlet;

SELECT
  outlet,
  SUM(qty * harga) AS gross
FROM
  storage_transaksi_detail
WHERE
  STATUS = '1'
  AND outlet IN ('CK', 'JB', 'BU')
  AND tgl_trx BETWEEN '2026-05-01'
  AND '2026-05-31'
  and harga > 0
GROUP BY
  outlet