<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
        //return view('auth.login');
    }

    public function login(Request $request)
    {
        $response = Http::post('http://localhost:8080/auth/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            session(['jwt_token' => $data['token']]);
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Login gagal!');
        }
    }

    public function logout()
    {
        session()->forget('jwt_token');
        return redirect('/login')->with('success', 'Logged out');
    }
}
