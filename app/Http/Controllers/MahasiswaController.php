<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function riwayatBimbinganDetail(Request $request)
    {
        return view('mahasiswa.riwayat-bimbingan-detail');
    }
}