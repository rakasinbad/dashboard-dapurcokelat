SELECT
	kode,
	saldo
FROM
	dci.stok_card
INNER JOIN (
	SELECT
		kode AS k,
		MAX(id) AS max_id
	FROM
		dci.stok_card
	WHERE
		OWNER = 'LOGISTIK_BUARAN'
		and kode like '0%'
		and jenis != 0
		AND (doc != 'START'
			AND doc != 'END')
		AND created BETWEEN DATE_SUB('2025-08-10 23:59:59', INTERVAL 1 YEAR) and '2025-08-10 23:59:59'
	GROUP BY
		kode) AS su ON
	stok_card.kode = su.k
	AND stok_card.`id` = su.max_id
WHERE
	jenis != 0
	and `owner` = 'LOGISTIK_BUARAN'
	AND created BETWEEN DATE_SUB('2025-08-10 23:59:59', INTERVAL 1 YEAR) and '2025-08-10 23:59:59'
GROUP BY
	su.k
	
	
	
	SELECT
	kode,
	saldo
FROM
	dci.stok_card
INNER JOIN (
	SELECT
		kode AS k,
		MAX(id) AS max_id
	FROM
		dci.stok_card
	WHERE
		OWNER = 'LOGISTIK_BUARAN'
		and kode like '0%'
		AND jenis != 0
		AND (doc != 'START'
			AND doc != 'END')
		and created BETWEEN DATE_SUB('2025-08-10 00:00:00', INTERVAL 360 DAY) and '2025-08-10 00:00:00'
	GROUP BY
		kode ) AS su ON
	stok_card.kode = su.k
	AND stok_card.`id` = su.max_id
WHERE
	jenis != 0
	and `owner` = 'LOGISTIK_BUARAN'
	and created BETWEEN DATE_SUB('2025-08-10 00:00:00', INTERVAL 360 DAY) and '2025-08-10 00:00:00'
GROUP BY
	su.k
	
	
	
SELECT
	t.kode,
	t.jenis,
	SUM(t.kredit) AS jml
FROM
	(
	SELECT
		kode,
		kredit,
		jenis
	FROM
		dci.stok_card
	WHERE
		kredit != '0'
		AND jenis != '0'
		AND OWNER = 'LOGISTIK_BUARAN'
		and kode like '0%'
		and created BETWEEN '2025-08-10 00:00:00' and '2025-08-10 23:59:59'
	ORDER BY
		kode ASC,
		id DESC) AS t
GROUP BY
	kode,
	jenis
	
	
	SELECT
	t.kode,
	t.jenis,
	SUM(t.debet) AS jml
FROM
	(
	SELECT
		kode,
		debet,
		jenis
	FROM
		dci.stok_card
	WHERE
		debet != '0'
		AND jenis != '0'
		AND OWNER = 'LOGISTIK_BUARAN'
		and kode like '0%'
		and created BETWEEN '2025-08-10 00:00:00' and '2025-08-10 23:59:59'
	ORDER BY
		kode ASC,
		id DESC) AS t
GROUP BY
	kode,
	jenis
	
	
	SELECT
	t.*
FROM
	(
	SELECT
		kode,
		kredit,
		debet
	FROM
		dci.stok_card
	WHERE
		jenis = '10'
		AND OWNER = 'LOGISTIK_BUARAN'
		and kode like '0%'
		and created BETWEEN '2025-08-10 00:00:01' and '2025-08-10 23:59:59'
	ORDER BY
		kode ASC,
		id DESC) AS t
GROUP BY
	kode
	
SELECT
	t.*
FROM
	(
	SELECT
		kode,
		saldo
	FROM
		dci.stok_card
	WHERE
		jenis = '0'
		AND OWNER = 'LOGISTIK_BUARAN'
		and kode like '0%'
		and created like '2025-08-10%'
	ORDER BY
		kode ASC,
		id DESC) AS t
GROUP BY
	kode
	

select
	stok.*,
	master.produk.nama,
	master.produk.unit
from
	dci.stok
inner join master.produk on
	stok.kode = master.produk.kode
	and buaran = '1'
where
	stok.owner = 'LOGISTIK_BUARAN'
	and stok.kode like '0%'
GROUP BY
	stok.kode
order by
	stok.kode asc