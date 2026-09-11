<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'superadmin@gmail.com'], // Unique check
            [
                'name' => 'Super Admin',
                'password' => Hash::make('superadmin123'), // Always hash passwords
            ]
        );

        $admin->assignRole('admin');

        $admin2 = User::firstOrCreate(
            ['email' => 'anjar@dapurcokelat.com'], // Unique check
            [
                'name' => 'Anjar Widi',
                'password' => Hash::make('superadmin123'), // Always hash passwords
            ]
        );

        $admin2->assignRole('admin');

        $admin3 = User::firstOrCreate(
            ['email' => 'deby@tjufoo.com'], // Unique check
            [
                'name' => 'Deby Caroline',
                'password' => Hash::make('superadmin123'), // Always hash passwords
            ]
        );

        $admin3->assignRole('admin');

        $admin4 = User::firstOrCreate(
            ['email' => 'widi@dapurcokelat.com'], // Unique check
            [
                'name' => 'Widiyanti',
                'password' => Hash::make('superadmin123'), // Always hash passwords
            ]
        );

        $admin4->assignRole('admin');

        $lowAdmin = User::firstOrCreate(
            ['email' => 'purchasing@dapurcokelat.com'], // Unique check
            [
                'name' => 'Admin HO Buaran',
                'password' => Hash::make('adminbuaran'), // Always hash passwords
                'location_id' => 1
            ]
        );

        $lowAdmin->assignRole('low_admin');

        $lowAdminSby = User::firstOrCreate(
            ['email' => 'purchasing_sby@dapurcokelat.com'], // Unique check
            [
                'name' => 'Admin Surabaya',
                'password' => Hash::make('adminsurabaya'), // Always hash passwords
                'location_id' => 2
            ]
        );

        $lowAdminSby->assignRole('low_admin');
    }
}
