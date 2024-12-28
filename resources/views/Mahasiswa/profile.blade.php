@extends('dashboard-layout.base')

@section('title', 'TA Planner | Profile Mahasiswa')

@section('pp', 'pp mahasiswa.jpeg')
@section('nama', 'Asep Throttle')
@section('role', 'Mahasiswa')

@section('content')
<x-header-content-dashboard>
  <ol class="breadcrumb float-sm-end">
    <li class="breadcrumb-item" aria-current="page">Profil</li>
  </ol>
</x-header-content-dashboard>
<x-main-content-dashboard>
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div style="width: 200px">
                    <img class="user-image rounded-circle" src="{{ asset('assets/rpl.img') }}/pp mahasiswa.jpeg" alt="Photo Profile Mahasiswa" width="140" height="140">
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary mb-2" style="padding: 8px 30px">Ganti Foto</button>
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
            <div class="row mb-4 align-items-center">
                <div style="width: 200px">
                    <h3>Informasi Profil</h3>
                </div>
                <div class="col"></div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div style="width: 200px">
                    <h3>Tanggal Lahir</h3>
                </div>
                <div class="col">
                    <h3 style="font-weight: bold">12/12/2005</h3>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div style="width: 200px">
                    <h3>Program Studi</h3>
                </div>
                <div class="col">
                    <h3 style="font-weight: bold">Teknik Informatika</h3>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div style="width: 200px">
                    <h3>Kelas</h3>
                </div>
                <div class="col">
                    <h3 style="font-weight: bold">23TI01</h3>
                </div>
                <div class="col-12">
                    <hr>
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
            <div class="row mb-4 align-items-center">
                <div style="width: 200px">
                    <h3>Informasi Akun</h3>
                </div>
                <div class="col"></div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div style="width: 200px">
                    <h3>Alamat Email</h3>
                </div>
                <div class="col">
                    <h3 style="font-weight: bold">AsepThrottle23@student.nurulfikri.ac.id</h3>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div style="width: 200px">
                    <h3>Nomor Telepon</h3>
                </div>
                <div class="col">
                    <h3 style="font-weight: bold">08123456789</h3>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div style="width: 200px">
                    <h3>Kelas</h3>
                </div>
                <div class="col">
                    <h3 style="font-weight: bold">23TI01</h3>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</x-main-content-dashboard>
@endsection