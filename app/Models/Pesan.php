<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesan';

    protected $fillable = [
        'dari', 'ke', 'pesan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }
}
