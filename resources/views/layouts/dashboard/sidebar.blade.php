@php
    $role = 'Dosen';
    $links = ['dashboard', 'bimbingan', 'riwayat-bimbingan'];
    $images = ['dashboard', 'schedule', 'activity history'];
    $uri = request()->getRequestUri();
    if(str_contains($uri, 'mahasiswa')) {
        $role = 'Mahasiswa';
        $links = ['dashboard' , 'jadwal-bimbingan', 'riwayat-bimbingan'];
    }
@endphp
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark" style="max-width: 280px;background: #002645 !important;">
  <a href="/">
    <div class="row p-3">
      <div class="col-4 d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/rpl.img') }}/5.png" alt="Logo TA Planner" class="img-fluid">
      </div>
      <div class="col-8 d-flex align-items-center text-white">
          <h2 style="margin: 0">TA Planner</h2>
      </div>
    </div>
  </a>
    <div class="sidebar-wrapper">
      <nav>
        <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
            <li class="nav-item {{ $uri == '/mahasiswa/profile' ? 'menu-open' : '' }}">
              <a href="{{ route('profile', ['id' => auth()->user()->id]) }}" class="nav-link">
                <div class="row">
                  <div class="col-4 d-flex justify-content-center align-items-center">
                    <img src="{{ auth()->user()->photo_profile }}" alt="Photo Profile Mahasiswa" width="60px" height="60px">
                  </div>
                  <div class="col-8 text-white">
                      <h4 class="col-12 mb-2">{{ auth()->user()->name }}</h4>
                      <h4 class="col-12" style="opacity: 0.6">{{ auth()->user()->role }}</h4>
                  </div>
                </div>
              </a>
            </li>
        </ul>
      </nav>
    </div>
    <x-sidebar-on-role :$role :$links :$images></x-sidebar-on-role>
</aside>