SELECT
	SUM(a.diskon_ongkir) AS diskon_ongkir,
	a.jenistrx,
	a.status,
	a.jcp,
	SUM(a.bruto) AS bruto,
	SUM(a.diskon_rupiah) AS diskon_rupiah,
	SUM(a.netto) AS netto,
	SUM(a.tax) AS tax,
	SUM(a.aftertax) AS aftertax,
	SUM(a.dlvcharge) AS dlvcharge,
	SUM(a.total) AS total,
	SUM(a.cash) AS cash,
	SUM(a.debit) AS debit,
	SUM(a.cc) AS cc,
	SUM(a.dp) AS dp,
	SUM(a.member) AS member,
	SUM(a.employee) AS employee,
	SUM(a.compliment) AS compliment,
	SUM(a.voucher) AS voucher,
	SUM(a.trf) AS trf,
	SUM(a.promo) AS promo,
	SUM(a.spoil) AS spoil,
	SUM(a.payment) AS payment,
	SUM(a.kembalian) AS kembalian,
	COUNT(a.id) AS jmltrx
FROM
	(
	SELECT
		*,
		IF((jenistrx = '3' OR jenistrx = '5') AND LENGTH(nomember) = '9', '1', IF((jenistrx = '3' OR jenistrx = '5') AND LENGTH(nomember) != '9' AND nomember != '', '2', '0')) AS jcp
	FROM
		sistembekasi.storage_transaksi
	WHERE
		storage_transaksi.status != '0'
		AND tgl_trx BETWEEN '2025-08-01' AND '2025-08-17'
		AND outlet = 'TO') AS a
GROUP BY
	a.jenistrx,
	a.status,
	a.jcp
ORDER BY
	a.jenistrx ASC
	
	
	
	
	
	
SELECT
st.no_trx,
		st.bruto,
		sum(std.harga * std.qty) as total_harga, st.bruto - sum(std.harga * std.qty) as perbandingan
	FROM
	sistembekasi.storage_transaksi st
join sistembekasi.storage_transaksi_detail std 
on st.no_trx = std.no_trx
WHERE
	st.status != '0'
AND st.tgl_trx BETWEEN '2025-08-01' AND '2025-08-17'
AND st.outlet = 'TO'
group by st.no_trx;












select * from master.orderdlv o  where o.trx_no = 'DC20250816164311TO03'

	
	
	
	
	select * from master.orderdlv_detail od where od.idorder ='WEPO20250812628138364126759132'
	
	
	
	
	
	
	
	
	
	