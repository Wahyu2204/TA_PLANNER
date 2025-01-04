<?php

namespace Database\Seeders;

use App\Models\JadwalBimbingan;
use App\Models\MahasiswaDosen;
use App\Models\Notifikasi;
use App\Models\Pesan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ahmad Kastelo',
            'tanggal_lahir' => date('Y-m-d', strtotime('01-01-2005')),
            'photo_profile' => 'https://res.cloudinary.com/dp4xckrqy/image/upload/v1735812789/uqzqe1gpslbrh4vkshm5.jpg',
            'program_studi' => 'Teknik Informatika',
            'kelas' => '23TI01',
            'no_telp' => '089911223344',
            'email' => 'bestincrease@spamsandwich.com',
            'password' => Hash::make('m'),
            'role' => 'mahasiswa'
        ]);

        User::create([
            'name' => 'Nurhayadi',
            'tanggal_lahir' => date('Y-m-d', strtotime('01-01-2005')),
            'photo_profile' => 'https://res.cloudinary.com/dp4xckrqy/image/upload/v1735812791/xgys1ruoswz6ncvcrxzp.jpg',
            'program_studi' => 'Teknik Informatika',
            'no_telp' => '089911223344',
            'email' => 'n@gmail.com',
            'password' => Hash::make('n'),
            'role' => 'dosen'
        ]);
        
        // JadwalBimbingan::create([
        //     'mahasiswa_id' => 1,
        //     'dosen_id' => 2,
        //     'alasan' => 'Malas',
        //     'hari_pilihan_dosen' => date('Y-m-d', strtotime('02-01-2025')),
        //     'ditolak' => 1
        // ]);


        MahasiswaDosen::create([
            'mahasiswa_id' => 1,
            'dosen_id' => 2
        ]);

        // Pesan::create([
        //     'dari' => 1,
        //     'ke' => 2,
        //     'pesan' => 'kamu jawa ya?'
        // ]);

        // Pesan::create([
        //     'dari' => 2,
        //     'ke' => 1,
        //     'pesan' => 'iya saya dari jawa'
        // ]);


        // $this->call([
        //     JadwalBimbinganSeeder::class
        // ]);
    }
}
