-- Previous month's latest balance for all owners
WITH prev_month AS (
  SELECT owner,
         saldo AS start_balance,
         ROW_NUMBER() OVER(PARTITION BY owner ORDER BY id DESC) AS rn
  FROM dci.stok_card
  WHERE kode = '50010001'
    AND owner IN ('AD', 'AS', 'AP', 'AG', 'BL', 'BO', 'BK', 'CK', 'CI', 'ATMK', 'BB', 'BE', 'BN', 'BR', 'BA', 'CH', 'BU', 'CD', 'CP', 'DY', 'DA', 'DU', 'DK', 'DG', 'GM', 'GRR', 'GN', 'GW', 'JB', 'JU', 'JW', 'JG', 'KUR', 'KD', 'KT', 'KP', 'KC', 'MD', 'MN', 'MJ', 'MTH', 'MC', 'PG', 'PE', 'PL', 'PDR', 'PRT', 'PS', 'PU', 'PT', 'PN', 'PM', 'RM', 'RN', 'RK', 'SB', 'SC', 'SD', 'SK', 'SRT', 'TM', 'DT', 'TK', 'TL', 'TG', 'TR', 'TN', 'TD', 'VB', 'WY', 'BI', 'GS', 'GY', 'GO', 'GF', 'GV', 'GR', 'HI', 'JS', 'JGJ', 'KW', 'KG', 'LB', 'ML', 'ME', 'MT', 'MG', 'MS', 'OT', 'B2B', 'B2BS', 'DB', 'SY', 'SMG', 'ST', 'TP', 'TU', 'TB', 'TS', 'WTC')
    AND created BETWEEN '2025-12-01 00:00:00' AND '2025-12-31 23:59:59'
    AND jenis != '0'
),
curr_transactions AS (
  SELECT owner,
         SUM(kredit) AS total_kredit,
         SUM(debet) AS total_debet
  FROM dci.stok_card
  WHERE kode = '50010001'
    AND owner IN ('AD', 'AS', 'AP', 'AG', 'BL', 'BO', 'BK', 'CK', 'CI', 'ATMK', 'BB', 'BE', 'BN', 'BR', 'BA', 'CH', 'BU', 'CD', 'CP', 'DY', 'DA', 'DU', 'DK', 'DG', 'GM', 'GRR', 'GN', 'GW', 'JB', 'JU', 'JW', 'JG', 'KUR', 'KD', 'KT', 'KP', 'KC', 'MD', 'MN', 'MJ', 'MTH', 'MC', 'PG', 'PE', 'PL', 'PDR', 'PRT', 'PS', 'PU', 'PT', 'PN', 'PM', 'RM', 'RN', 'RK', 'SB', 'SC', 'SD', 'SK', 'SRT', 'TM', 'DT', 'TK', 'TL', 'TG', 'TR', 'TN', 'TD', 'VB', 'WY', 'BI', 'GS', 'GY', 'GO', 'GF', 'GV', 'GR', 'HI', 'JS', 'JGJ', 'KW', 'KG', 'LB', 'ML', 'ME', 'MT', 'MG', 'MS', 'OT', 'B2B', 'B2BS', 'DB', 'SY', 'SMG', 'ST', 'TP', 'TU', 'TB', 'TS', 'WTC')
    AND created BETWEEN '2026-01-01 00:00:00' AND '2026-01-31 23:59:59'
    AND jenis != '0'
  GROUP BY owner
),
curr_month AS (
  SELECT owner,
         saldo AS latest_balance,
         created AS latest_date,
         ROW_NUMBER() OVER(PARTITION BY owner ORDER BY id DESC) AS rn
  FROM dci.stok_card
  WHERE kode = '50010001'
    AND owner IN ('AD', 'AS', 'AP', 'AG', 'BL', 'BO', 'BK', 'CK', 'CI', 'ATMK', 'BB', 'BE', 'BN', 'BR', 'BA', 'CH', 'BU', 'CD', 'CP', 'DY', 'DA', 'DU', 'DK', 'DG', 'GM', 'GRR', 'GN', 'GW', 'JB', 'JU', 'JW', 'JG', 'KUR', 'KD', 'KT', 'KP', 'KC', 'MD', 'MN', 'MJ', 'MTH', 'MC', 'PG', 'PE', 'PL', 'PDR', 'PRT', 'PS', 'PU', 'PT', 'PN', 'PM', 'RM', 'RN', 'RK', 'SB', 'SC', 'SD', 'SK', 'SRT', 'TM', 'DT', 'TK', 'TL', 'TG', 'TR', 'TN', 'TD', 'VB', 'WY', 'BI', 'GS', 'GY', 'GO', 'GF', 'GV', 'GR', 'HI', 'JS', 'JGJ', 'KW', 'KG', 'LB', 'ML', 'ME', 'MT', 'MG', 'MS', 'OT', 'B2B', 'B2BS', 'DB', 'SY', 'SMG', 'ST', 'TP', 'TU', 'TB', 'TS', 'WTC')
    AND created BETWEEN '2026-01-01 00:00:00' AND '2026-01-31 23:59:59'
    AND jenis != '0'
)
SELECT 
    per_owner.owner,
    per_owner.start_balance,
    per_owner.total_kredit,
    per_owner.total_debet,
    per_owner.calculated_balance,
    per_owner.latest_balance,
    per_owner.calculated_balance - per_owner.latest_balance AS difference
FROM (
  SELECT 
         curr.owner,
         COALESCE(prev.start_balance, 0) AS start_balance,
         COALESCE(trans.total_kredit, 0) AS total_kredit,
         COALESCE(trans.total_debet, 0) AS total_debet,
         (COALESCE(prev.start_balance, 0) + COALESCE(trans.total_kredit, 0) - COALESCE(trans.total_debet, 0)) AS calculated_balance,
         curr.latest_balance,
         curr.latest_date,
         (curr.latest_balance - COALESCE(prev.start_balance, 0)) AS net_change
  FROM curr_month curr
  LEFT JOIN prev_month prev ON curr.owner = prev.owner AND prev.rn = 1
  LEFT JOIN curr_transactions trans ON curr.owner = trans.owner
  WHERE curr.rn = 1
) AS per_owner
ORDER BY per_owner.owner;