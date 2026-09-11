<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RfpSubmissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rfp_submissions')->delete();
        
        \DB::table('rfp_submissions')->insert(array (
            0 => 
            array (
                'id' => 22,
                'rfp_id' => 12,
                'vendor_id' => 27,
                'quotation_id' => 12,
                'submitted_at' => '2026-06-17 18:59:36',
                'status' => 'awarded',
                'technical_score_raw' => '90.00',
                'technical_score_weighted' => '63.00',
                'offered_price' => '11500000.00',
                'financial_score_weighted' => '30.00',
                'total_combined_score' => '93.00',
                'evaluator_notes' => 'Vendor has deep understanding on technical working and also proactive to give suitable recommendation for CCTV Installation Work.  Also as commercially, the quotation is 23% lower than budget in PR',
                'created_at' => '2026-06-15 13:09:38',
                'updated_at' => '2026-06-19 14:54:10',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 23,
                'rfp_id' => 12,
                'vendor_id' => 115,
                'quotation_id' => 14,
                'submitted_at' => '2026-06-18 13:54:31',
                'status' => 'technical_scored',
                'technical_score_raw' => '70.00',
                'technical_score_weighted' => '49.00',
                'offered_price' => '15948000.00',
                'financial_score_weighted' => '21.63',
                'total_combined_score' => '70.63',
                'evaluator_notes' => 'Vendor less experience handling CCTV Installation with custom work, based on their feedback during meeting clarification. They expect user to give direction in terms of measurement. Also price is over 6% from budget PR',
                'created_at' => '2026-06-15 13:09:38',
                'updated_at' => '2026-06-19 14:50:04',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 24,
                'rfp_id' => 13,
                'vendor_id' => 115,
                'quotation_id' => NULL,
                'submitted_at' => NULL,
                'status' => 'invited',
                'technical_score_raw' => NULL,
                'technical_score_weighted' => NULL,
                'offered_price' => NULL,
                'financial_score_weighted' => NULL,
                'total_combined_score' => NULL,
                'evaluator_notes' => NULL,
                'created_at' => '2026-06-22 08:50:51',
                'updated_at' => '2026-06-22 08:50:51',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 25,
                'rfp_id' => 13,
                'vendor_id' => 53,
                'quotation_id' => 16,
                'submitted_at' => '2026-06-23 11:20:04',
                'status' => 'technical_scored',
                'technical_score_raw' => '85.00',
                'technical_score_weighted' => '51.00',
                'offered_price' => '75990500.00',
                'financial_score_weighted' => '31.58',
                'total_combined_score' => '82.58',
                'evaluator_notes' => 'Sarana Tiga Pilar also have experience to renovation for Dapur Cokelat\'s Outlet , but commercial offer is higher than Jogja Teknik Perkasa',
                'created_at' => '2026-06-22 08:50:51',
                'updated_at' => '2026-06-26 13:08:03',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 26,
                'rfp_id' => 13,
                'vendor_id' => 67,
                'quotation_id' => 17,
                'submitted_at' => '2026-06-25 18:40:17',
                'status' => 'awarded',
                'technical_score_raw' => '90.00',
                'technical_score_weighted' => '54.00',
                'offered_price' => '60000000.00',
                'financial_score_weighted' => '40.00',
                'total_combined_score' => '94.00',
                'evaluator_notes' => 'Jogja Teknik Perkasa is regular vendor that has familiar with DCI\'s Delpos',
                'created_at' => '2026-06-22 08:50:51',
                'updated_at' => '2026-06-26 17:04:30',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 30,
                'rfp_id' => 15,
                'vendor_id' => 125,
                'quotation_id' => 19,
                'submitted_at' => '2026-07-02 15:09:58',
                'status' => 'technical_scored',
                'technical_score_raw' => '70.00',
                'technical_score_weighted' => '42.00',
                'offered_price' => '95744100.00',
                'financial_score_weighted' => '27.02',
                'total_combined_score' => '69.02',
                'evaluator_notes' => 'Evaluation IT

● Biaya Chat AI dihitung
tambahan per pesan, yaitu
senilai Rp150 per bubble
chat.
● Akun CRM dipisah secara
kaku dengan biaya paket
langganan yang bervariasi
● Grup bantuan koordinasi di
WhatsApp dikenakan biaya
tambahan (additional
charge 4 Juta Perbulan).

Commercial : Offer higher 40% from budget',
                'created_at' => '2026-07-02 09:02:51',
                'updated_at' => '2026-07-08 17:41:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 31,
                'rfp_id' => 15,
                'vendor_id' => 121,
                'quotation_id' => 20,
                'submitted_at' => '2026-07-08 16:57:20',
                'status' => 'awarded',
                'technical_score_raw' => '90.00',
                'technical_score_weighted' => '54.00',
                'offered_price' => '64680000.00',
                'financial_score_weighted' => '40.00',
                'total_combined_score' => '94.00',
                'evaluator_notes' => 'Recommended from IT : 

Sistem berbasis Cloud SaaS
dengan kustomisasi dasbor
penuh serta integrasi mutakhir
mencakup:
1. WA Flow khusus untuk
otomasi alur pemesanan cake .
2. Sinkronisasi data real-time ke
sistem Inventory Stok produk
Dapur Cokelat .
3. Integrasi langsung dengan
Payment System (Payment
Gateway) .

Commercial : 
Final negotiated price achieved 94.8% of the approved budget, resulting in a cost saving of IDR 3.55 million (5.2%) compared to the initial budget.',
                    'created_at' => '2026-07-02 09:02:51',
                    'updated_at' => '2026-07-08 17:42:02',
                    'deleted_at' => NULL,
                ),
                7 => 
                array (
                    'id' => 32,
                    'rfp_id' => 16,
                    'vendor_id' => 138,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-06 17:31:40',
                    'updated_at' => '2026-07-06 17:31:40',
                    'deleted_at' => NULL,
                ),
                8 => 
                array (
                    'id' => 37,
                    'rfp_id' => 16,
                    'vendor_id' => 10,
                    'quotation_id' => 23,
                    'submitted_at' => '2026-07-14 17:58:13',
                    'status' => 'accepted',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => '2000018.00',
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-06 17:48:54',
                    'updated_at' => '2026-07-14 17:58:34',
                    'deleted_at' => NULL,
                ),
                9 => 
                array (
                    'id' => 40,
                    'rfp_id' => 16,
                    'vendor_id' => 9,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-07 11:03:17',
                    'updated_at' => '2026-07-07 11:03:17',
                    'deleted_at' => NULL,
                ),
                10 => 
                array (
                    'id' => 41,
                    'rfp_id' => 16,
                    'vendor_id' => 7,
                    'quotation_id' => 24,
                    'submitted_at' => NULL,
                    'status' => 'accepted',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => '5000000.00',
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-07 11:03:17',
                    'updated_at' => '2026-07-21 11:31:08',
                    'deleted_at' => NULL,
                ),
                11 => 
                array (
                    'id' => 42,
                    'rfp_id' => 15,
                    'vendor_id' => 10,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-08 11:33:31',
                    'updated_at' => '2026-07-08 11:33:31',
                    'deleted_at' => NULL,
                ),
                12 => 
                array (
                    'id' => 43,
                    'rfp_id' => 17,
                    'vendor_id' => 67,
                    'quotation_id' => 25,
                    'submitted_at' => '2026-07-09 09:46:43',
                    'status' => 'awarded',
                    'technical_score_raw' => '90.00',
                    'technical_score_weighted' => '54.00',
                    'offered_price' => '42520000.00',
                    'financial_score_weighted' => '40.00',
                    'total_combined_score' => '94.00',
                    'evaluator_notes' => 'Justifikasi penunjukan vendor : 

1. Penawaran telah melewati proses nego 
2. Final nego mencapai penghematan 27.9% dari budget yang disetujui oleh user.
3. Sudah ada pembanding dari Vendor SUM dengan nilai IDR 62,550,00 dimana itu lebih tinggi 32 % dari penawaran Jogja Teknik Perkasa
4. Vendor merupakan vendor reguler yang sudah memahami teknis lapangan di Dapur Cokelat',
                    'created_at' => '2026-07-08 20:38:58',
                    'updated_at' => '2026-07-09 12:57:44',
                    'deleted_at' => NULL,
                ),
                13 => 
                array (
                    'id' => 44,
                    'rfp_id' => 18,
                    'vendor_id' => 67,
                    'quotation_id' => 31,
                    'submitted_at' => '2026-07-23 17:08:33',
                    'status' => 'awarded',
                    'technical_score_raw' => '90.00',
                    'technical_score_weighted' => '54.00',
                    'offered_price' => '20000000.00',
                    'financial_score_weighted' => '40.00',
                    'total_combined_score' => '94.00',
                    'evaluator_notes' => 'Jogja Teknik Perkasa is the original vendor who setup plumbing at Menteng Outlet, so they know the detail condition and how to repair the leaking',
                    'created_at' => '2026-07-17 20:55:05',
                    'updated_at' => '2026-07-24 12:54:14',
                    'deleted_at' => NULL,
                ),
                14 => 
                array (
                    'id' => 45,
                    'rfp_id' => 18,
                    'vendor_id' => 53,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'technical_scored',
                    'technical_score_raw' => '80.00',
                    'technical_score_weighted' => '48.00',
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => '48.00',
                    'evaluator_notes' => 'Sarana Tiga Pilar has technical ability to repair the leaking but, their price quite high compare with approved budget is 10% higher, while Jogja Teknik only offer 67% from approved budget',
                    'created_at' => '2026-07-17 20:55:05',
                    'updated_at' => '2026-07-24 08:54:13',
                    'deleted_at' => NULL,
                ),
                15 => 
                array (
                    'id' => 46,
                    'rfp_id' => 19,
                    'vendor_id' => 9,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-21 17:50:03',
                    'updated_at' => '2026-07-21 17:50:03',
                    'deleted_at' => NULL,
                ),
                16 => 
                array (
                    'id' => 47,
                    'rfp_id' => 19,
                    'vendor_id' => 10,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-21 17:50:03',
                    'updated_at' => '2026-07-21 17:50:03',
                    'deleted_at' => NULL,
                ),
                17 => 
                array (
                    'id' => 48,
                    'rfp_id' => 19,
                    'vendor_id' => 12,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-21 17:50:03',
                    'updated_at' => '2026-07-21 17:50:03',
                    'deleted_at' => NULL,
                ),
                18 => 
                array (
                    'id' => 49,
                    'rfp_id' => 20,
                    'vendor_id' => 10,
                    'quotation_id' => 44,
                    'submitted_at' => NULL,
                    'status' => 'accepted',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => '400000.00',
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-21 17:51:48',
                    'updated_at' => '2026-07-28 14:22:05',
                    'deleted_at' => NULL,
                ),
                19 => 
                array (
                    'id' => 50,
                    'rfp_id' => 20,
                    'vendor_id' => 12,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-21 17:51:48',
                    'updated_at' => '2026-07-21 17:51:48',
                    'deleted_at' => NULL,
                ),
                20 => 
                array (
                    'id' => 51,
                    'rfp_id' => 20,
                    'vendor_id' => 9,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-21 17:51:48',
                    'updated_at' => '2026-07-21 17:51:48',
                    'deleted_at' => NULL,
                ),
                21 => 
                array (
                    'id' => 52,
                    'rfp_id' => 20,
                    'vendor_id' => 7,
                    'quotation_id' => NULL,
                    'submitted_at' => NULL,
                    'status' => 'invited',
                    'technical_score_raw' => NULL,
                    'technical_score_weighted' => NULL,
                    'offered_price' => NULL,
                    'financial_score_weighted' => NULL,
                    'total_combined_score' => NULL,
                    'evaluator_notes' => NULL,
                    'created_at' => '2026-07-21 19:34:29',
                    'updated_at' => '2026-07-21 19:34:29',
                    'deleted_at' => NULL,
                ),
                22 => 
                array (
                    'id' => 53,
                    'rfp_id' => 21,
                    'vendor_id' => 67,
                    'quotation_id' => 41,
                    'submitted_at' => '2026-07-29 10:50:36',
                    'status' => 'awarded',
                    'technical_score_raw' => '80.00',
                    'technical_score_weighted' => '48.00',
                    'offered_price' => '41966900.00',
                    'financial_score_weighted' => '40.00',
                    'total_combined_score' => '88.00',
                    'evaluator_notes' => 'Berdasarkan hasil evaluasi teknis dan komersial serta proses negosiasi, PT Jogja Teknik Perkasa  ditetapkan sebagai vendor Renovasi Delpo Palmerah  karena memenuhi spesifikasi yang dipersyaratkan dan memberikan harga terbaik. 

Budget yang telah ditetapkan sebesar Rp62.276.900-. Setelah proses negosiasi, diperoleh harga akhir sebesar Rp IDR 41,966,900. atau 67.39 % dari budget, dengan nilai penghematan sebesar  Rp 20,310,000 (32.61%) dibandingkan budget yang tersedia. Dengan demikian, penunjukan vendor dinilai efisien, ekonomis, dan sesuai dengan kebutuhan perusahaan. ',
                        'created_at' => '2026-07-25 08:13:43',
                        'updated_at' => '2026-07-29 21:28:27',
                        'deleted_at' => NULL,
                    ),
                    23 => 
                    array (
                        'id' => 54,
                        'rfp_id' => 22,
                        'vendor_id' => 10,
                        'quotation_id' => NULL,
                        'submitted_at' => NULL,
                        'status' => 'invited',
                        'technical_score_raw' => NULL,
                        'technical_score_weighted' => NULL,
                        'offered_price' => NULL,
                        'financial_score_weighted' => NULL,
                        'total_combined_score' => NULL,
                        'evaluator_notes' => NULL,
                        'created_at' => '2026-08-04 10:17:15',
                        'updated_at' => '2026-08-04 10:17:15',
                        'deleted_at' => NULL,
                    ),
                    24 => 
                    array (
                        'id' => 55,
                        'rfp_id' => 23,
                        'vendor_id' => 10,
                        'quotation_id' => NULL,
                        'submitted_at' => NULL,
                        'status' => 'invited',
                        'technical_score_raw' => NULL,
                        'technical_score_weighted' => NULL,
                        'offered_price' => NULL,
                        'financial_score_weighted' => NULL,
                        'total_combined_score' => NULL,
                        'evaluator_notes' => NULL,
                        'created_at' => '2026-08-04 10:18:22',
                        'updated_at' => '2026-08-04 10:18:22',
                        'deleted_at' => NULL,
                    ),
                    25 => 
                    array (
                        'id' => 56,
                        'rfp_id' => 24,
                        'vendor_id' => 67,
                        'quotation_id' => 172,
                        'submitted_at' => '2026-09-07 17:28:17',
                        'status' => 'awarded',
                        'technical_score_raw' => '85.00',
                        'technical_score_weighted' => '51.00',
                        'offered_price' => '31000000.00',
                        'financial_score_weighted' => '40.00',
                        'total_combined_score' => '91.00',
                        'evaluator_notes' => 'Urgent kebutuhan penyimpanan bahan baku yang memerlukan ruang berpendingin',
                        'created_at' => '2026-09-03 10:12:54',
                        'updated_at' => '2026-09-08 08:38:34',
                        'deleted_at' => NULL,
                    ),
                    26 => 
                    array (
                        'id' => 57,
                        'rfp_id' => 24,
                        'vendor_id' => 115,
                        'quotation_id' => 173,
                        'submitted_at' => '2026-09-04 21:43:49',
                        'status' => 'technical_scored',
                        'technical_score_raw' => '80.00',
                        'technical_score_weighted' => '48.00',
                        'offered_price' => '37500000.00',
                        'financial_score_weighted' => '33.07',
                        'total_combined_score' => '81.07',
                        'evaluator_notes' => 'Urgent kebutuhan penyimpanan bahan baku yang memerlukan ruang berpendingin',
                        'created_at' => '2026-09-03 10:12:54',
                        'updated_at' => '2026-09-08 08:29:52',
                        'deleted_at' => NULL,
                    ),
                    27 => 
                    array (
                        'id' => 58,
                        'rfp_id' => 24,
                        'vendor_id' => 7,
                        'quotation_id' => NULL,
                        'submitted_at' => NULL,
                        'status' => 'invited',
                        'technical_score_raw' => NULL,
                        'technical_score_weighted' => NULL,
                        'offered_price' => NULL,
                        'financial_score_weighted' => NULL,
                        'total_combined_score' => NULL,
                        'evaluator_notes' => NULL,
                        'created_at' => '2026-09-03 10:12:54',
                        'updated_at' => '2026-09-03 10:12:54',
                        'deleted_at' => NULL,
                    ),
                ));
        
        
    }
}