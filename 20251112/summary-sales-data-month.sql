select
  tgl_trx as "Tanggal Trx",
  outlet as "Outlet",
  sum(bruto) as "Total Gross Sales",
  sum(diskon_rupiah) as "Total Discount",
  sum(netto) as "Total Nett Sales",
  count(storage_transaksi.no_trx) as "Number of Orders",
  channel as "Channel"
from
  (
    select
      tgl_trx,
      outlet,
      bruto,
      diskon_rupiah,
      netto,
      no_trx,
      CASE
        WHEN coalesce(stc.channel, src.channel) in ('Web', 'App') then 'Web + App'
        WHEN coalesce(stc.channel, src.channel) in ('GOFOOD', 'GRABFOOD', 'SHOPEE FOOD') then 'Food Delivery'
        WHEN coalesce(stc.channel, src.channel) in (
          'ECOMMERCE - Tokopedia',
          'ECOMMERCE - SHOPEE MALL',
          'Tik Tok'
        ) then 'E-Commerce'
        else coalesce(stc.channel, src.channel)
      END as channel
    from
      (
        select
          storage_transaksi.id,
          6 as kodedb_id,
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
              when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
              when storage_transaksi.`nomember` in ('589021', '807227') then 'GRABFOOD'
              when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
              when storage_transaksi.`nomember` in ('582950', '641591') then 'SHOPEE FOOD'
              when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
              when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
              when jenistrx = '1' then 'Walk In'
              else 'Others'
            end
          ) as channel
        from
          dci.storage_transaksi
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
            OR `storage_transaksi`.`outlet` != 'XX'
          )
          AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-11-01'
          AND date '2025-11-30'
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
          storage_transaksi.id,
          0 as kodedb_id,
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
              when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
              when storage_transaksi.`nomember` in ('589021', '807227') then 'GRABFOOD'
              when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
              when storage_transaksi.`nomember` in ('582950', '641591') then 'SHOPEE FOOD'
              when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
              when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
              when jenistrx = '1' then 'Walk In'
              else 'Others'
            end
          ) as channel
        from
          tempo.storage_transaksi
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
            OR `storage_transaksi`.`outlet` != 'XX'
          )
          AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-11-01'
          AND date '2025-11-30'
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
          storage_transaksi.id,
          0 as kodedb_id,
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
              when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
              when storage_transaksi.`nomember` in ('589021', '807227') then 'GRABFOOD'
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
            OR `storage_transaksi`.`outlet` != 'XX'
          )
          AND `storage_transaksi`.`tgl_trx` BETWEEN date '2025-11-01'
          AND date '2025-11-30'
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
      ) as src
      left join dci.storage_transaksi_channel stc on src.id = stc.storage_transaksi_id
      AND src.kodedb_id = stc.kodedb_id
  ) as storage_transaksi
WHERE
  1 = 1
group by
  outlet,
  channel,
  tgl_trx