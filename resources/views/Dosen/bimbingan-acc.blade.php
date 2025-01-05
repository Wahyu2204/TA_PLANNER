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
            <div class="row mb-4 flex-column mx-auto align-items-center" style="width: 500px">
                <img src="{{ asset('assets/rpl.img') }}/info.png" class="img-fluid" style="width:500px" alt="Info Picture">
                <table class="table">
                    @csrf
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
                        <th>Tanggal Pertemuan</th>
                        <td>{{ date('H:i', strtotime($jb->waktu)) }}, {{ date('l', strtotime($jb->tanggal)) }} {{ date('d-m-Y', strtotime($jb->tanggal)) }}</td>
                      </tr>
                      <tr id="field-waktu" class="hide">
                        <th>Waktu</th>
                        <td>
                          <input type="time" class="form-control">
                        </td>
                      </tr>
                      <tr id="field-tempat" class="hide">
                        <th>Tempat</th>
                        <td>
                          <input type="text" class="form-control">
                        </td>
                      </tr>
                      <tr id="field-alasan" class="hide">
                        <th>Alasan</th>
                        <td>
                          <input type="text" class="form-control">
                        </td>
                      </tr>
                      <tr id="field-pilihan" class="hide">
                        <th>Hari Pilihan Dosen</th>
                        <td>
                          <input type="datetime-local" class="form-control">
                        </td>
                      </tr>
                    </tbody>
                </table>
                <div class="row p-0" id="btn-terima">
                    <div class="col-6 ps-0">
                        <button type="button" class="btn btn-success" style="width: 100%;padding:8px 30px;" onclick="terima()">Terima</button>
                    </div>
                    <div id="btnTolak" class="col-6 pe-0">
                        <button type="button" class="btn btn-danger" style="width: 100%;padding:8px 30px;" onclick="tolak()">Tolak</button>
                    </div>
                </div>
                <div class="row p-0 hide" id="btn-konfirmasi">
                    <div class="col-8 ps-0">
                        <button type="button" class="btn btn-success" style="width: 100%;padding:8px 30px;" onclick="konfirmasi()">Konfirmasi</button>
                    </div>
                    <div id="btnTolak" class="col-4 pe-0">
                        <button id="btn-" type="button" class="btn btn-danger" style="width: 100%;padding:8px 30px;" onclick="tutup()">X</button>
                    </div>
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
      let link;
      let data;
      let pesan;

      const tbody = document.getElementById('tbody')
      const btnTerima = document.getElementById('btn-terima')
      const btnKonfirmasi = document.getElementById('btn-konfirmasi')

      const fieldWaktu = document.getElementById('field-waktu')
      const fieldTempat = document.getElementById('field-tempat')
      const fieldAlasan = document.getElementById('field-alasan')
      const fieldPilihan = document.getElementById('field-pilihan')

      const btnX = document.getElementById('btn-')

      function terima() {
        btnTerima.classList.toggle('hide')

        fieldWaktu.classList.toggle('hide')
        fieldTempat.classList.toggle('hide')

        btnX.id = 'btn-x-terima'

        btnKonfirmasi.classList.toggle('hide')
      }
      
      function tolak() {
        btnTerima.classList.toggle('hide')

        fieldAlasan.classList.toggle('hide')
        fieldPilihan.classList.toggle('hide')

        btnX.id = 'btn-x-tolak'
        
        btnKonfirmasi.classList.toggle('hide')
      }

      function tutup() {
        if(btnX.id == 'btn-x-tolak') {
          fieldAlasan.children[1].children[0].value = ''
          fieldPilihan.children[1].children[0].value = ''

          fieldAlasan.classList.toggle('hide')
          fieldPilihan.classList.toggle('hide')
        } else {
          fieldWaktu.children[1].children[0].value = ''
          fieldTempat.children[1].children[0].value = ''

          fieldWaktu.classList.toggle('hide')
          fieldTempat.classList.toggle('hide')
        }

        btnTerima.classList.toggle('hide')

        btnKonfirmasi.classList.toggle('hide')
      }
      
      function konfirmasi() {
        if(fieldTempat.children[1].children[0].value != '') {
          link = '{!! route('dosen.bimbingan-acc-terima', ["id" => $jb->id]) !!}'
          data = JSON.stringify({
            waktu: fieldWaktu.children[1].children[0].value,
            tempat: fieldTempat.children[1].children[0].value,
            mahasiswa_id: '{!! $jb->mahasiswa->id !!}',
            dosen_id: '{!! $jb->dosen->id !!}'
          })
          pesan = 'Anda Menerima Jadwal Bimbingan'
        } else {
          link = '{!! route('dosen.bimbingan-acc-tolak', ["id" => $jb->id]) !!}'
          data = JSON.stringify({
            alasan: fieldAlasan.children[1].children[0].value,
            hariPilihanDosen: fieldPilihan.children[1].children[0].value,
            mahasiswa_id: '{!! $jb->mahasiswa->id !!}',
            dosen_id: '{!! $jb->dosen->id !!}'
          })
          pesan = 'Anda Menolak Jadwal Bimbingan'
        }

        let waktu = '{!! $jb->tanggal !!}T' + fieldWaktu.children[1].children[0].value + ':00+07:00'
        console.log(waktu);
        console.log('{!! $jb->mahasiswa->email !!}');
        
        
        makeEvent('{!! $jb->mahasiswa->email !!}', waktu, fieldTempat.children[1].children[0].value)
        
        postFetch(link, '{!! route('dosen.bimbingan') !!}', data, pesan)
      }
    </script>
@endpush