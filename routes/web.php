<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;

// ========================
// HALAMAN UMUM
// ========================
Route::get('/', fn() => view('welcome'));
Route::get('/home', fn() => view('home'));

// ========================
// REGISTER
// ========================
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// ========================
// LOGIN / LOGOUT
// ========================
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', fn() => tap(Auth::logout(), fn() => redirect('/login')))->name('logout');

// ========================
// DASHBOARD ADMIN
// ========================
Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'layouts.dashboard')->name('layouts.dashboard');

    Route::view('/mahasiswa', 'admin.mahasiswa');
    Route::view('/riwayat', 'admin.riwayat');
    Route::view('/jadwal', 'admin.jadwal');
    Route::view('/jadwal_dosen', 'admin.jadwal');
    Route::view('/pengaturan_sesi', 'admin.pengaturan_sesi');
    Route::view('/izin_konsultasi', 'admin.izin_konsultasi');
    Route::view('/dosen', 'admin.dosen');
    Route::view('/Dashboard', 'admin.Dashboard');

    // Data Mahasiswa
    Route::view('/tambah_data_mahasiswa', 'admin.tambah_data_mahasiswa');
    Route::view('/edit_data_mahasiswa', 'admin.edit_data_mahasiswa');
    Route::view('/hapus_data_mahasiswa', 'admin.hapus_data_mahasiswa');

    // Riwayat Konsultasi
    Route::view('/tambah_riwayat_konsultasi_mahasiswa', 'admin.tambah_riwayat_konsultasi_mahasiswa');
    Route::view('/edit_riwayat_konsultasi_mahasiswa', 'admin.edit_riwayat_konsultasi_mahasiswa');
    Route::view('/riwayat_konsultasi', 'admin.riwayat_konsultasi');

    // Booking & Konsultasi
    Route::view('/ajukan', 'admin.ajukan');
    Route::view('/booking', 'admin.booking');
    Route::view('/tambah_booking', 'admin.tambah_booking');
    Route::view('/edit_konsultasi', 'admin.edit_konsultasi');

    // Akun & Role
    Route::view('/akun', 'admin.akun');
    Route::view('/update_role', 'admin.update_role');

    // Data Dosen
    Route::view('/tambah_data_dosen', 'admin.tambah_data_dosen');
    Route::view('/edit_data_dosen', 'admin.edit_data_dosen');
    Route::view('/hapus_data_dosen', 'admin.hapus_data_dosen');
});

// ========================
// DASHBOARD DOSEN
// ========================
Route::prefix('dashboard/dosen')->name('dosen.')->group(function () {
    Route::get('/', [DosenController::class, 'index'])->name('dashboard');

    // Jadwal Konsultasi
    Route::get('/jadwal', [DosenController::class, 'indexJadwal'])->name('jadwal');
    Route::get('/jadwal/tambah', [DosenController::class, 'formTambahJadwal'])->name('jadwal.create');
    Route::post('/jadwal/simpan', [DosenController::class, 'simpanJadwal'])->name('jadwal.simpan');
    Route::get('/jadwal/{id}/edit', [DosenController::class, 'editJadwal'])->name('jadwal.edit');
    Route::put('/jadwal/{id}', [DosenController::class, 'updateJadwal'])->name('jadwal.update');
    Route::delete('/jadwal/{id}', [DosenController::class, 'hapusJadwal'])->name('jadwal.delete');

    // Sesi Konsultasi
    Route::get('/sesi', [DosenController::class, 'indexSesi'])->name('sesi');
    Route::post('/sesi', [DosenController::class, 'simpanSesi'])->name('sesi.simpan');

    // Booking Konsultasi
    Route::get('/booking', [DosenController::class, 'indexBooking'])->name('booking');
    Route::post('/booking/{id}/setujui', [DosenController::class, 'setujuiBooking'])->name('booking.setujui');
    Route::post('/booking/{id}/tolak', [DosenController::class, 'tolakBooking'])->name('booking.tolak');

    // Profil Dosen
    Route::get('/profil', [DosenController::class, 'profil'])->name('profil');
    Route::post('/profil', [DosenController::class, 'updateProfil'])->name('profil.update');
});

// ========================
// DASHBOARD MAHASISWA
// ========================
Route::prefix('dashboard/mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('dashboard');

    // Jadwal, Booking, Status
    Route::get('/jadwal', [MahasiswaController::class, 'jadwalDosen'])->name('jadwal');
    Route::get('/booking', [MahasiswaController::class, 'formBooking'])->name('booking');
    Route::post('/booking', [MahasiswaController::class, 'simpanBooking'])->name('booking.simpan');
    Route::get('/status', [MahasiswaController::class, 'statusBooking'])->name('status');

    // Profil Mahasiswa
    Route::get('/profil', [MahasiswaController::class, 'profil'])->name('profil');
    Route::post('/profil', [MahasiswaController::class, 'simpanProfil'])->name('profil.simpan');
});
