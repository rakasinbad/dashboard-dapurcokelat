<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorTermOfPaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendor_term_of_payments')->delete();
        
        \DB::table('vendor_term_of_payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'vendor_id' => 2,
                'term_of_payment_id' => 3,
                'is_default' => 1,
                'created_at' => '2026-02-26 15:10:37',
                'updated_at' => '2026-02-26 15:17:35',
            ),
            1 => 
            array (
                'id' => 2,
                'vendor_id' => 2,
                'term_of_payment_id' => 4,
                'is_default' => 0,
                'created_at' => '2026-02-26 15:10:37',
                'updated_at' => '2026-02-26 15:10:37',
            ),
            2 => 
            array (
                'id' => 5,
                'vendor_id' => 7,
                'term_of_payment_id' => 1,
                'is_default' => 1,
                'created_at' => '2026-03-08 16:55:38',
                'updated_at' => '2026-03-21 21:38:30',
            ),
            3 => 
            array (
                'id' => 6,
                'vendor_id' => 10,
                'term_of_payment_id' => 4,
                'is_default' => 1,
                'created_at' => '2026-03-22 14:01:53',
                'updated_at' => '2026-08-18 14:38:33',
            ),
            4 => 
            array (
                'id' => 7,
                'vendor_id' => 10,
                'term_of_payment_id' => 1,
                'is_default' => 0,
                'created_at' => '2026-03-22 14:01:53',
                'updated_at' => '2026-08-18 14:38:33',
            ),
            5 => 
            array (
                'id' => 10,
                'vendor_id' => 151,
                'term_of_payment_id' => 4,
                'is_default' => 1,
                'created_at' => '2026-07-27 17:10:42',
                'updated_at' => '2026-07-27 17:16:54',
            ),
            6 => 
            array (
                'id' => 11,
                'vendor_id' => 153,
                'term_of_payment_id' => 3,
                'is_default' => 1,
                'created_at' => '2026-08-07 09:27:07',
                'updated_at' => '2026-08-07 09:27:07',
            ),
            7 => 
            array (
                'id' => 12,
                'vendor_id' => 180,
                'term_of_payment_id' => 4,
                'is_default' => 1,
                'created_at' => '2026-08-26 15:55:17',
                'updated_at' => '2026-08-26 15:55:17',
            ),
            8 => 
            array (
                'id' => 13,
                'vendor_id' => 181,
                'term_of_payment_id' => 1,
                'is_default' => 1,
                'created_at' => '2026-08-27 09:35:48',
                'updated_at' => '2026-08-27 09:35:48',
            ),
        ));
        
        
    }
}