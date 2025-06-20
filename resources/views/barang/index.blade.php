@extends('layouts.app')

@section('content')
    <h1>Daftar Barang</h1>

    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Kondisi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($barang as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->kondisi }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('barang.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus barang ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data barang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
<div class="d-flex justify-content-center">
    {{ $barang->links() }}
</div>
@endsection
