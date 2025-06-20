@extends('layouts.app')

@section('content')
    <h1>Detail Barang</h1>
    <ul>
        <li><strong>Nama:</strong> {{ $barang->nama }}</li>
        <li><strong>Harga:</strong> {{ $barang->harga }}</li>
        <li><strong>Kondisi:</strong> {{ $barang->kondisi }}</li>
        <li><strong>Status:</strong> {{ $barang->status }}</li>
    </ul>
    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
@endsection