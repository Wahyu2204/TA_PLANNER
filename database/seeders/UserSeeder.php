<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@example.com',
            'password' => Hash::make('password'), // Ganti 'password' dengan kata sandi Anda
            'role' => 'mahasiswa',
        ]);

        User::create([
            'name' => 'Dosen',
            'email' => 'dosen@example.com',
            'password' => Hash::make('password'), // Ganti 'password' dengan kata sandi Anda
            'role' => 'dosen',
        ]);
    }
}