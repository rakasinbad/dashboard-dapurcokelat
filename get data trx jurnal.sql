select
	CONCAT(outlet.namaoutlet, ',', channel) as "*Customer",
	'' as "Email",
	'' as "BillingAddress",
	'' as "ShippingAddress",
	DATE_FORMAT(tgl_trx, "%d/%m/%Y") as '*InvoiceDate',
	DATE_FORMAT(tgl_trx, "%d/%m/%Y") as '*DueDate',
	'' as "ShippingDate",
	'' as 'ShipVia',
	'' as 'TrackingNo',
	'' as 'CustomerRefNo',
	CONCAT(
		'INV/',
		outlet,
		'/',
		REPLACE(tgl_trx, '-', ''),
		'-',
		(
			CASE
				WHEN storage_transaksi.jenistrx IN ('4', '8') THEN CASE
					WHEN storage_transaksi.alamattujuan = '8' THEN '001'
					WHEN storage_transaksi.remark LIKE '%WE%' THEN '002'
					WHEN storage_transaksi.remark LIKE '%INV2%' THEN '002'
					ELSE '002'
				END
				WHEN storage_transaksi.nomember IN ('568792', '517298') THEN '005'
				WHEN storage_transaksi.nomember IN ('1009134', '589021', '807227') THEN '006'
				WHEN storage_transaksi.nomember = '587249' THEN '004'
				WHEN storage_transaksi.nomember IN ('582950', '641591') THEN '007'
				WHEN storage_transaksi.nomember IN ('904831') THEN '003'
				WHEN storage_transaksi.nomember IN ('898724') THEN '008'
				WHEN jenistrx = '1' THEN '009'
				ELSE '009'
			END
		)
	) as "*InvoiceNumber",
	'' as "Message",
	'' as "Memo",
	nama_sku as "*ProductName",
	'' as 'Description',
	sum(qty) as '*Quantity',
	'Pcs' as '*Unit',
	sum(sub_total) / sum(qty) as '*UnitPrice',
	'' as 'ProductDiscountRate(%)',
	sum(diskon_sku) as 'InvoiceDiscount(value or %)',
	'PPN' as 'TaxName',
	'11%' as 'TaxRate(%)',
	'' as 'ShippingFee',
	'' as 'WitholdingAccountCode',
	'' as 'WitholdingAmount(value or %)',
	'' as '#paid?(yes/no)',
	'' as '#PaymentMethod',
	'1-10001-999' as '#PaidToAccountCode',
	CONCAT(outlet.namaoutlet, ';', channel) as 'Tags (use ; to separate tags)',
	outlet.namaoutlet as "WarehouseName",
	'' as '#currency code(example: IDR, USD, CAD)'
from
	(
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
			outlet.kodeoutlet,
			outlet.namaoutlet,
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
				WHEN parent = ''
				OR parent is null then outlet.kodeoutlet
				else parent
			END as parent_outlet,
			(
				case
					when jenistrx in ('4', '8') then case
						when alamattujuan = '8' then 'B2B'
						when storage_transaksi.remark LIKE '%WE%' then 'Web'
						when storage_transaksi.remark LIKE '%INV2%' then 'App'
						else 'Chococall'
					end
					/*when storage_transaksi.`nomember` = '571580' then 'DANA'*/
					when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
					when storage_transaksi.`nomember` in ('1009134', '589021', '807227') then 'GRABFOOD'
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
			JOIN master.produk on produk.kode = storage_transaksi_detail.kode
			JOIN master.outlet on storage_transaksi.outlet = outlet.kodeoutlet
			join master.kota on outlet.kota = kota.id
			LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
			AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
		where
			storage_transaksi.spoil = 0
			AND storage_transaksi.compliment = 0
			AND (
				`storage_transaksi`.`outlet` != 'XC'
				OR `storage_transaksi`.`outlet` != 'XT'
			)
			AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-01-01'
			AND date '2025-01-31'
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
		GROUP BY
			no_trx,
			storage_transaksi_detail.kode,
			harga
		union
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
			outlet.kodeoutlet,
			outlet.namaoutlet,
			storage_transaksi_detail.kode as "sku",
			produk.nama as "nama_sku",
			storage_transaksi_detail.harga,
			storage_transaksi_detail.qty,
			(
				storage_transaksi.diskon_rupiah * (
					storage_transaksi_detail.qty * storage_transaksi_detail.harga
				) / storage_transaksi.bruto
			) as diskon_sku,
			storage_transaksi_detail.qty * storage_transaksi_detail.harga as "sub_total",
			kota.namakota,
			tempo.customer.nama,
			tempo.`customer`.`alamat`,
			tempo.`customer`.`phone`,
			tempo.`customer`.`customer_gender`,
			tempo.`customer`.`customer_dob`,
			CASE
				WHEN parent = '' then outlet.kodeoutlet
				else parent
			END as parent_outlet,
			(
				case
					when jenistrx in ('4', '8') then case
						when alamattujuan = '8' then 'B2B'
						when storage_transaksi.remark LIKE '%WE%' then 'Web'
						when storage_transaksi.remark LIKE '%INV2%' then 'App'
						else 'Chococall'
					end
					/*when storage_transaksi.`nomember` = '571580' then 'DANA'*/
					when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
					when storage_transaksi.`nomember` in ('1009134', '589021', '807227') then 'GRABFOOD'
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
			tempo.storage_transaksi
			JOIN tempo.storage_transaksi_detail on storage_transaksi.no_trx = storage_transaksi_detail.no_trx
			JOIN master.produk on produk.kode = storage_transaksi_detail.kode
			JOIN master.outlet on storage_transaksi.outlet = outlet.kodeoutlet
			join master.kota on outlet.kota = kota.id
			LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
			AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
		where
			storage_transaksi.spoil = 0
			AND storage_transaksi.compliment = 0
			AND (
				`storage_transaksi`.`outlet` != 'XC'
				OR `storage_transaksi`.`outlet` != 'XT'
			)
			AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-01-01'
			AND date '2025-01-31'
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
		union
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
			outlet.kodeoutlet,
			outlet.namaoutlet,
			storage_transaksi_detail.kode as "sku",
			produk.nama as "nama_sku",
			storage_transaksi_detail.harga,
			storage_transaksi_detail.qty,
			(
				storage_transaksi.diskon_rupiah * (
					storage_transaksi_detail.qty * storage_transaksi_detail.harga
				) / storage_transaksi.bruto
			) as diskon_sku,
			storage_transaksi_detail.qty * storage_transaksi_detail.harga as "sub_total",
			kota.namakota,
			tempo.customer.nama,
			tempo.`customer`.`alamat`,
			tempo.`customer`.`phone`,
			tempo.`customer`.`customer_gender`,
			tempo.`customer`.`customer_dob`,
			CASE
				WHEN parent = '' then outlet.kodeoutlet
				else parent
			END as parent_outlet,
			(
				case
					when jenistrx in ('4', '8') then case
						when alamattujuan = '8' then 'B2B'
						when storage_transaksi.remark LIKE '%WE%' then 'Web'
						when storage_transaksi.remark LIKE '%INV2%' then 'App'
						else 'Chococall'
					end
					/*when storage_transaksi.`nomember` = '571580' then 'DANA'*/
					when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
					when storage_transaksi.`nomember` in ('1009134', '589021', '807227') then 'GRABFOOD'
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
			sistemsurabaya.storage_transaksi
			JOIN sistemsurabaya.storage_transaksi_detail on storage_transaksi.no_trx = storage_transaksi_detail.no_trx
			JOIN master.produk on produk.kode = storage_transaksi_detail.kode
			JOIN master.outlet on storage_transaksi.outlet = outlet.kodeoutlet
			join master.kota on outlet.kota = kota.id
			LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
			AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
		where
			storage_transaksi.spoil = 0
			AND storage_transaksi.compliment = 0
			AND (
				`storage_transaksi`.`outlet` != 'XC'
				OR `storage_transaksi`.`outlet` != 'XT'
			)
			AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-01-01'
			AND date '2025-01-31'
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
	) as storage_transaksi
	join master.outlet on storage_transaksi.parent_outlet = outlet.kodeoutlet
WHERE
	1 = 1
	AND (`storage_transaksi`.`outlet` = 'JGJ')
group by
	nama_sku,
	tgl_trx,
	channel