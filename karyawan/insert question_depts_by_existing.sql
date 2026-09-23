INSERT INTO
  question_depts (
    question_id,
    dept,
    sub_dept,
    dept_declare,
    jabatan
  )
SELECT
  question_id,
  'WAREHOUSE' AS dept,
  sub_dept,
  dept_declare,
  jabatan
FROM
  question_depts
WHERE
  sub_dept = 'DISTRIBUTION';