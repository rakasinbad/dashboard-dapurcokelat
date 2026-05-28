WITH RawData AS (
	-- ==========================================
	-- 1. GATHER RAW DATA (DCI, TEMPO, SURABAYA)
	-- ==========================================
	SELECT
		storage_transaksi.outlet,
		storage_transaksi.tgl_trx,
		storage_transaksi.compliment,
		storage_transaksi.member,
		storage_transaksi.remark,
		storage_transaksi.no_trx,
		storage_transaksi.jenistrx,
		storage_transaksi.nomember,
		storage_transaksi.alamattujuan,
		storage_transaksi.diskon_rupiah,
		storage_transaksi.bruto,
		o.kodeoutlet,
		o.namaoutlet,
		o.parent,
		STD.kode AS sku,
		p.nama AS nama_sku,
		STD.harga AS raw_harga,
		STD.qty,
		od.kodeorder AS kodeorderdlv,
		storage_transaksi.voucher,
		storage_transaksi.spoil,
		(
			CASE
				WHEN storage_transaksi.jenistrx IN ('4', '8') THEN CASE
					WHEN storage_transaksi.alamattujuan = '8'
					OR storage_transaksi.outlet = 'b2b' THEN 'B2B'
					WHEN (
						storage_transaksi.remark LIKE '%WE%'
						and storage_transaksi.remark NOT LIKE '%SHP%'
					) THEN 'Web'
					WHEN storage_transaksi.remark LIKE '%INV2%' THEN 'App'
					WHEN storage_transaksi.nomember = '904831' THEN 'ECOMMERCE - SHOPEE MALL'
					WHEN storage_transaksi.nomember = '898724' THEN 'Tik Tok'
					WHEN storage_transaksi.nomember = '587249' THEN 'ECOMMERCE - Tokopedia'
					when storage_transaksi.nomember in ('1294133') then 'TikTok Go'
					when storage_transaksi.nomember in ('1294145') then 'Grab Dine Out'
					ELSE 'Chococall'
				END
				WHEN storage_transaksi.nomember IN ('568792', '517298') THEN 'GOFOOD'
				WHEN storage_transaksi.nomember IN ('589021', '807227') THEN 'GRABFOOD'
				WHEN storage_transaksi.nomember = '587249' THEN 'ECOMMERCE - Tokopedia'
				WHEN storage_transaksi.nomember IN ('582950', '641591') THEN 'SHOPEE FOOD'
				WHEN storage_transaksi.nomember = '904831' THEN 'ECOMMERCE - SHOPEE MALL'
				WHEN storage_transaksi.nomember = '898724' THEN 'Tik Tok'
				when storage_transaksi.nomember in ('1294133') then 'TikTok Go'
				when storage_transaksi.nomember in ('1294145') then 'Grab Dine Out'
				WHEN storage_transaksi.jenistrx = '1' THEN 'Walk In'
				ELSE 'Others'
			END
		) AS channel
	FROM
		dci.storage_transaksi
		JOIN dci.storage_transaksi_detail STD ON storage_transaksi.no_trx = STD.no_trx
		AND STD.`status` = 1
		LEFT JOIN master.produk p ON p.kode = STD.kode
		JOIN master.outlet o ON storage_transaksi.outlet = o.kodeoutlet
		AND o.`status_report` = 1
		JOIN master.kota k ON o.kota = k.id
		LEFT JOIN tempo.`customer` c ON storage_transaksi.`nomember_app` = c.`nomember`
		AND storage_transaksi.`nomember` = c.`id`
		LEFT JOIN master.orderdlv od ON od.trx_no = storage_transaksi.no_trx
	WHERE
		1 = 1
		AND storage_transaksi.outlet NOT IN('XC', 'XT')
		AND `storage_transaksi`.`tgl_trx` BETWEEN date '2026-04-01'
		AND date '2026-04-30'
		AND storage_transaksi.jenistrx IN ('1', '4', '8')
		AND storage_transaksi.`status` NOT IN('0', '')
		AND storage_transaksi.outlet IN (
			SELECT
				kode
			FROM
				dci.outlet
			WHERE
				(
					franchise != 1
					AND jenis in ('', '1', '2', '9')
					and kode not in ('XX', 'XB')
				)
				or kode in (
					SELECT
						kode
					FROM
						dci.`outlet`
					WHERE
						jenis = '5'
						AND STATUS = '1'
				)
		)
	UNION
	ALL
	SELECT
		storage_transaksi.outlet,
		storage_transaksi.tgl_trx,
		storage_transaksi.compliment,
		storage_transaksi.member,
		storage_transaksi.remark,
		storage_transaksi.no_trx,
		storage_transaksi.jenistrx,
		storage_transaksi.nomember,
		storage_transaksi.alamattujuan,
		storage_transaksi.diskon_rupiah,
		storage_transaksi.bruto,
		o.kodeoutlet,
		o.namaoutlet,
		o.parent,
		STD.kode AS sku,
		p.nama AS nama_sku,
		STD.harga AS raw_harga,
		STD.qty,
		od.kodeorder AS kodeorderdlv,
		storage_transaksi.voucher,
		storage_transaksi.spoil,
		(
			CASE
				WHEN storage_transaksi.jenistrx IN ('4', '8') THEN CASE
					WHEN storage_transaksi.alamattujuan = '8'
					OR storage_transaksi.outlet = 'b2b' THEN 'B2B'
					WHEN (
						storage_transaksi.remark LIKE '%WE%'
						and storage_transaksi.remark NOT LIKE '%SHP%'
					) THEN 'Web'
					WHEN storage_transaksi.remark LIKE '%INV2%' THEN 'App'
					WHEN storage_transaksi.nomember = '904831' THEN 'ECOMMERCE - SHOPEE MALL'
					WHEN storage_transaksi.nomember = '898724' THEN 'Tik Tok'
					WHEN storage_transaksi.nomember = '587249' THEN 'ECOMMERCE - Tokopedia'
					when storage_transaksi.nomember in ('1294133') then 'TikTok Go'
					when storage_transaksi.nomember in ('1294145') then 'Grab Dine Out'
					ELSE 'Chococall'
				END
				WHEN storage_transaksi.nomember IN ('568792', '517298') THEN 'GOFOOD'
				WHEN storage_transaksi.nomember IN ('589021', '807227') THEN 'GRABFOOD'
				WHEN storage_transaksi.nomember = '587249' THEN 'ECOMMERCE - Tokopedia'
				WHEN storage_transaksi.nomember IN ('582950', '641591') THEN 'SHOPEE FOOD'
				WHEN storage_transaksi.nomember = '904831' THEN 'ECOMMERCE - SHOPEE MALL'
				WHEN storage_transaksi.nomember = '898724' THEN 'Tik Tok'
				when storage_transaksi.nomember in ('1294133') then 'TikTok Go'
				when storage_transaksi.nomember in ('1294145') then 'Grab Dine Out'
				WHEN storage_transaksi.jenistrx = '1' THEN 'Walk In'
				ELSE 'Others'
			END
		) AS channel
	FROM
		tempo.storage_transaksi
		JOIN tempo.storage_transaksi_detail STD ON storage_transaksi.no_trx = STD.no_trx
		AND STD.`status` = 1
		LEFT JOIN master.produk p ON p.kode = STD.kode
		JOIN master.outlet o ON storage_transaksi.outlet = o.kodeoutlet
		AND o.`status_report` = 1
		JOIN master.kota k ON o.kota = k.id
		LEFT JOIN tempo.`customer` c ON storage_transaksi.`nomember_app` = c.`nomember`
		AND storage_transaksi.`nomember` = c.`id`
		LEFT JOIN master.orderdlv od ON od.trx_no = storage_transaksi.no_trx
	WHERE
		1 = 1
		AND storage_transaksi.outlet NOT IN('XC', 'XT')
		AND `storage_transaksi`.`tgl_trx` BETWEEN date '2026-04-01'
		AND date '2026-04-30'
		AND storage_transaksi.jenistrx IN ('1', '4', '8')
		AND storage_transaksi.`status` NOT IN('0', '')
		AND storage_transaksi.outlet IN (
			SELECT
				kode
			FROM
				dci.outlet
			WHERE
				(
					franchise != 1
					AND jenis in ('', '1', '2', '9')
					and kode not in ('XX', 'XB')
				)
				or kode in (
					SELECT
						kode
					FROM
						dci.`outlet`
					WHERE
						jenis = '5'
						AND STATUS = '1'
				)
		)
	UNION
	ALL
	SELECT
		storage_transaksi.outlet,
		storage_transaksi.tgl_trx,
		storage_transaksi.compliment,
		storage_transaksi.member,
		storage_transaksi.remark,
		storage_transaksi.no_trx,
		storage_transaksi.jenistrx,
		storage_transaksi.nomember,
		storage_transaksi.alamattujuan,
		storage_transaksi.diskon_rupiah,
		storage_transaksi.bruto,
		o.kodeoutlet,
		o.namaoutlet,
		o.parent,
		STD.kode AS sku,
		p.nama AS nama_sku,
		STD.harga AS raw_harga,
		STD.qty,
		od.kodeorder AS kodeorderdlv,
		storage_transaksi.voucher,
		storage_transaksi.spoil,
		(
			CASE
				WHEN storage_transaksi.jenistrx IN ('4', '8') THEN CASE
					WHEN storage_transaksi.alamattujuan = '8'
					OR storage_transaksi.outlet = 'b2b' THEN 'B2B'
					WHEN (
						storage_transaksi.remark LIKE '%WE%'
						and storage_transaksi.remark NOT LIKE '%SHP%'
					) THEN 'Web'
					WHEN storage_transaksi.remark LIKE '%INV2%' THEN 'App'
					WHEN storage_transaksi.nomember = '904831' THEN 'ECOMMERCE - SHOPEE MALL'
					WHEN storage_transaksi.nomember = '898724' THEN 'Tik Tok'
					WHEN storage_transaksi.nomember = '587249' THEN 'ECOMMERCE - Tokopedia'
					when storage_transaksi.nomember in ('1294133') then 'TikTok Go'
					when storage_transaksi.nomember in ('1294145') then 'Grab Dine Out'
					ELSE 'Chococall'
				END
				WHEN storage_transaksi.nomember IN ('568792', '517298') THEN 'GOFOOD'
				WHEN storage_transaksi.nomember IN ('589021', '807227') THEN 'GRABFOOD'
				WHEN storage_transaksi.nomember = '587249' THEN 'ECOMMERCE - Tokopedia'
				WHEN storage_transaksi.nomember IN ('582950', '641591') THEN 'SHOPEE FOOD'
				WHEN storage_transaksi.nomember = '904831' THEN 'ECOMMERCE - SHOPEE MALL'
				WHEN storage_transaksi.nomember = '898724' THEN 'Tik Tok'
				when storage_transaksi.nomember in ('1294133') then 'TikTok Go'
				when storage_transaksi.nomember in ('1294145') then 'Grab Dine Out'
				WHEN storage_transaksi.jenistrx = '1' THEN 'Walk In'
				ELSE 'Others'
			END
		) AS channel
	FROM
		sistemsurabaya.storage_transaksi
		JOIN sistemsurabaya.storage_transaksi_detail STD ON storage_transaksi.no_trx = STD.no_trx
		AND STD.`status` = 1
		LEFT JOIN master.produk p ON p.kode = STD.kode
		JOIN master.outlet o ON storage_transaksi.outlet = o.kodeoutlet
		AND o.`status_report` = 1
		JOIN master.kota k ON o.kota = k.id
		LEFT JOIN tempo.`customer` c ON storage_transaksi.`nomember_app` = c.`nomember`
		AND storage_transaksi.`nomember` = c.`id`
		LEFT JOIN master.orderdlv od ON od.trx_no = storage_transaksi.no_trx
	WHERE
		1 = 1
		AND storage_transaksi.outlet NOT IN('XC', 'XT')
		AND `storage_transaksi`.`tgl_trx` BETWEEN date '2026-04-01'
		AND date '2026-04-30'
		AND storage_transaksi.jenistrx IN ('1', '4', '8')
		AND storage_transaksi.`status` NOT IN('0', '')
		AND storage_transaksi.outlet IN (
			SELECT
				kode
			FROM
				dci.outlet
			WHERE
				(
					franchise != 1
					AND jenis in ('', '1', '2', '9')
					and kode not in ('XX', 'XB')
				)
				or kode in (
					SELECT
						kode
					FROM
						dci.`outlet`
					WHERE
						jenis = '5'
						AND STATUS = '1'
				)
		)
),
ProcessedMath AS (
	-- ==========================================
	-- 2. DO THE MATH ONCE FOR ALL DATA
	-- ==========================================
	SELECT
		*,
		(
			CASE
				WHEN parent = ''
				OR parent IS NULL THEN kodeoutlet
				ELSE parent
			END
		) AS parent_outlet,
		(
			CASE
				WHEN compliment = 0 THEN qty * (raw_harga * 100 / 111)
				ELSE 0
			END
		) AS sub_total,
		(
			CASE
				WHEN compliment = 0 THEN qty * raw_harga
				ELSE 0
			END
		) AS sub_total_after_tax,
		(
			(diskon_rupiah * (qty * raw_harga) / bruto) * 100 / 111
		) AS diskon_sku
	FROM
		RawData
) -- ==========================================
-- 3. FORMAT THE FINAL INVOICE OUTPUT
-- ==========================================
SELECT
	CONCAT(mo.namaoutlet, ',', channel) AS "*Customer",
	'' AS "Email",
	'' AS "BillingAddress",
	'' AS "ShippingAddress",
	DATE_FORMAT(tgl_trx, "%d/%m/%Y") AS '*InvoiceDate',
	DATE_FORMAT(tgl_trx, "%d/%m/%Y") AS '*DueDate',
	'' AS "ShippingDate",
	'' AS 'ShipVia',
	'' AS 'TrackingNo',
	'' AS 'CustomerRefNo',
	CONCAT(
		'INV/',
		outlet,
		'/',
		REPLACE (tgl_trx, '-', ''),
		'-',
		(
			CASE
				WHEN jenistrx IN ('4', '8') THEN CASE
					WHEN alamattujuan = '8' THEN '001'
					WHEN remark LIKE '%WE%'
					OR remark LIKE '%INV2%' THEN '002'
					WHEN nomember IN ('904831') THEN '003'
					ELSE '002'
				END
				WHEN nomember IN ('568792', '517298') THEN '005'
				WHEN nomember IN ('1009134', '589021', '807227') THEN '006'
				WHEN nomember = '587249' THEN '004'
				WHEN nomember IN ('582950', '641591') THEN '007'
				WHEN nomember IN ('904831') THEN '003'
				WHEN nomember IN ('898724') THEN '008'
				ELSE '009'
			END
		)
	) AS "*InvoiceNumber",
	'' AS "Message",
	'' AS "Memo",
	nama_sku AS "*ProductName",
	'' AS 'Description',
	qty AS '*Quantity',
	'Pcs' AS '*Unit',
	sub_total / qty AS '*UnitPrice',
	'' AS 'ProductDiscountRate(%)',
	diskon_sku AS 'InvoiceDiscount(value or %)',
	'PPN' AS 'TaxName',
	'11%' AS 'TaxRate(%)',
	'' AS 'ShippingFee',
	'' AS 'WitholdingAccountCode',
	'' AS 'WitholdingAmount(value or %)',
	'' AS '#paid?(yes/no)',
	(
		CASE
			WHEN member > 0 THEN 'Credit Customer'
			WHEN alamattujuan = '8' THEN '001'
			WHEN remark LIKE '%WE%'
			OR remark LIKE '%INV2%' THEN '002'
			WHEN nomember IN ('904831') THEN '003'
			ELSE ''
		END
	) AS '#PaymentMethod',
	'1-10001-999' AS '#PaidToAccountCode',
	CONCAT(mo.namaoutlet, ';', channel) AS 'Tags (use ; to separate tags)',
	mo.namaoutlet AS "WarehouseName",
	'' AS '#currency code(example: IDR, USD, CAD)',
	kodeorderdlv AS "DeliveryOrderNumber",
	no_trx "No, Transaksi",
	sub_total "Sub Total Before PPN",
	sub_total_after_tax - sub_total "PPN",
	remark "Remark",
	voucher "Voucher",
	compliment "Compliment",
	spoil "Spoil",
	sub_total_after_tax "Sub Total After PPN"
FROM
	ProcessedMath pm
	JOIN master.outlet mo ON pm.parent_outlet = mo.kodeoutlet
WHERE
	1 = 1
	AND pm.parent_outlet = 'AP'
	AND pm.sub_total > -1;