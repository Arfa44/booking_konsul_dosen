<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthJWT
{
    public function handle(Request $request, Closure $next)
    {
        $token = session('jwt_token');

        if (!$token) {
            return redirect('/login')->with('error', 'Token tidak tersedia');
        }

        // Opsional: cek ke BE apakah token valid
        // Misal ada endpoint: /api/check-token
        $response = Http::withToken($token)->get('http://localhost:8080/checkToken');

        if ($response->status() !== 200) {
            return redirect('/login')->with('error', 'Token tidak valid');
        }

        return $next($request);
    }
}
