<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendor_category')->delete();
        
        \DB::table('vendor_category')->insert(array (
            0 => 
            array (
                'id' => 27,
                'vendor_id' => 7,
                'business_classification_id' => 2,
                'created_at' => '2026-03-21 21:38:30',
                'updated_at' => '2026-03-21 21:38:30',
            ),
            1 => 
            array (
                'id' => 28,
                'vendor_id' => 7,
                'business_classification_id' => 5,
                'created_at' => '2026-03-21 21:38:30',
                'updated_at' => '2026-03-21 21:38:30',
            ),
            2 => 
            array (
                'id' => 29,
                'vendor_id' => 10,
                'business_classification_id' => 2,
                'created_at' => '2026-03-22 14:01:53',
                'updated_at' => '2026-03-22 14:01:53',
            ),
            3 => 
            array (
                'id' => 30,
                'vendor_id' => 10,
                'business_classification_id' => 4,
                'created_at' => '2026-03-22 14:01:53',
                'updated_at' => '2026-03-22 14:01:53',
            ),
            4 => 
            array (
                'id' => 33,
                'vendor_id' => 12,
                'business_classification_id' => 1,
                'created_at' => '2026-03-24 16:43:51',
                'updated_at' => '2026-03-24 16:43:51',
            ),
            5 => 
            array (
                'id' => 34,
                'vendor_id' => 12,
                'business_classification_id' => 2,
                'created_at' => '2026-03-24 16:43:51',
                'updated_at' => '2026-03-24 16:43:51',
            ),
            6 => 
            array (
                'id' => 35,
                'vendor_id' => 12,
                'business_classification_id' => 3,
                'created_at' => '2026-03-24 16:43:51',
                'updated_at' => '2026-03-24 16:43:51',
            ),
            7 => 
            array (
                'id' => 36,
                'vendor_id' => 12,
                'business_classification_id' => 4,
                'created_at' => '2026-03-24 16:43:51',
                'updated_at' => '2026-03-24 16:43:51',
            ),
            8 => 
            array (
                'id' => 37,
                'vendor_id' => 12,
                'business_classification_id' => 5,
                'created_at' => '2026-03-24 16:43:51',
                'updated_at' => '2026-03-24 16:43:51',
            ),
            9 => 
            array (
                'id' => 38,
                'vendor_id' => 12,
                'business_classification_id' => 6,
                'created_at' => '2026-03-24 16:43:51',
                'updated_at' => '2026-03-24 16:43:51',
            ),
            10 => 
            array (
                'id' => 39,
                'vendor_id' => 16,
                'business_classification_id' => 2,
                'created_at' => '2026-03-25 09:16:55',
                'updated_at' => '2026-03-25 09:16:55',
            ),
            11 => 
            array (
                'id' => 40,
                'vendor_id' => 15,
                'business_classification_id' => 5,
                'created_at' => '2026-03-25 09:25:41',
                'updated_at' => '2026-03-25 09:25:41',
            ),
            12 => 
            array (
                'id' => 41,
                'vendor_id' => 13,
                'business_classification_id' => 29,
                'created_at' => '2026-03-25 10:41:07',
                'updated_at' => '2026-03-25 10:41:07',
            ),
            13 => 
            array (
                'id' => 42,
                'vendor_id' => 13,
                'business_classification_id' => 28,
                'created_at' => '2026-03-25 10:41:07',
                'updated_at' => '2026-03-25 10:41:07',
            ),
            14 => 
            array (
                'id' => 43,
                'vendor_id' => 13,
                'business_classification_id' => 27,
                'created_at' => '2026-03-25 10:41:07',
                'updated_at' => '2026-03-25 10:41:07',
            ),
            15 => 
            array (
                'id' => 44,
                'vendor_id' => 13,
                'business_classification_id' => 15,
                'created_at' => '2026-03-25 10:41:07',
                'updated_at' => '2026-03-25 10:41:07',
            ),
            16 => 
            array (
                'id' => 45,
                'vendor_id' => 13,
                'business_classification_id' => 26,
                'created_at' => '2026-03-25 10:41:07',
                'updated_at' => '2026-03-25 10:41:07',
            ),
            17 => 
            array (
                'id' => 46,
                'vendor_id' => 13,
                'business_classification_id' => 30,
                'created_at' => '2026-03-25 10:41:07',
                'updated_at' => '2026-03-25 10:41:07',
            ),
            18 => 
            array (
                'id' => 47,
                'vendor_id' => 13,
                'business_classification_id' => 31,
                'created_at' => '2026-03-25 10:41:07',
                'updated_at' => '2026-03-25 10:41:07',
            ),
            19 => 
            array (
                'id' => 48,
                'vendor_id' => 19,
                'business_classification_id' => 16,
                'created_at' => '2026-03-25 11:29:42',
                'updated_at' => '2026-03-25 11:29:42',
            ),
            20 => 
            array (
                'id' => 49,
                'vendor_id' => 20,
                'business_classification_id' => 28,
                'created_at' => '2026-03-25 13:00:39',
                'updated_at' => '2026-03-25 13:00:39',
            ),
            21 => 
            array (
                'id' => 50,
                'vendor_id' => 21,
                'business_classification_id' => 2,
                'created_at' => '2026-03-25 16:03:07',
                'updated_at' => '2026-03-25 16:03:07',
            ),
            22 => 
            array (
                'id' => 51,
                'vendor_id' => 22,
                'business_classification_id' => 4,
                'created_at' => '2026-03-25 20:32:30',
                'updated_at' => '2026-03-25 20:32:30',
            ),
            23 => 
            array (
                'id' => 52,
                'vendor_id' => 22,
                'business_classification_id' => 6,
                'created_at' => '2026-03-25 20:32:30',
                'updated_at' => '2026-03-25 20:32:30',
            ),
            24 => 
            array (
                'id' => 53,
                'vendor_id' => 22,
                'business_classification_id' => 2,
                'created_at' => '2026-03-25 20:33:23',
                'updated_at' => '2026-03-25 20:33:23',
            ),
            25 => 
            array (
                'id' => 54,
                'vendor_id' => 14,
                'business_classification_id' => 1,
                'created_at' => '2026-03-25 21:00:38',
                'updated_at' => '2026-03-25 21:00:38',
            ),
            26 => 
            array (
                'id' => 55,
                'vendor_id' => 14,
                'business_classification_id' => 2,
                'created_at' => '2026-03-25 21:00:38',
                'updated_at' => '2026-03-25 21:00:38',
            ),
            27 => 
            array (
                'id' => 56,
                'vendor_id' => 14,
                'business_classification_id' => 3,
                'created_at' => '2026-03-25 21:00:38',
                'updated_at' => '2026-03-25 21:00:38',
            ),
            28 => 
            array (
                'id' => 57,
                'vendor_id' => 14,
                'business_classification_id' => 4,
                'created_at' => '2026-03-25 21:00:38',
                'updated_at' => '2026-03-25 21:00:38',
            ),
            29 => 
            array (
                'id' => 58,
                'vendor_id' => 14,
                'business_classification_id' => 5,
                'created_at' => '2026-03-25 21:00:38',
                'updated_at' => '2026-03-25 21:00:38',
            ),
            30 => 
            array (
                'id' => 59,
                'vendor_id' => 14,
                'business_classification_id' => 6,
                'created_at' => '2026-03-25 21:00:38',
                'updated_at' => '2026-03-25 21:00:38',
            ),
            31 => 
            array (
                'id' => 60,
                'vendor_id' => 17,
                'business_classification_id' => 6,
                'created_at' => '2026-03-25 23:12:41',
                'updated_at' => '2026-03-25 23:12:41',
            ),
            32 => 
            array (
                'id' => 61,
                'vendor_id' => 23,
                'business_classification_id' => 1,
                'created_at' => '2026-03-26 09:47:25',
                'updated_at' => '2026-03-26 09:47:25',
            ),
            33 => 
            array (
                'id' => 62,
                'vendor_id' => 23,
                'business_classification_id' => 2,
                'created_at' => '2026-03-26 09:47:25',
                'updated_at' => '2026-03-26 09:47:25',
            ),
            34 => 
            array (
                'id' => 63,
                'vendor_id' => 23,
                'business_classification_id' => 3,
                'created_at' => '2026-03-26 09:47:25',
                'updated_at' => '2026-03-26 09:47:25',
            ),
            35 => 
            array (
                'id' => 64,
                'vendor_id' => 23,
                'business_classification_id' => 4,
                'created_at' => '2026-03-26 09:47:25',
                'updated_at' => '2026-03-26 09:47:25',
            ),
            36 => 
            array (
                'id' => 65,
                'vendor_id' => 23,
                'business_classification_id' => 5,
                'created_at' => '2026-03-26 09:47:25',
                'updated_at' => '2026-03-26 09:47:25',
            ),
            37 => 
            array (
                'id' => 66,
                'vendor_id' => 23,
                'business_classification_id' => 6,
                'created_at' => '2026-03-26 09:47:25',
                'updated_at' => '2026-03-26 09:47:25',
            ),
            38 => 
            array (
                'id' => 67,
                'vendor_id' => 24,
                'business_classification_id' => 12,
                'created_at' => '2026-03-26 10:19:27',
                'updated_at' => '2026-03-26 10:19:27',
            ),
            39 => 
            array (
                'id' => 68,
                'vendor_id' => 25,
                'business_classification_id' => 9,
                'created_at' => '2026-03-26 10:43:20',
                'updated_at' => '2026-03-26 10:43:20',
            ),
            40 => 
            array (
                'id' => 69,
                'vendor_id' => 25,
                'business_classification_id' => 12,
                'created_at' => '2026-03-26 10:43:20',
                'updated_at' => '2026-03-26 10:43:20',
            ),
            41 => 
            array (
                'id' => 70,
                'vendor_id' => 25,
                'business_classification_id' => 7,
                'created_at' => '2026-03-26 10:43:20',
                'updated_at' => '2026-03-26 10:43:20',
            ),
            42 => 
            array (
                'id' => 71,
                'vendor_id' => 25,
                'business_classification_id' => 8,
                'created_at' => '2026-03-26 10:43:20',
                'updated_at' => '2026-03-26 10:43:20',
            ),
            43 => 
            array (
                'id' => 72,
                'vendor_id' => 25,
                'business_classification_id' => 10,
                'created_at' => '2026-03-26 10:43:20',
                'updated_at' => '2026-03-26 10:43:20',
            ),
            44 => 
            array (
                'id' => 73,
                'vendor_id' => 25,
                'business_classification_id' => 11,
                'created_at' => '2026-03-26 10:43:20',
                'updated_at' => '2026-03-26 10:43:20',
            ),
            45 => 
            array (
                'id' => 74,
                'vendor_id' => 27,
                'business_classification_id' => 27,
                'created_at' => '2026-03-26 13:43:48',
                'updated_at' => '2026-03-26 13:43:48',
            ),
            46 => 
            array (
                'id' => 75,
                'vendor_id' => 27,
                'business_classification_id' => 28,
                'created_at' => '2026-03-26 13:43:48',
                'updated_at' => '2026-03-26 13:43:48',
            ),
            47 => 
            array (
                'id' => 76,
                'vendor_id' => 29,
                'business_classification_id' => 30,
                'created_at' => '2026-03-26 16:22:31',
                'updated_at' => '2026-03-26 16:22:31',
            ),
            48 => 
            array (
                'id' => 77,
                'vendor_id' => 29,
                'business_classification_id' => 1,
                'created_at' => '2026-03-26 16:22:31',
                'updated_at' => '2026-03-26 16:22:31',
            ),
            49 => 
            array (
                'id' => 78,
                'vendor_id' => 29,
                'business_classification_id' => 2,
                'created_at' => '2026-03-26 16:22:31',
                'updated_at' => '2026-03-26 16:22:31',
            ),
            50 => 
            array (
                'id' => 79,
                'vendor_id' => 29,
                'business_classification_id' => 3,
                'created_at' => '2026-03-26 16:22:31',
                'updated_at' => '2026-03-26 16:22:31',
            ),
            51 => 
            array (
                'id' => 80,
                'vendor_id' => 29,
                'business_classification_id' => 4,
                'created_at' => '2026-03-26 16:22:31',
                'updated_at' => '2026-03-26 16:22:31',
            ),
            52 => 
            array (
                'id' => 81,
                'vendor_id' => 29,
                'business_classification_id' => 5,
                'created_at' => '2026-03-26 16:22:31',
                'updated_at' => '2026-03-26 16:22:31',
            ),
            53 => 
            array (
                'id' => 82,
                'vendor_id' => 29,
                'business_classification_id' => 6,
                'created_at' => '2026-03-26 16:22:31',
                'updated_at' => '2026-03-26 16:22:31',
            ),
            54 => 
            array (
                'id' => 83,
                'vendor_id' => 32,
                'business_classification_id' => 22,
                'created_at' => '2026-03-26 17:25:53',
                'updated_at' => '2026-03-26 17:25:53',
            ),
            55 => 
            array (
                'id' => 84,
                'vendor_id' => 32,
                'business_classification_id' => 23,
                'created_at' => '2026-03-26 17:25:53',
                'updated_at' => '2026-03-26 17:25:53',
            ),
            56 => 
            array (
                'id' => 85,
                'vendor_id' => 32,
                'business_classification_id' => 24,
                'created_at' => '2026-03-26 17:25:53',
                'updated_at' => '2026-03-26 17:25:53',
            ),
            57 => 
            array (
                'id' => 86,
                'vendor_id' => 32,
                'business_classification_id' => 25,
                'created_at' => '2026-03-26 17:25:53',
                'updated_at' => '2026-03-26 17:25:53',
            ),
            58 => 
            array (
                'id' => 87,
                'vendor_id' => 31,
                'business_classification_id' => 2,
                'created_at' => '2026-03-26 17:57:00',
                'updated_at' => '2026-03-26 17:57:00',
            ),
            59 => 
            array (
                'id' => 88,
                'vendor_id' => 36,
                'business_classification_id' => 14,
                'created_at' => '2026-03-26 21:00:46',
                'updated_at' => '2026-03-26 21:00:46',
            ),
            60 => 
            array (
                'id' => 89,
                'vendor_id' => 38,
                'business_classification_id' => 3,
                'created_at' => '2026-03-27 09:13:27',
                'updated_at' => '2026-03-27 09:13:27',
            ),
            61 => 
            array (
                'id' => 90,
                'vendor_id' => 38,
                'business_classification_id' => 6,
                'created_at' => '2026-03-27 09:13:27',
                'updated_at' => '2026-03-27 09:13:27',
            ),
            62 => 
            array (
                'id' => 91,
                'vendor_id' => 38,
                'business_classification_id' => 1,
                'created_at' => '2026-03-27 09:13:27',
                'updated_at' => '2026-03-27 09:13:27',
            ),
            63 => 
            array (
                'id' => 92,
                'vendor_id' => 38,
                'business_classification_id' => 2,
                'created_at' => '2026-03-27 09:13:27',
                'updated_at' => '2026-03-27 09:13:27',
            ),
            64 => 
            array (
                'id' => 93,
                'vendor_id' => 38,
                'business_classification_id' => 4,
                'created_at' => '2026-03-27 09:13:27',
                'updated_at' => '2026-03-27 09:13:27',
            ),
            65 => 
            array (
                'id' => 94,
                'vendor_id' => 38,
                'business_classification_id' => 5,
                'created_at' => '2026-03-27 09:13:27',
                'updated_at' => '2026-03-27 09:13:27',
            ),
            66 => 
            array (
                'id' => 95,
                'vendor_id' => 39,
                'business_classification_id' => 27,
                'created_at' => '2026-03-27 09:40:57',
                'updated_at' => '2026-03-27 09:40:57',
            ),
            67 => 
            array (
                'id' => 96,
                'vendor_id' => 39,
                'business_classification_id' => 14,
                'created_at' => '2026-03-27 09:40:57',
                'updated_at' => '2026-03-27 09:40:57',
            ),
            68 => 
            array (
                'id' => 97,
                'vendor_id' => 39,
                'business_classification_id' => 28,
                'created_at' => '2026-03-27 09:40:57',
                'updated_at' => '2026-03-27 09:40:57',
            ),
            69 => 
            array (
                'id' => 98,
                'vendor_id' => 40,
                'business_classification_id' => 8,
                'created_at' => '2026-03-27 10:50:29',
                'updated_at' => '2026-03-27 10:50:29',
            ),
            70 => 
            array (
                'id' => 99,
                'vendor_id' => 40,
                'business_classification_id' => 9,
                'created_at' => '2026-03-27 10:50:29',
                'updated_at' => '2026-03-27 10:50:29',
            ),
            71 => 
            array (
                'id' => 100,
                'vendor_id' => 40,
                'business_classification_id' => 11,
                'created_at' => '2026-03-27 10:50:29',
                'updated_at' => '2026-03-27 10:50:29',
            ),
            72 => 
            array (
                'id' => 101,
                'vendor_id' => 40,
                'business_classification_id' => 12,
                'created_at' => '2026-03-27 10:50:29',
                'updated_at' => '2026-03-27 10:50:29',
            ),
            73 => 
            array (
                'id' => 102,
                'vendor_id' => 40,
                'business_classification_id' => 18,
                'created_at' => '2026-03-27 10:50:29',
                'updated_at' => '2026-03-27 10:50:29',
            ),
            74 => 
            array (
                'id' => 103,
                'vendor_id' => 40,
                'business_classification_id' => 20,
                'created_at' => '2026-03-27 10:50:29',
                'updated_at' => '2026-03-27 10:50:29',
            ),
            75 => 
            array (
                'id' => 104,
                'vendor_id' => 40,
                'business_classification_id' => 29,
                'created_at' => '2026-03-27 10:50:29',
                'updated_at' => '2026-03-27 10:50:29',
            ),
            76 => 
            array (
                'id' => 105,
                'vendor_id' => 45,
                'business_classification_id' => 1,
                'created_at' => '2026-03-27 12:08:22',
                'updated_at' => '2026-03-27 12:08:22',
            ),
            77 => 
            array (
                'id' => 106,
                'vendor_id' => 45,
                'business_classification_id' => 2,
                'created_at' => '2026-03-27 12:08:22',
                'updated_at' => '2026-03-27 12:08:22',
            ),
            78 => 
            array (
                'id' => 107,
                'vendor_id' => 45,
                'business_classification_id' => 3,
                'created_at' => '2026-03-27 12:08:22',
                'updated_at' => '2026-03-27 12:08:22',
            ),
            79 => 
            array (
                'id' => 108,
                'vendor_id' => 45,
                'business_classification_id' => 4,
                'created_at' => '2026-03-27 12:08:22',
                'updated_at' => '2026-03-27 12:08:22',
            ),
            80 => 
            array (
                'id' => 109,
                'vendor_id' => 45,
                'business_classification_id' => 5,
                'created_at' => '2026-03-27 12:08:22',
                'updated_at' => '2026-03-27 12:08:22',
            ),
            81 => 
            array (
                'id' => 110,
                'vendor_id' => 45,
                'business_classification_id' => 6,
                'created_at' => '2026-03-27 12:08:22',
                'updated_at' => '2026-03-27 12:08:22',
            ),
            82 => 
            array (
                'id' => 111,
                'vendor_id' => 42,
                'business_classification_id' => 32,
                'created_at' => '2026-03-27 12:39:38',
                'updated_at' => '2026-03-27 12:39:38',
            ),
            83 => 
            array (
                'id' => 112,
                'vendor_id' => 26,
                'business_classification_id' => 5,
                'created_at' => '2026-03-27 13:12:10',
                'updated_at' => '2026-03-27 13:12:10',
            ),
            84 => 
            array (
                'id' => 113,
                'vendor_id' => 26,
                'business_classification_id' => 2,
                'created_at' => '2026-03-27 13:12:10',
                'updated_at' => '2026-03-27 13:12:10',
            ),
            85 => 
            array (
                'id' => 114,
                'vendor_id' => 26,
                'business_classification_id' => 4,
                'created_at' => '2026-03-27 13:12:10',
                'updated_at' => '2026-03-27 13:12:10',
            ),
            86 => 
            array (
                'id' => 115,
                'vendor_id' => 26,
                'business_classification_id' => 6,
                'created_at' => '2026-03-27 13:12:10',
                'updated_at' => '2026-03-27 13:12:10',
            ),
            87 => 
            array (
                'id' => 116,
                'vendor_id' => 26,
                'business_classification_id' => 1,
                'created_at' => '2026-03-27 13:14:52',
                'updated_at' => '2026-03-27 13:14:52',
            ),
            88 => 
            array (
                'id' => 117,
                'vendor_id' => 26,
                'business_classification_id' => 3,
                'created_at' => '2026-03-27 13:14:52',
                'updated_at' => '2026-03-27 13:14:52',
            ),
            89 => 
            array (
                'id' => 118,
                'vendor_id' => 46,
                'business_classification_id' => 15,
                'created_at' => '2026-03-27 13:35:47',
                'updated_at' => '2026-03-27 13:35:47',
            ),
            90 => 
            array (
                'id' => 119,
                'vendor_id' => 46,
                'business_classification_id' => 17,
                'created_at' => '2026-03-27 13:35:47',
                'updated_at' => '2026-03-27 13:35:47',
            ),
            91 => 
            array (
                'id' => 120,
                'vendor_id' => 46,
                'business_classification_id' => 18,
                'created_at' => '2026-03-27 13:35:47',
                'updated_at' => '2026-03-27 13:35:47',
            ),
            92 => 
            array (
                'id' => 121,
                'vendor_id' => 46,
                'business_classification_id' => 32,
                'created_at' => '2026-03-27 13:35:47',
                'updated_at' => '2026-03-27 13:35:47',
            ),
            93 => 
            array (
                'id' => 122,
                'vendor_id' => 47,
                'business_classification_id' => 8,
                'created_at' => '2026-03-27 14:18:32',
                'updated_at' => '2026-03-27 14:18:32',
            ),
            94 => 
            array (
                'id' => 123,
                'vendor_id' => 48,
                'business_classification_id' => 15,
                'created_at' => '2026-03-27 14:29:14',
                'updated_at' => '2026-03-27 14:29:14',
            ),
            95 => 
            array (
                'id' => 124,
                'vendor_id' => 34,
                'business_classification_id' => 12,
                'created_at' => '2026-03-27 18:04:13',
                'updated_at' => '2026-03-27 18:04:13',
            ),
            96 => 
            array (
                'id' => 125,
                'vendor_id' => 41,
                'business_classification_id' => 14,
                'created_at' => '2026-03-28 10:50:46',
                'updated_at' => '2026-03-28 10:50:46',
            ),
            97 => 
            array (
                'id' => 126,
                'vendor_id' => 53,
                'business_classification_id' => 28,
                'created_at' => '2026-03-28 13:23:48',
                'updated_at' => '2026-03-28 13:23:48',
            ),
            98 => 
            array (
                'id' => 127,
                'vendor_id' => 54,
                'business_classification_id' => 17,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            99 => 
            array (
                'id' => 128,
                'vendor_id' => 54,
                'business_classification_id' => 18,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            100 => 
            array (
                'id' => 129,
                'vendor_id' => 54,
                'business_classification_id' => 32,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            101 => 
            array (
                'id' => 130,
                'vendor_id' => 54,
                'business_classification_id' => 22,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            102 => 
            array (
                'id' => 131,
                'vendor_id' => 54,
                'business_classification_id' => 23,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            103 => 
            array (
                'id' => 132,
                'vendor_id' => 54,
                'business_classification_id' => 24,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            104 => 
            array (
                'id' => 133,
                'vendor_id' => 54,
                'business_classification_id' => 25,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            105 => 
            array (
                'id' => 134,
                'vendor_id' => 54,
                'business_classification_id' => 26,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            106 => 
            array (
                'id' => 135,
                'vendor_id' => 54,
                'business_classification_id' => 27,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            107 => 
            array (
                'id' => 136,
                'vendor_id' => 54,
                'business_classification_id' => 28,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            108 => 
            array (
                'id' => 137,
                'vendor_id' => 54,
                'business_classification_id' => 29,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            109 => 
            array (
                'id' => 138,
                'vendor_id' => 54,
                'business_classification_id' => 30,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            110 => 
            array (
                'id' => 139,
                'vendor_id' => 54,
                'business_classification_id' => 31,
                'created_at' => '2026-03-29 08:14:20',
                'updated_at' => '2026-03-29 08:14:20',
            ),
            111 => 
            array (
                'id' => 140,
                'vendor_id' => 55,
                'business_classification_id' => 2,
                'created_at' => '2026-03-29 15:36:02',
                'updated_at' => '2026-03-29 15:36:02',
            ),
            112 => 
            array (
                'id' => 141,
                'vendor_id' => 60,
                'business_classification_id' => 2,
                'created_at' => '2026-03-30 11:43:22',
                'updated_at' => '2026-03-30 11:43:22',
            ),
            113 => 
            array (
                'id' => 142,
                'vendor_id' => 62,
                'business_classification_id' => 1,
                'created_at' => '2026-03-30 14:09:08',
                'updated_at' => '2026-03-30 14:09:08',
            ),
            114 => 
            array (
                'id' => 143,
                'vendor_id' => 62,
                'business_classification_id' => 2,
                'created_at' => '2026-03-30 14:09:08',
                'updated_at' => '2026-03-30 14:09:08',
            ),
            115 => 
            array (
                'id' => 144,
                'vendor_id' => 62,
                'business_classification_id' => 3,
                'created_at' => '2026-03-30 14:09:08',
                'updated_at' => '2026-03-30 14:09:08',
            ),
            116 => 
            array (
                'id' => 145,
                'vendor_id' => 62,
                'business_classification_id' => 4,
                'created_at' => '2026-03-30 14:09:08',
                'updated_at' => '2026-03-30 14:09:08',
            ),
            117 => 
            array (
                'id' => 146,
                'vendor_id' => 62,
                'business_classification_id' => 5,
                'created_at' => '2026-03-30 14:09:08',
                'updated_at' => '2026-03-30 14:09:08',
            ),
            118 => 
            array (
                'id' => 147,
                'vendor_id' => 62,
                'business_classification_id' => 6,
                'created_at' => '2026-03-30 14:09:08',
                'updated_at' => '2026-03-30 14:09:08',
            ),
            119 => 
            array (
                'id' => 148,
                'vendor_id' => 58,
                'business_classification_id' => 1,
                'created_at' => '2026-03-30 15:42:50',
                'updated_at' => '2026-03-30 15:42:50',
            ),
            120 => 
            array (
                'id' => 149,
                'vendor_id' => 58,
                'business_classification_id' => 2,
                'created_at' => '2026-03-30 15:42:50',
                'updated_at' => '2026-03-30 15:42:50',
            ),
            121 => 
            array (
                'id' => 150,
                'vendor_id' => 58,
                'business_classification_id' => 3,
                'created_at' => '2026-03-30 15:42:50',
                'updated_at' => '2026-03-30 15:42:50',
            ),
            122 => 
            array (
                'id' => 151,
                'vendor_id' => 58,
                'business_classification_id' => 4,
                'created_at' => '2026-03-30 15:42:50',
                'updated_at' => '2026-03-30 15:42:50',
            ),
            123 => 
            array (
                'id' => 152,
                'vendor_id' => 58,
                'business_classification_id' => 5,
                'created_at' => '2026-03-30 15:42:50',
                'updated_at' => '2026-03-30 15:42:50',
            ),
            124 => 
            array (
                'id' => 153,
                'vendor_id' => 58,
                'business_classification_id' => 6,
                'created_at' => '2026-03-30 15:42:50',
                'updated_at' => '2026-03-30 15:42:50',
            ),
            125 => 
            array (
                'id' => 154,
                'vendor_id' => 64,
                'business_classification_id' => 30,
                'created_at' => '2026-03-30 16:19:36',
                'updated_at' => '2026-03-30 16:19:36',
            ),
            126 => 
            array (
                'id' => 155,
                'vendor_id' => 65,
                'business_classification_id' => 9,
                'created_at' => '2026-03-30 16:33:07',
                'updated_at' => '2026-03-30 16:33:07',
            ),
            127 => 
            array (
                'id' => 156,
                'vendor_id' => 66,
                'business_classification_id' => 27,
                'created_at' => '2026-03-30 17:27:26',
                'updated_at' => '2026-03-30 17:27:26',
            ),
            128 => 
            array (
                'id' => 157,
                'vendor_id' => 66,
                'business_classification_id' => 28,
                'created_at' => '2026-03-30 17:27:26',
                'updated_at' => '2026-03-30 17:27:26',
            ),
            129 => 
            array (
                'id' => 158,
                'vendor_id' => 66,
                'business_classification_id' => 29,
                'created_at' => '2026-03-30 17:27:26',
                'updated_at' => '2026-03-30 17:27:26',
            ),
            130 => 
            array (
                'id' => 159,
                'vendor_id' => 51,
                'business_classification_id' => 7,
                'created_at' => '2026-03-30 22:41:33',
                'updated_at' => '2026-03-30 22:41:33',
            ),
            131 => 
            array (
                'id' => 160,
                'vendor_id' => 51,
                'business_classification_id' => 8,
                'created_at' => '2026-03-30 22:41:33',
                'updated_at' => '2026-03-30 22:41:33',
            ),
            132 => 
            array (
                'id' => 161,
                'vendor_id' => 51,
                'business_classification_id' => 9,
                'created_at' => '2026-03-30 22:41:33',
                'updated_at' => '2026-03-30 22:41:33',
            ),
            133 => 
            array (
                'id' => 162,
                'vendor_id' => 51,
                'business_classification_id' => 10,
                'created_at' => '2026-03-30 22:41:33',
                'updated_at' => '2026-03-30 22:41:33',
            ),
            134 => 
            array (
                'id' => 163,
                'vendor_id' => 51,
                'business_classification_id' => 11,
                'created_at' => '2026-03-30 22:41:33',
                'updated_at' => '2026-03-30 22:41:33',
            ),
            135 => 
            array (
                'id' => 164,
                'vendor_id' => 51,
                'business_classification_id' => 12,
                'created_at' => '2026-03-30 22:41:33',
                'updated_at' => '2026-03-30 22:41:33',
            ),
            136 => 
            array (
                'id' => 165,
                'vendor_id' => 67,
                'business_classification_id' => 27,
                'created_at' => '2026-03-31 07:58:01',
                'updated_at' => '2026-03-31 07:58:01',
            ),
            137 => 
            array (
                'id' => 166,
                'vendor_id' => 67,
                'business_classification_id' => 28,
                'created_at' => '2026-03-31 07:58:01',
                'updated_at' => '2026-03-31 07:58:01',
            ),
            138 => 
            array (
                'id' => 168,
                'vendor_id' => 67,
                'business_classification_id' => 35,
                'created_at' => '2026-03-31 07:58:01',
                'updated_at' => '2026-03-31 07:58:01',
            ),
            139 => 
            array (
                'id' => 169,
                'vendor_id' => 43,
                'business_classification_id' => 3,
                'created_at' => '2026-03-31 09:27:51',
                'updated_at' => '2026-03-31 09:27:51',
            ),
            140 => 
            array (
                'id' => 170,
                'vendor_id' => 43,
                'business_classification_id' => 8,
                'created_at' => '2026-03-31 09:27:51',
                'updated_at' => '2026-03-31 09:27:51',
            ),
            141 => 
            array (
                'id' => 171,
                'vendor_id' => 69,
                'business_classification_id' => 20,
                'created_at' => '2026-03-31 15:34:56',
                'updated_at' => '2026-03-31 15:34:56',
            ),
            142 => 
            array (
                'id' => 172,
                'vendor_id' => 69,
                'business_classification_id' => 8,
                'created_at' => '2026-03-31 15:34:56',
                'updated_at' => '2026-03-31 15:34:56',
            ),
            143 => 
            array (
                'id' => 173,
                'vendor_id' => 70,
                'business_classification_id' => 2,
                'created_at' => '2026-03-31 17:11:28',
                'updated_at' => '2026-03-31 17:11:28',
            ),
            144 => 
            array (
                'id' => 174,
                'vendor_id' => 70,
                'business_classification_id' => 3,
                'created_at' => '2026-03-31 17:11:28',
                'updated_at' => '2026-03-31 17:11:28',
            ),
            145 => 
            array (
                'id' => 175,
                'vendor_id' => 70,
                'business_classification_id' => 4,
                'created_at' => '2026-03-31 17:11:28',
                'updated_at' => '2026-03-31 17:11:28',
            ),
            146 => 
            array (
                'id' => 176,
                'vendor_id' => 70,
                'business_classification_id' => 5,
                'created_at' => '2026-03-31 17:11:28',
                'updated_at' => '2026-03-31 17:11:28',
            ),
            147 => 
            array (
                'id' => 177,
                'vendor_id' => 70,
                'business_classification_id' => 1,
                'created_at' => '2026-03-31 17:11:28',
                'updated_at' => '2026-03-31 17:11:28',
            ),
            148 => 
            array (
                'id' => 178,
                'vendor_id' => 70,
                'business_classification_id' => 6,
                'created_at' => '2026-03-31 17:11:28',
                'updated_at' => '2026-03-31 17:11:28',
            ),
            149 => 
            array (
                'id' => 179,
                'vendor_id' => 71,
                'business_classification_id' => 1,
                'created_at' => '2026-03-31 18:25:58',
                'updated_at' => '2026-03-31 18:25:58',
            ),
            150 => 
            array (
                'id' => 180,
                'vendor_id' => 71,
                'business_classification_id' => 2,
                'created_at' => '2026-03-31 18:25:58',
                'updated_at' => '2026-03-31 18:25:58',
            ),
            151 => 
            array (
                'id' => 181,
                'vendor_id' => 71,
                'business_classification_id' => 3,
                'created_at' => '2026-03-31 18:25:58',
                'updated_at' => '2026-03-31 18:25:58',
            ),
            152 => 
            array (
                'id' => 182,
                'vendor_id' => 71,
                'business_classification_id' => 4,
                'created_at' => '2026-03-31 18:25:58',
                'updated_at' => '2026-03-31 18:25:58',
            ),
            153 => 
            array (
                'id' => 183,
                'vendor_id' => 71,
                'business_classification_id' => 5,
                'created_at' => '2026-03-31 18:25:58',
                'updated_at' => '2026-03-31 18:25:58',
            ),
            154 => 
            array (
                'id' => 184,
                'vendor_id' => 71,
                'business_classification_id' => 6,
                'created_at' => '2026-03-31 18:25:58',
                'updated_at' => '2026-03-31 18:25:58',
            ),
            155 => 
            array (
                'id' => 185,
                'vendor_id' => 74,
                'business_classification_id' => 7,
                'created_at' => '2026-04-01 15:19:23',
                'updated_at' => '2026-04-01 15:19:23',
            ),
            156 => 
            array (
                'id' => 186,
                'vendor_id' => 74,
                'business_classification_id' => 8,
                'created_at' => '2026-04-01 15:19:23',
                'updated_at' => '2026-04-01 15:19:23',
            ),
            157 => 
            array (
                'id' => 187,
                'vendor_id' => 74,
                'business_classification_id' => 9,
                'created_at' => '2026-04-01 15:19:23',
                'updated_at' => '2026-04-01 15:19:23',
            ),
            158 => 
            array (
                'id' => 188,
                'vendor_id' => 74,
                'business_classification_id' => 10,
                'created_at' => '2026-04-01 15:19:23',
                'updated_at' => '2026-04-01 15:19:23',
            ),
            159 => 
            array (
                'id' => 189,
                'vendor_id' => 74,
                'business_classification_id' => 11,
                'created_at' => '2026-04-01 15:19:23',
                'updated_at' => '2026-04-01 15:19:23',
            ),
            160 => 
            array (
                'id' => 190,
                'vendor_id' => 74,
                'business_classification_id' => 12,
                'created_at' => '2026-04-01 15:19:23',
                'updated_at' => '2026-04-01 15:19:23',
            ),
            161 => 
            array (
                'id' => 191,
                'vendor_id' => 37,
                'business_classification_id' => 30,
                'created_at' => '2026-04-01 15:21:33',
                'updated_at' => '2026-04-01 15:21:33',
            ),
            162 => 
            array (
                'id' => 192,
                'vendor_id' => 76,
                'business_classification_id' => 9,
                'created_at' => '2026-04-01 19:50:38',
                'updated_at' => '2026-04-01 19:50:38',
            ),
            163 => 
            array (
                'id' => 193,
                'vendor_id' => 76,
                'business_classification_id' => 8,
                'created_at' => '2026-04-01 19:50:38',
                'updated_at' => '2026-04-01 19:50:38',
            ),
            164 => 
            array (
                'id' => 194,
                'vendor_id' => 76,
                'business_classification_id' => 12,
                'created_at' => '2026-04-01 19:50:38',
                'updated_at' => '2026-04-01 19:50:38',
            ),
            165 => 
            array (
                'id' => 195,
                'vendor_id' => 73,
                'business_classification_id' => 11,
                'created_at' => '2026-04-04 09:05:29',
                'updated_at' => '2026-04-04 09:05:29',
            ),
            166 => 
            array (
                'id' => 196,
                'vendor_id' => 78,
                'business_classification_id' => 6,
                'created_at' => '2026-04-06 11:36:53',
                'updated_at' => '2026-04-06 11:36:53',
            ),
            167 => 
            array (
                'id' => 197,
                'vendor_id' => 78,
                'business_classification_id' => 12,
                'created_at' => '2026-04-06 11:36:53',
                'updated_at' => '2026-04-06 11:36:53',
            ),
            168 => 
            array (
                'id' => 198,
                'vendor_id' => 80,
                'business_classification_id' => 14,
                'created_at' => '2026-04-07 09:05:12',
                'updated_at' => '2026-04-07 09:05:12',
            ),
            169 => 
            array (
                'id' => 199,
                'vendor_id' => 28,
                'business_classification_id' => 23,
                'created_at' => '2026-04-07 11:44:11',
                'updated_at' => '2026-04-07 11:44:11',
            ),
            170 => 
            array (
                'id' => 200,
                'vendor_id' => 28,
                'business_classification_id' => 24,
                'created_at' => '2026-04-07 11:44:11',
                'updated_at' => '2026-04-07 11:44:11',
            ),
            171 => 
            array (
                'id' => 201,
                'vendor_id' => 28,
                'business_classification_id' => 25,
                'created_at' => '2026-04-07 11:44:11',
                'updated_at' => '2026-04-07 11:44:11',
            ),
            172 => 
            array (
                'id' => 202,
                'vendor_id' => 28,
                'business_classification_id' => 22,
                'created_at' => '2026-04-07 11:44:11',
                'updated_at' => '2026-04-07 11:44:11',
            ),
            173 => 
            array (
                'id' => 203,
                'vendor_id' => 82,
                'business_classification_id' => 2,
                'created_at' => '2026-04-07 13:57:12',
                'updated_at' => '2026-04-07 13:57:12',
            ),
            174 => 
            array (
                'id' => 204,
                'vendor_id' => 83,
                'business_classification_id' => 2,
                'created_at' => '2026-04-08 14:29:13',
                'updated_at' => '2026-04-08 14:29:13',
            ),
            175 => 
            array (
                'id' => 205,
                'vendor_id' => 84,
                'business_classification_id' => 17,
                'created_at' => '2026-04-09 20:02:49',
                'updated_at' => '2026-04-09 20:02:49',
            ),
            176 => 
            array (
                'id' => 206,
                'vendor_id' => 84,
                'business_classification_id' => 18,
                'created_at' => '2026-04-09 20:02:49',
                'updated_at' => '2026-04-09 20:02:49',
            ),
            177 => 
            array (
                'id' => 207,
                'vendor_id' => 84,
                'business_classification_id' => 15,
                'created_at' => '2026-04-09 20:02:49',
                'updated_at' => '2026-04-09 20:02:49',
            ),
            178 => 
            array (
                'id' => 208,
                'vendor_id' => 84,
                'business_classification_id' => 16,
                'created_at' => '2026-04-09 20:02:49',
                'updated_at' => '2026-04-09 20:02:49',
            ),
            179 => 
            array (
                'id' => 209,
                'vendor_id' => 84,
                'business_classification_id' => 13,
                'created_at' => '2026-04-09 20:02:49',
                'updated_at' => '2026-04-09 20:02:49',
            ),
            180 => 
            array (
                'id' => 210,
                'vendor_id' => 84,
                'business_classification_id' => 14,
                'created_at' => '2026-04-09 20:02:49',
                'updated_at' => '2026-04-09 20:02:49',
            ),
            181 => 
            array (
                'id' => 211,
                'vendor_id' => 85,
                'business_classification_id' => 32,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            182 => 
            array (
                'id' => 212,
                'vendor_id' => 85,
                'business_classification_id' => 33,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            183 => 
            array (
                'id' => 213,
                'vendor_id' => 85,
                'business_classification_id' => 34,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            184 => 
            array (
                'id' => 214,
                'vendor_id' => 85,
                'business_classification_id' => 35,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            185 => 
            array (
                'id' => 215,
                'vendor_id' => 85,
                'business_classification_id' => 23,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            186 => 
            array (
                'id' => 216,
                'vendor_id' => 85,
                'business_classification_id' => 17,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            187 => 
            array (
                'id' => 217,
                'vendor_id' => 85,
                'business_classification_id' => 18,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            188 => 
            array (
                'id' => 218,
                'vendor_id' => 85,
                'business_classification_id' => 13,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            189 => 
            array (
                'id' => 219,
                'vendor_id' => 85,
                'business_classification_id' => 14,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            190 => 
            array (
                'id' => 220,
                'vendor_id' => 85,
                'business_classification_id' => 15,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            191 => 
            array (
                'id' => 221,
                'vendor_id' => 85,
                'business_classification_id' => 16,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            192 => 
            array (
                'id' => 222,
                'vendor_id' => 85,
                'business_classification_id' => 12,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            193 => 
            array (
                'id' => 223,
                'vendor_id' => 85,
                'business_classification_id' => 7,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            194 => 
            array (
                'id' => 224,
                'vendor_id' => 85,
                'business_classification_id' => 8,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            195 => 
            array (
                'id' => 225,
                'vendor_id' => 85,
                'business_classification_id' => 9,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            196 => 
            array (
                'id' => 226,
                'vendor_id' => 85,
                'business_classification_id' => 10,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            197 => 
            array (
                'id' => 227,
                'vendor_id' => 85,
                'business_classification_id' => 11,
                'created_at' => '2026-04-10 08:21:26',
                'updated_at' => '2026-04-10 08:21:26',
            ),
            198 => 
            array (
                'id' => 228,
                'vendor_id' => 88,
                'business_classification_id' => 32,
                'created_at' => '2026-04-10 11:05:54',
                'updated_at' => '2026-04-10 11:05:54',
            ),
            199 => 
            array (
                'id' => 229,
                'vendor_id' => 88,
                'business_classification_id' => 33,
                'created_at' => '2026-04-10 11:05:54',
                'updated_at' => '2026-04-10 11:05:54',
            ),
            200 => 
            array (
                'id' => 230,
                'vendor_id' => 88,
                'business_classification_id' => 34,
                'created_at' => '2026-04-10 11:05:54',
                'updated_at' => '2026-04-10 11:05:54',
            ),
            201 => 
            array (
                'id' => 231,
                'vendor_id' => 88,
                'business_classification_id' => 35,
                'created_at' => '2026-04-10 11:05:54',
                'updated_at' => '2026-04-10 11:05:54',
            ),
            202 => 
            array (
                'id' => 232,
                'vendor_id' => 89,
                'business_classification_id' => 35,
                'created_at' => '2026-04-10 14:27:33',
                'updated_at' => '2026-04-10 14:27:33',
            ),
            203 => 
            array (
                'id' => 233,
                'vendor_id' => 90,
                'business_classification_id' => 3,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            204 => 
            array (
                'id' => 234,
                'vendor_id' => 90,
                'business_classification_id' => 4,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            205 => 
            array (
                'id' => 235,
                'vendor_id' => 90,
                'business_classification_id' => 5,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            206 => 
            array (
                'id' => 236,
                'vendor_id' => 90,
                'business_classification_id' => 6,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            207 => 
            array (
                'id' => 237,
                'vendor_id' => 90,
                'business_classification_id' => 8,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            208 => 
            array (
                'id' => 238,
                'vendor_id' => 90,
                'business_classification_id' => 9,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            209 => 
            array (
                'id' => 239,
                'vendor_id' => 90,
                'business_classification_id' => 10,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            210 => 
            array (
                'id' => 240,
                'vendor_id' => 90,
                'business_classification_id' => 11,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            211 => 
            array (
                'id' => 241,
                'vendor_id' => 90,
                'business_classification_id' => 12,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            212 => 
            array (
                'id' => 242,
                'vendor_id' => 90,
                'business_classification_id' => 7,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            213 => 
            array (
                'id' => 243,
                'vendor_id' => 90,
                'business_classification_id' => 15,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            214 => 
            array (
                'id' => 244,
                'vendor_id' => 90,
                'business_classification_id' => 16,
                'created_at' => '2026-04-10 14:36:44',
                'updated_at' => '2026-04-10 14:36:44',
            ),
            215 => 
            array (
                'id' => 245,
                'vendor_id' => 91,
                'business_classification_id' => 1,
                'created_at' => '2026-04-13 09:25:49',
                'updated_at' => '2026-04-13 09:25:49',
            ),
            216 => 
            array (
                'id' => 246,
                'vendor_id' => 91,
                'business_classification_id' => 2,
                'created_at' => '2026-04-13 09:25:49',
                'updated_at' => '2026-04-13 09:25:49',
            ),
            217 => 
            array (
                'id' => 247,
                'vendor_id' => 91,
                'business_classification_id' => 3,
                'created_at' => '2026-04-13 09:25:49',
                'updated_at' => '2026-04-13 09:25:49',
            ),
            218 => 
            array (
                'id' => 248,
                'vendor_id' => 91,
                'business_classification_id' => 4,
                'created_at' => '2026-04-13 09:25:49',
                'updated_at' => '2026-04-13 09:25:49',
            ),
            219 => 
            array (
                'id' => 249,
                'vendor_id' => 91,
                'business_classification_id' => 5,
                'created_at' => '2026-04-13 09:25:49',
                'updated_at' => '2026-04-13 09:25:49',
            ),
            220 => 
            array (
                'id' => 250,
                'vendor_id' => 91,
                'business_classification_id' => 6,
                'created_at' => '2026-04-13 09:25:49',
                'updated_at' => '2026-04-13 09:25:49',
            ),
            221 => 
            array (
                'id' => 251,
                'vendor_id' => 79,
                'business_classification_id' => 8,
                'created_at' => '2026-04-13 10:01:06',
                'updated_at' => '2026-04-13 10:01:06',
            ),
            222 => 
            array (
                'id' => 252,
                'vendor_id' => 92,
                'business_classification_id' => 15,
                'created_at' => '2026-04-13 11:52:49',
                'updated_at' => '2026-04-13 11:52:49',
            ),
            223 => 
            array (
                'id' => 253,
                'vendor_id' => 94,
                'business_classification_id' => 1,
                'created_at' => '2026-04-13 16:09:53',
                'updated_at' => '2026-04-13 16:09:53',
            ),
            224 => 
            array (
                'id' => 254,
                'vendor_id' => 94,
                'business_classification_id' => 2,
                'created_at' => '2026-04-13 16:09:53',
                'updated_at' => '2026-04-13 16:09:53',
            ),
            225 => 
            array (
                'id' => 255,
                'vendor_id' => 94,
                'business_classification_id' => 3,
                'created_at' => '2026-04-13 16:09:53',
                'updated_at' => '2026-04-13 16:09:53',
            ),
            226 => 
            array (
                'id' => 256,
                'vendor_id' => 94,
                'business_classification_id' => 4,
                'created_at' => '2026-04-13 16:09:53',
                'updated_at' => '2026-04-13 16:09:53',
            ),
            227 => 
            array (
                'id' => 257,
                'vendor_id' => 94,
                'business_classification_id' => 5,
                'created_at' => '2026-04-13 16:09:53',
                'updated_at' => '2026-04-13 16:09:53',
            ),
            228 => 
            array (
                'id' => 258,
                'vendor_id' => 94,
                'business_classification_id' => 6,
                'created_at' => '2026-04-13 16:09:53',
                'updated_at' => '2026-04-13 16:09:53',
            ),
            229 => 
            array (
                'id' => 259,
                'vendor_id' => 96,
                'business_classification_id' => 29,
                'created_at' => '2026-04-14 21:41:04',
                'updated_at' => '2026-04-14 21:41:04',
            ),
            230 => 
            array (
                'id' => 260,
                'vendor_id' => 96,
                'business_classification_id' => 12,
                'created_at' => '2026-04-14 21:41:04',
                'updated_at' => '2026-04-14 21:41:04',
            ),
            231 => 
            array (
                'id' => 261,
                'vendor_id' => 96,
                'business_classification_id' => 11,
                'created_at' => '2026-04-14 21:41:04',
                'updated_at' => '2026-04-14 21:41:04',
            ),
            232 => 
            array (
                'id' => 262,
                'vendor_id' => 96,
                'business_classification_id' => 8,
                'created_at' => '2026-04-14 21:41:04',
                'updated_at' => '2026-04-14 21:41:04',
            ),
            233 => 
            array (
                'id' => 263,
                'vendor_id' => 96,
                'business_classification_id' => 20,
                'created_at' => '2026-04-14 21:41:04',
                'updated_at' => '2026-04-14 21:41:04',
            ),
            234 => 
            array (
                'id' => 264,
                'vendor_id' => 77,
                'business_classification_id' => 2,
                'created_at' => '2026-04-15 10:52:09',
                'updated_at' => '2026-04-15 10:52:09',
            ),
            235 => 
            array (
                'id' => 265,
                'vendor_id' => 77,
                'business_classification_id' => 1,
                'created_at' => '2026-04-15 10:52:09',
                'updated_at' => '2026-04-15 10:52:09',
            ),
            236 => 
            array (
                'id' => 266,
                'vendor_id' => 77,
                'business_classification_id' => 3,
                'created_at' => '2026-04-15 10:52:09',
                'updated_at' => '2026-04-15 10:52:09',
            ),
            237 => 
            array (
                'id' => 267,
                'vendor_id' => 77,
                'business_classification_id' => 4,
                'created_at' => '2026-04-15 10:52:09',
                'updated_at' => '2026-04-15 10:52:09',
            ),
            238 => 
            array (
                'id' => 268,
                'vendor_id' => 77,
                'business_classification_id' => 5,
                'created_at' => '2026-04-15 10:52:09',
                'updated_at' => '2026-04-15 10:52:09',
            ),
            239 => 
            array (
                'id' => 269,
                'vendor_id' => 77,
                'business_classification_id' => 6,
                'created_at' => '2026-04-15 10:52:09',
                'updated_at' => '2026-04-15 10:52:09',
            ),
            240 => 
            array (
                'id' => 270,
                'vendor_id' => 93,
                'business_classification_id' => 30,
                'created_at' => '2026-04-15 18:44:33',
                'updated_at' => '2026-04-15 18:44:33',
            ),
            241 => 
            array (
                'id' => 277,
                'vendor_id' => 97,
                'business_classification_id' => 33,
                'created_at' => '2026-04-17 11:18:23',
                'updated_at' => '2026-04-17 11:18:23',
            ),
            242 => 
            array (
                'id' => 278,
                'vendor_id' => 99,
                'business_classification_id' => 33,
                'created_at' => '2026-04-20 11:05:38',
                'updated_at' => '2026-04-20 11:05:38',
            ),
            243 => 
            array (
                'id' => 279,
                'vendor_id' => 42,
                'business_classification_id' => 17,
                'created_at' => '2026-04-20 15:53:38',
                'updated_at' => '2026-04-20 15:53:38',
            ),
            244 => 
            array (
                'id' => 280,
                'vendor_id' => 42,
                'business_classification_id' => 18,
                'created_at' => '2026-04-20 15:53:38',
                'updated_at' => '2026-04-20 15:53:38',
            ),
            245 => 
            array (
                'id' => 281,
                'vendor_id' => 100,
                'business_classification_id' => 33,
                'created_at' => '2026-04-24 11:24:13',
                'updated_at' => '2026-04-24 11:24:13',
            ),
            246 => 
            array (
                'id' => 282,
                'vendor_id' => 100,
                'business_classification_id' => 27,
                'created_at' => '2026-04-24 11:24:13',
                'updated_at' => '2026-04-24 11:24:13',
            ),
            247 => 
            array (
                'id' => 283,
                'vendor_id' => 100,
                'business_classification_id' => 14,
                'created_at' => '2026-04-24 11:24:13',
                'updated_at' => '2026-04-24 11:24:13',
            ),
            248 => 
            array (
                'id' => 284,
                'vendor_id' => 102,
                'business_classification_id' => 2,
                'created_at' => '2026-04-27 13:23:08',
                'updated_at' => '2026-04-27 13:23:08',
            ),
            249 => 
            array (
                'id' => 285,
                'vendor_id' => 103,
                'business_classification_id' => 2,
                'created_at' => '2026-04-27 20:16:42',
                'updated_at' => '2026-04-27 20:16:42',
            ),
            250 => 
            array (
                'id' => 286,
                'vendor_id' => 95,
                'business_classification_id' => 8,
                'created_at' => '2026-04-28 10:20:19',
                'updated_at' => '2026-04-28 10:20:19',
            ),
            251 => 
            array (
                'id' => 287,
                'vendor_id' => 95,
                'business_classification_id' => 9,
                'created_at' => '2026-04-28 10:20:19',
                'updated_at' => '2026-04-28 10:20:19',
            ),
            252 => 
            array (
                'id' => 288,
                'vendor_id' => 104,
                'business_classification_id' => 19,
                'created_at' => '2026-04-29 15:47:52',
                'updated_at' => '2026-04-29 15:47:52',
            ),
            253 => 
            array (
                'id' => 289,
                'vendor_id' => 104,
                'business_classification_id' => 20,
                'created_at' => '2026-04-29 15:47:52',
                'updated_at' => '2026-04-29 15:47:52',
            ),
            254 => 
            array (
                'id' => 290,
                'vendor_id' => 104,
                'business_classification_id' => 21,
                'created_at' => '2026-04-29 15:47:52',
                'updated_at' => '2026-04-29 15:47:52',
            ),
            255 => 
            array (
                'id' => 291,
                'vendor_id' => 104,
                'business_classification_id' => 29,
                'created_at' => '2026-04-29 15:47:52',
                'updated_at' => '2026-04-29 15:47:52',
            ),
            256 => 
            array (
                'id' => 292,
                'vendor_id' => 105,
                'business_classification_id' => 8,
                'created_at' => '2026-05-04 13:14:17',
                'updated_at' => '2026-05-04 13:14:17',
            ),
            257 => 
            array (
                'id' => 293,
                'vendor_id' => 106,
                'business_classification_id' => 14,
                'created_at' => '2026-05-05 12:22:03',
                'updated_at' => '2026-05-05 12:22:03',
            ),
            258 => 
            array (
                'id' => 294,
                'vendor_id' => 107,
                'business_classification_id' => 8,
                'created_at' => '2026-05-05 15:14:11',
                'updated_at' => '2026-05-05 15:14:11',
            ),
            259 => 
            array (
                'id' => 295,
                'vendor_id' => 107,
                'business_classification_id' => 11,
                'created_at' => '2026-05-05 15:14:11',
                'updated_at' => '2026-05-05 15:14:11',
            ),
            260 => 
            array (
                'id' => 296,
                'vendor_id' => 107,
                'business_classification_id' => 12,
                'created_at' => '2026-05-05 15:14:11',
                'updated_at' => '2026-05-05 15:14:11',
            ),
            261 => 
            array (
                'id' => 297,
                'vendor_id' => 107,
                'business_classification_id' => 18,
                'created_at' => '2026-05-05 15:14:11',
                'updated_at' => '2026-05-05 15:14:11',
            ),
            262 => 
            array (
                'id' => 298,
                'vendor_id' => 107,
                'business_classification_id' => 17,
                'created_at' => '2026-05-05 15:14:11',
                'updated_at' => '2026-05-05 15:14:11',
            ),
            263 => 
            array (
                'id' => 299,
                'vendor_id' => 107,
                'business_classification_id' => 19,
                'created_at' => '2026-05-05 15:14:11',
                'updated_at' => '2026-05-05 15:14:11',
            ),
            264 => 
            array (
                'id' => 300,
                'vendor_id' => 107,
                'business_classification_id' => 20,
                'created_at' => '2026-05-05 15:14:11',
                'updated_at' => '2026-05-05 15:14:11',
            ),
            265 => 
            array (
                'id' => 301,
                'vendor_id' => 107,
                'business_classification_id' => 21,
                'created_at' => '2026-05-05 15:14:11',
                'updated_at' => '2026-05-05 15:14:11',
            ),
            266 => 
            array (
                'id' => 302,
                'vendor_id' => 108,
                'business_classification_id' => 1,
                'created_at' => '2026-05-07 09:20:25',
                'updated_at' => '2026-05-07 09:20:25',
            ),
            267 => 
            array (
                'id' => 303,
                'vendor_id' => 108,
                'business_classification_id' => 2,
                'created_at' => '2026-05-07 09:20:25',
                'updated_at' => '2026-05-07 09:20:25',
            ),
            268 => 
            array (
                'id' => 304,
                'vendor_id' => 108,
                'business_classification_id' => 3,
                'created_at' => '2026-05-07 09:20:25',
                'updated_at' => '2026-05-07 09:20:25',
            ),
            269 => 
            array (
                'id' => 305,
                'vendor_id' => 108,
                'business_classification_id' => 4,
                'created_at' => '2026-05-07 09:20:25',
                'updated_at' => '2026-05-07 09:20:25',
            ),
            270 => 
            array (
                'id' => 306,
                'vendor_id' => 108,
                'business_classification_id' => 5,
                'created_at' => '2026-05-07 09:20:25',
                'updated_at' => '2026-05-07 09:20:25',
            ),
            271 => 
            array (
                'id' => 307,
                'vendor_id' => 108,
                'business_classification_id' => 6,
                'created_at' => '2026-05-07 09:20:25',
                'updated_at' => '2026-05-07 09:20:25',
            ),
            272 => 
            array (
                'id' => 308,
                'vendor_id' => 110,
                'business_classification_id' => 17,
                'created_at' => '2026-06-09 15:30:06',
                'updated_at' => '2026-06-09 15:30:06',
            ),
            273 => 
            array (
                'id' => 309,
                'vendor_id' => 110,
                'business_classification_id' => 18,
                'created_at' => '2026-06-09 15:30:06',
                'updated_at' => '2026-06-09 15:30:06',
            ),
            274 => 
            array (
                'id' => 310,
                'vendor_id' => 110,
                'business_classification_id' => 22,
                'created_at' => '2026-06-09 15:30:06',
                'updated_at' => '2026-06-09 15:30:06',
            ),
            275 => 
            array (
                'id' => 311,
                'vendor_id' => 110,
                'business_classification_id' => 23,
                'created_at' => '2026-06-09 15:30:06',
                'updated_at' => '2026-06-09 15:30:06',
            ),
            276 => 
            array (
                'id' => 312,
                'vendor_id' => 110,
                'business_classification_id' => 24,
                'created_at' => '2026-06-09 15:30:06',
                'updated_at' => '2026-06-09 15:30:06',
            ),
            277 => 
            array (
                'id' => 313,
                'vendor_id' => 110,
                'business_classification_id' => 25,
                'created_at' => '2026-06-09 15:30:06',
                'updated_at' => '2026-06-09 15:30:06',
            ),
            278 => 
            array (
                'id' => 314,
                'vendor_id' => 113,
                'business_classification_id' => 4,
                'created_at' => '2026-06-10 10:02:33',
                'updated_at' => '2026-06-10 10:02:33',
            ),
            279 => 
            array (
                'id' => 315,
                'vendor_id' => 111,
                'business_classification_id' => 5,
                'created_at' => '2026-06-10 10:03:16',
                'updated_at' => '2026-06-10 10:03:16',
            ),
            280 => 
            array (
                'id' => 316,
                'vendor_id' => 87,
                'business_classification_id' => 33,
                'created_at' => '2026-06-10 10:18:33',
                'updated_at' => '2026-06-10 10:18:33',
            ),
            281 => 
            array (
                'id' => 317,
                'vendor_id' => 87,
                'business_classification_id' => 35,
                'created_at' => '2026-06-10 10:18:33',
                'updated_at' => '2026-06-10 10:18:33',
            ),
            282 => 
            array (
                'id' => 318,
                'vendor_id' => 114,
                'business_classification_id' => 18,
                'created_at' => '2026-06-10 12:09:10',
                'updated_at' => '2026-06-10 12:09:10',
            ),
            283 => 
            array (
                'id' => 319,
                'vendor_id' => 114,
                'business_classification_id' => 17,
                'created_at' => '2026-06-10 12:09:10',
                'updated_at' => '2026-06-10 12:09:10',
            ),
            284 => 
            array (
                'id' => 320,
                'vendor_id' => 114,
                'business_classification_id' => 20,
                'created_at' => '2026-06-10 12:09:10',
                'updated_at' => '2026-06-10 12:09:10',
            ),
            285 => 
            array (
                'id' => 321,
                'vendor_id' => 114,
                'business_classification_id' => 21,
                'created_at' => '2026-06-10 12:09:10',
                'updated_at' => '2026-06-10 12:09:10',
            ),
            286 => 
            array (
                'id' => 322,
                'vendor_id' => 114,
                'business_classification_id' => 19,
                'created_at' => '2026-06-10 12:09:10',
                'updated_at' => '2026-06-10 12:09:10',
            ),
            287 => 
            array (
                'id' => 323,
                'vendor_id' => 114,
                'business_classification_id' => 13,
                'created_at' => '2026-06-10 12:31:32',
                'updated_at' => '2026-06-10 12:31:32',
            ),
            288 => 
            array (
                'id' => 324,
                'vendor_id' => 114,
                'business_classification_id' => 14,
                'created_at' => '2026-06-10 12:31:32',
                'updated_at' => '2026-06-10 12:31:32',
            ),
            289 => 
            array (
                'id' => 325,
                'vendor_id' => 114,
                'business_classification_id' => 15,
                'created_at' => '2026-06-10 12:31:32',
                'updated_at' => '2026-06-10 12:31:32',
            ),
            290 => 
            array (
                'id' => 326,
                'vendor_id' => 114,
                'business_classification_id' => 16,
                'created_at' => '2026-06-10 12:31:32',
                'updated_at' => '2026-06-10 12:31:32',
            ),
            291 => 
            array (
                'id' => 327,
                'vendor_id' => 18,
                'business_classification_id' => 14,
                'created_at' => '2026-06-10 14:20:35',
                'updated_at' => '2026-06-10 14:20:35',
            ),
            292 => 
            array (
                'id' => 328,
                'vendor_id' => 117,
                'business_classification_id' => 14,
                'created_at' => '2026-06-10 14:54:11',
                'updated_at' => '2026-06-10 14:54:11',
            ),
            293 => 
            array (
                'id' => 329,
                'vendor_id' => 115,
                'business_classification_id' => 27,
                'created_at' => '2026-06-10 16:48:16',
                'updated_at' => '2026-06-10 16:48:16',
            ),
            294 => 
            array (
                'id' => 330,
                'vendor_id' => 115,
                'business_classification_id' => 28,
                'created_at' => '2026-06-10 16:48:16',
                'updated_at' => '2026-06-10 16:48:16',
            ),
            295 => 
            array (
                'id' => 331,
                'vendor_id' => 61,
                'business_classification_id' => 8,
                'created_at' => '2026-06-11 09:30:23',
                'updated_at' => '2026-06-11 09:30:23',
            ),
            296 => 
            array (
                'id' => 332,
                'vendor_id' => 61,
                'business_classification_id' => 12,
                'created_at' => '2026-06-11 09:30:23',
                'updated_at' => '2026-06-11 09:30:23',
            ),
            297 => 
            array (
                'id' => 333,
                'vendor_id' => 61,
                'business_classification_id' => 6,
                'created_at' => '2026-06-11 09:30:23',
                'updated_at' => '2026-06-11 09:30:23',
            ),
            298 => 
            array (
                'id' => 334,
                'vendor_id' => 67,
                'business_classification_id' => 12,
                'created_at' => '2026-06-11 12:55:27',
                'updated_at' => '2026-06-11 12:55:27',
            ),
            299 => 
            array (
                'id' => 335,
                'vendor_id' => 67,
                'business_classification_id' => 14,
                'created_at' => '2026-06-11 12:55:27',
                'updated_at' => '2026-06-11 12:55:27',
            ),
            300 => 
            array (
                'id' => 336,
                'vendor_id' => 67,
                'business_classification_id' => 33,
                'created_at' => '2026-06-11 12:55:27',
                'updated_at' => '2026-06-11 12:55:27',
            ),
            301 => 
            array (
                'id' => 337,
                'vendor_id' => 121,
                'business_classification_id' => 24,
                'created_at' => '2026-06-11 13:06:25',
                'updated_at' => '2026-06-11 13:06:25',
            ),
            302 => 
            array (
                'id' => 338,
                'vendor_id' => 56,
                'business_classification_id' => 5,
                'created_at' => '2026-06-11 14:26:55',
                'updated_at' => '2026-06-11 14:26:55',
            ),
            303 => 
            array (
                'id' => 345,
                'vendor_id' => 123,
                'business_classification_id' => 15,
                'created_at' => '2026-06-12 09:22:28',
                'updated_at' => '2026-06-12 09:22:28',
            ),
            304 => 
            array (
                'id' => 346,
                'vendor_id' => 122,
                'business_classification_id' => 26,
                'created_at' => '2026-06-12 09:57:10',
                'updated_at' => '2026-06-12 09:57:10',
            ),
            305 => 
            array (
                'id' => 347,
                'vendor_id' => 122,
                'business_classification_id' => 27,
                'created_at' => '2026-06-12 09:57:10',
                'updated_at' => '2026-06-12 09:57:10',
            ),
            306 => 
            array (
                'id' => 348,
                'vendor_id' => 122,
                'business_classification_id' => 28,
                'created_at' => '2026-06-12 09:57:10',
                'updated_at' => '2026-06-12 09:57:10',
            ),
            307 => 
            array (
                'id' => 349,
                'vendor_id' => 122,
                'business_classification_id' => 29,
                'created_at' => '2026-06-12 09:57:10',
                'updated_at' => '2026-06-12 09:57:10',
            ),
            308 => 
            array (
                'id' => 350,
                'vendor_id' => 122,
                'business_classification_id' => 30,
                'created_at' => '2026-06-12 09:57:10',
                'updated_at' => '2026-06-12 09:57:10',
            ),
            309 => 
            array (
                'id' => 351,
                'vendor_id' => 122,
                'business_classification_id' => 31,
                'created_at' => '2026-06-12 09:57:10',
                'updated_at' => '2026-06-12 09:57:10',
            ),
            310 => 
            array (
                'id' => 352,
                'vendor_id' => 116,
                'business_classification_id' => 12,
                'created_at' => '2026-06-15 11:08:54',
                'updated_at' => '2026-06-15 11:08:54',
            ),
            311 => 
            array (
                'id' => 353,
                'vendor_id' => 126,
                'business_classification_id' => 20,
                'created_at' => '2026-06-17 10:27:38',
                'updated_at' => '2026-06-17 10:27:38',
            ),
            312 => 
            array (
                'id' => 354,
                'vendor_id' => 120,
                'business_classification_id' => 8,
                'created_at' => '2026-06-17 11:35:23',
                'updated_at' => '2026-06-17 11:35:23',
            ),
            313 => 
            array (
                'id' => 355,
                'vendor_id' => 125,
                'business_classification_id' => 22,
                'created_at' => '2026-06-18 11:07:40',
                'updated_at' => '2026-06-18 11:07:40',
            ),
            314 => 
            array (
                'id' => 356,
                'vendor_id' => 125,
                'business_classification_id' => 23,
                'created_at' => '2026-06-18 11:07:40',
                'updated_at' => '2026-06-18 11:07:40',
            ),
            315 => 
            array (
                'id' => 357,
                'vendor_id' => 125,
                'business_classification_id' => 24,
                'created_at' => '2026-06-18 11:07:40',
                'updated_at' => '2026-06-18 11:07:40',
            ),
            316 => 
            array (
                'id' => 358,
                'vendor_id' => 125,
                'business_classification_id' => 25,
                'created_at' => '2026-06-18 11:07:40',
                'updated_at' => '2026-06-18 11:07:40',
            ),
            317 => 
            array (
                'id' => 359,
                'vendor_id' => 128,
                'business_classification_id' => 15,
                'created_at' => '2026-06-18 12:24:08',
                'updated_at' => '2026-06-18 12:24:08',
            ),
            318 => 
            array (
                'id' => 360,
                'vendor_id' => 128,
                'business_classification_id' => 9,
                'created_at' => '2026-06-18 12:24:08',
                'updated_at' => '2026-06-18 12:24:08',
            ),
            319 => 
            array (
                'id' => 361,
                'vendor_id' => 129,
                'business_classification_id' => 25,
                'created_at' => '2026-06-18 12:28:48',
                'updated_at' => '2026-06-18 12:28:48',
            ),
            320 => 
            array (
                'id' => 362,
                'vendor_id' => 129,
                'business_classification_id' => 22,
                'created_at' => '2026-06-18 12:28:48',
                'updated_at' => '2026-06-18 12:28:48',
            ),
            321 => 
            array (
                'id' => 363,
                'vendor_id' => 129,
                'business_classification_id' => 23,
                'created_at' => '2026-06-18 12:28:48',
                'updated_at' => '2026-06-18 12:28:48',
            ),
            322 => 
            array (
                'id' => 364,
                'vendor_id' => 129,
                'business_classification_id' => 24,
                'created_at' => '2026-06-18 12:28:48',
                'updated_at' => '2026-06-18 12:28:48',
            ),
            323 => 
            array (
                'id' => 365,
                'vendor_id' => 119,
                'business_classification_id' => 8,
                'created_at' => '2026-06-18 13:46:18',
                'updated_at' => '2026-06-18 13:46:18',
            ),
            324 => 
            array (
                'id' => 366,
                'vendor_id' => 119,
                'business_classification_id' => 9,
                'created_at' => '2026-06-18 13:46:18',
                'updated_at' => '2026-06-18 13:46:18',
            ),
            325 => 
            array (
                'id' => 367,
                'vendor_id' => 119,
                'business_classification_id' => 15,
                'created_at' => '2026-06-18 13:46:18',
                'updated_at' => '2026-06-18 13:46:18',
            ),
            326 => 
            array (
                'id' => 368,
                'vendor_id' => 119,
                'business_classification_id' => 14,
                'created_at' => '2026-06-18 13:46:18',
                'updated_at' => '2026-06-18 13:46:18',
            ),
            327 => 
            array (
                'id' => 369,
                'vendor_id' => 119,
                'business_classification_id' => 11,
                'created_at' => '2026-06-18 13:46:18',
                'updated_at' => '2026-06-18 13:46:18',
            ),
            328 => 
            array (
                'id' => 370,
                'vendor_id' => 119,
                'business_classification_id' => 12,
                'created_at' => '2026-06-18 13:46:18',
                'updated_at' => '2026-06-18 13:46:18',
            ),
            329 => 
            array (
                'id' => 371,
                'vendor_id' => 136,
                'business_classification_id' => 30,
                'created_at' => '2026-06-26 10:41:29',
                'updated_at' => '2026-06-26 10:41:29',
            ),
            330 => 
            array (
                'id' => 372,
                'vendor_id' => 134,
                'business_classification_id' => 16,
                'created_at' => '2026-06-29 08:28:41',
                'updated_at' => '2026-06-29 08:28:41',
            ),
            331 => 
            array (
                'id' => 373,
                'vendor_id' => 63,
                'business_classification_id' => 34,
                'created_at' => '2026-07-01 14:42:24',
                'updated_at' => '2026-07-01 14:42:24',
            ),
            332 => 
            array (
                'id' => 374,
                'vendor_id' => 63,
                'business_classification_id' => 35,
                'created_at' => '2026-07-01 14:42:24',
                'updated_at' => '2026-07-01 14:42:24',
            ),
            333 => 
            array (
                'id' => 375,
                'vendor_id' => 127,
                'business_classification_id' => 7,
                'created_at' => '2026-07-07 11:10:07',
                'updated_at' => '2026-07-07 11:10:07',
            ),
            334 => 
            array (
                'id' => 376,
                'vendor_id' => 127,
                'business_classification_id' => 8,
                'created_at' => '2026-07-07 11:10:07',
                'updated_at' => '2026-07-07 11:10:07',
            ),
            335 => 
            array (
                'id' => 377,
                'vendor_id' => 127,
                'business_classification_id' => 9,
                'created_at' => '2026-07-07 11:10:07',
                'updated_at' => '2026-07-07 11:10:07',
            ),
            336 => 
            array (
                'id' => 378,
                'vendor_id' => 127,
                'business_classification_id' => 10,
                'created_at' => '2026-07-07 11:10:07',
                'updated_at' => '2026-07-07 11:10:07',
            ),
            337 => 
            array (
                'id' => 379,
                'vendor_id' => 127,
                'business_classification_id' => 11,
                'created_at' => '2026-07-07 11:10:07',
                'updated_at' => '2026-07-07 11:10:07',
            ),
            338 => 
            array (
                'id' => 380,
                'vendor_id' => 127,
                'business_classification_id' => 12,
                'created_at' => '2026-07-07 11:10:07',
                'updated_at' => '2026-07-07 11:10:07',
            ),
            339 => 
            array (
                'id' => 381,
                'vendor_id' => 135,
                'business_classification_id' => 23,
                'created_at' => '2026-07-07 11:47:03',
                'updated_at' => '2026-07-07 11:47:03',
            ),
            340 => 
            array (
                'id' => 382,
                'vendor_id' => 135,
                'business_classification_id' => 25,
                'created_at' => '2026-07-07 11:47:03',
                'updated_at' => '2026-07-07 11:47:03',
            ),
            341 => 
            array (
                'id' => 383,
                'vendor_id' => 135,
                'business_classification_id' => 24,
                'created_at' => '2026-07-07 11:47:03',
                'updated_at' => '2026-07-07 11:47:03',
            ),
            342 => 
            array (
                'id' => 384,
                'vendor_id' => 135,
                'business_classification_id' => 22,
                'created_at' => '2026-07-07 11:47:03',
                'updated_at' => '2026-07-07 11:47:03',
            ),
            343 => 
            array (
                'id' => 385,
                'vendor_id' => 143,
                'business_classification_id' => 15,
                'created_at' => '2026-07-07 15:34:59',
                'updated_at' => '2026-07-07 15:34:59',
            ),
            344 => 
            array (
                'id' => 386,
                'vendor_id' => 143,
                'business_classification_id' => 34,
                'created_at' => '2026-07-07 15:34:59',
                'updated_at' => '2026-07-07 15:34:59',
            ),
            345 => 
            array (
                'id' => 387,
                'vendor_id' => 143,
                'business_classification_id' => 9,
                'created_at' => '2026-07-07 15:34:59',
                'updated_at' => '2026-07-07 15:34:59',
            ),
            346 => 
            array (
                'id' => 388,
                'vendor_id' => 140,
                'business_classification_id' => 8,
                'created_at' => '2026-07-07 16:17:04',
                'updated_at' => '2026-07-07 16:17:04',
            ),
            347 => 
            array (
                'id' => 389,
                'vendor_id' => 144,
                'business_classification_id' => 9,
                'created_at' => '2026-07-08 14:30:12',
                'updated_at' => '2026-07-08 14:30:12',
            ),
            348 => 
            array (
                'id' => 390,
                'vendor_id' => 112,
                'business_classification_id' => 2,
                'created_at' => '2026-07-08 16:56:33',
                'updated_at' => '2026-07-08 16:56:33',
            ),
            349 => 
            array (
                'id' => 391,
                'vendor_id' => 145,
                'business_classification_id' => 22,
                'created_at' => '2026-07-10 11:27:50',
                'updated_at' => '2026-07-10 11:27:50',
            ),
            350 => 
            array (
                'id' => 392,
                'vendor_id' => 145,
                'business_classification_id' => 23,
                'created_at' => '2026-07-10 11:27:50',
                'updated_at' => '2026-07-10 11:27:50',
            ),
            351 => 
            array (
                'id' => 393,
                'vendor_id' => 145,
                'business_classification_id' => 24,
                'created_at' => '2026-07-10 11:27:50',
                'updated_at' => '2026-07-10 11:27:50',
            ),
            352 => 
            array (
                'id' => 394,
                'vendor_id' => 145,
                'business_classification_id' => 25,
                'created_at' => '2026-07-10 11:27:50',
                'updated_at' => '2026-07-10 11:27:50',
            ),
            353 => 
            array (
                'id' => 395,
                'vendor_id' => 146,
                'business_classification_id' => 22,
                'created_at' => '2026-07-10 12:27:40',
                'updated_at' => '2026-07-10 12:27:40',
            ),
            354 => 
            array (
                'id' => 396,
                'vendor_id' => 146,
                'business_classification_id' => 23,
                'created_at' => '2026-07-10 12:27:40',
                'updated_at' => '2026-07-10 12:27:40',
            ),
            355 => 
            array (
                'id' => 397,
                'vendor_id' => 146,
                'business_classification_id' => 24,
                'created_at' => '2026-07-10 12:27:40',
                'updated_at' => '2026-07-10 12:27:40',
            ),
            356 => 
            array (
                'id' => 398,
                'vendor_id' => 146,
                'business_classification_id' => 25,
                'created_at' => '2026-07-10 12:27:40',
                'updated_at' => '2026-07-10 12:27:40',
            ),
            357 => 
            array (
                'id' => 399,
                'vendor_id' => 147,
                'business_classification_id' => 22,
                'created_at' => '2026-07-10 14:05:09',
                'updated_at' => '2026-07-10 14:05:09',
            ),
            358 => 
            array (
                'id' => 400,
                'vendor_id' => 147,
                'business_classification_id' => 23,
                'created_at' => '2026-07-10 14:05:09',
                'updated_at' => '2026-07-10 14:05:09',
            ),
            359 => 
            array (
                'id' => 401,
                'vendor_id' => 147,
                'business_classification_id' => 24,
                'created_at' => '2026-07-10 14:05:09',
                'updated_at' => '2026-07-10 14:05:09',
            ),
            360 => 
            array (
                'id' => 402,
                'vendor_id' => 147,
                'business_classification_id' => 25,
                'created_at' => '2026-07-10 14:05:09',
                'updated_at' => '2026-07-10 14:05:09',
            ),
            361 => 
            array (
                'id' => 403,
                'vendor_id' => 148,
                'business_classification_id' => 16,
                'created_at' => '2026-07-14 12:06:31',
                'updated_at' => '2026-07-14 12:06:31',
            ),
            362 => 
            array (
                'id' => 404,
                'vendor_id' => 137,
                'business_classification_id' => 16,
                'created_at' => '2026-07-16 15:42:54',
                'updated_at' => '2026-07-16 15:42:54',
            ),
            363 => 
            array (
                'id' => 405,
                'vendor_id' => 142,
                'business_classification_id' => 8,
                'created_at' => '2026-07-17 13:24:06',
                'updated_at' => '2026-07-17 13:24:06',
            ),
            364 => 
            array (
                'id' => 406,
                'vendor_id' => 142,
                'business_classification_id' => 9,
                'created_at' => '2026-07-17 13:24:06',
                'updated_at' => '2026-07-17 13:24:06',
            ),
            365 => 
            array (
                'id' => 407,
                'vendor_id' => 142,
                'business_classification_id' => 11,
                'created_at' => '2026-07-17 13:24:06',
                'updated_at' => '2026-07-17 13:24:06',
            ),
            366 => 
            array (
                'id' => 408,
                'vendor_id' => 142,
                'business_classification_id' => 12,
                'created_at' => '2026-07-17 13:24:06',
                'updated_at' => '2026-07-17 13:24:06',
            ),
            367 => 
            array (
                'id' => 409,
                'vendor_id' => 150,
                'business_classification_id' => 35,
                'created_at' => '2026-07-20 17:01:16',
                'updated_at' => '2026-07-20 17:01:16',
            ),
            368 => 
            array (
                'id' => 410,
                'vendor_id' => 151,
                'business_classification_id' => 15,
                'created_at' => '2026-07-21 10:37:23',
                'updated_at' => '2026-07-21 10:37:23',
            ),
            369 => 
            array (
                'id' => 411,
                'vendor_id' => 149,
                'business_classification_id' => 35,
                'created_at' => '2026-07-21 16:01:29',
                'updated_at' => '2026-07-21 16:01:29',
            ),
            370 => 
            array (
                'id' => 412,
                'vendor_id' => 152,
                'business_classification_id' => 9,
                'created_at' => '2026-07-21 16:06:52',
                'updated_at' => '2026-07-21 16:06:52',
            ),
            371 => 
            array (
                'id' => 413,
                'vendor_id' => 152,
                'business_classification_id' => 12,
                'created_at' => '2026-07-21 16:06:52',
                'updated_at' => '2026-07-21 16:06:52',
            ),
            372 => 
            array (
                'id' => 414,
                'vendor_id' => 154,
                'business_classification_id' => 1,
                'created_at' => '2026-07-23 16:11:42',
                'updated_at' => '2026-07-23 16:11:42',
            ),
            373 => 
            array (
                'id' => 415,
                'vendor_id' => 154,
                'business_classification_id' => 2,
                'created_at' => '2026-07-23 16:11:42',
                'updated_at' => '2026-07-23 16:11:42',
            ),
            374 => 
            array (
                'id' => 416,
                'vendor_id' => 154,
                'business_classification_id' => 3,
                'created_at' => '2026-07-23 16:11:42',
                'updated_at' => '2026-07-23 16:11:42',
            ),
            375 => 
            array (
                'id' => 417,
                'vendor_id' => 154,
                'business_classification_id' => 4,
                'created_at' => '2026-07-23 16:11:42',
                'updated_at' => '2026-07-23 16:11:42',
            ),
            376 => 
            array (
                'id' => 418,
                'vendor_id' => 154,
                'business_classification_id' => 5,
                'created_at' => '2026-07-23 16:11:42',
                'updated_at' => '2026-07-23 16:11:42',
            ),
            377 => 
            array (
                'id' => 419,
                'vendor_id' => 154,
                'business_classification_id' => 6,
                'created_at' => '2026-07-23 16:11:42',
                'updated_at' => '2026-07-23 16:11:42',
            ),
            378 => 
            array (
                'id' => 420,
                'vendor_id' => 155,
                'business_classification_id' => 20,
                'created_at' => '2026-07-27 12:45:47',
                'updated_at' => '2026-07-27 12:45:47',
            ),
            379 => 
            array (
                'id' => 421,
                'vendor_id' => 155,
                'business_classification_id' => 19,
                'created_at' => '2026-07-27 12:45:47',
                'updated_at' => '2026-07-27 12:45:47',
            ),
            380 => 
            array (
                'id' => 422,
                'vendor_id' => 155,
                'business_classification_id' => 21,
                'created_at' => '2026-07-27 12:45:47',
                'updated_at' => '2026-07-27 12:45:47',
            ),
            381 => 
            array (
                'id' => 423,
                'vendor_id' => 156,
                'business_classification_id' => 19,
                'created_at' => '2026-07-27 13:06:53',
                'updated_at' => '2026-07-27 13:06:53',
            ),
            382 => 
            array (
                'id' => 424,
                'vendor_id' => 156,
                'business_classification_id' => 20,
                'created_at' => '2026-07-27 13:06:53',
                'updated_at' => '2026-07-27 13:06:53',
            ),
            383 => 
            array (
                'id' => 425,
                'vendor_id' => 156,
                'business_classification_id' => 21,
                'created_at' => '2026-07-27 13:06:53',
                'updated_at' => '2026-07-27 13:06:53',
            ),
            384 => 
            array (
                'id' => 427,
                'vendor_id' => 153,
                'business_classification_id' => 8,
                'created_at' => '2026-07-27 13:19:57',
                'updated_at' => '2026-07-27 13:19:57',
            ),
            385 => 
            array (
                'id' => 428,
                'vendor_id' => 153,
                'business_classification_id' => 9,
                'created_at' => '2026-07-27 13:19:57',
                'updated_at' => '2026-07-27 13:19:57',
            ),
            386 => 
            array (
                'id' => 430,
                'vendor_id' => 153,
                'business_classification_id' => 11,
                'created_at' => '2026-07-27 13:19:57',
                'updated_at' => '2026-07-27 13:19:57',
            ),
            387 => 
            array (
                'id' => 431,
                'vendor_id' => 153,
                'business_classification_id' => 12,
                'created_at' => '2026-07-27 13:19:57',
                'updated_at' => '2026-07-27 13:19:57',
            ),
            388 => 
            array (
                'id' => 432,
                'vendor_id' => 155,
                'business_classification_id' => 9,
                'created_at' => '2026-07-27 14:42:20',
                'updated_at' => '2026-07-27 14:42:20',
            ),
            389 => 
            array (
                'id' => 433,
                'vendor_id' => 155,
                'business_classification_id' => 8,
                'created_at' => '2026-07-27 14:42:20',
                'updated_at' => '2026-07-27 14:42:20',
            ),
            390 => 
            array (
                'id' => 434,
                'vendor_id' => 155,
                'business_classification_id' => 10,
                'created_at' => '2026-07-27 14:42:20',
                'updated_at' => '2026-07-27 14:42:20',
            ),
            391 => 
            array (
                'id' => 435,
                'vendor_id' => 155,
                'business_classification_id' => 11,
                'created_at' => '2026-07-27 14:42:20',
                'updated_at' => '2026-07-27 14:42:20',
            ),
            392 => 
            array (
                'id' => 436,
                'vendor_id' => 155,
                'business_classification_id' => 7,
                'created_at' => '2026-07-27 14:42:20',
                'updated_at' => '2026-07-27 14:42:20',
            ),
            393 => 
            array (
                'id' => 437,
                'vendor_id' => 155,
                'business_classification_id' => 12,
                'created_at' => '2026-07-27 14:42:20',
                'updated_at' => '2026-07-27 14:42:20',
            ),
            394 => 
            array (
                'id' => 438,
                'vendor_id' => 156,
                'business_classification_id' => 7,
                'created_at' => '2026-07-27 14:43:15',
                'updated_at' => '2026-07-27 14:43:15',
            ),
            395 => 
            array (
                'id' => 439,
                'vendor_id' => 156,
                'business_classification_id' => 8,
                'created_at' => '2026-07-27 14:43:15',
                'updated_at' => '2026-07-27 14:43:15',
            ),
            396 => 
            array (
                'id' => 440,
                'vendor_id' => 156,
                'business_classification_id' => 9,
                'created_at' => '2026-07-27 14:43:15',
                'updated_at' => '2026-07-27 14:43:15',
            ),
            397 => 
            array (
                'id' => 441,
                'vendor_id' => 156,
                'business_classification_id' => 10,
                'created_at' => '2026-07-27 14:43:15',
                'updated_at' => '2026-07-27 14:43:15',
            ),
            398 => 
            array (
                'id' => 442,
                'vendor_id' => 156,
                'business_classification_id' => 11,
                'created_at' => '2026-07-27 14:43:15',
                'updated_at' => '2026-07-27 14:43:15',
            ),
            399 => 
            array (
                'id' => 443,
                'vendor_id' => 156,
                'business_classification_id' => 12,
                'created_at' => '2026-07-27 14:43:15',
                'updated_at' => '2026-07-27 14:43:15',
            ),
            400 => 
            array (
                'id' => 444,
                'vendor_id' => 158,
                'business_classification_id' => 11,
                'created_at' => '2026-07-28 13:08:25',
                'updated_at' => '2026-07-28 13:08:25',
            ),
            401 => 
            array (
                'id' => 445,
                'vendor_id' => 158,
                'business_classification_id' => 7,
                'created_at' => '2026-07-28 13:08:25',
                'updated_at' => '2026-07-28 13:08:25',
            ),
            402 => 
            array (
                'id' => 446,
                'vendor_id' => 158,
                'business_classification_id' => 8,
                'created_at' => '2026-07-28 13:08:25',
                'updated_at' => '2026-07-28 13:08:25',
            ),
            403 => 
            array (
                'id' => 447,
                'vendor_id' => 158,
                'business_classification_id' => 9,
                'created_at' => '2026-07-28 13:08:25',
                'updated_at' => '2026-07-28 13:08:25',
            ),
            404 => 
            array (
                'id' => 448,
                'vendor_id' => 158,
                'business_classification_id' => 10,
                'created_at' => '2026-07-28 13:08:25',
                'updated_at' => '2026-07-28 13:08:25',
            ),
            405 => 
            array (
                'id' => 449,
                'vendor_id' => 158,
                'business_classification_id' => 12,
                'created_at' => '2026-07-28 13:08:25',
                'updated_at' => '2026-07-28 13:08:25',
            ),
            406 => 
            array (
                'id' => 450,
                'vendor_id' => 157,
                'business_classification_id' => 8,
                'created_at' => '2026-07-29 14:26:00',
                'updated_at' => '2026-07-29 14:26:00',
            ),
            407 => 
            array (
                'id' => 451,
                'vendor_id' => 157,
                'business_classification_id' => 11,
                'created_at' => '2026-07-29 14:26:00',
                'updated_at' => '2026-07-29 14:26:00',
            ),
            408 => 
            array (
                'id' => 452,
                'vendor_id' => 157,
                'business_classification_id' => 12,
                'created_at' => '2026-07-29 14:26:00',
                'updated_at' => '2026-07-29 14:26:00',
            ),
            409 => 
            array (
                'id' => 453,
                'vendor_id' => 157,
                'business_classification_id' => 9,
                'created_at' => '2026-07-29 14:26:00',
                'updated_at' => '2026-07-29 14:26:00',
            ),
            410 => 
            array (
                'id' => 454,
                'vendor_id' => 159,
                'business_classification_id' => 33,
                'created_at' => '2026-07-29 15:57:48',
                'updated_at' => '2026-07-29 15:57:48',
            ),
            411 => 
            array (
                'id' => 455,
                'vendor_id' => 161,
                'business_classification_id' => 24,
                'created_at' => '2026-08-04 10:11:30',
                'updated_at' => '2026-08-04 10:11:30',
            ),
            412 => 
            array (
                'id' => 456,
                'vendor_id' => 161,
                'business_classification_id' => 25,
                'created_at' => '2026-08-04 10:11:30',
                'updated_at' => '2026-08-04 10:11:30',
            ),
            413 => 
            array (
                'id' => 457,
                'vendor_id' => 162,
                'business_classification_id' => 7,
                'created_at' => '2026-08-04 18:16:12',
                'updated_at' => '2026-08-04 18:16:12',
            ),
            414 => 
            array (
                'id' => 458,
                'vendor_id' => 162,
                'business_classification_id' => 8,
                'created_at' => '2026-08-04 18:16:12',
                'updated_at' => '2026-08-04 18:16:12',
            ),
            415 => 
            array (
                'id' => 459,
                'vendor_id' => 162,
                'business_classification_id' => 9,
                'created_at' => '2026-08-04 18:16:12',
                'updated_at' => '2026-08-04 18:16:12',
            ),
            416 => 
            array (
                'id' => 460,
                'vendor_id' => 162,
                'business_classification_id' => 10,
                'created_at' => '2026-08-04 18:16:12',
                'updated_at' => '2026-08-04 18:16:12',
            ),
            417 => 
            array (
                'id' => 461,
                'vendor_id' => 162,
                'business_classification_id' => 11,
                'created_at' => '2026-08-04 18:16:12',
                'updated_at' => '2026-08-04 18:16:12',
            ),
            418 => 
            array (
                'id' => 462,
                'vendor_id' => 162,
                'business_classification_id' => 12,
                'created_at' => '2026-08-04 18:16:12',
                'updated_at' => '2026-08-04 18:16:12',
            ),
            419 => 
            array (
                'id' => 463,
                'vendor_id' => 162,
                'business_classification_id' => 15,
                'created_at' => '2026-08-04 18:16:12',
                'updated_at' => '2026-08-04 18:16:12',
            ),
            420 => 
            array (
                'id' => 464,
                'vendor_id' => 162,
                'business_classification_id' => 14,
                'created_at' => '2026-08-04 18:16:12',
                'updated_at' => '2026-08-04 18:16:12',
            ),
            421 => 
            array (
                'id' => 465,
                'vendor_id' => 163,
                'business_classification_id' => 29,
                'created_at' => '2026-08-05 10:31:45',
                'updated_at' => '2026-08-05 10:31:45',
            ),
            422 => 
            array (
                'id' => 466,
                'vendor_id' => 163,
                'business_classification_id' => 28,
                'created_at' => '2026-08-05 10:31:45',
                'updated_at' => '2026-08-05 10:31:45',
            ),
            423 => 
            array (
                'id' => 467,
                'vendor_id' => 153,
                'business_classification_id' => 7,
                'created_at' => '2026-08-07 13:16:18',
                'updated_at' => '2026-08-07 13:16:18',
            ),
            424 => 
            array (
                'id' => 468,
                'vendor_id' => 153,
                'business_classification_id' => 10,
                'created_at' => '2026-08-07 13:16:18',
                'updated_at' => '2026-08-07 13:16:18',
            ),
            425 => 
            array (
                'id' => 469,
                'vendor_id' => 160,
                'business_classification_id' => 32,
                'created_at' => '2026-08-11 14:27:05',
                'updated_at' => '2026-08-11 14:27:05',
            ),
            426 => 
            array (
                'id' => 470,
                'vendor_id' => 160,
                'business_classification_id' => 33,
                'created_at' => '2026-08-11 14:27:05',
                'updated_at' => '2026-08-11 14:27:05',
            ),
            427 => 
            array (
                'id' => 471,
                'vendor_id' => 160,
                'business_classification_id' => 34,
                'created_at' => '2026-08-11 14:27:05',
                'updated_at' => '2026-08-11 14:27:05',
            ),
            428 => 
            array (
                'id' => 472,
                'vendor_id' => 160,
                'business_classification_id' => 35,
                'created_at' => '2026-08-11 14:27:05',
                'updated_at' => '2026-08-11 14:27:05',
            ),
            429 => 
            array (
                'id' => 473,
                'vendor_id' => 166,
                'business_classification_id' => 2,
                'created_at' => '2026-08-11 14:50:13',
                'updated_at' => '2026-08-11 14:50:13',
            ),
            430 => 
            array (
                'id' => 474,
                'vendor_id' => 167,
                'business_classification_id' => 12,
                'created_at' => '2026-08-13 15:19:07',
                'updated_at' => '2026-08-13 15:19:07',
            ),
            431 => 
            array (
                'id' => 475,
                'vendor_id' => 133,
                'business_classification_id' => 2,
                'created_at' => '2026-08-14 16:26:40',
                'updated_at' => '2026-08-14 16:26:40',
            ),
            432 => 
            array (
                'id' => 476,
                'vendor_id' => 133,
                'business_classification_id' => 3,
                'created_at' => '2026-08-14 16:26:40',
                'updated_at' => '2026-08-14 16:26:40',
            ),
            433 => 
            array (
                'id' => 477,
                'vendor_id' => 133,
                'business_classification_id' => 4,
                'created_at' => '2026-08-14 16:26:40',
                'updated_at' => '2026-08-14 16:26:40',
            ),
            434 => 
            array (
                'id' => 478,
                'vendor_id' => 133,
                'business_classification_id' => 6,
                'created_at' => '2026-08-14 16:26:40',
                'updated_at' => '2026-08-14 16:26:40',
            ),
            435 => 
            array (
                'id' => 479,
                'vendor_id' => 170,
                'business_classification_id' => 20,
                'created_at' => '2026-08-15 09:42:53',
                'updated_at' => '2026-08-15 09:42:53',
            ),
            436 => 
            array (
                'id' => 480,
                'vendor_id' => 171,
                'business_classification_id' => 20,
                'created_at' => '2026-08-15 12:38:15',
                'updated_at' => '2026-08-15 12:38:15',
            ),
            437 => 
            array (
                'id' => 481,
                'vendor_id' => 172,
                'business_classification_id' => 35,
                'created_at' => '2026-08-18 13:19:34',
                'updated_at' => '2026-08-18 13:19:34',
            ),
            438 => 
            array (
                'id' => 482,
                'vendor_id' => 172,
                'business_classification_id' => 32,
                'created_at' => '2026-08-18 13:19:34',
                'updated_at' => '2026-08-18 13:19:34',
            ),
            439 => 
            array (
                'id' => 483,
                'vendor_id' => 172,
                'business_classification_id' => 33,
                'created_at' => '2026-08-18 13:19:34',
                'updated_at' => '2026-08-18 13:19:34',
            ),
            440 => 
            array (
                'id' => 484,
                'vendor_id' => 172,
                'business_classification_id' => 34,
                'created_at' => '2026-08-18 13:19:34',
                'updated_at' => '2026-08-18 13:19:34',
            ),
            441 => 
            array (
                'id' => 485,
                'vendor_id' => 118,
                'business_classification_id' => 26,
                'created_at' => '2026-08-18 15:27:23',
                'updated_at' => '2026-08-18 15:27:23',
            ),
            442 => 
            array (
                'id' => 486,
                'vendor_id' => 118,
                'business_classification_id' => 27,
                'created_at' => '2026-08-18 15:27:23',
                'updated_at' => '2026-08-18 15:27:23',
            ),
            443 => 
            array (
                'id' => 487,
                'vendor_id' => 118,
                'business_classification_id' => 28,
                'created_at' => '2026-08-18 15:27:23',
                'updated_at' => '2026-08-18 15:27:23',
            ),
            444 => 
            array (
                'id' => 488,
                'vendor_id' => 118,
                'business_classification_id' => 29,
                'created_at' => '2026-08-18 15:27:23',
                'updated_at' => '2026-08-18 15:27:23',
            ),
            445 => 
            array (
                'id' => 489,
                'vendor_id' => 118,
                'business_classification_id' => 30,
                'created_at' => '2026-08-18 15:27:23',
                'updated_at' => '2026-08-18 15:27:23',
            ),
            446 => 
            array (
                'id' => 490,
                'vendor_id' => 118,
                'business_classification_id' => 31,
                'created_at' => '2026-08-18 15:27:23',
                'updated_at' => '2026-08-18 15:27:23',
            ),
            447 => 
            array (
                'id' => 491,
                'vendor_id' => 101,
                'business_classification_id' => 12,
                'created_at' => '2026-08-19 10:17:56',
                'updated_at' => '2026-08-19 10:17:56',
            ),
            448 => 
            array (
                'id' => 492,
                'vendor_id' => 101,
                'business_classification_id' => 9,
                'created_at' => '2026-08-19 10:17:56',
                'updated_at' => '2026-08-19 10:17:56',
            ),
            449 => 
            array (
                'id' => 493,
                'vendor_id' => 101,
                'business_classification_id' => 8,
                'created_at' => '2026-08-19 10:17:56',
                'updated_at' => '2026-08-19 10:17:56',
            ),
            450 => 
            array (
                'id' => 494,
                'vendor_id' => 101,
                'business_classification_id' => 7,
                'created_at' => '2026-08-19 10:18:19',
                'updated_at' => '2026-08-19 10:18:19',
            ),
            451 => 
            array (
                'id' => 495,
                'vendor_id' => 101,
                'business_classification_id' => 10,
                'created_at' => '2026-08-19 10:18:19',
                'updated_at' => '2026-08-19 10:18:19',
            ),
            452 => 
            array (
                'id' => 496,
                'vendor_id' => 101,
                'business_classification_id' => 11,
                'created_at' => '2026-08-19 10:18:19',
                'updated_at' => '2026-08-19 10:18:19',
            ),
            453 => 
            array (
                'id' => 497,
                'vendor_id' => 168,
                'business_classification_id' => 1,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            454 => 
            array (
                'id' => 498,
                'vendor_id' => 168,
                'business_classification_id' => 2,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            455 => 
            array (
                'id' => 499,
                'vendor_id' => 168,
                'business_classification_id' => 3,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            456 => 
            array (
                'id' => 500,
                'vendor_id' => 168,
                'business_classification_id' => 4,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            457 => 
            array (
                'id' => 501,
                'vendor_id' => 168,
                'business_classification_id' => 5,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            458 => 
            array (
                'id' => 502,
                'vendor_id' => 168,
                'business_classification_id' => 6,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            459 => 
            array (
                'id' => 503,
                'vendor_id' => 168,
                'business_classification_id' => 7,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            460 => 
            array (
                'id' => 504,
                'vendor_id' => 168,
                'business_classification_id' => 8,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            461 => 
            array (
                'id' => 505,
                'vendor_id' => 168,
                'business_classification_id' => 9,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            462 => 
            array (
                'id' => 506,
                'vendor_id' => 168,
                'business_classification_id' => 10,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            463 => 
            array (
                'id' => 507,
                'vendor_id' => 168,
                'business_classification_id' => 11,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            464 => 
            array (
                'id' => 508,
                'vendor_id' => 168,
                'business_classification_id' => 12,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            465 => 
            array (
                'id' => 509,
                'vendor_id' => 168,
                'business_classification_id' => 13,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            466 => 
            array (
                'id' => 510,
                'vendor_id' => 168,
                'business_classification_id' => 14,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            467 => 
            array (
                'id' => 511,
                'vendor_id' => 168,
                'business_classification_id' => 15,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            468 => 
            array (
                'id' => 512,
                'vendor_id' => 168,
                'business_classification_id' => 16,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            469 => 
            array (
                'id' => 513,
                'vendor_id' => 168,
                'business_classification_id' => 18,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            470 => 
            array (
                'id' => 514,
                'vendor_id' => 168,
                'business_classification_id' => 17,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            471 => 
            array (
                'id' => 515,
                'vendor_id' => 168,
                'business_classification_id' => 33,
                'created_at' => '2026-08-19 10:54:20',
                'updated_at' => '2026-08-19 10:54:20',
            ),
            472 => 
            array (
                'id' => 523,
                'vendor_id' => 169,
                'business_classification_id' => 2,
                'created_at' => '2026-08-19 16:05:22',
                'updated_at' => '2026-08-19 16:05:22',
            ),
            473 => 
            array (
                'id' => 524,
                'vendor_id' => 173,
                'business_classification_id' => 33,
                'created_at' => '2026-08-19 17:02:07',
                'updated_at' => '2026-08-19 17:02:07',
            ),
            474 => 
            array (
                'id' => 525,
                'vendor_id' => 173,
                'business_classification_id' => 35,
                'created_at' => '2026-08-19 17:02:07',
                'updated_at' => '2026-08-19 17:02:07',
            ),
            475 => 
            array (
                'id' => 526,
                'vendor_id' => 175,
                'business_classification_id' => 14,
                'created_at' => '2026-08-21 11:11:43',
                'updated_at' => '2026-08-21 11:11:43',
            ),
            476 => 
            array (
                'id' => 527,
                'vendor_id' => 175,
                'business_classification_id' => 33,
                'created_at' => '2026-08-21 11:11:43',
                'updated_at' => '2026-08-21 11:11:43',
            ),
            477 => 
            array (
                'id' => 528,
                'vendor_id' => 176,
                'business_classification_id' => 7,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            478 => 
            array (
                'id' => 529,
                'vendor_id' => 176,
                'business_classification_id' => 8,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            479 => 
            array (
                'id' => 530,
                'vendor_id' => 176,
                'business_classification_id' => 9,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            480 => 
            array (
                'id' => 531,
                'vendor_id' => 176,
                'business_classification_id' => 10,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            481 => 
            array (
                'id' => 532,
                'vendor_id' => 176,
                'business_classification_id' => 11,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            482 => 
            array (
                'id' => 533,
                'vendor_id' => 176,
                'business_classification_id' => 12,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            483 => 
            array (
                'id' => 534,
                'vendor_id' => 176,
                'business_classification_id' => 14,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            484 => 
            array (
                'id' => 535,
                'vendor_id' => 176,
                'business_classification_id' => 18,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            485 => 
            array (
                'id' => 536,
                'vendor_id' => 176,
                'business_classification_id' => 17,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            486 => 
            array (
                'id' => 537,
                'vendor_id' => 176,
                'business_classification_id' => 29,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            487 => 
            array (
                'id' => 538,
                'vendor_id' => 176,
                'business_classification_id' => 20,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            488 => 
            array (
                'id' => 539,
                'vendor_id' => 176,
                'business_classification_id' => 19,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            489 => 
            array (
                'id' => 540,
                'vendor_id' => 176,
                'business_classification_id' => 21,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            490 => 
            array (
                'id' => 541,
                'vendor_id' => 176,
                'business_classification_id' => 6,
                'created_at' => '2026-08-22 11:04:22',
                'updated_at' => '2026-08-22 11:04:22',
            ),
            491 => 
            array (
                'id' => 542,
                'vendor_id' => 177,
                'business_classification_id' => 12,
                'created_at' => '2026-08-22 22:19:12',
                'updated_at' => '2026-08-22 22:19:12',
            ),
            492 => 
            array (
                'id' => 543,
                'vendor_id' => 178,
                'business_classification_id' => 12,
                'created_at' => '2026-08-23 11:28:36',
                'updated_at' => '2026-08-23 11:28:36',
            ),
            493 => 
            array (
                'id' => 544,
                'vendor_id' => 174,
                'business_classification_id' => 23,
                'created_at' => '2026-08-25 11:09:20',
                'updated_at' => '2026-08-25 11:09:20',
            ),
            494 => 
            array (
                'id' => 545,
                'vendor_id' => 174,
                'business_classification_id' => 25,
                'created_at' => '2026-08-25 11:09:20',
                'updated_at' => '2026-08-25 11:09:20',
            ),
            495 => 
            array (
                'id' => 546,
                'vendor_id' => 174,
                'business_classification_id' => 22,
                'created_at' => '2026-08-25 11:09:20',
                'updated_at' => '2026-08-25 11:09:20',
            ),
            496 => 
            array (
                'id' => 547,
                'vendor_id' => 174,
                'business_classification_id' => 24,
                'created_at' => '2026-08-25 11:09:20',
                'updated_at' => '2026-08-25 11:09:20',
            ),
            497 => 
            array (
                'id' => 548,
                'vendor_id' => 180,
                'business_classification_id' => 14,
                'created_at' => '2026-08-26 13:37:02',
                'updated_at' => '2026-08-26 13:37:02',
            ),
            498 => 
            array (
                'id' => 549,
                'vendor_id' => 182,
                'business_classification_id' => 2,
                'created_at' => '2026-08-26 15:19:25',
                'updated_at' => '2026-08-26 15:19:25',
            ),
            499 => 
            array (
                'id' => 550,
                'vendor_id' => 181,
                'business_classification_id' => 3,
                'created_at' => '2026-08-26 22:20:30',
                'updated_at' => '2026-08-26 22:20:30',
            ),
        ));
        \DB::table('vendor_category')->insert(array (
            0 => 
            array (
                'id' => 551,
                'vendor_id' => 183,
                'business_classification_id' => 8,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            1 => 
            array (
                'id' => 552,
                'vendor_id' => 183,
                'business_classification_id' => 9,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            2 => 
            array (
                'id' => 553,
                'vendor_id' => 183,
                'business_classification_id' => 14,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            3 => 
            array (
                'id' => 554,
                'vendor_id' => 183,
                'business_classification_id' => 16,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            4 => 
            array (
                'id' => 555,
                'vendor_id' => 183,
                'business_classification_id' => 18,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            5 => 
            array (
                'id' => 556,
                'vendor_id' => 183,
                'business_classification_id' => 17,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            6 => 
            array (
                'id' => 557,
                'vendor_id' => 183,
                'business_classification_id' => 19,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            7 => 
            array (
                'id' => 558,
                'vendor_id' => 183,
                'business_classification_id' => 20,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            8 => 
            array (
                'id' => 559,
                'vendor_id' => 183,
                'business_classification_id' => 21,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            9 => 
            array (
                'id' => 560,
                'vendor_id' => 183,
                'business_classification_id' => 27,
                'created_at' => '2026-08-27 10:16:59',
                'updated_at' => '2026-08-27 10:16:59',
            ),
            10 => 
            array (
                'id' => 561,
                'vendor_id' => 184,
                'business_classification_id' => 12,
                'created_at' => '2026-08-27 12:05:13',
                'updated_at' => '2026-08-27 12:05:13',
            ),
            11 => 
            array (
                'id' => 562,
                'vendor_id' => 185,
                'business_classification_id' => 22,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            12 => 
            array (
                'id' => 563,
                'vendor_id' => 185,
                'business_classification_id' => 23,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            13 => 
            array (
                'id' => 564,
                'vendor_id' => 185,
                'business_classification_id' => 24,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            14 => 
            array (
                'id' => 565,
                'vendor_id' => 185,
                'business_classification_id' => 25,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            15 => 
            array (
                'id' => 566,
                'vendor_id' => 185,
                'business_classification_id' => 27,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            16 => 
            array (
                'id' => 567,
                'vendor_id' => 185,
                'business_classification_id' => 32,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            17 => 
            array (
                'id' => 568,
                'vendor_id' => 185,
                'business_classification_id' => 33,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            18 => 
            array (
                'id' => 569,
                'vendor_id' => 185,
                'business_classification_id' => 34,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            19 => 
            array (
                'id' => 570,
                'vendor_id' => 185,
                'business_classification_id' => 35,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            20 => 
            array (
                'id' => 571,
                'vendor_id' => 185,
                'business_classification_id' => 17,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            21 => 
            array (
                'id' => 572,
                'vendor_id' => 185,
                'business_classification_id' => 18,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            22 => 
            array (
                'id' => 573,
                'vendor_id' => 185,
                'business_classification_id' => 15,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            23 => 
            array (
                'id' => 574,
                'vendor_id' => 185,
                'business_classification_id' => 14,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            24 => 
            array (
                'id' => 575,
                'vendor_id' => 185,
                'business_classification_id' => 13,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            25 => 
            array (
                'id' => 576,
                'vendor_id' => 185,
                'business_classification_id' => 16,
                'created_at' => '2026-08-27 15:39:22',
                'updated_at' => '2026-08-27 15:39:22',
            ),
            26 => 
            array (
                'id' => 577,
                'vendor_id' => 186,
                'business_classification_id' => 9,
                'created_at' => '2026-08-28 09:43:19',
                'updated_at' => '2026-08-28 09:43:19',
            ),
            27 => 
            array (
                'id' => 578,
                'vendor_id' => 187,
                'business_classification_id' => 23,
                'created_at' => '2026-08-28 09:47:30',
                'updated_at' => '2026-08-28 09:47:30',
            ),
            28 => 
            array (
                'id' => 579,
                'vendor_id' => 188,
                'business_classification_id' => 1,
                'created_at' => '2026-08-28 10:47:25',
                'updated_at' => '2026-08-28 10:47:25',
            ),
            29 => 
            array (
                'id' => 580,
                'vendor_id' => 188,
                'business_classification_id' => 2,
                'created_at' => '2026-08-28 10:47:25',
                'updated_at' => '2026-08-28 10:47:25',
            ),
            30 => 
            array (
                'id' => 581,
                'vendor_id' => 188,
                'business_classification_id' => 3,
                'created_at' => '2026-08-28 10:47:25',
                'updated_at' => '2026-08-28 10:47:25',
            ),
            31 => 
            array (
                'id' => 582,
                'vendor_id' => 188,
                'business_classification_id' => 4,
                'created_at' => '2026-08-28 10:47:25',
                'updated_at' => '2026-08-28 10:47:25',
            ),
            32 => 
            array (
                'id' => 583,
                'vendor_id' => 188,
                'business_classification_id' => 5,
                'created_at' => '2026-08-28 10:47:25',
                'updated_at' => '2026-08-28 10:47:25',
            ),
            33 => 
            array (
                'id' => 584,
                'vendor_id' => 188,
                'business_classification_id' => 6,
                'created_at' => '2026-08-28 10:47:25',
                'updated_at' => '2026-08-28 10:47:25',
            ),
            34 => 
            array (
                'id' => 585,
                'vendor_id' => 131,
                'business_classification_id' => 1,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            35 => 
            array (
                'id' => 586,
                'vendor_id' => 131,
                'business_classification_id' => 2,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            36 => 
            array (
                'id' => 587,
                'vendor_id' => 131,
                'business_classification_id' => 3,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            37 => 
            array (
                'id' => 588,
                'vendor_id' => 131,
                'business_classification_id' => 4,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            38 => 
            array (
                'id' => 589,
                'vendor_id' => 131,
                'business_classification_id' => 5,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            39 => 
            array (
                'id' => 590,
                'vendor_id' => 131,
                'business_classification_id' => 6,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            40 => 
            array (
                'id' => 591,
                'vendor_id' => 131,
                'business_classification_id' => 7,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            41 => 
            array (
                'id' => 592,
                'vendor_id' => 131,
                'business_classification_id' => 8,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            42 => 
            array (
                'id' => 593,
                'vendor_id' => 131,
                'business_classification_id' => 9,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            43 => 
            array (
                'id' => 594,
                'vendor_id' => 131,
                'business_classification_id' => 10,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            44 => 
            array (
                'id' => 595,
                'vendor_id' => 131,
                'business_classification_id' => 11,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            45 => 
            array (
                'id' => 596,
                'vendor_id' => 131,
                'business_classification_id' => 12,
                'created_at' => '2026-08-28 14:10:23',
                'updated_at' => '2026-08-28 14:10:23',
            ),
            46 => 
            array (
                'id' => 597,
                'vendor_id' => 68,
                'business_classification_id' => 27,
                'created_at' => '2026-08-29 11:13:20',
                'updated_at' => '2026-08-29 11:13:20',
            ),
            47 => 
            array (
                'id' => 598,
                'vendor_id' => 195,
                'business_classification_id' => 8,
                'created_at' => '2026-08-29 11:55:46',
                'updated_at' => '2026-08-29 11:55:46',
            ),
            48 => 
            array (
                'id' => 599,
                'vendor_id' => 196,
                'business_classification_id' => 28,
                'created_at' => '2026-08-31 16:47:31',
                'updated_at' => '2026-08-31 16:47:31',
            ),
            49 => 
            array (
                'id' => 600,
                'vendor_id' => 192,
                'business_classification_id' => 7,
                'created_at' => '2026-09-01 13:04:51',
                'updated_at' => '2026-09-01 13:04:51',
            ),
            50 => 
            array (
                'id' => 601,
                'vendor_id' => 192,
                'business_classification_id' => 8,
                'created_at' => '2026-09-01 13:04:51',
                'updated_at' => '2026-09-01 13:04:51',
            ),
            51 => 
            array (
                'id' => 602,
                'vendor_id' => 192,
                'business_classification_id' => 9,
                'created_at' => '2026-09-01 13:04:51',
                'updated_at' => '2026-09-01 13:04:51',
            ),
            52 => 
            array (
                'id' => 603,
                'vendor_id' => 192,
                'business_classification_id' => 10,
                'created_at' => '2026-09-01 13:04:51',
                'updated_at' => '2026-09-01 13:04:51',
            ),
            53 => 
            array (
                'id' => 604,
                'vendor_id' => 192,
                'business_classification_id' => 11,
                'created_at' => '2026-09-01 13:04:51',
                'updated_at' => '2026-09-01 13:04:51',
            ),
            54 => 
            array (
                'id' => 605,
                'vendor_id' => 192,
                'business_classification_id' => 12,
                'created_at' => '2026-09-01 13:04:51',
                'updated_at' => '2026-09-01 13:04:51',
            ),
            55 => 
            array (
                'id' => 606,
                'vendor_id' => 199,
                'business_classification_id' => 9,
                'created_at' => '2026-09-02 11:08:31',
                'updated_at' => '2026-09-02 11:08:31',
            ),
            56 => 
            array (
                'id' => 607,
                'vendor_id' => 198,
                'business_classification_id' => 7,
                'created_at' => '2026-09-02 13:59:43',
                'updated_at' => '2026-09-02 13:59:43',
            ),
            57 => 
            array (
                'id' => 608,
                'vendor_id' => 198,
                'business_classification_id' => 8,
                'created_at' => '2026-09-02 13:59:43',
                'updated_at' => '2026-09-02 13:59:43',
            ),
            58 => 
            array (
                'id' => 609,
                'vendor_id' => 198,
                'business_classification_id' => 9,
                'created_at' => '2026-09-02 13:59:43',
                'updated_at' => '2026-09-02 13:59:43',
            ),
            59 => 
            array (
                'id' => 610,
                'vendor_id' => 198,
                'business_classification_id' => 10,
                'created_at' => '2026-09-02 13:59:43',
                'updated_at' => '2026-09-02 13:59:43',
            ),
            60 => 
            array (
                'id' => 611,
                'vendor_id' => 198,
                'business_classification_id' => 11,
                'created_at' => '2026-09-02 13:59:43',
                'updated_at' => '2026-09-02 13:59:43',
            ),
            61 => 
            array (
                'id' => 612,
                'vendor_id' => 198,
                'business_classification_id' => 12,
                'created_at' => '2026-09-02 13:59:43',
                'updated_at' => '2026-09-02 13:59:43',
            ),
            62 => 
            array (
                'id' => 613,
                'vendor_id' => 200,
                'business_classification_id' => 7,
                'created_at' => '2026-09-02 15:12:02',
                'updated_at' => '2026-09-02 15:12:02',
            ),
            63 => 
            array (
                'id' => 614,
                'vendor_id' => 200,
                'business_classification_id' => 8,
                'created_at' => '2026-09-02 15:12:02',
                'updated_at' => '2026-09-02 15:12:02',
            ),
            64 => 
            array (
                'id' => 615,
                'vendor_id' => 200,
                'business_classification_id' => 9,
                'created_at' => '2026-09-02 15:12:02',
                'updated_at' => '2026-09-02 15:12:02',
            ),
            65 => 
            array (
                'id' => 616,
                'vendor_id' => 200,
                'business_classification_id' => 10,
                'created_at' => '2026-09-02 15:12:02',
                'updated_at' => '2026-09-02 15:12:02',
            ),
            66 => 
            array (
                'id' => 617,
                'vendor_id' => 200,
                'business_classification_id' => 12,
                'created_at' => '2026-09-02 15:12:02',
                'updated_at' => '2026-09-02 15:12:02',
            ),
            67 => 
            array (
                'id' => 618,
                'vendor_id' => 200,
                'business_classification_id' => 11,
                'created_at' => '2026-09-02 15:12:02',
                'updated_at' => '2026-09-02 15:12:02',
            ),
            68 => 
            array (
                'id' => 619,
                'vendor_id' => 201,
                'business_classification_id' => 8,
                'created_at' => '2026-09-04 16:23:30',
                'updated_at' => '2026-09-04 16:23:30',
            ),
            69 => 
            array (
                'id' => 620,
                'vendor_id' => 201,
                'business_classification_id' => 12,
                'created_at' => '2026-09-04 16:23:30',
                'updated_at' => '2026-09-04 16:23:30',
            ),
            70 => 
            array (
                'id' => 621,
                'vendor_id' => 202,
                'business_classification_id' => 19,
                'created_at' => '2026-09-07 15:19:56',
                'updated_at' => '2026-09-07 15:19:56',
            ),
            71 => 
            array (
                'id' => 622,
                'vendor_id' => 202,
                'business_classification_id' => 20,
                'created_at' => '2026-09-07 15:19:56',
                'updated_at' => '2026-09-07 15:19:56',
            ),
            72 => 
            array (
                'id' => 623,
                'vendor_id' => 202,
                'business_classification_id' => 21,
                'created_at' => '2026-09-07 15:19:56',
                'updated_at' => '2026-09-07 15:19:56',
            ),
            73 => 
            array (
                'id' => 624,
                'vendor_id' => 202,
                'business_classification_id' => 29,
                'created_at' => '2026-09-07 15:19:56',
                'updated_at' => '2026-09-07 15:19:56',
            ),
            74 => 
            array (
                'id' => 625,
                'vendor_id' => 202,
                'business_classification_id' => 31,
                'created_at' => '2026-09-07 15:19:56',
                'updated_at' => '2026-09-07 15:19:56',
            ),
            75 => 
            array (
                'id' => 626,
                'vendor_id' => 203,
                'business_classification_id' => 8,
                'created_at' => '2026-09-07 17:15:14',
                'updated_at' => '2026-09-07 17:15:14',
            ),
            76 => 
            array (
                'id' => 627,
                'vendor_id' => 203,
                'business_classification_id' => 11,
                'created_at' => '2026-09-07 17:15:14',
                'updated_at' => '2026-09-07 17:15:14',
            ),
            77 => 
            array (
                'id' => 628,
                'vendor_id' => 203,
                'business_classification_id' => 12,
                'created_at' => '2026-09-07 17:15:14',
                'updated_at' => '2026-09-07 17:15:14',
            ),
            78 => 
            array (
                'id' => 629,
                'vendor_id' => 203,
                'business_classification_id' => 16,
                'created_at' => '2026-09-07 17:15:14',
                'updated_at' => '2026-09-07 17:15:14',
            ),
            79 => 
            array (
                'id' => 630,
                'vendor_id' => 203,
                'business_classification_id' => 21,
                'created_at' => '2026-09-07 17:15:14',
                'updated_at' => '2026-09-07 17:15:14',
            ),
            80 => 
            array (
                'id' => 631,
                'vendor_id' => 203,
                'business_classification_id' => 19,
                'created_at' => '2026-09-07 17:15:14',
                'updated_at' => '2026-09-07 17:15:14',
            ),
            81 => 
            array (
                'id' => 632,
                'vendor_id' => 203,
                'business_classification_id' => 20,
                'created_at' => '2026-09-07 17:15:14',
                'updated_at' => '2026-09-07 17:15:14',
            ),
        ));
        
        
    }
}