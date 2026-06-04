-- 1.cek deposit lalu tambahkan deposit keluar ke dalam table dci.order
SELECT
  *
FROM
  `deposit`
WHERE
  idcustomer = '50070'
  AND outlet = 'BT'
ORDER BY
  id ASC;

-- 2.tambah deposit keluar ke dalam table dci.order
SELECT
  *
FROM
  `order`
WHERE
  no_transaksi = 'DC20260312182334002087AD07';

-- 3.update data dci.storage_transaksinya untuk dpnya cardno ubah jadi 0 dan status ubah jadi 2
SELECT
  *
FROM
  storage_transaksi
WHERE
  nomember = '50070'
  AND outlet = 'BT'
ORDER BY
  id ASC;

SELECT
  *
FROM
  storage_transaksi
WHERE
  nomember = '50070'
  AND outlet = 'BT'
  AND STATUS > 0
  AND jenistrx = '2'
ORDER BY
  id ASC;

SELECT
  *
FROM
  storage_transaksi
WHERE
  no_trx = 'DC20260103185903000431DK07 ';

SELECT
  st.id,
  st.tgl_trx,
  st.waktu,
  st.no_trx,
  st.cardname,
  st.cardno,
  st.cardtype,
  nomember,
  namapemesan,
  st.status,
  odr.`status` AS status_order,
  st.`outlet`
FROM
  storage_transaksi AS st
  LEFT JOIN `order` AS odr ON no_trx = no_transaksi
WHERE
  st.status = '1'
  AND st.jenistrx = '2'
GROUP BY
  st.id
ORDER BY
  st.id DESC;

-- update sistembekasi.storage_transaksi set status = '2', cardname = '0', cardno = '0', cardtype = '0' where status = '1' AND jenistrx = '2' AND id <= 361702;