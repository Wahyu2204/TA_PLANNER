<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaDosen extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalBimbinganFactory> */
    use HasFactory;

    protected $table = 'mahasiswa_dosen';

    protected $fillable = [
        'mahasiswa_id', 'dosen_id'
    ];
}

