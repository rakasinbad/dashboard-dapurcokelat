-- only exist in metbase not exist in history Chococall
-- [
--     "DC20251218120118B2B192",
--     "DC20251223123600B2B192"
-- ]
select
  data.trx_no
from
  (
    select
      master.orderdlv.*
    from
      master.orderdlv
      join dci.storage_transaksi st on st.no_trx = master.orderdlv.trx_no
    where
      master.orderdlv.paymentmethod != '4'
      and master.orderdlv.chanel_order_in = '8'
      and master.orderdlv.tgl_trx between '2025-12-01'
      and '2025-12-31'
      and master.orderdlv.outletpengirim NOT IN('XX', 'XB')
      and master.orderdlv.status not in(0)
    order by
      deldate asc
  ) data