<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pilihlogin', function () {
    return view('pilihlogin');
});

// Route::get('/loginmahasiswa', function () {
//     return view('loginmahasiswa');
// });

// Route::get('/logindosen', function () {
//     return view('logindosen');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Halaman login
// Rute untuk menampilkan form login mahasiswa
Route::get('/loginmahasiswa', [LoginController::class, 'showLoginForm'])->name('loginmahasiswa');

// Rute untuk menampilkan form login dosen
Route::get('/logindosen', [LoginController::class, 'showLoginDosenForm'])->name('logindosen');

// Rute untuk proses login
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard mahasiswa
Route::prefix('mahasiswa')->group(function () {
    Route::get('dashboard', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');
    Route::get('jadwal-bimbingan', [MahasiswaController::class, 'jadwalBimbingan'])->name('mahasiswa.jadwal-bimbingan');
    Route::get('riwayat-bimbingan', [MahasiswaController::class, 'riwayatBimbingan'])->name('mahasiswa.riwayat-bimbingan');
    Route::get('riwayat-bimbingan-detail', [MahasiswaController::class, 'riwayatBimbinganDetail'])->name('mahasiswa.riwayat-bimbingan-detail');
    Route::get('profile', [MahasiswaController::class, 'profile'])->name('mahasiswa.profile');
    
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
Route::get('/dosen/dashboard', [DashboardController::class, 'dosenDashboard'])
    ->name('dosen.dashboard')
    ->middleware('auth', 'role:dosen'); // Menggunakan middleware role dosen

Route::middleware(['role:dosen'])->group(function () {
    Route::get('/dosen/dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');
});