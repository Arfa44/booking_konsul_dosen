<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index_mahasiswa');
    }



        public function jadwalDosen()
        {
         $jadwal = [
            (object)[
             'dosen' => (object)['nama' => 'Pak Budi'],
             'tanggal' => '2025-06-18', // ganti 'Senin' jadi tanggal asli
             'jam_mulai' => '08:00',
             'jam_selesai' => '10:00',
             'ruang' => 'Ruang 101',
            ],
            (object)[
                'dosen' => (object)['nama' => 'Bu Sari'],
                'tanggal' => '2025-06-20', // ganti 'Rabu' jadi tanggal asli
                'jam_mulai' => '13:00',
                'jam_selesai' => '15:00',
                'ruang' => 'Ruang 202',
             ]
        ];

    return view('mahasiswa.jadwal_dosen', compact('jadwal'));
}



    public function formBooking()
    {
    // Dummy data dosen. Nantinya ambil dari database
    $daftarDosen = [
        ['id' => 1, 'nama' => 'Pak Budi'],
        ['id' => 2, 'nama' => 'Bu Sari'],
    ];

    return view('mahasiswa.form_booking', compact('daftarDosen'));
    }

    public function simpanBooking(Request $request)
    {
    // Validasi data (boleh kamu kembangkan)
    $request->validate([
        'dosen_id' => 'required',
        'tanggal' => 'required|date',
        'topik' => 'required|string|max:255',
    ]);

    // Simpan ke database nanti (untuk sekarang bisa simpan ke session atau tampilkan alert)
    return redirect()->back()->with('success', 'Booking konsultasi berhasil dikirim.');
    }

    
        public function statusBooking()
    {
    // Data dummy (nanti ambil dari tabel booking)
    $bookingSaya = [
        [
            'dosen' => 'Pak Budi',
            'tanggal' => '2025-06-18',
            'topik' => 'Bimbingan TA',
            'status' => 'Menunggu'
        ],
        [
            'dosen' => 'Bu Sari',
            'tanggal' => '2025-06-20',
            'topik' => 'Bahas laporan',
            'status' => 'Disetujui'
        ]
    ];

    return view('mahasiswa.status_booking', compact('bookingSaya'));
    }

    //PROFIL
    public function profil()
    {
    // Data dummy
    $profil = (object)[
        'NPM' => '230302075',
        'nama_mhs' => 'Anisatun Faoziah',
        'kelas_mhs' => 'TI-2D',
        'prodi_mhs' => 'Teknik Informatika',
        'jurusan_mhs' => 'Komputer dan Bisnis',
        ];

     return view('mahasiswa.profil', compact('profil'));
    }

    public function simpanProfil(Request $request)
    {
        // Belum simpan ke database, tampilkan alert dummy
         return redirect()->route('mahasiswa.profil')->with('success', 'Profil berhasil disimpan (dummy).');
    }



}
