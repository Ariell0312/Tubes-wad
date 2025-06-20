@extends('dashboard')

@section('title', 'Kategori')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Kategori</h1>
    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-xs uppercase text-gray-600">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Nama Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $kategori->id }}</td>
                        <td class="px-6 py-4">{{ $kategori->nama_kategori }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
