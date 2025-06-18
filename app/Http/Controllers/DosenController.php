<?php

//Ini controller dashboard dosen

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //ke index
    public function index()
    {
    return view('dosen.index_dosen');
    }

    // Langkah 1: Lihat Jadwal Konsultasi
    public function indexJadwal()
{
    // Data dummy jadwal dosen
    $jadwals = [
        (object)[
            'id' => 1,
            'nama_dosen' => 'Dr. Andi Wijaya',
            'tanggal' => '2025-06-20',
            'jam_mulai' => '08:00',
            'jam_selesai' => '10:00',
            'ruang' => 'Ruang 301',
        ],
        (object)[
            'id' => 2,
            'nama_dosen' => 'Dr. Andi Wijaya',
            'tanggal' => '2025-06-21',
            'jam_mulai' => '10:30',
            'jam_selesai' => '12:00',
            'ruang' => 'Ruang 302',
        ]
    ];

    return view('dosen.dosen_jadwal', compact('jadwals'));
}


    //tambah jadwal dosen
    public function formTambahJadwal()
    {
        return view('dosen.tambah_jadwal');
    }

    //simpan jadwal dosen
    public function simpanJadwal(Request $request)
    {
    // Validasi input
    $request->validate([
        'tanggal' => 'required|date',
        'jam_mulai' => 'required',
        'jam_selesai' => 'required|after:jam_mulai',
        'ruang' => 'required|string|max:100',
    ]);

    // Belum simpan ke database (data dummy)
    // Bisa ditambahkan ke session atau ditampilkan saja alert sukses

    return redirect()->route('dosen.jadwal')->with('success', 'Jadwal berhasil ditambahkan (dummy data).');
    }

    
        public function editJadwal($id)
    {
        // Sementara data dummy
        $jadwal = (object)[
            'id' => $id,
            'tanggal' => '2025-06-20',
            'jam_mulai' => '08:00',
           'jam_selesai' => '10:00',
           'ruang' => 'Ruang 101',
    ];

    return view('dosen.edit_jadwal', compact('jadwal'));
    }

    public function updateJadwal(Request $request, $id)
        {
         $request->validate([
             'tanggal' => 'required|date',
            'jam_mulai' => 'required',
             'jam_selesai' => 'required|after:jam_mulai',
             'ruang' => 'required|string|max:100',
        ]);

         // Simpan ke database nanti (sekarang dummy)
         return redirect()->route('dosen.jadwal')->with('success', 'Jadwal berhasil diperbarui.');
        }


        public function hapusJadwal($id)
        {
          // Ini hanya dummy, karena belum konek ke database
            return redirect()->route('dosen.jadwal')->with('success', 'Jadwal berhasil dihapus (dummy data).');
        }


    // public function destroy($id)
    // {
    //     $jadwal = Jadwal::findOrFail($id);
    //     $jadwal->delete();

    //      return redirect()->route('dosen.jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    // }


 

    // Langkah 2: Set / Atur Sesi Konsultasi
    public function indexSesi()
    {
        return view('dosen.dosen_sesi');
    }

    public function simpanSesi(Request $request)
    {
        // Simpan data sesi konsultasi ke database
        // validasi dan simpan bisa ditambahkan sesuai kebutuhan
        return redirect()->back()->with('success', 'Sesi konsultasi berhasil disimpan');
    }

    // Langkah 3: Lihat dan Kelola Booking Konsultasi
    public function indexBooking()
    {
        return view('dosen.dosen_booking');
    }

    public function setujuiBooking($id)
    {
        // Logika menyetujui booking
        return redirect()->back()->with('success', 'Booking disetujui.');
    }

    public function tolakBooking($id)
    {
        // Logika menolak booking
        return redirect()->back()->with('success', 'Booking ditolak.');
    }

    public function profil()
    {
    // Dummy data seolah dari database
        $detail = (object)[
         'nidn' => '12345678',
         'nama_dosen' => 'Dr. Siti Aminah, M.Kom'
        ];

        return view('dosen.profil', compact('detail'));
    }

    public function updateProfil(Request $request)
    {
      // Simulasi validasi (opsional tapi bagus)
         $request->validate([
            'nidn' => 'required|numeric',
            'nama_dosen' => 'required|string|max:255',
         ]);

        // Belum nyimpan ke database beneran
        return redirect()->route('dosen.profil')->with('success', 'Profil (dummy) berhasil disimpan.');
    }


}
