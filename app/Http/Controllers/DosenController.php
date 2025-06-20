<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DosenController extends Controller
{
    // Halaman dashboard utama dosen
    public function index()
    {
        return view('dosen.index_dosen');
    }

    // ================================
    // Lihat & Kelola Jadwal Konsultasi
    // ================================

    public function indexJadwal()
    {
        $response = Http::get('http://localhost:8080/dosen/jadwal_konsultasi');

        if ($response->successful()) {
            $jadwals = $response->json();
        } else {
            $jadwals = [];
        }

        return view('dosen.dosen_jadwal', compact('jadwals'));
    }

    public function formTambahJadwal()
    {
        return view('dosen.tambah_jadwal');
    }


    public function simpanJadwal(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required|after:jam_mulai',
            'ruang' => 'required|string|max:100',
        ]);

        $response = Http::post('http://localhost:8080/dosen/jadwal_konsultasi', [
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'ruang' => $request->ruang,
        ]);

        if ($response->successful()) {
            return redirect()->route('dosen.jadwal')->with('success', 'Jadwal berhasil ditambahkan.');
        } else {
            return back()->with('error', 'Gagal menambahkan jadwal.');
        }
    }

     public function editJadwal($id)
    {
        $response = Http::get("http://localhost:8080/dosen/konsultasi/$id");

        if ($response->successful()) {
            $jadwal = (object) $response->json();
            return view('dosen.edit_jadwal', compact('jadwal'));
        } else {
            return redirect()->route('dosen.jadwal')->with('error', 'Gagal mengambil data jadwal.');
        }
    } 
    public function updateJadwal(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required|after:jam_mulai',
            'ruang' => 'required|string|max:100',
        ]);

        $response = Http::put("http://localhost:8080/dosen/konsultasi/$id", [
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'ruang' => $request->ruang,
        ]);

        if ($response->successful()) {
            return redirect()->route('dosen.jadwal')->with('success', 'Jadwal berhasil diperbarui.');
        } else {
            return back()->with('error', 'Gagal memperbarui jadwal.');
        }
    }

    public function hapusJadwal($id)
    {
        $response = Http::delete("http://localhost:8080/dosen/jadwal_konsultasi/$id");

        if ($response->successful()) {
            return redirect()->route('dosen.jadwal')->with('success', 'Jadwal berhasil dihapus.');
        } else {
            return redirect()->route('dosen.jadwal')->with('error', 'Gagal menghapus jadwal.');
        }
    }

    // ================================
    // FITUR DI SKIP  Atur Jumlah Sesi Konsultasi
    // ================================

    // public function indexSesi()
    // {
    //     $response = Http::get('http://localhost:8000/api/sesi-konsultasi');

    //     if ($response->successful()) {
    //         $sesis = $response->json();
    //     } else {
    //         $sesis = [];
    //     }

    //     return view('dosen.dosen_sesi', compact('sesis'));
    // }

    // public function simpanSesi(Request $request)
    // {
    //     $request->validate([
    //         'jumlah_sesi' => 'required|numeric|min:1',
    //     ]);

    //     $response = Http::post('http://localhost:8000/api/sesi-konsultasi', [
    //         'jumlah_sesi' => $request->jumlah_sesi,
    //     ]);

    //     if ($response->successful()) {
    //         return redirect()->back()->with('success', 'Sesi konsultasi berhasil disimpan.');
    //     } else {
    //         return redirect()->back()->with('error', 'Gagal menyimpan sesi.');
    //     }
    // }

    // ================================
    //  Kelola Booking Konsultasi
    // ================================

    public function indexBooking()
    {
        $response = Http::get('http://localhost:8080/dosen/konsultasi');

        if ($response->successful()) {
            $bookings = $response->json();
        } else {
            $bookings = [];
        }

        return view('dosen.dosen_booking', compact('bookings'));
    }

    public function setujuiBooking($id)
    {
        $response = Http::put("http://localhost:8080/dosen/konsultasi/$id/status", [
            'status' => 'disetujui'
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Booking disetujui.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyetujui booking.');
        }
    }

    public function tolakBooking($id)
    {
        $response = Http::put("http://localhost:8080/dosen/konsultasi/$id/status", [
            'status' => 'ditolak'
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Booking ditolak.');
        } else {
            return redirect()->back()->with('error', 'Gagal menolak booking.');
        }
    }

    // ================================
    // PROFIL DOSEN
    // ================================

    public function profil()
    {
        $id_user = session('id_user'); // Sesuaikan sesuai loginmu

        $response = Http::get("http://localhost:8080/dosen/dosen/$id_user");

        if ($response->successful()) {
            $detail = (object) $response->json();
        } else {
            $detail = null;
        }

        return view('dosen.profil', compact('detail'));
    }

    public function updateProfil(Request $request)
    {
        $request->validate([
            'nidn' => 'required|numeric',
            'nama_dosen' => 'required|string|max:255',
        ]);

        $id_user = session('id_user');

        $response = Http::put("http://localhost:8080/dosen/dosen/$id_user", [
            'nidn' => $request->nidn,
            'nama_dosen' => $request->nama_dosen,
        ]);

        if ($response->successful()) {
            return redirect()->route('dosen.profil')->with('success', 'Profil berhasil diperbarui.');
        } else {
            return redirect()->route('dosen.profil')->with('error', 'Gagal memperbarui profil.');
        }
    }
}
