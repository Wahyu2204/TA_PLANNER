<?php

namespace App\Http\Controllers;

use App\Models\JadwalBimbingan;
use App\Models\User;
use App\Notifications\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function dashboard()
    {
        $jumlahAntrean = JadwalBimbingan::where('diterima', 0)->count();
        $jumlahMahasiswa = User::find(Auth::user()->id)->relatedMahasiswa->count();

        return response()->json([
            'message' => 'Berhasil!',
            'data' => [
                'jumlah_antrean' => $jumlahAntrean,
                'jumlah_mahasiswa' => $jumlahMahasiswa
            ]
        ], 200);
    }

    public function bimbingan()
    {
        $jadwalBimbingan = JadwalBimbingan::where('selesai', 0)
            ->with(['mahasiswa', 'dosen'])
            ->get();

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $jadwalBimbingan
        ], 200);
    }

    public function bimbinganAcc($id)
    {
        $jadwalBimbingan = JadwalBimbingan::with(['mahasiswa', 'dosen'])->find($id);

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $jadwalBimbingan
        ], 200);
    }

    public function bimbinganAccTerima(Request $request, $id)
    {
        $jadwalBimbingan = JadwalBimbingan::find($id);

        $jadwalBimbingan->update([
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'diterima' => 1
        ]);

        $this->madeNotif($request->mahasiswa_id, $request->dosen_id, 'Jadwal Bimbingan Diterima', 'Dosen telah Menyetujui Jadwal Bimbingan Anda', 'Anda Menyetujui Jadwal Bimbingan ' . $jadwalBimbingan->mahasiswa->name);

        $user = User::find($request->mahasiswa_id);
        $user->notify(new SendEmail($user->name, 'Jadwal Bimbingan', $jadwalBimbingan));

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function bimbinganAccTolak(Request $request, $id)
    {
        $jadwalBimbingan = JadwalBimbingan::find($id);

        $jadwalBimbingan->update([
            'alasan' => $request->alasan,
            'hari_pilihan_dosen' => $request->hariPilihanDosen,
            'ditolak' => 1
        ]);

        $this->madeNotif($request->mahasiswa_id, $request->dosen_id, 'Jadwal Bimbingan Ditolak', 'Jadwal Bimbingan Anda Ditolak Oleh Dosen', 'Anda Menolak Jadwal Bimbingan Mahasiswa ' . $jadwalBimbingan->mahasiswa->name);

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function riwayatBimbingan()
    {
        $jadwalBimbingan = JadwalBimbingan::where('selesai', 1)
            ->with(['mahasiswa', 'dosen'])
            ->get();

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $jadwalBimbingan
        ], 200);
    }

    public function riwayatBimbinganDetail($id)
    {
        $jadwalBimbingan = JadwalBimbingan::with(['mahasiswa', 'dosen'])->find($id);

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $jadwalBimbingan
        ], 200);
    }

    public function umpanBalik($id)
    {
        $jadwalBimbingan = JadwalBimbingan::with(['mahasiswa', 'dosen'])->find($id);

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $jadwalBimbingan
        ], 200);
    }

    public function kirimUmpanBalik(Request $request, $id)
    {
        $jadwalBimbingan = JadwalBimbingan::find($id);

        $jadwalBimbingan->update([
            'umpan_balik' => $request->umpan_balik,
            'selesai' => 1
        ]);

        $this->madeNotif($request->mahasiswa_id, $request->dosen_id, 'Umpan Balik', 'Dosen telah Mengirim Umpan Balik', 'Anda Mengirim Umpan Balik Kepada Mahasiswa ' . $jadwalBimbingan->mahasiswa->name);

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function getAllUserKirim($id)
    {
        $allUser = User::find($id)->relatedMahasiswa;

        $users = [];
        foreach ($allUser as $value) {
            $user = User::find($value->id);
            $users[] = [
                'name' => $user->name,
                'photo_profile' => $user->photo_profile,
                'id' => $user->id
            ];
        }

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $users
        ], 200);
    }
}