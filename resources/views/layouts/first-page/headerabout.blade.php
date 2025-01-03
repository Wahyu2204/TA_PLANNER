<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-center">
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/">Home<br></a></li>
                @auth
                    {{-- <a class="btn-getstarted" href="{{ route(auth()->user()->role . '.dashboard') }}"
                        style="color: #002645">Kembali<i class="fa-solid fa-reply mx-2"></i></a> --}}
                        <a class="btn-getstarted" href="{{ route('login') }}" style="color: #002645">Sign In<i
                            class="fa-solid fa-user-plus" style="margin-right: -3px;"></i></a>
                @endauth
                @guest
                    {{-- <a class="btn-getstarted" href="{{ route('login') }}" style="color: #002645">Sign In<i
                            class="fa-solid fa-user-plus" style="margin-right: -3px;"></i></a> --}}
                @endguest
                <li><a href="/about" class="active">About</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
