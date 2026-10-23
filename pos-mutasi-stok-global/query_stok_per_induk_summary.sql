WITH parent_child_map AS (
  -- 1. Buat pemetaan hubungan antara owner (child/parent itu sendiri) dengan parent utama
  SELECT
    o.kodeoutlet AS owner_code,
    COALESCE(NULLIF(o.parent, ''), o.kodeoutlet) AS parent_code
  FROM
    master.outlet AS o
  WHERE
    o.status = '1'
),
latest_stock AS (
  -- 2. Cari transaksi kartu stok terakhir per owner dan item
  SELECT
    sc.owner,
    sc.kode,
    MAX(sc.id) AS max_id
  FROM
    stok_card AS sc
    INNER JOIN parent_child_map AS pcm ON sc.owner = pcm.owner_code
  WHERE
    (
      sc.kode LIKE '4%'
      OR sc.kode LIKE '5%'
    )
    AND sc.jenis != 0
    AND (
      sc.doc != 'START'
      AND sc.doc != 'END'
    )
    AND sc.created BETWEEN DATE_SUB('2026-09-30 23:59:59', INTERVAL 2 YEAR)
    AND '2026-09-30 23:59:59'
  GROUP BY
    sc.owner,
    sc.kode
) -- 3. Akumulasikan seluruh saldo stok ke parent outlet
SELECT
  pcm.parent_code AS owner,
  sc.kode,
  SUM(sc.saldo) AS saldo
FROM
  stok_card AS sc
  INNER JOIN latest_stock AS ls ON sc.kode = ls.kode
  AND sc.id = ls.max_id
  AND sc.owner = ls.owner
  INNER JOIN parent_child_map AS pcm ON sc.owner = pcm.owner_code
WHERE
  sc.jenis != 0
  AND sc.kode = '40010101' -- Hapus filter ini jika ingin memuat SEMUA barang
  AND sc.created BETWEEN DATE_SUB('2026-09-30 23:59:59', INTERVAL 2 YEAR)
  AND '2026-09-30 23:59:59'
GROUP BY
  pcm.parent_code,
  sc.kode
ORDER BY
  pcm.parent_code,
  sc.kode;