@extends('dashboard')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Ulasan</h1>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-xs uppercase text-gray-600">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">User</th>
                    <th class="px-6 py-3">Barang</th>
                    <th class="px-6 py-3">Rating</th>
                    <th class="px-6 py-3">Komentar</th>
                    <th class="px-6 py-3">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ulasans as $ulasan)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $ulasan->id }}</td>
                    <td class="px-6 py-4">{{ $ulasan->user->name ?? '-' }}</td>
                    <td class="px-6 py-4">{{ $ulasan->barang->nama_barang ?? '-' }}</td>
                    <td class="px-6 py-4">{{ $ulasan->rating }}</td>
                    <td class="px-6 py-4">{{ $ulasan->komentar }}</td>
                    <td class="px-6 py-4">
                        {{ $ulasan->created_at ? $ulasan->created_at->format('d-m-Y') : '-' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
