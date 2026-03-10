<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index(Request $request, $from)
    {
        $to = $request->to;

        $user = User::find($from);
        $userTo = User::find($to);

        $pesan = Pesan::where([
            'dari' => $from,
            'ke' => $to
        ])->orWhere([
            'dari' => $to,
            'ke' => $from
        ])->get();

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $pesan,
            'photo_profile' => [
                $user->photo_profile,
                $userTo->photo_profile
            ],
            'tujuan' => [
                'name' => $userTo->name,
                'id' => $userTo->id
            ]
        ], 200);
    }

    public function kirim(Request $request, $from)
    {
        $pesanCreate = Pesan::create([
            'dari' => $from,
            'ke' => $request->to,
            'pesan' => $request->pesan
        ]);

        if (!$pesanCreate) {
            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data!'
            ], 400);
        }

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }
}