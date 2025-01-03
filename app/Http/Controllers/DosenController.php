<?php

namespace App\Http\Controllers;

use App\Models\JadwalBimbingan;
use App\Models\Notifikasi;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function dashboard()
    {
        $jumlahAntrean = JadwalBimbingan::where('diterima', 0)->count();
        $jumlahMahasiswa = User::find(Auth::user()->id)->relatedMahasiswa->count();
        
        return view('dosen.dashboard', [
            'ja' => $jumlahAntrean,
            'jm' => $jumlahMahasiswa
        ]);
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
        $mahasiswaId = $request->mahasiswa_id;
        $dosenId = $request->dosen_id;

        $jadwalBimbingan = JadwalBimbingan::find($id);

        $jadwalBimbingan->update([
            'waktu' => $waktu,
            'tempat' => $tempat,
            'diterima' => 1
        ]);

        $this->madeNotif($mahasiswaId, $dosenId, 'Jadwal Bimbingan Diterima', 'Dosen telah Menyetujui Jadwal Bimbingan Anda', 'Anda Menyetujui Jadwal Bimbingan ' . $jadwalBimbingan->mahasiswa->name);
        
        if(!$jadwalBimbingan) {
            $jadwalBimbingan->update([
                'waktu' => null,
                'tempat' => null,
                'diterima' => 0
            ]);

            $this->deleteNotif($mahasiswaId, $dosenId);

            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
            ], 400);
        }

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function bimbinganAccTolak(Request $request, $id)
    {
        $alasan = $request->alasan;
        $hariPilihanDosen = $request->hariPilihanDosen;
        $mahasiswaId = $request->mahasiswa_id;
        $dosenId = $request->dosen_id;

        $jadwalBimbingan = JadwalBimbingan::find($id);

        $jadwalBimbingan->update([
            'alasan' => $alasan,
            'hari_pilihan_dosen' => $hariPilihanDosen,
            'ditolak' => 1
        ]);

        
        $this->madeNotif($mahasiswaId, $dosenId, 'Jadwal Bimbingan Ditolak', 'Jadwal Bimbingan Anda Ditolak Oleh Dosen', 'Anda Menolak Jadwal Bimbingan Mahasiswa ' . $jadwalBimbingan->mahasiswa->name);

        if(!$jadwalBimbingan) {
            $jadwalBimbingan->update([
                'alasan' => $alasan,
                'hari_pilihan_dosen' => $hariPilihanDosen,
                'ditolak' => 1
            ]);

            $this->deleteNotif($mahasiswaId, $dosenId);

            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
            ], 400);
        }

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
        $mahasiswaId = $request->mahasiswa_id;
        $dosenId = $request->dosen_id;

        $jadwalBimbingan = JadwalBimbingan::find($id);

        $jadwalBimbingan->update([
            'umpan_balik' => $umpanBalik,
            'selesai' => 1
        ]);

        $this->madeNotif($mahasiswaId, $dosenId, 'Umpan Balik', 'Dosen telah Mengirim Umpan Balik', 'Anda Mengirim Umpan Balik Kepada Mahasiswa ' . $jadwalBimbingan->mahasiswa->name);
        
        if(!$jadwalBimbingan) {
            $jadwalBimbingan->update([
                'umpan_balik' => null,
                'selesai' => 1
            ]);

            $this->deleteNotif($mahasiswaId, $dosenId);

            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
            ], 400);
        }

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function getAllUserKirim($id)
    {
        $allUser = User::find($id)->relatedMahasiswa;

        $users = [];

        foreach ($allUser as $value) {
            $user = User::where('id', $value->id)->get()[0];

            // array_push($users, [$user->name, $user->photo_profile]);
            $users[] = [$user->name, $user->photo_profile, $user->id];
        }

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $users
        ], 200);
    }
}