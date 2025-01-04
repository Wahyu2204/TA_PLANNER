<div class="sidebar-wrapper">
    <nav class="mt-2">
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
            <li class="nav-header">
                <h4>Pages</h4>
            </li>
            @foreach ($links as $link)
                <li
                    class="nav-item {{ str_contains(request()->getRequestUri(), auth()->user()->role . '/' . $link) ? 'menu-open' : '' }}">
                    <a href="{{ route(strtolower($role) . '.' . $link) }}" class="nav-link">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/rpl.img/icon') }}/{{ $images[$loop->index] }}.png"
                                    alt="Dashboard Icon" class="img-fluid">
                            </div>
                            <div class="col-8 d-flex align-items-center">
                                <h4>{{ ucwords(str_replace('-', ' ', $link)) }}</h4>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
            @if (str_contains(request()->getRequestUri(), '/dosen/bimbingan/acc'))
                <li class="nav-item">
                    <a class="nav-link" onclick="handleAuthClick()">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="https://imagepng.org/wp-content/uploads/2019/08/google-icon.png"
                                    width="45px" alt="Dashboard Icon" class="img-fluid">
                            </div>
                            <div class="col-8 d-flex align-items-center">
                                <h4 id="isLogin">Login Google</h4>
                            </div>
                        </div>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
