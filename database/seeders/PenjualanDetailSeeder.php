<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'detail_id'=>1,
                'penjualan_id'=>1,
                'barang_id'=>3,
                'harga'=>59000,
                'jumlah'=>1,
            ],
            [
                'detail_id'=>2,
                'penjualan_id'=>2,
                'barang_id'=>1,
                'harga'=>5000,
                'jumlah'=>3,
            ],
            [
                'detail_id'=>3,
                'penjualan_id'=>3,
                'barang_id'=>7,
                'harga'=>8500,
                'jumlah'=>2,
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
        //insert 30 data bukan 3 dataa
        //bentar lanjut besok 
    }
}
