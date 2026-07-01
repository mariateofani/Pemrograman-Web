<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHasilPanenRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_komoditas' => 'required',
            'jumlah_kg' => 'required|numeric',
            'tanggal_panen' => 'required',
        ];
    }
}