@extends('layouts.app')

@section('content')
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $barang->nama }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" value="{{ $barang->harga }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Kondisi</label>
            <input type="text" name="kondisi" value="{{ $barang->kondisi }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" value="{{ $barang->status }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection