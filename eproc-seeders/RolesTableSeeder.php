<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'low_admin',
                'guard_name' => 'web',
                'created_at' => '2026-02-25 16:07:30',
                'updated_at' => '2026-02-25 16:07:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2026-02-25 16:07:30',
                'updated_at' => '2026-02-25 16:07:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'vendor',
                'guard_name' => 'web',
                'created_at' => '2026-02-25 16:07:30',
                'updated_at' => '2026-02-25 16:07:30',
            ),
        ));
        
        
    }
}