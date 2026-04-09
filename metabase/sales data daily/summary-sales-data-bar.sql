-- https: / / dashboard.dapurcokelat.com / question ? periode = thismonth & outlet = & channel = 
SELECT
  tgl_trx AS "Tanggal Trx",
  outlet AS "Outlet",
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
        AND src.channel != 'Walk In' THEN src.channel
        WHEN coalesce(src.channel = 'Walk In') THEN 'Walk In'
        ELSE coalesce(src.channel, src.channel)
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
          { { snippet: Channel Dictionary } }
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
          ) [[AND {{periode}}]]
          AND jenistrx IN ('1', '4', '8')
          AND storage_transaksi.`status` not in('0', '')
          /*	and storage_transaksi.`nomember` not in (
          SELECT
          idcustomer
          FROM
          master.`jenis_trxonline`
          WHERE
          idcustomer > 10)*/
          AND `storage_transaksi`.`outlet` IN ({{snippet: Outlet filter}})
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
          {{snippet: Channel Dictionary}}
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
          ) [[AND {{periode}}]]
          AND jenistrx IN ('1', '4', '8')
          AND storage_transaksi.`status` not in('0', '')
          /*	and storage_transaksi.`nomember` not in (
          SELECT
          idcustomer
          FROM
          master.`jenis_trxonline`
          WHERE
          idcustomer > 10)*/
          AND `storage_transaksi`.`outlet` IN ({{snippet: Outlet filter}})
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
          {{snippet: Channel Dictionary}}
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
          ) [[AND {{periode}}]]
          AND jenistrx IN ('1', '4', '8')
          AND storage_transaksi.`status` not in('0', '')
          /*	and storage_transaksi.`nomember` not in (
          SELECT
          idcustomer
          FROM
          master.`jenis_trxonline`
          WHERE
          idcustomer > 10)*/
          AND `storage_transaksi`.`outlet` IN ({{snippet: Outlet filter}})
      ) AS src
      LEFT JOIN dci.storage_transaksi_channel stc ON src.id = stc.storage_transaksi_id
      AND src.kodedb_id = stc.kodedb_id
  ) AS storage_transaksi
WHERE
  1 = 1 [[AND {{outlet}}]] [[AND {{channel}}]]
GROUP BY
  channel,
  tgl_trx