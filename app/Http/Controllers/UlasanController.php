<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index()
{
    $ulasans = Ulasan::with(['user', 'barang'])->get();
    return view('ulasan.index', compact('ulasans'));
}

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'barang_id' => 'required|exists:barangs,id',
            'komentar' => 'required|string',
            'rating' => 'required|integer|min:1|max:5'
        ]);

        return Ulasan::create($data);
    }

    public function show(Ulasan $ulasan)
    {
        return $ulasan->load(['user', 'barang']);
    }

    public function update(Request $request, Ulasan $ulasan)
    {
        $ulasan->update($request->all());
        return $ulasan;
    }

    public function destroy(Ulasan $ulasan)
    {
        $ulasan->delete();
        return response()->noContent();
    }
}

