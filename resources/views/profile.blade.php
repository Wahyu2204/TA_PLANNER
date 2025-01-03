@extends('layouts.dashboard.base')

@section('title', 'TA Planner | Profile Mahasiswa')

@section('pp', 'pp mahasiswa.jpeg')

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
                                <img class="user-image rounded-circle" src="{{ auth()->user()->photo_profile }}"
                                    alt="Photo Profile Mahasiswa" width="140" height="140">
                            </div>
                            <div class="col">
                                <form id="form-pp" action="{{ route('ganti-pp', auth()->user()->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input id="input-pp" name="ppInput" type="file">
                                    <button id="tombol-pp" class="btn btn-primary mb-2" style="padding: 8px 30px">Ganti
                                        Foto</button>
                                </form>
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
                                <h3 style="font-weight: bold">{{ date('m-d-Y', strtotime(auth()->user()->tanggal_lahir)) }}
                                </h3>
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
                                <h3 style="font-weight: bold">{{ auth()->user()->program_studi }}</h3>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                        @if (auth()->user()->role == 'mahasiswa')
                            <div class="row mb-4 align-items-center">
                                <div style="width: 200px">
                                    <h3>Kelas</h3>
                                </div>
                                <div class="col">
                                    <h3 style="font-weight: bold">{{ auth()->user()->kelas }}</h3>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                        @endif
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
                                <h3 style="font-weight: bold">{{ auth()->user()->email }}</h3>
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
                                <h3 style="font-weight: bold">{{ auth()->user()->no_telp }}</h3>
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

@push('script-footer')
    <script>
        const formPP = document.getElementById('form-pp')
        const inputPP = document.getElementById('input-pp')
        const tombolPP = document.getElementById('tombol-pp')

        formPP.onsubmit = function(e) {
            e.preventDefault()

            tombolPP.disabled = true

            fetch('{!! route('ganti-pp', ['id' => auth()->user()->id]) !!}', {
                    method: 'POST',
                    headers: {
                        "X-CSRF-Token": document.querySelector('input[name=_token]').value
                    },
                    body: new FormData(formPP)
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err
                        });
                    }
                    notif('{!! route('profile', ['id' => auth()->user()->id]) !!}', 'Anda Berhasil Mengubah Informasi Akun')
                })
                .then(data => {
                    console.log('Response Profile:', data);
                })
                .catch(error => {
                    console.log(error);

                    console.error('Error:', error);
                });
        }
    </script>
@endpush
