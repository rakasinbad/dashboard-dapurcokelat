based on this data, help me to build bulk update query to update data
if code have 7 digits add 0 in front of code, example 1060600 should be 01060600
code:
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

UPDATE dci.stok SET sell = :price where kode = :code
