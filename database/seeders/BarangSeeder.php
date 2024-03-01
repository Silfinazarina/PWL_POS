<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'barang_id'=>1,
                'kategori_id'=>1,
                'barang_kode'=>'FD001',
                'barang_nama'=>'Sari Roti Sandwich',
                'harga_beli'=>'4000',
                'harga_jual'=>'5000',
            ],
            [
                'barang_id'=>2,
                'kategori_id'=>1,
                'barang_kode'=>'DR001',
                'barang_nama'=>'Cimory Milk',
                'harga_beli'=>'5500',
                'harga_jual'=>'7000',
            ],
            [
                'barang_id'=>3,
                'kategori_id'=>2,
                'barang_kode'=>'BT001',
                'barang_nama'=>'COSRX Facial Wash 50ml',
                'harga_beli'=>'55700',
                'harga_jual'=>'59000',
            ],
            [
                'barang_id'=>4,
                'kategori_id'=>2,
                'barang_kode'=>'BT002',
                'barang_nama'=>'Elformula Moisturizer',
                'harga_beli'=>'144000',
                'harga_jual'=>'155000',
            ],
            [
                'barang_id'=>5,
                'kategori_id'=>3,
                'barang_kode'=>'HM001',
                'barang_nama'=>'Mr.Muscle Pembersih Kaca',
                'harga_beli'=>'5500',
                'harga_jual'=>'8000',
            ],
            [
                'barang_id'=>6,
                'kategori_id'=>3,
                'barang_kode'=>'HM002',
                'barang_nama'=>'Stella Matic Ocean',
                'harga_beli'=>'53000',
                'harga_jual'=>'60000',
            ],
            [
                'barang_id'=>7,
                'kategori_id'=>4,
                'barang_kode'=>'FS001',
                'barang_nama'=>'Jepit Rambut Jennie',
                'harga_beli'=>'6000',
                'harga_jual'=>'8500',
            ],
            [
                'barang_id'=>8,
                'kategori_id'=>4,
                'barang_kode'=>'FS002',
                'barang_nama'=>'Scrunchie',
                'harga_beli'=>'3000',
                'harga_jual'=>'5000',
            ],
            [
                'barang_id'=>9,
                'kategori_id'=>5,
                'barang_kode'=>'BB001',
                'barang_nama'=>'Mitu Baby Oil',
                'harga_beli'=>'19000',
                'harga_jual'=>'24000',
            ],
            [
                'barang_id'=>10,
                'kategori_id'=>5,
                'barang_kode'=>'BB002',
                'barang_nama'=>'Mamy Poko XL',
                'harga_beli'=>'60000',
                'harga_jual'=>'66500',
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
