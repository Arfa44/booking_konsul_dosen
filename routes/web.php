<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth');
Route::post('/logout', fn() => tap(Auth::logout(), fn() => redirect('/login')))->name('logout');

// ========================
// DASHBOARD UTAMA (untuk user role apa pun)
// ========================
Route::middleware('auth.jwt')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ========================
// DASHBOARD ADMIN
// ========================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Mahasiswa
    Route::get('/mahasiswa', [AdminController::class, 'indexMahasiswa'])->name('mahasiswa');
    Route::get('/mahasiswa/tambah', [AdminController::class, 'tambahMahasiswa'])->name('mahasiswa.tambah');
    Route::get('/mahasiswa/edit/{id}', [AdminController::class, 'editMahasiswa'])->name('mahasiswa.edit');

    // Dosen
    Route::get('/dosen', [AdminController::class, 'indexDosen'])->name('dosen');
    Route::get('/dosen/tambah', [AdminController::class, 'tambahDosen'])->name('dosen.tambah');
    Route::get('/dosen/edit/{id}', [AdminController::class, 'editDosen'])->name('dosen.edit');

    // Jadwal
    Route::get('/jadwal', [AdminController::class, 'jadwal'])->name('jadwal');

    // Sesi Konsultasi
    Route::get('/pengaturan_sesi', [AdminController::class, 'pengaturanSesi'])->name('pengaturan_sesi');

    // Izin Konsultasi
    Route::get('/izin_konsultasi', [AdminController::class, 'izinKonsultasi'])->name('izin_konsultasi');

    // Riwayat
    Route::get('/riwayat', [AdminController::class, 'riwayat'])->name('riwayat');

    // Booking
    Route::get('/booking', [AdminController::class, 'booking'])->name('booking');
    Route::get('/booking/tambah', [AdminController::class, 'tambahBooking'])->name('booking.tambah');
    Route::get('/booking/edit/{id}', [AdminController::class, 'editBooking'])->name('booking.edit');

    // Akun & Role
    Route::get('/akun', [AdminController::class, 'indexAkun']);
   // Route::get('/akun', [AdminController::class, 'indexAkun'])->name('akun');
    Route::post('/akun/update-role', [AdminController::class, 'updateRole'])->name('akun.updateRole');
});

// ========================
// DASHBOARD DOSEN
// ========================
Route::prefix('dashboard/dosen')->name('dosen.')->group(function () {
    Route::get('/', [DosenController::class, 'index'])->name('dashboard');

    Route::get('/jadwal', [DosenController::class, 'indexJadwal'])->name('jadwal');
    Route::get('/jadwal/tambah', [DosenController::class, 'formTambahJadwal'])->name('jadwal.create');
    Route::post('/jadwal/simpan', [DosenController::class, 'simpanJadwal'])->name('jadwal.simpan');
    Route::get('/jadwal/{id}/edit', [DosenController::class, 'editJadwal'])->name('jadwal.edit');
    Route::put('/jadwal/{id}', [DosenController::class, 'updateJadwal'])->name('jadwal.update');
    Route::delete('/jadwal/{id}', [DosenController::class, 'hapusJadwal'])->name('jadwal.delete');

    Route::get('/sesi', [DosenController::class, 'indexSesi'])->name('sesi');
    Route::post('/sesi', [DosenController::class, 'simpanSesi'])->name('sesi.simpan');

    Route::get('/booking', [DosenController::class, 'indexBooking'])->name('booking');
    Route::post('/booking/{id}/setujui', [DosenController::class, 'setujuiBooking'])->name('booking.setujui');
    Route::post('/booking/{id}/tolak', [DosenController::class, 'tolakBooking'])->name('booking.tolak');

    Route::get('/profil', [DosenController::class, 'profil'])->name('profil');
    Route::post('/profil', [DosenController::class, 'updateProfil'])->name('profil.update');
});

// ========================
// DASHBOARD MAHASISWA
// ========================
Route::prefix('dashboard/mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('dashboard');

    Route::get('/jadwal', [MahasiswaController::class, 'jadwalDosen'])->name('jadwal');
    Route::get('/booking', [MahasiswaController::class, 'formBooking'])->name('booking');
    Route::post('/booking', [MahasiswaController::class, 'simpanBooking'])->name('booking.simpan');
    Route::get('/status', [MahasiswaController::class, 'statusBooking'])->name('status');

    Route::get('/profil', [MahasiswaController::class, 'profil'])->name('profil');
    Route::post('/profil', [MahasiswaController::class, 'simpanProfil'])->name('profil.simpan');
});
