<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuotationVersionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quotation_versions')->delete();
        
        \DB::table('quotation_versions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'quotation_id' => 12,
                'version_number' => 1,
                'total_amount' => '15000000.00',
            'items_snapshot' => '[{"project_item_id":31,"item_name":"Bracket CCTV (Fabrikasi Custom) ","quantity":"11.00","unit_price":"500000.00","tax":"0.00","total":"5500000.00"},{"project_item_id":32,"item_name":"Ralling CCTV","quantity":"11.00","unit_price":"500000.00","tax":"0.00","total":"5500000.00"},{"project_item_id":33,"item_name":"Jasa installasi CCTV ","quantity":"1.00","unit_price":"4000000.00","tax":"0.00","total":"4000000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 34,
                'created_at' => '2026-06-16 14:19:32',
            ),
            1 => 
            array (
                'id' => 8,
                'quotation_id' => 17,
                'version_number' => 1,
                'total_amount' => '91863600.00',
                'items_snapshot' => '[{"project_item_id":35,"item_name":"Renovasi Delpo Pasar Minggu ","quantity":"1.00","unit_price":"23554200.00","tax":"0.00","total":"23554200.00"},{"project_item_id":36,"item_name":"Renovasi Delpo Cinere","quantity":"1.00","unit_price":"22533000.00","tax":"0.00","total":"22533000.00"},{"project_item_id":37,"item_name":"Renovasi Delpo Rawamangun","quantity":"1.00","unit_price":"22888200.00","tax":"0.00","total":"22888200.00"},{"project_item_id":38,"item_name":"Renovasi Delpo Granada","quantity":"1.00","unit_price":"22888200.00","tax":"0.00","total":"22888200.00"}]',
                'proposal_file_path' => 'quotations/01KVSBRFF2CMMFD76A31A3R8WV.pdf',
                'created_by' => 74,
                'created_at' => '2026-06-25 18:18:08',
            ),
            2 => 
            array (
                'id' => 9,
                'quotation_id' => 16,
                'version_number' => 1,
                'total_amount' => '101162600.00',
                'items_snapshot' => '[{"project_item_id":35,"item_name":"Renovasi Delpo Pasar Minggu ","quantity":"1.00","unit_price":"24020000.00","tax":"0.00","total":"24020000.00"},{"project_item_id":36,"item_name":"Renovasi Delpo Cinere","quantity":"1.00","unit_price":"26450000.00","tax":"0.00","total":"26450000.00"},{"project_item_id":37,"item_name":"Renovasi Delpo Rawamangun","quantity":"1.00","unit_price":"22340000.00","tax":"0.00","total":"22340000.00"},{"project_item_id":38,"item_name":"Renovasi Delpo Granada","quantity":"1.00","unit_price":"28352600.00","tax":"0.00","total":"28352600.00"}]',
                'proposal_file_path' => 'quotations/01KVSB9VDB88JVZB3978HDNH04.pdf',
                'created_by' => 60,
                'created_at' => '2026-06-26 10:12:57',
            ),
            3 => 
            array (
                'id' => 10,
                'quotation_id' => 16,
                'version_number' => 2,
                'total_amount' => '75990500.00',
                'items_snapshot' => '[{"project_item_id":35,"item_name":"Renovasi Delpo Pasar Minggu ","quantity":"1.00","unit_price":"19250000.00","tax":"0.00","total":"19250000.00"},{"project_item_id":36,"item_name":"Renovasi Delpo Cinere","quantity":"1.00","unit_price":"19250000.00","tax":"0.00","total":"19250000.00"},{"project_item_id":37,"item_name":"Renovasi Delpo Rawamangun","quantity":"1.00","unit_price":"16850000.00","tax":"0.00","total":"16850000.00"},{"project_item_id":38,"item_name":"Renovasi Delpo Granada","quantity":"1.00","unit_price":"20640500.00","tax":"0.00","total":"20640500.00"}]',
                'proposal_file_path' => 'quotations/01KVSB9VDB88JVZB3978HDNH04.pdf',
                'created_by' => 60,
                'created_at' => '2026-06-26 10:54:48',
            ),
            4 => 
            array (
                'id' => 11,
                'quotation_id' => 16,
                'version_number' => 3,
                'total_amount' => '75990500.00',
                'items_snapshot' => '[{"project_item_id":35,"item_name":"Renovasi Delpo Pasar Minggu ","quantity":"1.00","unit_price":"19250000.00","tax":"0.00","total":"19250000.00"},{"project_item_id":36,"item_name":"Renovasi Delpo Cinere","quantity":"1.00","unit_price":"19250000.00","tax":"0.00","total":"19250000.00"},{"project_item_id":37,"item_name":"Renovasi Delpo Rawamangun","quantity":"1.00","unit_price":"16850000.00","tax":"0.00","total":"16850000.00"},{"project_item_id":38,"item_name":"Renovasi Delpo Granada","quantity":"1.00","unit_price":"20640500.00","tax":"0.00","total":"20640500.00"}]',
                'proposal_file_path' => 'quotations/01KW111R059A95TSX47K7PAMQ5.pdf',
                'created_by' => 60,
                'created_at' => '2026-06-26 10:55:05',
            ),
            5 => 
            array (
                'id' => 12,
                'quotation_id' => 21,
                'version_number' => 1,
                'total_amount' => '51660000.00',
                'items_snapshot' => '[{"project_item_id":39,"item_name":"Layanan WhatsApp Business API dan Omni Channel CRM","quantity":"1.00","unit_price":"51660000.00","tax":"0.00","total":"51660000.00"}]',
                'proposal_file_path' => 'quotations/01KWK44M6E4W8FM5DB26Y4R086.pdf',
                'created_by' => 128,
                'created_at' => '2026-07-07 11:10:58',
            ),
            6 => 
            array (
                'id' => 13,
                'quotation_id' => 26,
                'version_number' => 1,
                'total_amount' => '13100000.00',
                'items_snapshot' => '[{"project_item_id":68,"item_name":"1 laptop MSI Modern 14 F1MG Core 7-150U 16GB 512GB W11+OHS 14.0FHD IPS","quantity":"1.00","unit_price":"13100000.00","tax":"0.00","total":"13100000.00"}]',
                'proposal_file_path' => 'quotations/01KXFXHY9HSNR46QJ8Y6B768WJ.pdf',
                'created_by' => 143,
                'created_at' => '2026-07-14 15:59:55',
            ),
            7 => 
            array (
                'id' => 18,
                'quotation_id' => 23,
                'version_number' => 5,
                'total_amount' => '2000014.00',
                'items_snapshot' => '[{"project_item_id":66,"item_name":"Timbangan meja Excellent WP-JCS-B-LED-30kg","quantity":"1.00","unit_price":"2000014.00","tax":"0.00","total":"2000014.00"}]',
                'proposal_file_path' => 'quotations/01KXG2AR1R1G0CYTX36SVC17N9.pdf',
                'created_by' => 17,
                'created_at' => '2026-07-14 17:45:40',
            ),
            8 => 
            array (
                'id' => 19,
                'quotation_id' => 23,
                'version_number' => 6,
                'total_amount' => '2000017.00',
                'items_snapshot' => '[{"project_item_id":66,"item_name":"Timbangan meja Excellent WP-JCS-B-LED-30kg","quantity":"1.00","unit_price":"2000017.00","tax":"0.00","total":"2000017.00"}]',
                'proposal_file_path' => 'quotations/01KXG3ZDMBCBAA8VFZ1RDR64G5.xlsx',
                'created_by' => 17,
                'created_at' => '2026-07-14 17:53:18',
            ),
            9 => 
            array (
                'id' => 20,
                'quotation_id' => 23,
                'version_number' => 7,
                'total_amount' => '2000018.00',
                'items_snapshot' => '[{"project_item_id":66,"item_name":"Timbangan meja Excellent WP-JCS-B-LED-30kg","quantity":"1.00","unit_price":"2000018.00","tax":"0.00","total":"2000018.00"}]',
                'proposal_file_path' => 'quotations/01KXG3ZDMBCBAA8VFZ1RDR64G5.xlsx',
                'created_by' => 1,
                'created_at' => '2026-07-14 17:58:34',
            ),
            10 => 
            array (
                'id' => 21,
                'quotation_id' => 22,
                'version_number' => 1,
                'total_amount' => '600000000.00',
                'items_snapshot' => '[{"project_item_id":5,"item_name":"General Labor \\/ Contractor Fee 3","quantity":"1.00","unit_price":"500000000.00","tax":"0.00","total":"500000000.00"},{"project_item_id":6,"item_name":"Primary Hardware \\/ Materials 3","quantity":"10.00","unit_price":"10000000.00","tax":"0.00","total":"100000000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 14,
                'created_at' => '2026-07-20 21:27:45',
            ),
            11 => 
            array (
                'id' => 22,
                'quotation_id' => 22,
                'version_number' => 2,
                'total_amount' => '600000000.00',
                'items_snapshot' => '[{"project_item_id":5,"item_name":"General Labor \\/ Contractor Fee 3","quantity":"1.00","unit_price":"500000000.00","tax":"0.00","total":"500000000.00"},{"project_item_id":6,"item_name":"Primary Hardware \\/ Materials 3","quantity":"10.00","unit_price":"10000000.00","tax":"0.00","total":"100000000.00"}]',
                'proposal_file_path' => 'quotations/01KXZZ08WH8K8W5MATYPKJS9T5.pdf',
                'created_by' => 14,
                'created_at' => '2026-07-21 08:51:51',
            ),
            12 => 
            array (
                'id' => 23,
                'quotation_id' => 10,
                'version_number' => 1,
                'total_amount' => '19050000.00',
            'items_snapshot' => '[{"project_item_id":134,"item_name":"Polo T-Shirt GA Region Jabo (Size L)","quantity":"27.00","unit_price":"62000.00","tax":"0.00","total":"1674000.00"},{"project_item_id":135,"item_name":"Polo T-Shirt GA Region Jabo (Size M)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":136,"item_name":"Polo T-Shirt GA Region Jabo (Size XL)","quantity":"18.00","unit_price":"62000.00","tax":"0.00","total":"1116000.00"},{"project_item_id":137,"item_name":"Polo T-Shirt GA Region Jabo (Size XXL)","quantity":"3.00","unit_price":"67000.00","tax":"0.00","total":"201000.00"},{"project_item_id":139,"item_name":"Polo T-Shirt GA Region Jabo (Size XXXL)","quantity":"3.00","unit_price":"67000.00","tax":"0.00","total":"201000.00"},{"project_item_id":140,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size L)","quantity":"15.00","unit_price":"62000.00","tax":"0.00","total":"930000.00"},{"project_item_id":141,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size M)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":142,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XL)","quantity":"27.00","unit_price":"62000.00","tax":"0.00","total":"1674000.00"},{"project_item_id":143,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XXL)","quantity":"18.00","unit_price":"67000.00","tax":"0.00","total":"1206000.00"},{"project_item_id":144,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XXXL)","quantity":"21.00","unit_price":"67000.00","tax":"0.00","total":"1407000.00"},{"project_item_id":145,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (L)","quantity":"33.00","unit_price":"62000.00","tax":"0.00","total":"2046000.00"},{"project_item_id":146,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (M)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":147,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XL)","quantity":"33.00","unit_price":"62000.00","tax":"0.00","total":"2046000.00"},{"project_item_id":148,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XXL)","quantity":"15.00","unit_price":"67000.00","tax":"0.00","total":"1005000.00"},{"project_item_id":149,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XXXL)","quantity":"6.00","unit_price":"67000.00","tax":"0.00","total":"402000.00"},{"project_item_id":150,"item_name":"Polo T-Shirt PROCUREMENT Region Jabo (XL)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":151,"item_name":"Polo T-Shirt GA Region Ex-Jabo (L)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":152,"item_name":"Polo T-Shirt GA Region Ex-Jabo (XL)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":153,"item_name":"Polo T-Shirt GA Region Ex-Jabo (XXXL)","quantity":"9.00","unit_price":"67000.00","tax":"0.00","total":"603000.00"},{"project_item_id":154,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (L)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":155,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XL)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":156,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XXL)","quantity":"6.00","unit_price":"67000.00","tax":"0.00","total":"402000.00"},{"project_item_id":157,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XXXL)","quantity":"6.00","unit_price":"67000.00","tax":"0.00","total":"402000.00"},{"project_item_id":158,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (L)","quantity":"9.00","unit_price":"62000.00","tax":"0.00","total":"558000.00"},{"project_item_id":159,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (XL)","quantity":"12.00","unit_price":"62000.00","tax":"0.00","total":"744000.00"},{"project_item_id":160,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (XXL)","quantity":"3.00","unit_price":"67000.00","tax":"0.00","total":"201000.00"},{"project_item_id":161,"item_name":"Polo T-Shirt  PROCUREMENT Region Ex-Jabo (XL)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 1,
                'created_at' => '2026-07-21 09:36:14',
            ),
            13 => 
            array (
                'id' => 24,
                'quotation_id' => 24,
                'version_number' => 1,
                'total_amount' => '5000000.00',
                'items_snapshot' => '[{"project_item_id":66,"item_name":"Timbangan meja Excellent WP-JCS-B-LED-30kg","quantity":"1.00","unit_price":"5000000.00","tax":"0.00","total":"5000000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 14,
                'created_at' => '2026-07-21 11:31:08',
            ),
            14 => 
            array (
                'id' => 25,
                'quotation_id' => 32,
                'version_number' => 1,
                'total_amount' => '10045000.00',
                'items_snapshot' => '[{"project_item_id":163,"item_name":"TL LED phillips16W ","quantity":"15.00","unit_price":"0.00","tax":"0.00","total":"0.00"},{"project_item_id":164,"item_name":"Downlight LED phillips 18W","quantity":"15.00","unit_price":"0.00","tax":"0.00","total":"0.00"},{"project_item_id":165,"item_name":"LED Bulb Hannoc 40W","quantity":"15.00","unit_price":"0.00","tax":"0.00","total":"0.00"},{"project_item_id":166,"item_name":"Freon R32","quantity":"1.00","unit_price":"1850000.00","tax":"0.00","total":"1850000.00"},{"project_item_id":167,"item_name":"Freon R22","quantity":"1.00","unit_price":"1850000.00","tax":"0.00","total":"1850000.00"},{"project_item_id":168,"item_name":"Freon R410","quantity":"1.00","unit_price":"2075000.00","tax":"0.00","total":"2075000.00"},{"project_item_id":169,"item_name":"Freon R404","quantity":"1.00","unit_price":"1620000.00","tax":"0.00","total":"1620000.00"},{"project_item_id":170,"item_name":"Freon R134","quantity":"1.00","unit_price":"2650000.00","tax":"0.00","total":"2650000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 143,
                'created_at' => '2026-07-21 11:47:30',
            ),
            15 => 
            array (
                'id' => 26,
                'quotation_id' => 29,
                'version_number' => 2,
                'total_amount' => '19050000.00',
            'items_snapshot' => '[{"project_item_id":134,"item_name":"Polo T-Shirt GA Region Jabo (Size L)","quantity":"27.00","unit_price":"62000.00","tax":"0.00","total":"1674000.00"},{"project_item_id":135,"item_name":"Polo T-Shirt GA Region Jabo (Size M)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":136,"item_name":"Polo T-Shirt GA Region Jabo (Size XL)","quantity":"18.00","unit_price":"62000.00","tax":"0.00","total":"1116000.00"},{"project_item_id":137,"item_name":"Polo T-Shirt GA Region Jabo (Size XXL)","quantity":"3.00","unit_price":"67000.00","tax":"0.00","total":"201000.00"},{"project_item_id":139,"item_name":"Polo T-Shirt GA Region Jabo (Size XXXL)","quantity":"3.00","unit_price":"67000.00","tax":"0.00","total":"201000.00"},{"project_item_id":140,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size L)","quantity":"15.00","unit_price":"62000.00","tax":"0.00","total":"930000.00"},{"project_item_id":141,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size M)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":142,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XL)","quantity":"27.00","unit_price":"62000.00","tax":"0.00","total":"1674000.00"},{"project_item_id":143,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XXL)","quantity":"18.00","unit_price":"67000.00","tax":"0.00","total":"1206000.00"},{"project_item_id":144,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XXXL)","quantity":"21.00","unit_price":"67000.00","tax":"0.00","total":"1407000.00"},{"project_item_id":145,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (L)","quantity":"33.00","unit_price":"62000.00","tax":"0.00","total":"2046000.00"},{"project_item_id":146,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (M)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":147,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XL)","quantity":"33.00","unit_price":"62000.00","tax":"0.00","total":"2046000.00"},{"project_item_id":148,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XXL)","quantity":"15.00","unit_price":"67000.00","tax":"0.00","total":"1005000.00"},{"project_item_id":149,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XXXL)","quantity":"6.00","unit_price":"67000.00","tax":"0.00","total":"402000.00"},{"project_item_id":150,"item_name":"Polo T-Shirt PROCUREMENT Region Jabo (XL)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":151,"item_name":"Polo T-Shirt GA Region Ex-Jabo (L)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":152,"item_name":"Polo T-Shirt GA Region Ex-Jabo (XL)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":153,"item_name":"Polo T-Shirt GA Region Ex-Jabo (XXXL)","quantity":"9.00","unit_price":"67000.00","tax":"0.00","total":"603000.00"},{"project_item_id":154,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (L)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":155,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XL)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":156,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XXL)","quantity":"6.00","unit_price":"67000.00","tax":"0.00","total":"402000.00"},{"project_item_id":157,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XXXL)","quantity":"6.00","unit_price":"67000.00","tax":"0.00","total":"402000.00"},{"project_item_id":158,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (L)","quantity":"9.00","unit_price":"62000.00","tax":"0.00","total":"558000.00"},{"project_item_id":159,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (XL)","quantity":"12.00","unit_price":"62000.00","tax":"0.00","total":"744000.00"},{"project_item_id":160,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (XXL)","quantity":"3.00","unit_price":"67000.00","tax":"0.00","total":"201000.00"},{"project_item_id":161,"item_name":"Polo T-Shirt  PROCUREMENT Region Ex-Jabo (XL)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"}]',
                'proposal_file_path' => 'quotations/01KY18J93VGBZ2KE32MVGFWHN9.pdf',
                'created_by' => 141,
                'created_at' => '2026-07-22 10:32:57',
            ),
            16 => 
            array (
                'id' => 27,
                'quotation_id' => 35,
                'version_number' => 1,
                'total_amount' => '26250000.00',
                'items_snapshot' => '[{"project_item_id":180,"item_name":"Telur Ayam Fresh","quantity":"1050.00","unit_price":"25000.00","tax":"0.00","total":"26250000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 14,
                'created_at' => '2026-07-22 12:25:36',
            ),
            17 => 
            array (
                'id' => 28,
                'quotation_id' => 32,
                'version_number' => 2,
                'total_amount' => '10075000.00',
                'items_snapshot' => '[{"project_item_id":163,"item_name":"TL LED phillips16W ","quantity":"15.00","unit_price":"0.00","tax":"0.00","total":"0.00"},{"project_item_id":164,"item_name":"Downlight LED phillips 18W","quantity":"15.00","unit_price":"0.00","tax":"0.00","total":"0.00"},{"project_item_id":165,"item_name":"LED Bulb Hannoc 40W","quantity":"15.00","unit_price":"0.00","tax":"0.00","total":"0.00"},{"project_item_id":166,"item_name":"Freon R32","quantity":"1.00","unit_price":"1850000.00","tax":"0.00","total":"1850000.00"},{"project_item_id":167,"item_name":"Freon R22","quantity":"1.00","unit_price":"1850000.00","tax":"0.00","total":"1850000.00"},{"project_item_id":168,"item_name":"Freon R410","quantity":"1.00","unit_price":"2075000.00","tax":"0.00","total":"2075000.00"},{"project_item_id":169,"item_name":"Freon R404","quantity":"1.00","unit_price":"1650000.00","tax":"0.00","total":"1650000.00"},{"project_item_id":170,"item_name":"Freon R134","quantity":"1.00","unit_price":"2650000.00","tax":"0.00","total":"2650000.00"}]',
                'proposal_file_path' => 'quotations/01KY1GEE3B0SWYFD6CEE4WF62Q.pdf',
                'created_by' => 95,
                'created_at' => '2026-07-22 15:44:28',
            ),
            18 => 
            array (
                'id' => 29,
                'quotation_id' => 29,
                'version_number' => 3,
                'total_amount' => '17535000.00',
            'items_snapshot' => '[{"project_item_id":134,"item_name":"Polo T-Shirt GA Region Jabo (Size L)","quantity":"27.00","unit_price":"57000.00","tax":"0.00","total":"1539000.00"},{"project_item_id":135,"item_name":"Polo T-Shirt GA Region Jabo (Size M)","quantity":"3.00","unit_price":"57000.00","tax":"0.00","total":"171000.00"},{"project_item_id":136,"item_name":"Polo T-Shirt GA Region Jabo (Size XL)","quantity":"18.00","unit_price":"57000.00","tax":"0.00","total":"1026000.00"},{"project_item_id":137,"item_name":"Polo T-Shirt GA Region Jabo (Size XXL)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":139,"item_name":"Polo T-Shirt GA Region Jabo (Size XXXL)","quantity":"3.00","unit_price":"62000.00","tax":"0.00","total":"186000.00"},{"project_item_id":140,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size L)","quantity":"15.00","unit_price":"57000.00","tax":"0.00","total":"855000.00"},{"project_item_id":141,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size M)","quantity":"3.00","unit_price":"57000.00","tax":"0.00","total":"171000.00"},{"project_item_id":142,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XL)","quantity":"27.00","unit_price":"57000.00","tax":"0.00","total":"1539000.00"},{"project_item_id":143,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XXL)","quantity":"18.00","unit_price":"62000.00","tax":"0.00","total":"1116000.00"},{"project_item_id":144,"item_name":"Polo T-Shirt DISTRIBUTION Region Jabo (Size XXXL)","quantity":"21.00","unit_price":"62000.00","tax":"0.00","total":"1302000.00"},{"project_item_id":145,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (L)","quantity":"33.00","unit_price":"57000.00","tax":"0.00","total":"1881000.00"},{"project_item_id":146,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (M)","quantity":"3.00","unit_price":"57000.00","tax":"0.00","total":"171000.00"},{"project_item_id":147,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XL)","quantity":"33.00","unit_price":"57000.00","tax":"0.00","total":"1881000.00"},{"project_item_id":148,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XXL)","quantity":"15.00","unit_price":"62000.00","tax":"0.00","total":"930000.00"},{"project_item_id":149,"item_name":"Polo T-Shirt WAREHOUSE Region Jabo (XXXL)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":150,"item_name":"Polo T-Shirt PROCUREMENT Region Jabo (XL)","quantity":"6.00","unit_price":"57000.00","tax":"0.00","total":"342000.00"},{"project_item_id":151,"item_name":"Polo T-Shirt GA Region Ex-Jabo (L)","quantity":"3.00","unit_price":"57000.00","tax":"0.00","total":"171000.00"},{"project_item_id":152,"item_name":"Polo T-Shirt GA Region Ex-Jabo (XL)","quantity":"6.00","unit_price":"57000.00","tax":"0.00","total":"342000.00"},{"project_item_id":153,"item_name":"Polo T-Shirt GA Region Ex-Jabo (XXXL)","quantity":"9.00","unit_price":"62000.00","tax":"0.00","total":"558000.00"},{"project_item_id":154,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (L)","quantity":"6.00","unit_price":"57000.00","tax":"0.00","total":"342000.00"},{"project_item_id":155,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XL)","quantity":"3.00","unit_price":"57000.00","tax":"0.00","total":"171000.00"},{"project_item_id":156,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XXL)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":157,"item_name":"Polo T-Shirt DISTRIBUTION Region Ex-Jabo (XXXL)","quantity":"6.00","unit_price":"62000.00","tax":"0.00","total":"372000.00"},{"project_item_id":158,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (L)","quantity":"9.00","unit_price":"57000.00","tax":"0.00","total":"513000.00"},{"project_item_id":159,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (XL)","quantity":"12.00","unit_price":"57000.00","tax":"0.00","total":"684000.00"},{"project_item_id":160,"item_name":"Polo T-Shirt  WAREHOUSE Region Ex-Jabo (XXL)","quantity":"3.00","unit_price":"57000.00","tax":"0.00","total":"171000.00"},{"project_item_id":161,"item_name":"Polo T-Shirt  PROCUREMENT Region Ex-Jabo (XL)","quantity":"3.00","unit_price":"57000.00","tax":"0.00","total":"171000.00"}]',
                'proposal_file_path' => 'quotations/01KY18J93VGBZ2KE32MVGFWHN9.pdf',
                'created_by' => 141,
                'created_at' => '2026-07-22 15:50:39',
            ),
            19 => 
            array (
                'id' => 30,
                'quotation_id' => 36,
                'version_number' => 1,
                'total_amount' => '10340000.00',
                'items_snapshot' => '[{"project_item_id":181,"item_name":"Xiaomi Redmi 15C [8\\/256GB]","quantity":"4.00","unit_price":"2585000.00","tax":"0.00","total":"10340000.00"}]',
                'proposal_file_path' => 'quotations/01KY4E23GAYV2ZZW9TZDN832MT.pdf',
                'created_by' => 142,
                'created_at' => '2026-07-22 15:52:01',
            ),
            20 => 
            array (
                'id' => 31,
                'quotation_id' => 31,
                'version_number' => 1,
                'total_amount' => '21000000.00',
                'items_snapshot' => '[{"project_item_id":162,"item_name":"Pekerjaan Renovasi ","quantity":"1.00","unit_price":"21000000.00","tax":"0.00","total":"21000000.00"}]',
                'proposal_file_path' => 'quotations/01KXZPKG3FF5V0X7PFXJKC4H7E.pdf',
                'created_by' => 74,
                'created_at' => '2026-07-23 17:07:19',
            ),
            21 => 
            array (
                'id' => 32,
                'quotation_id' => 37,
                'version_number' => 1,
                'total_amount' => '10400000.00',
                'items_snapshot' => '[{"project_item_id":181,"item_name":"Xiaomi Redmi 15C [8\\/256GB]","quantity":"4.00","unit_price":"2600000.00","tax":"0.00","total":"10400000.00"}]',
                'proposal_file_path' => 'quotations/01KY4M4VBX3FTH57SV4GZGKCVQ.pdf',
                'created_by' => 155,
                'created_at' => '2026-07-24 10:02:23',
            ),
            22 => 
            array (
                'id' => 33,
                'quotation_id' => 39,
                'version_number' => 1,
                'total_amount' => '6077250.00',
                'items_snapshot' => '[{"project_item_id":182,"item_name":"TL LED phillips16W ","quantity":"15.00","unit_price":"122100.00","tax":"0.00","total":"1831500.00"},{"project_item_id":183,"item_name":"Downlight LED phillips 18W","quantity":"15.00","unit_price":"155400.00","tax":"0.00","total":"2331000.00"},{"project_item_id":184,"item_name":"LED Bulb Hannoc 40W","quantity":"15.00","unit_price":"127650.00","tax":"0.00","total":"1914750.00"}]',
                'proposal_file_path' => 'quotations/01KY93DAQTK2XQ6CTFJWAVH27Z.pdf',
                'created_by' => 92,
                'created_at' => '2026-07-24 11:56:23',
            ),
            23 => 
            array (
                'id' => 34,
                'quotation_id' => 40,
                'version_number' => 1,
                'total_amount' => '6604500.00',
                'items_snapshot' => '[{"project_item_id":188,"item_name":"Printer Epson L6490 L 6490 Print Scan Copy Fax Wi-Fi Duplex with ADF - Epson EcoTank L6490","quantity":"1.00","unit_price":"6604500.00","tax":"0.00","total":"6604500.00"}]',
                'proposal_file_path' => 'quotations/01KYH47RJM55K1KZE3MS3HB0EY.pdf',
                'created_by' => 117,
                'created_at' => '2026-07-27 17:49:15',
            ),
            24 => 
            array (
                'id' => 35,
                'quotation_id' => 42,
                'version_number' => 1,
                'total_amount' => '26670000.00',
                'items_snapshot' => '[{"project_item_id":189,"item_name":"Telur ","quantity":"1050.00","unit_price":"25400.00","tax":"0.00","total":"26670000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 14,
                'created_at' => '2026-07-27 23:28:45',
            ),
            25 => 
            array (
                'id' => 36,
                'quotation_id' => 43,
                'version_number' => 1,
                'total_amount' => '26250000.00',
                'items_snapshot' => '[{"project_item_id":190,"item_name":"Telur Ayam Kandang","quantity":"1050.00","unit_price":"25000.00","tax":"0.00","total":"26250000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 14,
                'created_at' => '2026-07-28 14:24:09',
            ),
            26 => 
            array (
                'id' => 37,
                'quotation_id' => 46,
                'version_number' => 1,
                'total_amount' => '26250000.00',
                'items_snapshot' => '[{"project_item_id":192,"item_name":"Telur Ayam Kandang","quantity":"1050.00","unit_price":"25000.00","tax":"0.00","total":"26250000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 14,
                'created_at' => '2026-07-28 15:11:33',
            ),
            27 => 
            array (
                'id' => 38,
                'quotation_id' => 41,
                'version_number' => 1,
                'total_amount' => '44163500.00',
                'items_snapshot' => '[{"project_item_id":187,"item_name":"Renovasi Delpo Palmerah","quantity":"1.00","unit_price":"44163500.00","tax":"0.00","total":"44163500.00"}]',
                'proposal_file_path' => 'quotations/01KYHFCMTFN94DWBA3SVBCYW9D.pdf',
                'created_by' => 74,
                'created_at' => '2026-07-29 10:48:15',
            ),
            28 => 
            array (
                'id' => 39,
                'quotation_id' => 42,
                'version_number' => 2,
                'total_amount' => '26670000.00',
                'items_snapshot' => '[{"project_item_id":189,"item_name":"Telur ","quantity":"1050.00","unit_price":"25400.00","tax":"0.00","total":"26670000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 14,
                'created_at' => '2026-07-29 16:20:45',
            ),
            29 => 
            array (
                'id' => 40,
                'quotation_id' => 45,
                'version_number' => 1,
                'total_amount' => '15170000.00',
            'items_snapshot' => '[{"project_item_id":185,"item_name":"GEA Counter Top Cake Showcase RTW-100L-3CH","quantity":"1.00","unit_price":"4514000.00","tax":"0.00","total":"4514000.00"},{"project_item_id":186,"item_name":"GEA LP-12X1 Juice Dispenser (Kuning)","quantity":"2.00","unit_price":"5328000.00","tax":"0.00","total":"10656000.00"}]',
                'proposal_file_path' => 'quotations/01KYPJZZRV18PWQ8R7YA0G3F56.pdf',
                'created_by' => 94,
                'created_at' => '2026-07-29 16:24:42',
            ),
            30 => 
            array (
                'id' => 41,
                'quotation_id' => 50,
                'version_number' => 1,
                'total_amount' => '13800000.00',
                'items_snapshot' => '[{"project_item_id":193,"item_name":"Lenovo V14 G3 Intel Core i7 1255U 16GB 512SSD Windows 11 Office 14 inch FHD Gen 3 K3ID","quantity":"1.00","unit_price":"13800000.00","tax":"0.00","total":"13800000.00"}]',
                'proposal_file_path' => 'quotations/01KYP07AAFZKFEYKEWBA46SZGK.pdf',
                'created_by' => 117,
                'created_at' => '2026-07-30 09:24:56',
            ),
            31 => 
            array (
                'id' => 42,
                'quotation_id' => 50,
                'version_number' => 2,
                'total_amount' => '13700000.00',
                'items_snapshot' => '[{"project_item_id":193,"item_name":"Lenovo V14 G3 Intel Core i7 1255U 16GB 512SSD Windows 11 Office 14 inch FHD Gen 3 K3ID","quantity":"1.00","unit_price":"13700000.00","tax":"0.00","total":"13700000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 117,
                'created_at' => '2026-07-30 09:26:18',
            ),
            32 => 
            array (
                'id' => 43,
                'quotation_id' => 45,
                'version_number' => 2,
                'total_amount' => '15170000.00',
            'items_snapshot' => '[{"project_item_id":185,"item_name":"GEA Counter Top Cake Showcase RTW-100L-3CH","quantity":"1.00","unit_price":"4514000.00","tax":"0.00","total":"4514000.00"},{"project_item_id":186,"item_name":"GEA LP-12X1 Juice Dispenser (Kuning)","quantity":"2.00","unit_price":"5328000.00","tax":"0.00","total":"10656000.00"}]',
                'proposal_file_path' => 'quotations/01KYPJZZRV18PWQ8R7YA0G3F56.pdf',
                'created_by' => 143,
                'created_at' => '2026-07-30 15:27:10',
            ),
            33 => 
            array (
                'id' => 44,
                'quotation_id' => 53,
                'version_number' => 1,
                'total_amount' => '12433450.00',
            'items_snapshot' => '[{"project_item_id":195,"item_name":"Lem Balon","quantity":"135.00","unit_price":"1250.00","tax":"0.00","total":"168750.00"},{"project_item_id":196,"item_name":"Balon Merah","quantity":"19.00","unit_price":"39700.00","tax":"0.00","total":"754300.00"},{"project_item_id":197,"item_name":"Balon Putih","quantity":"19.00","unit_price":"42200.00","tax":"0.00","total":"801800.00"},{"project_item_id":198,"item_name":"Bando (Varian : Indonesia)","quantity":"162.00","unit_price":"26300.00","tax":"0.00","total":"4260600.00"},{"project_item_id":199,"item_name":"Banner HUT RI 11 x 10 Kotak 16 Flag","quantity":"110.00","unit_price":"11000.00","tax":"0.00","total":"1210000.00"},{"project_item_id":200,"item_name":"Lampion A (Bulat Bendera)","quantity":"89.00","unit_price":"26100.00","tax":"0.00","total":"2322900.00"},{"project_item_id":201,"item_name":"Lampion B (Tiga Love)","quantity":"129.00","unit_price":"21100.00","tax":"0.00","total":"2721900.00"},{"project_item_id":202,"item_name":"Bendera Pipi (Varian BD1)","quantity":"14.00","unit_price":"13800.00","tax":"0.00","total":"193200.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 91,
                'created_at' => '2026-07-30 19:19:23',
            ),
            34 => 
            array (
                'id' => 45,
                'quotation_id' => 47,
                'version_number' => 1,
                'total_amount' => '13000000.00',
                'items_snapshot' => '[{"project_item_id":193,"item_name":"Lenovo V14 G3 Intel Core i7 1255U 16GB 512SSD Windows 11 Office 14 inch FHD Gen 3 K3ID","quantity":"1.00","unit_price":"13000000.00","tax":"0.00","total":"13000000.00"}]',
                'proposal_file_path' => 'quotations/01KYKXQAMW1MW13WGWKAGDDQZJ.pdf',
                'created_by' => 155,
                'created_at' => '2026-07-31 14:18:56',
            ),
            35 => 
            array (
                'id' => 46,
                'quotation_id' => 49,
                'version_number' => 1,
                'total_amount' => '11891892.00',
                'items_snapshot' => '[{"project_item_id":193,"item_name":"Lenovo V14 G3 Intel Core i7 1255U 16GB 512SSD Windows 11 Office 14 inch FHD Gen 3 K3ID","quantity":"1.00","unit_price":"11891892.00","tax":"0.00","total":"11891892.00"}]',
                'proposal_file_path' => 'quotations/01KYKY0H7K1GRFWXJ0P2XEPSGR.pdf',
                'created_by' => 156,
                'created_at' => '2026-07-31 14:23:28',
            ),
            36 => 
            array (
                'id' => 47,
                'quotation_id' => 53,
                'version_number' => 2,
                'total_amount' => '11997480.00',
            'items_snapshot' => '[{"project_item_id":195,"item_name":"Lem Balon","quantity":"135.00","unit_price":"1200.00","tax":"0.00","total":"162000.00"},{"project_item_id":196,"item_name":"Balon Merah","quantity":"19.00","unit_price":"38400.00","tax":"0.00","total":"729600.00"},{"project_item_id":197,"item_name":"Balon Putih","quantity":"19.00","unit_price":"40200.00","tax":"0.00","total":"763800.00"},{"project_item_id":198,"item_name":"Bando (Varian : Indonesia)","quantity":"162.00","unit_price":"25440.00","tax":"0.00","total":"4121280.00"},{"project_item_id":199,"item_name":"Banner HUT RI 11 x 10 Kotak 16 Flag","quantity":"110.00","unit_price":"10560.00","tax":"0.00","total":"1161600.00"},{"project_item_id":200,"item_name":"Lampion A (Bulat Bendera)","quantity":"89.00","unit_price":"25200.00","tax":"0.00","total":"2242800.00"},{"project_item_id":201,"item_name":"Lampion B (Tiga Love)","quantity":"129.00","unit_price":"20400.00","tax":"0.00","total":"2631600.00"},{"project_item_id":202,"item_name":"Bendera Pipi (Varian BD1)","quantity":"14.00","unit_price":"13200.00","tax":"0.00","total":"184800.00"}]',
                'proposal_file_path' => 'quotations/01KYSFQ5QQRTY48MB58DJXJRJX.pdf',
                'created_by' => 91,
                'created_at' => '2026-07-31 16:00:05',
            ),
            37 => 
            array (
                'id' => 48,
                'quotation_id' => 53,
                'version_number' => 3,
                'total_amount' => '11997480.00',
            'items_snapshot' => '[{"project_item_id":195,"item_name":"Lem Balon","quantity":"135.00","unit_price":"1200.00","tax":"0.00","total":"162000.00"},{"project_item_id":196,"item_name":"Balon Merah","quantity":"19.00","unit_price":"38400.00","tax":"0.00","total":"729600.00"},{"project_item_id":197,"item_name":"Balon Putih","quantity":"19.00","unit_price":"40200.00","tax":"0.00","total":"763800.00"},{"project_item_id":198,"item_name":"Bando (Varian : Indonesia)","quantity":"162.00","unit_price":"25440.00","tax":"0.00","total":"4121280.00"},{"project_item_id":199,"item_name":"Banner HUT RI 11 x 10 Kotak 16 Flag","quantity":"110.00","unit_price":"10560.00","tax":"0.00","total":"1161600.00"},{"project_item_id":200,"item_name":"Lampion A (Bulat Bendera)","quantity":"89.00","unit_price":"25200.00","tax":"0.00","total":"2242800.00"},{"project_item_id":201,"item_name":"Lampion B (Tiga Love)","quantity":"129.00","unit_price":"20400.00","tax":"0.00","total":"2631600.00"},{"project_item_id":202,"item_name":"Bendera Pipi (Varian BD1)","quantity":"14.00","unit_price":"13200.00","tax":"0.00","total":"184800.00"}]',
                'proposal_file_path' => 'quotations/01KYSFQ5QQRTY48MB58DJXJRJX.pdf',
                'created_by' => 91,
                'created_at' => '2026-07-31 16:13:02',
            ),
            38 => 
            array (
                'id' => 49,
                'quotation_id' => 53,
                'version_number' => 4,
                'total_amount' => '11997480.00',
            'items_snapshot' => '[{"project_item_id":195,"item_name":"Lem Balon","quantity":"135.00","unit_price":"1200.00","tax":"0.00","total":"162000.00"},{"project_item_id":196,"item_name":"Balon Merah","quantity":"19.00","unit_price":"38400.00","tax":"0.00","total":"729600.00"},{"project_item_id":197,"item_name":"Balon Putih","quantity":"19.00","unit_price":"40200.00","tax":"0.00","total":"763800.00"},{"project_item_id":198,"item_name":"Bando (Varian : Indonesia)","quantity":"162.00","unit_price":"25440.00","tax":"0.00","total":"4121280.00"},{"project_item_id":199,"item_name":"Banner HUT RI 11 x 10 Kotak 16 Flag","quantity":"110.00","unit_price":"10560.00","tax":"0.00","total":"1161600.00"},{"project_item_id":200,"item_name":"Lampion A (Bulat Bendera)","quantity":"89.00","unit_price":"25200.00","tax":"0.00","total":"2242800.00"},{"project_item_id":201,"item_name":"Lampion B (Tiga Love)","quantity":"129.00","unit_price":"20400.00","tax":"0.00","total":"2631600.00"},{"project_item_id":202,"item_name":"Bendera Pipi (Varian BD1)","quantity":"14.00","unit_price":"13200.00","tax":"0.00","total":"184800.00"}]',
                'proposal_file_path' => 'quotations/01KYSFQ5QQRTY48MB58DJXJRJX.pdf',
                'created_by' => 91,
                'created_at' => '2026-07-31 16:20:41',
            ),
            39 => 
            array (
                'id' => 50,
                'quotation_id' => 58,
                'version_number' => 1,
                'total_amount' => '13479875.00',
            'items_snapshot' => '[{"project_item_id":195,"item_name":"Lem Balon","quantity":"135.00","unit_price":"1250.00","tax":"0.00","total":"168750.00"},{"project_item_id":196,"item_name":"Balon Merah","quantity":"19.00","unit_price":"40000.00","tax":"0.00","total":"760000.00"},{"project_item_id":197,"item_name":"Balon Putih","quantity":"19.00","unit_price":"41875.00","tax":"0.00","total":"795625.00"},{"project_item_id":198,"item_name":"Bando (Varian : Indonesia)","quantity":"162.00","unit_price":"26500.00","tax":"0.00","total":"4293000.00"},{"project_item_id":199,"item_name":"Banner HUT RI 11 x 10 Kotak 16 Flag","quantity":"110.00","unit_price":"11000.00","tax":"0.00","total":"1210000.00"},{"project_item_id":200,"item_name":"Lampion A (Bulat Bendera)","quantity":"124.00","unit_price":"26250.00","tax":"0.00","total":"3255000.00"},{"project_item_id":201,"item_name":"Lampion B (Tiga Love)","quantity":"132.00","unit_price":"21250.00","tax":"0.00","total":"2805000.00"},{"project_item_id":202,"item_name":"Bendera Pipi (Varian BD1)","quantity":"14.00","unit_price":"13750.00","tax":"0.00","total":"192500.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 91,
                'created_at' => '2026-07-31 16:51:11',
            ),
            40 => 
            array (
                'id' => 51,
                'quotation_id' => 64,
                'version_number' => 1,
                'total_amount' => '28050000.00',
                'items_snapshot' => '[{"project_item_id":206,"item_name":"Biaya Cetak , Pemasangan dan Pembongkaran Umbul Umbul OUTLET - JABODETABEK","quantity":"126.00","unit_price":"175000.00","tax":"0.00","total":"22050000.00"},{"project_item_id":207,"item_name":"Biaya Cetak , Pemasangan dan Pembongkaran Umbul Umbul OUTLET - MEDAN","quantity":"7.00","unit_price":"175000.00","tax":"0.00","total":"1225000.00"},{"project_item_id":208,"item_name":"Biaya Cetak , Pemasangan dan Pembongkaran Umbul Umbul OUTLET - BANDUNG","quantity":"7.00","unit_price":"175000.00","tax":"0.00","total":"1225000.00"},{"project_item_id":209,"item_name":"Biaya Pengurusan Ijin Pemasangan Umbul-Umbul OUTLET - JABODETABEK","quantity":"1.00","unit_price":"2000000.00","tax":"0.00","total":"2000000.00"},{"project_item_id":210,"item_name":"Biaya Pengurusan Ijin Pemasangan Umbul-Umbul OUTLET - MEDAN","quantity":"1.00","unit_price":"1200000.00","tax":"0.00","total":"1200000.00"},{"project_item_id":211,"item_name":"Biaya Pengurusan Ijin Pemasangan Umbul-Umbul OUTLET - BANDUNG","quantity":"1.00","unit_price":"350000.00","tax":"0.00","total":"350000.00"}]',
                'proposal_file_path' => 'quotations/01KZ5WZGKHHB1CQJM31AKXFMHH.xlsx',
                'created_by' => 164,
                'created_at' => '2026-08-04 15:42:18',
            ),
            41 => 
            array (
                'id' => 52,
                'quotation_id' => 51,
                'version_number' => 1,
                'total_amount' => '3380000.00',
                'items_snapshot' => '[{"project_item_id":194,"item_name":"Scanner Epson workForce ES-50","quantity":"1.00","unit_price":"3380000.00","tax":"0.00","total":"3380000.00"}]',
                'proposal_file_path' => 'quotations/01KYP0JWRDQ2SEQZ7BBW4X56YF.pdf',
                'created_by' => 117,
                'created_at' => '2026-08-05 13:43:26',
            ),
            42 => 
            array (
                'id' => 53,
                'quotation_id' => 63,
                'version_number' => 1,
                'total_amount' => '256794986.00',
                'items_snapshot' => '[{"project_item_id":206,"item_name":"Biaya Cetak , Pemasangan dan Pembongkaran Umbul Umbul OUTLET - JABODETABEK","quantity":"126.00","unit_price":"175000.00","tax":"0.00","total":"22050000.00"},{"project_item_id":207,"item_name":"Biaya Cetak , Pemasangan dan Pembongkaran Umbul Umbul OUTLET - MEDAN","quantity":"7.00","unit_price":"175000.00","tax":"0.00","total":"1225000.00"},{"project_item_id":208,"item_name":"Biaya Cetak , Pemasangan dan Pembongkaran Umbul Umbul OUTLET - BANDUNG","quantity":"7.00","unit_price":"175000.00","tax":"0.00","total":"1225000.00"},{"project_item_id":209,"item_name":"Biaya Pengurusan Ijin Pemasangan Umbul-Umbul OUTLET - JABODETABEK","quantity":"1.00","unit_price":"206045000.00","tax":"0.00","total":"206045000.00"},{"project_item_id":210,"item_name":"Biaya Pengurusan Ijin Pemasangan Umbul-Umbul OUTLET - MEDAN","quantity":"1.00","unit_price":"11549986.00","tax":"0.00","total":"11549986.00"},{"project_item_id":211,"item_name":"Biaya Pengurusan Ijin Pemasangan Umbul-Umbul OUTLET - BANDUNG","quantity":"1.00","unit_price":"14700000.00","tax":"0.00","total":"14700000.00"}]',
                'proposal_file_path' => 'quotations/01KZ5WWY7JBN3ZNSYSAERC4NPS.pdf',
                'created_by' => 129,
                'created_at' => '2026-08-05 14:37:13',
            ),
            43 => 
            array (
                'id' => 54,
                'quotation_id' => 86,
                'version_number' => 1,
                'total_amount' => '12800000.00',
                'items_snapshot' => '[{"project_item_id":234,"item_name":"laptop","quantity":"1.00","unit_price":"12800000.00","tax":"0.00","total":"12800000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 117,
                'created_at' => '2026-08-13 13:11:27',
            ),
            44 => 
            array (
                'id' => 55,
                'quotation_id' => 87,
                'version_number' => 1,
                'total_amount' => '13600000.00',
                'items_snapshot' => '[{"project_item_id":234,"item_name":"laptop","quantity":"1.00","unit_price":"13600000.00","tax":"0.00","total":"13600000.00"}]',
                'proposal_file_path' => 'quotations/01KZWJXH5Q4Q1N8V4X23YADTJG.pdf',
                'created_by' => 156,
                'created_at' => '2026-08-13 16:08:01',
            ),
            45 => 
            array (
                'id' => 56,
                'quotation_id' => 85,
                'version_number' => 1,
                'total_amount' => '13400000.00',
                'items_snapshot' => '[{"project_item_id":234,"item_name":"laptop","quantity":"1.00","unit_price":"13400000.00","tax":"0.00","total":"13400000.00"}]',
                'proposal_file_path' => 'quotations/01KZWHYY8Q1RMZN0EXYQ8H9DFZ.pdf',
                'created_by' => 155,
                'created_at' => '2026-08-13 16:12:46',
            ),
            46 => 
            array (
                'id' => 57,
                'quotation_id' => 94,
                'version_number' => 1,
                'total_amount' => '19000000.00',
            'items_snapshot' => '[{"project_item_id":236,"item_name":"GEA Counter Top Cake Showcase RTW-100L-3CH","quantity":"1.00","unit_price":"6100000.00","tax":"0.00","total":"6100000.00"},{"project_item_id":237,"item_name":"GEA LP-12X1 Juice Dispenser (Kuning)","quantity":"1.00","unit_price":"7200000.00","tax":"0.00","total":"7200000.00"},{"project_item_id":238,"item_name":"MESIN CUP SEALER ICE CHOCO Getra SC-A90","quantity":"3.00","unit_price":"1900000.00","tax":"0.00","total":"5700000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 94,
                'created_at' => '2026-08-18 15:26:04',
            ),
            47 => 
            array (
                'id' => 58,
                'quotation_id' => 94,
                'version_number' => 2,
                'total_amount' => '19000000.00',
            'items_snapshot' => '[{"project_item_id":236,"item_name":"GEA Counter Top Cake Showcase RTW-100L-3CH","quantity":"1.00","unit_price":"6100000.00","tax":"0.00","total":"6100000.00"},{"project_item_id":237,"item_name":"GEA LP-12X1 Juice Dispenser (Kuning)","quantity":"1.00","unit_price":"7200000.00","tax":"0.00","total":"7200000.00"},{"project_item_id":238,"item_name":"MESIN CUP SEALER ICE CHOCO Getra SC-A90","quantity":"3.00","unit_price":"1900000.00","tax":"0.00","total":"5700000.00"}]',
                'proposal_file_path' => 'quotations/01M09ZYD9H6DFBC4YZZSG4XXAP.pdf',
                'created_by' => 94,
                'created_at' => '2026-08-19 10:13:48',
            ),
            48 => 
            array (
                'id' => 59,
                'quotation_id' => 116,
                'version_number' => 1,
                'total_amount' => '11341000.00',
                'items_snapshot' => '[{"project_item_id":266,"item_name":"ACRILLIC HS 18","quantity":"7.00","unit_price":"110000.00","tax":"0.00","total":"770000.00"},{"project_item_id":267,"item_name":"ACRILLIC HS 19","quantity":"7.00","unit_price":"110000.00","tax":"0.00","total":"770000.00"},{"project_item_id":268,"item_name":"ACRILLIC HS 20","quantity":"7.00","unit_price":"110000.00","tax":"0.00","total":"770000.00"},{"project_item_id":269,"item_name":"ACRILLIC HS 21","quantity":"7.00","unit_price":"110000.00","tax":"0.00","total":"770000.00"},{"project_item_id":270,"item_name":"ACRILLIC HS 22","quantity":"7.00","unit_price":"110000.00","tax":"0.00","total":"770000.00"},{"project_item_id":271,"item_name":"ACRILLIC HS 23","quantity":"7.00","unit_price":"110000.00","tax":"0.00","total":"770000.00"},{"project_item_id":272,"item_name":"ACRILLIC HS 1","quantity":"10.00","unit_price":"50000.00","tax":"0.00","total":"500000.00"},{"project_item_id":273,"item_name":"ACRILLIC HS 2","quantity":"10.00","unit_price":"65000.00","tax":"0.00","total":"650000.00"},{"project_item_id":274,"item_name":"ACRILLIC HS 3","quantity":"10.00","unit_price":"55000.00","tax":"0.00","total":"550000.00"},{"project_item_id":275,"item_name":"ACRILLIC HS 4","quantity":"8.00","unit_price":"42000.00","tax":"0.00","total":"336000.00"},{"project_item_id":276,"item_name":"ACRIILIC HS 5","quantity":"15.00","unit_price":"42000.00","tax":"0.00","total":"630000.00"},{"project_item_id":277,"item_name":"ACRIILIC HS 6","quantity":"10.00","unit_price":"65000.00","tax":"0.00","total":"650000.00"},{"project_item_id":278,"item_name":"ACRIILIC HS 7","quantity":"8.00","unit_price":"17000.00","tax":"0.00","total":"136000.00"},{"project_item_id":279,"item_name":"ACRIILIC HS 8","quantity":"8.00","unit_price":"20000.00","tax":"0.00","total":"160000.00"},{"project_item_id":280,"item_name":"ACRIILIC HS 9","quantity":"8.00","unit_price":"13000.00","tax":"0.00","total":"104000.00"},{"project_item_id":281,"item_name":"ACRIILIC HS 10","quantity":"15.00","unit_price":"27000.00","tax":"0.00","total":"405000.00"},{"project_item_id":282,"item_name":"ACRIILIC HS 11","quantity":"10.00","unit_price":"45000.00","tax":"0.00","total":"450000.00"},{"project_item_id":283,"item_name":"ACRIILIC HS 12","quantity":"8.00","unit_price":"20000.00","tax":"0.00","total":"160000.00"},{"project_item_id":284,"item_name":"ACRIILIC HS 13","quantity":"10.00","unit_price":"35000.00","tax":"0.00","total":"350000.00"},{"project_item_id":285,"item_name":"ACRIILIC HS 14","quantity":"10.00","unit_price":"42000.00","tax":"0.00","total":"420000.00"},{"project_item_id":286,"item_name":"ACRIILIC HS 15","quantity":"10.00","unit_price":"62000.00","tax":"0.00","total":"620000.00"},{"project_item_id":287,"item_name":"ACRIILIC HS 16","quantity":"10.00","unit_price":"40000.00","tax":"0.00","total":"400000.00"},{"project_item_id":288,"item_name":"ACRIILIC HS 17","quantity":"10.00","unit_price":"20000.00","tax":"0.00","total":"200000.00"}]',
                'proposal_file_path' => 'quotations/01M0SBBE1N0JS0ZKQK230MKWV7.pdf',
                'created_by' => 124,
                'created_at' => '2026-08-24 15:40:25',
            ),
            49 => 
            array (
                'id' => 60,
                'quotation_id' => 132,
                'version_number' => 1,
                'total_amount' => '9320000.00',
                'items_snapshot' => '[{"project_item_id":337,"item_name":"Telur","quantity":"400.00","unit_price":"23300.00","tax":"0.00","total":"9320000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 62,
                'created_at' => '2026-08-28 14:29:27',
            ),
            50 => 
            array (
                'id' => 61,
                'quotation_id' => 135,
                'version_number' => 1,
                'total_amount' => '20520000.00',
                'items_snapshot' => '[{"project_item_id":244,"item_name":"EGG WHOLE","quantity":"900.00","unit_price":"22800.00","tax":"0.00","total":"20520000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 62,
                'created_at' => '2026-08-28 14:36:28',
            ),
            51 => 
            array (
                'id' => 62,
                'quotation_id' => 136,
                'version_number' => 1,
                'total_amount' => '62829440.00',
                'items_snapshot' => '[{"project_item_id":306,"item_name":"BOX FULL MIKA D 11,2 x 7,8 x 8,5 cm","quantity":"3190.00","unit_price":"7200.00","tax":"0.00","total":"22968000.00"},{"project_item_id":307,"item_name":"Box Full Mika E 8,5 X 8,5 X 17,5 CM","quantity":"1776.00","unit_price":"11690.00","tax":"0.00","total":"20761440.00"},{"project_item_id":308,"item_name":"BOX FULL MIKA B 18 x 13 x 6cm","quantity":"2000.00","unit_price":"9550.00","tax":"0.00","total":"19100000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 134,
                'created_at' => '2026-09-01 13:36:12',
            ),
            52 => 
            array (
                'id' => 63,
                'quotation_id' => 137,
                'version_number' => 1,
                'total_amount' => '42007350.00',
                'items_snapshot' => '[{"project_item_id":295,"item_name":" Sekat 28 ","quantity":"763.00","unit_price":"18450.00","tax":"0.00","total":"14077350.00"},{"project_item_id":296,"item_name":" Sekat 12 ","quantity":"2280.00","unit_price":"12250.00","tax":"0.00","total":"27930000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 134,
                'created_at' => '2026-09-01 14:47:34',
            ),
            53 => 
            array (
                'id' => 64,
                'quotation_id' => 136,
                'version_number' => 2,
                'total_amount' => '59358200.00',
                'items_snapshot' => '[{"project_item_id":306,"item_name":"BOX FULL MIKA D 11,2 x 7,8 x 8,5 cm","quantity":"3190.00","unit_price":"6900.00","tax":"0.00","total":"22011000.00"},{"project_item_id":307,"item_name":"Box Full Mika E 8,5 X 8,5 X 17,5 CM","quantity":"1776.00","unit_price":"10950.00","tax":"0.00","total":"19447200.00"},{"project_item_id":308,"item_name":"BOX FULL MIKA B 18 x 13 x 6cm","quantity":"2000.00","unit_price":"8950.00","tax":"0.00","total":"17900000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 134,
                'created_at' => '2026-09-01 16:23:44',
            ),
            54 => 
            array (
                'id' => 65,
                'quotation_id' => 151,
                'version_number' => 1,
                'total_amount' => '2575000.00',
                'items_snapshot' => '[{"project_item_id":346,"item_name":"Acrylic HSW A 2026","quantity":"25.00","unit_price":"77000.00","tax":"0.00","total":"1925000.00"},{"project_item_id":347,"item_name":"Acrylic HSW B 2026","quantity":"10.00","unit_price":"45000.00","tax":"0.00","total":"450000.00"},{"project_item_id":348,"item_name":"Acrylic HSW C 2026","quantity":"10.00","unit_price":"20000.00","tax":"0.00","total":"200000.00"}]',
                'proposal_file_path' => 'quotations/01M1DZVJ6EF0KBG9FFYNF267FB.pdf',
                'created_by' => 124,
                'created_at' => '2026-09-02 09:59:39',
            ),
            55 => 
            array (
                'id' => 66,
                'quotation_id' => 145,
                'version_number' => 1,
                'total_amount' => '42130800.00',
                'items_snapshot' => '[{"project_item_id":295,"item_name":" Sekat 28 ","quantity":"763.00","unit_price":"21600.00","tax":"0.00","total":"16480800.00"},{"project_item_id":296,"item_name":" Sekat 12 ","quantity":"2280.00","unit_price":"11250.00","tax":"0.00","total":"25650000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 102,
                'created_at' => '2026-09-02 12:04:05',
            ),
            56 => 
            array (
                'id' => 67,
                'quotation_id' => 160,
                'version_number' => 1,
                'total_amount' => '7200000.00',
                'items_snapshot' => '[{"project_item_id":351,"item_name":" AC GREE 2 PK ","quantity":"1.00","unit_price":"7200000.00","tax":"0.00","total":"7200000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 25,
                'created_at' => '2026-09-02 15:36:12',
            ),
            57 => 
            array (
                'id' => 68,
                'quotation_id' => 160,
                'version_number' => 2,
                'total_amount' => '7200000.00',
                'items_snapshot' => '[{"project_item_id":351,"item_name":" AC GREE 2 PK ","quantity":"1.00","unit_price":"7200000.00","tax":"0.00","total":"7200000.00"}]',
                'proposal_file_path' => 'quotations/01M1GM6KHKFW4NXG3ADXXD91PK.pdf',
                'created_by' => 25,
                'created_at' => '2026-09-02 15:38:37',
            ),
            58 => 
            array (
                'id' => 69,
                'quotation_id' => 158,
                'version_number' => 1,
                'total_amount' => '2700000.00',
                'items_snapshot' => '[{"project_item_id":361,"item_name":"Ring Haci Ukuran Tinggi = 4 cm, Diameter = 9 cm","quantity":"100.00","unit_price":"27000.00","tax":"0.00","total":"2700000.00"}]',
                'proposal_file_path' => 'quotations/01M1GGMRCC0CRNDX9W1FW6VNHJ.pdf',
                'created_by' => 107,
                'created_at' => '2026-09-02 15:58:30',
            ),
            59 => 
            array (
                'id' => 70,
                'quotation_id' => 155,
                'version_number' => 1,
                'total_amount' => '29705000.00',
                'items_snapshot' => '[{"project_item_id":357,"item_name":"Sekat Dalam Exclusive ","quantity":"288.00","unit_price":"21000.00","tax":"0.00","total":"6048000.00"},{"project_item_id":358,"item_name":"SEKAT DALAM  GRAND","quantity":"515.00","unit_price":"20000.00","tax":"0.00","total":"10300000.00"},{"project_item_id":359,"item_name":"SEKAT DALAM MEDIUM","quantity":"703.00","unit_price":"19000.00","tax":"0.00","total":"13357000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 186,
                'created_at' => '2026-09-02 16:42:20',
            ),
            60 => 
            array (
                'id' => 71,
                'quotation_id' => 155,
                'version_number' => 2,
                'total_amount' => '29705000.00',
                'items_snapshot' => '[{"project_item_id":357,"item_name":"Sekat Dalam Exclusive ","quantity":"288.00","unit_price":"21000.00","tax":"0.00","total":"6048000.00"},{"project_item_id":358,"item_name":"SEKAT DALAM  GRAND","quantity":"515.00","unit_price":"20000.00","tax":"0.00","total":"10300000.00"},{"project_item_id":359,"item_name":"SEKAT DALAM MEDIUM","quantity":"703.00","unit_price":"19000.00","tax":"0.00","total":"13357000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 186,
                'created_at' => '2026-09-02 17:13:24',
            ),
            61 => 
            array (
                'id' => 72,
                'quotation_id' => 155,
                'version_number' => 3,
                'total_amount' => '28199000.00',
                'items_snapshot' => '[{"project_item_id":357,"item_name":"Sekat Dalam Exclusive ","quantity":"288.00","unit_price":"20000.00","tax":"0.00","total":"5760000.00"},{"project_item_id":358,"item_name":"SEKAT DALAM  GRAND","quantity":"515.00","unit_price":"19000.00","tax":"0.00","total":"9785000.00"},{"project_item_id":359,"item_name":"SEKAT DALAM MEDIUM","quantity":"703.00","unit_price":"18000.00","tax":"0.00","total":"12654000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 186,
                'created_at' => '2026-09-03 16:55:25',
            ),
            62 => 
            array (
                'id' => 73,
                'quotation_id' => 169,
                'version_number' => 1,
                'total_amount' => '17138000.00',
                'items_snapshot' => '[{"project_item_id":368,"item_name":"AC Gree Inverter 2PK GWC-18F5S R32","quantity":"2.00","unit_price":"8569000.00","tax":"0.00","total":"17138000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 25,
                'created_at' => '2026-09-03 17:03:48',
            ),
            63 => 
            array (
                'id' => 74,
                'quotation_id' => 164,
                'version_number' => 1,
                'total_amount' => '1368276000.00',
                'items_snapshot' => '[{"project_item_id":365,"item_name":"Toples Nuai 278","quantity":"1200.00","unit_price":"45000.00","tax":"0.00","total":"54000000.00"},{"project_item_id":366,"item_name":"Toples Hardtop 820","quantity":"1596.00","unit_price":"58000.00","tax":"0.00","total":"92568000.00"},{"project_item_id":367,"item_name":"Toples Easy Top 212","quantity":"20028.00","unit_price":"61000.00","tax":"0.00","total":"1221708000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 115,
                'created_at' => '2026-09-04 10:41:13',
            ),
            64 => 
            array (
                'id' => 75,
                'quotation_id' => 143,
                'version_number' => 1,
                'total_amount' => '42600000.00',
            'items_snapshot' => '[{"project_item_id":342,"item_name":"GEA Counter Top Cake Showcase RTW-100L-3CH","quantity":"4.00","unit_price":"6100000.00","tax":"0.00","total":"24400000.00"},{"project_item_id":343,"item_name":"GEA LP-12X1 Juice Dispenser (Kuning)","quantity":"2.00","unit_price":"7200000.00","tax":"0.00","total":"14400000.00"},{"project_item_id":344,"item_name":"MESIN CUP SEALER ICE CHOCO Getra SC-A90","quantity":"2.00","unit_price":"1900000.00","tax":"0.00","total":"3800000.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 94,
                'created_at' => '2026-09-04 16:29:18',
            ),
            65 => 
            array (
                'id' => 76,
                'quotation_id' => 184,
                'version_number' => 1,
                'total_amount' => '6800000.00',
                'items_snapshot' => '[{"project_item_id":374,"item_name":"Mini PC 8\\/256 GB","quantity":"1.00","unit_price":"6800000.00","tax":"0.00","total":"6800000.00"}]',
                'proposal_file_path' => 'quotations/01M1X3PAPXK690ZGH50AVK7AZ9.pdf',
                'created_by' => 155,
                'created_at' => '2026-09-07 15:29:18',
            ),
            66 => 
            array (
                'id' => 77,
                'quotation_id' => 159,
                'version_number' => 1,
                'total_amount' => '34561600.00',
                'items_snapshot' => '[{"project_item_id":354,"item_name":" Tabung Seng 8.3 X 16 CM ","quantity":"4095.00","unit_price":"4500.00","tax":"0.00","total":"18427500.00"},{"project_item_id":355,"item_name":" Tabung 8.3 X 14 cm ","quantity":"3043.00","unit_price":"4000.00","tax":"0.00","total":"12172000.00"},{"project_item_id":356,"item_name":" Tabung 8.3 X 23 cm ","quantity":"843.00","unit_price":"4700.00","tax":"0.00","total":"3962100.00"}]',
                'proposal_file_path' => NULL,
                'created_by' => 176,
                'created_at' => '2026-09-07 15:36:24',
            ),
            67 => 
            array (
                'id' => 78,
                'quotation_id' => 172,
                'version_number' => 1,
                'total_amount' => '33314300.00',
                'items_snapshot' => '[{"project_item_id":363,"item_name":"PEKERJAAN RENOVASI \\/ PARTISI K3 41 TEKNO","quantity":"1.00","unit_price":"33314300.00","tax":"0.00","total":"33314300.00"}]',
                'proposal_file_path' => 'quotations/01M1N8N2V05XVJMS9HZNVPS3FC.pdf',
                'created_by' => 74,
                'created_at' => '2026-09-07 17:27:38',
            ),
            68 => 
            array (
                'id' => 79,
                'quotation_id' => 169,
                'version_number' => 2,
                'total_amount' => '16718000.00',
                'items_snapshot' => '[{"project_item_id":368,"item_name":"AC Gree Inverter 2PK GWC-18F5S R32","quantity":"2.00","unit_price":"8359000.00","tax":"0.00","total":"16718000.00"}]',
                'proposal_file_path' => 'quotations/01M1KBM6GZGGQH42QRTSBHF52C.pdf',
                'created_by' => 25,
                'created_at' => '2026-09-08 10:30:22',
            ),
        ));
        
        
    }
}