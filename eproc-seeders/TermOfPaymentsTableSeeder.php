<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TermOfPaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('term_of_payments')->delete();
        
        \DB::table('term_of_payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'COD',
                'name' => 'Cash on Delivery',
                'days' => NULL,
                'description' => 'Payment is made at the time of delivery.',
                'is_active' => 1,
                'created_at' => '2026-02-25 16:07:25',
                'updated_at' => '2026-02-25 16:07:25',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'PREPAID',
                'name' => 'Full Payment',
                'days' => NULL,
                'description' => 'Full payment is required before goods are delivered.',
                'is_active' => 1,
                'created_at' => '2026-02-25 16:07:25',
                'updated_at' => '2026-02-25 16:07:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'DP50',
                'name' => 'Deposit 50%',
                'days' => NULL,
                'description' => '50% deposit is required before delivery.',
                'is_active' => 1,
                'created_at' => '2026-02-25 16:07:26',
                'updated_at' => '2026-02-25 16:07:26',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'INV14',
            'name' => 'Invoice (Maximum 14 Days)',
                'days' => 14,
                'description' => 'Payment must be completed within 14 days after invoice date.',
                'is_active' => 1,
                'created_at' => '2026-02-25 16:07:26',
                'updated_at' => '2026-02-25 16:07:26',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'INV30',
            'name' => 'Invoice (Maximum 30 Days)',
                'days' => 30,
                'description' => 'Payment must be completed within 30 days after invoice date.',
                'is_active' => 1,
                'created_at' => '2026-02-25 16:07:26',
                'updated_at' => '2026-02-25 16:07:26',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}