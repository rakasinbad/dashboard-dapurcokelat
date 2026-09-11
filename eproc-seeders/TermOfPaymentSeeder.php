<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TermOfPayment;

class TermOfPaymentSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'code' => 'COD',
                'name' => 'Cash on Delivery',
                'days' => null,
                'description' => 'Payment is made at the time of delivery.',
            ],
            [
                'code' => 'PREPAID',
                'name' => 'Full Payment',
                'days' => null,
                'description' => 'Full payment is required before goods are delivered.',
            ],
            [
                'code' => 'DP50',
                'name' => 'Deposit 50%',
                'days' => null,
                'description' => '50% deposit is required before delivery.',
            ],
            [
                'code' => 'INV14',
                'name' => 'Invoice (Maximum 14 Days)',
                'days' => 14,
                'description' => 'Payment must be completed within 14 days after invoice date.',
            ],
            [
                'code' => 'INV30',
                'name' => 'Invoice (Maximum 30 Days)',
                'days' => 30,
                'description' => 'Payment must be completed within 30 days after invoice date.',
            ],
        ];

        foreach ($data as $item) {
            TermOfPayment::updateOrCreate(
                ['code' => $item['code']], // unique key
                $item
            );
        }
    }
}
