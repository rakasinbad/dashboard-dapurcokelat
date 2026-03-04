-- https://dashboard.dapurcokelat.com/question/123-summary-sales-data-daily-pie-chart?periode=2025-07-01~2025-07-31&outlet=&channel=Walk%20In
SELECT
  sum(bruto) AS "Total Gross Sales",
  sum(diskon_rupiah) AS "Total Discount",
  sum(netto) AS "Total Nett Sales",
  count(storage_transaksi.no_trx) AS "Number of Orders",
  channel AS "Channel"
FROM
  (
    SELECT
      tgl_trx,
      outlet,
      bruto,
      diskon_rupiah,
      netto,
      no_trx,
      CASE
        WHEN coalesce(stc.channel, src.channel) IN ('Web', 'App') THEN 'Web + App'
        WHEN coalesce(stc.channel, src.channel) IN ('GOFOOD', 'GRABFOOD', 'SHOPEE FOOD')
        AND src.channel != 'Walk In' THEN 'Food Delivery'
        WHEN coalesce(stc.channel, src.channel) IN (
          'ECOMMERCE - Tokopedia',
          'ECOMMERCE - SHOPEE MALL',
          'Tik Tok'
        ) THEN 'E-Commerce'
        WHEN coalesce(src.channel = 'Walk In') THEN 'Walk In'
        ELSE coalesce(stc.channel, src.channel)
      END AS channel
    FROM
      (
        SELECT
          storage_transaksi.id,
          6 AS kodedb_id,
          storage_transaksi.outlet,
          storage_transaksi.tgl_trx,
          storage_transaksi.no_trx,
          storage_transaksi.namapemesan,
          storage_transaksi.tlptujuan,
          storage_transaksi.bruto,
          storage_transaksi.diskon_rupiah,
          storage_transaksi.netto,
          storage_transaksi.remark,
          outlet.kodeoutlet,
          outlet.namaoutlet,
          kota.namakota,
          tempo.customer.nama,
          tempo.`customer`.`alamat`,
          tempo.`customer`.`phone`,
          tempo.`customer`.`customer_gender`,
          tempo.`customer`.`customer_dob`,
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
        FROM
          dci.storage_transaksi
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
            OR `storage_transaksi`.`outlet` != 'XX'
          )
          AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-07-01'
          AND date '2025-07-31'
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
        UNION
        SELECT
          storage_transaksi.id,
          0 AS kodedb_id,
          storage_transaksi.outlet,
          storage_transaksi.tgl_trx,
          storage_transaksi.no_trx,
          storage_transaksi.namapemesan,
          storage_transaksi.tlptujuan,
          storage_transaksi.bruto,
          storage_transaksi.diskon_rupiah,
          storage_transaksi.netto,
          storage_transaksi.remark,
          outlet.kodeoutlet,
          outlet.namaoutlet,
          kota.namakota,
          tempo.customer.nama,
          tempo.`customer`.`alamat`,
          tempo.`customer`.`phone`,
          tempo.`customer`.`customer_gender`,
          tempo.`customer`.`customer_dob`,
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
        FROM
          tempo.storage_transaksi
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
            OR `storage_transaksi`.`outlet` != 'XX'
          )
          AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-07-01'
          AND date '2025-07-31'
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
        UNION
        SELECT
          storage_transaksi.id,
          0 AS kodedb_id,
          storage_transaksi.outlet,
          storage_transaksi.tgl_trx,
          storage_transaksi.no_trx,
          storage_transaksi.namapemesan,
          storage_transaksi.tlptujuan,
          storage_transaksi.bruto,
          storage_transaksi.diskon_rupiah,
          storage_transaksi.netto,
          storage_transaksi.remark,
          outlet.kodeoutlet,
          outlet.namaoutlet,
          kota.namakota,
          tempo.customer.nama,
          tempo.`customer`.`alamat`,
          tempo.`customer`.`phone`,
          tempo.`customer`.`customer_gender`,
          tempo.`customer`.`customer_dob`,
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
        FROM
          sistemsurabaya.storage_transaksi
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
            OR `storage_transaksi`.`outlet` != 'XX'
          )
          AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-07-01'
          AND date '2025-07-31'
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
      ) AS src
      LEFT JOIN dci.storage_transaksi_channel stc ON src.id = stc.storage_transaksi_id
      AND src.kodedb_id = stc.kodedb_id
  ) AS storage_transaksi
WHERE
  1 = 1
  AND (`storage_transaksi`.`channel` = 'Walk In')
GROUP BY
  channel