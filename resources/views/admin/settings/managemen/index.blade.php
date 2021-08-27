@extends('admin.layouts.master')
@section('title')
Managemen User Dasapratama
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/data-list-view.css')}}">
@endpush
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Data list view starts -->
        <section id="data-thumb-view" class="data-thumb-view-header">
            <div class="action-btns d-none">
                <div class="btn-dropdown mr-1 mb-1">
                    <div class="btn-group dropdown actions-dropodown">
                        <!-- <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                            <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                            <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                            <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- dataTable starts -->
            <div class="table-responsive">
                <table class="table data-thumb-view">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="product-name">{{ $row->name }}</td>
                            <td class="text-uppercase">{{ $row->email }}</td>
                            <td class="product-price">{{ $row->role }}</td>
                            <td class="product-price">*********</td>
                            <td>
                                <a href="{{ route('management-user.edit', $row->id) }}" class="avatar bg-success"
                                    title="Edit">
                                    <div href="#" class="avatar-content">
                                        <i class="avatar-icon text-white feather icon-edit-2"></i>
                                    </div>
                                </a>
                                <a class="avatar bg-danger" title="Delete" onclick="alertConfirm({{ $row->id }})">
                                    <div class="avatar-content">
                                        <i class="avatar-icon text-white feather icon-trash-2"></i>
                                    </div>
                                </a>
                                <form id="delForm{{ $row->id }}" action="{{ route('management-user.destroy', $row->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- dataTable ends -->

            <!-- add new sidebar starts -->
            <div class="add-new-data-sidebar">
                <div class="overlay-bg"></div>
                <form action="{{ route('management-user.store') }}" method="POST">
                    @csrf
                    <div class="add-new-data">
                        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                            <div>
                                <h4 class="text-uppercase">Tambah User</h4>
                            </div>
                            <div class="hide-data-sidebar">
                                <i class="feather icon-x"></i>
                            </div>
                        </div>
                        <div class="data-items pb-3">
                            <div class="data-fields px-2">
                                <div class="row">
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-name">Nama</label>
                                        <input type="text" class="form-control" id="data-name" name="name"
                                            required>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-name">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-category"> Role </label>
                                        <select class="form-control" id="data-category" name="role" required>
                                            <option selected disabled>Pilih</option>
                                            <option value="admin">Admin</option>
                                            <option value="siswa">Siswa</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-name">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            required>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-name">Konfirmasi Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                            <div class="add-data-btn">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                            <div class="cancel-data-btn">
                                <button class="btn btn-outline-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- add new sidebar ends -->


        </section>
        <!-- Data list view end -->

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

<script>
    function alertConfirm(id) {
        var delID = '#delForm' + id;
        console.log(delID)
        swal({
                title: "Apakah anda yakin?",
                text: "Yakin menghapus Kelas ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $(delID).submit();
                } else {
                    swal("Kelas tidak jadi dihapus!");
                }
            });
    }

    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

    tinymce.init({
        selector: 'textarea#desc',
        height: 300,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help fullscreen'
        ],
        toolbar: 'styleselect fullscreen | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
        menubar: 'file edit format tools table',
    });

</script>
@endpush
