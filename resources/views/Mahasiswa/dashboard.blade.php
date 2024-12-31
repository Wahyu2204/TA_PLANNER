@extends('dashboard-layout.base')

@section('title', 'TA Planner | Dashboard Mahasiswa')

@section('pp', 'pp mahasiswa.jpeg')
@section('nama', 'Asep Throttle')
@section('role', 'Mahasiswa')

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
            <div id="progress-bar" class="d-flex align-items-center" style="height: 100%;position: absolute;left: 0;top: 0;background: #CF2929;border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
              <h4 style="margin-left: 20px">15 Jan 2024</h4>
            </div>
          </div>
          <h4 id="progress-info"></h4>
        </div>
      </div>
    </div>
  </div>
</x-main-content-dashboard>
@endsection

@push('script-footer')
  <script>
    const progressBar = document.getElementById('progress-bar')
    const progressInfo = document.getElementById('progress-info')

    const startDate = new Date('2024-12-30'); 
    const endDate = new Date('2025-12-30'); 

    const now = new Date(); 
    const totalDuration = endDate - startDate;
    const elapsedDuration = now - startDate; 

    const months = endDate.getMonth() - startDate.getMonth() + (12 * (endDate.getFullYear() - startDate.getFullYear()));

    let progress = Math.min((elapsedDuration / totalDuration) * 100, 100);
    progressBar.style.width = progress
    progressInfo.textContent = `Waktu tersisa ${months} bulan lagi!`
  </script>
@endpush