@extends('admin.layouts.master')
@section('title')
Jadwal Kelas Terbatas
@endsection
@push('plugin-styles')
<!-- BEGIN: Vendor CSS-->
<!-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/fullcalendar.min.css')}}"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/extensions/daygrid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/extensions/timegrid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/calendars/fullcalendar.css')}}"> -->
<!-- END: Page CSS-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<style>
    span.fc-title {
        color: white;
    }
</style>
@endpush
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Full calendar start -->
        <section id="basic-examples">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h2>Jadwal Kelas Terbatas</h2>
                                <hr>
                                
                                <!-- <div id='fc-default'></div> -->
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- calendar Modal starts-->
            <div class="modal fade text-left modal-calendar" tabindex="-1" role="dialog"
                aria-labelledby="cal-modal" aria-modal="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-text-bold-600" id="cal-modal">Tambah Jadwal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form id="form-add">
                            <div class="modal-body">
                                <div class="d-flex justify-content-between align-items-center add-category">
                                    <div class="chip-wrapper"></div>
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control" id="cal-event-title"
                                        placeholder="Jadwal Title" name="title" required>
                                    <label for="cal-event-title">Jadwal Title</label>
                                </fieldset>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control pickadate" name="start" id="cal-start-date"
                                        placeholder="Start Date" value="" disabled>
                                    <label for="cal-start-date">Start Date</label>
                                </fieldset>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control pickadate" name="end" id="cal-end-date"
                                        placeholder="End Date" value="" disabled>
                                    <label for="cal-end-date">End Date</label>
                                </fieldset>
                                <fieldset class="form-label-group">
                                    <select name="kelas_id" id="kelas_id" class="form-control" required>
                                        <option value="" selected disabled>Pilih Kelas</option>
                                        @foreach($kelas as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                    <label for="cal-description">Kelas</label>
                                </fieldset>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="btnAdd()" id="btn-add">Add</button>
                                <button type="button"
                                    class="btn btn-flat-danger cancel-event waves-effect waves-light"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- calendar Modal ends-->
        </section>
        <!-- // Full calendar end -->

    </div>
</div>
@endsection
@push('plugin-scripts')

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<!-- <script src="{{asset('app-assets/vendors/js/calendar/fullcalendar.min.js')}}"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<!-- <script src="{{asset('app-assets/fullcalendar/lib/main.min.js')}}"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- <script src="{{asset('app-assets/vendors/js/calendar/extensions/daygrid.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/calendar/extensions/timegrid.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/calendar/extensions/interactions.min.js')}}"></script> -->
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<!-- <script src="{{asset('app-assets/js/scripts/extensions/fullcalendar.js')}}"></script> -->
<!-- END: Page JS-->

<script>

var site_url = "/admin/jadwal-kelas-terbatas"

document.addEventListener('DOMContentLoaded', function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: site_url,
        displayEventTime: false,
        editable: true,
        eventRender: function(event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {

            var start_date = $.fullCalendar.formatDate(start, "Y-MM-DD");
            var end_date = $.fullCalendar.formatDate(end, "Y-MM-DD");
            $('#cal-start-date').val(start_date);
            $('#cal-end-date').val(end_date);
            $('.modal-calendar').modal('show');

        },

        eventDrop: function(event, delta) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

            $.ajax({
                url: site_url + '/jadwal',
                data: {
                    title: event.title,
                    start: start,
                    end: end,
                    id: event.id,
                    type: 'update'
                },
                type: "POST",
                success: function(response) {

                    displayMessage("Jadwal berhasil diupdate !");
                }
            });
        },

        eventClick: function(event) {
            var deleteMsg = confirm("Yakin menghapus jadwal?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: site_url + '/jadwal',
                    data: {
                        id: event.id,
                        type: 'delete'
                    },
                    success: function(response) {

                        calendar.fullCalendar('removeEvents', event.id);
                        displayMessage("Jadwal berhasi dihapus !");
                    }
                });
            }
        }

    });


});

function btnAdd() {
    var title = $('#cal-event-title').val();
    var start = $('#cal-start-date').val();
    var end = $('#cal-end-date').val();
    var kelas_id = $('#kelas_id').val();
    $.ajax({
        url: site_url + "/jadwal",
        data: {
            title: title,
            start: start,
            end: end,
            kelas_id: kelas_id,
            type: 'add'
        },
        type: "POST",
        success: function(data) {
            displayMessage("Jadwal berhasil ditambahkan !");

            $('#calendar').fullCalendar('renderEvent', {
                id: data.id,
                title: title,
                kelas_id: kelas_id,
                start: start,
                end: end,
                allDay: true
            });

            $('#calendar').fullCalendar('unselect');
            $('.modal-calendar').modal('hide');
        }
    });
}

function displayMessage(message) {
    toastr.success(message, 'Jadwal');
}

</script>
@endpush
