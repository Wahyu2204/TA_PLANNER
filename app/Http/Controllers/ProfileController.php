<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);

        return response()->json([
            'message' => 'Berhasil!',
            'data' => $user
        ], 200);
    }

    public function gantiPP(Request $request, $id)
    {
        $user = User::find($id);

        $uploadedFileUrl = cloudinary()->upload($request->file('ppInput')->getRealPath());

        $user->update([
            'photo_profile' => $uploadedFileUrl->getSecurePath()
        ]);

        return response()->json([
            'message' => 'Berhasil!',
        ], 200);
    }
}