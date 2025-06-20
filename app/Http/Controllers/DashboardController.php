<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Transaksi;
use App\Models\Ulasan;

class DashboardController extends Controller
{
    public function index()
{
    return view('home', [
        'totalUsers' => User::count(),
        'totalBarangs' => Barang::count(),
        'totalKategoris' => Kategori::count(),
        'totalTransaksis' => Transaksi::count(),
        'totalUlasans' => Ulasan::count(),
    ]);
}
}

