<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate(['nama_kategori' => 'required']);
        return Kategori::create($request->all());
    }

    public function show(Kategori $kategori)
    {
        return $kategori;
    }

    public function update(Request $request, Kategori $kategori)
    {
        $kategori->update($request->all());
        return $kategori;
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return response()->noContent();
    }
}

