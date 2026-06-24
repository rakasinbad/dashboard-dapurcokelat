-- cek query ini 1
select
  sum(netto),
  sum(data.voucher) + sum(member) + sum(employee) + sum(cash) - sum(kembalian) + sum(debit) + sum(cc) + sum(trf) - sum(data.dlvcharge)
FROM
  (
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
          IF(
            (
              jenistrx = '3'
              OR jenistrx = '5'
            )
            AND LENGTH(nomember) = '9',
            '1',
            IF(
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
          AND tgl_trx BETWEEN '2026-05-01'
          AND '2026-05-31'
          and bruto >= 0
          AND outlet in (
            SELECT
              kodeoutlet
            FROM
              master.outlet
            WHERE
              produksi in (
                select
                  id
                from
                  master.produksi
                where
                  lokasidb = 'dci'
                  and status = '1'
              )
              AND franchise != '1'
              AND jenis_outlet in ('', '1', '2')
              and kodeoutlet != 'XX'
          )
          and jenistrx IN (1, 4, 6, 8)
      ) AS a
    GROUP BY
      a.jenistrx,
      a.status,
      a.jcp
    ORDER BY
      a.jenistrx ASC
  ) as data;

-- cek query ini 2
SELECT
  SUM(cardname) AS cash,
  SUM(cardno) AS debit,
  SUM(cardtype) AS cc,
  SUM(dp_trf) AS trf,
  SUM(cardname) + SUM(cardno) + SUM(cardtype) + SUM(dp_trf) AS total,
  jenistrx
FROM
  dci.storage_transaksi
WHERE
  tgl_trx BETWEEN '2026-05-01'
  AND '2026-05-31'
  AND dp != '0'
  AND (
    jenistrx = '1'
    or jenistrx = '4'
  )
  and status = '1'
  and bruto >= 0
  AND outlet in (
    SELECT
      kodeoutlet
    FROM
      master.outlet
    WHERE
      produksi in (
        select
          id
        from
          master.produksi
        where
          lokasidb = 'dci'
          and status = '1'
      )
      AND franchise != '1'
      AND jenis_outlet in ('', '1', '2')
      and kodeoutlet != 'XX'
  )
GROUP BY
  jenistrx;