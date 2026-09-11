<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RfqInvitationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rfq_invitations')->delete();
        
        \DB::table('rfq_invitations')->insert(array (
            0 => 
            array (
                'id' => 22,
                'rfq_id' => 9,
                'vendor_id' => 1,
                'invited_at' => '2026-03-10 06:43:59',
                'status' => 'pending',
                'created_at' => '2026-03-10 13:43:59',
                'updated_at' => '2026-03-10 13:43:59',
            ),
            1 => 
            array (
                'id' => 23,
                'rfq_id' => 9,
                'vendor_id' => 3,
                'invited_at' => '2026-03-10 06:44:00',
                'status' => 'pending',
                'created_at' => '2026-03-10 13:43:59',
                'updated_at' => '2026-03-10 13:43:59',
            ),
            2 => 
            array (
                'id' => 24,
                'rfq_id' => 9,
                'vendor_id' => 7,
                'invited_at' => '2026-03-10 06:44:00',
                'status' => 'accepted',
                'created_at' => '2026-03-10 13:43:59',
                'updated_at' => '2026-07-07 10:36:30',
            ),
            3 => 
            array (
                'id' => 33,
                'rfq_id' => 13,
                'vendor_id' => 7,
                'invited_at' => '2026-06-05 10:55:18',
                'status' => 'accepted',
                'created_at' => '2026-06-05 17:55:18',
                'updated_at' => '2026-06-05 18:06:33',
            ),
            4 => 
            array (
                'id' => 34,
                'rfq_id' => 13,
                'vendor_id' => 9,
                'invited_at' => '2026-06-05 10:58:25',
                'status' => 'pending',
                'created_at' => '2026-06-05 17:58:25',
                'updated_at' => '2026-06-05 17:58:25',
            ),
            5 => 
            array (
                'id' => 39,
                'rfq_id' => 17,
                'vendor_id' => 10,
                'invited_at' => '2026-06-16 08:10:57',
                'status' => 'accepted',
                'created_at' => '2026-06-16 15:10:56',
                'updated_at' => '2026-06-16 15:11:34',
            ),
            6 => 
            array (
                'id' => 40,
                'rfq_id' => 17,
                'vendor_id' => 12,
                'invited_at' => '2026-06-18 09:16:21',
                'status' => 'accepted',
                'created_at' => '2026-06-18 16:16:20',
                'updated_at' => '2026-06-18 16:20:28',
            ),
            7 => 
            array (
                'id' => 41,
                'rfq_id' => 18,
                'vendor_id' => 9,
                'invited_at' => '2026-06-25 10:03:43',
                'status' => 'accepted',
                'created_at' => '2026-06-25 17:03:43',
                'updated_at' => '2026-06-25 17:15:26',
            ),
            8 => 
            array (
                'id' => 65,
                'rfq_id' => 28,
                'vendor_id' => 9,
                'invited_at' => '2026-07-03 10:40:27',
                'status' => 'pending',
                'created_at' => '2026-07-03 17:40:27',
                'updated_at' => '2026-07-03 17:40:27',
            ),
            9 => 
            array (
                'id' => 66,
                'rfq_id' => 28,
                'vendor_id' => 7,
                'invited_at' => '2026-07-03 10:40:27',
                'status' => 'accepted',
                'created_at' => '2026-07-03 17:40:27',
                'updated_at' => '2026-07-03 18:08:25',
            ),
            10 => 
            array (
                'id' => 74,
                'rfq_id' => 31,
                'vendor_id' => 138,
                'invited_at' => '2026-07-06 10:14:08',
                'status' => 'pending',
                'created_at' => '2026-07-06 17:14:08',
                'updated_at' => '2026-07-06 17:14:08',
            ),
            11 => 
            array (
                'id' => 75,
                'rfq_id' => 31,
                'vendor_id' => 10,
                'invited_at' => '2026-07-06 10:16:00',
                'status' => 'accepted',
                'created_at' => '2026-07-06 17:16:00',
                'updated_at' => '2026-07-17 15:37:27',
            ),
            12 => 
            array (
                'id' => 76,
                'rfq_id' => 9,
                'vendor_id' => 9,
                'invited_at' => '2026-07-07 03:49:16',
                'status' => 'pending',
                'created_at' => '2026-07-07 10:49:16',
                'updated_at' => '2026-07-07 10:49:16',
            ),
            13 => 
            array (
                'id' => 77,
                'rfq_id' => 32,
                'vendor_id' => 110,
                'invited_at' => '2026-07-10 10:43:38',
                'status' => 'accepted',
                'created_at' => '2026-07-10 17:43:38',
                'updated_at' => '2026-07-13 11:21:34',
            ),
            14 => 
            array (
                'id' => 78,
                'rfq_id' => 32,
                'vendor_id' => 135,
                'invited_at' => '2026-07-10 10:43:38',
                'status' => 'pending',
                'created_at' => '2026-07-10 17:43:38',
                'updated_at' => '2026-07-10 17:43:38',
            ),
            15 => 
            array (
                'id' => 79,
                'rfq_id' => 32,
                'vendor_id' => 146,
                'invited_at' => '2026-07-10 10:43:38',
                'status' => 'accepted',
                'created_at' => '2026-07-10 17:43:38',
                'updated_at' => '2026-07-13 10:09:59',
            ),
            16 => 
            array (
                'id' => 80,
                'rfq_id' => 32,
                'vendor_id' => 147,
                'invited_at' => '2026-07-10 10:43:38',
                'status' => 'accepted',
                'created_at' => '2026-07-10 17:43:38',
                'updated_at' => '2026-07-13 12:17:15',
            ),
            17 => 
            array (
                'id' => 81,
                'rfq_id' => 33,
                'vendor_id' => 9,
                'invited_at' => '2026-07-13 09:16:01',
                'status' => 'pending',
                'created_at' => '2026-07-13 16:16:01',
                'updated_at' => '2026-07-13 16:16:01',
            ),
            18 => 
            array (
                'id' => 82,
                'rfq_id' => 33,
                'vendor_id' => 7,
                'invited_at' => '2026-07-13 09:25:41',
                'status' => 'accepted',
                'created_at' => '2026-07-13 16:25:41',
                'updated_at' => '2026-07-17 09:12:53',
            ),
            19 => 
            array (
                'id' => 83,
                'rfq_id' => 34,
                'vendor_id' => 7,
                'invited_at' => '2026-07-14 09:58:31',
                'status' => 'accepted',
                'created_at' => '2026-07-14 16:58:31',
                'updated_at' => '2026-07-14 17:01:12',
            ),
            20 => 
            array (
                'id' => 84,
                'rfq_id' => 35,
                'vendor_id' => 134,
                'invited_at' => '2026-07-16 04:25:35',
                'status' => 'accepted',
                'created_at' => '2026-07-16 11:25:35',
                'updated_at' => '2026-07-16 16:17:55',
            ),
            21 => 
            array (
                'id' => 85,
                'rfq_id' => 35,
                'vendor_id' => 137,
                'invited_at' => '2026-07-16 04:25:35',
                'status' => 'accepted',
                'created_at' => '2026-07-16 11:25:35',
                'updated_at' => '2026-07-16 15:32:36',
            ),
            22 => 
            array (
                'id' => 86,
                'rfq_id' => 35,
                'vendor_id' => 148,
                'invited_at' => '2026-07-16 04:25:35',
                'status' => 'accepted',
                'created_at' => '2026-07-16 11:25:35',
                'updated_at' => '2026-07-16 16:29:19',
            ),
            23 => 
            array (
                'id' => 87,
                'rfq_id' => 35,
                'vendor_id' => 7,
                'invited_at' => '2026-07-16 04:25:35',
                'status' => 'accepted',
                'created_at' => '2026-07-16 11:25:35',
                'updated_at' => '2026-07-16 14:06:58',
            ),
            24 => 
            array (
                'id' => 88,
                'rfq_id' => 36,
                'vendor_id' => 88,
                'invited_at' => '2026-07-20 09:39:02',
                'status' => 'accepted',
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-21 11:18:17',
            ),
            25 => 
            array (
                'id' => 89,
                'rfq_id' => 36,
                'vendor_id' => 85,
                'invited_at' => '2026-07-20 09:39:02',
                'status' => 'accepted',
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 16:46:20',
            ),
            26 => 
            array (
                'id' => 90,
                'rfq_id' => 36,
                'vendor_id' => 7,
                'invited_at' => '2026-07-20 09:39:02',
                'status' => 'accepted',
                'created_at' => '2026-07-20 16:39:02',
                'updated_at' => '2026-07-20 17:56:45',
            ),
            27 => 
            array (
                'id' => 91,
                'rfq_id' => 37,
                'vendor_id' => 10,
                'invited_at' => '2026-07-21 10:57:27',
                'status' => 'pending',
                'created_at' => '2026-07-21 17:57:27',
                'updated_at' => '2026-07-21 17:57:27',
            ),
            28 => 
            array (
                'id' => 92,
                'rfq_id' => 37,
                'vendor_id' => 9,
                'invited_at' => '2026-07-21 10:57:27',
                'status' => 'pending',
                'created_at' => '2026-07-21 17:57:27',
                'updated_at' => '2026-07-21 17:57:27',
            ),
            29 => 
            array (
                'id' => 93,
                'rfq_id' => 37,
                'vendor_id' => 7,
                'invited_at' => '2026-07-21 10:57:27',
                'status' => 'pending',
                'created_at' => '2026-07-21 17:57:27',
                'updated_at' => '2026-07-21 17:57:27',
            ),
            30 => 
            array (
                'id' => 94,
                'rfq_id' => 38,
                'vendor_id' => 7,
                'invited_at' => '2026-07-21 10:57:28',
                'status' => 'accepted',
                'created_at' => '2026-07-21 17:57:28',
                'updated_at' => '2026-07-21 18:00:23',
            ),
            31 => 
            array (
                'id' => 95,
                'rfq_id' => 31,
                'vendor_id' => 7,
                'invited_at' => '2026-07-21 12:45:02',
                'status' => 'pending',
                'created_at' => '2026-07-21 19:45:02',
                'updated_at' => '2026-07-21 19:45:02',
            ),
            32 => 
            array (
                'id' => 96,
                'rfq_id' => 39,
                'vendor_id' => 7,
                'invited_at' => '2026-07-22 04:45:57',
                'status' => 'accepted',
                'created_at' => '2026-07-22 11:45:57',
                'updated_at' => '2026-07-22 11:55:12',
            ),
            33 => 
            array (
                'id' => 97,
                'rfq_id' => 40,
                'vendor_id' => 146,
                'invited_at' => '2026-07-22 07:47:00',
                'status' => 'accepted',
                'created_at' => '2026-07-22 14:47:00',
                'updated_at' => '2026-07-22 16:56:25',
            ),
            34 => 
            array (
                'id' => 98,
                'rfq_id' => 40,
                'vendor_id' => 147,
                'invited_at' => '2026-07-22 07:47:00',
                'status' => 'accepted',
                'created_at' => '2026-07-22 14:47:00',
                'updated_at' => '2026-07-22 16:58:24',
            ),
            35 => 
            array (
                'id' => 99,
                'rfq_id' => 40,
                'vendor_id' => 135,
                'invited_at' => '2026-07-22 07:47:00',
                'status' => 'accepted',
                'created_at' => '2026-07-22 14:47:00',
                'updated_at' => '2026-07-22 15:10:03',
            ),
            36 => 
            array (
                'id' => 100,
                'rfq_id' => 40,
                'vendor_id' => 7,
                'invited_at' => '2026-07-22 07:47:00',
                'status' => 'accepted',
                'created_at' => '2026-07-22 14:47:00',
                'updated_at' => '2026-07-22 15:39:19',
            ),
            37 => 
            array (
                'id' => 101,
                'rfq_id' => 41,
                'vendor_id' => 85,
                'invited_at' => '2026-07-24 03:19:33',
                'status' => 'accepted',
                'created_at' => '2026-07-24 10:19:33',
                'updated_at' => '2026-07-24 10:36:40',
            ),
            38 => 
            array (
                'id' => 102,
                'rfq_id' => 41,
                'vendor_id' => 7,
                'invited_at' => '2026-07-24 03:19:33',
                'status' => 'pending',
                'created_at' => '2026-07-24 10:19:33',
                'updated_at' => '2026-07-24 10:19:33',
            ),
            39 => 
            array (
                'id' => 103,
                'rfq_id' => 42,
                'vendor_id' => 87,
                'invited_at' => '2026-07-24 08:16:25',
                'status' => 'accepted',
                'created_at' => '2026-07-24 15:16:25',
                'updated_at' => '2026-07-28 11:45:36',
            ),
            40 => 
            array (
                'id' => 104,
                'rfq_id' => 42,
                'vendor_id' => 7,
                'invited_at' => '2026-07-24 08:16:25',
                'status' => 'pending',
                'created_at' => '2026-07-24 15:16:25',
                'updated_at' => '2026-07-24 15:16:25',
            ),
            41 => 
            array (
                'id' => 105,
                'rfq_id' => 43,
                'vendor_id' => 110,
                'invited_at' => '2026-07-27 06:19:18',
                'status' => 'accepted',
                'created_at' => '2026-07-27 13:19:18',
                'updated_at' => '2026-07-27 13:26:22',
            ),
            42 => 
            array (
                'id' => 106,
                'rfq_id' => 43,
                'vendor_id' => 146,
                'invited_at' => '2026-07-27 06:19:18',
                'status' => 'pending',
                'created_at' => '2026-07-27 13:19:18',
                'updated_at' => '2026-07-27 13:19:18',
            ),
            43 => 
            array (
                'id' => 107,
                'rfq_id' => 43,
                'vendor_id' => 7,
                'invited_at' => '2026-07-27 06:19:18',
                'status' => 'pending',
                'created_at' => '2026-07-27 13:19:18',
                'updated_at' => '2026-07-27 13:19:18',
            ),
            44 => 
            array (
                'id' => 108,
                'rfq_id' => 44,
                'vendor_id' => 7,
                'invited_at' => '2026-07-27 15:44:07',
                'status' => 'accepted',
                'created_at' => '2026-07-27 22:44:07',
                'updated_at' => '2026-07-27 22:52:31',
            ),
            45 => 
            array (
                'id' => 109,
                'rfq_id' => 45,
                'vendor_id' => 7,
                'invited_at' => '2026-07-28 07:17:43',
                'status' => 'accepted',
                'created_at' => '2026-07-28 14:17:43',
                'updated_at' => '2026-07-28 14:18:36',
            ),
            46 => 
            array (
                'id' => 110,
                'rfq_id' => 45,
                'vendor_id' => 103,
                'invited_at' => '2026-07-28 07:17:43',
                'status' => 'pending',
                'created_at' => '2026-07-28 14:17:43',
                'updated_at' => '2026-07-28 14:17:43',
            ),
            47 => 
            array (
                'id' => 111,
                'rfq_id' => 46,
                'vendor_id' => 87,
                'invited_at' => '2026-07-28 08:03:50',
                'status' => 'accepted',
                'created_at' => '2026-07-28 15:03:50',
                'updated_at' => '2026-07-29 16:11:25',
            ),
            48 => 
            array (
                'id' => 112,
                'rfq_id' => 46,
                'vendor_id' => 7,
                'invited_at' => '2026-07-28 08:03:50',
                'status' => 'pending',
                'created_at' => '2026-07-28 15:03:50',
                'updated_at' => '2026-07-28 15:03:50',
            ),
            49 => 
            array (
                'id' => 113,
                'rfq_id' => 47,
                'vendor_id' => 7,
                'invited_at' => '2026-07-28 08:06:32',
                'status' => 'accepted',
                'created_at' => '2026-07-28 15:06:32',
                'updated_at' => '2026-07-28 15:07:49',
            ),
            50 => 
            array (
                'id' => 114,
                'rfq_id' => 48,
                'vendor_id' => 135,
                'invited_at' => '2026-07-28 08:30:51',
                'status' => 'accepted',
                'created_at' => '2026-07-28 15:30:51',
                'updated_at' => '2026-07-28 15:33:01',
            ),
            51 => 
            array (
                'id' => 115,
                'rfq_id' => 48,
                'vendor_id' => 146,
                'invited_at' => '2026-07-28 08:30:51',
                'status' => 'accepted',
                'created_at' => '2026-07-28 15:30:51',
                'updated_at' => '2026-07-28 15:32:27',
            ),
            52 => 
            array (
                'id' => 116,
                'rfq_id' => 48,
                'vendor_id' => 147,
                'invited_at' => '2026-07-28 08:30:51',
                'status' => 'accepted',
                'created_at' => '2026-07-28 15:30:51',
                'updated_at' => '2026-07-28 15:35:29',
            ),
            53 => 
            array (
                'id' => 117,
                'rfq_id' => 48,
                'vendor_id' => 110,
                'invited_at' => '2026-07-28 08:30:51',
                'status' => 'accepted',
                'created_at' => '2026-07-28 15:30:51',
                'updated_at' => '2026-07-28 17:37:16',
            ),
            54 => 
            array (
                'id' => 118,
                'rfq_id' => 48,
                'vendor_id' => 7,
                'invited_at' => '2026-07-28 08:30:51',
                'status' => 'pending',
                'created_at' => '2026-07-28 15:30:51',
                'updated_at' => '2026-07-28 15:30:51',
            ),
            55 => 
            array (
                'id' => 119,
                'rfq_id' => 49,
                'vendor_id' => 110,
                'invited_at' => '2026-07-28 09:04:51',
                'status' => 'accepted',
                'created_at' => '2026-07-28 16:04:51',
                'updated_at' => '2026-07-28 17:37:37',
            ),
            56 => 
            array (
                'id' => 120,
                'rfq_id' => 49,
                'vendor_id' => 135,
                'invited_at' => '2026-07-28 09:04:51',
                'status' => 'pending',
                'created_at' => '2026-07-28 16:04:51',
                'updated_at' => '2026-07-28 16:04:51',
            ),
            57 => 
            array (
                'id' => 121,
                'rfq_id' => 49,
                'vendor_id' => 146,
                'invited_at' => '2026-07-28 09:04:51',
                'status' => 'pending',
                'created_at' => '2026-07-28 16:04:51',
                'updated_at' => '2026-07-28 16:04:51',
            ),
            58 => 
            array (
                'id' => 122,
                'rfq_id' => 49,
                'vendor_id' => 147,
                'invited_at' => '2026-07-28 09:04:51',
                'status' => 'pending',
                'created_at' => '2026-07-28 16:04:51',
                'updated_at' => '2026-07-28 16:04:51',
            ),
            59 => 
            array (
                'id' => 123,
                'rfq_id' => 49,
                'vendor_id' => 7,
                'invited_at' => '2026-07-28 09:04:51',
                'status' => 'accepted',
                'created_at' => '2026-07-28 16:04:51',
                'updated_at' => '2026-08-04 13:49:57',
            ),
            60 => 
            array (
                'id' => 124,
                'rfq_id' => 50,
                'vendor_id' => 27,
                'invited_at' => '2026-07-30 07:41:04',
                'status' => 'pending',
                'created_at' => '2026-07-30 14:41:04',
                'updated_at' => '2026-07-30 14:41:04',
            ),
            61 => 
            array (
                'id' => 125,
                'rfq_id' => 50,
                'vendor_id' => 84,
                'invited_at' => '2026-07-30 07:41:04',
                'status' => 'accepted',
                'created_at' => '2026-07-30 14:41:04',
                'updated_at' => '2026-07-30 16:10:01',
            ),
            62 => 
            array (
                'id' => 126,
                'rfq_id' => 50,
                'vendor_id' => 7,
                'invited_at' => '2026-07-30 07:41:04',
                'status' => 'pending',
                'created_at' => '2026-07-30 14:41:04',
                'updated_at' => '2026-07-30 14:41:04',
            ),
            63 => 
            array (
                'id' => 127,
                'rfq_id' => 51,
                'vendor_id' => 102,
                'invited_at' => '2026-07-31 06:45:57',
                'status' => 'accepted',
                'created_at' => '2026-07-31 13:45:57',
                'updated_at' => '2026-07-31 14:59:45',
            ),
            64 => 
            array (
                'id' => 128,
                'rfq_id' => 51,
                'vendor_id' => 103,
                'invited_at' => '2026-07-31 06:45:57',
                'status' => 'accepted',
                'created_at' => '2026-07-31 13:45:57',
                'updated_at' => '2026-07-31 14:31:36',
            ),
            65 => 
            array (
                'id' => 129,
                'rfq_id' => 52,
                'vendor_id' => 102,
                'invited_at' => '2026-07-31 06:49:10',
                'status' => 'accepted',
                'created_at' => '2026-07-31 13:49:10',
                'updated_at' => '2026-07-31 14:49:57',
            ),
            66 => 
            array (
                'id' => 130,
                'rfq_id' => 52,
                'vendor_id' => 103,
                'invited_at' => '2026-07-31 06:49:10',
                'status' => 'accepted',
                'created_at' => '2026-07-31 13:49:10',
                'updated_at' => '2026-07-31 13:58:05',
            ),
            67 => 
            array (
                'id' => 131,
                'rfq_id' => 53,
                'vendor_id' => 103,
                'invited_at' => '2026-08-03 03:34:14',
                'status' => 'accepted',
                'created_at' => '2026-08-03 10:34:14',
                'updated_at' => '2026-08-03 11:43:05',
            ),
            68 => 
            array (
                'id' => 132,
                'rfq_id' => 53,
                'vendor_id' => 102,
                'invited_at' => '2026-08-03 03:34:14',
                'status' => 'accepted',
                'created_at' => '2026-08-03 10:34:14',
                'updated_at' => '2026-08-03 11:00:57',
            ),
            69 => 
            array (
                'id' => 133,
                'rfq_id' => 54,
                'vendor_id' => 7,
                'invited_at' => '2026-08-03 09:24:05',
                'status' => 'accepted',
                'created_at' => '2026-08-03 16:24:05',
                'updated_at' => '2026-08-04 15:14:39',
            ),
            70 => 
            array (
                'id' => 134,
                'rfq_id' => 54,
                'vendor_id' => 122,
                'invited_at' => '2026-08-03 10:42:08',
                'status' => 'accepted',
                'created_at' => '2026-08-03 17:42:08',
                'updated_at' => '2026-08-04 13:49:25',
            ),
            71 => 
            array (
                'id' => 135,
                'rfq_id' => 54,
                'vendor_id' => 155,
                'invited_at' => '2026-08-03 10:42:08',
                'status' => 'accepted',
                'created_at' => '2026-08-03 17:42:08',
                'updated_at' => '2026-08-04 10:43:49',
            ),
            72 => 
            array (
                'id' => 136,
                'rfq_id' => 54,
                'vendor_id' => 156,
                'invited_at' => '2026-08-03 10:42:08',
                'status' => 'accepted',
                'created_at' => '2026-08-03 17:42:08',
                'updated_at' => '2026-08-04 10:45:42',
            ),
            73 => 
            array (
                'id' => 137,
                'rfq_id' => 55,
                'vendor_id' => 102,
                'invited_at' => '2026-08-04 03:23:15',
                'status' => 'accepted',
                'created_at' => '2026-08-04 10:23:15',
                'updated_at' => '2026-08-04 11:08:05',
            ),
            74 => 
            array (
                'id' => 138,
                'rfq_id' => 55,
                'vendor_id' => 103,
                'invited_at' => '2026-08-04 03:23:15',
                'status' => 'accepted',
                'created_at' => '2026-08-04 10:23:15',
                'updated_at' => '2026-08-04 10:34:37',
            ),
            75 => 
            array (
                'id' => 139,
                'rfq_id' => 56,
                'vendor_id' => 10,
                'invited_at' => '2026-08-04 03:23:45',
                'status' => 'pending',
                'created_at' => '2026-08-04 10:23:45',
                'updated_at' => '2026-08-04 10:23:45',
            ),
            76 => 
            array (
                'id' => 140,
                'rfq_id' => 57,
                'vendor_id' => 102,
                'invited_at' => '2026-08-05 03:10:04',
                'status' => 'accepted',
                'created_at' => '2026-08-05 10:10:04',
                'updated_at' => '2026-08-05 10:58:59',
            ),
            77 => 
            array (
                'id' => 141,
                'rfq_id' => 57,
                'vendor_id' => 103,
                'invited_at' => '2026-08-05 03:10:04',
                'status' => 'accepted',
                'created_at' => '2026-08-05 10:10:04',
                'updated_at' => '2026-08-05 10:22:16',
            ),
            78 => 
            array (
                'id' => 142,
                'rfq_id' => 58,
                'vendor_id' => 102,
                'invited_at' => '2026-08-06 04:37:37',
                'status' => 'accepted',
                'created_at' => '2026-08-06 11:37:37',
                'updated_at' => '2026-08-06 11:43:09',
            ),
            79 => 
            array (
                'id' => 143,
                'rfq_id' => 58,
                'vendor_id' => 103,
                'invited_at' => '2026-08-06 04:37:37',
                'status' => 'accepted',
                'created_at' => '2026-08-06 11:37:37',
                'updated_at' => '2026-08-06 11:45:11',
            ),
            80 => 
            array (
                'id' => 144,
                'rfq_id' => 59,
                'vendor_id' => 7,
                'invited_at' => '2026-08-06 06:47:21',
                'status' => 'pending',
                'created_at' => '2026-08-06 13:47:21',
                'updated_at' => '2026-08-06 13:47:21',
            ),
            81 => 
            array (
                'id' => 145,
                'rfq_id' => 59,
                'vendor_id' => 127,
                'invited_at' => '2026-08-06 10:08:51',
                'status' => 'pending',
                'created_at' => '2026-08-06 17:08:51',
                'updated_at' => '2026-08-06 17:08:51',
            ),
            82 => 
            array (
                'id' => 146,
                'rfq_id' => 59,
                'vendor_id' => 140,
                'invited_at' => '2026-08-06 10:08:51',
                'status' => 'accepted',
                'created_at' => '2026-08-06 17:08:51',
                'updated_at' => '2026-08-06 20:10:21',
            ),
            83 => 
            array (
                'id' => 147,
                'rfq_id' => 59,
                'vendor_id' => 69,
                'invited_at' => '2026-08-06 10:08:51',
                'status' => 'accepted',
                'created_at' => '2026-08-06 17:08:51',
                'updated_at' => '2026-08-07 09:44:34',
            ),
            84 => 
            array (
                'id' => 148,
                'rfq_id' => 59,
                'vendor_id' => 153,
                'invited_at' => '2026-08-06 10:08:51',
                'status' => 'declined',
                'created_at' => '2026-08-06 17:08:51',
                'updated_at' => '2026-08-12 09:40:14',
            ),
            85 => 
            array (
                'id' => 149,
                'rfq_id' => 60,
                'vendor_id' => 105,
                'invited_at' => '2026-08-06 10:24:59',
                'status' => 'accepted',
                'created_at' => '2026-08-06 17:24:59',
                'updated_at' => '2026-08-07 08:45:11',
            ),
            86 => 
            array (
                'id' => 150,
                'rfq_id' => 60,
                'vendor_id' => 107,
                'invited_at' => '2026-08-06 10:24:59',
                'status' => 'accepted',
                'created_at' => '2026-08-06 17:24:59',
                'updated_at' => '2026-08-06 17:37:00',
            ),
            87 => 
            array (
                'id' => 151,
                'rfq_id' => 59,
                'vendor_id' => 158,
                'invited_at' => '2026-08-06 13:10:09',
                'status' => 'accepted',
                'created_at' => '2026-08-06 20:10:09',
                'updated_at' => '2026-08-08 10:33:00',
            ),
            88 => 
            array (
                'id' => 152,
                'rfq_id' => 61,
                'vendor_id' => 102,
                'invited_at' => '2026-08-07 03:46:35',
                'status' => 'accepted',
                'created_at' => '2026-08-07 10:46:35',
                'updated_at' => '2026-08-07 10:55:04',
            ),
            89 => 
            array (
                'id' => 153,
                'rfq_id' => 61,
                'vendor_id' => 103,
                'invited_at' => '2026-08-07 03:46:35',
                'status' => 'accepted',
                'created_at' => '2026-08-07 10:46:35',
                'updated_at' => '2026-08-07 11:11:06',
            ),
            90 => 
            array (
                'id' => 154,
                'rfq_id' => 62,
                'vendor_id' => 103,
                'invited_at' => '2026-08-07 03:49:14',
                'status' => 'accepted',
                'created_at' => '2026-08-07 10:49:14',
                'updated_at' => '2026-08-07 11:04:28',
            ),
            91 => 
            array (
                'id' => 155,
                'rfq_id' => 62,
                'vendor_id' => 102,
                'invited_at' => '2026-08-07 03:49:14',
                'status' => 'accepted',
                'created_at' => '2026-08-07 10:49:14',
                'updated_at' => '2026-08-07 10:56:32',
            ),
            92 => 
            array (
                'id' => 156,
                'rfq_id' => 63,
                'vendor_id' => 103,
                'invited_at' => '2026-08-10 04:24:07',
                'status' => 'accepted',
                'created_at' => '2026-08-10 11:24:07',
                'updated_at' => '2026-08-10 12:15:05',
            ),
            93 => 
            array (
                'id' => 157,
                'rfq_id' => 63,
                'vendor_id' => 102,
                'invited_at' => '2026-08-10 04:24:07',
                'status' => 'accepted',
                'created_at' => '2026-08-10 11:24:07',
                'updated_at' => '2026-08-10 11:41:20',
            ),
            94 => 
            array (
                'id' => 158,
                'rfq_id' => 56,
                'vendor_id' => 7,
                'invited_at' => '2026-08-10 10:36:43',
                'status' => 'accepted',
                'created_at' => '2026-08-10 17:36:43',
                'updated_at' => '2026-08-10 17:37:04',
            ),
            95 => 
            array (
                'id' => 159,
                'rfq_id' => 64,
                'vendor_id' => 103,
                'invited_at' => '2026-08-11 03:21:54',
                'status' => 'accepted',
                'created_at' => '2026-08-11 10:21:54',
                'updated_at' => '2026-08-11 10:30:08',
            ),
            96 => 
            array (
                'id' => 160,
                'rfq_id' => 64,
                'vendor_id' => 102,
                'invited_at' => '2026-08-11 03:21:54',
                'status' => 'accepted',
                'created_at' => '2026-08-11 10:21:54',
                'updated_at' => '2026-08-11 10:30:43',
            ),
            97 => 
            array (
                'id' => 161,
                'rfq_id' => 65,
                'vendor_id' => 103,
                'invited_at' => '2026-08-12 03:39:09',
                'status' => 'accepted',
                'created_at' => '2026-08-12 10:39:09',
                'updated_at' => '2026-08-12 10:46:01',
            ),
            98 => 
            array (
                'id' => 162,
                'rfq_id' => 65,
                'vendor_id' => 102,
                'invited_at' => '2026-08-12 03:39:09',
                'status' => 'accepted',
                'created_at' => '2026-08-12 10:39:09',
                'updated_at' => '2026-08-12 10:41:33',
            ),
            99 => 
            array (
                'id' => 163,
                'rfq_id' => 66,
                'vendor_id' => 1,
                'invited_at' => '2026-08-13 03:05:57',
                'status' => 'pending',
                'created_at' => '2026-08-13 10:05:57',
                'updated_at' => '2026-08-13 10:05:57',
            ),
            100 => 
            array (
                'id' => 164,
                'rfq_id' => 66,
                'vendor_id' => 110,
                'invited_at' => '2026-08-13 03:05:57',
                'status' => 'accepted',
                'created_at' => '2026-08-13 10:05:57',
                'updated_at' => '2026-08-13 10:15:23',
            ),
            101 => 
            array (
                'id' => 165,
                'rfq_id' => 66,
                'vendor_id' => 146,
                'invited_at' => '2026-08-13 03:05:57',
                'status' => 'accepted',
                'created_at' => '2026-08-13 10:05:57',
                'updated_at' => '2026-08-13 10:11:11',
            ),
            102 => 
            array (
                'id' => 166,
                'rfq_id' => 66,
                'vendor_id' => 147,
                'invited_at' => '2026-08-13 03:05:57',
                'status' => 'accepted',
                'created_at' => '2026-08-13 10:05:57',
                'updated_at' => '2026-08-13 10:32:47',
            ),
            103 => 
            array (
                'id' => 167,
                'rfq_id' => 66,
                'vendor_id' => 7,
                'invited_at' => '2026-08-13 03:05:57',
                'status' => 'pending',
                'created_at' => '2026-08-13 10:05:57',
                'updated_at' => '2026-08-13 10:05:57',
            ),
            104 => 
            array (
                'id' => 168,
                'rfq_id' => 67,
                'vendor_id' => 102,
                'invited_at' => '2026-08-13 03:31:31',
                'status' => 'accepted',
                'created_at' => '2026-08-13 10:31:31',
                'updated_at' => '2026-08-13 10:54:26',
            ),
            105 => 
            array (
                'id' => 169,
                'rfq_id' => 67,
                'vendor_id' => 103,
                'invited_at' => '2026-08-13 03:31:31',
                'status' => 'accepted',
                'created_at' => '2026-08-13 10:31:31',
                'updated_at' => '2026-08-13 10:43:54',
            ),
            106 => 
            array (
                'id' => 170,
                'rfq_id' => 68,
                'vendor_id' => 7,
                'invited_at' => '2026-08-13 09:12:51',
                'status' => 'accepted',
                'created_at' => '2026-08-13 16:12:51',
                'updated_at' => '2026-08-14 15:48:35',
            ),
            107 => 
            array (
                'id' => 171,
                'rfq_id' => 68,
                'vendor_id' => 87,
                'invited_at' => '2026-08-13 09:12:51',
                'status' => 'accepted',
                'created_at' => '2026-08-13 16:12:51',
                'updated_at' => '2026-08-14 15:39:35',
            ),
            108 => 
            array (
                'id' => 172,
                'rfq_id' => 69,
                'vendor_id' => 102,
                'invited_at' => '2026-08-14 03:30:20',
                'status' => 'accepted',
                'created_at' => '2026-08-14 10:30:20',
                'updated_at' => '2026-08-14 10:38:58',
            ),
            109 => 
            array (
                'id' => 173,
                'rfq_id' => 69,
                'vendor_id' => 103,
                'invited_at' => '2026-08-14 03:30:20',
                'status' => 'accepted',
                'created_at' => '2026-08-14 10:30:20',
                'updated_at' => '2026-08-14 10:37:19',
            ),
            110 => 
            array (
                'id' => 174,
                'rfq_id' => 70,
                'vendor_id' => 103,
                'invited_at' => '2026-08-14 03:34:38',
                'status' => 'accepted',
                'created_at' => '2026-08-14 10:34:38',
                'updated_at' => '2026-08-14 10:39:04',
            ),
            111 => 
            array (
                'id' => 175,
                'rfq_id' => 70,
                'vendor_id' => 102,
                'invited_at' => '2026-08-14 03:34:38',
                'status' => 'accepted',
                'created_at' => '2026-08-14 10:34:38',
                'updated_at' => '2026-08-14 10:40:03',
            ),
            112 => 
            array (
                'id' => 176,
                'rfq_id' => 71,
                'vendor_id' => 103,
                'invited_at' => '2026-08-18 02:32:37',
                'status' => 'accepted',
                'created_at' => '2026-08-18 09:32:37',
                'updated_at' => '2026-08-18 09:58:39',
            ),
            113 => 
            array (
                'id' => 177,
                'rfq_id' => 71,
                'vendor_id' => 102,
                'invited_at' => '2026-08-18 02:32:37',
                'status' => 'pending',
                'created_at' => '2026-08-18 09:32:37',
                'updated_at' => '2026-08-18 09:32:37',
            ),
            114 => 
            array (
                'id' => 178,
                'rfq_id' => 72,
                'vendor_id' => 103,
                'invited_at' => '2026-08-18 02:35:13',
                'status' => 'accepted',
                'created_at' => '2026-08-18 09:35:13',
                'updated_at' => '2026-08-18 09:59:51',
            ),
            115 => 
            array (
                'id' => 179,
                'rfq_id' => 72,
                'vendor_id' => 102,
                'invited_at' => '2026-08-18 02:35:13',
                'status' => 'pending',
                'created_at' => '2026-08-18 09:35:13',
                'updated_at' => '2026-08-18 09:35:13',
            ),
            116 => 
            array (
                'id' => 180,
                'rfq_id' => 73,
                'vendor_id' => 55,
                'invited_at' => '2026-08-18 02:50:12',
                'status' => 'accepted',
                'created_at' => '2026-08-18 09:50:12',
                'updated_at' => '2026-08-18 15:08:48',
            ),
            117 => 
            array (
                'id' => 181,
                'rfq_id' => 73,
                'vendor_id' => 77,
                'invited_at' => '2026-08-18 02:50:12',
                'status' => 'accepted',
                'created_at' => '2026-08-18 09:50:12',
                'updated_at' => '2026-08-18 13:40:16',
            ),
            118 => 
            array (
                'id' => 182,
                'rfq_id' => 74,
                'vendor_id' => 103,
                'invited_at' => '2026-08-19 03:22:14',
                'status' => 'accepted',
                'created_at' => '2026-08-19 10:22:14',
                'updated_at' => '2026-08-19 10:57:53',
            ),
            119 => 
            array (
                'id' => 183,
                'rfq_id' => 74,
                'vendor_id' => 102,
                'invited_at' => '2026-08-19 03:22:14',
                'status' => 'pending',
                'created_at' => '2026-08-19 10:22:14',
                'updated_at' => '2026-08-19 10:22:14',
            ),
            120 => 
            array (
                'id' => 184,
                'rfq_id' => 75,
                'vendor_id' => 77,
                'invited_at' => '2026-08-19 06:42:02',
                'status' => 'pending',
                'created_at' => '2026-08-19 13:42:02',
                'updated_at' => '2026-08-19 13:42:02',
            ),
            121 => 
            array (
                'id' => 185,
                'rfq_id' => 76,
                'vendor_id' => 55,
                'invited_at' => '2026-08-19 06:59:59',
                'status' => 'pending',
                'created_at' => '2026-08-19 13:59:59',
                'updated_at' => '2026-08-19 13:59:59',
            ),
            122 => 
            array (
                'id' => 186,
                'rfq_id' => 76,
                'vendor_id' => 77,
                'invited_at' => '2026-08-19 06:59:59',
                'status' => 'accepted',
                'created_at' => '2026-08-19 13:59:59',
                'updated_at' => '2026-08-19 14:04:47',
            ),
            123 => 
            array (
                'id' => 187,
                'rfq_id' => 77,
                'vendor_id' => 102,
                'invited_at' => '2026-08-20 03:55:07',
                'status' => 'accepted',
                'created_at' => '2026-08-20 10:55:07',
                'updated_at' => '2026-08-20 10:57:16',
            ),
            124 => 
            array (
                'id' => 188,
                'rfq_id' => 77,
                'vendor_id' => 103,
                'invited_at' => '2026-08-20 03:55:07',
                'status' => 'accepted',
                'created_at' => '2026-08-20 10:55:07',
                'updated_at' => '2026-08-20 10:58:42',
            ),
            125 => 
            array (
                'id' => 189,
                'rfq_id' => 78,
                'vendor_id' => 77,
                'invited_at' => '2026-08-20 06:31:13',
                'status' => 'accepted',
                'created_at' => '2026-08-20 13:31:13',
                'updated_at' => '2026-08-20 13:33:32',
            ),
            126 => 
            array (
                'id' => 190,
                'rfq_id' => 78,
                'vendor_id' => 55,
                'invited_at' => '2026-08-20 06:31:13',
                'status' => 'accepted',
                'created_at' => '2026-08-20 13:31:13',
                'updated_at' => '2026-08-20 13:54:28',
            ),
            127 => 
            array (
                'id' => 191,
                'rfq_id' => 79,
                'vendor_id' => 42,
                'invited_at' => '2026-08-20 07:37:03',
                'status' => 'accepted',
                'created_at' => '2026-08-20 14:37:03',
                'updated_at' => '2026-08-20 16:28:46',
            ),
            128 => 
            array (
                'id' => 192,
                'rfq_id' => 80,
                'vendor_id' => 63,
                'invited_at' => '2026-08-21 03:04:08',
                'status' => 'accepted',
                'created_at' => '2026-08-21 10:04:08',
                'updated_at' => '2026-08-22 08:58:10',
            ),
            129 => 
            array (
                'id' => 193,
                'rfq_id' => 80,
                'vendor_id' => 7,
                'invited_at' => '2026-08-21 03:04:08',
                'status' => 'pending',
                'created_at' => '2026-08-21 10:04:08',
                'updated_at' => '2026-08-21 10:04:08',
            ),
            130 => 
            array (
                'id' => 194,
                'rfq_id' => 81,
                'vendor_id' => 103,
                'invited_at' => '2026-08-21 06:10:12',
                'status' => 'accepted',
                'created_at' => '2026-08-21 13:10:12',
                'updated_at' => '2026-08-21 13:17:16',
            ),
            131 => 
            array (
                'id' => 195,
                'rfq_id' => 81,
                'vendor_id' => 102,
                'invited_at' => '2026-08-21 06:10:12',
                'status' => 'accepted',
                'created_at' => '2026-08-21 13:10:12',
                'updated_at' => '2026-08-21 13:29:50',
            ),
            132 => 
            array (
                'id' => 196,
                'rfq_id' => 82,
                'vendor_id' => 103,
                'invited_at' => '2026-08-21 06:13:17',
                'status' => 'accepted',
                'created_at' => '2026-08-21 13:13:17',
                'updated_at' => '2026-08-21 13:18:12',
            ),
            133 => 
            array (
                'id' => 197,
                'rfq_id' => 82,
                'vendor_id' => 102,
                'invited_at' => '2026-08-21 06:13:17',
                'status' => 'accepted',
                'created_at' => '2026-08-21 13:13:17',
                'updated_at' => '2026-08-21 13:27:17',
            ),
            134 => 
            array (
                'id' => 198,
                'rfq_id' => 83,
                'vendor_id' => 77,
                'invited_at' => '2026-08-21 07:00:50',
                'status' => 'accepted',
                'created_at' => '2026-08-21 14:00:50',
                'updated_at' => '2026-08-21 14:14:16',
            ),
            135 => 
            array (
                'id' => 199,
                'rfq_id' => 83,
                'vendor_id' => 55,
                'invited_at' => '2026-08-21 07:00:50',
                'status' => 'accepted',
                'created_at' => '2026-08-21 14:00:50',
                'updated_at' => '2026-08-21 14:06:09',
            ),
            136 => 
            array (
                'id' => 200,
                'rfq_id' => 84,
                'vendor_id' => 55,
                'invited_at' => '2026-08-21 07:03:39',
                'status' => 'accepted',
                'created_at' => '2026-08-21 14:03:39',
                'updated_at' => '2026-08-21 14:10:19',
            ),
            137 => 
            array (
                'id' => 201,
                'rfq_id' => 84,
                'vendor_id' => 77,
                'invited_at' => '2026-08-21 07:03:39',
                'status' => 'accepted',
                'created_at' => '2026-08-21 14:03:39',
                'updated_at' => '2026-08-21 14:07:36',
            ),
            138 => 
            array (
                'id' => 202,
                'rfq_id' => 85,
                'vendor_id' => 7,
                'invited_at' => '2026-08-21 10:20:35',
                'status' => 'accepted',
                'created_at' => '2026-08-21 17:20:35',
                'updated_at' => '2026-08-24 11:22:09',
            ),
            139 => 
            array (
                'id' => 203,
                'rfq_id' => 85,
                'vendor_id' => 117,
                'invited_at' => '2026-08-21 10:20:35',
                'status' => 'accepted',
                'created_at' => '2026-08-21 17:20:35',
                'updated_at' => '2026-08-22 09:11:47',
            ),
            140 => 
            array (
                'id' => 204,
                'rfq_id' => 85,
                'vendor_id' => 118,
                'invited_at' => '2026-08-21 10:20:35',
                'status' => 'pending',
                'created_at' => '2026-08-21 17:20:35',
                'updated_at' => '2026-08-21 17:20:35',
            ),
            141 => 
            array (
                'id' => 205,
                'rfq_id' => 86,
                'vendor_id' => 55,
                'invited_at' => '2026-08-24 04:47:07',
                'status' => 'accepted',
                'created_at' => '2026-08-24 11:47:07',
                'updated_at' => '2026-08-24 13:11:34',
            ),
            142 => 
            array (
                'id' => 206,
                'rfq_id' => 86,
                'vendor_id' => 77,
                'invited_at' => '2026-08-24 04:47:07',
                'status' => 'accepted',
                'created_at' => '2026-08-24 11:47:07',
                'updated_at' => '2026-08-24 13:22:07',
            ),
            143 => 
            array (
                'id' => 207,
                'rfq_id' => 87,
                'vendor_id' => 103,
                'invited_at' => '2026-08-26 02:02:14',
                'status' => 'accepted',
                'created_at' => '2026-08-26 09:02:14',
                'updated_at' => '2026-08-26 09:21:21',
            ),
            144 => 
            array (
                'id' => 208,
                'rfq_id' => 87,
                'vendor_id' => 102,
                'invited_at' => '2026-08-26 02:02:14',
                'status' => 'accepted',
                'created_at' => '2026-08-26 09:02:14',
                'updated_at' => '2026-08-26 10:05:59',
            ),
            145 => 
            array (
                'id' => 209,
                'rfq_id' => 88,
                'vendor_id' => 102,
                'invited_at' => '2026-08-26 04:49:53',
                'status' => 'accepted',
                'created_at' => '2026-08-26 11:49:53',
                'updated_at' => '2026-08-26 12:45:45',
            ),
            146 => 
            array (
                'id' => 210,
                'rfq_id' => 88,
                'vendor_id' => 103,
                'invited_at' => '2026-08-26 04:49:53',
                'status' => 'accepted',
                'created_at' => '2026-08-26 11:49:53',
                'updated_at' => '2026-08-26 12:49:45',
            ),
            147 => 
            array (
                'id' => 211,
                'rfq_id' => 89,
                'vendor_id' => 103,
                'invited_at' => '2026-08-27 02:07:36',
                'status' => 'accepted',
                'created_at' => '2026-08-27 09:07:36',
                'updated_at' => '2026-08-27 09:10:12',
            ),
            148 => 
            array (
                'id' => 212,
                'rfq_id' => 89,
                'vendor_id' => 102,
                'invited_at' => '2026-08-27 02:07:36',
                'status' => 'accepted',
                'created_at' => '2026-08-27 09:07:36',
                'updated_at' => '2026-08-27 09:38:30',
            ),
            149 => 
            array (
                'id' => 213,
                'rfq_id' => 90,
                'vendor_id' => 103,
                'invited_at' => '2026-08-27 04:12:36',
                'status' => 'accepted',
                'created_at' => '2026-08-27 11:12:36',
                'updated_at' => '2026-08-27 12:36:37',
            ),
            150 => 
            array (
                'id' => 214,
                'rfq_id' => 90,
                'vendor_id' => 102,
                'invited_at' => '2026-08-27 04:12:36',
                'status' => 'accepted',
                'created_at' => '2026-08-27 11:12:36',
                'updated_at' => '2026-08-27 11:45:29',
            ),
            151 => 
            array (
                'id' => 215,
                'rfq_id' => 91,
                'vendor_id' => 77,
                'invited_at' => '2026-08-27 04:22:30',
                'status' => 'accepted',
                'created_at' => '2026-08-27 11:22:30',
                'updated_at' => '2026-08-27 13:13:49',
            ),
            152 => 
            array (
                'id' => 216,
                'rfq_id' => 91,
                'vendor_id' => 55,
                'invited_at' => '2026-08-27 04:22:30',
                'status' => 'accepted',
                'created_at' => '2026-08-27 11:22:30',
                'updated_at' => '2026-08-27 12:08:03',
            ),
            153 => 
            array (
                'id' => 217,
                'rfq_id' => 92,
                'vendor_id' => 7,
                'invited_at' => '2026-08-27 06:18:23',
                'status' => 'pending',
                'created_at' => '2026-08-27 13:18:23',
                'updated_at' => '2026-08-27 13:18:23',
            ),
            154 => 
            array (
                'id' => 218,
                'rfq_id' => 92,
                'vendor_id' => 127,
                'invited_at' => '2026-08-27 06:18:23',
                'status' => 'accepted',
                'created_at' => '2026-08-27 13:18:23',
                'updated_at' => '2026-08-27 17:10:01',
            ),
            155 => 
            array (
                'id' => 219,
                'rfq_id' => 92,
                'vendor_id' => 95,
                'invited_at' => '2026-08-27 06:18:23',
                'status' => 'accepted',
                'created_at' => '2026-08-27 13:18:23',
                'updated_at' => '2026-08-27 13:47:13',
            ),
            156 => 
            array (
                'id' => 220,
                'rfq_id' => 93,
                'vendor_id' => 176,
                'invited_at' => '2026-08-27 06:32:52',
                'status' => 'accepted',
                'created_at' => '2026-08-27 13:32:52',
                'updated_at' => '2026-08-28 07:50:13',
            ),
            157 => 
            array (
                'id' => 221,
                'rfq_id' => 94,
                'vendor_id' => 181,
                'invited_at' => '2026-08-27 06:40:20',
                'status' => 'accepted',
                'created_at' => '2026-08-27 13:40:20',
                'updated_at' => '2026-08-27 15:45:46',
            ),
            158 => 
            array (
                'id' => 222,
                'rfq_id' => 95,
                'vendor_id' => 176,
                'invited_at' => '2026-08-27 06:46:21',
                'status' => 'accepted',
                'created_at' => '2026-08-27 13:46:21',
                'updated_at' => '2026-08-28 07:50:27',
            ),
            159 => 
            array (
                'id' => 223,
                'rfq_id' => 96,
                'vendor_id' => 7,
                'invited_at' => '2026-08-27 07:41:08',
                'status' => 'accepted',
                'created_at' => '2026-08-27 14:41:08',
                'updated_at' => '2026-08-28 16:45:21',
            ),
            160 => 
            array (
                'id' => 224,
                'rfq_id' => 96,
                'vendor_id' => 95,
                'invited_at' => '2026-08-27 07:41:08',
                'status' => 'accepted',
                'created_at' => '2026-08-27 14:41:08',
                'updated_at' => '2026-08-31 16:03:42',
            ),
            161 => 
            array (
                'id' => 225,
                'rfq_id' => 96,
                'vendor_id' => 127,
                'invited_at' => '2026-08-27 07:41:08',
                'status' => 'accepted',
                'created_at' => '2026-08-27 14:41:08',
                'updated_at' => '2026-08-27 17:11:21',
            ),
            162 => 
            array (
                'id' => 226,
                'rfq_id' => 97,
                'vendor_id' => 180,
                'invited_at' => '2026-08-27 09:36:11',
                'status' => 'accepted',
                'created_at' => '2026-08-27 16:36:11',
                'updated_at' => '2026-08-28 09:46:26',
            ),
            163 => 
            array (
                'id' => 227,
                'rfq_id' => 98,
                'vendor_id' => 37,
                'invited_at' => '2026-08-27 10:10:28',
                'status' => 'accepted',
                'created_at' => '2026-08-27 17:10:28',
                'updated_at' => '2026-08-28 10:33:59',
            ),
            164 => 
            array (
                'id' => 228,
                'rfq_id' => 99,
                'vendor_id' => 102,
                'invited_at' => '2026-08-28 03:53:46',
                'status' => 'accepted',
                'created_at' => '2026-08-28 10:53:46',
                'updated_at' => '2026-08-28 11:10:24',
            ),
            165 => 
            array (
                'id' => 229,
                'rfq_id' => 99,
                'vendor_id' => 103,
                'invited_at' => '2026-08-28 03:53:46',
                'status' => 'accepted',
                'created_at' => '2026-08-28 10:53:46',
                'updated_at' => '2026-08-28 11:02:19',
            ),
            166 => 
            array (
                'id' => 230,
                'rfq_id' => 100,
                'vendor_id' => 77,
                'invited_at' => '2026-08-28 05:46:00',
                'status' => 'accepted',
                'created_at' => '2026-08-28 12:46:00',
                'updated_at' => '2026-08-28 12:49:58',
            ),
            167 => 
            array (
                'id' => 231,
                'rfq_id' => 100,
                'vendor_id' => 55,
                'invited_at' => '2026-08-28 05:46:00',
                'status' => 'accepted',
                'created_at' => '2026-08-28 12:46:00',
                'updated_at' => '2026-08-28 12:52:16',
            ),
            168 => 
            array (
                'id' => 232,
                'rfq_id' => 101,
                'vendor_id' => 195,
                'invited_at' => '2026-08-29 12:37:42',
                'status' => 'accepted',
                'created_at' => '2026-08-29 19:37:42',
                'updated_at' => '2026-08-30 18:01:03',
            ),
            169 => 
            array (
                'id' => 233,
                'rfq_id' => 101,
                'vendor_id' => 107,
                'invited_at' => '2026-08-29 12:37:42',
                'status' => 'accepted',
                'created_at' => '2026-08-29 19:37:42',
                'updated_at' => '2026-08-29 19:46:27',
            ),
            170 => 
            array (
                'id' => 234,
                'rfq_id' => 102,
                'vendor_id' => 103,
                'invited_at' => '2026-08-31 03:21:59',
                'status' => 'accepted',
                'created_at' => '2026-08-31 10:21:59',
                'updated_at' => '2026-08-31 10:45:06',
            ),
            171 => 
            array (
                'id' => 235,
                'rfq_id' => 102,
                'vendor_id' => 102,
                'invited_at' => '2026-08-31 03:21:59',
                'status' => 'accepted',
                'created_at' => '2026-08-31 10:21:59',
                'updated_at' => '2026-08-31 10:54:13',
            ),
            172 => 
            array (
                'id' => 236,
                'rfq_id' => 103,
                'vendor_id' => 102,
                'invited_at' => '2026-08-31 03:35:05',
                'status' => 'accepted',
                'created_at' => '2026-08-31 10:35:05',
                'updated_at' => '2026-08-31 11:38:37',
            ),
            173 => 
            array (
                'id' => 237,
                'rfq_id' => 103,
                'vendor_id' => 103,
                'invited_at' => '2026-08-31 03:35:05',
                'status' => 'accepted',
                'created_at' => '2026-08-31 10:35:05',
                'updated_at' => '2026-08-31 10:45:44',
            ),
            174 => 
            array (
                'id' => 238,
                'rfq_id' => 104,
                'vendor_id' => 7,
                'invited_at' => '2026-08-31 04:40:41',
                'status' => 'pending',
                'created_at' => '2026-08-31 11:40:41',
                'updated_at' => '2026-08-31 11:40:41',
            ),
            175 => 
            array (
                'id' => 239,
                'rfq_id' => 104,
                'vendor_id' => 87,
                'invited_at' => '2026-08-31 04:40:41',
                'status' => 'accepted',
                'created_at' => '2026-08-31 11:40:41',
                'updated_at' => '2026-08-31 11:42:40',
            ),
            176 => 
            array (
                'id' => 240,
                'rfq_id' => 105,
                'vendor_id' => 77,
                'invited_at' => '2026-08-31 05:04:11',
                'status' => 'accepted',
                'created_at' => '2026-08-31 12:04:11',
                'updated_at' => '2026-08-31 13:33:02',
            ),
            177 => 
            array (
                'id' => 241,
                'rfq_id' => 105,
                'vendor_id' => 55,
                'invited_at' => '2026-08-31 05:04:11',
                'status' => 'accepted',
                'created_at' => '2026-08-31 12:04:11',
                'updated_at' => '2026-08-31 13:42:29',
            ),
            178 => 
            array (
                'id' => 242,
                'rfq_id' => 106,
                'vendor_id' => 7,
                'invited_at' => '2026-08-31 07:29:20',
                'status' => 'pending',
                'created_at' => '2026-08-31 14:29:20',
                'updated_at' => '2026-08-31 14:29:20',
            ),
            179 => 
            array (
                'id' => 243,
                'rfq_id' => 106,
                'vendor_id' => 117,
                'invited_at' => '2026-08-31 07:29:20',
                'status' => 'accepted',
                'created_at' => '2026-08-31 14:29:20',
                'updated_at' => '2026-08-31 14:39:15',
            ),
            180 => 
            array (
                'id' => 244,
                'rfq_id' => 107,
                'vendor_id' => 102,
                'invited_at' => '2026-09-01 04:19:54',
                'status' => 'accepted',
                'created_at' => '2026-09-01 11:19:54',
                'updated_at' => '2026-09-01 12:26:20',
            ),
            181 => 
            array (
                'id' => 245,
                'rfq_id' => 107,
                'vendor_id' => 103,
                'invited_at' => '2026-09-01 04:19:54',
                'status' => 'accepted',
                'created_at' => '2026-09-01 11:19:54',
                'updated_at' => '2026-09-01 11:34:38',
            ),
            182 => 
            array (
                'id' => 246,
                'rfq_id' => 108,
                'vendor_id' => 55,
                'invited_at' => '2026-09-01 04:36:53',
                'status' => 'accepted',
                'created_at' => '2026-09-01 11:36:53',
                'updated_at' => '2026-09-01 12:17:45',
            ),
            183 => 
            array (
                'id' => 247,
                'rfq_id' => 108,
                'vendor_id' => 77,
                'invited_at' => '2026-09-01 04:36:53',
                'status' => 'accepted',
                'created_at' => '2026-09-01 11:36:53',
                'updated_at' => '2026-09-01 12:54:09',
            ),
            184 => 
            array (
                'id' => 248,
                'rfq_id' => 109,
                'vendor_id' => 7,
                'invited_at' => '2026-09-01 06:55:16',
                'status' => 'accepted',
                'created_at' => '2026-09-01 13:55:16',
                'updated_at' => '2026-09-02 10:49:38',
            ),
            185 => 
            array (
                'id' => 249,
                'rfq_id' => 109,
                'vendor_id' => 18,
                'invited_at' => '2026-09-01 06:55:16',
                'status' => 'accepted',
                'created_at' => '2026-09-01 13:55:16',
                'updated_at' => '2026-09-02 09:14:13',
            ),
            186 => 
            array (
                'id' => 250,
                'rfq_id' => 109,
                'vendor_id' => 147,
                'invited_at' => '2026-09-01 06:55:16',
                'status' => 'pending',
                'created_at' => '2026-09-01 13:55:16',
                'updated_at' => '2026-09-01 13:55:16',
            ),
            187 => 
            array (
                'id' => 251,
                'rfq_id' => 110,
                'vendor_id' => 159,
                'invited_at' => '2026-09-01 09:01:02',
                'status' => 'accepted',
                'created_at' => '2026-09-01 16:01:02',
                'updated_at' => '2026-09-02 15:32:10',
            ),
            188 => 
            array (
                'id' => 252,
                'rfq_id' => 111,
                'vendor_id' => 103,
                'invited_at' => '2026-09-02 03:41:24',
                'status' => 'accepted',
                'created_at' => '2026-09-02 10:41:24',
                'updated_at' => '2026-09-02 10:58:28',
            ),
            189 => 
            array (
                'id' => 253,
                'rfq_id' => 111,
                'vendor_id' => 102,
                'invited_at' => '2026-09-02 03:41:24',
                'status' => 'accepted',
                'created_at' => '2026-09-02 10:41:24',
                'updated_at' => '2026-09-02 10:49:28',
            ),
            190 => 
            array (
                'id' => 254,
                'rfq_id' => 112,
                'vendor_id' => 7,
                'invited_at' => '2026-09-02 04:05:53',
                'status' => 'pending',
                'created_at' => '2026-09-02 11:05:53',
                'updated_at' => '2026-09-02 11:05:53',
            ),
            191 => 
            array (
                'id' => 255,
                'rfq_id' => 112,
                'vendor_id' => 168,
                'invited_at' => '2026-09-02 04:05:53',
                'status' => 'accepted',
                'created_at' => '2026-09-02 11:05:53',
                'updated_at' => '2026-09-04 10:20:16',
            ),
            192 => 
            array (
                'id' => 256,
                'rfq_id' => 112,
                'vendor_id' => 167,
                'invited_at' => '2026-09-02 04:05:53',
                'status' => 'accepted',
                'created_at' => '2026-09-02 11:05:53',
                'updated_at' => '2026-09-02 15:03:51',
            ),
            193 => 
            array (
                'id' => 257,
                'rfq_id' => 113,
                'vendor_id' => 7,
                'invited_at' => '2026-09-02 04:19:21',
                'status' => 'accepted',
                'created_at' => '2026-09-02 11:19:21',
                'updated_at' => '2026-09-02 21:39:59',
            ),
            194 => 
            array (
                'id' => 258,
                'rfq_id' => 113,
                'vendor_id' => 177,
                'invited_at' => '2026-09-02 04:19:21',
                'status' => 'accepted',
                'created_at' => '2026-09-02 11:19:21',
                'updated_at' => '2026-09-02 13:07:09',
            ),
            195 => 
            array (
                'id' => 259,
                'rfq_id' => 113,
                'vendor_id' => 178,
                'invited_at' => '2026-09-02 04:19:21',
                'status' => 'accepted',
                'created_at' => '2026-09-02 11:19:21',
                'updated_at' => '2026-09-02 21:39:01',
            ),
            196 => 
            array (
                'id' => 260,
                'rfq_id' => 113,
                'vendor_id' => 127,
                'invited_at' => '2026-09-02 04:19:21',
                'status' => 'accepted',
                'created_at' => '2026-09-02 11:19:21',
                'updated_at' => '2026-09-03 15:34:30',
            ),
            197 => 
            array (
                'id' => 261,
                'rfq_id' => 114,
                'vendor_id' => 77,
                'invited_at' => '2026-09-02 04:21:41',
                'status' => 'accepted',
                'created_at' => '2026-09-02 11:21:41',
                'updated_at' => '2026-09-02 14:15:39',
            ),
            198 => 
            array (
                'id' => 262,
                'rfq_id' => 114,
                'vendor_id' => 55,
                'invited_at' => '2026-09-02 04:21:41',
                'status' => 'accepted',
                'created_at' => '2026-09-02 11:21:41',
                'updated_at' => '2026-09-02 11:32:14',
            ),
            199 => 
            array (
                'id' => 263,
                'rfq_id' => 115,
                'vendor_id' => 7,
                'invited_at' => '2026-09-02 06:46:46',
                'status' => 'pending',
                'created_at' => '2026-09-02 13:46:46',
                'updated_at' => '2026-09-02 13:46:46',
            ),
            200 => 
            array (
                'id' => 264,
                'rfq_id' => 115,
                'vendor_id' => 100,
                'invited_at' => '2026-09-02 06:46:46',
                'status' => 'accepted',
                'created_at' => '2026-09-02 13:46:46',
                'updated_at' => '2026-09-02 14:33:30',
            ),
            201 => 
            array (
                'id' => 265,
                'rfq_id' => 116,
                'vendor_id' => 199,
                'invited_at' => '2026-09-02 06:48:47',
                'status' => 'accepted',
                'created_at' => '2026-09-02 13:48:47',
                'updated_at' => '2026-09-02 13:52:21',
            ),
            202 => 
            array (
                'id' => 266,
                'rfq_id' => 117,
                'vendor_id' => 103,
                'invited_at' => '2026-09-03 03:18:56',
                'status' => 'accepted',
                'created_at' => '2026-09-03 10:18:56',
                'updated_at' => '2026-09-03 10:41:05',
            ),
            203 => 
            array (
                'id' => 267,
                'rfq_id' => 117,
                'vendor_id' => 102,
                'invited_at' => '2026-09-03 03:18:56',
                'status' => 'accepted',
                'created_at' => '2026-09-03 10:18:56',
                'updated_at' => '2026-09-03 10:23:47',
            ),
            204 => 
            array (
                'id' => 268,
                'rfq_id' => 118,
                'vendor_id' => 198,
                'invited_at' => '2026-09-03 03:19:30',
                'status' => 'accepted',
                'created_at' => '2026-09-03 10:19:30',
                'updated_at' => '2026-09-03 13:58:34',
            ),
            205 => 
            array (
                'id' => 269,
                'rfq_id' => 118,
                'vendor_id' => 108,
                'invited_at' => '2026-09-03 03:19:30',
                'status' => 'accepted',
                'created_at' => '2026-09-03 10:19:30',
                'updated_at' => '2026-09-03 10:53:05',
            ),
            206 => 
            array (
                'id' => 270,
                'rfq_id' => 118,
                'vendor_id' => 51,
                'invited_at' => '2026-09-03 03:19:30',
                'status' => 'accepted',
                'created_at' => '2026-09-03 10:19:30',
                'updated_at' => '2026-09-03 10:53:41',
            ),
            207 => 
            array (
                'id' => 271,
                'rfq_id' => 118,
                'vendor_id' => 7,
                'invited_at' => '2026-09-03 03:19:30',
                'status' => 'pending',
                'created_at' => '2026-09-03 10:19:30',
                'updated_at' => '2026-09-03 10:19:30',
            ),
            208 => 
            array (
                'id' => 272,
                'rfq_id' => 119,
                'vendor_id' => 18,
                'invited_at' => '2026-09-03 03:38:50',
                'status' => 'accepted',
                'created_at' => '2026-09-03 10:38:50',
                'updated_at' => '2026-09-03 14:19:41',
            ),
            209 => 
            array (
                'id' => 273,
                'rfq_id' => 119,
                'vendor_id' => 147,
                'invited_at' => '2026-09-03 03:38:50',
                'status' => 'pending',
                'created_at' => '2026-09-03 10:38:50',
                'updated_at' => '2026-09-03 10:38:50',
            ),
            210 => 
            array (
                'id' => 274,
                'rfq_id' => 119,
                'vendor_id' => 7,
                'invited_at' => '2026-09-03 03:38:50',
                'status' => 'pending',
                'created_at' => '2026-09-03 10:38:50',
                'updated_at' => '2026-09-03 10:38:50',
            ),
            211 => 
            array (
                'id' => 275,
                'rfq_id' => 120,
                'vendor_id' => 77,
                'invited_at' => '2026-09-03 05:06:01',
                'status' => 'accepted',
                'created_at' => '2026-09-03 12:06:01',
                'updated_at' => '2026-09-03 13:05:40',
            ),
            212 => 
            array (
                'id' => 276,
                'rfq_id' => 120,
                'vendor_id' => 55,
                'invited_at' => '2026-09-03 05:06:01',
                'status' => 'accepted',
                'created_at' => '2026-09-03 12:06:01',
                'updated_at' => '2026-09-03 12:17:38',
            ),
            213 => 
            array (
                'id' => 277,
                'rfq_id' => 121,
                'vendor_id' => 103,
                'invited_at' => '2026-09-04 04:28:32',
                'status' => 'accepted',
                'created_at' => '2026-09-04 11:28:32',
                'updated_at' => '2026-09-04 12:29:23',
            ),
            214 => 
            array (
                'id' => 278,
                'rfq_id' => 121,
                'vendor_id' => 102,
                'invited_at' => '2026-09-04 04:28:32',
                'status' => 'accepted',
                'created_at' => '2026-09-04 11:28:32',
                'updated_at' => '2026-09-04 11:44:29',
            ),
            215 => 
            array (
                'id' => 279,
                'rfq_id' => 122,
                'vendor_id' => 103,
                'invited_at' => '2026-09-04 04:36:53',
                'status' => 'accepted',
                'created_at' => '2026-09-04 11:36:53',
                'updated_at' => '2026-09-04 12:31:31',
            ),
            216 => 
            array (
                'id' => 280,
                'rfq_id' => 122,
                'vendor_id' => 102,
                'invited_at' => '2026-09-04 04:36:53',
                'status' => 'accepted',
                'created_at' => '2026-09-04 11:36:53',
                'updated_at' => '2026-09-04 11:47:25',
            ),
            217 => 
            array (
                'id' => 281,
                'rfq_id' => 123,
                'vendor_id' => 77,
                'invited_at' => '2026-09-04 06:43:41',
                'status' => 'accepted',
                'created_at' => '2026-09-04 13:43:41',
                'updated_at' => '2026-09-04 13:47:44',
            ),
            218 => 
            array (
                'id' => 282,
                'rfq_id' => 123,
                'vendor_id' => 55,
                'invited_at' => '2026-09-04 06:43:41',
                'status' => 'accepted',
                'created_at' => '2026-09-04 13:43:41',
                'updated_at' => '2026-09-04 13:50:01',
            ),
            219 => 
            array (
                'id' => 283,
                'rfq_id' => 124,
                'vendor_id' => 103,
                'invited_at' => '2026-09-07 03:36:02',
                'status' => 'accepted',
                'created_at' => '2026-09-07 10:36:02',
                'updated_at' => '2026-09-07 10:49:58',
            ),
            220 => 
            array (
                'id' => 284,
                'rfq_id' => 124,
                'vendor_id' => 102,
                'invited_at' => '2026-09-07 03:36:02',
                'status' => 'accepted',
                'created_at' => '2026-09-07 10:36:02',
                'updated_at' => '2026-09-07 10:43:06',
            ),
            221 => 
            array (
                'id' => 285,
                'rfq_id' => 125,
                'vendor_id' => 146,
                'invited_at' => '2026-09-07 04:39:08',
                'status' => 'accepted',
                'created_at' => '2026-09-07 11:39:08',
                'updated_at' => '2026-09-07 11:57:36',
            ),
            222 => 
            array (
                'id' => 286,
                'rfq_id' => 125,
                'vendor_id' => 147,
                'invited_at' => '2026-09-07 04:39:08',
                'status' => 'pending',
                'created_at' => '2026-09-07 11:39:08',
                'updated_at' => '2026-09-07 11:39:08',
            ),
            223 => 
            array (
                'id' => 287,
                'rfq_id' => 125,
                'vendor_id' => 135,
                'invited_at' => '2026-09-07 04:39:08',
                'status' => 'pending',
                'created_at' => '2026-09-07 11:39:08',
                'updated_at' => '2026-09-07 11:39:08',
            ),
            224 => 
            array (
                'id' => 288,
                'rfq_id' => 125,
                'vendor_id' => 7,
                'invited_at' => '2026-09-07 04:39:08',
                'status' => 'pending',
                'created_at' => '2026-09-07 11:39:08',
                'updated_at' => '2026-09-07 11:39:08',
            ),
            225 => 
            array (
                'id' => 289,
                'rfq_id' => 126,
                'vendor_id' => 77,
                'invited_at' => '2026-09-07 04:41:20',
                'status' => 'accepted',
                'created_at' => '2026-09-07 11:41:20',
                'updated_at' => '2026-09-07 13:23:50',
            ),
            226 => 
            array (
                'id' => 290,
                'rfq_id' => 126,
                'vendor_id' => 55,
                'invited_at' => '2026-09-07 04:41:20',
                'status' => 'accepted',
                'created_at' => '2026-09-07 11:41:20',
                'updated_at' => '2026-09-07 11:46:59',
            ),
            227 => 
            array (
                'id' => 291,
                'rfq_id' => 127,
                'vendor_id' => 10,
                'invited_at' => '2026-09-07 07:35:55',
                'status' => 'accepted',
                'created_at' => '2026-09-07 14:35:55',
                'updated_at' => '2026-09-07 14:45:30',
            ),
            228 => 
            array (
                'id' => 292,
                'rfq_id' => 127,
                'vendor_id' => 12,
                'invited_at' => '2026-09-07 07:50:25',
                'status' => 'pending',
                'created_at' => '2026-09-07 14:50:25',
                'updated_at' => '2026-09-07 14:50:25',
            ),
            229 => 
            array (
                'id' => 293,
                'rfq_id' => 127,
                'vendor_id' => 138,
                'invited_at' => '2026-09-07 07:50:25',
                'status' => 'accepted',
                'created_at' => '2026-09-07 14:50:25',
                'updated_at' => '2026-09-07 14:51:59',
            ),
            230 => 
            array (
                'id' => 294,
                'rfq_id' => 128,
                'vendor_id' => 103,
                'invited_at' => '2026-09-08 02:20:09',
                'status' => 'accepted',
                'created_at' => '2026-09-08 09:20:09',
                'updated_at' => '2026-09-08 09:47:10',
            ),
            231 => 
            array (
                'id' => 295,
                'rfq_id' => 128,
                'vendor_id' => 102,
                'invited_at' => '2026-09-08 02:20:09',
                'status' => 'accepted',
                'created_at' => '2026-09-08 09:20:09',
                'updated_at' => '2026-09-08 10:39:13',
            ),
            232 => 
            array (
                'id' => 296,
                'rfq_id' => 129,
                'vendor_id' => 103,
                'invited_at' => '2026-09-08 02:24:20',
                'status' => 'accepted',
                'created_at' => '2026-09-08 09:24:20',
                'updated_at' => '2026-09-08 09:50:11',
            ),
            233 => 
            array (
                'id' => 297,
                'rfq_id' => 129,
                'vendor_id' => 102,
                'invited_at' => '2026-09-08 02:24:20',
                'status' => 'accepted',
                'created_at' => '2026-09-08 09:24:20',
                'updated_at' => '2026-09-08 10:40:21',
            ),
            234 => 
            array (
                'id' => 298,
                'rfq_id' => 130,
                'vendor_id' => 55,
                'invited_at' => '2026-09-08 03:58:04',
                'status' => 'accepted',
                'created_at' => '2026-09-08 10:58:04',
                'updated_at' => '2026-09-08 11:05:29',
            ),
            235 => 
            array (
                'id' => 299,
                'rfq_id' => 130,
                'vendor_id' => 77,
                'invited_at' => '2026-09-08 03:58:04',
                'status' => 'accepted',
                'created_at' => '2026-09-08 10:58:04',
                'updated_at' => '2026-09-08 11:22:09',
            ),
            236 => 
            array (
                'id' => 300,
                'rfq_id' => 131,
                'vendor_id' => 10,
                'invited_at' => '2026-09-08 09:58:36',
                'status' => 'pending',
                'created_at' => '2026-09-08 16:58:36',
                'updated_at' => '2026-09-08 16:58:36',
            ),
            237 => 
            array (
                'id' => 301,
                'rfq_id' => 131,
                'vendor_id' => 12,
                'invited_at' => '2026-09-08 09:58:36',
                'status' => 'pending',
                'created_at' => '2026-09-08 16:58:36',
                'updated_at' => '2026-09-08 16:58:36',
            ),
            238 => 
            array (
                'id' => 302,
                'rfq_id' => 131,
                'vendor_id' => 138,
                'invited_at' => '2026-09-08 09:58:36',
                'status' => 'pending',
                'created_at' => '2026-09-08 16:58:36',
                'updated_at' => '2026-09-08 16:58:36',
            ),
        ));
        
        
    }
}