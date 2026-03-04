select
	storage_transaksi.outlet,
	storage_transaksi.tgl_trx,
	storage_transaksi.namapemesan,
	storage_transaksi.tlptujuan,
	storage_transaksi.bruto,
	storage_transaksi.diskon_rupiah,
	storage_transaksi.netto,
	storage_transaksi.remark,
	storage_transaksi.no_trx,
	storage_transaksi.jenistrx,
	storage_transaksi.nomember,
	storage_transaksi.alamattujuan,
	storage_transaksi.kode_promo,
	outlet.kode,
	outlet.panjang,
	storage_transaksi_detail.kode as "sku",
	produk.nama as "nama_sku",
	storage_transaksi_detail.harga * 100 / 111 as "harga",
	sum(storage_transaksi_detail.qty) as qty,
	(
		storage_transaksi.diskon_rupiah * (
			sum(storage_transaksi_detail.qty) * storage_transaksi_detail.harga
		) / storage_transaksi.bruto
	) * 100 / 111 as diskon_sku,
	sum(storage_transaksi_detail.qty) * (storage_transaksi_detail.harga * 100 / 111) as "sub_total",
	kota.namakota,
	tempo.customer.nama,
	tempo.`customer`.`alamat`,
	tempo.`customer`.`phone`,
	tempo.`customer`.`customer_gender`,
	tempo.`customer`.`customer_dob`,
	CASE
		WHEN outlet.parent = ''
		OR outlet.parent is null then outlet.kode
		else outlet.parent
	END as parent_outlet,
	(
		case
			when jenistrx in ('4', '8') then case
				when alamattujuan = '8' then 'B2B'
				when storage_transaksi.remark LIKE '%WE%' then 'Web'
				when storage_transaksi.remark LIKE '%INV2%' then 'App'
				when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
				else 'Chococall'
			end
			/*when storage_transaksi.`nomember` = '571580' then 'DANA'*/
			when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
			when storage_transaksi.`nomember` in ('589021', '807227') then 'GRABFOOD'
			/*589021: Grab food, 807227: Grab for business */
			/*when storage_transaksi.`nomember` = '667098' then 'MAYBANK QRIS'
			 when storage_transaksi.`nomember` = '568787' then 'OVO'
			 when storage_transaksi.`nomember` = '1009136' then 'QPON'*/
			when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
			when storage_transaksi.`nomember` in ('582950', '641591') then 'SHOPEE FOOD'
			/*904831: shopee mall, 641591: shopee food*/
			when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
			when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
			when jenistrx = '1' then 'Walk In'
			else 'Others'
		end
	) as channel
from
	dci.storage_transaksi
	JOIN dci.storage_transaksi_detail on storage_transaksi.no_trx = storage_transaksi_detail.no_trx
	AND storage_transaksi_detail.`status` = 1
	JOIN master.produk on produk.kode = storage_transaksi_detail.kode
	JOIN dci.outlet on storage_transaksi.outlet = outlet.kode
	AND outlet.`status_report` = 1
	join master.outlet mo on mo.kodeoutlet = outlet.kode
	join master.kota on mo.kota = kota.id
	LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
	AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
where
	storage_transaksi.spoil = 0
	AND storage_transaksi.compliment = 0
	AND (
		`storage_transaksi`.`outlet` != 'XC'
		OR `storage_transaksi`.`outlet` != 'XT'
	)
	AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-12-01'
	AND date '2025-12-31'
	and jenistrx in ('1', '4', '8')
	and storage_transaksi.`status` not in ('0', '')
	AND `storage_transaksi`.`outlet` in (
		SELECT
			kodeoutlet
		FROM
			master.outlet
		WHERE
			(
				franchise != 1
				and jenis_outlet in ('', '1', '2', '9')
				and kodeoutlet not in ('XX', 'XB')
			)
			or kodeoutlet in (
				SELECT
					kodeoutlet
				FROM
					master.`outlet`
				WHERE
					jenis_outlet = '5'
					AND STATUS = '1'
			)
	)
	and parent_outlet = 'SMG'
GROUP BY
	no_trx,
	storage_transaksi_detail.kode,
	harga