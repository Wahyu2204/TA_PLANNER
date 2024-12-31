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
        @if (empty($jb))
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div id="calendar">
                                    @csrf
                                    <button type="button" class="btn btn-success mx-auto d-block mt-4"
                                        style="padding: 8px 30px" onclick="buatJadwal()">Pilih Jadwal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else ()
            @if ($jb->diterima)
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="mb-2">Jadwal Bimbingan Anda Telah di ACC Oleh Dosen</h1>
                                <h4 class="mb-4">Berikut Detail Informasinya:</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width: 12rem;">Nama Mahasiswa</th>
                                            <td>{{ $jb->id_mahasiswa }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Dosen</th>
                                            <td>{{ $jb->id_dosen }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pengajuan</th>
                                            <td>{{ date('H:i', strtotime($jb->created_at)) }}, {{ date('l', strtotime($jb->created_at)) }} {{ date('d-m-Y', strtotime($jb->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pertemuan</th>
                                            <td>{{ date('l', strtotime($jb->tanggal)) }} {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Waktu</th>
                                            <td>{{ date('H:i', strtotime($jb->waktu)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat</th>
                                            <td>{{ $jb->tempat }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($jb->ditolak)
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="mb-2">Jadwal Bimbingan Anda Ditolak Oleh Dosen</h1>
                                <h4 class="mb-4">Berikut Detail Informasinya:</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width: 12rem;">Nama Mahasiswa</th>
                                            <td>{{ $jb->id_mahasiswa }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Dosen</th>
                                            <td>{{ $jb->id_dosen }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pengajuan</th>
                                            <td>{{ date('H:i', strtotime($jb->created_at)) }}, {{ date('l', strtotime($jb->created_at)) }} {{ date('d-m-Y', strtotime($jb->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pertemuan</th>
                                            <td>{{ date('l', strtotime($jb->tanggal)) }} {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alasan</th>
                                            <td>{{ $jb->alasan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Hari Pilihan Dosen</th>
                                            <td>{{ date('H:i', strtotime($jb->hari_pilihan_dosen)) }}, {{ date('l', strtotime($jb->hari_pilihan_dosen)) }} {{ date('d-m-Y', strtotime($jb->hari_pilihan_dosen)) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @else
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
                                            <td>{{ $jb->id_mahasiswa }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Dosen</th>
                                            <td>{{ $jb->id_dosen }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pengajuan</th>
                                            <td>{{ date('H:i', strtotime($jb->created_at)) }}, {{ date('l', strtotime($jb->created_at)) }} {{ date('d-m-Y', strtotime($jb->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pertemuan</th>
                                            <td>{{ date('l', strtotime($jb->tanggal)) }} {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </x-main-content-dashboard>
@endsection

@push('script-footer')
    <script>
        let selectedDate;
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
                    selectedDate = info.dateStr
                },
            });
            calendar.render();
        });

        function buatJadwal() {
            if(selectedDate) {
                const data = JSON.stringify({
                    tanggal: selectedDate
                });
    
                postFetch('{!! route('mahasiswa.buat-jadwal-bimbingan') !!}', '{!! route('mahasiswa.jadwal-bimbingan') !!}', data)
            }
        }
    </script>
@endpush
