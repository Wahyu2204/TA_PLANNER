<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginmahasiswa');
    }

    public function showLoginDosenForm()
    {
        return view('auth.logindosen'); // Pastikan file `logindosen.blade.php` ada.
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            if ($user->role === 'mahasiswa') {
                return redirect()->route('mahasiswa.dashboard');
            } elseif ($user->role === 'dosen') {
                return redirect()->route('dosen.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}