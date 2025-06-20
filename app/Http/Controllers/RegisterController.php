<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi form sebelum dikirim ke API
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Kirim data ke backend API
        $response = Http::post('http://localhost:8080/auth/register', [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);

        if ($response->successful()) {
            // Kalau API berhasil, arahkan ke dashboard mahasiswa
            return redirect()->route('mahasiswa.dashboard')->with('success', 'Pendaftaran berhasil!');
        }

        // Kalau gagal, tampilkan pesan error dari API
        return back()->withErrors(['error' => 'Pendaftaran gagal: ' . $response->json('message')]);
    }
}
