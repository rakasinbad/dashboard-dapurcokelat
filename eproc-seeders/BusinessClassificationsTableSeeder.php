<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessClassificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('business_classifications')->delete();
        
        \DB::table('business_classifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Food Ingredients / Bahan Baku & Bahan Makanan',
                'slug' => 'food-ingredients-bahan-baku-bahan-makanan',
                'parent_id' => NULL,
                'created_at' => '2026-03-30 15:42:18',
                'updated_at' => '2026-03-30 15:42:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Food Raw Materials / Bahan Baku Makanan',
                'slug' => 'food-raw-materials-bahan-baku-makanan',
                'parent_id' => 1,
                'created_at' => '2026-03-30 15:42:18',
                'updated_at' => '2026-03-30 15:42:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Fruits & Nuts / Buah & Kacang',
                'slug' => 'fruits-nuts-buah-kacang',
                'parent_id' => 1,
                'created_at' => '2026-03-30 15:42:18',
                'updated_at' => '2026-03-30 15:42:18',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Food Ingredients & Additives / Bahan Tambahan & Aditif Makanan',
                'slug' => 'food-ingredients-additives-bahan-tambahan-aditif-makanan',
                'parent_id' => 1,
                'created_at' => '2026-03-30 15:42:18',
                'updated_at' => '2026-03-30 15:42:18',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Product Premix / Premix Produk',
                'slug' => 'product-premix-premix-produk',
                'parent_id' => 1,
                'created_at' => '2026-03-30 15:42:18',
                'updated_at' => '2026-03-30 15:42:18',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Other Food Ingredients / Bahan Makanan Lainnya',
                'slug' => 'other-food-ingredients-bahan-makanan-lainnya',
                'parent_id' => 1,
                'created_at' => '2026-03-30 15:42:18',
                'updated_at' => '2026-03-30 15:42:18',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Packaging Materials / Material Kemasan',
                'slug' => 'packaging-materials-material-kemasan',
                'parent_id' => NULL,
                'created_at' => '2026-03-30 15:42:19',
                'updated_at' => '2026-03-30 15:42:19',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Paper & Carton Packaging / Kemasan Kertas & Karton',
                'slug' => 'paper-carton-packaging-kemasan-kertas-karton',
                'parent_id' => 7,
                'created_at' => '2026-03-30 15:42:19',
                'updated_at' => '2026-03-30 15:42:19',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Plastic Packaging / Kemasan Plastik',
                'slug' => 'plastic-packaging-kemasan-plastik',
                'parent_id' => 7,
                'created_at' => '2026-03-30 15:42:19',
                'updated_at' => '2026-03-30 15:42:19',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Tin/Metal Packaging / Kemasan Kaleng / Metal',
                'slug' => 'tinmetal-packaging-kemasan-kaleng-metal',
                'parent_id' => 7,
                'created_at' => '2026-03-30 15:42:19',
                'updated_at' => '2026-03-30 15:42:19',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Shopping Bags / Tas Belanja',
                'slug' => 'shopping-bags-tas-belanja',
                'parent_id' => 7,
                'created_at' => '2026-03-30 15:42:19',
                'updated_at' => '2026-03-30 15:42:19',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Other Packaging Materials / Kemasan Lainnya',
                'slug' => 'other-packaging-materials-kemasan-lainnya',
                'parent_id' => 7,
                'created_at' => '2026-03-30 15:42:19',
                'updated_at' => '2026-03-30 15:42:19',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Store & Operational Supplies / Perlengkapan Operasional',
                'slug' => 'store-operational-supplies-perlengkapan-operasional',
                'parent_id' => NULL,
                'created_at' => '2026-03-30 15:42:19',
                'updated_at' => '2026-03-30 15:42:19',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Store Operational Supplies / Perlengkapan Operasional Toko',
                'slug' => 'store-operational-supplies-perlengkapan-operasional-toko',
                'parent_id' => 13,
                'created_at' => '2026-03-30 15:42:20',
                'updated_at' => '2026-03-30 15:42:20',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Cleaning Supplies / Perlengkapan Kebersihan',
                'slug' => 'cleaning-supplies-perlengkapan-kebersihan',
                'parent_id' => 13,
                'created_at' => '2026-03-30 15:42:20',
                'updated_at' => '2026-03-30 15:42:20',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Employee Uniforms & Apparel / Seragam & Apparel Karyawan',
                'slug' => 'employee-uniforms-apparel-seragam-apparel-karyawan',
                'parent_id' => 13,
                'created_at' => '2026-03-30 15:42:20',
                'updated_at' => '2026-03-30 15:42:20',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Office Supplies / Perlengkapan Kantor',
                'slug' => 'office-supplies-perlengkapan-kantor',
                'parent_id' => NULL,
                'created_at' => '2026-03-30 15:42:20',
                'updated_at' => '2026-03-30 15:42:20',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Document Printing Services / Percetakan Dokumen',
                'slug' => 'document-printing-services-percetakan-dokumen',
                'parent_id' => 17,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Marketing & Branding / Materi Pemasaran & Promosi',
                'slug' => 'marketing-branding-materi-pemasaran-promosi',
                'parent_id' => NULL,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Promotional Printing Materials / Percetakan Materi Promosi',
                'slug' => 'promotional-printing-materials-percetakan-materi-promosi',
                'parent_id' => 19,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            20 => 
            array (
                'id' => 21,
            'name' => 'POP (Point-of-Purchase) & Promotional Display Materials / Materi POP & Display Promosi',
                'slug' => 'pop-point-of-purchase-promotional-display-materials-materi-pop-display-promosi',
                'parent_id' => 19,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            21 => 
            array (
                'id' => 22,
            'name' => 'IT & Technology / Teknologi Informasi (IT)',
                'slug' => 'it-technology-teknologi-informasi-it',
                'parent_id' => NULL,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'IT Hardware / Perangkat IT',
                'slug' => 'it-hardware-perangkat-it',
                'parent_id' => 22,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Software & IT Licenses / Software & Lisensi IT',
                'slug' => 'software-it-licenses-software-lisensi-it',
                'parent_id' => 22,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'IT Services & Maintenance / Jasa IT & Maintenance',
                'slug' => 'it-services-maintenance-jasa-it-maintenance',
                'parent_id' => 22,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Services / Jasa & Layanan',
                'slug' => 'services-jasa-layanan',
                'parent_id' => NULL,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Maintenance & Repair Services / Jasa Maintenance & Perbaikan',
                'slug' => 'maintenance-repair-services-jasa-maintenance-perbaikan',
                'parent_id' => 26,
                'created_at' => '2026-03-30 15:42:21',
                'updated_at' => '2026-03-30 15:42:21',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Construction & Store Renovation Services / Jasa Konstruksi & Renovasi Toko',
                'slug' => 'construction-store-renovation-services-jasa-konstruksi-renovasi-toko',
                'parent_id' => 26,
                'created_at' => '2026-03-30 15:42:22',
                'updated_at' => '2026-03-30 15:42:22',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Creative & Design Services / Jasa Desain & Kreatif',
                'slug' => 'creative-design-services-jasa-desain-kreatif',
                'parent_id' => 26,
                'created_at' => '2026-03-30 15:42:22',
                'updated_at' => '2026-03-30 15:42:22',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Logistics & Delivery Services / Jasa Logistik & Pengiriman',
                'slug' => 'logistics-delivery-services-jasa-logistik-pengiriman',
                'parent_id' => 26,
                'created_at' => '2026-03-30 15:42:22',
                'updated_at' => '2026-03-30 15:42:22',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Consulting/Professional Services / Jasa Konsultan / Profesional',
                'slug' => 'consultingprofessional-services-jasa-konsultan-profesional',
                'parent_id' => 26,
                'created_at' => '2026-03-30 15:42:22',
                'updated_at' => '2026-03-30 15:42:22',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Equipment / Machinery',
                'slug' => 'equipment-machinery',
                'parent_id' => NULL,
                'created_at' => '2026-03-30 15:42:22',
                'updated_at' => '2026-03-30 15:42:22',
            ),
            32 => 
            array (
                'id' => 33,
            'name' => 'Kitchen / Production Equipment (Example : Oven,Mixer ,Stainless table,Undercounter )',
                'slug' => 'kitchen-production-equipment-example-ovenmixer-stainless-tableundercounter',
                'parent_id' => 32,
                'created_at' => '2026-03-30 15:42:23',
                'updated_at' => '2026-03-30 15:42:23',
            ),
            33 => 
            array (
                'id' => 34,
            'name' => 'Storage & Racking System (Example : Racking, Shelving system)',
                'slug' => 'storage-racking-system-example-racking-shelving-system',
                'parent_id' => 32,
                'created_at' => '2026-03-30 15:42:23',
                'updated_at' => '2026-03-30 15:42:23',
            ),
            34 => 
            array (
                'id' => 35,
            'name' => 'Refrigeration Equipment (Example : Chiller, Freezer,Showcase,Cold storage)',
                'slug' => 'refrigeration-equipment-example-chiller-freezershowcasecold-storage',
                'parent_id' => 32,
                'created_at' => '2026-03-30 15:42:23',
                'updated_at' => '2026-03-30 15:42:23',
            ),
        ));
        
        
    }
}