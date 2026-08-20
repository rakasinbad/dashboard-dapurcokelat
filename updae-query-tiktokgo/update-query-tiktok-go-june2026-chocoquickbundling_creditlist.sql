UPDATE
    dci.creditlist c
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
                    st.tgl_trx = '2026-06-01'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
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
                    st.tgl_trx = '2026-06-02'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t1
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
                    st.tgl_trx = '2026-06-07'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    2
            ) t2
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
                    st.tgl_trx = '2026-06-10'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t3
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
                    st.tgl_trx = '2026-06-11'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t4
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
                    st.tgl_trx = '2026-06-12'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    2
            ) t5
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
                    st.tgl_trx = '2026-06-14'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t6
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
                    st.tgl_trx = '2026-06-15'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t7
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
                    st.tgl_trx = '2026-06-16'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    2
            ) t8
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
                    st.tgl_trx = '2026-06-17'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    2
            ) t9
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
                    st.tgl_trx = '2026-06-19'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    3
            ) t10
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
                    st.tgl_trx = '2026-06-20'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t11
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
                    st.tgl_trx = '2026-06-21'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    2
            ) t12
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
                    st.tgl_trx = '2026-06-22'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t13
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
                    st.tgl_trx = '2026-06-24'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t14
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
                    st.tgl_trx = '2026-06-25'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    3
            ) t15
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
                    st.tgl_trx = '2026-06-26'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    2
            ) t16
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
                    st.tgl_trx = '2026-06-27'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t17
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
                    st.tgl_trx = '2026-06-30'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '15080001'
                GROUP BY
                    st.no_trx
                LIMIT
                    2
            ) t18
    ) target ON c.trxno = target.no_trx
SET
    c.jmlcredit = c.jmlcredit - 3000,
    c.trf = c.trf - 3000,
    c.emp = CONCAT(
        COALESCE(c.emp, ''),
        ' | Manual Update Diskon TikTok GO 3000'
    );