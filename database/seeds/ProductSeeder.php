<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ANALGESIK NARKOTIK
        DB::table('products')->insert([
            'category_id' => 1,
            'generic_name' => 'fentanil',
            'medicines_form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus.',
            'description' => 'inj: Hanya untuk nyeri berat dan 
            harus diberikan oleh tim medis 
            yang dapat melakukan 
            resusitasi.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'generic_name' => 'fentanil',
            'medicines_form' => 'patch 12,5 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'description' => 'patch: 
            - Untuk nyeri kronik pada 
            pasien kanker yang tidak 
            terkendali.
            - Tidak untuk nyeri akut',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'generic_name' => 'fentanil',
            'medicines_form' => 'patch 25 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'description' => 'patch: 
            - Untuk nyeri kronik pada 
            pasien kanker yang tidak 
            terkendali.
            - Tidak untuk nyeri akut',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'generic_name' => 'hidromorfon',
            'medicines_form' => 'tab lepas lambat 8 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'generic_name' => 'hidromorfon',
            'medicines_form' => 'tab lepas lambat 16 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'generic_name' => 'kodein',
            'medicines_form' => 'tab 10 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'generic_name' => 'kodein',
            'medicines_form' => 'tab 20 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // ANALGESIK NON NARKOTIK

        DB::table('products')->insert([
            'category_id' => 2,
            'generic_name' => 'asam mefenamat',
            'medicines_form' => 'kaps 250 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'generic_name' => 'asam mefenamat',
            'medicines_form' => 'tab 500 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'generic_name' => 'ketoprofen',
            'medicines_form' => 'inj 50 mg/mL',
            'restriction_formula' => '',
            'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik 
            secara oral.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'generic_name' => 'ketoprofen',
            'medicines_form' => 'sup 100 mg',
            'restriction_formula' => '2 sup/hari, maks 3 
            hari.',
            'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik 
            secara oral.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'generic_name' => 'ketorolak',
            'medicines_form' => ' inj 30 mg/mL',
            'restriction_formula' => '2-3 amp/hari,
            maks 2 hari.',
            'description' => 'Untuk nyeri sedang sampai 
            berat pada pasien yang tidak 
            dapat menggunakan analgesik 
            secara oral.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // ANTIPIRAI
        DB::table('products')->insert([
            'category_id' => 3,
            'generic_name' => 'alopurinol',
            'medicines_form' => 'tab 100 mg*',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'generic_name' => 'alopurinol',
            'medicines_form' => 'tab 300 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'generic_name' => 'kolkisin',
            'medicines_form' => 'tab 500 mcg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'generic_name' => 'probenesid',
            'medicines_form' => 'tab 500 mcg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // NYERI NEUROPATIK

        DB::table('products')->insert([
            'category_id' => 4,
            'generic_name' => 'amitriptilin',
            'medicines_form' => 'tab 25 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 4,
            'generic_name' => 'gabapentin',
            'medicines_form' => 'kaps 100 mg',
            'restriction_formula' => '60 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 4,
            'generic_name' => 'gabapentin',
            'medicines_form' => 'kaps 300 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 4,
            'generic_name' => 'karbamazepin',
            'medicines_form' => 'tab 100 mg',
            'restriction_formula' => '60 tab/bulan.',
            'description' => 'Hanya untuk neuralgia trigeminal.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        //ANESTETIK LOKAL
        DB::table('products')->insert([
            'category_id' => 5,
            'generic_name' => 'bupivakain',
            'medicines_form' => 'inj 0,5%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 5,
            'generic_name' => 'bupivakain heavy',
            'medicines_form' => 'inj 0,5% + glukosa 8%',
            'restriction_formula' => '',
            'description' => 'Khusus untuk analgesia spinal.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 5,
            'generic_name' => 'etil klorida',
            'medicines_form' => 'spray 100 mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // ANESTETIK UMUM dan OKSIGEN
        DB::table('products')->insert([
            'category_id' => 6,
            'generic_name' => 'deksmedetomidin',
            'medicines_form' => 'inj 100 mcg/mL',
            'restriction_formula' => '',
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 6,
            'generic_name' => 'desfluran',
            'medicines_form' => 'ih',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 6,
            'generic_name' => 'propofol',
            'medicines_form' => ' inj 1% ',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // OBAT untuk PROSEDUR PRE OPERATIF
        DB::table('products')->insert([
            'category_id' => 7,
            'generic_name' => 'atropin',
            'medicines_form' => 'inj 0,25 mg/mL (i.v./s.k.) ',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 7,
            'generic_name' => 'diazepam',
            'medicines_form' => 'inj 5 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 7,
            'generic_name' => 'midazolam',
            'medicines_form' => 'inj 1 mg/mL (i.v.)',
            'restriction_formula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 7,
            'generic_name' => 'midazolam',
            'medicines_form' => 'inj 5 mg/mL (i.v.)',
            'restriction_formula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'description' => 'Dapat digunakan untuk sedasi pada pasien ICU dan HCU.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // ANTIALERGI dan OBAT untuk ANAFILAKSIS

        DB::table('products')->insert([
            'category_id' => 8,
            'generic_name' => 'deksametason',
            'medicines_form' => 'inj 5 mg/mL',
            'restriction_formula' => '20 mg/hari.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 8,
            'generic_name' => 'difenhidramin',
            'medicines_form' => 'inj 10 mg/mL (i.v./i.m.) ',
            'restriction_formula' => '30 mg/hari.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 8,
            'generic_name' => 'epinefrin (adrenalin)',
            'medicines_form' => 'inj 1 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // ANTIEPILEPSI - ANTIKONVULSI
        DB::table('products')->insert([
            'category_id' => 9,
            'generic_name' => 'klonazepam',
            'medicines_form' => 'tab 2 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 9,
            'generic_name' => 'levetirasetam',
            'medicines_form' => ' tab 250 mg',
            'restriction_formula' => '60 tab/bulan.',
            'description' => 'Sebagai terapi tambahan pada pasien epilepsi onset parsial.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 9,
            'generic_name' => 'levetirasetam',
            'medicines_form' => 'tab 500 mg',
            'restriction_formula' => '90 tab/bulan.',
            'description' => 'Sebagai terapi tambahan pada pasien epilepsi onset parsial.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 9,
            'generic_name' => 'okskarbazepin',
            'medicines_form' => 'susp 60 mg/mL*',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        // HORMON dan ANTIHORMON
        DB::table('products')->insert([
            'category_id' => 10,
            'generic_name' => 'anastrozol',
            'medicines_form' => 'tab 1 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Dapat digunakan untuk kanker payudara post menopause dengan pemeriksaan reseptor estrogen/progesteron positif.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 10,
            'generic_name' => 'metilprednisolon',
            'medicines_form' => 'tab 4 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 10,
            'generic_name' => 'metilprednisolon',
            'medicines_form' => 'tab 16 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'category_id' => 10,
            'generic_name' => 'letrozol',
            'medicines_form' => 'tab 2,5 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Untuk kanker payudara pada post menopause dengan reseptor ER dan/atau PR positif. ',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
        ]);

    }
}
