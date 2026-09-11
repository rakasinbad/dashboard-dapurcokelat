<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApprovalLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('approval_logs')->delete();
        
        
        
    }
}