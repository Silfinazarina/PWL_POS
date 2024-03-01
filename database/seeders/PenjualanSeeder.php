<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'penjualan_id'=>1,
                'user_id'=>3,
                'pembeli'=>'Silfi',
                'penjualan_kode'=>'TR001',
                'penjualan_tanggal'=>'2024-03-02 08:40:00',
            ],
            [
                'penjualan_id'=>2,
                'user_id'=>3,
                'pembeli'=>'Nana',
                'penjualan_kode'=>'TR002',
                'penjualan_tanggal'=>'2024-03-02 08:45:00',
            ],
            [
                'penjualan_id'=>3,
                'user_id'=>3,
                'pembeli'=>'Chyntia',
                'penjualan_kode'=>'TR003',
                'penjualan_tanggal'=>'2024-03-02 08:52:00',
            ],
            [
                'penjualan_id'=>4,
                'user_id'=>3,
                'pembeli'=>'Kyungsoo',
                'penjualan_kode'=>'TR004',
                'penjualan_tanggal'=>'2024-03-02 09:00:00',
            ],
            [
                'penjualan_id'=>5,
                'user_id'=>3,
                'pembeli'=>'Chanyeol',
                'penjualan_kode'=>'TR005',
                'penjualan_tanggal'=>'2024-03-02 09:07:00',
            ],
            [
                'penjualan_id'=>6,
                'user_id'=>3,
                'pembeli'=>'Chamilla',
                'penjualan_kode'=>'TR006',
                'penjualan_tanggal'=>'2024-03-02 09:20:00',
            ],
            [
                'penjualan_id'=>7,
                'user_id'=>3,
                'pembeli'=>'Najwa',
                'penjualan_kode'=>'TR007',
                'penjualan_tanggal'=>'2024-03-02 08:40:00',
            ],
            [
                'penjualan_id'=>8,
                'user_id'=>3,
                'pembeli'=>'Ji Chang Wook',
                'penjualan_kode'=>'TR008',
                'penjualan_tanggal'=>'2024-03-02 09:00:00',
            ],
            [
                'penjualan_id'=>9,
                'user_id'=>3,
                'pembeli'=>'Ahn Yeo Seop',
                'penjualan_kode'=>'TR009',
                'penjualan_tanggal'=>'2024-03-02 09:20:00',
            ],
            [
                'penjualan_id'=>10,
                'user_id'=>3,
                'pembeli'=>'Ahn Bo Hyun',
                'penjualan_kode'=>'TR010',
                'penjualan_tanggal'=>'2024-03-02 09:30:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
