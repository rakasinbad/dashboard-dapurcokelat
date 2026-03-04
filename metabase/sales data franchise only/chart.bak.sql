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
        WHEN coalesce(stc.channel, src.channel) IN ('Web', 'App') THEN 'Web + App'
        WHEN coalesce(stc.channel, src.channel) IN ('GOFOOD', 'GRABFOOD', 'SHOPEE FOOD')
        AND src.channel != 'Walk In' THEN 'Food Delivery'
        WHEN coalesce(stc.channel, src.channel) IN (
          'ECOMMERCE - Tokopedia',
          'ECOMMERCE - SHOPEE MALL',
          'Tik Tok'
        ) THEN 'E-Commerce'
        WHEN coalesce(src.channel = 'Walk In') THEN 'Walk In'
        ELSE coalesce(src.channel, src.channel)
      END AS channel
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
          outlet.kode,
          outlet.panjang,
          tempo.customer.nama,
          tempo.`customer`.`alamat`,
          tempo.`customer`.`phone`,
          tempo.`customer`.`customer_gender`,
          tempo.`customer`.`customer_dob`,
          { { snippet: Channel Dictionary } }
        from
          dci.storage_transaksi
          JOIN master.outlet on storage_transaksi.outlet = outlet.kodeoutlet
          LEFT JOIN tempo.`customer` ON `storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
          AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
        where
          storage_transaksi.spoil = 0
          AND storage_transaksi.compliment = 0
          AND (
            `storage_transaksi`.`outlet` != 'XC'
            OR `storage_transaksi`.`outlet` != 'XT'
            OR `storage_transaksi`.`outlet` != 'XX'
          ) [[AND {{periode}}]]
		and jenistrx in ('1','4','8')
		and storage_transaksi.`status` not in ('0', '')
	/*	and storage_transaksi.`nomember` not in (
		SELECT
			idcustomer
		FROM
			master.`jenis_trxonline`
		WHERE
			idcustomer > 10)*/
		AND `storage_transaksi`.`outlet` in ({{snippet: Outlet filter franchise}}
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
		outlet.kode,
		outlet.panjang,
		tempo.customer.nama,
		tempo.`customer`.`alamat`,
		tempo.`customer`.`phone`,
		tempo.`customer`.`customer_gender`,
		tempo.`customer`.`customer_dob`,
		{{snippet: Channel Dictionary}}
	from
		tempo.storage_transaksi
	JOIN master.outlet on storage_transaksi.outlet = outlet.kodeoutlet
	LEFT JOIN tempo.`customer` ON
		`storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
		AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
	where
		storage_transaksi.spoil = 0 AND storage_transaksi.compliment = 0
		AND
		(`storage_transaksi`.`outlet` != 'XC'
			OR `storage_transaksi`.`outlet` != 'XT' OR `storage_transaksi`.`outlet` != 'XX')
		[[AND {{periode}}]]
		and jenistrx in ('1','4','8')
		and storage_transaksi.`status` not in ('0', '')
	/*	and storage_transaksi.`nomember` not in (
		SELECT
			idcustomer
		FROM
			master.`jenis_trxonline`
		WHERE
			idcustomer > 10)*/
		AND `storage_transaksi`.`outlet` in (
		{{snippet: Outlet filter franchise}})
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
		outlet.kode,
		outlet.panjang,
		tempo.customer.nama,
		tempo.`customer`.`alamat`,
		tempo.`customer`.`phone`,
		tempo.`customer`.`customer_gender`,
		tempo.`customer`.`customer_dob`,
		{{snippet: Channel Dictionary}}
	from
		sistemsurabaya.storage_transaksi
	JOIN master.outlet on storage_transaksi.outlet = outlet.kodeoutlet
	LEFT JOIN tempo.`customer` ON
		`storage_transaksi`.`nomember_app` = tempo.`customer`.`nomember`
		AND `storage_transaksi`.`nomember` = tempo.`customer`.`id`
	where
		storage_transaksi.spoil = 0 AND storage_transaksi.compliment = 0
		AND
		(`storage_transaksi`.`outlet` != 'XC'
			OR `storage_transaksi`.`outlet` != 'XT' OR `storage_transaksi`.`outlet` != 'XX')
		[[AND {{periode}}]]
		and jenistrx in ('1','4','8')
		and storage_transaksi.`status` not in ('0', '')
	/*	and storage_transaksi.`nomember` not in (
		SELECT
			idcustomer
		FROM
			master.`jenis_trxonline`
		WHERE
			idcustomer > 10)*/
		AND `storage_transaksi`.`outlet` in ({{snippet: Outlet filter franchise}})
	) as src
	left join dci.storage_transaksi_channel stc on src.id = stc.storage_transaksi_id AND src.kodedb_id = stc.kodedb_id
) as storage_transaksi
WHERE 1 = 1
[[AND {{outlet}}]]
[[AND {{channel}}]]
group by channel, tgl_trx