<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['id' => 1, 'kode_kategori' => 'MKN', 'nama_kategori' => 'Makanan'],
            ['id' => 2, 'kode_kategori' => 'MNM', 'nama_kategori' => 'Minuman'],
            ['id' => 3, 'kode_kategori' => 'SNK', 'nama_kategori' => 'Snack'],
            ['id' => 4, 'kode_kategori' => 'ALT', 'nama_kategori' => 'Alat Tulis'],
            ['id' => 5, 'kode_kategori' => 'PRL', 'nama_kategori' => 'Perlengkapan'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}