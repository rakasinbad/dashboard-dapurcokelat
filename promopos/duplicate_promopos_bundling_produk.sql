INSERT INTO
  promopos_bundling_produk (
    promo_code,
    bundling_code,
    item_code,
    parent,
    qty,
    price,
    status
  )
SELECT
  'OL-MEMYSELFTRIOCAKESEP26' AS promo_code,
  -- Replace OLM15 with OLM16 in bundling_code
  REPLACE(bundling_code, 'OLM15', 'OLM16') AS bundling_code,
  item_code,
  -- Replace OLM15 with OLM16 in parent
  REPLACE(parent, 'OLM15', 'OLM16') AS parent,
  qty,
  price,
  status
FROM
  promopos_bundling_produk
WHERE
  promo_code = 'OL-MEMYSELFTRIOCAKEAGT26';