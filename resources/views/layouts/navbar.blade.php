<div class="navbar navbar-expand-lg m-0">
    <a class="navbar-brand">
        <img src="{{asset('asset/logo.png')}}" height="30" alt="logo" loading="lazy"> 
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pt-3">
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item pl-5">
                <a href="/mahasiswa" style="float:right; font-size:15px; color:grey" class="text-center">
                    {{ Auth::user()->name }}
                    <img src="{{asset('asset/mdi_account_circle.png')}}" height="30" alt="logo" loading="lazy"></span>
                </a>
            </li>

            <li class="nav-item dropdown pl-5">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('asset/mdi_notifications.png')}}" height="30" alt="logo" loading="lazy">
                </a>

                <ul class="dropdown-menu dropdown-menu-right" style="min-width: 250px;">
                    <li class="dropdown-item text-center m-2 pt-3">
                        <h4> <a href="/mahasiswa"><b>Ahmad Rifal</b></a> Menambahkan anda dalam sebuah proyek</h4>
                        <h4>apakah anda menyetujui?</h4>
                        <div class="row text-center pt-4">
                            <div class="col">
                                <button type="button" class="btn btn-primary btn-lg">
                                    <h4 class="pt-2">Ya</h4>
                                </button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger btn-lg">
                                    <h4 class="pt-2">Tidak</h4>
                                </button>
                            </div>
                        </div>
                    </li>

                    <hr class="pt-3">

                    <li class="dropdown-item text-center p-3 pt-3">
                        <h4> <a href="/mahasiswa"><b>pale</b></a> Menambahkan anda dalam sebuah proyek</h4>
                        <h4>apakah anda menyetujui?</h4>
                        <div class="row text-center pt-4">
                            <div class="col">
                                <button type="button" class="btn btn-primary btn-lg">
                                    <h4 class="pt-2">Ya</h4>
                                </button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger btn-lg">
                                    <h4 class="pt-2">Tidak</h4>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>

            </li>

            <li class="nav-item dropdown pl-5">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('asset/mdi_arrow_drop_down.png')}}" height="30" alt="logo" loading="lazy">
                </a>

                <ul class="dropdown-menu dropdown-menu-right" style="min-width: 250px;">
                    <li class="dropdown-item pt-4 pl-5 pb-4">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('asset/ellipse.png')}}" height="50" alt="logo" loading="lazy">
                            </div>

                            <div class="col pt-2">
                                <h4 class="pl-3"><b>{{ Auth::user()->name }}</b></h4>
                                <h4 class="pl-3">{{ Auth::user()->tipe_user }}</h4>
                            </div>
                        </div>
                    </li>
                    <li class="text-center pt-3 pb-3">
                        <a href="/mahasiswa">
                            <button type="button" class="btn btn-outline-info btn-lg">
                                <h4 class="pt-2" style="color:black">Lihat Profil Anda</h4>
                            </button>
                        </a>
                    </li>
                    <li class="pt-2">
                        <a href="/mahasiswa" style="color:black">
                            <h4 style="padding-left:20px">Edit Profile</h4>
                        </a>
                    </li>
                    <li class="pt-2">
                        <a href="/mahasiswa" style="color:black">
                            <h4 style="padding-left:20px">Pengaturan & Privasi</h4>
                        </a>
                    </li>
                    <li class="pt-2 pb-3">
                        <a href="{{ route('logout') }}" style="color:black" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <h4 style="padding-left:20px">{{ __('Logout') }}</h4>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </li>
        </ul>
    </div>
</div>