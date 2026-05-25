select
  no_trx
from
  (
    SELECT
      no_trx,
      sub_total,
      diskon_sku,
      sub_total - diskon_sku AS nett_sales,
      storage_transaksi.outlet AS "Outlet",
      storage_transaksi.namaoutlet AS "Nama Outlet",
      storage_transaksi.namakota AS "Wilayah",
      storage_transaksi.tgl_trx AS "Tanggal Trx",
      date_format(waktu, '%H:%i:%S') AS "Waktu Trx",
      no_trx AS "No. Trx",
      storage_transaksi.kode_promo AS "Kode Promo",
      namapemesan AS "Nama Customer",
      tlptujuan AS "Phone",
      storage_transaksi.remark AS "Remark",
      kode AS "SKU",
      nama_sku AS "Nama SKU",
      kategori.kategori AS "SKU Category",
      case
        when right(left(kode, 6), 1) = '1' then '20x20'
        when right(left(kode, 6), 1) = '2' then '20x40'
        when right(left(kode, 6), 1) = '3' then '30x40'
        when right(left(kode, 6), 1) = '4' then '40x60'
        when right(left(kode, 6), 1) = '5' then 'Ind'
        when right(left(kode, 6), 1) = '6' then '10x20'
        else 'Other'
      end AS 'SKU Size',
      harga AS "Price",
      qty AS "Qty",
      sub_total AS "Gross Sales",
      diskon_sku AS "Discount",
      sub_total - diskon_sku AS "Nett Sales",
      channel AS 'Channel',
      od.payment_transaction_id AS "PG Transaction Id",
      CASE
        WHEN od.api = 'transfer' THEN 'Faspay'
        WHEN od.api = 'Payment Link' THEN 'Singa Pay'
        ELSE '-'
      END AS "Nama Payment Gateaway",
      od.delcharge AS "Ongkir",
      payment_status as "Payment Status"
    FROM
      (
        SELECT
          tgl_trx,
          waktu,
          outlet,
          namaoutlet,
          kode,
          nama_sku,
          sub_total,
          qty,
          diskon_sku,
          coalesce(stc.channel, src.channel) AS channel,
          kode_promo,
          namapemesan,
          tlptujuan,
          remark,
          namakota,
          no_trx,
          harga,
          payment_status
        FROM
          (
            SELECT
              storage_transaksi.id,
              6 AS kodedb_id,
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
              storage_transaksi_detail.kode AS "kode",
              storage_transaksi_detail.nama AS "nama_sku",
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
              IF(cl.`status` = '1', 'Unpaid', 'Paid') AS payment_status,
              (
                case
                  when jenistrx in ('4', '8') then case
                    when alamattujuan = '8' then 'B2B'
                    WHEN storage_transaksi.outlet = 'b2b' THEN 'B2B'
                    when (
                      storage_transaksi.remark LIKE '%WE%'
                      and storage_transaksi.remark NOT LIKE '%SHP%'
                    ) then 'Web'
                    when storage_transaksi.remark LIKE '%INV2%' then 'App'
                    when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
                    when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
                    when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
                    when storage_transaksi.`nomember` in ('1294133') then 'TikTok Go'
                    when storage_transaksi.`nomember` in ('1294145') then 'Grab Dine Out'
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
                  when storage_transaksi.`nomember` in ('1294133') then 'TikTok Go'
                  when storage_transaksi.`nomember` in ('1294145') then 'Grab Dine Out'
                  when jenistrx = '1' then 'Walk In'
                  else 'Others'
                end
              ) as channel
            FROM
              dci.storage_transaksi
              LEFT JOIN dci.`creditlist` AS cl ON no_trx = trxno
              AND storage_transaksi.status > 0
              JOIN dci.storage_transaksi_detail ON storage_transaksi.no_trx = storage_transaksi_detail.no_trx
              JOIN master.outlet ON storage_transaksi.outlet = outlet.kodeoutlet
              JOIN master.kota ON outlet.kota = kota.id
              LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
              AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
            WHERE
              storage_transaksi.spoil = 0
              AND storage_transaksi.compliment = 0
              AND (
                `storage_transaksi`.`outlet` != 'XC'
                OR `storage_transaksi`.`outlet` != 'XT'
              )
              AND `storage_transaksi`.`tgl_trx` BETWEEN date '2026-04-01'
              AND date '2026-04-30'
              AND jenistrx IN ('1', '4', '8')
              AND storage_transaksi.`status` not in('0', '')
              /*	and storage_transaksi.`nomember` not in (
               SELECT
               idcustomer
               FROM
               master.`jenis_trxonline`
               WHERE
               idcustomer > 10)*/
              AND `storage_transaksi`.`outlet` IN (
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
                      AND franchise != 1
                  )
              )
            UNION
            SELECT
              storage_transaksi.id,
              0 AS kodedb_id,
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
              storage_transaksi_detail.kode AS "sku",
              storage_transaksi_detail.nama AS "nama_sku",
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
              'Paid' as payment_status,
              (
                case
                  when jenistrx in ('4', '8') then case
                    when alamattujuan = '8' then 'B2B'
                    WHEN storage_transaksi.outlet = 'b2b' THEN 'B2B'
                    when (
                      storage_transaksi.remark LIKE '%WE%'
                      and storage_transaksi.remark NOT LIKE '%SHP%'
                    ) then 'Web'
                    when storage_transaksi.remark LIKE '%INV2%' then 'App'
                    when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
                    when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
                    when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
                    when storage_transaksi.`nomember` in ('1294133') then 'TikTok Go'
                    when storage_transaksi.`nomember` in ('1294145') then 'Grab Dine Out'
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
                  when storage_transaksi.`nomember` in ('1294133') then 'TikTok Go'
                  when storage_transaksi.`nomember` in ('1294145') then 'Grab Dine Out'
                  when jenistrx = '1' then 'Walk In'
                  else 'Others'
                end
              ) as channel
            FROM
              tempo.storage_transaksi
              JOIN tempo.storage_transaksi_detail ON storage_transaksi.no_trx = storage_transaksi_detail.no_trx
              JOIN master.outlet ON storage_transaksi.outlet = outlet.kodeoutlet
              JOIN master.kota ON outlet.kota = kota.id
              LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
              AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
            WHERE
              storage_transaksi.spoil = 0
              AND storage_transaksi.compliment = 0
              AND (
                `storage_transaksi`.`outlet` != 'XC'
                OR `storage_transaksi`.`outlet` != 'XT'
              )
              AND `storage_transaksi`.`tgl_trx` BETWEEN date '2026-04-01'
              AND date '2026-04-30'
              AND jenistrx IN ('1', '4', '8')
              AND storage_transaksi.`status` not in('0', '')
              /*	and storage_transaksi.`nomember` not in (
               SELECT
               idcustomer
               FROM
               master.`jenis_trxonline`
               WHERE
               idcustomer > 10)*/
              AND `storage_transaksi`.`outlet` IN (
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
                      AND franchise != 1
                  )
              )
            UNION
            SELECT
              storage_transaksi.id,
              0 AS kodedb_id,
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
              storage_transaksi_detail.kode AS "sku",
              storage_transaksi_detail.nama AS "nama_sku",
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
              'Paid' as payment_status,
              (
                case
                  when jenistrx in ('4', '8') then case
                    when alamattujuan = '8' then 'B2B'
                    WHEN storage_transaksi.outlet = 'b2b' THEN 'B2B'
                    when (
                      storage_transaksi.remark LIKE '%WE%'
                      and storage_transaksi.remark NOT LIKE '%SHP%'
                    ) then 'Web'
                    when storage_transaksi.remark LIKE '%INV2%' then 'App'
                    when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
                    when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
                    when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
                    when storage_transaksi.`nomember` in ('1294133') then 'TikTok Go'
                    when storage_transaksi.`nomember` in ('1294145') then 'Grab Dine Out'
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
                  when storage_transaksi.`nomember` in ('1294133') then 'TikTok Go'
                  when storage_transaksi.`nomember` in ('1294145') then 'Grab Dine Out'
                  when jenistrx = '1' then 'Walk In'
                  else 'Others'
                end
              ) as channel
            FROM
              sistemsurabaya.storage_transaksi
              JOIN sistemsurabaya.storage_transaksi_detail ON storage_transaksi.no_trx = storage_transaksi_detail.no_trx
              JOIN master.outlet ON storage_transaksi.outlet = outlet.kodeoutlet
              JOIN master.kota ON outlet.kota = kota.id
              LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
              AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
            WHERE
              storage_transaksi.spoil = 0
              AND storage_transaksi.compliment = 0
              AND (
                `storage_transaksi`.`outlet` != 'XC'
                OR `storage_transaksi`.`outlet` != 'XT'
              )
              AND `storage_transaksi`.`tgl_trx` BETWEEN date '2026-04-01'
              AND date '2026-04-30'
              AND jenistrx IN ('1', '4', '8')
              AND storage_transaksi.`status` not in('0', '')
              /*	and storage_transaksi.`nomember` not in (
               SELECT
               idcustomer
               FROM
               master.`jenis_trxonline`
               WHERE
               idcustomer > 10)*/
              AND `storage_transaksi`.`outlet` IN (
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
                      AND franchise != 1
                  )
              )
          ) AS src
          LEFT JOIN dci.storage_transaksi_channel stc ON src.id = stc.storage_transaksi_id
          AND src.kodedb_id = stc.kodedb_id
      ) AS storage_transaksi
      JOIN master.kategori ON left(kode, 2) = kategori.no
      LEFT JOIN master.orderdlv od ON od.trx_no = storage_transaksi.no_trx
    WHERE
      1 = 1
  ) as data