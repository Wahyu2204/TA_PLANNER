<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * Cek jika user adalah mahasiswa
     */
    public function isMahasiswa()
    {
        return $this->role === 'mahasiswa';
    }

    /**
     * Cek jika user adalah dosen
     */
    public function isDosen()
    {
        return $this->role === 'dosen';
    }

    // Metode lain ...
}
