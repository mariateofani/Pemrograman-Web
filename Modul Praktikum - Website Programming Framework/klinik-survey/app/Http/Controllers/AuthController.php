<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('login');
    }

    // Menampilkan halaman register
    public function showRegister()
    {
        return view('register');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')
            ->with('success', 'Registrasi berhasil, silakan login.');
    }

    // Proses login
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    // Cek email
    if (!$user) {
        return back()->with('error', 'Email belum terdaftar.');
    }

    // Cek password
    if (!Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Password salah.');
    }

    return redirect('/users');
}

    // Menampilkan tabel user
    public function showUsers()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function landing()
{
    return view('landing');
}
}