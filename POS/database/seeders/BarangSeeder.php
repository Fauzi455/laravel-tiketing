<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'MKN001', 'barang_nama' => 'Beras', 'harga_beli' => 13000, 'harga_jual' => 15000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'MKN002', 'barang_nama' => 'Mie Goreng', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'MNM001', 'barang_nama' => 'Teh', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'MNM002', 'barang_nama' => 'Kopi Hitam', 'harga_beli' => 4500, 'harga_jual' => 7000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'SNK001', 'barang_nama' => 'Keripik Singkong', 'harga_beli' => 5500, 'harga_jual' => 8000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'SNK002', 'barang_nama' => 'Kacang Goreng', 'harga_beli' => 4500, 'harga_jual' => 6500],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'ALT001', 'barang_nama' => 'Pulpen', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'ALT002', 'barang_nama' => 'Pensil', 'harga_beli' => 1500, 'harga_jual' => 2000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'PRL001', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'PRL002', 'barang_nama' => 'Penghapus', 'harga_beli' => 1500, 'harga_jual' => 2000],
        ];
        DB::table('m_barang')->insert($data);
    }
}