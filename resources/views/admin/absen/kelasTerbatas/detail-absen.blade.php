@extends('admin.layouts.master')
@section('title')
Absen Siswa {{ $kelas->kategori }} - {{ $absen->tanggal }}
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
        <section id="column-selectors">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h4 class="card-title">Absen Siswa Terbatas | <span class="text-uppercase">{{ $kelas->kategori }}</span></h4>
                                <p class="">{{ $absen->tanggal }} - {{ $kelas->nama_kelas }}</p>
                            </div>
                            <a role="button" href="{{ route('TambahSiswa', ['absen'=>$absen->id]) }}" class="btn btn-icon btn-outline-primary float-right mr-1 mb-1"
                                title="tambah siswa"><i class="feather icon-user-plus"></i> Add</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped dataex-html5-selectors">
                                        <thead class="">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                        @foreach($user as $u)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $u->profileUser->nama }}</td>
                                                <td>{{ $u->email }}</td>
                                                <td>
                                                    <?php
                                                        $s = \App\AbsensiUser::where('user_id', $u->id)->first();
                                                    ?>
                                                    @switch($s->status)
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
                                                <td>
                                                    <a href="{{ route('absenUpdate', ['id'=>$s->id, 'status'=>'hadir']) }}" class="avatar bg-success" title="masuk">
                                                        <div class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-check-square"></i>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('absenUpdate', ['id'=>$s->id, 'status'=>'izin']) }}" class="avatar bg-warning" title="izin">
                                                        <div class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-alert-circle"></i>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('absenUpdate', ['id'=>$s->id, 'status'=>'tidak']) }}" class="avatar bg-danger" title="tidak masuk">
                                                        <div class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-x-square"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
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
<script src="{{asset('/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
@endpush
