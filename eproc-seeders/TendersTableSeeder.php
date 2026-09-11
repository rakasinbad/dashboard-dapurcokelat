<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TendersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tenders')->delete();
        
        \DB::table('tenders')->insert(array (
            0 => 
            array (
                'id' => 7,
                'tenderable_type' => 'App\\Models\\Rfq',
                'tenderable_id' => 13,
                'quotation_id' => 10,
                'vendor_id' => 7,
                'tender_number' => 'TNDR-2026-0001',
                'final_amount' => '1000000.00',
                'justification' => 'Vendor yang terpilih untuk pengadaan laptop adalah vendor testing 3',
                'awarded_at' => '2026-06-05 18:22:05',
                'status' => 'active',
                'approved_by' => 5,
                'created_at' => '2026-06-05 18:22:05',
                'updated_at' => '2026-06-05 18:22:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 22,
                'tenderable_type' => 'App\\Models\\Rfp',
                'tenderable_id' => 12,
                'quotation_id' => 12,
                'vendor_id' => 27,
                'tender_number' => 'TNDR-2026-0003',
                'final_amount' => '11500000.00',
                'justification' => 'Appointed PT Tritunggal Cemerlang based on scoring',
                'awarded_at' => '2026-06-19 14:54:10',
                'status' => 'active',
                'approved_by' => 3,
                'created_at' => '2026-06-19 14:54:10',
                'updated_at' => '2026-06-19 14:54:10',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 28,
                'tenderable_type' => 'App\\Models\\Rfq',
                'tenderable_id' => 13,
                'quotation_id' => 10,
                'vendor_id' => 7,
                'tender_number' => 'TNDR-2026-0002',
                'final_amount' => '1000000.00',
                'justification' => 'Vendor yang terpilih untuk pengadaan laptop adalah vendor testing 3',
                'awarded_at' => '2026-06-05 18:22:05',
                'status' => 'active',
                'approved_by' => 5,
                'created_at' => '2026-06-05 18:22:05',
                'updated_at' => '2026-06-05 18:22:05',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 29,
                'tenderable_type' => 'App\\Models\\Rfp',
                'tenderable_id' => 13,
                'quotation_id' => 17,
                'vendor_id' => 67,
                'tender_number' => 'TNDR-2026-0004',
                'final_amount' => '60000000.00',
                'justification' => 'Superseded by new award for Quotation #17 on 2026-06-27 13:19:17',
                'awarded_at' => '2026-06-27 06:19:18',
                'status' => 'cancelled',
                'approved_by' => 3,
                'created_at' => '2026-06-26 17:04:30',
                'updated_at' => '2026-06-27 13:19:17',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 31,
                'tenderable_type' => 'App\\Models\\Rfq',
                'tenderable_id' => 28,
                'quotation_id' => 21,
                'vendor_id' => 7,
                'tender_number' => 'TNDR-2026-0005',
                'final_amount' => '20250000.00',
                'justification' => 'Cantumkan justifiakasi kenapa vendor tersebut terpilih',
                'awarded_at' => '2026-07-03 18:25:25',
                'status' => 'active',
                'approved_by' => 143,
                'created_at' => '2026-07-03 18:25:25',
                'updated_at' => '2026-07-03 18:25:25',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 32,
                'tenderable_type' => 'App\\Models\\Rfp',
                'tenderable_id' => 15,
                'quotation_id' => 20,
                'vendor_id' => 121,
                'tender_number' => 'TNDR-2026-0006',
                'final_amount' => '64680000.00',
                'justification' => 'Vendor appointed based on Techinical Assessment from IT and also best price from vendor ',
                'awarded_at' => '2026-07-08 17:42:02',
                'status' => 'active',
                'approved_by' => 3,
                'created_at' => '2026-07-08 17:42:02',
                'updated_at' => '2026-07-08 17:42:02',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 33,
                'tenderable_type' => 'App\\Models\\Rfp',
                'tenderable_id' => 17,
                'quotation_id' => 25,
                'vendor_id' => 67,
                'tender_number' => 'TNDR-2026-0007',
                'final_amount' => '42520000.00',
                'justification' => 'Justifikasi penunjukan vendor : 

1. Penawaran telah melewati proses nego 
2. Final nego mencapai penghematan 27.9% dari budget yang disetujui oleh user.
3. Sudah ada pembanding dari Vendor SUM dengan nilai IDR 62,550,00 dimana itu lebih tinggi 32 % dari penawaran Jogja Teknik Perkasa
4. Vendor merupakan vendor reguler yang sudah memahami teknis lapangan di Dapur Cokelat',
                'awarded_at' => '2026-07-09 12:57:44',
                'status' => 'active',
                'approved_by' => 3,
                'created_at' => '2026-07-09 12:57:44',
                'updated_at' => '2026-07-09 12:57:44',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 34,
                'tenderable_type' => 'App\\Models\\Rfq',
                'tenderable_id' => 32,
                'quotation_id' => 26,
                'vendor_id' => 146,
                'tender_number' => 'TNDR-2026-0008',
                'final_amount' => '13000000.00',
                'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, Puri Com ditetapkan sebagai vendor pengadaan Laptop MSI Untuk akunting karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik.

Budget yang telah ditetapkan sebesar Rp 13.500.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 13.000.000 atau 96,3 % dari budget, dengan nilai penghematan sebesar Rp 500.000,- (3,7%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
                    'awarded_at' => '2026-07-14 16:16:50',
                    'status' => 'active',
                    'approved_by' => 143,
                    'created_at' => '2026-07-14 16:16:50',
                    'updated_at' => '2026-07-14 16:16:50',
                    'deleted_at' => NULL,
                ),
                8 => 
                array (
                    'id' => 35,
                    'tenderable_type' => 'App\\Models\\Rfq',
                    'tenderable_id' => 39,
                    'quotation_id' => 35,
                    'vendor_id' => 7,
                    'tender_number' => 'TNDR-2026-0009',
                    'final_amount' => '25725000.00',
                    'justification' => 'Untuk hari ini harga yang masuk ke PT. Dapur Cokelat Indonesia dengan harga Rp 24.500',
                    'awarded_at' => '2026-07-22 12:30:30',
                    'status' => 'active',
                    'approved_by' => 143,
                    'created_at' => '2026-07-22 12:30:30',
                    'updated_at' => '2026-07-22 12:30:30',
                    'deleted_at' => NULL,
                ),
                9 => 
                array (
                    'id' => 36,
                    'tenderable_type' => 'App\\Models\\Rfq',
                    'tenderable_id' => 35,
                    'quotation_id' => 29,
                    'vendor_id' => 134,
                    'tender_number' => 'TNDR-2026-0010',
                    'final_amount' => '17535000.00',
                    'justification' => 'Succeed to nego with vendor, lower the price 7.95% from original quotation and % budget utilization, 2.58% below budget ',
                    'awarded_at' => '2026-07-22 18:07:27',
                    'status' => 'active',
                    'approved_by' => 143,
                    'created_at' => '2026-07-22 18:07:27',
                    'updated_at' => '2026-07-22 18:07:27',
                    'deleted_at' => NULL,
                ),
                10 => 
                array (
                    'id' => 37,
                    'tenderable_type' => 'App\\Models\\Rfq',
                    'tenderable_id' => 36,
                    'quotation_id' => 32,
                    'vendor_id' => 88,
                    'tender_number' => 'TNDR-2026-0011',
                    'final_amount' => '9825000.00',
                    'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT. Polarin Xinindo ditetapkan sebagai vendor pengadaan Freon karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp 12.700.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 10.905.750 atau 86 % dari budget, dengan nilai penghematan sebesar Rp 1.795.250,- (14%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
                        'awarded_at' => '2026-07-23 11:21:41',
                        'status' => 'active',
                        'approved_by' => 5,
                        'created_at' => '2026-07-23 11:21:41',
                        'updated_at' => '2026-07-23 11:21:41',
                        'deleted_at' => NULL,
                    ),
                    11 => 
                    array (
                        'id' => 38,
                        'tenderable_type' => 'App\\Models\\Rfq',
                        'tenderable_id' => 40,
                        'quotation_id' => 37,
                        'vendor_id' => 146,
                        'tender_number' => 'TNDR-2026-0012',
                        'final_amount' => '10200000.00',
                    'justification' => 'Berdasarkan hasil proses sourcing kepada 3 (tiga) vendor, seluruh penawaran yang memenuhi spesifikasi masih berada di atas budget yang telah ditetapkan. Kondisi tersebut dipengaruhi oleh harga pasar saat ini. Proses tender dan negosiasi telah dilakukan untuk memperoleh harga yang paling kompetitif.

Budget yang ditetapkan sebesar Rp9.240.000, sedangkan harga terbaik hasil negosiasi sebesar Rp10.200.000, atau 10,39% di atas budget, dengan selisih nominal Rp960.000. Selisih tersebut dipandang masih dapat diterima dengan mempertimbangkan hasil survei pasar, kesesuaian spesifikasi, serta terbatasnya penawaran yang memenuhi kebutuhan.

Vendor telah memberikan penawaran terbaik setelah proses negosiasi, namun belum dapat mencapai target anggaran yang telah ditetapkan. Dengan mempertimbangkan hasil sourcing, proses evaluasi, dan negosiasi yang telah dilakukan, harga tersebut direkomendasikan sebagai penawaran terbaik untuk memenuhi kebutuhan pengadaan',
                    'awarded_at' => '2026-07-24 10:55:41',
                    'status' => 'active',
                    'approved_by' => 143,
                    'created_at' => '2026-07-24 10:55:41',
                    'updated_at' => '2026-07-24 10:55:41',
                    'deleted_at' => NULL,
                ),
                12 => 
                array (
                    'id' => 39,
                    'tenderable_type' => 'App\\Models\\Rfp',
                    'tenderable_id' => 18,
                    'quotation_id' => 31,
                    'vendor_id' => 67,
                    'tender_number' => 'TNDR-2026-0013',
                    'final_amount' => '20000000.00',
                    'justification' => 'Vendor offered price 67% lower than budget also the vendor is the one who set up plumbing system.',
                    'awarded_at' => '2026-07-24 12:54:14',
                    'status' => 'active',
                    'approved_by' => 3,
                    'created_at' => '2026-07-24 12:54:14',
                    'updated_at' => '2026-07-24 12:54:14',
                    'deleted_at' => NULL,
                ),
                13 => 
                array (
                    'id' => 40,
                    'tenderable_type' => 'App\\Models\\Rfq',
                    'tenderable_id' => 41,
                    'quotation_id' => 39,
                    'vendor_id' => 85,
                    'tender_number' => 'TNDR-2026-0014',
                    'final_amount' => '5544450.00',
                    'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi,   PT. Harmoni Berkat Makmur  ditetapkan sebagai vendor pengadaan Lampu  karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp 5.670.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 5.544.450,- atau 97,79 % dari budget, dengan nilai penghematan sebesar Rp 125.550,- (2,21%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
                        'awarded_at' => '2026-07-24 14:07:21',
                        'status' => 'active',
                        'approved_by' => 143,
                        'created_at' => '2026-07-24 14:07:21',
                        'updated_at' => '2026-07-24 14:07:21',
                        'deleted_at' => NULL,
                    ),
                    14 => 
                    array (
                        'id' => 41,
                        'tenderable_type' => 'App\\Models\\Rfq',
                        'tenderable_id' => 43,
                        'quotation_id' => 40,
                        'vendor_id' => 110,
                        'tender_number' => 'TNDR-2026-0015',
                        'final_amount' => '6385830.00',
                        'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi,PT Sentral Mitra Informatika, Tbk ditetapkan sebagai vendor pengadaan Printer Epson L6490 Untuk Direksi karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp 7.000.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 6,385,830,- atau 91,23 % dari budget, dengan nilai penghematan sebesar Rp 614.170,- (8,77%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
                            'awarded_at' => '2026-07-28 10:06:15',
                            'status' => 'active',
                            'approved_by' => 5,
                            'created_at' => '2026-07-28 10:06:15',
                            'updated_at' => '2026-07-28 10:06:15',
                            'deleted_at' => NULL,
                        ),
                        15 => 
                        array (
                            'id' => 42,
                            'tenderable_type' => 'App\\Models\\Rfp',
                            'tenderable_id' => 21,
                            'quotation_id' => 41,
                            'vendor_id' => 67,
                            'tender_number' => 'TNDR-2026-0016',
                            'final_amount' => '41966900.00',
                            'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT Jogja Teknik Perkasa  ditetapkan sebagai vendor Renovasi Delpo Palmerah  karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp62.276.900-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp IDR 41,966,900. atau 67.39 % dari budget, dengan nilai penghematan sebesar  Rp 20,310,000 (32.61%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan. ',
                                'awarded_at' => '2026-07-29 21:28:27',
                                'status' => 'active',
                                'approved_by' => 3,
                                'created_at' => '2026-07-29 21:28:27',
                                'updated_at' => '2026-07-29 21:28:27',
                                'deleted_at' => NULL,
                            ),
                            16 => 
                            array (
                                'id' => 43,
                                'tenderable_type' => 'App\\Models\\Rfq',
                                'tenderable_id' => 42,
                                'quotation_id' => 45,
                                'vendor_id' => 87,
                                'tender_number' => 'TNDR-2026-0017',
                                'final_amount' => '15170000.00',
                                'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT ROYAL SUTAN AGUNG  ditetapkan sebagai vendor Pengadaan Showcase & Juice Dispeser kebutuhan Event Operasional  karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp.18.253.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 15,170,000 atau 81,9 % dari budget, dengan nilai penghematan sebesar Rp 3.353.000,- (18,10%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
                                    'awarded_at' => '2026-07-30 08:29:51',
                                    'status' => 'active',
                                    'approved_by' => 143,
                                    'created_at' => '2026-07-30 15:12:02',
                                    'updated_at' => '2026-07-30 15:12:02',
                                    'deleted_at' => '2026-07-30 15:29:02',
                                ),
                                17 => 
                                array (
                                    'id' => 49,
                                    'tenderable_type' => 'App\\Models\\Rfq',
                                    'tenderable_id' => 13,
                                    'quotation_id' => 10,
                                    'vendor_id' => 7,
                                    'tender_number' => 'TNDR-2026-0001-1',
                                    'final_amount' => '1000000.00',
                                    'justification' => 'Vendor yang terpilih untuk pengadaan laptop adalah vendor testing 3',
                                    'awarded_at' => '2026-06-05 18:22:05',
                                    'status' => 'active',
                                    'approved_by' => 5,
                                    'created_at' => '2026-06-05 18:22:05',
                                    'updated_at' => '2026-06-05 18:22:05',
                                    'deleted_at' => NULL,
                                ),
                                18 => 
                                array (
                                    'id' => 50,
                                    'tenderable_type' => 'App\\Models\\Rfq',
                                    'tenderable_id' => 52,
                                    'quotation_id' => 54,
                                    'vendor_id' => 103,
                                    'tender_number' => 'TNDR-2026-0018',
                                    'final_amount' => '20340000.00',
                                'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Senin, 03 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.

Terima kasih',
                                'awarded_at' => '2026-07-31 15:19:23',
                                'status' => 'active',
                                'approved_by' => 5,
                                'created_at' => '2026-07-31 15:19:23',
                                'updated_at' => '2026-07-31 15:19:23',
                                'deleted_at' => NULL,
                            ),
                            19 => 
                            array (
                                'id' => 51,
                                'tenderable_type' => 'App\\Models\\Rfq',
                                'tenderable_id' => 51,
                                'quotation_id' => 55,
                                'vendor_id' => 103,
                                'tender_number' => 'TNDR-2026-0019',
                                'final_amount' => '13560000.00',
                            'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 600 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 1 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.

Terima kasih',
                            'awarded_at' => '2026-07-31 15:20:49',
                            'status' => 'active',
                            'approved_by' => 5,
                            'created_at' => '2026-07-31 15:20:49',
                            'updated_at' => '2026-07-31 15:20:49',
                            'deleted_at' => NULL,
                        ),
                        20 => 
                        array (
                            'id' => 52,
                            'tenderable_type' => 'App\\Models\\Rfq',
                            'tenderable_id' => 50,
                            'quotation_id' => 58,
                            'vendor_id' => 84,
                            'tender_number' => 'TNDR-2026-0020',
                            'final_amount' => '12940680.00',
                            'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, CV. ASASTA KREASI MANDIRI ditetapkan sebagai vendor pengadaan Dekorasi Merdeka Sale - Agustus 2026 karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar 13.486.800,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 12.940.680 atau 95,95% dari budget, dengan nilai penghematan sebesar Rp 546.120,- (4,05%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
                                'awarded_at' => '2026-07-31 17:00:11',
                                'status' => 'active',
                                'approved_by' => 143,
                                'created_at' => '2026-07-31 17:00:11',
                                'updated_at' => '2026-07-31 17:00:11',
                                'deleted_at' => NULL,
                            ),
                            21 => 
                            array (
                                'id' => 53,
                                'tenderable_type' => 'App\\Models\\Rfq',
                                'tenderable_id' => 48,
                                'quotation_id' => 47,
                                'vendor_id' => 146,
                                'tender_number' => 'TNDR-2026-0021',
                                'final_amount' => '12900000.00',
                            'justification' => 'Berdasarkan hasil proses sourcing kepada 3 (tiga) vendor, seluruh penawaran yang memenuhi spesifikasi masih berada di atas budget yang telah ditetapkan. Kondisi tersebut dipengaruhi oleh harga pasar saat ini. Proses tender dan negosiasi telah dilakukan untuk memperoleh harga yang paling kompetitif.

Budget yang ditetapkan sebesar Rp 12.000.000, sedangkan harga terbaik hasil negosiasi sebesar Rp12.900.000, atau 7,5% di atas budget, dengan selisih nominal Rp900.000. Selisih tersebut dipandang masih dapat diterima dengan mempertimbangkan hasil survei pasar, kesesuaian spesifikasi, serta terbatasnya penawaran yang memenuhi kebutuhan.

Vendor telah memberikan penawaran terbaik setelah proses negosiasi, namun belum dapat mencapai target anggaran yang telah ditetapkan. Dengan mempertimbangkan hasil sourcing, proses evaluasi, dan negosiasi yang telah dilakukan, harga tersebut direkomendasikan sebagai penawaran terbaik untuk memenuhi kebutuhan pengadaan.',
                            'awarded_at' => '2026-08-03 12:31:29',
                            'status' => 'active',
                            'approved_by' => 143,
                            'created_at' => '2026-08-03 12:31:29',
                            'updated_at' => '2026-08-03 12:31:29',
                            'deleted_at' => NULL,
                        ),
                        22 => 
                        array (
                            'id' => 54,
                            'tenderable_type' => 'App\\Models\\Rfq',
                            'tenderable_id' => 53,
                            'quotation_id' => 60,
                            'vendor_id' => 102,
                            'tender_number' => 'TNDR-2026-0022',
                            'final_amount' => '20160000.00',
                        'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 4 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.

Terima kasih',
                        'awarded_at' => '2026-08-03 13:05:48',
                        'status' => 'active',
                        'approved_by' => 5,
                        'created_at' => '2026-08-03 13:05:48',
                        'updated_at' => '2026-08-03 13:05:48',
                        'deleted_at' => NULL,
                    ),
                    23 => 
                    array (
                        'id' => 55,
                        'tenderable_type' => 'App\\Models\\Rfq',
                        'tenderable_id' => 55,
                        'quotation_id' => 61,
                        'vendor_id' => 103,
                        'tender_number' => 'TNDR-2026-0023',
                        'final_amount' => '26880000.00',
                    'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1200 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 5 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.

Terima kasih',
                    'awarded_at' => '2026-08-04 11:30:38',
                    'status' => 'active',
                    'approved_by' => 5,
                    'created_at' => '2026-08-04 11:30:38',
                    'updated_at' => '2026-08-04 11:30:38',
                    'deleted_at' => NULL,
                ),
                24 => 
                array (
                    'id' => 56,
                    'tenderable_type' => 'App\\Models\\Rfq',
                    'tenderable_id' => 57,
                    'quotation_id' => 67,
                    'vendor_id' => 102,
                    'tender_number' => 'TNDR-2026-0024',
                    'final_amount' => '17175000.00',
                'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 750 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 6 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.

Terima kasih',
                'awarded_at' => '2026-08-05 11:30:00',
                'status' => 'active',
                'approved_by' => 5,
                'created_at' => '2026-08-05 11:30:00',
                'updated_at' => '2026-08-05 11:30:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 57,
                'tenderable_type' => 'App\\Models\\Rfq',
                'tenderable_id' => 54,
                'quotation_id' => 63,
                'vendor_id' => 122,
                'tender_number' => 'TNDR-2026-0025',
                'final_amount' => '155250000.00',
                'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, 99 Advertising ditetapkan sebagai vendor pengadaan Pengadaan Media Promosi Umbul-Umbul Kemerdekaan untuk marketing karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp. 155,250,000 ,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 155,250,000,- atau 100% dari budget . Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
                'awarded_at' => '2026-08-05 16:04:46',
                'status' => 'active',
                'approved_by' => 143,
                'created_at' => '2026-08-05 16:04:46',
                'updated_at' => '2026-08-05 16:04:46',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 58,
                'tenderable_type' => 'App\\Models\\Rfq',
                'tenderable_id' => 49,
                'quotation_id' => 51,
                'vendor_id' => 110,
                'tender_number' => 'TNDR-2026-0026',
                'final_amount' => '2400000.00',
                'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT. Sentral Mitra Informatika ditetapkan sebagai vendor pengadaan Scanner untuk Logistik karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp 4.550.890,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 2.664.000,- atau 58,5% dari budget, dengan nilai penghematan sebesar Rp 1.886.890,- (41,5%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
                    'awarded_at' => '2026-08-05 16:57:59',
                    'status' => 'active',
                    'approved_by' => 5,
                    'created_at' => '2026-08-05 16:57:59',
                    'updated_at' => '2026-08-05 16:57:59',
                    'deleted_at' => NULL,
                ),
                27 => 
                array (
                    'id' => 59,
                    'tenderable_type' => 'App\\Models\\Rfq',
                    'tenderable_id' => 58,
                    'quotation_id' => 68,
                    'vendor_id' => 102,
                    'tender_number' => 'TNDR-2026-0027',
                    'final_amount' => '17175000.00',
                'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 750 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 7 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.

Terima kasih',
                'awarded_at' => '2026-08-06 13:21:47',
                'status' => 'active',
                'approved_by' => 5,
                'created_at' => '2026-08-06 13:21:47',
                'updated_at' => '2026-08-06 13:21:47',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 60,
                'tenderable_type' => 'App\\Models\\Rfq',
                'tenderable_id' => 61,
                'quotation_id' => 70,
                'vendor_id' => 102,
                'tender_number' => 'TNDR-2026-0028',
                'final_amount' => '20610000.00',
            'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 8 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.

Terima kasih',
            'awarded_at' => '2026-08-07 11:34:56',
            'status' => 'active',
            'approved_by' => 5,
            'created_at' => '2026-08-07 11:34:56',
            'updated_at' => '2026-08-07 11:34:56',
            'deleted_at' => NULL,
        ),
        29 => 
        array (
            'id' => 61,
            'tenderable_type' => 'App\\Models\\Rfq',
            'tenderable_id' => 62,
            'quotation_id' => 73,
            'vendor_id' => 103,
            'tender_number' => 'TNDR-2026-0029',
            'final_amount' => '24045000.00',
        'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1050 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 10 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.

Terima kasih',
        'awarded_at' => '2026-08-07 11:35:42',
        'status' => 'active',
        'approved_by' => 5,
        'created_at' => '2026-08-07 11:35:42',
        'updated_at' => '2026-08-07 11:35:42',
        'deleted_at' => NULL,
    ),
    30 => 
    array (
        'id' => 62,
        'tenderable_type' => 'App\\Models\\Rfq',
        'tenderable_id' => 63,
        'quotation_id' => 77,
        'vendor_id' => 102,
        'tender_number' => 'TNDR-2026-0030',
        'final_amount' => '20430000.00',
    'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg.
Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 11 Agustus 2026. PO dapat di proses setelah kami email PO nya. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
    'awarded_at' => '2026-08-10 13:23:23',
    'status' => 'active',
    'approved_by' => 5,
    'created_at' => '2026-08-10 13:23:23',
    'updated_at' => '2026-08-10 13:23:23',
    'deleted_at' => NULL,
),
31 => 
array (
    'id' => 63,
    'tenderable_type' => 'App\\Models\\Rfq',
    'tenderable_id' => 64,
    'quotation_id' => 82,
    'vendor_id' => 103,
    'tender_number' => 'TNDR-2026-0031',
    'final_amount' => '27240000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1200 kg.
Mohon dilakukan pengiriman sesuai jadwal pada, 12 Agustus 2026 setelah kami email PO nya. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-11 11:06:49',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-11 11:06:49',
'updated_at' => '2026-08-11 11:06:49',
'deleted_at' => NULL,
),
32 => 
array (
'id' => 64,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 65,
'quotation_id' => 83,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0032',
'final_amount' => '20340000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg.
Mohon dilakukan pengiriman sesuai jadwal pada, 13 Agustus 2026 setelah kami email PO nya. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-12 11:00:43',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-12 11:00:43',
'updated_at' => '2026-08-12 11:00:43',
'deleted_at' => NULL,
),
33 => 
array (
'id' => 65,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 67,
'quotation_id' => 88,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0033',
'final_amount' => '23625000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1050 kg.
Mohon dilakukan pengiriman sesuai jadwal pada, 14 Agustus 2026 setelah kami email PO nya. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-13 10:59:40',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-13 10:59:40',
'updated_at' => '2026-08-13 10:59:40',
'deleted_at' => NULL,
),
34 => 
array (
'id' => 66,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 66,
'quotation_id' => 85,
'vendor_id' => 146,
'tender_number' => 'TNDR-2026-0034',
'final_amount' => '13300000.00',
'justification' => 'Berdasarkan hasil proses sourcing kepada 3 (tiga) vendor, seluruh penawaran yang memenuhi spesifikasi masih berada di atas budget yang telah ditetapkan. Kondisi tersebut dipengaruhi oleh harga pasar saat ini. Proses tender dan negosiasi telah dilakukan untuk memperoleh harga yang paling kompetitif.

Budget yang ditetapkan sebesar Rp 13.000.000, sedangkan harga terbaik hasil negosiasi sebesar Rp13.300.000, atau 2,31% di atas budget, dengan selisih nominal Rp 300.000. Selisih tersebut dipandang masih dapat diterima dengan mempertimbangkan hasil survei pasar, kesesuaian spesifikasi, serta terbatasnya penawaran yang memenuhi kebutuhan.

Vendor telah memberikan penawaran terbaik setelah proses negosiasi, namun belum dapat mencapai target anggaran yang telah ditetapkan. Dengan mempertimbangkan hasil sourcing, proses evaluasi, dan negosiasi yang telah dilakukan, harga tersebut direkomendasikan sebagai penawaran terbaik untuk memenuhi kebutuhan pengadaan.',
'awarded_at' => '2026-08-13 17:17:10',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-08-13 17:17:10',
'updated_at' => '2026-08-13 17:17:10',
'deleted_at' => NULL,
),
35 => 
array (
'id' => 67,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 69,
'quotation_id' => 91,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0035',
'final_amount' => '16800000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 750kg
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 15 Agustus 202.  setelah kami email PO nya. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-14 10:53:13',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-14 10:53:13',
'updated_at' => '2026-08-14 10:53:13',
'deleted_at' => NULL,
),
36 => 
array (
'id' => 68,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 70,
'quotation_id' => 93,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0036',
'final_amount' => '20160000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak  900kg
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 18 Agustus 2026  setelah kami email PO nya. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-14 10:55:13',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-14 10:55:13',
'updated_at' => '2026-08-14 10:55:13',
'deleted_at' => NULL,
),
37 => 
array (
'id' => 69,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 71,
'quotation_id' => 95,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0037',
'final_amount' => '10125000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 450 kg.

Mohon dilakukan pengiriman sesuai jadwal pada hari ini Selasa, 18 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-08-18 11:14:15',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-18 11:14:15',
'updated_at' => '2026-08-18 11:14:15',
'deleted_at' => NULL,
),
38 => 
array (
'id' => 70,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 72,
'quotation_id' => 96,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0038',
'final_amount' => '27000000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1.200 kg.

Mohon dilakukan pengiriman sesuai jadwal pada hari Rabu, 19 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-08-18 11:14:57',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-18 11:14:57',
'updated_at' => '2026-08-18 11:14:57',
'deleted_at' => NULL,
),
39 => 
array (
'id' => 71,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 68,
'quotation_id' => 94,
'vendor_id' => 87,
'tender_number' => 'TNDR-2026-0039',
'final_amount' => '13946000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT. ROYAL SUTAN AGUNG ditetapkan sebagai vendor PENGADAAN SHOWCASE , MESIN SEALER DAN MESIN ICE CHOCOLATE karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp 17.540.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp13.946.000,- atau 79,51% dari budget, dengan nilai penghematan sebesar Rp 3.594.000,- (20,49%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-08-19 10:52:35',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-08-19 10:52:35',
'updated_at' => '2026-08-19 10:52:35',
'deleted_at' => NULL,
),
40 => 
array (
'id' => 72,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 74,
'quotation_id' => 97,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0040',
'final_amount' => '27600000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1200 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 20 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-19 11:27:23',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-19 11:27:23',
'updated_at' => '2026-08-19 11:27:23',
'deleted_at' => NULL,
),
41 => 
array (
'id' => 73,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 76,
'quotation_id' => 99,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0041',
'final_amount' => '6450000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Bapak/Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 300 kg. Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 20 Agustus 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-08-19 14:27:35',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-08-19 14:27:35',
'updated_at' => '2026-08-19 14:27:35',
'deleted_at' => NULL,
),
42 => 
array (
'id' => 74,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 59,
'quotation_id' => 75,
'vendor_id' => 140,
'tender_number' => 'TNDR-2026-0042',
'final_amount' => '376535000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT Jeje Elshadai Suksesindo ditetapkan sebagai vendor pengadaan Box cake Untuk Outlet karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp423.243.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp376.535.000,- atau sebesar 88,97% dari budget yang telah ditetapkan, dengan nilai penghematan sebesar Rp46.708.000,- atau sebesar 11,03% dibandingkan dengan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien dan ekonomis, serta tetap sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-08-20 11:05:42',
'status' => 'active',
'approved_by' => 3,
'created_at' => '2026-08-20 11:05:42',
'updated_at' => '2026-08-20 11:05:42',
'deleted_at' => NULL,
),
43 => 
array (
'id' => 75,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 77,
'quotation_id' => 100,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0043',
'final_amount' => '24045000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1050 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 21 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Atas kerjasamanya kami ucapkan 
Terima kasih
',
'awarded_at' => '2026-08-20 11:14:23',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-20 11:14:23',
'updated_at' => '2026-08-20 11:14:23',
'deleted_at' => NULL,
),
44 => 
array (
'id' => 76,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 78,
'quotation_id' => 103,
'vendor_id' => 55,
'tender_number' => 'TNDR-2026-0044',
'final_amount' => '6480000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 300 kg.

Mohon dilakukan pengiriman sesuai jadwal pada Jumat, 21 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih',
'awarded_at' => '2026-08-20 14:20:11',
'status' => 'active',
'approved_by' => 6,
'created_at' => '2026-08-20 14:20:11',
'updated_at' => '2026-08-20 14:20:11',
'deleted_at' => NULL,
),
45 => 
array (
'id' => 77,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 81,
'quotation_id' => 105,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0045',
'final_amount' => '24150000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1050 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 22 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-21 13:48:37',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-21 13:48:37',
'updated_at' => '2026-08-21 13:48:37',
'deleted_at' => NULL,
),
46 => 
array (
'id' => 78,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 82,
'quotation_id' => 107,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0046',
'final_amount' => '27480000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1200 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 24 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-21 13:49:37',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-21 13:49:37',
'updated_at' => '2026-08-21 13:49:37',
'deleted_at' => NULL,
),
47 => 
array (
'id' => 79,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 83,
'quotation_id' => 112,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0047',
'final_amount' => '7525000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 350kg.

Mohon dilakukan pengiriman sesuai jadwal pada Sabtu, 22 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih',
'awarded_at' => '2026-08-21 14:36:51',
'status' => 'active',
'approved_by' => 6,
'created_at' => '2026-08-21 14:36:51',
'updated_at' => '2026-08-21 14:36:51',
'deleted_at' => NULL,
),
48 => 
array (
'id' => 80,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 84,
'quotation_id' => 109,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0048',
'final_amount' => '10750000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 500kg.

Mohon dilakukan pengiriman sesuai jadwal pada Senin, 24 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
D',
'awarded_at' => '2026-08-21 14:37:57',
'status' => 'active',
'approved_by' => 6,
'created_at' => '2026-08-21 14:37:57',
'updated_at' => '2026-08-21 14:37:57',
'deleted_at' => NULL,
),
49 => 
array (
'id' => 81,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 86,
'quotation_id' => 114,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0049',
'final_amount' => '4400000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 200kg.

Mohon dilakukan pengiriman sesuai jadwal pada Rabu, 24 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih',
'awarded_at' => '2026-08-24 14:37:47',
'status' => 'active',
'approved_by' => 6,
'created_at' => '2026-08-24 14:37:47',
'updated_at' => '2026-08-24 14:37:47',
'deleted_at' => NULL,
),
50 => 
array (
'id' => 82,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 85,
'quotation_id' => 116,
'vendor_id' => 117,
'tender_number' => 'TNDR-2026-0050',
'final_amount' => '10547130.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, TATA JAYA ACRYLIC ditetapkan sebagai vendor EVENT NATAL 2026 ACRILLIC NATAL karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp 11.341.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 10.547.130,- atau 93% dari budget, dengan nilai penghematan sebesar Rp 793.870,- (7%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-08-24 16:17:59',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-08-24 16:17:59',
'updated_at' => '2026-08-24 16:17:59',
'deleted_at' => NULL,
),
51 => 
array (
'id' => 83,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 87,
'quotation_id' => 117,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0051',
'final_amount' => '14400000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 600 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 26 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-26 11:08:12',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-26 11:08:12',
'updated_at' => '2026-08-26 11:08:12',
'deleted_at' => NULL,
),
52 => 
array (
'id' => 84,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 88,
'quotation_id' => 119,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0052',
'final_amount' => '25095000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 1050 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 27 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-26 13:26:10',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-26 13:26:10',
'updated_at' => '2026-08-26 13:26:10',
'deleted_at' => NULL,
),
53 => 
array (
'id' => 85,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 60,
'quotation_id' => 74,
'vendor_id' => 107,
'tender_number' => 'TNDR-2026-0053',
'final_amount' => '148080000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, CV HARMONI GLOBALINDO ditetapkan sebagai vendor pengadaan Box cake Untuk Outlet karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik.

Budget yang telah ditetapkan sebesar Rp145.965.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp117.937.500,- atau sebesar 80,80% dari budget yang telah ditetapkan, dengan nilai penghematan sebesar Rp28.027.500,- atau sebesar 19,20% dibandingkan dengan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien dan ekonomis, serta tetap sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-08-26 13:51:21',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-08-26 13:51:21',
'updated_at' => '2026-08-26 13:51:21',
'deleted_at' => NULL,
),
54 => 
array (
'id' => 86,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 89,
'quotation_id' => 121,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0054',
'final_amount' => '10845000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 450 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 27 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-27 10:10:42',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-27 10:10:42',
'updated_at' => '2026-08-27 10:10:42',
'deleted_at' => NULL,
),
55 => 
array (
'id' => 87,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 90,
'quotation_id' => 123,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0055',
'final_amount' => '21465000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 28 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-27 13:45:35',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-27 13:45:35',
'updated_at' => '2026-08-27 13:45:35',
'deleted_at' => NULL,
),
56 => 
array (
'id' => 88,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 91,
'quotation_id' => 124,
'vendor_id' => 55,
'tender_number' => 'TNDR-2026-0056',
'final_amount' => '6990000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 300kg.

Mohon dilakukan pengiriman sesuai jadwal pada Jumat, 28 Agustus 2026. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih',
'awarded_at' => '2026-08-27 14:28:06',
'status' => 'active',
'approved_by' => 6,
'created_at' => '2026-08-27 14:28:06',
'updated_at' => '2026-08-27 14:28:06',
'deleted_at' => NULL,
),
57 => 
array (
'id' => 89,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 99,
'quotation_id' => 130,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0057',
'final_amount' => '21420000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 29 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-28 11:53:17',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-28 11:53:17',
'updated_at' => '2026-08-28 11:53:17',
'deleted_at' => NULL,
),
58 => 
array (
'id' => 90,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 79,
'quotation_id' => 104,
'vendor_id' => 42,
'tender_number' => 'TNDR-2026-0058',
'final_amount' => '4766600.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan Kebutuhan Natal (Isolasi, Lem, Double tape)

Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih',
'awarded_at' => '2026-08-28 13:56:02',
'status' => 'active',
'approved_by' => 6,
'created_at' => '2026-08-28 13:56:02',
'updated_at' => '2026-08-28 13:56:02',
'deleted_at' => NULL,
),
59 => 
array (
'id' => 91,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 100,
'quotation_id' => 133,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0059',
'final_amount' => '8800000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 400 kg. Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 31 Agustus 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-08-28 15:21:30',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-08-28 15:21:30',
'updated_at' => '2026-08-28 15:21:30',
'deleted_at' => NULL,
),
60 => 
array (
'id' => 92,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 95,
'quotation_id' => 129,
'vendor_id' => 176,
'tender_number' => 'TNDR-2026-0060',
'final_amount' => '640000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan Form Penerimaan Bank. Mohon dilakukan pengiriman sesuai jadwal delivery date yang tertera pada pada PO kami
Setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. 
Terima kasih',
'awarded_at' => '2026-08-28 16:41:58',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-08-28 16:41:58',
'updated_at' => '2026-08-28 16:41:58',
'deleted_at' => NULL,
),
61 => 
array (
'id' => 93,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 102,
'quotation_id' => 140,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0061',
'final_amount' => '10710000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 450 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 31 Agustus 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-31 11:17:06',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-31 11:17:06',
'updated_at' => '2026-08-31 11:17:06',
'deleted_at' => NULL,
),
62 => 
array (
'id' => 94,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 94,
'quotation_id' => 127,
'vendor_id' => 181,
'tender_number' => 'TNDR-2026-0062',
'final_amount' => '13800000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan keripik pisang madu sebanyak 40 dus. Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 8 September 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-08-31 11:46:00',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-08-31 11:46:00',
'updated_at' => '2026-08-31 11:46:00',
'deleted_at' => NULL,
),
63 => 
array (
'id' => 95,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 103,
'quotation_id' => 142,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0063',
'final_amount' => '21285000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 01 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-08-31 11:52:29',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-08-31 11:52:29',
'updated_at' => '2026-08-31 11:52:29',
'deleted_at' => NULL,
),
64 => 
array (
'id' => 96,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 105,
'quotation_id' => 144,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0064',
'final_amount' => '11100000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 500 kg. Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 01 September 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-08-31 18:08:52',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-08-31 18:08:52',
'updated_at' => '2026-08-31 18:08:52',
'deleted_at' => NULL,
),
65 => 
array (
'id' => 97,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 107,
'quotation_id' => 147,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0065',
'final_amount' => '21240000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 02 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-09-01 13:06:52',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-01 13:06:52',
'updated_at' => '2026-09-01 13:06:52',
'deleted_at' => NULL,
),
66 => 
array (
'id' => 98,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 108,
'quotation_id' => 148,
'vendor_id' => 55,
'tender_number' => 'TNDR-2026-0066',
'final_amount' => '9000000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 400 kg dengan final harga Rp 22.300/kg (-0,89% dari penawaran awal) .Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 02 September 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-09-01 13:50:43',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-01 13:50:43',
'updated_at' => '2026-09-01 13:50:43',
'deleted_at' => NULL,
),
67 => 
array (
'id' => 99,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 106,
'quotation_id' => 151,
'vendor_id' => 117,
'tender_number' => 'TNDR-2026-0067',
'final_amount' => '2317500.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, TATA JAYA ACRYLIC ditetapkan sebagai vendor EVENT NATAL ACRYLIC NATAL karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp2.025.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp2.317.500,- dari budget, dengan nilai kelebihan anggaran sebesar Rp292.500,- (14,44%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-02 10:42:42',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-02 10:42:42',
'updated_at' => '2026-09-02 10:42:42',
'deleted_at' => NULL,
),
68 => 
array (
'id' => 100,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 111,
'quotation_id' => 152,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0068',
'final_amount' => '21375000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 03 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-09-02 11:06:50',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-02 11:06:50',
'updated_at' => '2026-09-02 11:06:50',
'deleted_at' => NULL,
),
69 => 
array (
'id' => 101,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 96,
'quotation_id' => 136,
'vendor_id' => 127,
'tender_number' => 'TNDR-2026-0069',
'final_amount' => '59358200.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT HARAZAKI SURYA ABADI ditetapkan sebagai vendor pengadaan Box Full Mika Untuk Produksi Cokelat ( NATAL 2026 ) karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp. 67.232.917,50 Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 59,358,200,-  atau 88,29 % dari budget, dengan nilai penghematan sebesar Rp 7.874.717,50,- (11,71%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-02 14:00:40',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-09-02 14:00:40',
'updated_at' => '2026-09-02 14:00:40',
'deleted_at' => NULL,
),
70 => 
array (
'id' => 102,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 114,
'quotation_id' => 154,
'vendor_id' => 55,
'tender_number' => 'TNDR-2026-0070',
'final_amount' => '4560000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 200 kg  .Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 03 September 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-09-02 14:53:13',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-02 14:53:13',
'updated_at' => '2026-09-02 14:53:13',
'deleted_at' => NULL,
),
71 => 
array (
'id' => 103,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 92,
'quotation_id' => 145,
'vendor_id' => 95,
'tender_number' => 'TNDR-2026-0071',
'final_amount' => '33148100.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT Satria Media ditetapkan sebagai vendor pengadaan Box Sekat Natal 2026 Untuk Produksi karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp. 44.760.450,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 33,148,100,- atau 74,06 % dari budget, dengan nilai penghematan sebesar Rp 11.612.350,- (25,94%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-02 15:04:44',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-09-02 15:04:44',
'updated_at' => '2026-09-02 15:04:44',
'deleted_at' => NULL,
),
72 => 
array (
'id' => 104,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 109,
'quotation_id' => 160,
'vendor_id' => 18,
'tender_number' => 'TNDR-2026-0072',
'final_amount' => '7000000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT. HAKA POLAR INDONESIA ditetapkan sebagai vendor pengadaan AC GREE SPLIT WALL 2 PK TYPE GWC18N1 PENGADAAN AC UNTUK OUTLET CIKARANG karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar 7.369.950,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 7.000.000,- atau 94,98 % dari budget, dengan nilai penghematan sebesar Rp 369.950,- (5,02%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-02 15:52:44',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-09-02 15:52:44',
'updated_at' => '2026-09-02 15:52:44',
'deleted_at' => NULL,
),
73 => 
array (
'id' => 105,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 115,
'quotation_id' => 158,
'vendor_id' => 100,
'tender_number' => 'TNDR-2026-0073',
'final_amount' => '2500000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, H&R Service ditetapkan sebagai vendor pengadaan Ring Haci Ukuran Tinggi = 4 cm, Diameter = 9 cm Untuk Produksi karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp. 2.625.000 ,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 2.500.000 atau 95,24 % dari budget, dengan nilai penghematan sebesar Rp 125.000,- (4,76%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-02 16:07:37',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-09-02 16:07:37',
'updated_at' => '2026-09-02 16:07:37',
'deleted_at' => NULL,
),
74 => 
array (
'id' => 106,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 93,
'quotation_id' => 128,
'vendor_id' => 176,
'tender_number' => 'TNDR-2026-0074',
'final_amount' => '50274250.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, MAJU CEMERLANG INDONESIA ditetapkan sebagai vendor pengadaan packaging mika untuk support event natal EX Jabo  dan memberikan harga terbaik. 

Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan. ',
'awarded_at' => '2026-09-02 17:18:20',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-02 17:18:20',
'updated_at' => '2026-09-02 17:18:20',
'deleted_at' => NULL,
),
75 => 
array (
'id' => 107,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 101,
'quotation_id' => 138,
'vendor_id' => 195,
'tender_number' => 'TNDR-2026-0075',
'final_amount' => '7979000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, Airastore Malang ditetapkan sebagai vendor pengadaan Box Sekat 12 dan sekat 28 Untuk Produksi karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik.

Budget yang telah ditetapkan sebesar Rp. 8.070.500 ,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 7.857.000 atau 97,35 % dari budget, dengan nilai penghematan sebesar Rp 213.500,- (2,65%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-02 17:42:52',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-02 17:42:52',
'updated_at' => '2026-09-02 17:42:52',
'deleted_at' => NULL,
),
76 => 
array (
'id' => 108,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 97,
'quotation_id' => 134,
'vendor_id' => 180,
'tender_number' => 'TNDR-2026-0076',
'final_amount' => '7762000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, Gift Box ditetapkan sebagai vendor pengadaan Acliric untuk kebutuhan natal 2026 karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik.

Budget yang telah ditetapkan sebesar Rp. 7.762.000 ,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 7.638.990 atau 98,41 % dari budget, dengan nilai penghematan sebesar Rp 123.010,- (1,58%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-02 18:21:27',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-02 18:21:27',
'updated_at' => '2026-09-02 18:21:27',
'deleted_at' => NULL,
),
77 => 
array (
'id' => 109,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 110,
'quotation_id' => 161,
'vendor_id' => 159,
'tender_number' => 'TNDR-2026-0077',
'final_amount' => '24000000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, MWT Tekik ditetapkan sebagai vendor pengadaan rak stainless WareHouse EX Jabo dan memberikan harga dan kualitas bahan terbaik.

Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-03 10:21:24',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-03 10:21:24',
'updated_at' => '2026-09-03 10:21:24',
'deleted_at' => NULL,
),
78 => 
array (
'id' => 110,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 116,
'quotation_id' => 157,
'vendor_id' => 199,
'tender_number' => 'TNDR-2026-0078',
'final_amount' => '5100000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT Fajar Putra Plasindo ditetapkan sebagai vendor pengadaan Pallet Kebutuhan Warehouse EX Jabo dan memberikan harga dan kualitas bahan terbaik.

Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-03 11:38:43',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-03 11:38:43',
'updated_at' => '2026-09-03 11:38:43',
'deleted_at' => NULL,
),
79 => 
array (
'id' => 111,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 117,
'quotation_id' => 163,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0079',
'final_amount' => '17775000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 750 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 04 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-09-03 13:39:33',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-03 13:39:33',
'updated_at' => '2026-09-03 13:39:33',
'deleted_at' => NULL,
),
80 => 
array (
'id' => 112,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 120,
'quotation_id' => 167,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0080',
'final_amount' => '5625000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 250 kg .Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 04 September 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-09-03 13:43:05',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-03 13:43:05',
'updated_at' => '2026-09-03 13:43:05',
'deleted_at' => NULL,
),
81 => 
array (
'id' => 113,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 122,
'quotation_id' => 174,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0081',
'final_amount' => '21285000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 07 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-09-04 13:32:42',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-04 13:32:42',
'updated_at' => '2026-09-04 13:32:42',
'deleted_at' => NULL,
),
82 => 
array (
'id' => 114,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 121,
'quotation_id' => 175,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0082',
'final_amount' => '17737500.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 750 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 05 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-09-04 13:33:16',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-04 13:33:16',
'updated_at' => '2026-09-04 13:33:16',
'deleted_at' => NULL,
),
83 => 
array (
'id' => 115,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 123,
'quotation_id' => 179,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0083',
'final_amount' => '6750000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 300 kg .Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 07 September 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-09-04 14:46:51',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-04 14:46:51',
'updated_at' => '2026-09-04 14:46:51',
'deleted_at' => NULL,
),
84 => 
array (
'id' => 116,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 124,
'quotation_id' => 182,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0084',
'final_amount' => '14400000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 600 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 08 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-09-07 11:19:09',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-07 11:19:09',
'updated_at' => '2026-09-07 11:19:09',
'deleted_at' => NULL,
),
85 => 
array (
'id' => 117,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 126,
'quotation_id' => 185,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0085',
'final_amount' => '6750000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 300 kg .Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 08 September 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-09-07 13:49:59',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-07 13:49:59',
'updated_at' => '2026-09-07 13:49:59',
'deleted_at' => NULL,
),
86 => 
array (
'id' => 118,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 127,
'quotation_id' => 187,
'vendor_id' => 10,
'tender_number' => 'TNDR-2026-0086',
'final_amount' => '1160000.00',
'justification' => 'vendor reza raka menang award',
'awarded_at' => '2026-09-07 15:01:50',
'status' => 'active',
'approved_by' => 1,
'created_at' => '2026-09-07 15:01:50',
'updated_at' => '2026-09-07 15:01:50',
'deleted_at' => NULL,
),
87 => 
array (
'id' => 119,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 125,
'quotation_id' => 184,
'vendor_id' => 146,
'tender_number' => 'TNDR-2026-0087',
'final_amount' => '6750000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PURI COMPUTER ditetapkan sebagai vendor PENGADAAN MINI PC UNTUK AHMAD DAHLAN karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp 7.100.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 6.750.000,-. Dengan demikian terdapat penghematan sebesar Rp 350.000,- atau 4,93% dari budget yang tersedia. Penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-07 15:55:07',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-09-07 15:55:07',
'updated_at' => '2026-09-07 15:55:07',
'deleted_at' => NULL,
),
88 => 
array (
'id' => 120,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 112,
'quotation_id' => 159,
'vendor_id' => 167,
'tender_number' => 'TNDR-2026-0088',
'final_amount' => '31720450.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT Disra Mitra Utama ditetapkan sebagai vendor pengadaan Tabung seng 3 ukuran Untuk Produksi natal 2026 karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp. 33.753.720 ,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 31.720.450,-  atau 93,98 % dari budget, dengan nilai penghematan sebesar Rp 2.033.270,- (6,02%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-07 16:38:47',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-09-07 16:38:47',
'updated_at' => '2026-09-07 16:38:47',
'deleted_at' => NULL,
),
89 => 
array (
'id' => 121,
'tenderable_type' => 'App\\Models\\Rfp',
'tenderable_id' => 24,
'quotation_id' => 172,
'vendor_id' => 67,
'tender_number' => 'TNDR-2026-0089',
'final_amount' => '31000000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT. Jogja Teknik Perkasa  ditetapkan sebagai vendor pengadaan Jasa Renovasi Pembuatan Partisi Untuk Warehouse K3-41 karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp. 35.000.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp. 31.000.000,- atau 88,57% dari budget, dengan nilai penghematan sebesar Rp. 4.000.000,- (11,43%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-08 08:38:34',
'status' => 'active',
'approved_by' => 153,
'created_at' => '2026-09-08 08:38:34',
'updated_at' => '2026-09-08 08:38:34',
'deleted_at' => NULL,
),
90 => 
array (
'id' => 122,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 128,
'quotation_id' => 188,
'vendor_id' => 103,
'tender_number' => 'TNDR-2026-0090',
'final_amount' => '7260000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 300 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 08 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-09-08 10:53:13',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-08 10:53:13',
'updated_at' => '2026-09-08 10:53:13',
'deleted_at' => NULL,
),
91 => 
array (
'id' => 123,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 129,
'quotation_id' => 191,
'vendor_id' => 102,
'tender_number' => 'TNDR-2026-0091',
'final_amount' => '21555000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 900 kg. 
Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 09 September 2026,   setelah PO Kami Email. 
Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati.
Terima kasih
',
'awarded_at' => '2026-09-08 10:53:46',
'status' => 'active',
'approved_by' => 5,
'created_at' => '2026-09-08 10:53:46',
'updated_at' => '2026-09-08 10:53:46',
'deleted_at' => NULL,
),
92 => 
array (
'id' => 124,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 130,
'quotation_id' => 193,
'vendor_id' => 77,
'tender_number' => 'TNDR-2026-0092',
'final_amount' => '6825000.00',
'justification' => 'Berdasarkan hasil proses pengadaan, kami menginformasikan bahwa perusahaan Ibu ditetapkan sebagai vendor terpilih (award) untuk pengadaan telur sebanyak 300 kg. Mohon dilakukan pengiriman sesuai jadwal delivery date pada PO, di tanggal 09 September 2026, setelah PO Kami Email. Kami harap produk yang dikirim sesuai dengan spesifikasi dan kualitas yang telah disepakati. Terima kasih',
'awarded_at' => '2026-09-08 13:40:30',
'status' => 'active',
'approved_by' => 4,
'created_at' => '2026-09-08 13:40:30',
'updated_at' => '2026-09-08 13:40:30',
'deleted_at' => NULL,
),
93 => 
array (
'id' => 125,
'tenderable_type' => 'App\\Models\\Rfq',
'tenderable_id' => 119,
'quotation_id' => 169,
'vendor_id' => 18,
'tender_number' => 'TNDR-2026-0093',
'final_amount' => '10498000.00',
'justification' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT. HAKA POLAR INDONESIA ditetapkan sebagai vendor PENGADAAN AC UNTUK GUDANG K3 karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp 13.998.000,-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp 10.498.000,-. Dengan demikian terdapat penghematan sebesar Rp 3.500.000,- atau 25,00% dari budget yang tersedia. Penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan.',
'awarded_at' => '2026-09-08 14:21:46',
'status' => 'active',
'approved_by' => 143,
'created_at' => '2026-09-08 14:21:46',
'updated_at' => '2026-09-08 14:21:46',
'deleted_at' => NULL,
),
));
        
        
    }
}