@extends('admin.layouts.master')
@section('title')
Absen Siswa {{ $kategori }}
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
                            <h4 class="card-title">Absen Siswa Terbatas | <span class="text-uppercase">{{ $kategori }}</span></h4>
                            
                            <script type="text/javascript">     
                                function PrintDiv() {    
                                var divToPrint = document.getElementById('divToPrint');
                                var popupWin = window.open('', '_blank');
                                popupWin.document.open();
                                popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                                    popupWin.document.close();
                                        }
                            </script>




                            <div id="divToPrint" style="display:none;">
                                <div class="card-content">
                                    <center>
                                    <h4 class="card-title">Absen Siswa | <span class="text-uppercase">{{ $kategori }}</span></h4>
                                    <table class="table"
                                        style=
                                        "
                                            width:100%;
                                            text-align: center;
                                            border: solid 1px black;
                                        ">
                                        <thead class="">
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Kelas</th>
                                                <th>Kategori</th>
                                                <th>Siswa</th>
                                                <th>Hadir</th>
                                                <th>Izin</th>
                                                <th>Tidak hadir</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                        @foreach($kelas as $kel)
                                            @foreach($kel->absensi->sortDesc() as $a)
                                            <?php
                                                $total  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                                                ->where('absensi_id', '=', $a->id)->where('id_kelas','=', $kel->id)->get()->count();
                                                $hadir  = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                                                ->where('status','hadir')->where('absensi_id', '=', $a->id)->where('id_kelas','=', $kel->id)->get()->count();
                                                $thadir = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                                                ->where('status','tidak hadir')->where('absensi_id', '=', $a->id)->where('id_kelas','=', $kel->id)->get()->count();
                                                $izin   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                                                ->where('status','izin')->where('absensi_id', '=', $a->id)->where('id_kelas','=', $kel->id)->get()->count();
                                                $none   = \App\AbsensiUser::join('absensis', 'absensis.id', '=', 'absensi_users.absensi_id')
                                                ->where('status','none')->where('absensi_id', '=', $a->id)->where('id_kelas','=', $kel->id)->get()->count();
                                            ?>
                                            <tr>
                                                <td>{{ $a->tanggal }}</td>
                                                <td>{{ $kel->nama_kelas }}</td>
                                                <td>{{ $kel->kategori_kelas }}</td>
                                                <td>{{ $total }}</td>
                                                <td>{{ $hadir }}</td>
                                                <td>{{ $izin }}</td>
                                                <td>{{ $thadir }}</td>
                                                
                                            </tr>
                                            @endforeach
                                        @endforeach
                                        </tbody>
                                    </table>
                                </center>              
                            </div>
                            </div>
                            <div>
                            <input type="button" class="btn btn-icon btn-outline-primary float-right mr-1 mb-1" value="rekap" onclick="PrintDiv();" />
                            </div>

                            <a role="button" href="#" class="btn btn-icon btn-outline-primary float-right mr-1 mb-1"
                                title="tambah tanggal" data-toggle="modal" data-target="#addDate"><i class="feather icon-calendar"></i> Add</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead class="">
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Kelas</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                        @foreach($kelas as $kel)
                                            @foreach($kel->absensi->sortDesc() as $a)
                                            <tr>
                                                <td>{{ $a->tanggal }}</td>
                                                <td>{{ $kel->nama_kelas }}</td>
                                                <td class="text-uppercase">{{ $kel->kategori }}</td>
                                                <td>
                                                    <a href="{{ route('cetak', [$a->id]) }}" class="avatar bg-primary" title="Cetak" target="_blank">
                                                        <div class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-book"></i>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('absen-siswa-terbatas.show', ['absen_siswa_terbata'=>$a->id]) }}" class="avatar bg-warning" title="Lihat">
                                                        <div class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-eye"></i>
                                                        </div>
                                                    </a>
                                                    <a role="button" href="#" class="avatar bg-danger" title="Hapus" onclick="alertConfirm({{ $a->id }})">
                                                        <div class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-trash"></i>
                                                        </div>
                                                    </a>
                                                    <form id="delForm{{ $a->id }}" action="{{ route('absen-siswa-terbatas.destroy', ['absen_siswa_terbata' => $a->id]) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
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

        <!-- Modal -->
        <div class="modal fade" id="addDate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addDateLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDateLabel">Tambah Tanggal Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('absen-siswa-terbatas.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Kelas</label>
                                <select name="id_kelas" id="" class="form-control" required>
                                    <option selected disabled>Pilih Kelas</option>
                                    @foreach($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
@push('plugin-scripts')
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/datatables/datatable.js')}}"></script>


<script>
    function alertConfirm(id) {
        var delID = '#delForm'+id;
        console.log(delID)
        swal({
            title: "Apakah anda yakin?",
            text: "Yakin menghapus ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $(delID).submit();
            } else {
                swal("Tidak jadi dihapus!");
            }
        });
    }
</script>
@endpush
