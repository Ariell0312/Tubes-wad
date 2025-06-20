<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    public function run(): void
    {
        Transaksi::insert([
            [
                'user_id' => 1,
                'barang_id' => 1,
                'status' => 'selesai',
                'tanggal' => now()
            ]
        ]);
    }
}

