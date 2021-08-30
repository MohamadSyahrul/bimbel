@extends('admin.layouts.master')
@section('title')
Rekap Absen
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/data-list-view.css')}}">
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
                            <h4 class="card-title">Rekap Absensi Siswa</h4>
                            <div class="btn-group mb-1 float-right">
                            <!-- <input type='text' id='search' name='search' placeholder='Enter userid 10-21'> -->
                            <input type='date' id='dateStart' name='dateStart'>
                            <input type='date' id='dateEnd' name='dateEnd'>
                            
                            <select name="search" id="search" class="form-select" aria-labelledby="dropdownMenuButton">
                                <option name="search" id="search" value="999999/2222-12-12/2222-12-12">Pilih Kelas</option>
                                @foreach($kelas as $kl)
                                <option name="search" id="search" value="{{$kl->id}}">{{$kl->kategori_kelas}} - {{$kl->nama_kelas}}</option>
                                @endforeach
                            </select>
                            <input class="btn btn-primary mr-1" type='button' value='Search' id='btnSearch'>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                
                                <div class="table-responsive">
                                <table class="dt-advanced-search table" id='userTable'>
                                    <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;" >Tanggal</th>
                                        <th rowspan="2" style="vertical-align: middle;" >Nama Siswa</th>
                                        <th rowspan="2" style="vertical-align: middle;" >Nama Kelas</th>
                                        <th rowspan="2" style="vertical-align: middle;" >Kategori Kelas</th>
                                        <th colspan="4" style="text-align: center;" >Siswa</th>
                                    </tr>
                                    
                                    <th style="text-align: center;" > Hadir</th>
                                        <th style="text-align: center;" > Izin</th>
                                        <th style="text-align: center;" > Tidak Hadir</th>
                                        <th style="text-align: center;" > Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- jQuery CDN -->
                                <script type='text/javascript'>
                                    $(document).ready(function(){
                                        // Fetch all records
                                        $('#fetchAllRecord').click(function(){
                                            fetchRecords(0);
                                        });
                                        // Search by userid
                                        $('#btnSearch').click(function(){
                                            var id          = Number($('#search').val().trim());
                                            var dateStart   = $('#dateStart').val();
                                            var dateEnd     = $('#dateEnd').val();
                                            // console.log(dateStart);
                                            if(id > 0){
                                                fetchRecords(id,dateStart,dateEnd);
                                            }
                                        });
                                    });
                                    function fetchRecords(id,dateStart,dateEnd){
                                        $.ajax({
                                            url: '/admin/rekap/absensi/'+id+'/'+dateStart+'/'+dateEnd,
                                            type: 'get',
                                            dataType: 'json',
                                            success: function(response){
                                                var len = 0;
                                                var len2 = 0;
                                                // console.log(response);
                                                $('#userTable tbody').empty(); // Empty <tbody>
                                                if(response['data'] != null){
                                                    len = response['data'].length;
                                                    len2 = response['kelas'].length;
                                                }
                                                if(len > 0){
                                                    for(var i=0; i<len2; i++){
                                                        for(var j=0; j<len; j++){
                                                            var tanggal = response['data'][j].tanggal;
                                                            var name = response['data'][j].name;
                                                            var nama_kelas = response['kelas'][i].nama_kelas;
                                                            var kategori_kelas = response['kelas'][i].kategori_kelas;
                                                            var hadir = response[j]['hadir'];
                                                            var izin = response[j]['izin'];
                                                            var thadir = response[j]['thadir'];
                                                            var totalSiswa = response[j]['totalKehadiranSiswa'];
                                                            var totalKelas = response[j]['totalKehadiranKelas'];
                                                            var tr_str = "<tr>" +
                                                            "<td>" + tanggal + "</td>" +
                                                            "<td>" + name + "</td>" +
                                                            "<td>" + nama_kelas + "</td>" +
                                                            "<td>" + kategori_kelas + "</td>" +
                                                            "<td align='center' >" + hadir + "</td>" +
                                                            "<td align='center' >" + izin + "</td>" +
                                                            "<td align='center' >" + thadir + "</td>" +
                                                            "<td align='center' >" + totalSiswa + "</td>" +
                                                            "</tr>";
                                                            $("#userTable tbody").append(tr_str);
                                                        }
                                                    }
                                                    var tr_str = "<tr>" +
                                                    "<th colspan='7' style='text-align: right;' >Total Seluruh Kelas</th>" +
                                                    "<th>" + totalKelas + " siswa</th>" +
                                                    "</tr>";
                                                    $("#userTable tfoot").append(tr_str);
                                                }else if(response['data'] != null){
                                                    var tr_str = "<tr>" +
                                                    "<td>" + (i+1) + "</td>" +
                                                    "<td>" + tanggal + "</td>" +
                                                    "<td>" + name + "</td>" +
                                                    "<td>" + nama_kelas + "</td>" +
                                                    "<td>" + kategori_kelas + "</td>" +
                                                    "<td align='center' >" + hadir + "</td>" +
                                                    "<td align='center' >" + izin + "</td>" +
                                                    "<td align='center' >" + thadir + "</td>" +
                                                    "<td align='center' >" + totalSiswa + "</td>" +
                                                    "<td align='center' >" + totalKelas + "</td>" +
                                                    "</tr>";
                                                        $("#userTable tbody").append(tr_str);
                                                    }else{
                                                        var tr_str = "<tr>" +
                                                        "<td align='center' colspan='8'>No record found.</td>" +
                                                        "</tr>";
                                                        $("#userTable tbody").append(tr_str);
                                                        
                                                    }
                                                }
                                            });
                                        }
                                    </script>
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
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/ui/data-list-view.js')}}"></script>
@endpush
