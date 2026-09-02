SET
  @running_balance = -34616;

SELECT
  id,
  created,
  kode,
  kredit,
  debet,
  saldo as stored_saldo,
  @running_balance := CAST(
    @running_balance + CAST(kredit AS DECIMAL(20, 0)) - CAST(debet AS DECIMAL(20, 0)) AS DECIMAL(20, 0)
  ) as expected_balance,
  CASE
    WHEN saldo = @running_balance THEN '✅ Correct'
    ELSE '❌ Inaccurate'
  END as status,
  ABS(saldo - @running_balance) as difference
FROM
  stok_card
WHERE
  owner = 'AD'
  AND kode = '42120301'
  AND created BETWEEN '2025-01-01 00:00:00'
  AND '2026-01-31 23:59:59'
ORDER BY
  id ASC;