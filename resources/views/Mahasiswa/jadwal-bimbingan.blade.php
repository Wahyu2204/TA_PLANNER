@extends('layouts.dashboard.base')

@section('title', 'TA Planner | Jadwal Bimbingan Mahasiswa')

@section('pp', 'pp mahasiswa.jpeg')

@section('content')
    <x-header-content-dashboard>
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item" aria-current="page">Jadwal Bimbingan</li>
        </ol>
    </x-header-content-dashboard>
    <x-main-content-dashboard>
        @if (empty($jb) || $jb->buat_baru)
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div id="calendar">
                                    @csrf
                                    @if (isset($jb->buat_baru))
                                        <p class="mt-2" style="font-weight: bold;">Alasan tidak bisa menghadiri : {{ $jb->alasan }}</p>
                                        <p class="mt-2" style="font-weight: bold;">Dosen menyarankan pada tanggal : {{ date('m-d-Y', strtotime($jb->hari_pilihan_dosen)) }}</p>
                                    @endif
                                    <button type="button" class="btn btn-success mx-auto d-block mt-4"
                                        style="padding: 8px 30px" onclick="buatJadwal()">Pilih Jadwal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @push('script-header')
                <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.15/index.global.min.js'></script>
                <script>
                    let selectedDate;
                    let mahasiswaId = '{!! auth()->user()->id !!}'
                    let dosenId = '{!! auth()->user()->relatedDosen[0]->id !!}'
                    window.onload = function() {

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
                            events: [{
                                title: 'Hari Pilihan Dosen',
                                start: '{!! isset($jb->hari_pilihan_dosen) ? date('Y-m-d', strtotime($jb->hari_pilihan_dosen)) : '' !!}',
                                display: 'background'
                            }]
                        });
                        calendar.render();
                    };
                </script>
            @endpush
        @else
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
                                            <td>{{ $jb->mahasiswa->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Dosen</th>
                                            <td>{{ $jb->dosen->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pengajuan</th>
                                            <td>{{ date('H:i', strtotime($jb->created_at)) }},
                                                {{ date('l', strtotime($jb->created_at)) }}
                                                {{ date('d-m-Y', strtotime($jb->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pertemuan</th>
                                            <td>{{ date('l', strtotime($jb->tanggal)) }}
                                                {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
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
                @csrf
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
                                            <td>{{ $jb->mahasiswa->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Dosen</th>
                                            <td>{{ $jb->dosen->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pengajuan</th>
                                            <td>{{ date('H:i', strtotime($jb->created_at)) }},
                                                {{ date('l', strtotime($jb->created_at)) }}
                                                {{ date('d-m-Y', strtotime($jb->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pertemuan</th>
                                            <td>{{ date('l', strtotime($jb->tanggal)) }}
                                                {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alasan</th>
                                            <td>{{ $jb->alasan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Hari Pilihan Dosen</th>
                                            <td>{{ date('H:i', strtotime($jb->hari_pilihan_dosen)) }},
                                                {{ date('l', strtotime($jb->hari_pilihan_dosen)) }}
                                                {{ date('d-m-Y', strtotime($jb->hari_pilihan_dosen)) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-success mx-auto d-block mt-4" style="padding: 8px 30px;"
                                    onclick="buatBaru('{!! route('mahasiswa.baru-jadwal-bimbingan', ['id' => $jb->id]) !!}')">Buat Jadwal Baru</button>
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
                                            <td>{{ $jb->mahasiswa->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Dosen</th>
                                            <td>{{ $jb->dosen->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pengajuan</th>
                                            <td>{{ date('H:i', strtotime($jb->created_at)) }},
                                                {{ date('l', strtotime($jb->created_at)) }}
                                                {{ date('d-m-Y', strtotime($jb->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pertemuan</th>
                                            <td>{{ date('l', strtotime($jb->tanggal)) }}
                                                {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
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
        function buatJadwal() {
            if (selectedDate) {
                let data = {
                    tanggal: selectedDate,
                    mahasiswa_id: mahasiswaId,
                    dosen_id: dosenId
                }
                
                data.buat_baru = 0 

                if('{!! isset($jb->buat_baru) ? 'true' : 'false' !!}' == 'true') {
                    data.buat_baru = 1   
                }

                const dataSend = JSON.stringify(data);
                
                postFetch('{!! route('mahasiswa.buat-jadwal-bimbingan') !!}', '{!! route('mahasiswa.jadwal-bimbingan') !!}', dataSend, 'Anda Membuat Jadwal Bimbingan')
            }
        }

        function buatBaru(link) {
            fetch(link, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": document.querySelector('input[name=_token]').value
                    }
                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err
                        });
                    }

                    return response.json();
                })
                .then(data => {
                    console.log('Response:', data);
                    notif('{!! route('mahasiswa.jadwal-bimbingan') !!}', 'Membuat Jadwal Pertemuan Bimbingan Baru')
                })
                .catch(error => {
                    console.log(error);

                    console.error('Error:', error);
                });
        }
    </script>
@endpush
