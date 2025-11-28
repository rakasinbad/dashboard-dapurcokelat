SELECT page.*, page_meta.*, media.*
FROM page
JOIN page_meta ON page_meta.page_id = page.page_id
JOIN template ON template.template_id = page.template_id
JOIN media ON media.media_id = page.page_cover
WHERE page.page_parent =  1
AND page_meta.lang_id =  1
AND template.template_type =  'banner'
AND template.template_public =  1
ORDER BY page.page_position ASC