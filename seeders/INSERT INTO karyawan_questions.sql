SET
  @dept = 'ACCOUNTING';

SET
  @sub_dept = 'ACCOUNTING';

SET
  @jabatan = 'STAFF';

INSERT INTO
  karyawan.questions (text, status)
VALUES
  (
    'Sejauh mana karyawan memahami dan menjalankan SOP, Job Description, serta aturan perusahaan dengan baik?',
    1
  );

INSERT INTO
  karyawan.question_depts (question_id, dept, sub_dept, jabatan)
VALUES
  (LAST_INSERT_ID(), @dept, @sub_dept, @jabatan);

INSERT INTO
  karyawan.questions (text, status)
VALUES
  (
    'Sejauh mana karyawan bertanggung jawab, mampu bekerja mandiri, serta mengelola waktu dan beban kerja dengan baik sehingga tugas dapat terselesaikan dengan memuaskan?',
    1
  );

INSERT INTO
  karyawan.question_depts (question_id, dept, sub_dept, jabatan)
VALUES
  (LAST_INSERT_ID(), @dept, @sub_dept, @jabatan);

INSERT INTO
  karyawan.questions (text, status)
VALUES
  (
    'Sejauh mana karyawan mampu berpikir positif, menerima saran/kritik, tidak mudah menyerah, serta menunjukkan kemauan untuk berkembang?',
    1
  );

INSERT INTO
  karyawan.question_depts (question_id, dept, sub_dept, jabatan)
VALUES
  (LAST_INSERT_ID(), @dept, @sub_dept, @jabatan);

INSERT INTO
  karyawan.questions (text, status)
VALUES
  (
    'Sejauh mana karyawan menunjukkan kepedulian serta mampu bekerjasama dengan rekan kerja maupun atasan?',
    1
  );

INSERT INTO
  karyawan.question_depts (question_id, dept, sub_dept, jabatan)
VALUES
  (LAST_INSERT_ID(), @dept, @sub_dept, @jabatan);

INSERT INTO
  karyawan.questions (text, status)
VALUES
  (
    'Sejauh mana karyawan menunjukkan adab, sikap (attitude), kejujuran, dan loyalitas dalam bekerja?',
    1
  );

INSERT INTO
  karyawan.question_depts (question_id, dept, sub_dept, jabatan)
VALUES
  (LAST_INSERT_ID(), @dept, @sub_dept, @jabatan);