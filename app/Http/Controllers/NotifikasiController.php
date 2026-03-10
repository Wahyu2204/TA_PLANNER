<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index($id)
    {
        $notifikasi = Notifikasi::where('user_id', $id)->latest()->get();

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $notifikasi,
            'count' => $notifikasi->count()
        ], 200);
    }
}