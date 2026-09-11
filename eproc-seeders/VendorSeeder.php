<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VendorSeeder extends Seeder
{
    public function run(): void
    {
        // Get location IDs
        $jakartaId = Location::where('slug', 'jakarta')->first()?->id;
        $surabayaId = Location::where('slug', 'surabaya')->first()?->id;

        $vendors = [
            [
                'company_name' => 'PT. Global Technology Solutions',
                'registration_number' => 'REG-12345678',
                'tax_id_number' => '01.234.567.8-012.000',
                'address' => 'Jl. Jendral Sudirman No. 45',
                'city' => 'Jakarta Selatan',
                'province' => 'DKI Jakarta',
                'type' => 'corporate',
                'status' => 'verified',
                'pic_name' => 'Budi Santoso',
                'pic_email' => 'budi@globaltech.co.id',
                'location_id' => $jakartaId,
                'bank_name' => 'Bank Mandiri',
                'account_number' => '1234567890',
            ],
            [
                'company_name' => 'CV. Surabaya Perkasa Engineering',
                'registration_number' => 'REG-888999',
                'tax_id_number' => '02.333.444.5-609.000',
                'address' => 'Jl. Raya Darmo No. 10',
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'type' => 'corporate',
                'status' => 'verified',
                'pic_name' => 'Ani Wijaya',
                'pic_email' => 'ani@spe.co.id',
                'location_id' => $surabayaId,
                'bank_name' => 'BCA',
                'account_number' => '987654321',
            ],
            [
                'company_name' => 'John Doe Consulting',
                'registration_number' => 'ID-99228811',
                'tax_id_number' => '77.888.999.1-111.000',
                'address' => 'Apartment Sahid Sudirman Unit 12B',
                'city' => 'Jakarta Pusat',
                'province' => 'DKI Jakarta',
                'type' => 'individual',
                'status' => 'verified',
                'pic_name' => 'John Doe',
                'pic_email' => 'john.doe@gmail.com',
                'location_id' => $jakartaId,
                'bank_name' => 'BNI',
                'account_number' => '5544332211',
            ],
            [
                'company_name' => 'Siti Aminah (Freelance Designer)',
                'registration_number' => 'ID-334455',
                'tax_id_number' => '88.111.222.3-333.000',
                'address' => 'Jl. Gubeng Kertajaya No. 5',
                'city' => 'Surabaya',
                'province' => 'Jawa Timur',
                'type' => 'individual',
                'status' => 'pending',
                'pic_name' => 'Siti Aminah',
                'pic_email' => 'siti.aminah@yahoo.com',
                'location_id' => $surabayaId,
                'bank_name' => 'BSI',
                'account_number' => '1122334455',
            ],
        ];

        foreach ($vendors as $vendorData) {
            // 1. Create the Vendor
            $vendor = Vendor::create($vendorData);

            // 2. Create the User for this Vendor
            $user = User::create([
                'name' => $vendor->pic_name,
                'email' => $vendor->pic_email,
                'password' => Hash::make('12345'), // Default password for all seeders
                'vendor_id' => $vendor->id,
                'location_id' => $vendor->location_id, // Sync user location with vendor location
                'email_verified_at' => now(),
            ]);

            // 3. Assign the 'vendor' role (Spatie)
            $user->assignRole('vendor');

            // 4. Generate Document Placeholders
            $vendor->ensureDocumentsExist();

            // 5. Link Categories
            $categories = DB::table('business_classifications')->limit(2)->pluck('id');
            if ($categories->isNotEmpty()) {
                $vendor->categories()->attach($categories);
            }
        }
    }
}
