<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_bimbingan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('dosen_id')->references('id')->on('users')->onDelete('cascade');
            $table->time('waktu')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('alasan')->nullable();
            $table->dateTime('hari_pilihan_dosen')->nullable();
            $table->string('tempat')->nullable();
            $table->text('umpan_balik')->nullable();
            $table->boolean('diterima')->default(0);
            $table->boolean('selesai')->default(0);
            $table->boolean('ditolak')->default(0);
            $table->boolean('buat_baru')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_bimbingans');
    }
};
