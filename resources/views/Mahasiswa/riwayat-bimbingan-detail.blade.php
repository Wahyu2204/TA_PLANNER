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
                    <td>{{ $jadwalBimbingan->id_mahasiswa }}</td>
                  </tr>
                  <tr>
                    <th>Nama Dosen</th>
                    <td>{{ $jadwalBimbingan->id_dosen }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal Pengajuan</th>
                    <td>{{ date('H:i', strtotime($jadwalBimbingan->created_at)) }}, {{ date('l', strtotime($jadwalBimbingan->created_at)) }} {{ date('d-m-Y', strtotime($jadwalBimbingan->created_at)) }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal Pertemuan</th>
                    <td>{{ date('H:i', strtotime($jadwalBimbingan->waktu)) }}, {{ date('l', strtotime($jadwalBimbingan->tanggal)) }} {{ date('d-m-Y', strtotime($jadwalBimbingan->tanggal)) }}</td>
                  </tr>
                  <tr>
                    <th>Waktu</th>
                    <td>{{ date('H:i', strtotime($jadwalBimbingan->waktu)) }} WIB</td>
                  </tr>
                  <tr>
                    <th>Tempat</th>
                    <td>{{ $jadwalBimbingan->tempat }}</td>
                  </tr>
                  <tr>
                    <th>Umpan Balik</th>
                    <td>{{ $jadwalBimbingan->umpan_balik }}</td>
                  </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</x-main-content-dashboard>
@endsection