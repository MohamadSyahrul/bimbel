{{-- <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true"> --}}
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                        {{-- <div class="brand-logo"></div> --}}
                        <h2 class="brand-text mb-0">Dasapratama</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{  request()->routeIs('AdminDashboard') ? 'active' : '' }}"><a href="{{url('admin')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class="nav-item {{  request()->routeIs('siswa.*') ? 'active' : '' }}">
                    <a href="{{route('siswa.index')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Siswa">Siswa</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('admin/regular*')) ? 'active' : '' }} {{ (request()->is('admin/terbatas*')) ? 'active' : '' }}"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Absen</span></a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="feather icon-user-check" ></i><span class="menu-item" data-i18n="List">Kelas Terbatas</span></a>
                            <ul class="menu-content">
                                <li><a href="{{url('admin/terbatas/absen-siswa-terbatas-sd')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SD/MI</span></a>
                                </li>
                                <li><a href="{{url('admin/terbatas/absen-siswa-terbatas-smp')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SMP/MTS</span></a>
                                </li>
                                <li><a href="{{url('admin/terbatas/absen-siswa-terbatas-sma_ips')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SMA/MA - IPS</span></a>
                                </li>
                                <li><a href="{{url('admin/terbatas/absen-siswa-terbatas-sma_ipa')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SMA/MA - IPA</span></a>
                                </li>
                                <li><a href="{{url('admin/terbatas/absen-siswa-terbatas-sbmptn')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SBMPTN</span></a>
                                </li>
                                <li><a href="{{url('admin/terbatas/absen-siswa-terbatas-kedinasan')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">Kedinasan / Ikatan Dinas</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="feather icon-user-check"></i><span class="menu-item" data-i18n="View">Kelas Regular</span></a>
                            <ul class="menu-content">
                                <li><a href="{{url('admin/regular/absen-siswa-regular-sd')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SD/MI</span></a>
                                </li>
                                <li><a href="{{url('admin/regular/absen-siswa-regular-smp')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SMP/MTS</span></a>
                                </li>
                                <li><a href="{{url('admin/regular/absen-siswa-regular-sma_ipa')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SMA/MA - IPA</span></a>
                                </li>
                                <li><a href="{{url('admin/regular/absen-siswa-regular-sma_ips')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SMA/MA - IPS</span></a>
                                </li>
                                <li><a href="{{url('admin/regular/absen-siswa-regular-sbmptn')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">SBMPTN</span></a>
                                </li>
                                <li><a href="{{url('admin/regular/absen-siswa-regular-kedinasan')}}"><i class="feather icon-plus-circle"></i><span class="menu-item">Kedinasan / Ikatan Dinas</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="feather icon-user-check"></i><span class="menu-item" data-i18n="View">Rekap Absensi</span></a>
                            <ul class="menu-content">
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item {{  request()->routeIs('transaksi.*') ? 'active' : '' }}">
                    <a href="{{ url('/admin/transaksi') }}"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Transaksi</span></a>
                </li>
                <li class=" nav-item {{  request()->routeIs(['JadwalKelasTerbatas', 'JadwalKelasRegular']) ? 'active' : '' }}"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Miscellaneous">Jadwal</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('admin/jadwal-kelas-terbatas')}}"><i class="feather icon-list"></i><span class="menu-item" data-i18n="Jadwal Terbatas">Jadwal Terbatas</span></a>
                        </li>
                        <li><a href="{{url('admin/jadwal-kelas-regular')}}"><i class="feather icon-grid"></i><span class="menu-item" data-i18n="Jadwal Regular">Jadwal Regular</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item {{  request()->routeIs('kelas.*') ? 'active' : '' }}">
                    <a href="{{ route('kelas.index') }}"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Miscellaneous">Kelas</span></a>
                </li>
                <li class=" nav-item {{  request()->routeIs('settings-carousel.*') ? 'active' : '' }}"><a href="#"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Miscellaneous">Settings</span></a>
                    <ul class="menu-content">
                        <li><a href="{{url('admin/settings-carousel')}}"><i class="feather icon-sidebar"></i><span class="menu-item" data-i18n="slider carousel">Slider Carousel</span></a>
                        </li>
                        <li>
                            <a href="{{route('management-user.index')}}"><i class="feather icon-lock"></i><span class="menu-item" data-i18n="Managemen User">Managemen User</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        