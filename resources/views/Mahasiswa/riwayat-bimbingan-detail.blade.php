@extends('dashboard-layout.base')

@section('title', 'TA Planner | Riwayat Bimbingan Detail Mahasiswa')

@section('pp', 'pp mahasiswa.jpeg')
@section('nama', 'Asep Throttle')
@section('role', 'Mahasiswa')

@section('content')
<x-header-content-dashboard>
  <ol class="breadcrumb float-sm-end">
    <li class="breadcrumb-item">
      <a href="{{ route('mahasiswa.riwayat-bimbingan') }}">
        Riwayat Bimbingan
      </a>
    </li>
    <li class="breadcrumb-item" aria-current="page">Detail</li>
    <li class="breadcrumb-item active" aria-current="page">1</li>
  </ol>
</x-header-content-dashboard>
<x-main-content-dashboard>
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
            <table class="table">
                <tbody>
                  <tr>
                    <th style="width: 12rem;">Nama Mahasiswa</th>
                    <td>Asep Throttle</td>
                  </tr>
                  <tr>
                    <th>Nama Dosen</th>
                    <td>Nurhayadi</td>
                  </tr>
                  <tr>
                    <th>Tanggal Pengajuan</th>
                    <td>08:00, Jumat 07/09/2024</td>
                  </tr>
                  <tr>
                    <th>Tanggal Pertemuan</th>
                    <td>Senin, 10/09/2024</td>
                  </tr>
                  <tr>
                    <th>Waktu</th>
                    <td>08:30 WIB</td>
                  </tr>
                  <tr>
                    <th>Tempat</th>
                    <td>Kampus B, Ruang 201</td>
                  </tr>
                  <tr>
                    <th>Umpan Balik</th>
                    <td>Perhatikan Pemilihan Kata pada BAB 2 dan 3 </td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
</x-main-content-dashboard>
@endsection