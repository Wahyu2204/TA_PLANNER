@extends('dashboard-layout.base')

@section('title', 'TA Planner | Jadwal Bimbingan Mahasiswa')

@section('pp', 'pp mahasiswa.jpeg')
@section('nama', 'Asep Throttle')
@section('role', 'Mahasiswa')

@push('script-header')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.15/index.global.min.js'></script>
@endpush


@section('content')
    <x-header-content-dashboard>
      <ol class="breadcrumb float-sm-end">
        <li class="breadcrumb-item" aria-current="page">Jadwal Bimbingan</li>
      </ol>
    </x-header-content-dashboard>
    <x-main-content-dashboard>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div id="calendar">
                                <button type="button" class="btn btn-success mx-auto d-block mt-4"
                                    style="padding: 8px 30px">Pilih Jadwal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="mb-2">Permintaan Jadwal Bimbingan Anda Sudah Terkirim!</h1>
                        <h4 class="mb-4">Berikut Detail Informasinya:</h4>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-main-content-dashboard>
@endsection

@push('script-footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                height: 800,
                headerToolbar: {
                    start: "prev,next today",
                    center: "title",
                    end: "dayGridMonth,timeGridWeek,timeGridDay",
                },
                selectable: true,
                dateClick: function(info) {
                    console.log(info.dateStr);
                    

                },
            });
            calendar.render();
        });
    </script>
@endpush
