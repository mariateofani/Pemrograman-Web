<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data-panen', [PanenController::class, 'index']);

Route::get('/tambah-panen', [PanenController::class,'create']);

Route::post('/simpan-panen', [PanenController::class,'store']);

Route::get('/hapus-panen/{id}', [PanenController::class,'destroy']);

Route::put('/data-panen/{id}', [PanenController::class, 'update']);