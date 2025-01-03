<div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false"
      >
        <li class="nav-header">
          <h4>Pages</h4>
        </li>
        @foreach ($links as $link)
            <li class="nav-item {{ request()->getRequestUri() == `/mahasiswa/${link}` ? 'menu-open' : '' }}">
                <a href="{{ route(strtolower($role) . '.' . $link) }}" class="nav-link">
                    <div class="row">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/rpl.img/icon') }}/{{ $images[$loop->index] }}.png" alt="Dashboard Icon" class="img-fluid">
                    </div>
                    <div class="col-8 d-flex align-items-center">
                        <h4>{{ ucwords(str_replace('-', ' ', $link)) }}</h4>
                    </div>
                    </div>
                </a>
            </li>
        @endforeach
        {{-- <li class="nav-item {{ request()->getRequestUri() == '/mahasiswa/' . ($isDosen ? 'bimbingan' : 'jadwal-bimbingan') ? 'menu-open' : '' }}">
          <a href="{{ route('mahasiswa.jadwal-bimbingan') }}" class="nav-link">
            <div class="row">
              <div class="col-4 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/rpl.img/icon') }}/schedule.png" alt="Schedule Icon" class="img-fluid">
              </div>
              <div class="col-8 d-flex align-items-center">
                <h4>{{ $isDosen ? 'Bimbingan' : 'Jadwal Bimbingan' }}</h4>
              </div>
            </div>
          </a>
        </li>
        <li class="nav-item {{ request()->getRequestUri() == '/mahasiswa/riwayat-bimbingan' || request()->getRequestUri() == '/mahasiswa/riwayat-bimbingan-detail' ? 'menu-open' : '' }}">
          <a href="{{ route('mahasiswa.riwayat-bimbingan') }}" class="nav-link">
            <div class="row">
              <div class="col-4 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/rpl.img/icon') }}/activity history.png" alt="Activity History Icon" class="img-fluid">
              </div>
              <div class="col-8 d-flex align-items-center">
                <h4>Riwayat Bimbingan</>
              </div>
            </div>
          </a>
        </li> --}}
        
      </ul>
    </nav>
</div>