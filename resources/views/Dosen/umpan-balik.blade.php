@extends('layouts.dashboard.base')

@section('title', 'TA Planner | Umpan Balik Dosen')

@section('pp', 'pp dosen.jpeg')

@section('content')
<x-header-content-dashboard>
    <ol class="breadcrumb float-sm-end">
        <li class="breadcrumb-item">
            <a href="{{ route('mahasiswa.riwayat-bimbingan') }}">Bimbingan</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Umpan Balik</li>
    </ol>
</x-header-content-dashboard>
<x-main-content-dashboard>
  <div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table mb-4">
                    <tbody id="tbody">
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
                        <td>{{ date('H:i', strtotime($jb->created_at)) }}, {{ date('l', strtotime($jb->created_at)) }} {{ date('d-m-Y', strtotime($jb->created_at)) }}</td>
                      </tr>
                      <tr>
                        <th>Tanggal Pertemuan</th>
                        <td>{{ date('l', strtotime($jb->tanggal)) }} {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
                      </tr>
                      <tr>
                        <th>Waktu</th>
                        <td>{{ date('H:i', strtotime($jb->tanggal)) }} WIB</td>
                      </tr>
                      <tr>
                        <th>Tempat</th>
                        <td>{{ $jb->tempat }}</td>
                      </tr>
                    </tbody>
                </table>
                <div class="row mb-4">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        @csrf
                        <h1>Umpan Balik</h1>
                        <textarea class="form-control" id="umpan-balik" cols="30" rows="10" style="height: 75%;border:1px solid black"></textarea>
                        <button class="btn btn-success" style="padding: 8px 30px;width:50%" onclick="feedback()">Kirim</button>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/rpl.img') }}/feedback.png" class="img-fluid" alt="Feedback Picture">
                    </div>
                </div>
                <div class="row">
                    <p class="opacity-75">Setiap masukan atau umpan balik yang diberikan tidak hanya menjadi dorongan untuk perbaikan, tetapi juga membangun semangat positif serta motivasi bagi para mahasiswa untuk terus berkembang dan mencapai hasil yang lebih baik.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</x-main-content-dashboard>
@endsection

@push('script-footer')
  <script>
    const umpanBalik = document.getElementById('umpan-balik')

    function feedback() {
      const data = JSON.stringify({
        umpan_balik: umpanBalik.value,
        mahasiswa_id: '{!! $jb->mahasiswa->id !!}',
        dosen_id: '{!! $jb->dosen->id !!}'
      })
      postFetch('{!! route('dosen.kirim-umpan-balik', ["id" => $jb->id]) !!}', '{!! route('dosen.riwayat-bimbingan') !!}', data, 'Anda Memberikan Umpan Balik')
    }
  </script>
@endpush