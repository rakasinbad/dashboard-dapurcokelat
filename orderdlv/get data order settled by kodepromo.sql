select
  sum(qty)
from
  (
    SELECT
      od.*
    FROM
      master.orderdlv AS o
      join master.orderdlv_detail od on o.kodeorder = od.idorder
      left join master.outlet o2 on o.outletpengirim = o2.kodeoutlet
      left join payment_gateway.payment_record pr on pr.trx_internal = o.kodeorder
    where
      1 + 1
      and o.status NOT IN ('', '0')
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
      )
  ) as data;

-- produksi 1 = buaran
-- produksi 2 = franchise jabo
-- produksi 3 = franchise non jabo