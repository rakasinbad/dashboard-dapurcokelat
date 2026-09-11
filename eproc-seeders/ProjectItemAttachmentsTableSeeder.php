<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectItemAttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_item_attachments')->delete();
        
        \DB::table('project_item_attachments')->insert(array (
            0 => 
            array (
                'id' => 19,
                'project_item_id' => 31,
                'file_path' => 'project-items/attachments/CCTV Bracket & Railing_Design.jpeg',
                'file_name' => 'CCTV Bracket & Railing_Design.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 93051,
                'created_at' => '2026-06-15 12:50:55',
                'updated_at' => '2026-06-15 12:50:55',
            ),
            1 => 
            array (
                'id' => 20,
                'project_item_id' => 35,
                'file_path' => 'project-items/attachments/Design Fasad Delivery Point_DCI.jpeg',
                'file_name' => 'Design Fasad Delivery Point_DCI.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 128888,
                'created_at' => '2026-06-22 08:36:26',
                'updated_at' => '2026-06-22 08:36:26',
            ),
            2 => 
            array (
                'id' => 21,
                'project_item_id' => 35,
                'file_path' => 'project-items/attachments/Lokasi Renovasi Fasad Delivery Point Phase 1 - Google Sheets.pdf',
                'file_name' => 'Lokasi Renovasi Fasad Delivery Point Phase 1 - Google Sheets.pdf',
                'file_type' => 'application/pdf',
                'file_size' => 3047027,
                'created_at' => '2026-06-22 08:36:26',
                'updated_at' => '2026-06-22 08:36:26',
            ),
            3 => 
            array (
                'id' => 22,
                'project_item_id' => 40,
                'file_path' => 'project-items/attachments/Dapur Cokelat Indonesia, PT. Mail - PRINTING MATERI - STICKER KACA DELIVERY POINT - FRANCHISE.pdf',
                'file_name' => 'Dapur Cokelat Indonesia, PT. Mail - PRINTING MATERI - STICKER KACA DELIVERY POINT - FRANCHISE.pdf',
                'file_type' => 'application/pdf',
                'file_size' => 321510,
                'created_at' => '2026-06-25 16:51:40',
                'updated_at' => '2026-06-25 16:51:40',
            ),
            4 => 
            array (
                'id' => 24,
                'project_item_id' => 163,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-20 at 16.21.58.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-20 at 16.21.58.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 63788,
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:39:02',
            ),
            5 => 
            array (
                'id' => 25,
                'project_item_id' => 164,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-20 at 16.23.51.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-20 at 16.23.51.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 42095,
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:39:02',
            ),
            6 => 
            array (
                'id' => 26,
                'project_item_id' => 165,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-20 at 16.25.43.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-20 at 16.25.43.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 34427,
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:39:02',
            ),
            7 => 
            array (
                'id' => 27,
                'project_item_id' => 166,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-20 at 16.26.37.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-20 at 16.26.37.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 39556,
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:39:02',
            ),
            8 => 
            array (
                'id' => 28,
                'project_item_id' => 167,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-20 at 16.27.17.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-20 at 16.27.17.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 44433,
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:39:02',
            ),
            9 => 
            array (
                'id' => 29,
                'project_item_id' => 168,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-20 at 16.31.35.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-20 at 16.31.35.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 36085,
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:39:02',
            ),
            10 => 
            array (
                'id' => 30,
                'project_item_id' => 169,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-20 at 16.32.26.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-20 at 16.32.26.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 36188,
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:39:02',
            ),
            11 => 
            array (
                'id' => 31,
                'project_item_id' => 170,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-20 at 16.33.38.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-20 at 16.33.38.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 34051,
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:39:02',
            ),
            12 => 
            array (
                'id' => 32,
                'project_item_id' => 181,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-22 at 14.45.19.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-22 at 14.45.19.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 42854,
                'created_at' => '2026-07-22 14:47:00',
                'updated_at' => '2026-07-22 14:47:00',
            ),
            13 => 
            array (
                'id' => 33,
                'project_item_id' => 182,
                'file_path' => 'project-items/attachments/16 W.jpeg',
                'file_name' => '16 W.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 64456,
                'created_at' => '2026-07-24 10:19:33',
                'updated_at' => '2026-07-24 10:19:33',
            ),
            14 => 
            array (
                'id' => 34,
                'project_item_id' => 183,
                'file_path' => 'project-items/attachments/18 W.jpeg',
                'file_name' => '18 W.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 42095,
                'created_at' => '2026-07-24 10:19:33',
                'updated_at' => '2026-07-24 10:19:33',
            ),
            15 => 
            array (
                'id' => 35,
                'project_item_id' => 184,
                'file_path' => 'project-items/attachments/40 W.jpeg',
                'file_name' => '40 W.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 34427,
                'created_at' => '2026-07-24 10:19:33',
                'updated_at' => '2026-07-24 10:19:33',
            ),
            16 => 
            array (
                'id' => 36,
                'project_item_id' => 185,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-24 at 15.10.15.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-24 at 15.10.15.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 25628,
                'created_at' => '2026-07-24 15:16:25',
                'updated_at' => '2026-07-24 15:16:25',
            ),
            17 => 
            array (
                'id' => 37,
                'project_item_id' => 186,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-24 at 15.11.16.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-24 at 15.11.16.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 24654,
                'created_at' => '2026-07-24 15:16:25',
                'updated_at' => '2026-07-24 15:16:25',
            ),
            18 => 
            array (
                'id' => 38,
                'project_item_id' => 187,
                'file_path' => 'project-items/attachments/Kondisi Delpo Palmerah.pdf',
                'file_name' => 'Kondisi Delpo Palmerah.pdf',
                'file_type' => 'application/pdf',
                'file_size' => 495157,
                'created_at' => '2026-07-25 08:09:19',
                'updated_at' => '2026-07-25 08:09:19',
            ),
            19 => 
            array (
                'id' => 39,
                'project_item_id' => 188,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-27 at 13.17.32.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-27 at 13.17.32.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 61729,
                'created_at' => '2026-07-27 13:19:18',
                'updated_at' => '2026-07-27 13:19:18',
            ),
            20 => 
            array (
                'id' => 40,
                'project_item_id' => 191,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-28 at 14.10.11.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-28 at 14.10.11.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 64378,
                'created_at' => '2026-07-28 15:03:50',
                'updated_at' => '2026-07-28 15:03:50',
            ),
            21 => 
            array (
                'id' => 41,
                'project_item_id' => 193,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-28 at 15.29.39.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-28 at 15.29.39.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 59938,
                'created_at' => '2026-07-28 15:30:51',
                'updated_at' => '2026-07-28 15:30:51',
            ),
            22 => 
            array (
                'id' => 43,
                'project_item_id' => 194,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-07-29 at 10.42.15.jpeg',
                'file_name' => 'WhatsApp Image 2026-07-29 at 10.42.15.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 110429,
                'created_at' => '2026-07-29 11:35:02',
                'updated_at' => '2026-07-29 11:35:02',
            ),
            23 => 
            array (
                'id' => 44,
                'project_item_id' => 295,
                'file_path' => 'livewire-file:4hBf8cGiiuIbt2dkHG0vyWtHz3RSHOhoKoL1L53X.jpeg',
                'file_name' => NULL,
                'file_type' => 'image/jpeg',
                'file_size' => 185520,
                'created_at' => '2026-08-27 13:18:23',
                'updated_at' => '2026-08-27 13:18:23',
            ),
            24 => 
            array (
                'id' => 45,
                'project_item_id' => 296,
                'file_path' => 'project-items/attachments/Sekat 12.jpeg',
                'file_name' => 'Sekat 12.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 226374,
                'created_at' => '2026-08-27 13:18:23',
                'updated_at' => '2026-08-27 13:18:23',
            ),
            25 => 
            array (
                'id' => 46,
                'project_item_id' => 306,
                'file_path' => 'project-items/attachments/Box full mika D 11,2 x 7,8 x 8,5 cm.jpeg',
                'file_name' => 'Box full mika D 11,2 x 7,8 x 8,5 cm.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 154626,
                'created_at' => '2026-08-27 14:41:08',
                'updated_at' => '2026-08-27 14:41:08',
            ),
            26 => 
            array (
                'id' => 47,
                'project_item_id' => 307,
                'file_path' => 'project-items/attachments/Box full mika E  8,5 x 8,5 x 17,5 cm.jpeg',
                'file_name' => 'Box full mika E  8,5 x 8,5 x 17,5 cm.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 181759,
                'created_at' => '2026-08-27 14:41:08',
                'updated_at' => '2026-08-27 14:41:08',
            ),
            27 => 
            array (
                'id' => 48,
                'project_item_id' => 308,
                'file_path' => 'project-items/attachments/Box full mika B  18 x 13 x 6 cm.jpeg',
                'file_name' => 'Box full mika B  18 x 13 x 6 cm.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 192234,
                'created_at' => '2026-08-27 14:41:08',
                'updated_at' => '2026-08-27 14:41:08',
            ),
            28 => 
            array (
                'id' => 49,
                'project_item_id' => 332,
                'file_path' => 'project-items/attachments/HSW-A.jpg',
                'file_name' => 'HSW-A.jpg',
                'file_type' => 'image/jpeg',
                'file_size' => 33989,
                'created_at' => '2026-08-27 16:36:11',
                'updated_at' => '2026-08-27 16:36:11',
            ),
            29 => 
            array (
                'id' => 50,
                'project_item_id' => 333,
                'file_path' => 'project-items/attachments/HSW-B.jpg',
                'file_name' => 'HSW-B.jpg',
                'file_type' => 'image/jpeg',
                'file_size' => 18671,
                'created_at' => '2026-08-27 16:36:11',
                'updated_at' => '2026-08-27 16:36:11',
            ),
            30 => 
            array (
                'id' => 51,
                'project_item_id' => 334,
                'file_path' => 'project-items/attachments/HSW-C.jpg',
                'file_name' => 'HSW-C.jpg',
                'file_type' => 'image/jpeg',
                'file_size' => 10688,
                'created_at' => '2026-08-27 16:36:11',
                'updated_at' => '2026-08-27 16:36:11',
            ),
            31 => 
            array (
                'id' => 52,
                'project_item_id' => 346,
                'file_path' => 'project-items/attachments/HSW-A.2026.jpeg',
                'file_name' => 'HSW-A.2026.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 48486,
                'created_at' => '2026-08-31 14:29:20',
                'updated_at' => '2026-08-31 14:29:20',
            ),
            32 => 
            array (
                'id' => 53,
                'project_item_id' => 347,
                'file_path' => 'project-items/attachments/HSW-B.2026.jpeg',
                'file_name' => 'HSW-B.2026.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 26875,
                'created_at' => '2026-08-31 14:29:20',
                'updated_at' => '2026-08-31 14:29:20',
            ),
            33 => 
            array (
                'id' => 54,
                'project_item_id' => 348,
                'file_path' => 'project-items/attachments/HSW-C.2026.jpeg',
                'file_name' => 'HSW-C.2026.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 19058,
                'created_at' => '2026-08-31 14:29:20',
                'updated_at' => '2026-08-31 14:29:20',
            ),
            34 => 
            array (
                'id' => 55,
                'project_item_id' => 352,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-09-01 at 15.58.16.jpeg',
                'file_name' => 'WhatsApp Image 2026-09-01 at 15.58.16.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 318659,
                'created_at' => '2026-09-01 16:01:02',
                'updated_at' => '2026-09-01 16:01:02',
            ),
            35 => 
            array (
                'id' => 56,
                'project_item_id' => 357,
                'file_path' => 'project-items/attachments/SEKAT DALAM HEMPERS NATAL 2026.jpeg',
                'file_name' => 'SEKAT DALAM HEMPERS NATAL 2026.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 205722,
                'created_at' => '2026-09-02 11:19:21',
                'updated_at' => '2026-09-02 11:19:21',
            ),
            36 => 
            array (
                'id' => 57,
                'project_item_id' => 358,
                'file_path' => 'project-items/attachments/SEKAT DALAM HEMPERS NATAL 2026.jpeg',
                'file_name' => 'SEKAT DALAM HEMPERS NATAL 2026.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 205722,
                'created_at' => '2026-09-02 11:19:21',
                'updated_at' => '2026-09-02 11:19:21',
            ),
            37 => 
            array (
                'id' => 58,
                'project_item_id' => 359,
                'file_path' => 'project-items/attachments/SEKAT DALAM HEMPERS NATAL 2026.jpeg',
                'file_name' => 'SEKAT DALAM HEMPERS NATAL 2026.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 205722,
                'created_at' => '2026-09-02 11:19:21',
                'updated_at' => '2026-09-02 11:19:21',
            ),
            38 => 
            array (
                'id' => 59,
                'project_item_id' => 362,
                'file_path' => 'project-items/attachments/WhatsApp Image 2026-09-02 at 13.47.34.jpeg',
                'file_name' => 'WhatsApp Image 2026-09-02 at 13.47.34.jpeg',
                'file_type' => 'image/jpeg',
                'file_size' => 154391,
                'created_at' => '2026-09-02 13:48:47',
                'updated_at' => '2026-09-02 13:48:47',
            ),
            39 => 
            array (
                'id' => 60,
                'project_item_id' => 363,
                'file_path' => 'project-items/attachments/Brief_RFP_Pekerjaan_Partisi_K3_41_Tekno.pdf',
                'file_name' => 'Brief_RFP_Pekerjaan_Partisi_K3_41_Tekno.pdf',
                'file_type' => 'application/pdf',
                'file_size' => 20012,
                'created_at' => '2026-09-02 21:10:58',
                'updated_at' => '2026-09-03 10:15:37',
            ),
        ));
        
        
    }
}