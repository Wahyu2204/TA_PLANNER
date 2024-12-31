<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

// Halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard mahasiswa
Route::prefix('mahasiswa')->group(function () {
    Route::get('dashboard', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');

    Route::get('jadwal-bimbingan', [MahasiswaController::class, 'jadwalBimbingan'])->name('mahasiswa.jadwal-bimbingan');
    Route::post('jadwal-bimbingan', [MahasiswaController::class, 'buatJadwalBimbingan'])->name('mahasiswa.buat-jadwal-bimbingan');

    Route::get('riwayat-bimbingan', [MahasiswaController::class, 'riwayatBimbingan'])->name('mahasiswa.riwayat-bimbingan');
    Route::get('riwayat-bimbingan/detail/{id}', [MahasiswaController::class, 'riwayatBimbinganDetail'])->name('mahasiswa.riwayat-bimbingan-detail');

    Route::get('profile', [MahasiswaController::class, 'profile'])->name('mahasiswa.profile');
});

Route::prefix('dosen')->group(function () {
    Route::get('dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');

    Route::get('bimbingan', [DosenController::class, 'bimbingan'])->name('dosen.bimbingan');

    Route::get('bimbingan/acc/{id}', [DosenController::class, 'bimbinganAcc'])->name('dosen.bimbingan-acc');
    Route::post('bimbingan/acc/{id}/terima', [DosenController::class, 'bimbinganAccTerima'])->name('dosen.bimbingan-acc-terima');
    Route::post('bimbingan/acc/{id}/tolak', [DosenController::class, 'bimbinganAccTolak'])->name('dosen.bimbingan-acc-tolak');

    Route::get('bimbingan/umpan-balik/{id}', [DosenController::class, 'umpanBalik'])->name('dosen.umpan-balik');
    Route::post('bimbingan/umpan-balik/{id}', [DosenController::class, 'kirimUmpanBalik'])->name('dosen.kirim-umpan-balik');

    Route::get('riwayat-bimbingan', [DosenController::class, 'riwayatBimbingan'])->name('dosen.riwayat-bimbingan');
    Route::get('riwayat-bimbingan/detail/{id}', [DosenController::class, 'riwayatBimbinganDetail'])->name('dosen.riwayat-bimbingan-detail');
});

// Will use
// Route::middleware(['role:mahasiswa'])->group(function () {
//     Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');
// });

// Not use
// Route::get('/mahasiswa/dashboard', [DashboardController::class, 'mahasiswaDashboard'])
//     ->name('mahasiswa.dashboard')
//     ->middleware('auth', 'role:mahasiswa');

// Dashboard dosen
// Route::get('/dosen/dashboard', [DashboardController::class, 'dosenDashboard'])
//     ->name('dosen.dashboard')
//     ->middleware('auth', 'role:dosen');

// Route::middleware(['role:dosen'])->group(function () {
//     Route::get('/dosen/dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');
// });