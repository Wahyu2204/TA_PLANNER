<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function mahasiswaDashboard()
    {
        return view('mahasiswa.dashboard'); // Halaman untuk mahasiswa
    }

    public function dosenDashboard()
    {
        return view('dosen.dashboard'); // Halaman untuk dosen
    }
}