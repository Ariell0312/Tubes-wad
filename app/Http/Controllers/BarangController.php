<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
{
    $barang = Barang::with('kategori')->paginate(10);
    return view('barang.index', compact('barang'));
}


    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kondisi' => 'required',
            'foto' => 'nullable|string',
            'status' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        return Barang::create($data);
    }

    public function show(Barang $barang)
    {
        return $barang->load('kategori');
    }

    public function update(Request $request, Barang $barang)
    {
        $barang->update($request->all());
        return $barang;
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return response()->noContent();
    }
}
