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
			WHEN storage_transaksi.member > 0 THEN 'Credit Customer'
			WHEN storage_transaksi.alamattujuan = '8' THEN '001'
			WHEN storage_transaksi.remark LIKE '%WE%' THEN '002'
			WHEN storage_transaksi.remark LIKE '%INV2%' THEN '002'
			WHEN storage_transaksi.nomember IN ('904831') THEN '003'
			ELSE ''
		END
	) AS '#PaymentMethod',
	'1-10001-999' AS '#PaidToAccountCode',
	CONCAT(outlet.namaoutlet, ';', channel) AS 'Tags (use ; to separate tags)',
	outlet.namaoutlet AS "WarehouseName",
	'' AS '#currency code(example: IDR, USD, CAD)',
	kodeorderdlv AS "DeliveryOrderNumber",
	no_trx,
	qty,
	sub_total,
	diskon_sku AS diskon_sku,
	compliment,
	sub_total_after_tax
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
			storage_transaksi.compliment,
			storage_transaksi.member,
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
			storage_transaksi_detail.qty AS qty,
			(
				CASE
					WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.harga * 100 / 111
					ELSE 0
				END
			) AS "harga",
			storage_transaksi_detail.qty AS qty,
			(
				storage_transaksi.diskon_rupiah * (
					storage_transaksi_detail.qty * storage_transaksi_detail.harga
				) / storage_transaksi.bruto
			) * 100 / 111 AS diskon_sku,
			(
				CASE
					WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.qty * (storage_transaksi_detail.harga * 100 / 111)
					ELSE 0
				END
			) AS "sub_total",
			(
				CASE
					WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.qty * storage_transaksi_detail.harga
					ELSE 0
				END
			) AS sub_total_after_tax,
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
			od.kodeorder kodeorderdlv,
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
			LEFT JOIN master.orderdlv od ON od.trx_no = storage_transaksi.no_trx
		WHERE
			1 + 1
			AND (
				`storage_transaksi`.`outlet` != 'XC'
				OR `storage_transaksi`.`outlet` != 'XT'
			) [[AND {{periode}}]]
      AND jenistrx IN ('1', '4', '8')
      AND storage_transaksi.`status` not in('0', '')
      AND `storage_transaksi`.`outlet` IN ({{snippet: Outlet filter}})
    UNION ALL
    SELECT
      storage_transaksi.outlet,
      storage_transaksi.tgl_trx,
      storage_transaksi.namapemesan,
      storage_transaksi.tlptujuan,
      storage_transaksi.bruto,
      storage_transaksi.diskon_rupiah,
      storage_transaksi.netto,
      storage_transaksi.compliment,
      storage_transaksi.member,
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
      (
        CASE
          WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.harga * 100 / 111
          ELSE 0
        END
      ) AS "harga",
      storage_transaksi_detail.qty AS qty,
      (
        storage_transaksi.diskon_rupiah * (
          storage_transaksi_detail.qty * storage_transaksi_detail.harga
        ) / storage_transaksi.bruto
      ) * 100 / 111 AS diskon_sku,
      (
        CASE
          WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.qty * (storage_transaksi_detail.harga * 100 / 111)
          ELSE 0
        END
      ) AS "sub_total",
      (
        CASE
          WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.qty * storage_transaksi_detail.harga
          ELSE 0
        END
      ) AS sub_total_after_tax,
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
      od.kodeorder kodeorderdlv,
      {{ snippet: Channel Dictionary }}
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
      LEFT JOIN master.orderdlv od ON od.trx_no = storage_transaksi.no_trx
    WHERE
      1 + 1
      AND (
        `storage_transaksi`.`outlet` != 'XC'
        OR `storage_transaksi`.`outlet` != 'XT'
      ) [[AND {{periode}}]]
      AND jenistrx IN ('1', '4', '8')
      AND storage_transaksi.`status` not in('0', '')
      AND `storage_transaksi`.`outlet` IN ({{snippet: Outlet filter}})
    UNION ALL
    SELECT
      storage_transaksi.outlet,
      storage_transaksi.tgl_trx,
      storage_transaksi.namapemesan,
      storage_transaksi.tlptujuan,
      storage_transaksi.bruto,
      storage_transaksi.diskon_rupiah,
      storage_transaksi.netto,
      storage_transaksi.compliment,
      storage_transaksi.member,
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
      (
        CASE
          WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.harga * 100 / 111
          ELSE 0
        END
      ) AS "harga",
      storage_transaksi_detail.qty AS qty,
      (
        storage_transaksi.diskon_rupiah * (
          storage_transaksi_detail.qty * storage_transaksi_detail.harga
        ) / storage_transaksi.bruto
      ) * 100 / 111 AS diskon_sku,
      (
        CASE
          WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.qty * (storage_transaksi_detail.harga * 100 / 111)
          ELSE 0
        END
      ) AS "sub_total",
      (
        CASE
          WHEN storage_transaksi.compliment = 0 THEN storage_transaksi_detail.qty * storage_transaksi_detail.harga
          ELSE 0
        END
      ) AS sub_total_after_tax,
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
      od.kodeorder kodeorderdlv,
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
      LEFT JOIN master.orderdlv od ON od.trx_no = storage_transaksi.no_trx
    WHERE
      1 + 1
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
  AND storage_transaksi.sub_total > 0