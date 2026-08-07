SELECT
  st.*
from
  dci.storage_transaksi st
  JOIN dci.creditlist c ON st.no_trx = c.paidtrx
  JOIN (
    SELECT
      no_trx
    FROM
      (
        SELECT
          st.no_trx
        FROM
          dci.storage_transaksi st
          JOIN dci.storage_transaksi_detail std ON st.no_trx = std.no_trx
        WHERE
          st.tgl_trx = '2026-07-01'
          AND st.jenistrx = 1
          AND st.nomember = '1294133'
          AND st.status = 1
          AND st.is_voided = 0
          AND std.kode = '01080100'
          AND st.payment = 369000
        GROUP BY
          st.no_trx
        LIMIT
          7
      ) t0
    UNION
    ALL
    SELECT
      no_trx
    FROM
      (
        SELECT
          st.no_trx
        FROM
          dci.storage_transaksi st
          JOIN dci.storage_transaksi_detail std ON st.no_trx = std.no_trx
        WHERE
          st.tgl_trx = '2026-07-02'
          AND st.jenistrx = 1
          AND st.nomember = '1294133'
          AND st.status = 1
          AND st.is_voided = 0
          AND std.kode = '01080100'
          AND st.payment = 369000
        GROUP BY
          st.no_trx
        LIMIT
          5
      ) t1
  ) target ON c.trxno = target.no_trx
WHERE
  c.paidtrx IS NOT NULL
  AND c.paidtrx != '';