<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use App\Models\JadwalBimbingan;
use App\Models\Notifikasi;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{
    public function profile($id)
    {
        $user = User::find($id);

        return view('profile', ['user' => $user]);
    }

    public function notifikasi($id)
    {
        $notifikasi = Notifikasi::where('user_id', $id)->latest()->get();

        return response()->json([
            'data' => $notifikasi,
            'count' => $notifikasi->count()
        ]);
    }

    public function pesan(Request $request, $from)
    {
        $to = $request->to;

        $user = User::find($from);
        $userTo = User::find($to);

        $fromPP = $user->photo_profile;
        $photo_profile = [$fromPP, $userTo->photo_profile];

        $pesan = Pesan::where([
            'dari' => $from,
            'ke' => $to
        ])->orWhere([
            'dari' => $to,
            'ke' => $from
        ])->get();

        if (!$pesan) {
            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data!',
            ], 400);
        }

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $pesan,
            'photo_profile' => $photo_profile,
            'tujuan' => [$userTo->name, $userTo->id],
        ], 200);
    }

    public function kirimPesan(Request $request, $from)
    {
        $pesan = $request->pesan;
        $to = $request->to;

        $pesanCreate = Pesan::create([
            'dari' => $from,
            'ke' => $to,
            'pesan' => $pesan
        ]);

        if(!$pesanCreate) {
            $pesanCreate->delete();

            return response()->json([
                'message' => 'Terjadi Kesalahan Dalam Pengiriman Data!',
            ], 400);
        }

        return response()->json([
            'message' => 'Berhasil!'
        ], 200);
    }

    public function gantiPP(Request $request, $id) {
        $user = User::find($id);

        if(empty($request->file('ppInput'))) {

        };

        $uploadedFileUrl = cloudinary()->upload($request->file('ppInput')->getRealPath());

        $user->update([
            'photo_profile' => $uploadedFileUrl->getSecurePath()
        ]);

        return redirect()->back();
    }

    public function kirimEmail($id) {
        $user = User::find($id);

        $jadwalBimbingan = JadwalBimbingan::where('mahasiswa_id', $id)->latest()->first();

        Mail::to($user->email)->send(new MailSend($user->name, 'Jadwal Bimbingan', $jadwalBimbingan));
    }
}
