<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'kategori_id'=>1,
                'kategori_kode'=>'FNB',
                'kategori_nama'=>'Food & Baverage',
            ],
            [
                'kategori_id'=>2,
                'kategori_kode'=>'BTY',
                'kategori_nama'=>'Beauty',
            ],
            [
                'kategori_id'=>3,
                'kategori_kode'=>'HMC',
                'kategori_nama'=>'Home Care',
            ],
            [
                'kategori_id'=>4,
                'kategori_kode'=>'FSH',
                'kategori_nama'=>'Fashion',
            ],
            [
                'kategori_id'=>5,
                'kategori_kode'=>'BBY',
                'kategori_nama'=>'Baby Care',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
