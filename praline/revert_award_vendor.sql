UPDATE
  quotation_items
SET
  awarded_vendor_id = NULL,
  tender_id = NULL
WHERE
  quotation_id IN (200, 201, 207);

UPDATE
  quotations
SET
  status = 'submitted'
WHERE
  id IN (200, 201, 207);