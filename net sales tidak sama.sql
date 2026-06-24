SELECT
	tgl_trx,
	no_trx,
	bruto,
	(bruto - diskon_rupiah) AS netto_hitung,
	netto,
	(
		cash + debit + cc + member + employee + trf + voucher - dlvcharge + diskon_ongkir
	) AS bayar,
	(bruto - diskon_rupiah - compliment - spoil) - netto AS selisih,
	(
		cash + debit + cc + member + employee + trf + voucher - dlvcharge + diskon_ongkir - kembalian
	) - (bruto - diskon_rupiah - compliment - spoil) AS selisih2,
	((netto + dlvcharge - diskon_ongkir) - total) AS selisih3,
	dp -(cardname + cardno + cardtype + dp_trf + kembalian) AS tb
FROM
	storage_transaksi
WHERE
	STATUS > 0 -- and outlet = 'DT'
	AND tgl_trx BETWEEN '2026-02-25'
	AND '2026-02-25'
	AND jenistrx IN (1, 4, 6, 8);

SELECT
	tgl_trx,
	no_trx,
	bruto,
(bruto - diskon_rupiah) AS netto_hitung,
	netto,
	(
		cash + debit + cc + member + employee + trf + voucher - dlvcharge + diskon_ongkir
	) AS bayar,
	(bruto - diskon_rupiah - compliment - spoil) - netto AS selisih,
	(
		cash + debit + cc + member + employee + trf + voucher - dlvcharge + diskon_ongkir - kembalian
	) - (bruto - diskon_rupiah - compliment - spoil) AS selisih2,
	((netto + dlvcharge - diskon_ongkir) - total) AS selisih3,
	dp -(cardname + cardno + cardtype + dp_trf) AS tb
FROM
	storage_transaksi_backup
WHERE
	outlet = 'LM'
	AND tgl_trx = '2025-03-26'
	AND jenistrx IN (1, 4, 6, 8)
	AND STATUS > 0;

/*IN (SELECT kodeoutlet FROM master.`outlet` WHERE produksi = '1' AND franchise !='1' AND jenis_outlet IN ('','1','2') AND kodeoutlet NOT IN ('XX','XC'))*/
SELECT
	no_trx,
	bruto,
	diskon_rupiah,
	(bruto - diskon_rupiah) AS netto_hitung,
	netto,
	dlvcharge,
	(
		bruto - diskon_rupiah - compliment - spoil + dlvcharge
	) - total AS selisih,
	total,
	voucher,
	member,
	employee,
	cash,
	debit,
	cc,
	dp,
	cardname,
	cardno,
	cardtype,
	dp_trf,
	payment,
	kembalian,
	compliment,
	spoil
FROM
	storage_transaksi
WHERE
	outlet = 'AD'
	AND tgl_trx BETWEEN '2024-12-18'
	AND '2024-12-18'
	AND jenistrx IN (1, 4, 6, 8)
	AND STATUS > '0';

SELECT
	no_trx,
	bruto,
	diskon_rupiah,
	(bruto - diskon_rupiah) AS netto_hitung,
	netto,
	(bruto - diskon_rupiah - compliment) - netto AS selisih,
	total,
	voucher,
	member,
	employee,
	cash,
	debit,
	cc,
	dp,
	cardname,
	cardno,
	cardtype,
	dp_trf,
	payment,
	kembalian
FROM
	storage_transaksi
WHERE
	outlet = 'RM'
	AND tgl_trx BETWEEN '2024-03-01'
	AND '2024-03-31'
	AND jenistrx IN (1, 4, 6, 8)
	AND jenistrx IN (1, 4, 6, 8)
	AND STATUS > '0';

SELECT
	SUM(diskon_rupiah)
FROM
	storage_transaksi
WHERE
	outlet = 'HI'
	AND tgl_trx = '2022-06-14';

SELECT
	no_trx,
	bruto,
(bruto - diskon_rupiah) AS netto_hitung,
	netto,
	(bruto - diskon_rupiah) - netto AS selisih,
	(
		cash + debit + cc + member + employee + trf + voucher - dlvcharge + diskon_ongkir
	) AS bayar,
	(
		cash + debit + cc + member + employee + trf + voucher - dlvcharge + diskon_ongkir
	) - (bruto - diskon_rupiah) AS selisih2
FROM
	storage_transaksi_backup
WHERE
	outlet = 'tp'
	AND tgl_trx BETWEEN '2023-12-01'
	AND '2023-12-30'
	AND (
		jenistrx = '1'
		OR jenistrx = '4'
		OR jenistrx = '6'
		OR jenistrx = '8'
	)
	AND STATUS = '1';

SELECT
	*
FROM
	storage_transaksi_backup
WHERE
	no_trx = 'DC20240202150436KM03';

SELECT
	*
FROM
	storage_transaksi
WHERE
	no_trx = 'DC20240202150436KM03';

SELECT
	*
FROM
	storage_transaksi_detail
WHERE
	no_trx = 'DC20240202150436KM03';

SELECT
	*
FROM
	tempo.`customer`;

SELECT
	*
FROM
	karyawan.karyawan
WHERE
	nohp = '089652855139'
ORDER BY
	id DESC
LIMIT
	0, 1;

SELECT
	nomember,
	namapemesan,
	SUM(bruto) AS gross,
	SUM(payment) AS dp
FROM
	storage_transaksi
WHERE
	outlet = 'DB'
	AND tgl_trx BETWEEN '2023-11-01'
	AND '2023-11-30'
	AND jenistrx = '2'
	AND STATUS > 0
GROUP BY
	nomember
ORDER BY
	nomember ASC;

SELECT
	*
FROM
	storage_transaksi
WHERE
	outlet = 'JS'
	AND tgl_trx = '2024-04-09'
	AND (
		dp > 0
		OR kembalian > 0
	)
ORDER BY
	id ASC;

SELECT
	kode,
	nama,
	unit,
	unitusage
FROM
	master.produk
WHERE
	(
		kode LIKE '0%'
		AND kode NOT LIKE '00%'
		OR kode LIKE '1%'
		AND kode NOT LIKE '17%'
	)
ORDER BY
	kode ASC;