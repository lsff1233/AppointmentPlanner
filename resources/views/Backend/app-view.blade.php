@extends('Backend.Layout.app')
@section('main-content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Appointment</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item text-muted active" aria-current="page">App</li>
                            <li class="breadcrumb-item text-muted" aria-current="page">View Appointment</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <select name="forma" onchange="location = this.value;"
                        class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option value = "app-calendar.html">Calendar View</option>
                        <option value = "app-table.php">Table view</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="">
                        <div class="row">
                            <!-- <div class="col-lg-3 border-right pr-0">
                                                        <div class="card-body border-bottom">
                                                            <h4 class="card-title mt-2">Drag & Drop Event</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div id="calendar-events" class="">
                                                                        <div class="calendar-events mb-3" data-class="bg-info"><i
                                                                                class="fa fa-circle text-info mr-2"></i>Event One</div>
                                                                        <div class="calendar-events mb-3" data-class="bg-success"><i
                                                                                class="fa fa-circle text-success mr-2"></i> Event Two
                                                                        </div>
                                                                        <div class="calendar-events mb-3" data-class="bg-danger"><i
                                                                                class="fa fa-circle text-danger mr-2"></i>Event Three
                                                                        </div>
                                                                        <div class="calendar-events mb-3" data-class="bg-warning"><i
                                                                                class="fa fa-circle text-warning mr-2"></i>Event Four
                                                                        </div>
                                                                    </div> -->
                            <!-- checkbox -->
                            <!-- <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="drop-remove">
                                                                        <label class="custom-control-label" for="drop-remove">Remove
                                                                            after drop</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                            <div class="col-lg-12">
                                <div class="card-body b-l calender-sidebar">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('custom-scripts')
    <link href="../assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <script src="../assets/js/pages/calendar/cal-init.js"></script>
@endpush
