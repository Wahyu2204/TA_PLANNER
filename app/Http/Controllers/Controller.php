<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;

abstract class Controller
{
    public function madeNotif($mahasiswaId, $dosenId, $judul,$pesanMahasiswa, $pesanDosen)
    {
        Notifikasi::create([
            'user_id' => $mahasiswaId,
            'judul' => $judul,
            'pesan' => $pesanMahasiswa
        ]);

        Notifikasi::create([
            'user_id' => $dosenId,
            'judul' => $judul,
            'pesan' => $pesanDosen
        ]);
    }

    public function deleteNotif($mahasiswaId, $dosenId)
    {
        Notifikasi::where('user_id', $mahasiswaId)->latest()->first()->delete();
        Notifikasi::where('user_id', $dosenId)->latest()->first()->delete();
    }
}
