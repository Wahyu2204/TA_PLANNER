@extends('dashboard-layout.base')

@section('title', 'TA Planner | Riwayat Bimbingan Mahasiswa')

@section('pp', 'pp mahasiswa.jpeg')
@section('nama', 'Asep Throttle')
@section('role', 'Mahasiswa')

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
              <tr class="align-middle">
                <td>1</td>
                <td>Kampus B, Ruang 201Update software</td>
                <td>02:00, Jumat 29/18/2004</td>
                <td>
                  <button type="button" class="btn btn-info mx-auto d-block">Info</button>
                </td>
              </tr>
              <tr class="align-middle">
                <td>2</td>
                <td>Kampus A, Ruang 101</td>
                <td>08:00, Sabtu 12/09/24</td>
                <td>
                  <button type="button" class="btn btn-info mx-auto d-block">Info</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-main-content-dashboard>
@endsection