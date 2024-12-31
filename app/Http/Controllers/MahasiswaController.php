<?php

namespace App\Http\Controllers;

use App\Models\JadwalBimbingan;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dashboard()
    {
        return view('mahasiswa.dashboard');
    }

    public function jadwalBimbingan()
    {
        $jadwalBimbingan = JadwalBimbingan::where('selesai', 0)->first();

        return view('mahasiswa.jadwal-bimbingan', ['jb' => $jadwalBimbingan]);
    }

    public function buatJadwalBimbingan(Request $request)
    {
        $tanggal = $request->tanggal;

        $jadwalBimbingan = JadwalBimbingan::create([
           'id_mahasiswa' => 1,
           'id_dosen' => 1,
           'tanggal' => $tanggal
        ]);

        if(!$jadwalBimbingan) {
            $jadwalBimbingan->delete();
            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
            ], 400);
        }
        
        Notifikasi::create([
            'id_mahasiswa' => 1,
            'judul' => 'Jadwal Bimbingan',
            'pesan' => 'Jadwal Pertemuan Bimbingan Berhasil Dikirim dan Dibuat'
        ]);

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function riwayatBimbingan()
    {
        $jadwalBimbingan = JadwalBimbingan::where('selesai', 1)->get();
        return view('mahasiswa.riwayat-bimbingan', ['jadwalBimbingan' => $jadwalBimbingan]);
    }

    public function riwayatBimbinganDetail($id)
    {
        $jadwalBimbingan = JadwalBimbingan::find($id);
        return view('mahasiswa.riwayat-bimbingan-detail', ['jadwalBimbingan' => $jadwalBimbingan]);
    }
    
    public function profile()
    {
        return view('mahasiswa.profile');
    }
}