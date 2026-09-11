<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'HO - Jakarta',
                'slug' => 'HO - Jakarta',
                'code' => 'jakarta',
                'address' => 'Jakarta',
                'phone' => NULL,
                'is_active' => 1,
                'created_at' => '2026-03-10 11:12:31',
                'updated_at' => '2026-03-10 11:14:49',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Medan',
                'slug' => 'HO - Jakarta',
                'code' => 'me',
                'address' => 'Medan',
                'phone' => NULL,
                'is_active' => 1,
                'created_at' => '2026-03-10 11:12:50',
                'updated_at' => '2026-03-10 11:14:38',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Bandung',
                'slug' => 'HO - Jakarta',
                'code' => 'bdg',
                'address' => 'Bandung',
                'phone' => NULL,
                'is_active' => 1,
                'created_at' => '2026-03-10 11:13:04',
                'updated_at' => '2026-03-10 11:14:26',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Jawa Timur',
                'slug' => 'HO - Surabaya',
                'code' => 'jatim',
                'address' => 'Jawa Timur',
                'phone' => NULL,
                'is_active' => 1,
                'created_at' => '2026-03-10 11:13:21',
                'updated_at' => '2026-03-10 11:13:21',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Jawa Tengah',
                'slug' => 'HO - Surabaya',
                'code' => 'jateng',
                'address' => 'Jawa Tengah',
                'phone' => NULL,
                'is_active' => 1,
                'created_at' => '2026-03-10 11:13:38',
                'updated_at' => '2026-03-10 11:13:38',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Bali',
                'slug' => 'HO - Surabaya',
                'code' => 'bali',
                'address' => 'Bali',
                'phone' => NULL,
                'is_active' => 1,
                'created_at' => '2026-03-10 11:13:52',
                'updated_at' => '2026-03-30 14:24:35',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'D.I. Yogyakarta',
                'slug' => 'HO - Surabaya',
                'code' => 'yogya',
                'address' => 'Yogyakarta',
                'phone' => NULL,
                'is_active' => 1,
                'created_at' => '2026-03-10 11:14:19',
                'updated_at' => '2026-03-10 11:14:19',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'JABODETABEK',
                'slug' => 'HO - Jakarta',
                'code' => 'jabodetabek',
                'address' => 'Jakarta, Bogor, Depok, Tangerang, Bekasi',
                'phone' => NULL,
                'is_active' => 1,
                'created_at' => '2026-02-10 11:12:31',
                'updated_at' => '2026-03-10 11:14:49',
            ),
        ));
        
        
    }
}