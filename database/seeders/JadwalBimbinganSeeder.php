<?php

namespace Database\Seeders;

use App\Models\JadwalBimbingan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalBimbinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalBimbingan::factory(1)->create();
    }
}
