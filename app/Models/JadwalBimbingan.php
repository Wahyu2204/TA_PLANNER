<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalBimbingan extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalBimbinganFactory> */
    use HasFactory;

    protected $table = 'jadwal_bimbingan';

    protected $fillable = [
        'id_mahasiswa', 'id_dosen', 'tanggal', 'waktu', 'tempat', 'umpan_balik', 'alasan', 'hari_pilihan_dosen', 'diterima', 'selesai', 'ditolak'
    ];
}

