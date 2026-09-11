<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    public function run(): void
    {
        $banks = [
            // ==========================================
            // BANK UMUM PERSERO
            // ==========================================
            [
                'category' => 'BANK UMUM PERSERO',
                'name' => 'PT BANK RAKYAT INDONESIA (PERSERO) Tbk',
                'address' => 'Jl. Jend. Sudirman Kav. 44-46, Jakarta 10210',
                'phone' => '(021) 2510244, 2510254, 2510269-264, 2510279',
                'website' => 'www.bri.co.id'
            ],
            [
                'category' => 'BANK UMUM PERSERO',
                'name' => 'PT BANK MANDIRI (PERSERO) Tbk',
                'address' => 'Menara Mandiri 1 Jalan Jenderal Sudirman Kav 54-55 Jakarta 12190 Indonesia',
                'phone' => '(021) 52997777',
                'website' => 'www.bankmandiri.co.id'
            ],
            [
                'category' => 'BANK UMUM PERSERO',
                'name' => 'PT BANK NEGARA INDONESIA (PERSERO) Tbk',
                'address' => 'Gedung Grha BNI Jl. Jend. Sudirman Kav. 1, Jakarta 10220',
                'phone' => '(021) 2511946, 5728387',
                'website' => 'www.bni.co.id'
            ],
            [
                'category' => 'BANK UMUM PERSERO',
                'name' => 'PT BANK TABUNGAN NEGARA (PERSERO) Tbk',
                'address' => 'Gedung Menara BTN, Jl. Gajah Mada No. 1, Jakarta 10130',
                'phone' => '(021) 1500286',
                'website' => 'www.btn.co.id'
            ],

            // ==========================================
            // BANK UMUM SWASTA NASIONAL
            // ==========================================
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK DANAMON INDONESIA Tbk',
                'address' => 'Menara Bank Danamon, Jl. HR. Rasuna Said Blok C No. 10, Karet Setiabudi, Jakarta Selatan 12920',
                'phone' => '(021) 80645000',
                'website' => 'www.danamon.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK PERMATA Tbk',
                'address' => 'Gedung World Trade Center II (WTC II) Lt.21-30, Jl. Jend. Sudirman Kav. 29 - 31, Setia Budi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12920.',
                'phone' => '(021) 5237788',
                'website' => 'www.permatabank.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK CENTRAL ASIA Tbk',
                'address' => 'Menara BCA, Grand Indonesia, Lt. 23 Jl. M.H Thamrin No. 1, Jakarta 10310',
                'phone' => '(021) 2358-8000',
                'website' => 'www.bca.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MAYBANK INDONESIA Tbk',
                'address' => 'Gedung Sentral Senayan 3, Lt. 26, Jl. Asia Afrika No. 8, Gelora Bung Karno - Senayan, Jakarta Pusat 10270',
                'phone' => '(021) 29228888',
                'website' => 'www.maybank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK PAN INDONESIA Tbk',
                'address' => 'Panin Bank Centre, Jl. Jend. Sudirman Kav. 1 (Senayan), Jakarta 10270',
                'phone' => '(021) 2700545, 5735555',
                'website' => 'www.panin.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK CIMB NIAGA Tbk',
                'address' => 'Graha Niaga / Niaga Tower Jl. Jend. Sudirman Kav. 58, Jakarta 12190',
                'phone' => '(021) 2505252, 2505353',
                'website' => 'www.cimbniaga.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK UOB INDONESIA',
                'address' => 'Gedung UOB Plaza, Jl. M.H. Thamrin No. 10 Jakarta 10230',
                'phone' => '(021) 2350 6000',
                'website' => 'www.uob.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK OCBC NISP Tbk',
                'address' => 'OCBC NISP Tower, Jl. Prof.Dr. Satrio Kav. 25, Jakarta Selatan 12940',
                'phone' => '(021) 25533888',
                'website' => 'www.ocbc.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK ARTHA GRAHA INTERNASIONAL Tbk',
                'address' => 'Gedung Arha Graha, Lt. 5, Jl. Sudirman Kav. 52-53, Senayan, Jakarta 12190',
                'phone' => '(021) 5152168',
                'website' => 'www.arthagraha.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK BUMI ARTA Tbk',
                'address' => 'Jl. KH. Wahid Hasyim No. 234-236, Jakarta 10250',
                'phone' => '(021) 2300893, 2300455',
                'website' => 'www.bankbba.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK HSBC INDONESIA',
                'address' => 'World Trade Centre 3, Lantai 9 Jl. Jendral Sudirman Kav. 29-31 Jakarta 12920 Indonesia',
                'phone' => '(021) 25514777',
                'website' => 'www.hsbc.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK JTRUST INDONESIA Tbk',
                'address' => 'Gedung Sahid Sudirman Center Lt. 33 Jl. Sudirman No. 86, Jakarta Pusat 10220',
                'phone' => '(021) 29261111',
                'website' => 'www.jtrustbank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MAYAPADA INTERNATIONAL Tbk',
                'address' => 'Mayapada Tower 1, Jl. Jend. Sudirman Kav. 28, Jakarta 12920.',
                'phone' => '(021) 5212288, 5212300',
                'website' => 'www.bankmayapada.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK OF INDIA INDONESIA Tbk',
                'address' => 'Jl. H. Samanhudi No. 37, Pasar Baru, Sawah Besar, Jakarta Pusat 10710',
                'phone' => '(021) 3500007',
                'website' => 'www.boiindonesia.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MUAMALAT INDONESIA Tbk',
                'address' => 'Gedung Muamalat Tower, Jl. Prof. Dr. Satrio Kav. 18, Kelurahan Karet Kuningan, Kecamatan Setiabudi Kota Administrasi Jakarta Selatan, Provinsi DKI Jakarta, 12940',
                'phone' => '(021) 80666000',
                'website' => 'www.bankmuamalat.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MESTIKA DHARMA Tbk',
                'address' => 'Jl. Zainul Arifin 118, Medan 20112',
                'phone' => '(061) 4525800',
                'website' => 'www.bankmestika.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SHINHAN INDONESIA',
                'address' => 'Ged. International Financial Centre (IFC) Tower 2 Lt. Dasar, Mezzanine, 30-32 Jl. Jend. Sudirman Kav. 22-23 Jakarta Selatan 12920',
                'phone' => '(021) 29751500, 29751623, 29751632',
                'website' => 'www.shinhan.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SINARMAS Tbk',
                'address' => 'Sinarmas Land Plaza, Menara I, Lt. 1 & 2 Jl. MH. Thamrin Kav. 51, Jakarta 10350',
                'phone' => '(021) 31990101',
                'website' => 'www.banksinarmas.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MASPION INDONESIA Tbk',
                'address' => 'Tunjungan Plaza 6 Lt. 32 & 33 Jl. Embong Malang No. 21-31 Kel Kedungdoro, Kec. Tegalsari Surabaya 60261',
                'phone' => '031-98588789',
                'website' => 'www.bankmaspion.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK GANESHA Tbk',
                'address' => 'Wisma Hayam Wuruk Lt.1 & 2, Jl. Hayam Wuruk No. 8, Jakarta Pusat 10120',
                'phone' => '(021) 29109900',
                'website' => 'www.bankganesha.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK ICBC INDONESIA',
                'address' => 'ICBC Tower Lt. 32, Jl. M.H. Thamrin No. 81, Jakarta Pusat 10310',
                'phone' => '021-23556000',
                'website' => 'www.icbc.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK QNB INDONESIA Tbk',
                'address' => 'Revenue Tower District 8 Lt.8, SCBD Lot 13, Jl. Jend. Sudirman Kav. 52-53 Jakarta 12190',
                'phone' => '(021) 5155155',
                'website' => 'www.qnb.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK WOORI SAUDARA INDONESIA 1906 Tbk',
                'address' => 'Treasury Tower Lt. 26, 27 & 38 SCBD, Jl. Jend. Sudirman No. 52-53, Senayan, Kebayoran Baru, Jakarta Selatan',
                'phone' => '(021) 50871906',
                'website' => 'www.bankwoorisaudara.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MEGA Tbk',
                'address' => 'Menara Bank Mega Lt.15, Jl. Kapten Tendean Kav. 12-14 A, Jakarta 12790',
                'phone' => '(021) 7917500',
                'website' => 'www.bankmega.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK KB INDONESIA Tbk',
                'address' => 'Gedung KB Bank Jl. MT. Haryono Kav. 50-51, Jakarta 12770',
                'phone' => '(021) 7988266',
                'website' => 'www.kbbank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SYARIAH INDONESIA Tbk',
                'address' => 'Gedung The Tower, Jl. Gatot Subroto No.27 Kel. Karet Semanggi, Kec. Setiabudi, Jakarta Selatan 12930',
                'phone' => '(021) 30405999',
                'website' => 'www.bankbsi.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK KEB HANA INDONESIA',
                'address' => 'Mangkuluhur City Tower One Lantai GF, Jl. Jend. Gatot Subroto Kav. 1-3 Kel. Karet Semanggi, Jakarta Selatan 12930',
                'phone' => '(021) 5220222, 50811111',
                'website' => 'www.hanabank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MNC INTERNASIONAL Tbk',
                'address' => 'MNC Bank Tower, JI. Kebon Sirih No. 21-27, Kb. Sirih, Kec. Menteng, Jakarta Pusat, DKI Jakarta 10340',
                'phone' => '(021) 29805588',
                'website' => 'www.mncbank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK RAYA INDONESIA Tbk',
                'address' => 'Gedung Menara BRILiaN, Lantai 20, Jalan Gatot Subroto No.117A, Menteng Dalam, Tebet, Jakarta Selatan. 12870',
                'phone' => '(021) 50931300',
                'website' => 'www.bankraya.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SBI INDONESIA',
                'address' => 'Gedung Graha Mandiri Lantai 11, 15 & 24 Jl. Imam Bonjol No.61 Kota Adm. Jakarta Pusat, DKI Jakarta.',
                'phone' => '(021) 39838747',
                'website' => 'www.sbiindo.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MEGA SYARIAH',
                'address' => 'Menara Mega Syariah, Jl. HR Rasuna Said Kav. 19A, Jakarta 12950',
                'phone' => '(021) 29852000',
                'website' => 'www.megasyariah.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK INDEX SELINDO',
                'address' => 'Plaza Bank Index Jl. M. H. Thamrin No. 57 Jakarta Pusat 10350',
                'phone' => '(021) 3922328',
                'website' => 'www.bankindex.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK HIBANK INDONESIA',
                'address' => 'Rajawali Place Lantai 22-23 Jl. H. R. Rasuna Said Kav. B4, Setiabudi, Kecamatan Setiabudi, Jakarta Selatan 12910',
                'phone' => '(021) 86657888, 86657899',
                'website' => 'www.hibank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK CHINA CONSTRUCTION BANK INDONESIA Tbk',
                'address' => 'Gedung Perkantoran sahid Sudirman Center Lt. 15, Jl. Jenderal Sudirman Kav. 86, Jakarta Pusat 10220',
                'phone' => '(021) 50821000',
                'website' => 'https://bankccbi.co.id/'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK DBS INDONESIA',
                'address' => 'DBS Bank Tower, Lobby Level Lt 31-37 Ciputra World 1, Jl. Prof. Dr. Satrio Kav 3-5 Jakarta 12940',
                'phone' => '(021) 29885000',
                'website' => 'www.dbs.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK RESONA PERDANIA',
                'address' => 'Jakarta Mori Tower Lantai 30, 31, dan 32 Jl. Jend. Sudirman Kav. 40-41 Bendungan Hilir, Tanah Abang, Jakarta Pusat 10210',
                'phone' => '(021) 5701958',
                'website' => 'www.perdania.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MIZUHO INDONESIA',
                'address' => 'Menara Astra, Lantai 53, Jl. Jend. Sudirman Kav. 5-6, Jakarta 10220',
                'phone' => '(021) 50910888',
                'website' => 'www.mizuhobank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK CAPITAL INDONESIA Tbk',
                'address' => 'Gedung Menara Jamsostek Lt.1 dan Lt. 6, Jl. Gatot Subroto No. 38 Jakarta Selatan 12710.',
                'phone' => '(021) 27938989',
                'website' => 'www.bankcapital.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK BNP PARIBAS INDONESIA',
                'address' => 'Sequis Tower Lt.28, SCBD Lot 11B Jl. Jenderal Sudirman Kav.71 Jakarta 12190',
                'phone' => '(021) 50814789',
                'website' => 'www.bnpparibas.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK ANZ INDONESIA',
                'address' => 'World Trade Centre 3, Lt.31 Jl. Jend. Sudirman Kav.29-31, Karet Kuningan, Setiabudi, Jakarta Selatan 12920',
                'phone' => '(021) 5750300',
                'website' => 'www.anz.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK IBK INDONESIA Tbk',
                'address' => 'Wisma GKBI Suites-UG01 Jl. Jendral Sudirman No. 28, Jakarta',
                'phone' => '021-57908888',
                'website' => 'www.ibk.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK ALADIN SYARIAH Tbk',
                'address' => 'Millennium Centennial Center Lt 7, Jl. Jendral Sudirman Kav. 25 Jakarta 12920',
                'phone' => '(021) 85500947',
                'website' => 'www.aladinbank.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK CTBC INDONESIA',
                'address' => 'Tamara Center Lt. 15-17, Jl. Jend. Sudirman Kav. 24, Jakarta 12920',
                'phone' => '(021) 25578787',
                'website' => 'www.ctbcbank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SMBC INDONESIA, Tbk',
                'address' => 'Menara SMBC - CBD Mega Kuningan, Jl. Dr. Ide Anak Agung Gde Agung Kav. 5,5 - 5,6 Jakarta Selatan 12950',
                'phone' => '(021) 30026200',
                'website' => 'www.smbci.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK NANO SYARIAH',
                'address' => 'Jl. Teuku Cik Ditiro No.29, Menteng, Jakarta Pusat 10310',
                'phone' => '(021) 392 3329',
                'website' => 'www.nanobanksyariah.id/'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SYARIAH NASIONAL',
                'address' => 'Menara Bank BTN lt. 11, Jl. Gajah Mada No. 1 Jakarta Pusat 10130',
                'phone' => '(021) - 6310800',
                'website' => 'www.bankbsn.co.id/'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK JABAR BANTEN SYARIAH',
                'address' => 'Jl. Braga No. 135 Bandung 40117',
                'phone' => '022-4202599',
                'website' => 'www.bjbsyariah.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT KROM BANK INDONESIA Tbk',
                'address' => 'Gedung Dipo Tower, Lantai 9, Jl. Gatot Subroto Kav. 50-52 Petamburan, Kecamatan Tanah Abang, Jakarta Pusat, DKI Jakarta 10260',
                'phone' => '(021) 50996920',
                'website' => 'www.krom.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SAQU INDONESIA',
                'address' => 'Jl. Tiang Bendera III No. 26-32, Jakarta 11230',
                'phone' => '(021) 6902611, 6906950',
                'website' => 'www.banksaqu.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK NEO COMMERCE Tbk',
                'address' => 'Treasury Tower Lt.60, District 8 SCBD Lot 28, Jl Jendral Sudirman Kav 52-53, Jakarta Selatan',
                'phone' => '(021) 27094950, 27094951',
                'website' => 'www.bankneocommerce.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK DIGITAL BCA',
                'address' => 'Gedung The City Tower (TCT) Lt.11 Jl. MH. Thamrin No.81 Kel. Dukuh Atas, Kec. Menteng Jakarta Pusat',
                'phone' => '(021) 50848010',
                'website' => 'www.bcadigital.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK NATIONALNOBU Tbk',
                'address' => 'Gedung Graha Nobu JI. Boulevard, Diponegoro Nomor 101 Bencongan lndah, Kelapa Dua Kabupaten Tangerang 15810',
                'phone' => '(021) 59990000',
                'website' => 'www.nobubank.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK INA PERDANA Tbk',
                'address' => 'Gedung Ariobimo Sentral, Mezzanine Floor, Jl. H.R. Rasuna Said Blok X-2 Kav 5, Jakarta Selatan 12950',
                'phone' => '(021) 2525678',
                'website' => 'www.bankina.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK PANIN DUBAI SYARIAH Tbk',
                'address' => 'Gd.Panin Life Centre, Jl. Letjend S. Parman Kav 91 Jakarta 11420',
                'phone' => '(021) 56956100',
                'website' => 'www.pdsb.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK KB BUKOPIN SYARIAH',
                'address' => 'Jalan Salemba Raya Nomor 55, Jakarta Pusat 10440',
                'phone' => '(021) 2300912',
                'website' => 'www.kbbukopinsyariah.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SAHABAT SAMPOERNA',
                'address' => 'Gedung Sampoerna Strategic Square Menara Utara, Lt. Mezzanine Jl. Jend. Sudirman Kav 45 Jakarta',
                'phone' => '(021) 57951234',
                'website' => 'www.banksampoerna.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK OKE INDONESIA Tbk',
                'address' => 'Jl. Ir. H. Juanda No. 12, Jakarta 10120',
                'phone' => '(021) 2312633',
                'website' => 'www.okbank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK AMAR INDONESIA',
                'address' => 'RDTX Square Lt.11, Jl. Prof. DR. Satrio No.164, RT.4/RW.4, Karet Semanggi, Setiabudi, Kota Jakarta Selatan 12930',
                'phone' => '(021) 3021-0700',
                'website' => 'www.amarbank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK SEABANK INDONESIA',
                'address' => 'GAMA Tower lantai 35 JI. H.R. Rasuna Said No.2, Karet Kuningan, Jakarta Selatan 12940',
                'phone' => '(021) 50995103',
                'website' => 'www.seabank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK BCA SYARIAH',
                'address' => 'Jl. Jatinegara Timur No. 72, Jakarta 13310',
                'phone' => '(021) 8190072, 8505030, 8505035',
                'website' => 'www.bcasyariah.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK JAGO TBK',
                'address' => 'Menara SMBC Lt. 46 Jl. Dr. Ide Anak Agung Gde Agung Kav.5,5-5,6 Jakarta Selatan 12950 Kota Adm. Jakarta Selatan DKI Jakarta',
                'phone' => '(021) 50927460, 50927490',
                'website' => 'www.jago.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK BTPN SYARIAH Tbk',
                'address' => 'Menara SMBC Lt. 12 CBD Mega Kuningan, Jl. Dr. Ide Anak Agung Gde Agung Kav. 5.5-5.6 Kel. Kuningan Timur, Jakarta Selatan',
                'phone' => '(021) 30026400',
                'website' => 'www.btpnsyariah.com'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MULTIARTA SENTOSA',
                'address' => 'Graha Bank MAS Lt. 3, Jl. Setiabudi Selatan Kav. 7-8, Jakarta Selatan',
                'phone' => '(021) 5790 6006',
                'website' => 'www.bankmas.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT SUPER BANK INDONESIA',
                'address' => 'Revenue Tower Lt. 28 dan Lt. 29 SCBD, Lot 13, District 8 Jl. Jend. Sudirman Kav. 52-53 Jakarta.',
                'phone' => '(021) 50155550',
                'website' => 'www.superbank.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK MANDIRI TASPEN',
                'address' => 'Graha Mantap Jl. Proklamasi No.31 Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10330',
                'phone' => '(021) 21231772',
                'website' => 'www.bankmandiritaspen.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT BANK VICTORIA INTERNATIONAL Tbk',
                'address' => 'Gedung Graha BIP Lt.10 Jl. Gatot Subroto Kav. 23 Karet Semanggi, Setiabudi Jakarta Selatan 12930',
                'phone' => '(021) 5228888',
                'website' => 'www.victoriabank.co.id'
            ],
            [
                'category' => 'BANK UMUM SWASTA NASIONAL',
                'name' => 'PT ALLO BANK INDONESIA Tbk',
                'address' => 'Menara Bank Mega Lt5 dan 6, Jl. Kapten Tendean Kav. 12-14 A, Jakarta 12790',
                'phone' => '021-7990671, 021-79184705, 021-79182387',
                'website' => 'www.allobank.com'
            ],

            // ==========================================
            // BANK PEMBANGUNAN DAERAH
            // ==========================================
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD JAWA BARAT DAN BANTEN Tbk',
                'address' => 'Jl. Naripan No. 12 - 14, Bandung 40111',
                'phone' => '(022) 4234868, 4230223',
                'website' => 'www.bankbjb.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD DKI',
                'address' => 'Gedung Prasada Sasana Karya Jl. Suryopranoto No.8 Jakarta Pusat 10130',
                'phone' => '(021) 806 55555',
                'website' => 'www.bankdki.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD DAERAH ISTIMEWA YOGYAKARTA',
                'address' => 'Jl. Tentara Pelajar No. 7, Yogyakarta',
                'phone' => '(0274) 561614',
                'website' => 'www.bpddiy.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD JAWA TENGAH',
                'address' => 'Gedung Grinatha Lt.1-7 Jl. Pemuda No. 142, Semarang, Jawa Tengah 50132',
                'phone' => '(024) 3547541, 3554025',
                'website' => 'www.bankjateng.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD JAWA TIMUR Tbk',
                'address' => 'Jl. Basuki Rahmat No. 98-104, Surabaya',
                'phone' => '(031) 5310090-99',
                'website' => 'www.bankjatim.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD JAMBI',
                'address' => 'Jl. Jend. A. Yani No. 18, Telanaipura, Jambi',
                'phone' => '(0741) 60665, 60416',
                'website' => 'www.bankjambi.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BANK ACEH SYARIAH',
                'address' => 'Jl. Mr. Mohd. Hasan No. 89 Batoh, Lamcot, Kec. Darul Imarah, Kota Banda Aceh, Provinsi Aceh - 23245.',
                'phone' => '(0651) 22966 (hunting)',
                'website' => 'www.bankaceh.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD SUMATERA UTARA',
                'address' => 'Jl. Imam Bonjol No. 18, Medan 20152',
                'phone' => '(061) 4155100',
                'website' => 'www.banksumut.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BANK NAGARI',
                'address' => 'Jl. Pemuda No. 21, Padang 25117',
                'phone' => '(0751) 25055, 31577, 31578, 34115',
                'website' => 'www.banknagari.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD RIAU KEPRI SYARIAH',
                'address' => 'Menara Dang Merdu BRK, Jl. Jend. Sudirman No. 462, Kota Pekanbaru',
                'phone' => '(0761) 47070',
                'website' => 'www.brksyariah.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD SUMATERA SELATAN DAN BANGKA BELITUNG',
                'address' => 'Jl. Gubernur H. Ahmad Bastari No. 07 Kel. Silaberanti Kec. Seberang Ulu I Jakabaring Palembang',
                'phone' => '(0711) 5228080',
                'website' => 'www.banksumselbabel.com'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD LAMPUNG',
                'address' => 'Jl. Wolter Monginsidi No. 182, Teluk Betung, Bandar Lampung 35211',
                'phone' => '(0721) 487175',
                'website' => 'www.banklampung.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD KALIMANTAN SELATAN',
                'address' => 'Jl. Lambung Mangkurat No. 7, Banjarmasin 70111',
                'phone' => '(0511) 3350725',
                'website' => 'www.bankkalsel.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD KALIMANTAN BARAT',
                'address' => 'Jl. Rahadi Usman No. 10, Pontianak 78117',
                'phone' => '(0561) 732148, 736723',
                'website' => 'www.bankkalbar.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD KALIMANTAN TIMUR DAN KALIMANTAN UTARA',
                'address' => 'Jl. Jend. Sudirman No. 33, Samarinda',
                'phone' => '(0541) 735500, 739562-67',
                'website' => 'www.bankaltimtara.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD KALIMANTAN TENGAH',
                'address' => 'Jl. RTA Milono No. 12, Palangka Raya 73111',
                'phone' => '(0536) 3225602',
                'website' => 'www.bankkalteng.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD SULAWESI SELATAN DAN SULAWESI BARAT',
                'address' => 'Jl. Dr. Sam Ratulangi No. 16, Makassar 90125',
                'phone' => '(0411) 859171',
                'website' => 'www.banksulselbar.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD SULAWESI UTARA DAN GORONTALO',
                'address' => 'Jl. Pierre Tendean No.100, Manado',
                'phone' => '(0431) 888659',
                'website' => 'www.banksulutgo.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BANK NTB SYARIAH',
                'address' => 'Jl. Udayana, Dasan Agung - Mataram 83125 Indonesia',
                'phone' => '(0370) 632177, 636331, 635332',
                'website' => 'www.bankntbsyariah.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BANK PEMBANGUNAN DAERAH BALI',
                'address' => 'Jl. Raya Puputan Niti Mandala, Renon, Denpasar',
                'phone' => '(0361) 223301 - 05',
                'website' => 'www.bpdbali.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD NUSA TENGGARA TIMUR',
                'address' => 'Jl. W.J. Lalamentik No. 102, Kupang, Nusa Tenggara Timur, 85142',
                'phone' => '(0380) 840555',
                'website' => 'www.bpdntt.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD MALUKU DAN MALUKU UTARA',
                'address' => 'Jl. Raya Pattimura 9, Ambon 97124',
                'phone' => '(0911) 354214-354217',
                'website' => 'www.bankmalukumalut.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD PAPUA',
                'address' => 'Jl. Ahmad Yani 5-7, Jayapura 99111',
                'phone' => '(0967) 532011 (hunting) 531546',
                'website' => 'https://www.bankpapua.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD BENGKULU',
                'address' => 'Jl. S. Parman Padang Jati Nomor 57, Kota Bengkulu',
                'phone' => '(0736) 341170',
                'website' => 'www.bankbengkulu.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD SULAWESI TENGAH',
                'address' => 'Jl. St. Hasanuddin No. 20, Palu',
                'phone' => '(0451) 424537, 429509',
                'website' => 'https://banksulteng.co.id/'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD SULAWESI TENGGARA',
                'address' => 'Gedung Tower Bank Sultra Jl. H. Abdullah Silondae Kel. Korumba, Kec. Mandonga Kota Kendari',
                'phone' => '(0401) 3126549',
                'website' => 'www.banksultra.co.id'
            ],
            [
                'category' => 'BANK PEMBANGUNAN DAERAH',
                'name' => 'PT BPD BANTEN Tbk',
                'address' => 'Grha Bank Banten, Jl. Veteran No. 4, Cipare, Kota Serang, Provinsi Banten – 42117',
                'phone' => '(0254) 7914966',
                'website' => 'www.bankbanten.co.id'
            ],

            // ==========================================
            // KANTOR CABANG BANK LUAR NEGERI
            // ==========================================
            [
                'category' => 'KANTOR CABANG BANK LUAR NEGERI',
                'name' => 'CITIBANK, N.A.',
                'address' => 'Citibank Tower Lt. 8-11 Pacific Century Place SCBD Lot. 10 Jl. Jend. Sudirman No.52-53 Jakarta 12190',
                'phone' => '(021) 5290 8478 / 8492 / 8538 / 8449 / 8093',
                'website' => 'www.citibank.co.id'
            ],
            [
                'category' => 'KANTOR CABANG BANK LUAR NEGERI',
                'name' => 'JP MORGAN CHASE BANK, NA',
                'address' => 'Gedung The Energy Lt. 5, SCBD Lot 11A, JL. Jend. Sudirman Kav 52-53, Jakarta 12190',
                'phone' => '(021) 52918000',
                'website' => 'www.jpmorgan.co.id'
            ],
            [
                'category' => 'KANTOR CABANG BANK LUAR NEGERI',
                'name' => 'BANK OF AMERICA, N.A',
                'address' => 'SEQUIS TOWER LT 25,JL.JEND.SUDIRMAN NO. 71',
                'phone' => '(021) 29553723',
                'website' => 'www.bankofamerica.co.id'
            ],
            [
                'category' => 'KANTOR CABANG BANK LUAR NEGERI',
                'name' => 'MUFG BANK, LTD',
                'address' => 'Trinity Tower, 6-9 Fl., Jl. H.R. Rasuna Said Kav. C22 Blok IIB Jakarta 12940 Indonesia',
                'phone' => '(021) 225538300, 30048200',
                'website' => 'www.mufg.co.id'
            ],
            [
                'category' => 'KANTOR CABANG BANK LUAR NEGERI',
                'name' => 'STANDARD CHARTERED BANK',
                'address' => 'World Trade Centre 2 Lantai 3. JI. Jend. Sudirman Kav. 29-31, Jakarta 12920',
                'phone' => '(021) 2555 0405',
                'website' => 'www.sc.com/id'
            ],
            [
                'category' => 'KANTOR CABANG BANK LUAR NEGERI',
                'name' => 'DEUTSCHE BANK AG',
                'address' => 'Deutsche Bank Building, Jl. Imam Bonjol No. 80, Jakarta',
                'phone' => '(021) 29644401',
                'website' => 'www.deutsche-bank.co.id/indonesia'
            ],
            [
                'category' => 'KANTOR CABANG BANK LUAR NEGERI',
                'name' => 'BANK OF CHINA (HONG KONG) LIMITED',
                'address' => 'Tamara Center S.101, 102, 201 & 1101, JL. Jend. Sudirman Kav 24, Karet Setiabudi, Jakarta Selatan',
                'phone' => '(021) 5205502',
                'website' => 'www.bankofchina.co.id'
            ],
        ];

        // Process data insertion safely. We use `upsert` matching the 'name' column.
        // This ensures running `db:seed` multiple times won't duplicate your master data.
        DB::table('banks')->upsert(
            $banks,
            ['name'], // The unique column to match
            ['category', 'address', 'phone', 'website'] // The columns to update if matched
        );
    }
}
