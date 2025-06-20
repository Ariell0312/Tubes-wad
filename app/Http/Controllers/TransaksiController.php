<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
 public function index()
{
    $transaksis = Transaksi::with(['user', 'barang'])->get();
    return view('transaksi.index', compact('transaksis'));
}

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'barang_id' => 'required|exists:barangs,id',
            'status' => 'required',
            'tanggal' => 'nullable|date',
        ]);

        return Transaksi::create($data);
    }

    public function show(Transaksi $transaksi)
    {
        return $transaksi->load(['user', 'barang']);
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $transaksi->update($request->all());
        return $transaksi;
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return response()->noContent();
    }
}

