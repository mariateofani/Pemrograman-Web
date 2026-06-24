<?php

namespace App\Http\Controllers;

use App\Models\HasilPanen;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function index()
    {
        $dataPanen = HasilPanen::all();

        return view('panen.index', compact('dataPanen'));
    }

    public function create()
    {
        return view('panen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_komoditas' => 'required',
            'jumlah_kg' => 'required|numeric',
            'tanggal_panen' => 'required',
        ]);

        HasilPanen::create([
            'nama_komoditas' => $request->nama_komoditas,
            'jumlah_kg' => $request->jumlah_kg,
            'tanggal_panen' => $request->tanggal_panen
        ]);

        return redirect('/data-panen');
    }
    public function destroy($id)
    {
        HasilPanen::findOrFail($id)->delete();

        return redirect('/data-panen');
    }
}