        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none_ d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>
                                            <i class="fas "></i>
                                            @if (Route::has('login'))
                                                @auth
                                                    @if (Auth()->user()->role == "admin")
                                                        <a href="{{ url('/admin') }}" class="">Dashboard</a>
                                                    @elseif(Auth()->user()->role == "siswa")
                                                        <a href="{{ url('/siswa') }}" class="">Dashboard</a>
                                                    @elseif(Auth()->user()->role == "ortu")
                                                        <a href="{{ url('/ortu') }}" class="">Dashboard</a>
                                                    @endif
                                                @else
                                                    <a href="{{ url('login') }}">Login</a> |
                                                    <a href="{{ url('register') }}">Register</a>
                                                @endauth
                                            @endif
                                        </li>
                                        <li class="hide-mobile"><i class="fas "></i>Jl. Dewi Sartika No. 8A, Banaran
                                            Kertosono</li>
                                        <li class="hide-mobile"><i class="fas "></i>info@email.com</li>
                                    </ul>
                                </div>
                                <div class="header-info-right d-none d-md-block">
                                    <ul class="header-social">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                    <img src="{{ url('img/logoblack.png') }}">

                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('kelas') }}">Kelas</a>
                                            </li>
                                            <li>
                                                <a href="#contact">Kontak</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>


                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    {{-- <a href="{{ url('listkeranjang') }}"
                                        style="padding: 18px 22px;    text-align: center;" class="tbtn header-btn">
                                        <i class="fa "></i>Keranjang Anda</a> --}}
                                </div>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
