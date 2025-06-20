<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    // ------------------- DASHBOARD -------------------
    public function index()
    {
        return view('admin.dashboard');
    }

    // ------------------- DOSEN -------------------
    public function indexDosen()
    {
        // Ambil data dari API
        $response = Http::get('http://localhost:8080/admin/dosen');
        $dosen = $response->json();

        return view('admin.dosen', compact('dosen'));
    }

    public function tambahDosen()
    {
        return view('admin.tambah_dosen');
    }

    public function simpanDosen(Request $request)
    {
        // Kirim data ke API
        $response = Http::post('http://localhost:8080/admin/dosen', [
            'nidn' => $request->nidn,
            'nama_dosen' => $request->nama_dosen,
        ]);

        if ($response->successful()) {
            return redirect('/admin/dosen')->with('success', 'Dosen berhasil ditambahkan');
        }

        return back()->with('error', 'Gagal menambahkan dosen');
    }

    public function editDosen($id)
    {
        $response = Http::get("http://localhost:8080/admin/dosen/$id");
        $dosen = $response->json();

        return view('admin.edit_data_dosen', compact('dosen'));
    }

    public function updateDosen(Request $request, $id)
    {
        $response = Http::put("http://localhost:8080/admin/dosen/$id", [
            'nidn' => $request->nidn,
            'nama_dosen' => $request->nama_dosen,
        ]);

        if ($response->successful()) {
            return redirect('/admin/dosen')->with('success', 'Dosen berhasil diupdate');
        }

        return back()->with('error', 'Gagal update data dosen');
    }

    public function hapusDosen($id)
    {
        $response = Http::delete("http://localhost:8080/admin/dosen/$id");

        if ($response->successful()) {
            return redirect('/admin/dosen')->with('success', 'Dosen berhasil dihapus');
        }

        return back()->with('error', 'Gagal hapus data dosen');
    }

    // ------------------- MAHASISWA (sama prinsipnya) -------------------
    public function indexMahasiswa()
    {
        $response = Http::get('http://localhost:8080/admin/mahasiswa');
        $mahasiswa = $response->json();

        return view('admin.mahasiswa', compact('mahasiswa'));
    }

    public function tambahMahasiswa()
    {
        return view('admin.tambah_mahasiswa');
    }

    public function simpanMahasiswa(Request $request)
    {
        $response = Http::post('http://localhost:8080/admin/mahasiswa', [
            'npm' => $request->npm,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'kelas_mahasiswa' => $request->kelas_mahasiswa,
            'program_studi' => $request->program_studi,
            'jurusan' => $request->jurusan
        ]);

        if ($response->successful()) {
            return redirect('/admin/mahasiswa')->with('success', 'Data mahasiswa ditambahkan');
        }

        return back()->with('error', 'Gagal menambahkan mahasiswa');
    }

    // // ------------------- AKUN -------------------
    // public function indexAkun()
    // {
    //     $response = Http::get('http://localhost:8080/api/users');
    //     $users = $response->json();

    //     return view('admin.akun', compact('users'));
    // }

    // public function updateRole(Request $request)
    // {
    //     $response = Http::put('http://localhost:8080/api/users/' . $request->id, [
    //         'role' => $request->role
    //     ]);

    //     return redirect('/admin/akun')->with('success', 'Role berhasil diubah');
    // }
    

    public function izinKonsultasi()
{
    // Contoh kalau ambil data dari API
    $response = Http::get('http://localhost:8080/admin/izin-konsultasi'); // Ganti dengan URL API kamu
    $izin = $response->json();

    return view('admin.izin_konsultasi', compact('izin'));
}

public function indexAkun(Request $request)
{
    $search = $request->query('search');

    $url = 'http://localhost:8080/api/users';
    if ($search) {
        $url .= '?search=' . urlencode($search);
    }

    $response = Http::get($url);

    $users = $response->successful() ? $response->json() : [];

    return view('admin.akun', compact('users'));
}



}
