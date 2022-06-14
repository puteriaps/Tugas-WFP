<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categories_name' => 'ANALGESIK NARKOTIK',
            'description' => 'Analgesik narkotik adalah senyawa yang dapat menekan sistem saraf pusat secara selektif, digunakan untuk mengurangi rasa nyeri yang disebabkan oleh penyakit kanker, serangan jantung akut, sesudah operasi dan kolik usus atau ginjal.',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'ANALGESIK NON NARKOTIK',
            'description' => 'Obat Analgesik Non-Narkotik dalam Ilmu Farmakologi juga sering dikenal dengan istilah Analgetik/Analgetika/ Analgesik Perifer. Analgetika perifer (non-narkotik), yang terdiri dari obat-obat yang tidak bersifat narkotik dan tidak bekerja sentral.',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'ANTIPIRAI',
            'description' => 'Antipirai adalah obat untuk mengobati pirai (artritis gout) atau sering disebut penyakit asam urat.',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'NYERI NEUROPATIK',
            'description' => 'Neuropati adalah istilah yang digunakan untuk gejala gangguan atau penyakit pada saraf di tubuh. Gejala yang muncul bisa berupa nyeri, kesemutan, kram otot, hingga susah buang air kecil.',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'ANESTETIK LOKAL',
            'description' => 'Anestesi lokal atau kadang disebut sebagai bius lokal adalah obat yang menyebabkan tidak adanya sensasi nyeri. Ketika digunakan pada jalur saraf spesifik, kelumpuhan juga bisa sewaktu-waktu terjadi. Anastesi lokal klinis tergolong menjadi dua jenis: aminoamida dan aminoester.',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'ANESTETIK UMUM dan OKSIGEN',
            'description' => 'Anestesi umum atau general anestesi merupakan tindakan meniadakan nyeri secara sentral disertai hilangnya kesadaran yang dapat pulih kembali (reversible). Anestesi umum menyebabkan mati rasa karena obat ini masuk ke jaringan otak dengan tekanan setempat yang tinggi.',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
            'description' => '',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
            'description' => 'Antialergi dan anafilaksis adalah obat yang digunakan dalam terapi untuk pengobatan gejala sakit alergi dan gejala sakit oleh karena terjadi anafilaksis, terhadap atau oleh karena alergen seperti obat, minuman atau oleh karena pengaruh lingkungan.',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'ANTIEPILEPSI - ANTIKONVULSI',
            'description' => 'Antikonvulsan adalah obat untuk mencegah atau mengatasi kejang atau epilepsi. Antikonvulsan atau antikejang tersedia dalam berbagai bentuk obat dan hanya boleh digunakan sesuai resep dokter.',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'HORMON dan ANTIHORMON',
            'description' => '',
        ]);
    }
}
