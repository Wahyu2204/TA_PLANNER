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
                        <table class="table rounded">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 10px">No</th>
                                    <th class="text-center">Nama Mahasiswa</th>
                                    <th class="text-center">Tanggal Pengajuan</th>
                                    <th class="text-center">Umpan Balik</th>
                                    <th class="text-center" style="width: 100px">ACC</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($jadwalBimbingan == '[]')
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <h3>NO DATA</h3>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($jadwalBimbingan as $jb)
                                        <tr class="align-middle {{ $jb->ditolak ? 'rejected' : '' }}">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $jb->mahasiswa->name }}</td>
                                            <td>{{ date('H:i', strtotime($jb->waktu)) }},
                                                {{ date('l', strtotime($jb->tanggal)) }}
                                                {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
                                            <td>
                                                @if ($jb->umpan_balik)
                                                    {{ $jb->umpan_balik }}
                                                @else
                                                    <a href="{{ route('dosen.umpan-balik', ['id' => $jb->id]) }}"
                                                        type="button"
                                                        class="btn btn-info mx-auto d-block {{ !$jb->diterima || $jb->ditolak ? 'disable_a_href' : '' }}">Umpan
                                                        Balik</a>
                                                @endif
                                            </td>
                                            @if ($jb->diterima)
                                                <td class="text-center" style="background-color: #37CF29;">
                                                    <p style="color:white;">ACC</p>
                                                </td>
                                            @else
                                                <td>
                                                    <a href="{{ route('dosen.bimbingan-acc', ['id' => $jb->id]) }}"
                                                        type="button"
                                                        class="btn btn-danger mx-auto d-block {{ $jb->ditolak ? 'disable_a_href' : '' }}">Belum</a>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-main-content-dashboard>
@endsection
