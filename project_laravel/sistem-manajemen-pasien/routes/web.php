<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');

Route::view('/login', 'login');
Route::view('/register', 'register');

/*
|--------------------------------------------------------------------------
| AUTH ACTION
|--------------------------------------------------------------------------
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| DASHBOARD (PROTECTED)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    if (!session()->has('user_id')) {
        return redirect('/login');
    }

    return view('dashboard');
});