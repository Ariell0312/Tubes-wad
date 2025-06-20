@extends('layouts.app')

@section('content')
    <h1>Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>
        <div class="mb-3">
            <label>Kondisi</label>
            <input type="text" name="kondisi" class="form-control">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection