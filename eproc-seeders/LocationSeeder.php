<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
  public function run(): void
  {
    $data = [
      [
        'name' => 'JABODETABEK',
        'slug' => 'jkt',
        'code' => 'jabodetabek',
        'address' => 'Jakarta, Bogor, Depok, Tangerang, Bekasi',
        'phone' => '',
        'is_active' => true
      ],
      [
        'name' => 'Medan',
        'slug' => 'jkt',
        'code' => 'medan',
        'address' => 'Medan',
        'phone' => '',
        'is_active' => true
      ],
      [
        'name' => 'Bandung',
        'slug' => 'jkt',
        'code' => 'bdg',
        'address' => 'Bandung',
        'phone' => '',
        'is_active' => true
      ],
      [
        'name' => 'Jawa Timur',
        'slug' => 'sby',
        'code' => 'jatim',
        'address' => 'Jawa Timur',
        'phone' => '',
        'is_active' => true
      ],
      [
        'name' => 'Jawa Tengah',
        'slug' => 'sby',
        'code' => 'jateng',
        'address' => 'Jawa Tengah',
        'phone' => '',
        'is_active' => true
      ],
      [
        'name' => 'D.I. Yogyakarta',
        'slug' => 'sby',
        'code' => 'yogya',
        'address' => 'Yogyakarta',
        'phone' => '',
        'is_active' => true
      ],
      [
        'name' => 'Bali',
        'slug' => 'sby',
        'code' => 'bali',
        'address' => 'Bali',
        'phone' => '',
        'is_active' => true
      ],
    ];

    foreach ($data as $item) {
      Location::updateOrCreate(
        $item
      );
    }
  }
}
