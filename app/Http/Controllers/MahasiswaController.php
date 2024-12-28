<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function dashboard()
    {
        return view('mahasiswa.dashboard');
    }

    public function jadwalBimbingan()
    {
        return view('mahasiswa.jadwal-bimbingan');
    }

    public function riwayatBimbingan()
    {
        return view('mahasiswa.riwayat-bimbingan');
    }

    public function riwayatBimbinganDetail()
    {
        return view('mahasiswa.riwayat-bimbingan-detail');
    }
    
    public function profile()
    {
        return view('mahasiswa.profile');
    }
}