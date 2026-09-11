<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CounterOffersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('counter_offers')->delete();
        
        
        
    }
}