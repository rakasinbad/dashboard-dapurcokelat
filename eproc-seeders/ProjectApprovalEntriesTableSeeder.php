<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectApprovalEntriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_approval_entries')->delete();
        
        \DB::table('project_approval_entries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 1,
                'approver_id' => 1,
                'status' => 'approved',
                'notes' => 'Initial budget looks aligned with departmental annual plan.',
                'processed_at' => '2026-02-25 16:07:33',
                'created_at' => '2026-02-25 16:07:33',
                'updated_at' => '2026-02-25 16:07:33',
            ),
            1 => 
            array (
                'id' => 7,
                'project_id' => 45,
                'approver_id' => 1,
                'status' => 'approved',
                'notes' => 'test apporve project',
                'processed_at' => '2026-07-06 17:12:22',
                'created_at' => '2026-07-06 17:12:22',
                'updated_at' => '2026-07-06 17:12:22',
            ),
            2 => 
            array (
                'id' => 8,
                'project_id' => 47,
                'approver_id' => 1,
                'status' => 'approved',
                'notes' => 'test approve project 2',
                'processed_at' => '2026-07-06 17:22:39',
                'created_at' => '2026-07-06 17:22:39',
                'updated_at' => '2026-07-06 17:22:39',
            ),
            3 => 
            array (
                'id' => 9,
                'project_id' => 48,
                'approver_id' => 3,
                'status' => 'approved',
                'notes' => 'Sourcing vendor for reposition outdoor AC Muara Karang ',
                'processed_at' => '2026-07-08 20:36:37',
                'created_at' => '2026-07-08 20:36:37',
                'updated_at' => '2026-07-08 20:36:37',
            ),
            4 => 
            array (
                'id' => 10,
                'project_id' => 52,
                'approver_id' => 143,
                'status' => 'approved',
                'notes' => 'Pengadaan seragam untuk facility procurement ',
                'processed_at' => '2026-07-16 11:22:23',
                'created_at' => '2026-07-16 11:22:23',
                'updated_at' => '2026-07-16 11:22:23',
            ),
            5 => 
            array (
                'id' => 11,
                'project_id' => 54,
                'approver_id' => 3,
                'status' => 'approved',
                'notes' => 'Renovation needed for Outlet Menteng',
                'processed_at' => '2026-07-17 20:49:46',
                'created_at' => '2026-07-17 20:49:46',
                'updated_at' => '2026-07-17 20:49:46',
            ),
            6 => 
            array (
                'id' => 12,
                'project_id' => 56,
                'approver_id' => 1,
                'status' => 'approved',
                'notes' => 'approve project test',
                'processed_at' => '2026-07-21 17:31:34',
                'created_at' => '2026-07-21 17:31:34',
                'updated_at' => '2026-07-21 17:31:34',
            ),
            7 => 
            array (
                'id' => 13,
                'project_id' => 57,
                'approver_id' => 1,
                'status' => 'approved',
                'notes' => 'approve project test',
                'processed_at' => '2026-07-21 17:40:20',
                'created_at' => '2026-07-21 17:40:20',
                'updated_at' => '2026-07-21 17:40:20',
            ),
            8 => 
            array (
                'id' => 14,
                'project_id' => 63,
                'approver_id' => 3,
                'status' => 'approved',
                'notes' => 'Urgent renovation due to current condition at Delpo Palmerah',
                'processed_at' => '2026-07-25 08:11:04',
                'created_at' => '2026-07-25 08:11:04',
                'updated_at' => '2026-07-25 08:11:04',
            ),
            9 => 
            array (
                'id' => 15,
                'project_id' => 76,
                'approver_id' => 1,
                'status' => 'approved',
                'notes' => 'testing IT',
                'processed_at' => '2026-08-04 10:16:28',
                'created_at' => '2026-08-04 10:16:28',
                'updated_at' => '2026-08-04 10:16:28',
            ),
            10 => 
            array (
                'id' => 16,
                'project_id' => 77,
                'approver_id' => 1,
                'status' => 'approved',
                'notes' => 'test it approved',
                'processed_at' => '2026-08-04 10:23:14',
                'created_at' => '2026-08-04 10:23:14',
                'updated_at' => '2026-08-04 10:23:14',
            ),
            11 => 
            array (
                'id' => 17,
                'project_id' => 95,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => 'TESTING',
                'processed_at' => '2026-08-18 09:47:37',
                'created_at' => '2026-08-18 09:47:37',
                'updated_at' => '2026-08-18 09:47:37',
            ),
            12 => 
            array (
                'id' => 18,
                'project_id' => 96,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => 'testing',
                'processed_at' => '2026-08-18 09:54:13',
                'created_at' => '2026-08-18 09:54:13',
                'updated_at' => '2026-08-18 09:54:13',
            ),
            13 => 
            array (
                'id' => 19,
                'project_id' => 99,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-19 13:56:52',
                'created_at' => '2026-08-19 13:56:52',
                'updated_at' => '2026-08-19 13:56:52',
            ),
            14 => 
            array (
                'id' => 20,
                'project_id' => 103,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-20 13:28:36',
                'created_at' => '2026-08-20 13:28:36',
                'updated_at' => '2026-08-20 13:28:36',
            ),
            15 => 
            array (
                'id' => 21,
                'project_id' => 104,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => 'Oke',
                'processed_at' => '2026-08-20 14:58:57',
                'created_at' => '2026-08-20 14:58:57',
                'updated_at' => '2026-08-20 14:58:57',
            ),
            16 => 
            array (
                'id' => 22,
                'project_id' => 111,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-21 14:07:27',
                'created_at' => '2026-08-21 14:07:27',
                'updated_at' => '2026-08-21 14:07:27',
            ),
            17 => 
            array (
                'id' => 23,
                'project_id' => 110,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-21 14:07:39',
                'created_at' => '2026-08-21 14:07:39',
                'updated_at' => '2026-08-21 14:07:39',
            ),
            18 => 
            array (
                'id' => 24,
                'project_id' => 113,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-24 12:55:26',
                'created_at' => '2026-08-24 12:55:26',
                'updated_at' => '2026-08-24 12:55:26',
            ),
            19 => 
            array (
                'id' => 25,
                'project_id' => 118,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-27 14:38:53',
                'created_at' => '2026-08-27 14:38:53',
                'updated_at' => '2026-08-27 14:38:53',
            ),
            20 => 
            array (
                'id' => 26,
                'project_id' => 125,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-28 11:45:30',
                'created_at' => '2026-08-28 11:45:30',
                'updated_at' => '2026-08-28 11:45:30',
            ),
            21 => 
            array (
                'id' => 27,
                'project_id' => 124,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-28 14:00:34',
                'created_at' => '2026-08-28 14:00:34',
                'updated_at' => '2026-08-28 14:00:34',
            ),
            22 => 
            array (
                'id' => 28,
                'project_id' => 127,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-28 14:00:55',
                'created_at' => '2026-08-28 14:00:55',
                'updated_at' => '2026-08-28 14:00:55',
            ),
            23 => 
            array (
                'id' => 29,
                'project_id' => 122,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-28 14:01:35',
                'created_at' => '2026-08-28 14:01:35',
                'updated_at' => '2026-08-28 14:01:35',
            ),
            24 => 
            array (
                'id' => 30,
                'project_id' => 121,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-28 14:02:24',
                'created_at' => '2026-08-28 14:02:24',
                'updated_at' => '2026-08-28 14:02:24',
            ),
            25 => 
            array (
                'id' => 31,
                'project_id' => 120,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-28 14:02:48',
                'created_at' => '2026-08-28 14:02:48',
                'updated_at' => '2026-08-28 14:02:48',
            ),
            26 => 
            array (
                'id' => 32,
                'project_id' => 128,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-29 19:44:01',
                'created_at' => '2026-08-29 19:44:01',
                'updated_at' => '2026-08-29 19:44:01',
            ),
            27 => 
            array (
                'id' => 33,
                'project_id' => 132,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-08-31 12:04:36',
                'created_at' => '2026-08-31 12:04:36',
                'updated_at' => '2026-08-31 12:04:36',
            ),
            28 => 
            array (
                'id' => 34,
                'project_id' => 135,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-09-01 13:21:08',
                'created_at' => '2026-09-01 13:21:08',
                'updated_at' => '2026-09-01 13:21:08',
            ),
            29 => 
            array (
                'id' => 35,
                'project_id' => 141,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-09-02 14:15:51',
                'created_at' => '2026-09-02 14:15:51',
                'updated_at' => '2026-09-02 14:15:51',
            ),
            30 => 
            array (
                'id' => 36,
                'project_id' => 144,
                'approver_id' => 3,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-09-03 09:56:02',
                'created_at' => '2026-09-03 09:56:02',
                'updated_at' => '2026-09-03 09:56:02',
            ),
            31 => 
            array (
                'id' => 37,
                'project_id' => 148,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-09-03 13:37:57',
                'created_at' => '2026-09-03 13:37:57',
                'updated_at' => '2026-09-03 13:37:57',
            ),
            32 => 
            array (
                'id' => 38,
                'project_id' => 151,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-09-04 14:41:28',
                'created_at' => '2026-09-04 14:41:28',
                'updated_at' => '2026-09-04 14:41:28',
            ),
            33 => 
            array (
                'id' => 39,
                'project_id' => 154,
                'approver_id' => 4,
                'status' => 'approved',
                'notes' => NULL,
                'processed_at' => '2026-09-07 13:45:25',
                'created_at' => '2026-09-07 13:45:25',
                'updated_at' => '2026-09-07 13:45:25',
            ),
            34 => 
            array (
                'id' => 40,
                'project_id' => 155,
                'approver_id' => 1,
                'status' => 'approved',
                'notes' => 'project approved',
                'processed_at' => '2026-09-07 14:11:34',
                'created_at' => '2026-09-07 14:11:34',
                'updated_at' => '2026-09-07 14:11:34',
            ),
        ));
        
        
    }
}