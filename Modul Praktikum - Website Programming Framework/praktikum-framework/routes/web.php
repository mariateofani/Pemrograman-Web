<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlinikController; // Import Controller

// Membuat endpoint URL /data-klinik
Route::post('/simpan-pasien', [KlinikController::class, 'store']);
Route::get('/data-klinik', [KlinikController::class, 'index']);
