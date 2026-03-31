SELECT * FROM master.outlet WHERE kodeoutlet IN ('B2BS','B2B'); 
SELECT * FROM dci.outlet WHERE kode IN ('B2BS','B2B');
SELECT * FROM master.alamat_outlet WHERE kodeoutlet IN ('B2BS','B2B');
SELECT * FROM master.printer_setting WHERE kode_outlet IN ('B2BS','B2B');
SELECT * FROM master.latlng WHERE kode IN ('B2BS','B2B');
SELECT * FROM admin_demopi.latlng WHERE kode IN ('B2BS','B2B'); 

SELECT * FROM karyawan.lokasi WHERE kodelokasi IN ('B2BS','B2B'); -- opsional saja kalo ini
SELECT * FROM admin_demopi.`product_location`; -- kalo ada area baru, bisa diisi

-- insert into admin_demopi.`latlng`
SELECT NULL AS id, kode, nama, lat, lng, `area`, jenis, page_id, `status` FROM master.latlng WHERE kode = 'WTC' AND STATUS = '1';

SELECT * FROM master.`user` WHERE USER IN ('B2BS','B2B') ;
SELECT * FROM master.`user_karyawan` WHERE sub_dept IN ('B2BS','B2B');

SELECT * FROM dci.`stok` WHERE OWNER = 'B2BS' AND STATUS = 'aktif' ORDER BY kode ASC;
SELECT * FROM master.trxonline WHERE outlet = 'B2B' AND STATUS = '1' AND ojol_id IN (SELECT idcustomer FROM master.`jenis_trxonline` WHERE id > 10 AND STATUS = '1') ORDER BY kode ASC, ojol_id ASC;

-- INSERT INTO dci.stok
SELECT NULL AS id, kode, '0' AS stok, '0' AS unfinished, '0' AS par, '0' AS minimal, 'B2BS' AS OWNER, STATUS, sub, sell, '1' AS status_onoff 
FROM dci.stok WHERE OWNER = 'AS' AND STATUS = 'AKTIF' AND kode !='0' GROUP BY kode ORDER BY kode ASC;


-- insert into master.trxonline
SELECT NULL AS id, kode, harga, ojol_id, 'B2BS' AS outlet, STATUS FROM master.`trxonline` 
WHERE outlet = 'B2B' AND STATUS = '1' AND ojol_id IN (SELECT idcustomer FROM master.`jenis_trxonline` WHERE idcustomer > 10 AND STATUS = '1') 
ORDER BY kode ASC, ojol_id ASC;
