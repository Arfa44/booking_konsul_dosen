<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $token = session('jwt_token');

        // $response = Http::withToken($token)->get('http://localhost:8080/auth/login');

        // if ($response->successful()) {
            // $data = $response->json();
            return view('layouts.Dashboard');
        // } else {
            // return redirect('/login')->with('error', 'Session expired. Please login again.');
        // }
    }
}
