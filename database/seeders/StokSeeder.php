<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'stok_id'=>1,
                'barang_id'=>1,
                'user_id'=>2,
                'stok_tanggal'=>'2024-03-02 08:00:00',
                'stok_jumlah'=>15,
            ],
            [
                'stok_id'=>2,
                'barang_id'=>2,
                'user_id'=>2,
                'stok_tanggal'=>'2024-03-02 08:10:20',
                'stok_jumlah'=>50,
            ],
            [
                'stok_id'=>3,
                'barang_id'=>3,
                'user_id'=>2,
                'stok_tanggal'=>'2024-03-01 09:30:15',
                'stok_jumlah'=>15,
            ],
            [
                'stok_id'=>4,
                'barang_id'=>4,
                'user_id'=>2,
                'stok_tanggal'=>'2024-03-01 10:00:50',
                'stok_jumlah'=>15,
            ],
            [
                'stok_id'=>5,
                'barang_id'=>5,
                'user_id'=>2,
                'stok_tanggal'=>'2024-03-01 11:30:00',
                'stok_jumlah'=>50,
            ],
            [
                'stok_id'=>6,
                'barang_id'=>6,
                'user_id'=>3,
                'stok_tanggal'=>'2024-03-01 15:10:10',
                'stok_jumlah'=>50,
            ],
            [
                'stok_id'=>7,
                'barang_id'=>7,
                'user_id'=>3,
                'stok_tanggal'=>'2024-03-02 16:20:00',
                'stok_jumlah'=>15,
            ],
            [
                'stok_id'=>8,
                'barang_id'=>8,
                'user_id'=>3,
                'stok_tanggal'=>'2024-03-02 16:00:30',
                'stok_jumlah'=>15,
            ],
            [
                'stok_id'=>9,
                'barang_id'=>9,
                'user_id'=>3,
                'stok_tanggal'=>'2024-03-02 14:00:30',
                'stok_jumlah'=>25,
            ],
            [
                'stok_id'=>10,
                'barang_id'=>10,
                'user_id'=>3,
                'stok_tanggal'=>'2024-03-02 14:30:00',
                'stok_jumlah'=>50,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
