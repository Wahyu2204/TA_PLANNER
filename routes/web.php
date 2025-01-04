<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GeneralController;
use App\Models\JadwalBimbingan;
use App\Models\User;
use App\Notifications\SendEmail;
use Cloudinary\Transformation\Rotate;
use Illuminate\Support\Facades\Notification;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('pilihlogin');
})->name('login');

// Halaman login
// Rute untuk menampilkan form login mahasiswa
Route::get('/login/mahasiswa', [LoginController::class, 'showLoginForm'])->name('login.mahasiswa');

// Rute untuk menampilkan form login dosen
Route::get('/login/dosen', [LoginController::class, 'showLoginDosenForm'])->name('login.dosen');

// Rute untuk proses login
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// Rute untuk logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('profile/{id}', [GeneralController::class, 'profile'])->name('profile');

    Route::get('/notifikasi/{id}', [GeneralController::class, 'notifikasi'])->name('notifikasi');

    Route::post('pesan/{from}', [GeneralController::class, 'pesan'])->name('pesan');
    Route::post('pesan/{from}/kirim', [GeneralController::class, 'kirimPesan'])->name('kirim-pesan');

    Route::post('ganti-pp/{id}', [GeneralController::class, 'gantiPP'])->name('ganti-pp');

    Route::get('kirim-email/{id}', [GeneralController::class, 'kirimEmail'])->name('kirim-email');
});

Route::get('email', function() {
    $user = User::find(2);
    $jadwalBimbingan = JadwalBimbingan::where('mahasiswa_id', $user->id)->latest()->first();

    return view('gmail.pertemuan', [
        'name' => $user->name,
        'jadwalBimbingan' => $jadwalBimbingan
    ]);
});

Route::get('coba', function() {
    return view('coba');
});

Route::get('/test-mail', function (){
    $user = User::find(2);
    $jadwalBimbingan = JadwalBimbingan::where('mahasiswa_id', $user->id)->latest()->first();

    Notification::route('mail', 'taylor@example.com')->notify(new SendEmail($user->name, 'Jadwal Bimbingan', $jadwalBimbingan));
    return 'Sent';
});


// Dashboard mahasiswa
Route::prefix('mahasiswa')->middleware(['auth', 'checkRole:mahasiswa'])->group(function () {
    Route::get('dashboard', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');

    Route::get('jadwal-bimbingan', [MahasiswaController::class, 'jadwalBimbingan'])->name('mahasiswa.jadwal-bimbingan');
    Route::post('jadwal-bimbingan', [MahasiswaController::class, 'buatJadwalBimbingan'])->name('mahasiswa.buat-jadwal-bimbingan');
    Route::post('jadwal-bimbingan/baru/{id}', [MahasiswaController::class, 'baruJadwalBimbingan'])->name('mahasiswa.baru-jadwal-bimbingan');

    Route::get('riwayat-bimbingan', [MahasiswaController::class, 'riwayatBimbingan'])->name('mahasiswa.riwayat-bimbingan');
    Route::get('riwayat-bimbingan/detail/{id}', [MahasiswaController::class, 'riwayatBimbinganDetail'])->name('mahasiswa.riwayat-bimbingan-detail');
});

Route::prefix('dosen')->middleware(['auth', 'checkRole:dosen'])->group(function () {
    Route::get('dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');

    Route::get('bimbingan', [DosenController::class, 'bimbingan'])->name('dosen.bimbingan');

    Route::get('bimbingan/acc/{id}', [DosenController::class, 'bimbinganAcc'])->name('dosen.bimbingan-acc');
    Route::post('bimbingan/acc/{id}/terima', [DosenController::class, 'bimbinganAccTerima'])->name('dosen.bimbingan-acc-terima');
    Route::post('bimbingan/acc/{id}/tolak', [DosenController::class, 'bimbinganAccTolak'])->name('dosen.bimbingan-acc-tolak');

    Route::get('bimbingan/umpan-balik/{id}', [DosenController::class, 'umpanBalik'])->name('dosen.umpan-balik');
    Route::post('bimbingan/umpan-balik/{id}', [DosenController::class, 'kirimUmpanBalik'])->name('dosen.kirim-umpan-balik');

    Route::get('riwayat-bimbingan', [DosenController::class, 'riwayatBimbingan'])->name('dosen.riwayat-bimbingan');
    Route::get('riwayat-bimbingan/detail/{id}', [DosenController::class, 'riwayatBimbinganDetail'])->name('dosen.riwayat-bimbingan-detail');

    Route::get('pengirim-pesan/{id}', [DosenController::class, 'getAllUserKirim'])->name('dosen.pengirim-pesan');
});