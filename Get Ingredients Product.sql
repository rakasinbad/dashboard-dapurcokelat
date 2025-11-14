SELECT
        dci.base_detail.id,
        dci.base_detail.kode,
        t.nama,
        dci.base_detail.qty,
        t.unit,
        t.unitcost
      FROM

        dci.base_detail
      LEFT JOIN 
        (
          SELECT
            t.*
          FROM
            (
              (
                SELECT
                  master.mb.item AS kode,
                  master.mb.name AS nama,
                  master.mb.cost_unit AS unit,
                  IF(
                    (
                      SELECT ppn
                      FROM dci.supplier
                      WHERE nasupp = master.bs.supplier
                      LIMIT 1
                    ) = 'Y',
                    (
                      (
                        ((master.bs.price - ((master.bs.price / 100) * master.bs.disc)) / 100) * 110
                      ) / master.mb.cost_konversi
                    ),
                    (
                      (master.bs.price - ((master.bs.price / 100) * master.bs.disc)) / master.mb.cost_konversi
                    )
                  ) AS unitcost
                FROM
                  master.mb
                INNER JOIN 
                  master.bs ON master.mb.item = master.bs.item
                WHERE
                  buaran = '1'
                GROUP BY
                  master.mb.item
                ORDER BY
                  master.mb.item ASC
              )
              UNION
              (
                SELECT
                  dci.base.kode,
                  master.produk.nama,
                  dci.base.unit,
                  (dci.base.cost / dci.base.qty) AS unitcost
                FROM
                  dci.base
                LEFT JOIN 
                  master.produk ON dci.base.kode = master.produk.kode
                  AND buaran = '1'
                ORDER BY
                  kode ASC
              )
            ) AS t
          ORDER BY
            t.kode ASC
        ) AS t 
        ON dci.base_detail.kode = t.kode
      WHERE
        dci.base_detail.kode_base = :code
      ORDER BY
        dci.base_detail.kode ASC;