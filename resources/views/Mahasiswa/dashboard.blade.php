@extends('dashboard-layout.base')

@section('title', 'TA Planner | Dashboard Mahasiswa')

@section('pp', 'pp mahasiswa.jpeg')
@section('nama', 'Asep Throttle')
@section('role', 'Mahasiswa')

@section('content')
<x-header-content-dashboard head="Dashboard" />
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
              <h1 class="mb-3" style="font-weight: bold; font-size: 3.5rem !important">Hi, Asep Throttle.</h1>
              <p class="mb-1 opacity-75" style="font-size: 1.5rem !important">Semangat terus dalam menyelesaikan tugas akhir!</p>
              <p class="opacity-75" style="font-size: 1.5rem !important">Lulus sudah di depan mata, kamu pasti bisa!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h1 class="mb-4">TimeLine</h1>
          <div class="mb-3" style="height: 78px;position: relative;border-radius: 20px;overflow: hidden;color:white">
            <div class="d-flex align-items-center justify-content-end" style="height: 100%;width: 100%;background: #37CF29;">
              <h4 style="margin-right: 20px">15 Apr 2024</h4>
            </div>
            <div class="d-flex align-items-center" style="height: 100%;position: absolute;left: 0;top: 0;width: 75%;background: #CF2929;border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
              <h4 style="margin-left: 20px">15 Jan 2024</h4>
            </div>
          </div>
          <h4>Waktu tersisa 6 bulan lagi!</h4>
        </div>
      </div>
    </div>
  </div>
</x-main-content-dashboard>
@endsection