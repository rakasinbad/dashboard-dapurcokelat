UPDATE
  dci.storage_transaksi
SET
  diskon_rupiah = diskon_rupiah + 11000,
  netto = netto - 11000,
  after_tax = after_tax - 11000,
  total = total - 11000,
  member = member - 11000,
  payment = payment - 11000
WHERE
  no_trx IN (
    SELECT
      st.no_trx
    FROM
      dci.storage_transaksi st
      join dci.storage_transaksi_detail std on st.no_trx = std.no_trx
    WHERE
      st.tgl_trx between '2026-07-01'
      and '2026-07-31'
      and st.jenistrx = 1
      and st.nomember = '1294133'
      and st.status = 1
      and st.is_voided = 0
      and std.kode = '01080100'
  );