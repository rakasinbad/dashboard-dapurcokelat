-- Find which outlets have incorrect balances
WITH ranked AS (
  SELECT
    owner,
    id,
    created,
    kredit,
    debet,
    saldo,
    LAG(saldo) OVER (
      PARTITION BY owner
      ORDER BY
        id ASC
    ) AS prev_saldo,
    LAG(id) OVER (
      PARTITION BY owner
      ORDER BY
        id ASC
    ) AS prev_id,
    ROW_NUMBER() OVER (
      PARTITION BY owner
      ORDER BY
        id ASC
    ) AS rn
  FROM
    stok_card
  WHERE
    kode = '50020011'
    AND owner IN (
      'AD',
      'AS',
      'AP',
      'AG',
      'BL',
      'BO',
      'BK',
      'CK',
      'CI',
      'ATMK',
      'BB',
      'BE',
      'BN',
      'BR',
      'BA',
      'CH',
      'BU',
      'CD',
      'CP',
      'DY',
      'DA',
      'DU',
      'DK',
      'DG',
      'GM',
      'GRR',
      'GN',
      'GW',
      'JB',
      'JU',
      'JW',
      'JG',
      'KUR',
      'KD',
      'KT',
      'KP',
      'KC',
      'MD',
      'MN',
      'MJ',
      'MTH',
      'MC',
      'PG',
      'PE',
      'PL',
      'PDR',
      'PRT',
      'PS',
      'PU',
      'PT',
      'PN',
      'PM',
      'RM',
      'RN',
      'RK',
      'SB',
      'SC',
      'SD',
      'SK',
      'SRT',
      'TM',
      'DT',
      'TK',
      'TL',
      'TG',
      'TR',
      'TN',
      'TD',
      'VB',
      'WY',
      'BI',
      'GS',
      'GY',
      'GO',
      'GF',
      'GV',
      'GR',
      'HI',
      'JS',
      'JGJ',
      'KW',
      'KG',
      'LB',
      'ML',
      'ME',
      'MT',
      'MG',
      'MS',
      'OT',
      'B2B',
      'B2BS',
      'DB',
      'SY',
      'SMG',
      'ST',
      'TP',
      'TU',
      'TB',
      'TS',
      'WTC'
    )
    AND created BETWEEN '2026-01-01 00:00:00'
    AND '2026-01-31 23:59:59'
),
anomalies AS (
  SELECT
    owner,
    id,
    created,
    prev_id,
    prev_saldo,
    kredit,
    debet,
    saldo AS current_saldo,
    (
      CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
    ) AS expected_saldo,
    CAST(saldo AS DECIMAL(10, 2)) - (
      CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
    ) AS difference,
    CASE
      WHEN rn = 1 THEN 'FIRST_RECORD'
      WHEN prev_saldo IS NULL THEN 'MISSING_PREVIOUS'
      WHEN CAST(saldo AS DECIMAL(10, 2)) != (
        CAST(prev_saldo AS DECIMAL(10, 2)) + CAST(kredit AS DECIMAL(10, 2)) - CAST(debet AS DECIMAL(10, 2))
      ) THEN 'INCORRECT_BALANCE'
      ELSE 'OK'
    END AS status
  FROM
    ranked
)
SELECT
  owner,
  COUNT(*) AS total_records,
  SUM(
    CASE
      WHEN status = 'INCORRECT_BALANCE' THEN 1
      ELSE 0
    END
  ) AS incorrect_balance_count,
  SUM(
    CASE
      WHEN status = 'MISSING_PREVIOUS' THEN 1
      ELSE 0
    END
  ) AS missing_previous_count,
  SUM(
    CASE
      WHEN status = 'FIRST_RECORD' THEN 1
      ELSE 0
    END
  ) AS first_record_count,
  MIN(
    CASE
      WHEN status = 'INCORRECT_BALANCE' THEN id
    END
  ) AS first_anomaly_id,
  MAX(
    CASE
      WHEN status = 'INCORRECT_BALANCE' THEN ABS(difference)
    END
  ) AS max_difference
FROM
  anomalies
WHERE
  status != 'OK'
GROUP BY
  owner
HAVING
  incorrect_balance_count > 0
  OR missing_previous_count > 0
ORDER BY
  incorrect_balance_count DESC,
  owner;