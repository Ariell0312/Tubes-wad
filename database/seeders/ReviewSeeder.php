<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ulasan;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Ulasan::insert([
        'user_id' => 1,
        'barang_id' => 1,
        'komentar' => 'Barang oke dan sesuai deskripsi!',
        'rating' => 5, // tambahkan nilai rating
        ]);

    }
}

