<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // file ini akan kita buat nanti
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Simpan user ke tabel users
        $user = User::create([
            'username' => $request->nama, // atau bisa kolom lain
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis
        Auth::login($user);

        // Redirect ke dashboard mahasiswa
        return redirect()->route('mahasiswa.dashboard');
    }
}
