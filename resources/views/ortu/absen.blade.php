@extends('ortu.layouts.master')
@section('title')
    Absen Siswa
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Riwayat Absen</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead class="">
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Paket</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                        @foreach($absen as $a)
                                            @foreach($a->absensiUser as $ab)
                                            <tr>
                                                <?php
                                                    $user = \App\User::find($ab->user_id);
                                                    $kelas = \App\Kelas::find($a->id_kelas);
                                                ?>
                                                <td>{{ Carbon\Carbon::parse($a->tanggal)->isoFormat('dddd, D MMMM Y') }}</td>
                                                <td>{{ $user->profileUser->nama }}</td>
                                                <td class="text->uppercase">{{ $kelas->kategori }}</td>
                                                <td class="text-capitalize">{{ $kelas->kategori_kelas }}</td>
                                                <td>
                                                    @switch($ab->status)
                                                        @case('hadir')
                                                            <div class="chip chip-success">
                                                                <div class="chip-body">
                                                                    <div class="chip-text">Hadir</div>
                                                                </div>
                                                            </div>
                                                            @break
                                                        @case('izin')
                                                            <div class="chip chip-warning">
                                                                <div class="chip-body">
                                                                    <div class="chip-text">Izin</div>
                                                                </div>
                                                            </div>
                                                            @break
                                                        @case('tidak hadir')
                                                            <div class="chip chip-danger">
                                                                <div class="chip-body">
                                                                    <div class="chip-text">Tidak Hadir</div>
                                                                </div>
                                                            </div>
                                                            @break
                                                        @default
                                                            <div class="chip chip-secondary">
                                                                <div class="chip-body">
                                                                    <div class="chip-text">None</div>
                                                                </div>
                                                            </div>
                                                    @endswitch
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>
</div>
@endsection
@push('plugin-scripts')
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/datatables/datatable.js')}}"></script>
@endpush