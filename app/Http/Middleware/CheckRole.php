<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        // Cek apakah pengguna memiliki role yang sesuai
        if (!$user || $user->role !== $role) {
            return redirect('/');  // Redirect ke halaman lain jika role tidak sesuai
        }

        return $next($request);
    }
}