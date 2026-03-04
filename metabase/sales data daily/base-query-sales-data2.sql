select
	outlet as "Outlet",
	namaoutlet as "Nama Outlet",
	namakota as "Wilayah",
	tgl_trx as "Tanggal Trx",
	date_format(waktu, '%H:%i:%S') as "Waktu Trx",
	no_trx as "No. Trx",
	kode_promo as "Kode Promo",
	namapemesan as "Nama Customer",
	phone as "Phone",
	remark as "Remark",
	kode as "SKU",
	nama_sku as "Nama SKU",
	case
		when right(left(kode, 6), 1) = '1' then '20x20'
		when right(left(kode, 6), 1) = '2' then '20x40'
		when right(left(kode, 6), 1) = '3' then '30x40'
		when right(left(kode, 6), 1) = '4' then '40x60'
		when right(left(kode, 6), 1) = '5' then 'Ind'
		when right(left(kode, 6), 1) = '6' then '10x20'
		else 'Other'
	end as 'SKU Size', 
	harga as "Price",
	qty as "Qty",
	sub_total as "Gross Sales",
	diskon_sku as "Discount",
	sub_total - diskon_sku as "Nett Sales",
	channel as 'Channel',
	storage_transaksi.customer_dob as "Customer DOB",
	storage_transaksi.customer_gender as "Customer Gender"
from
	(
	select
		tgl_trx,
		waktu,
		outlet,
		namaoutlet,
		kode,
		nama_sku,
		sub_total,
		qty,
		diskon_sku,
		CASE
			WHEN coalesce(stc.channel, src.channel) IN ('Web') THEN 'Web'
			WHEN coalesce(stc.channel, src.channel) IN ('App') THEN 'App'
			WHEN coalesce(src.channel) = 'Walk In' THEN 'Walk In'
			ELSE coalesce(stc.channel, src.channel)
		END AS channel,
		kode_promo,
		namapemesan,
		tlptujuan,
		remark,
		namakota,
		no_trx,
		harga,
		phone,
		customer_dob,
		customer_gender
	from
		(
		select
			storage_transaksi.id,
			6 as kodedb_id,
			storage_transaksi.outlet,
			storage_transaksi.tgl_trx,
			storage_transaksi.waktu,
			storage_transaksi.namapemesan,
			storage_transaksi.tlptujuan,
			storage_transaksi.bruto,
			storage_transaksi.diskon_rupiah,
			storage_transaksi.netto,
			storage_transaksi.remark,
			storage_transaksi.no_trx,
			storage_transaksi.kode_promo,
			outlet.kodeoutlet,
			outlet.namaoutlet,
			storage_transaksi_detail.kode as "kode",
			storage_transaksi_detail.nama as "nama_sku",
			storage_transaksi_detail.harga,
			storage_transaksi_detail.qty,
			(storage_transaksi.diskon_rupiah * (storage_transaksi_detail.qty * storage_transaksi_detail.harga) / storage_transaksi.bruto) as diskon_sku,
			storage_transaksi_detail.qty * storage_transaksi_detail.harga as "sub_total",
			kota.namakota,
			tempo.customer.nama,
			tempo.`customer`.`alamat`,
			tempo.`customer`.`phone`,
			tempo.`customer`.`customer_gender`,
			tempo.`customer`.`customer_dob`,
			(
			case 
				when jenistrx in ('4', '8') then
				    case
					when alamattujuan = '8' then 'B2B'
					when storage_transaksi.remark LIKE '%WE%' then 'Web'
					when storage_transaksi.remark LIKE '%INV2%' then 'App'
					else 'Chococall'
				end
				/*when storage_transaksi.`nomember` = '571580' then 'DANA'*/
				when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
				when storage_transaksi.`nomember` in ('589021', '807227') then 'GRABFOOD' /*589021: Grab food, 807227: Grab for business */
				/*when storage_transaksi.`nomember` = '667098' then 'MAYBANK QRIS'
				when storage_transaksi.`nomember` = '568787' then 'OVO'
				when storage_transaksi.`nomember` = '1009136' then 'QPON'*/
				when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
				when storage_transaksi.`nomember` in ('582950', '641591') then 'SHOPEE FOOD' /*904831: shopee mall, 641591: shopee food*/
				when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
				when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
				when jenistrx = '1' then 'Walk In'
				else 'Others'
			end
		)
		as channel
		from
			dci.storage_transaksi
		JOIN dci.storage_transaksi_detail on
			storage_transaksi.no_trx = storage_transaksi_detail.no_trx
		JOIN master.outlet on
			storage_transaksi.outlet = outlet.kodeoutlet
		join master.kota on
			outlet.kota = kota.id
		LEFT JOIN tempo.`customer` ON
			`storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
			AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
		where
			storage_transaksi.spoil = 0
			AND storage_transaksi.compliment = 0
			AND
		(`storage_transaksi`.`outlet` != 'XC'
				OR `storage_transaksi`.`outlet` != 'XT')
			AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-11-01' AND date '2025-12-31'
			and jenistrx in ('1', '4', '8')
			and storage_transaksi.`status` not in ('0', '')
	/*	and storage_transaksi.`nomember` not in (
		SELECT
			idcustomer
	
FROM
			master.`jenis_trxonline`
	
WHERE
			idcustomer > 10)*/
			AND `storage_transaksi`.`outlet` in (
			SELECT
				kodeoutlet
			FROM
				master.outlet
			WHERE
				(
    			franchise != 1
					and jenis_outlet in ('', '1', '2', '9')
						and kodeoutlet not in ('XX', 'XB'))
					or kodeoutlet in (
					SELECT
						kodeoutlet
					FROM
						master.`outlet`
					WHERE
						jenis_outlet = '5'
						AND STATUS = '1'))
	union
		select
			storage_transaksi.id,
			0 as kodedb_id,
			storage_transaksi.outlet,
			storage_transaksi.tgl_trx,
			storage_transaksi.waktu,
			storage_transaksi.namapemesan,
			storage_transaksi.tlptujuan,
			storage_transaksi.bruto,
			storage_transaksi.diskon_rupiah,
			storage_transaksi.netto,
			storage_transaksi.remark,
			storage_transaksi.no_trx,
			storage_transaksi.kode_promo,
			outlet.kodeoutlet,
			outlet.namaoutlet,
			storage_transaksi_detail.kode as "sku",
			storage_transaksi_detail.nama as "nama_sku",
			storage_transaksi_detail.harga,
			storage_transaksi_detail.qty,
			(storage_transaksi.diskon_rupiah * (storage_transaksi_detail.qty * storage_transaksi_detail.harga) / storage_transaksi.bruto) as diskon_sku,
			storage_transaksi_detail.qty * storage_transaksi_detail.harga as "sub_total",
			kota.namakota,
			tempo.customer.nama,
			tempo.`customer`.`alamat`,
			tempo.`customer`.`phone`,
			tempo.`customer`.`customer_gender`,
			tempo.`customer`.`customer_dob`,
			(
			case 
				when jenistrx in ('4', '8') then
				    case
					when alamattujuan = '8' then 'B2B'
					when storage_transaksi.remark LIKE '%WE%' then 'Web'
					when storage_transaksi.remark LIKE '%INV2%' then 'App'
					else 'Chococall'
				end
				/*when storage_transaksi.`nomember` = '571580' then 'DANA'*/
				when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
				when storage_transaksi.`nomember` in ('589021', '807227') then 'GRABFOOD' /*589021: Grab food, 807227: Grab for business */
				/*when storage_transaksi.`nomember` = '667098' then 'MAYBANK QRIS'
				when storage_transaksi.`nomember` = '568787' then 'OVO'
				when storage_transaksi.`nomember` = '1009136' then 'QPON'*/
				when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
				when storage_transaksi.`nomember` in ('582950', '641591') then 'SHOPEE FOOD' /*904831: shopee mall, 641591: shopee food*/
				when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
				when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
				when jenistrx = '1' then 'Walk In'
				else 'Others'
			end
		)
		as channel
		from
			tempo.storage_transaksi
		JOIN tempo.storage_transaksi_detail on
			storage_transaksi.no_trx = storage_transaksi_detail.no_trx
		JOIN master.outlet on
			storage_transaksi.outlet = outlet.kodeoutlet
		join master.kota on
			outlet.kota = kota.id
		LEFT JOIN tempo.`customer` ON
			`storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
			AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
		where
			storage_transaksi.spoil = 0
			AND storage_transaksi.compliment = 0
			AND
		(`storage_transaksi`.`outlet` != 'XC'
				OR `storage_transaksi`.`outlet` != 'XT')
			AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-11-01' AND date '2025-12-31'
			and jenistrx in ('1', '4', '8')
			and storage_transaksi.`status` not in ('0', '')
	/*	and storage_transaksi.`nomember` not in (
		SELECT
			idcustomer
		FROM
			master.`jenis_trxonline`
		WHERE
			idcustomer > 10)*/
			AND `storage_transaksi`.`outlet` in (
			SELECT
				kodeoutlet
			FROM
				master.outlet
			WHERE
				(
    			franchise != 1
					and jenis_outlet in ('', '1', '2', '9')
						and kodeoutlet not in ('XX', 'XB'))
					or kodeoutlet in (
					SELECT
						kodeoutlet
					FROM
						master.`outlet`
					WHERE
						jenis_outlet = '5'
						AND STATUS = '1'))
	union
		select
			storage_transaksi.id,
			0 as kodedb_id,
			storage_transaksi.outlet,
			storage_transaksi.tgl_trx,
			storage_transaksi.waktu,
			storage_transaksi.namapemesan,
			storage_transaksi.tlptujuan,
			storage_transaksi.bruto,
			storage_transaksi.diskon_rupiah,
			storage_transaksi.netto,
			storage_transaksi.remark,
			storage_transaksi.no_trx,
			storage_transaksi.kode_promo,
			outlet.kodeoutlet,
			outlet.namaoutlet,
			storage_transaksi_detail.kode as "sku",
			storage_transaksi_detail.nama as "nama_sku",
			storage_transaksi_detail.harga,
			storage_transaksi_detail.qty,
			(storage_transaksi.diskon_rupiah * (storage_transaksi_detail.qty * storage_transaksi_detail.harga) / storage_transaksi.bruto) as diskon_sku,
			storage_transaksi_detail.qty * storage_transaksi_detail.harga as "sub_total",
			kota.namakota,
			tempo.customer.nama,
			tempo.`customer`.`alamat`,
			tempo.`customer`.`phone`,
			tempo.`customer`.`customer_gender`,
			tempo.`customer`.`customer_dob`,
			(
			case 
				when jenistrx in ('4', '8') then
				    case
					when alamattujuan = '8' then 'B2B'
					when storage_transaksi.remark LIKE '%WE%' then 'Web'
					when storage_transaksi.remark LIKE '%INV2%' then 'App'
					else 'Chococall'
				end
				/*when storage_transaksi.`nomember` = '571580' then 'DANA'*/
				when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
				when storage_transaksi.`nomember` in ('589021', '807227') then 'GRABFOOD' /*589021: Grab food, 807227: Grab for business */
				/*when storage_transaksi.`nomember` = '667098' then 'MAYBANK QRIS'
				when storage_transaksi.`nomember` = '568787' then 'OVO'
				when storage_transaksi.`nomember` = '1009136' then 'QPON'*/
				when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
				when storage_transaksi.`nomember` in ('582950', '641591') then 'SHOPEE FOOD' /*904831: shopee mall, 641591: shopee food*/
				when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
				when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
				when jenistrx = '1' then 'Walk In'
				else 'Others'
			end
		)
		as channel
		from
			sistemsurabaya.storage_transaksi
		JOIN sistemsurabaya.storage_transaksi_detail on
			storage_transaksi.no_trx = storage_transaksi_detail.no_trx
		JOIN master.outlet on
			storage_transaksi.outlet = outlet.kodeoutlet
		join master.kota on
			outlet.kota = kota.id
		LEFT JOIN tempo.`customer` ON
			`storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
			AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
		where
			storage_transaksi.spoil = 0
			AND storage_transaksi.compliment = 0
			AND
		(`storage_transaksi`.`outlet` != 'XC'
				OR `storage_transaksi`.`outlet` != 'XT')
			AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-11-01' AND date '2025-12-31'
			and jenistrx in ('1', '4', '8')
			and storage_transaksi.`status` not in ('0', '')
	/*	and storage_transaksi.`nomember` not in (
		SELECT
			idcustomer
		FROM
			master.`jenis_trxonline`
		WHERE
			idcustomer > 10)*/
			AND `storage_transaksi`.`outlet` in (
			SELECT
				kodeoutlet
			FROM
				master.outlet
			WHERE
				(
    			franchise != 1
					and jenis_outlet in ('', '1', '2', '9')
						and kodeoutlet not in ('XX', 'XB'))
					or kodeoutlet in (
					SELECT
						kodeoutlet
					FROM
						master.`outlet`
					WHERE
						jenis_outlet = '5'
						AND STATUS = '1'))
		) as src
	left join dci.storage_transaksi_channel stc on
		src.id = stc.storage_transaksi_id
		AND src.kodedb_id = stc.kodedb_id
) as storage_transaksi
WHERE
	1 = 1
	AND (LOWER(`storage_transaksi`.`no_trx`) LIKE '%OD20251201165035-B2B%') 
    