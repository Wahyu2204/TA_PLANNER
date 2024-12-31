<?php

namespace App\Http\Controllers;

use App\Models\JadwalBimbingan;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dashboard()
    {
        $jumlahAntrean = JadwalBimbingan::where('diterima', 0)->count();
        return view('dosen.dashboard', ['ja' => $jumlahAntrean]);
    }

    public function bimbingan()
    {
        $jadwalBimbingan = JadwalBimbingan::where('selesai', 0)->get();
        return view('dosen.bimbingan', ['jadwalBimbingan' => $jadwalBimbingan]);
    }

    public function bimbinganAcc($id)
    {
        $jadwalBimbingan = JadwalBimbingan::find($id);
        return view('dosen.bimbingan-acc', ['jb' => $jadwalBimbingan]);
    }

    public function bimbinganAccTerima(Request $request, $id)
    {
        $waktu = $request->waktu;
        $tempat = $request->tempat;

        $jadwalBimbingan = JadwalBimbingan::find($id)->update([
            'waktu' => $waktu,
            'tempat' => $tempat,
            'diterima' => 1
        ]);

        if(!$jadwalBimbingan) {
            $jadwalBimbingan->update([
                'waktu' => '',
                'tempat' => '',
                'diterima' => 0
            ]);
            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
            ], 400);
        }
        
        Notifikasi::create([
            'id_mahasiswa' => 1,
            'judul' => 'Jadwal Bimbingan',
            'pesan' => 'Anda Berhasil Meng-ACC Jadwal Bimbingan'
        ]);

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function bimbinganAccTolak(Request $request, $id)
    {
        $alasan = $request->alasan;
        $hariPilihanDosen = $request->hariPilihanDosen;
        
        $jadwalBimbingan = JadwalBimbingan::find($id)->update([
            'alasan' => $alasan,
            'hari_pilihan_dosen' => $hariPilihanDosen,
            'ditolak' => 1
        ]);

        return response()->json([
            'data' => $jadwalBimbingan,
            'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
        ], 200);
        
        if(!$jadwalBimbingan) {
            $jadwalBimbingan->update([
                'alasan' => $alasan,
                'hari_pilihan_dosen' => $hariPilihanDosen,
                'ditolak' => 1
            ]);
            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
            ], 400);
        }
        
        Notifikasi::create([
            'id_mahasiswa' => 1,
            'judul' => 'Jadwal Bimbingan',
            'pesan' => 'Anda Menolak Jadwal Bimbingan'
        ]);

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function riwayatBimbingan()
    {
        $jadwalBimbingan = JadwalBimbingan::where('selesai', 1)->get();
        return view('dosen.riwayat-bimbingan', ['jadwalBimbingan' => $jadwalBimbingan]);
    }

    public function riwayatBimbinganDetail($id)
    {
        $jadwalBimbingan = JadwalBimbingan::find($id);
        return view('dosen.riwayat-bimbingan-detail', ['jadwalBimbingan' => $jadwalBimbingan]);
    }

    public function umpanBalik($id)
    {
        $jadwalBimbingan = JadwalBimbingan::find($id);

        return view('dosen.umpan-balik', ['jb' => $jadwalBimbingan]);
    }

    public function kirimUmpanBalik(Request $request, $id) {
        $umpanBalik = $request->umpan_balik;

        $jadwalBimbingan = JadwalBimbingan::find($id)->update([
            'umpan_balik' => $umpanBalik,
            'selesai' => 1
        ]);

        if(!$jadwalBimbingan) {
            $jadwalBimbingan->update([
                'umpan_balik' => '',
                'selesai' => 1
            ]);
            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
            ], 400);
        }
        
        Notifikasi::create([
            'id_mahasiswa' => 1,
            'judul' => 'Jadwal Bimbingan',
            'pesan' => 'Umpan Balik Anda Berhasil terkirim'
        ]);

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }
}