<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\UserController;
use App\Models\Barang;
use Illuminate\Support\Facades\Route;

// Dashboard sebagai halaman utama
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Halaman welcome (opsional, bisa diakses di /welcome)
Route::get('/welcome', function () {
    $barang = Barang::with('kategori')->get();
    return view('welcome', compact('barang'));
})->name('welcome');

// Resource routes
Route::resource('barang', BarangController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('ulasan', UlasanController::class);
Route::resource('user', UserController::class);
