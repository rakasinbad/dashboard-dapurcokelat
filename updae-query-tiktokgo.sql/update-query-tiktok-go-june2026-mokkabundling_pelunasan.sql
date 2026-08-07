UPDATE
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
                    st.tgl_trx = '2026-06-11'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
                GROUP BY
                    st.no_trx
                LIMIT
                    31
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
                    st.tgl_trx = '2026-06-12'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
                GROUP BY
                    st.no_trx
                LIMIT
                    26
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
                    st.tgl_trx = '2026-06-13'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
                GROUP BY
                    st.no_trx
                LIMIT
                    4
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
                    st.tgl_trx = '2026-06-14'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
                GROUP BY
                    st.no_trx
                LIMIT
                    5
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
                    st.tgl_trx = '2026-06-15'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
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
                    st.tgl_trx = '2026-06-18'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
                GROUP BY
                    st.no_trx
                LIMIT
                    1
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
                    st.tgl_trx = '2026-06-19'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
                GROUP BY
                    st.no_trx
                LIMIT
                    2
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
                    st.tgl_trx = '2026-06-22'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
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
                    st.tgl_trx = '2026-06-26'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
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
                    st.tgl_trx = '2026-06-27'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
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
                    st.tgl_trx = '2026-06-28'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
                GROUP BY
                    st.no_trx
                LIMIT
                    1
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
                    st.tgl_trx = '2026-06-30'
                    AND st.jenistrx = 1
                    AND st.nomember = '1294133'
                    AND st.status = 1
                    AND st.is_voided = 0
                    AND std.kode = '01440600'
                    AND st.payment = 236000
                GROUP BY
                    st.no_trx
                LIMIT
                    1
            ) t11
    ) target ON c.trxno = target.no_trx
SET
    st.bruto = st.bruto - 107000,
    st.netto = st.netto - 107000,
    st.aftertax = st.aftertax - 107000,
    st.total = st.total - 107000,
    st.trf = st.trf - 107000,
    st.payment = st.payment - 107000,
    st.remark = CONCAT(
        COALESCE(st.remark, ''),
        ' | Manual Update Diskon TikTok GO 107000'
    )
WHERE
    c.paidtrx IS NOT NULL
    AND c.paidtrx != '';