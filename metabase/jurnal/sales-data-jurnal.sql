SELECT
	CONCAT(outlet.namaoutlet, ',', channel) AS "*Customer",
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
				WHEN storage_transaksi.jenistrx IN ('4', '8') THEN CASE
					WHEN storage_transaksi.alamattujuan = '8' THEN '001'
					WHEN storage_transaksi.remark LIKE '%WE%' THEN '002'
					WHEN storage_transaksi.remark LIKE '%INV2%' THEN '002'
					WHEN storage_transaksi.nomember IN ('904831') THEN '003'
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
	) AS "*InvoiceNumber",
	'' AS "Message",
	'' AS "Memo",
	nama_sku AS "*ProductName",
	'' AS 'Description',
	sum(qty) AS '*Quantity',
	'Pcs' AS '*Unit',
	sum(sub_total) / sum(qty) AS '*UnitPrice',
	'' AS 'ProductDiscountRate(%)',
	sum(diskon_sku) AS 'InvoiceDiscount(value or %)',
	'PPN' AS 'TaxName',
	'11%' AS 'TaxRate(%)',
	'' AS 'ShippingFee',
	'' AS 'WitholdingAccountCode',
	'' AS 'WitholdingAmount(value or %)',
	'' AS '#paid?(yes/no)',
	'' AS '#PaymentMethod',
	'1-10001-999' AS '#PaidToAccountCode',
	CONCAT(outlet.namaoutlet, ';', channel) AS 'Tags (use ; to separate tags)',
	outlet.namaoutlet AS "WarehouseName",
	'' AS '#currency code(example: IDR, USD, CAD)'
FROM
	(
		SELECT
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
			storage_transaksi_detail.kode AS "sku",
			produk.nama AS "nama_sku",
			storage_transaksi_detail.harga * 100 / 111 AS "harga",
			sum(storage_transaksi_detail.qty) AS qty,
			(
				storage_transaksi.diskon_rupiah * (
					sum(storage_transaksi_detail.qty) * storage_transaksi_detail.harga
				) / storage_transaksi.bruto
			) * 100 / 111 AS diskon_sku,
			sum(storage_transaksi_detail.qty) * (storage_transaksi_detail.harga * 100 / 111) AS "sub_total",
			kota.namakota,
			tempo.customer.nama,
			tempo.`customer`.`alamat`,
			tempo.`customer`.`phone`,
			tempo.`customer`.`customer_gender`,
			tempo.`customer`.`customer_dob`,
			CASE
				WHEN parent = ''
				OR parent IS NULL THEN outlet.kodeoutlet
				ELSE parent
			END AS parent_outlet,
			{ { snippet: Channel Dictionary } }
		FROM
			dci.storage_transaksi
			JOIN dci.storage_transaksi_detail ON storage_transaksi.no_trx = storage_transaksi_detail.no_trx
			AND storage_transaksi_detail.`status` = 1
			LEFT JOIN master.produk ON produk.kode = storage_transaksi_detail.kode
			JOIN master.outlet ON storage_transaksi.outlet = outlet.kodeoutlet
			AND outlet.`status_report` = 1
			JOIN master.kota ON outlet.kota = kota.id
			LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
			AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
		WHERE
			storage_transaksi.spoil = 0
			AND storage_transaksi.compliment = 0
			AND (
				`storage_transaksi`.`outlet` != 'XC'
				OR `storage_transaksi`.`outlet` != 'XT'
			) [[AND {{periode}}]]
      AND jenistrx IN ('1', '4', '8')
      AND storage_transaksi.`status` not in('0', '')
      AND `storage_transaksi`.`outlet` IN ({{snippet: Outlet filter}})
    GROUP BY
      no_trx,
      storage_transaksi_detail.kode,
      harga
    UNION
    SELECT
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
      storage_transaksi_detail.kode AS "sku",
      produk.nama AS "nama_sku",
      storage_transaksi_detail.harga,
      storage_transaksi_detail.qty,
      (
        storage_transaksi.diskon_rupiah * (
          storage_transaksi_detail.qty * storage_transaksi_detail.harga
        ) / storage_transaksi.bruto
      ) AS diskon_sku,
      storage_transaksi_detail.qty * storage_transaksi_detail.harga AS "sub_total",
      kota.namakota,
      tempo.customer.nama,
      tempo.`customer`.`alamat`,
      tempo.`customer`.`phone`,
      tempo.`customer`.`customer_gender`,
      tempo.`customer`.`customer_dob`,
      CASE
        WHEN parent = '' THEN outlet.kodeoutlet
        ELSE parent
      END AS parent_outlet,
      {{snippet: Channel Dictionary}}
    FROM
      tempo.storage_transaksi
      JOIN tempo.storage_transaksi_detail ON storage_transaksi.no_trx = storage_transaksi_detail.no_trx
      AND storage_transaksi_detail.status = 1
      LEFT JOIN master.produk ON produk.kode = storage_transaksi_detail.kode
      JOIN master.outlet ON storage_transaksi.outlet = outlet.kodeoutlet
      AND outlet.`status_report` = 1
      JOIN master.kota ON outlet.kota = kota.id
      LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
      AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
    WHERE
      storage_transaksi.spoil = 0
      AND storage_transaksi.compliment = 0
      AND (
        `storage_transaksi`.`outlet` != 'XC'
        OR `storage_transaksi`.`outlet` != 'XT'
      ) [[AND {{periode}}]]
      AND jenistrx IN ('1', '4', '8')
      AND storage_transaksi.`status` not in('0', '')
      AND `storage_transaksi`.`outlet` IN ({{snippet: Outlet filter}})
    UNION
    SELECT
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
      storage_transaksi_detail.kode AS "sku",
      produk.nama AS "nama_sku",
      storage_transaksi_detail.harga,
      storage_transaksi_detail.qty,
      (
        storage_transaksi.diskon_rupiah * (
          storage_transaksi_detail.qty * storage_transaksi_detail.harga
        ) / storage_transaksi.bruto
      ) AS diskon_sku,
      storage_transaksi_detail.qty * storage_transaksi_detail.harga AS "sub_total",
      kota.namakota,
      tempo.customer.nama,
      tempo.`customer`.`alamat`,
      tempo.`customer`.`phone`,
      tempo.`customer`.`customer_gender`,
      tempo.`customer`.`customer_dob`,
      CASE
        WHEN parent = '' THEN outlet.kodeoutlet
        ELSE parent
      END AS parent_outlet,
      {{snippet: Channel Dictionary}}
    FROM
      sistemsurabaya.storage_transaksi
      JOIN sistemsurabaya.storage_transaksi_detail ON storage_transaksi.no_trx = storage_transaksi_detail.no_trx
      AND storage_transaksi_detail.status = 1
      LEFT JOIN master.produk ON produk.kode = storage_transaksi_detail.kode
      JOIN master.outlet ON storage_transaksi.outlet = outlet.kodeoutlet
      AND outlet.`status_report` = 1
      JOIN master.kota ON outlet.kota = kota.id
      LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
      AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
    WHERE
      storage_transaksi.spoil = 0
      AND storage_transaksi.compliment = 0
      AND (
        `storage_transaksi`.`outlet` != 'XC'
        OR `storage_transaksi`.`outlet` != 'XT'
      ) [[AND {{periode}}]]
      AND jenistrx IN ('1', '4', '8')
      AND storage_transaksi.`status` not in('0', '')
      AND `storage_transaksi`.`outlet` IN ({{snippet: Outlet filter}})
  ) AS storage_transaksi
  JOIN master.outlet ON storage_transaksi.parent_outlet = outlet.kodeoutlet
WHERE
  1 = 1 [[AND {{no_trx}}]] [[AND {{outlet}}]] [[AND parent_outlet = {{parent_outlet}}]] [[AND {{channel}}]] [[AND nama_sku = {{nama_sku}}]]
GROUP BY
  nama_sku,
  tgl_trx,
  channel