@extends('ortu.layouts.master')

@section('title')
Dashboard Ortu
@endsection

@push('plugin-styles')

@endpush

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card bg-analytics text-white">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img src="{{asset('app-assets/images/elements/decore-left.png')}}" class="img-left"
                                    alt=" card-img-left">
                                <img src="{{asset('app-assets/images/elements/decore-right.png')}}" class="img-right"
                                    alt="card-img-right">
                                <div class="avatar avatar-xl bg-primary shadow mt-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-award white font-large-1"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1 class="mb-2 text-white">Selamat Datang Di Dashboard Dasapratama</h1>
                                    <p class="m-auto w-75">Pantau anak anda bersama <strong>Dasapratama</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</div>

@endsection('content')

@push('plugin-scripts')

@endpush
