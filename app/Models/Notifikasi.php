<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    /** @use HasFactory<\Database\Factories\NotifikasiFactory> */
    use HasFactory;
    protected $table = 'notifikasi';

    protected $fillable = [
        'id_mahasiswa', 'judul', 'pesan'
    ];
}
