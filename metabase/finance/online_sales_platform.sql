select
  *
FROM
  (
    select
      no_trx as 'No Trx',
      outlet as 'Outlet Code',
      namaoutlet as 'Outlet Name',
      tgl_trx as 'Transaction Date',
      total_payment as "Total Payment",
      payment_method as "Payment Method",
      sum(sub_total_before_ppn) - sum(diskon_sku_before_ppn) 'Gross',
      sum(diskon_sku_before_ppn) 'Diskon Before PPN',
      diskon_rupiah 'Diskon After PPN'
    from
      (
        select
          storage_transaksi.no_trx,
          storage_transaksi.outlet,
          namaoutlet,
          storage_transaksi.tgl_trx,
          nomember,
          namapemesan,
          payment - dp as total_payment,
          case
            when debit > 0 then 'EDC BCA'
            when tlptujuan = '002' then 'BANK BRI'
            when tlptujuan = '009' then 'BANK BNI'
            when tlptujuan = '002QR' then 'BRI QRIS'
            when tlptujuan = '009QR' then 'BNI QRIS'
            when tlptujuan = '002VA' then 'BRI Trf VA'
            when storage_transaksi.`nomember` in ('568792', '517298') then 'GOFOOD'
            when storage_transaksi.`nomember` in ('1009134', '589021', '807227') then 'GRABFOOD'
            when storage_transaksi.`nomember` = '587249' then 'ECOMMERCE - Tokopedia'
            when storage_transaksi.`nomember` in ('582950', '641591') then 'SHOPEE FOOD'
            when storage_transaksi.`nomember` in ('904831') then 'ECOMMERCE - SHOPEE MALL'
            when storage_transaksi.`nomember` in ('898724') then 'Tik Tok'
            when storage_transaksi.`nomember` in ('1009136') then 'QPON'
            when trf > 0 then 'Transfer'
            else 'Other Card'
          end as payment_method,
          (qty * (harga * 100 / 111)) AS sub_total_before_ppn,
          (
            (
              storage_transaksi.diskon_rupiah * (std.qty * std.harga) / storage_transaksi.bruto
            ) * 100 / 111
          ) AS diskon_sku_before_ppn,
          diskon_rupiah
        from
          dci.storage_transaksi
          join master.outlet on outlet.kodeoutlet = storage_transaksi.outlet
          left join dci.storage_transaksi_detail std on dci.storage_transaksi.no_trx = std.no_trx
        where
          1 = 1
          AND jenistrx in ('1')
          AND storage_transaksi.status not in ('0', '')
          and (payment != 0)
          AND nomember in (
            '568792',
            '517298',
            '1009134',
            '589021',
            '807227',
            '587249',
            '582950',
            '641591',
            '904831',
            '898724',
            '1009136'
          )
          AND `storage_transaksi`.`tgl_trx` BETWEEN date '2026-05-01'
          and dci.storage_transaksi.diskon_rupiah > 0
          AND date '2026-05-31'
      ) src
    where
      total_payment > 0
    GROUP BY
      src.no_trx
  ) as data