<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilKlinik;

class KlinikController extends Controller
{
    
    public function index()
    {
        // Mengambil seluruh data dari tabel hasil_kliniks
        $dataKlinik = HasilKlinik::all();

        // Mengirim data ke View
        return view('klinik.index', compact('dataKlinik'));
}

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pasien' => 'required',
            'umur' => 'required|integer',
            'email' => 'required|email',
            'no_hp' => 'required'
        ]);

        // Menyimpan data ke database
        HasilKlinik::create([
        'nama_pasien' => $request->nama_pasien,
        'umur' => $request->umur,
        'email' => $request->email,
        'no_hp' => $request->no_hp
    ]);

        // Mengalihkan kembali ke halaman data klinik dengan pesan sukses
        return redirect('/data-klinik')->with('success', 'Data pasien berhasil disimpan.');
    }
}