<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PesanController;

// Auth
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Auth
    Route::post('/logout', [LoginController::class, 'logout']);

    // Profile
    Route::get('/profile/{id}', [ProfileController::class, 'show']);
    Route::post('/profile/{id}/foto', [ProfileController::class, 'gantiPP']);

    // Notifikasi
    Route::get('/notifikasi/{id}', [NotifikasiController::class, 'index']);

    // Pesan
    Route::post('/pesan/{from}', [PesanController::class, 'index']);
    Route::post('/pesan/{from}/kirim', [PesanController::class, 'kirim']);

    // Mahasiswa
    Route::prefix('mahasiswa')->group(function () {
        Route::get('/dashboard', [MahasiswaController::class, 'dashboard']);
        Route::get('/jadwal-bimbingan', [MahasiswaController::class, 'jadwalBimbingan']);
        Route::post('/jadwal-bimbingan', [MahasiswaController::class, 'buatJadwalBimbingan']);
        Route::post('/jadwal-bimbingan/baru/{id}', [MahasiswaController::class, 'baruJadwalBimbingan']);
        Route::get('/riwayat-bimbingan', [MahasiswaController::class, 'riwayatBimbingan']);
        Route::get('/riwayat-bimbingan/{id}', [MahasiswaController::class, 'riwayatBimbinganDetail']);
    });

    // Dosen
    Route::prefix('dosen')->group(function () {
        Route::get('/dashboard', [DosenController::class, 'dashboard']);
        Route::get('/bimbingan', [DosenController::class, 'bimbingan']);
        Route::get('/bimbingan/{id}', [DosenController::class, 'bimbinganAcc']);
        Route::post('/bimbingan/{id}/terima', [DosenController::class, 'bimbinganAccTerima']);
        Route::post('/bimbingan/{id}/tolak', [DosenController::class, 'bimbinganAccTolak']);
        Route::get('/bimbingan/{id}/umpan-balik', [DosenController::class, 'umpanBalik']);
        Route::post('/bimbingan/{id}/umpan-balik', [DosenController::class, 'kirimUmpanBalik']);
        Route::get('/riwayat-bimbingan', [DosenController::class, 'riwayatBimbingan']);
        Route::get('/riwayat-bimbingan/{id}', [DosenController::class, 'riwayatBimbinganDetail']);
        Route::get('/pengirim-pesan/{id}', [DosenController::class, 'getAllUserKirim']);
    });
});