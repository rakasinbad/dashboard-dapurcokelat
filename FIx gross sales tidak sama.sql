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
			IF(
				(
					jenistrx = '3'
					OR jenistrx = '5'
				)
				AND LENGTH(nomember) = '9',
				'1',
				IF(
					(
						jenistrx = '3'
						OR jenistrx = '5'
					)
					AND LENGTH(nomember) != '9'
					AND nomember != '',
					'2',
					'0'
				)
			) AS jcp
		FROM
			dci.storage_transaksi
		WHERE
			storage_transaksi.status != '0'
			AND tgl_trx BETWEEN '2025-08-01'
			AND '2025-08-17'
			AND outlet = 'TO'
	) AS a
GROUP BY
	a.jenistrx,
	a.status,
	a.jcp
ORDER BY
	a.jenistrx ASC;

-- line breaker ___
SELECT
	st.no_trx,
	st.bruto,
	sum(std.harga * std.qty) as total_harga,
	bruto - sum(std.harga * std.qty) as perbandingan
FROM
	dci.storage_transaksi st
	join dci.storage_transaksi_detail std on st.no_trx = std.no_trx
WHERE
	st.status != '0'
	AND st.tgl_trx BETWEEN '2025-04-01'
	AND '2025-04-31'
group by
	st.no_trx;

select
	*
from
	master.orderdlv o
where
	o.trx_no = 'DC20250816164311TO03'
select
	*
from
	master.orderdlv_detail od
where
	od.idorder = 'WEPO20250812628138364126759132';

-- get gross sales header
select
	sum(data.amount)
from
	(
		SELECT
			t.kode,
			t.nama,
			SUM(t.qty) AS qty,
			t.harga,
			SUM(t.amount) AS amount
		FROM
			(
				SELECT
					kode,
					nama,
					qty,
					harga,
					(qty * harga) AS amount
				FROM
					dci.storage_transaksi_detail
				where
					tgl_trx between '2025-04-01'
					and '2025-04-30'
					AND outlet in (
						SELECT
							kodeoutlet
						FROM
							master.outlet
						WHERE
							produksi in (
								select
									id
								from
									master.produksi
								where
									lokasidb = 'dci'
									and status = '1'
							)
							AND franchise != '1'
							AND jenis_outlet in ('', '1', '2')
							and kodeoutlet != 'XX'
					)
					and status = '1'
				ORDER BY
					kode,
					harga ASC
			) AS t
		GROUP BY
			t.kode,
			t.harga
		ORDER BY
			t.kode,
			t.harga ASC
	) as data;

-- get sales detail
select
	sum(data.bruto)
from
	(
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
					IF(
						(
							jenistrx = '3'
							OR jenistrx = '5'
						)
						AND LENGTH(nomember) = '9',
						'1',
						IF(
							(
								jenistrx = '3'
								OR jenistrx = '5'
							)
							AND LENGTH(nomember) != '9'
							AND nomember != '',
							'2',
							'0'
						)
					) AS jcp
				FROM
					dci.storage_transaksi
				WHERE
					storage_transaksi.status != '0'
					and jenistrx IN ('1', '4', '6', '8')
					AND tgl_trx BETWEEN '2025-04-01'
					AND '2025-04-30'
					AND outlet in (
						SELECT
							kodeoutlet
						FROM
							master.outlet
						WHERE
							produksi in (
								select
									id
								from
									master.produksi
								where
									lokasidb = 'dci'
									and status = '1'
							)
							AND franchise != '1'
							AND jenis_outlet in ('', '1', '2')
							and kodeoutlet != 'XX'
					)
			) AS a
		GROUP BY
			a.jenistrx,
			a.status,
			a.jcp
		ORDER BY
			a.jenistrx ASC
	) as data;