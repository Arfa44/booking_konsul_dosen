<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AkunController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        if ($search) {
            $response = Http::get('http://localhost:8080/admin/user/search', [
                'keyword' => $search
            ]);
        } else {
            $response = Http::get('http://localhost:8080/api/user');
        }

        if ($response->successful()) {
            $data = $response->json();
            $users = $data['data_users'] ?? [];
        } else {
            $users = [];
        }

        return view('admin.akun', compact('users'));
    }



//INI KALO PAKAI DATA DUMMY
//     public function index(Request $request)
// {
//     // sementara pake dummy dulu
//     $users = [
//         [
//             'id' => 1,
//             'email' => 'admin@usecash.com',
//             'username' => 'admin',
//             'role' => 'admin'
//         ],
//         [
//             'id' => 2,
//             'email' => 'dosen@usecash.com',
//             'username' => 'dosen123',
//             'role' => 'dosen'
//         ],
//     ];

//     return view('admin.akun', compact('users'));
// }

}
