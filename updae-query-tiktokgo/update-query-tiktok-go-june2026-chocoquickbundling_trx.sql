SELECT
    SUM(a.diskon_ongkir) AS diskon_ongkir,
    a.jenistrx,
    a.status,
    a.jcp,
    SUM(a.bruto) AS bruto,
    SUM(a.diskon_rupiah) AS diskon_rupiah,
    SUM(a.netto) AS netto,
    SUM(a.tax) AS tax,
    SUM(a.aftertax) AS aftertax,
    SUM(a.dlvcharge) AS dlvcharge,
    SUM(a.total) AS total,
    SUM(a.cash) AS cash,
    SUM(a.debit) AS debit,
    SUM(a.cc) AS cc,
    SUM(a.dp) AS dp,
    SUM(a.member) AS member,
    SUM(a.employee) AS employee,
    SUM(a.compliment) AS compliment,
    SUM(a.voucher) AS voucher,
    SUM(a.trf) AS trf,
    SUM(a.promo) AS promo,
    SUM(a.spoil) AS spoil,
    SUM(a.payment) AS payment,
    SUM(a.kembalian) AS kembalian,
    COUNT(a.id) AS jmltrx
FROM
    (
        SELECT
            *,
            IF (
                (
                    jenistrx = '3'
                    OR jenistrx = '5'
                )
                AND LENGTH(nomember) = '9',
                '1',
                IF (
                    (
                        jenistrx = '3'
                        OR jenistrx = '5'
                    )
                    AND LENGTH(nomember) != '9'
                    AND nomember != '',
                    '2',
                    '0'
                )
            ) AS jcp
        FROM
            dci.storage_transaksi
        WHERE
            storage_transaksi.status != '0'
            AND tgl_trx BETWEEN '2026-01-01'
            AND '2026-01-31'
            AND bruto >= 0
            AND outlet IN (
                SELECT
                    kodeoutlet
                FROM
                    master.outlet
                WHERE
                    produksi IN (
                        SELECT
                            id
                        FROM
                            master.produksi
                        WHERE
                            lokasidb = 'dci'
                            AND status = '1'
                    )
                    AND (
                        (
                            franchise != '1'
                            AND jenis_outlet IN ('', '1', '2')
                            OR jenis_outlet = '5'
                        )
                    )
                    AND kodeoutlet NOT IN ('XX', 'XY')
                    AND status_report = '1'
            )
    ) AS a
GROUP BY
    a.jenistrx,
    a.status,
    a.jcp
ORDER BY
    a.jenistrx ASC;

-- query 5:
SELECT
    SUM(cardname) AS cash,
    SUM(cardno) AS debit,
    SUM(cardtype) AS cc,
    SUM(dp_trf) AS trf,
    jenistrx
FROM
    dci.storage_transaksi
WHERE
    tgl_trx BETWEEN '2026-01-01'
    AND '2026-01-31'
    AND dp != '0'
    AND (
        jenistrx = '1'
        OR jenistrx = '4'
    )
    AND status = '1'
    AND bruto >= 0
    AND outlet IN (
        SELECT
            kodeoutlet
        FROM
            master.outlet
        WHERE
            produksi IN (
                SELECT
                    id
                FROM
                    master.produksi
                WHERE
                    lokasidb = 'dci'
                    AND status = '1'
            )
            AND (
                (
                    franchise != '1'
                    AND jenis_outlet IN ('', '1', '2')
                    OR jenis_outlet = '5'
                )
            )
            AND kodeoutlet NOT IN ('XX', 'XY')
            AND status_report = '1'
    )
GROUP BY
    jenistrx