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
        'mahasiswa_id', 'dosen_id', 'tanggal', 'waktu', 'tempat', 'umpan_balik', 'alasan', 'hari_pilihan_dosen', 'diterima', 'selesai', 'ditolak', 'buat_baru'
    ];

    public function mahasiswa() {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }

    public function dosen() {
        return $this->belongsTo(User::class, 'dosen_id', 'id');
    }
}

