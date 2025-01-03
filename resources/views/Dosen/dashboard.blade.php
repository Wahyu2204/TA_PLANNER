@extends('layouts.dashboard.base')

@section('title', 'TA Planner | Dashboard Dosen')

@section('pp', 'pp dosen.jpeg')

@section('content')
<x-header-content-dashboard>
  <ol class="breadcrumb float-sm-end">
    <li class="breadcrumb-item" aria-current="page">Dashboard</li>
  </ol>
</x-header-content-dashboard>
<x-main-content-dashboard>
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-4">
              <img src="{{ asset('assets/rpl.img') }}/welcome.png" alt="Welcome Dashboard" class="img-fluid">
            </div>
            <div class="col-8 d-flex flex-column justify-content-center text-justify">
              <h1 class="mb-3" style="font-weight: bold; font-size: 3.5rem !important">Hi, Nurhayadi.</h1>
              <p class="mb-1 opacity-75" style="font-size: 1.5rem !important">Teruskan semangat dalam mendidik dan membimbing!</p>
              <p class="opacity-75" style="font-size: 1.5rem !important">Setiap langkah Anda adalah inspirasi bagi para mahasiswa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-6">
        <div class="card" style="min-height: 230px">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1 style="font-weight: bold">Jumlah Bimbingan</h1>
                        <p style="font-weight: bold;font-size:8rem !important;">{{ $jm }}</p>
                        <p>Mahasiswa</p>
                    </div>
                    <div class="" style="width: 14rem">
                        <img src="{{ asset('assets/rpl.img') }}/mahasiswa.png" class="img-fluid" style="object-fit: cover;width:100%;min-height:100%;" alt="Mahasiswa Picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card" style="min-height: 230px">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1 style="font-weight: bold">Antrean Bimbingan</h1>
                        <p style="font-weight: bold;font-size:8rem !important;">{{ $ja }}</p>
                        <p>Mahasiswa Sedang Menunggu Konfirmasi</p>
                    </div>
                    <div class="d-flex align-items-center" style="width: 14rem">
                        <img src="{{ asset('assets/rpl.img') }}/time.png" class="img-fluid" style="object-fit: cover;width:100%;height:100%;" alt="Time Picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</x-main-content-dashboard>
@endsection