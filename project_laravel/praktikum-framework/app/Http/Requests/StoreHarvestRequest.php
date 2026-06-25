<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHarvestRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'commodity_name' => 'required|string|max:255',
            'weight_kg'      => 'required|numeric|min:1',
            'harvest_date'   => 'required|date',
        ];
    }
}