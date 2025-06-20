@extends('dashboard')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Transaksi</h1>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-xs uppercase text-gray-600">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">User</th>
                    <th class="px-6 py-3">Barang</th>
                    <th class="px-6 py-3">Jumlah</th>
                    <th class="px-6 py-3">Total</th>
                    <th class="px-6 py-3">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $transaksi)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $transaksi->id }}</td>
                    <td class="px-6 py-4">{{ $transaksi->user->name ?? '-' }}</td>
                    <td class="px-6 py-4">{{ $transaksi->barang->nama_barang ?? '-' }}</td>
                    <td class="px-6 py-4">{{ $transaksi->jumlah }}</td>
                    <td class="px-6 py-4">{{ $transaksi->total }}</td>
                    <td class="px-6 py-4">
                        {{ $transaksi->created_at ? $transaksi->created_at->format('d-m-Y') : '-' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
