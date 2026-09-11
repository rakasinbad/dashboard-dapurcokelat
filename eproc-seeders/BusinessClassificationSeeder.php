<?php

namespace Database\Seeders;

use App\Models\BusinessClassification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

class BusinessClassificationSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Clear existing data safely
        Schema::disableForeignKeyConstraints();
        BusinessClassification::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Food Ingredients / Bahan Baku & Bahan Makanan' => [
                'Food Raw Materials / Bahan Baku Makanan',
                'Fruits & Nuts / Buah & Kacang',
                'Food Ingredients & Additives / Bahan Tambahan & Aditif Makanan',
                'Product Premix / Premix Produk',
                'Other Food Ingredients / Bahan Makanan Lainnya',
            ],
            'Packaging Materials / Material Kemasan' => [
                'Paper & Carton Packaging / Kemasan Kertas & Karton',
                'Plastic Packaging / Kemasan Plastik',
                'Tin/Metal Packaging / Kemasan Kaleng / Metal',
                'Shopping Bags / Tas Belanja',
                'Other Packaging Materials / Kemasan Lainnya',
            ],
            'Store & Operational Supplies / Perlengkapan Operasional' => [
                'Store Operational Supplies / Perlengkapan Operasional Toko',
                'Cleaning Supplies / Perlengkapan Kebersihan',
                'Employee Uniforms & Apparel / Seragam & Apparel Karyawan',
            ],
            'Office Supplies / Perlengkapan Kantor' => [
                'Office Supplies / Perlengkapan Kantor',
                'Document Printing Services / Percetakan Dokumen',
            ],
            'Marketing & Branding / Materi Pemasaran & Promosi' => [
                'Promotional Printing Materials / Percetakan Materi Promosi',
                'POP (Point-of-Purchase) & Promotional Display Materials / Materi POP & Display Promosi',
            ],
            'IT & Technology / Teknologi Informasi (IT)' => [
                'IT Hardware / Perangkat IT',
                'Software & IT Licenses / Software & Lisensi IT',
                'IT Services & Maintenance / Jasa IT & Maintenance',
            ],
            'Services / Jasa & Layanan' => [
                'Maintenance & Repair Services / Jasa Maintenance & Perbaikan',
                'Construction & Store Renovation Services / Jasa Konstruksi & Renovasi Toko',
                'Creative & Design Services / Jasa Desain & Kreatif',
                'Logistics & Delivery Services / Jasa Logistik & Pengiriman',
                'Consulting/Professional Services / Jasa Konsultan / Profesional',
            ],
            'Equipment / Machinery' => [
                'Kitchen / Production Equipment (Example : Oven,Mixer ,Stainless table,Undercounter )',
                'Storage & Racking System (Example : Racking, Shelving system)',
                'Refrigeration Equipment (Example : Chiller, Freezer,Showcase,Cold storage)',
            ],
        ];

        foreach ($data as $parentName => $children) {

            // 1. Find or Create the Parent Category
            $parent = BusinessClassification::firstOrCreate(
                ['slug' => Str::slug($parentName)], // Look for this exact slug first
                [
                    'name' => $parentName,          // If it doesn't exist, create it with this name
                    'parent_id' => null,
                ]
            );

            // 2. Loop through the children
            foreach ($children as $childName) {
                BusinessClassification::firstOrCreate(
                    ['slug' => Str::slug($childName)], // Look for the child slug
                    [
                        'name' => $childName,
                        'parent_id' => $parent->id,
                    ]
                );
            }
        }
    }
}
