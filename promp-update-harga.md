based on this data, help me to build bulk update query to update data
if code have 7 digits add 0 in front of code, example 1060600 should be 01060600
code:
10070101
10070701
10070109
16030101
10070106
16050101
16020104
16060101
16020102
16020103
16020101
16040101
16010102
16010101
16010103
10070309
10070306
15110101
15110201
15100004
15080001
15100006
15100005
15100003
15120001
15100102
15070001
15110001
15070001
15180003
15180006
15180005
15180001
15180002
15180004
05180101

this is the price, the order of code and price should be correct, and convert this to number
price:
20,000
88,000
28,000
5,000
28,000
10,000
10,000
10,000
10,000
10,000
10,000
8,000
13,000
13,000
13,000
115,000
115,000
8,000
6,000
8,000
12,000
15,000
23,000
18,000
23,000
5,000
16,000
16,000
16,000
35,000
40,000
35,000
25,000
30,000
35,000
11000

this is the query

SELECT
ip.id
FROM
item_price ip
LEFT JOIN item_detail id
ON id.`id` = ip.`item_detail_id`
LEFT JOIN region r ON r.`id` = ip.`region_id`
LEFT JOIN location l ON l.`id` = ip.`location_id`
WHERE (ip.`status` != '0' AND ip.`region_id` NOT IN ('2','3') OR ip.`location_id` != '') and id.code = :kode
