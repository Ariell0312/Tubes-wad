<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        Barang::insert([
            [
                'nama' => 'Laptop ASUS',
                'deskripsi' => 'Laptop bekas tapi masih bagus',
                'harga' => 3500000,
                'kondisi' => 'Bekas',
                'foto' => null,
                'status' => 'Tersedia',
                'kategori_id' => 1
            ],
            [
                'nama' => 'Komik Naruto',
                'deskripsi' => 'Komplit volume 1-20',
                'harga' => 250000,
                'kondisi' => 'Bekas',
                'foto' => null,
                'status' => 'Tersedia',
                'kategori_id' => 2
            ]
        ]);
    }
}

