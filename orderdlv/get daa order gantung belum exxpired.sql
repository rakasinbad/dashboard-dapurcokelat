SELECT
  od.*,
  pr.*
FROM
  master.orderdlv AS o
  join master.orderdlv_detail od on o.kodeorder = od.idorder
  left join master.outlet o2 on o.outletpengirim = o2.kodeoutlet
  left join payment_gateway.payment_record pr on pr.trx_internal = o.kodeorder
where
  1 + 1
  and pr.status != 'paid'
  and pr.exp_date >= '2026-05-09 15:34:00'
  and o.status = ''
  and od.kode = '01120600'
  and o2.produksi IN ('1')
  AND o.outletpengirim NOT IN ('XX', 'XB')
  AND (
    o.kode_promo = 'DCI25'
    OR o.kode_promo IN (
      SELECT
        promo_anak_name
      FROM
        master.promocode_induk_anak
      WHERE
        STATUS = '1'
        AND promo_anak_jenis = '1'
        AND promo_induk_name = 'DCI25'
    )
  ) -- cari exp date berdasarkan waktu saat ini