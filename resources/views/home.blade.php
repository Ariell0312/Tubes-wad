@extends('dashboard')

@section('title', 'Dashboard')

@section('content')
    {{-- Hero Section --}}
    <section class="mb-12 text-center max-w-4xl mx-auto">
        <h1 class="text-5xl font-extrabold text-gray-900 mb-4 leading-tight">
            Welcome to Your Dashboard
        </h1>
        <p class="text-lg text-gray-600 max-w-xl mx-auto">
            Monitor your application's key metrics at a glance.
        </p>
    </section>

    {{-- Navigation Buttons --}}
    <div class="flex justify-center mb-10 gap-4">
        <a href="{{ route('user.index') }}" class="bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-orange-700 transition">Kelola Users</a>
        <a href="{{ route('barang.index') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">Kelola Barang</a>
    </div>

    {{-- Stats Grid --}}
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8">
        {{-- masing-masing kotak statistik --}}
        {{-- contohnya: --}}
        <a href="{{ route('user.index') }}">
            <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center transition hover:shadow-lg hover:scale-105">
                <div class="text-orange-600 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m5 5v-6a4 4 0 014-4h1" />
                    </svg>
                </div>
                <h2 class="text-4xl font-extrabold text-gray-900">{{ $totalUsers ?? 0 }}</h2>
                <p class="mt-2 text-gray-500 font-semibold uppercase tracking-wide">Users</p>
            </div>
        </a>
        {{-- Barang --}}
<a href="{{ route('barang.index') }}">
    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center transition hover:shadow-lg hover:scale-105">
        <div class="text-orange-600 mb-3">
            <i class="fas fa-box fa-2x"></i>
        </div>
        <h2 class="text-4xl font-extrabold text-gray-900">{{ $totalBarangs ?? 0 }}</h2>
        <p class="mt-2 text-gray-500 font-semibold uppercase tracking-wide">Items</p>
    </div>
</a>

{{-- Kategori --}}
<a href="{{ route('kategori.index')}}">
    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center transition hover:shadow-lg hover:scale-105">
        <div class="text-orange-600 mb-3">
            <i class="fas fa-tags fa-2x"></i>
        </div>
        <h2 class="text-4xl font-extrabold text-gray-900">{{ $totalKategoris ?? 0 }}</h2>
        <p class="mt-2 text-gray-500 font-semibold uppercase tracking-wide">Categories</p>
    </div>
</a>

{{-- Transaksi --}}
<a href="{{ route('transaksi.index')}}">
    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center transition hover:shadow-lg hover:scale-105">
        <div class="text-orange-600 mb-3">
            <i class="fas fa-exchange-alt fa-2x"></i>
        </div>
        <h2 class="text-4xl font-extrabold text-gray-900">{{ $totalTransaksis ?? 0 }}</h2>
        <p class="mt-2 text-gray-500 font-semibold uppercase tracking-wide">Transactions</p>
    </div>
</a>

{{-- Ulasan --}}
<a href="{{ route('ulasan.index')}}">
    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center transition hover:shadow-lg hover:scale-105">
        <div class="text-orange-600 mb-3">
            <i class="fas fa-star fa-2x"></i>
        </div>
        <h2 class="text-4xl font-extrabold text-gray-900">{{ $totalUlasans ?? 0 }}</h2>
        <p class="mt-2 text-gray-500 font-semibold uppercase tracking-wide">Reviews</p>
    </div>
</a>

    </section>
@endsection
