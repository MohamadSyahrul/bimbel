
{{-- <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true"> --}}
<div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('/') }}">
                {{-- <div class="brand-logo"></div> --}}
                <h2 class="brand-text mb-0">Dasapratama</h2>
            </a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                    class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                    class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                    data-ticon="icon-disc"></i></a></li>
    </ul>
</div>
<div class="shadow-bottom"></div>
<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item {{  request()->routeIs('DashboardOrtu') ? 'active' : '' }}">
            <a href="{{url('ortu/')}}">
                <i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>
        <li class=" navigation-header"><span>Apps</span>
        </li>
        <li class="nav-item {{  request()->routeIs('absen.*') ? 'active' : '' }}">
            <a href="{{url('ortu/absen')}}">
                <i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Absen">Absen</span>
            </a>
        </li>
        <li class="nav-item {{  request()->routeIs('jadwal.*') ? 'active' : '' }}">
            <a href="{{url('ortu/jadwal')}}">
                <i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Absen">Jadwal</span>
            </a>
        </li>
    </ul>
</div>
