select
	*
from
	dci.stok s
where
	s.kode IN (
	SELECT
		kode
	FROM
		(
		SELECT
			s.kode,
			COUNT(*) as total
		FROM
			dci.stok s
		WHERE
			s.stok > 0
			AND s.owner = 'PRODUKSI_COKELAT_BUARAN'
		GROUP BY
			s.kode,
			s.owner
		HAVING
			COUNT(*) > 1
) AS dup
)
	and s.owner = 'PRODUKSI_COKELAT_BUARAN'
	order by s.kode
	
	
SELECT
	kode
FROM
	(
	SELECT
		s.kode,
		COUNT(*) as total
	FROM
		dci.stok s
	WHERE
		s.stok > 0
	GROUP BY
		s.kode,
		s.owner
	HAVING
		COUNT(*) > 1
) AS dup;

SELECT
		s.kode, s.owner,
		COUNT(*) as total
	FROM
		dci.stok s
	WHERE
		s.stok > 0
	GROUP BY
		s.kode,
		s.owner
	HAVING
		COUNT(*) > 1