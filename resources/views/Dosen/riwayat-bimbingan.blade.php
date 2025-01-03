@extends('layouts.dashboard.base')

@section('title', 'TA Planner | Riwayat Bimbingan Dosen')

@section('pp', 'pp dosen.jpeg')

@section('content')
    <x-header-content-dashboard>
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item" aria-current="page">Riwayat Bimbingan</li>
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
                                    <th style="width: 10px">No</th>
                                    <th>Tempat</th>
                                    <th>Tanggal Pertemuan</th>
                                    <th style="width: 100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($jadwalBimbingan == '[]')
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <h3>NO DATA</h3>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($jadwalBimbingan as $jb)
                                        <tr class="align-middle">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $jb->tempat }}</td>
                                            <td>{{ date('H:i', strtotime($jb->waktu)) }},
                                                {{ date('l', strtotime($jb->tanggal)) }}
                                                {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
                                            <td>
                                                <a href="{{ route('dosen.riwayat-bimbingan-detail', ['id' => $jb->id]) }}"
                                                    type="button" class="btn btn-info mx-auto d-block">Info</a>
                                            </td>
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
