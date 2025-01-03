<?php

namespace App\Http\Controllers;

use App\Models\JadwalBimbingan;
use App\Models\Notifikasi;
use App\Models\Pesan;
use App\Models\User;
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
        $mahasiswaId = $request->mahasiswa_id;
        $dosenId = $request->dosen_id;
        $buatBaru = $request->buat_baru;

        if (!$buatBaru) {
            $jadwalBimbingan = JadwalBimbingan::create([
                'mahasiswa_id' => $mahasiswaId,
                'dosen_id' => $dosenId,
                'tanggal' => $tanggal
            ]);

            $this->madeNotif($mahasiswaId, $dosenId, 'Jadwal Bimbingan Dibuat', 'Jadwal Pertemuan Bimbingan Berhasil Dikirim dan Dibuat', 'Mahasiswa ' . $jadwalBimbingan->mahasiswa->name . ' Membuat Jadwal Pertemuan Bimbingan');

            if (!$jadwalBimbingan) {
                $jadwalBimbingan->delete();

                $this->deleteNotif($mahasiswaId, $dosenId);

                return response()->json([
                    'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
                ], 400);
            }
        } else {
            $jadwalBimbingan = JadwalBimbingan::where([
                'mahasiswa_id' => $mahasiswaId,
                'buat_baru' => 1
            ]);

            $namaMahasiswa = $jadwalBimbingan->get()[0]->mahasiswa->name;
            $alasan = $jadwalBimbingan->get()[0]->alasan;
            $tanggalPrev = $jadwalBimbingan->get()[0]->tanggal;

            $jadwalBimbingan->update([
                'alasan' => null,
                'hari_pilihan_dosen' => null,
                'tanggal' => $tanggal,
                'buat_baru' => 0,
                'ditolak' => 0,
                'created_at' => now()
            ]);

            $this->madeNotif($mahasiswaId, $dosenId, 'Perubahan Jadwal Bimbingan', 'Jadwal Pertemuan yang Sebelumnya Ditolak telah Diubah dan Dikirim Kembali', 'Mahasiswa ' . $namaMahasiswa . ' Mengganti Jadwal Pertemuan yang Sebelumnya Ditolak');

            if (!$jadwalBimbingan) {
                $jadwalBimbingan->update([
                    'buat_baru' => 1,
                    'ditolak' => 1,
                    'alasan' => $alasan,
                    'tanggal' => $tanggalPrev
                ]);

                $this->deleteNotif($mahasiswaId, $dosenId);

                return response()->json([
                    'message' => 'Terjadi Kesalahan Dalam Pengiriman Data'
                ], 400);
            }
        }

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function baruJadwalBimbingan($id)
    {
        JadwalBimbingan::find($id)->update([
            'buat_baru' => 1
        ]);

        return response()->json([
            'message' => 'Berhasil!'
        ]);
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
}
