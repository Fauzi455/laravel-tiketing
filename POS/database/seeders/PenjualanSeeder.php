<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'penjualan_kode' => 'PENJ001', 'penjualan_tanggal' => '2026-01-01'],
            ['penjualan_id' => 2, 'user_id' => 3, 'penjualan_kode' => 'PENJ002', 'penjualan_tanggal' => '2026-01-02'],
            ['penjualan_id' => 3, 'user_id' => 3, 'penjualan_kode' => 'PENJ003', 'penjualan_tanggal' => '2026-01-03'],
            ['penjualan_id' => 4, 'user_id' => 3, 'penjualan_kode' => 'PENJ004', 'penjualan_tanggal' => '2026-01-04'],
            ['penjualan_id' => 5, 'user_id' => 3, 'penjualan_kode' => 'PENJ005', 'penjualan_tanggal' => '2026-01-05'],
            ['penjualan_id' => 6, 'user_id' => 3, 'penjualan_kode' => 'PENJ006', 'penjualan_tanggal' => '2026-01-06'],
            ['penjualan_id' => 7, 'user_id' => 3, 'penjualan_kode' => 'PENJ007', 'penjualan_tanggal' => '2026-01-07'],
            ['penjualan_id' => 8, 'user_id' => 3, 'penjualan_kode' => 'PENJ008', 'penjualan_tanggal' => '2026-01-08'],
            ['penjualan_id' => 9, 'user_id' => 3, 'penjualan_kode' => 'PENJ009', 'penjualan_tanggal' => '2026-01-09'],
            ['penjualan_id' => 10, 'user_id' => 3, 'penjualan_kode' => 'PENJ010', 'penjualan_tanggal' => '2026-01-10'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}