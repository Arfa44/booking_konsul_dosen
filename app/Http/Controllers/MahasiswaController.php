<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index_mahasiswa');
    }

    // =======================
    // LIHAT JADWAL DOSEN
    // =======================
    public function jadwalDosen()
    {
        $response = Http::get('http://localhost:8000/mahasiswa/lihatJadwal');

        if ($response->successful()) {
            $jadwal = $response->json();
        } else {
            $jadwal = [];
        }

        return view('mahasiswa.jadwal_dosen', compact('jadwal'));
    }

    // =======================
    // FORM BOOKING KONSULTASI
    // =======================
    public function formBooking()
    {
        $response = Http::get('http://localhost:8000/mahasiswa/konsultasi');

        if ($response->successful()) {
            $daftarDosen = $response->json();
        } else {
            $daftarDosen = [];
        }

        return view('mahasiswa.form_booking', compact('daftarDosen'));
    }

    public function simpanBooking(Request $request)
    {
        $request->validate([
            'dosen_id' => 'required',
            'tanggal' => 'required|date',
            'topik' => 'required|string|max:255',
        ]);

        $response = Http::post('http://localhost:8000/mahasiswa/konsultasi', [
            'dosen_id' => $request->dosen_id,
            'tanggal' => $request->tanggal,
            'topik' => $request->topik,
            'mahasiswa_id' => session('id_user'), // asumsi kamu simpan ID user setelah login
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Booking konsultasi berhasil dikirim.');
        } else {
            return redirect()->back()->with('error', 'Gagal melakukan booking.');
        }
    }

    // =======================
    // STATUS BOOKING SAYA
    // =======================
    public function statusBooking()
    {
        $id_user = session('id_user'); // sesuaikan dengan session login kamu

        $response = Http::get("http://localhost:8080/mahasiswa/konsultasi/$id_user");

        if ($response->successful()) {
            $bookingSaya = $response->json();
        } else {
            $bookingSaya = [];
        }

        return view('mahasiswa.status_booking', compact('bookingSaya'));
    }

    // =======================
    // PROFIL MAHASISWA
    // =======================
    public function profil()
    {
        $id_user = session('id_user');

        $response = Http::get("http://localhost:8080/mahasiswa/mahasiswa/$id_user");

        if ($response->successful()) {
            $profil = (object) $response->json(); // disesuaikan jika struktur ada di ['data']
        } else {
            $profil = null;
        }

        return view('mahasiswa.profil', compact('profil'));
    }

    public function simpanProfil(Request $request)
    {
        $request->validate([
            'NPM' => 'required|string',
            'nama_mhs' => 'required|string',
            'kelas_mhs' => 'required|string',
            'prodi_mhs' => 'required|string',
            'jurusan_mhs' => 'required|string',
        ]);

        $id_user = session('id_user');

        $response = Http::put("http://localhost:8080/mahasiswa/mahasiswa/$id_user", [
            'NPM' => $request->NPM,
            'nama_mhs' => $request->nama_mhs,
            'kelas_mhs' => $request->kelas_mhs,
            'prodi_mhs' => $request->prodi_mhs,
            'jurusan_mhs' => $request->jurusan_mhs,
        ]);

        if ($response->successful()) {
            return redirect()->route('mahasiswa.profil')->with('success', 'Profil berhasil diperbarui.');
        } else {
            return redirect()->route('mahasiswa.profil')->with('error', 'Gagal memperbarui profil.');
        }
    }
}