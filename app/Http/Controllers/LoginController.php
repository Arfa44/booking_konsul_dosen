<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // tampilan form login
    }

    public function login(Request $request)
    {
        // GANTI: endpoint login ke yang umum (bukan khusus mahasiswa)
        $response = Http::post('http://localhost:8080/auth/login', [
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($response->successful()) {
            // Simpan data user dari API ke session
            $data = $response->json();
            Session::put('user', $data);

            // AMBIL ROLE dari user (sesuaikan dengan struktur JSON dari API)
            $role = $data['user']['role']; // pastikan API kirim bagian ini

            // Redirect sesuai role
            if ($role === 'admin') {
                return redirect('/dashboard/admin');
            } elseif ($role === 'dosen') {
                return redirect('/dashboard/dosen');
            } elseif ($role === 'mahasiswa') {
                return redirect('/dashboard/mahasiswa');
            } else {
                return back()->with('error', 'Role tidak dikenali.');
            }
            } else {
                    return back()->with('error', 'Email atau password salah.');
        }
    }
}
