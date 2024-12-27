<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark" style="max-width: 280px;background: #002645 !important;">
    <div class="row p-3">
      <div class="col-4 d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/rpl.img') }}/5.png" alt="Logo TA Planner" class="img-fluid">
      </div>
      <div class="col-8 d-flex align-items-center text-white">
          <h2 style="margin: 0">TA Planner</h2>
      </div>
    </div>
    <div class="row p-3">
      <div class="col-4 d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/rpl.img') }}/@yield('pp')" alt="Photo Profile Mahasiswa" width="60px" height="60px">
      </div>
      <div class="col-8 text-white">
          <h4 class="col-12 mb-2">@yield('nama')</h4>
          <h4 class="col-12" style="opacity: 0.6">@yield('role')</h4>
      </div>
    </div>
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
          <li class="nav-item">
            <a href="./generate/theme.html" class="nav-link">
              <div class="row">
                <div class="col-4 d-flex justify-content-center align-items-center">
                  <img src="{{ asset('assets/rpl.img/icon') }}/dashboard.png" alt="Dashboard Icon" class="img-fluid">
                </div>
                <div class="col-8 d-flex align-items-center">
                  <h4>Dashboard</h4>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="./generate/theme.html" class="nav-link">
              <div class="row">
                <div class="col-4 d-flex justify-content-center align-items-center">
                  <img src="{{ asset('assets/rpl.img/icon') }}/schedule.png" alt="Schedule Icon" class="img-fluid">
                </div>
                <div class="col-8 d-flex align-items-center">
                  <h4>Jadwal Bimbingan</h4>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="./generate/theme.html" class="nav-link">
              <div class="row">
                <div class="col-4 d-flex justify-content-center align-items-center">
                  <img src="{{ asset('assets/rpl.img/icon') }}/activity history.png" alt="Activity History Icon" class="img-fluid">
                </div>
                <div class="col-8 d-flex align-items-center">
                  <h4>Riwayat Bimbingan</>
                </div>
              </div>
            </a>
          </li>
          
        </ul>
      </nav>
    </div>
</aside>