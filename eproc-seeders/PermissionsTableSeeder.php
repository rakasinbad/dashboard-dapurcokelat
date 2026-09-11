<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'create rfqs',
                'guard_name' => 'web',
                'created_at' => '2026-02-25 16:07:30',
                'updated_at' => '2026-02-25 16:07:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'publish rfqs',
                'guard_name' => 'web',
                'created_at' => '2026-02-25 16:07:30',
                'updated_at' => '2026-02-25 16:07:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'manage vendors',
                'guard_name' => 'web',
                'created_at' => '2026-02-25 16:07:30',
                'updated_at' => '2026-02-25 16:07:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'manage users',
                'guard_name' => 'web',
                'created_at' => '2026-02-25 16:07:30',
                'updated_at' => '2026-02-25 16:07:30',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'manage profile',
                'guard_name' => 'web',
                'created_at' => '2026-02-25 16:07:30',
                'updated_at' => '2026-02-25 16:07:30',
            ),
        ));
        
        
    }
}