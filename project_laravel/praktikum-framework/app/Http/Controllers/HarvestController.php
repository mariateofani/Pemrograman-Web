<?php
namespace App\Http\Controllers;

use App\Models\Harvest;
use App\Http\Requests\StoreHarvestRequest;
use App\Http\Resources\HarvestResource;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HarvestController extends Controller
{
    // 1. GET ALL + Filtering & Pagination
    public function index(Request $request)
    {
        $query = Harvest::query();

        // Fitur Filtering berdasarkan nama komoditas
        if ($request->has('commodity')) {
            $query->where('commodity_name', 'like', '%' . $request->commodity . '%');
        }

        // Fitur Pagination (Default 10 data per halaman)
        $harvests = $query->paginate(10);

        // Mengembalikan data menggunakan Resource Collection (Otomatis menyertakan Metadata Pagination)
        return HarvestResource::collection($harvests);
    }

    // 2. POST (Create) + Form Request Validation
    public function store(StoreHarvestRequest $request)
    {
        $harvest = Harvest::create($request->validated());

        return (new HarvestResource($harvest))
            ->additional(['message' => 'Data panen berhasil dicatat'])
            ->response()
            ->setStatusCode(201); // 201 Created
    }

    // 3. GET BY ID + Error Handling Manual
    public function show($id)
    {
        try {
            $harvest = Harvest::findOrFail($id);
            return new HarvestResource($harvest);
        } catch (ModelNotFoundException $e) {
            // Error Handling: Mengembalikan HTTP Status Code yang tepat (404 Not Found)
            return response()->json([
                'error' => 'Resource tidak ditemukan',
                'message' => 'Data panen dengan ID ' . $id . ' tidak ada di sistem.'
            ], 404);
        }
    }
}
?>
