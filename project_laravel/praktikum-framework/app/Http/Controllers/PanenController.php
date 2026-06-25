<?php

namespace App\Http\Controllers;

use App\Models\HasilPanen;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\StoreHasilPanenRequest;
use App\Http\Resources\HasilPanenResource;

class PanenController extends Controller
{
    public function index(Request $request)
    {
        $query = HasilPanen::query();

        if ($request->start_date && $request->end_date) {
            $query->whereBetween(
                'tanggal_panen',
                [$request->start_date, $request->end_date]
            );
        }

        $dataPanen = $query->get();

        return response()->json($dataPanen);
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

    // METHOD UPDATE (tambahkan ini)
    public function update(StoreHasilPanenRequest $request, $id)
    {
        try {
            $panen = HasilPanen::findOrFail($id);

            $panen->update($request->validated());

            return new HasilPanenResource($panen);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Data hasil panen tidak ditemukan'
            ], 404);
        }
    }

    public function destroy($id)
    {
        try {

            $panen = HasilPanen::findOrFail($id);

            $panen->delete();

            return response()->json([
                'message' => 'Data hasil panen berhasil dihapus'
            ], 200);

        } catch (ModelNotFoundException $e) {

            return response()->json([
                'message' => 'Data hasil panen tidak ditemukan'
            ], 404);

        }
    }
}