@extends('admin.layouts.master')

@section('title', 'Dealer Dashboard')

@section('css')

<link href="{{ asset('admin/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/plugins/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admin/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('admin/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('admin/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/dist/css/select2-full.min.css') }}">
<link href="{{ asset('admin/css/preloader.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('admin/plugins/sweet_alert/sweetalert.css') }}" rel="stylesheet">



@endsection

@section('page-content')
<br><br>
<div class="page-header page-header-default row">
    <div class="col-md-6 col-xs-12 page-header-content ">
        <div class="page-title  ">
            <h5><span class="f-w-700">Dashboard</span> - Administrator</h5>

            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Admin Dashboard</li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-primary text-center pvr-icon-box">
                            <i class="icon-users text-light"></i>
                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Total Volunteers</h5>
                        <p class="m-b-0 m-t-3">{{ 0 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-danger text-center pvr-icon-box">
                            <i class="icon-users text-light"></i>

                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Total Members </h5>
                        <p class="m-b-0 m-t-3">{{ 0 }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-info text-center pvr-icon-box">
                            <i class="icon-users text-light"></i>

                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Total Subscriptions</h5>
                        <p class="m-b-0 m-t-3">{{ 0 }}
                            <span class="float-right text-success"> </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-info text-center pvr-icon-box">
                                                        <i class="icon-users text-light"></i>

                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Confirmed Volunteers</h5>
                        <p class="m-b-0 m-t-3">{{ 0 }}
                            <span class="float-right text-success"> </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-success text-center pvr-icon-box">
                                                       <i class="icon-users text-light"></i>

                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Pending Volunteers</h5>
                        <p class="m-b-0 m-t-3">{{ 0 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="panel">
    <div class="panel-heading">
    <h6 class="panel-title" >
        Recent Volunteer(s)
        <span>
            <a href="" class="btn btn-primary btn-sm">View all volunteers</a>
        </span>
    </h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered w-in-100" id="table" data-server-side="true"
                        data-ajax="{{route('admin.volunteers','recent')}}">
                        <thead>
                            <tr>
                                <th data-searchable="false" data-orderable="false" data-data="DT_RowIndex"
                                    data-name="DT_RowIndex">S.No</th>
                                <th data-data="volunteer_country" data-name="volunteer_country">Country</th>
                                <th data-data="phone_number" data-name="phone_number">Phone Number</th>
                                <th data-data="volunteer_email" data-name="volunteer_email">Email Address</th>
                                <th data-data="volunteer_role" data-name="volunteer_role">Role</th>

                                <th data-data="volunteer_hours" data-name="volunteer_hours">Hours</th>

                                <th data-data="zip" data-name="zip">Zip</th>
                                <th data-data="availability" data-name="availability">Availablity</th>
                                <th data-data="experience_msg" data-name="experience_msg">Experience</th>
                                <th data-data="created_at" data-name="created_at">Date Created</th>
                                <th data-class="text-nowrap" data-sortable="false" data-orderable="false"
                                    data-searchable="false" data-data="action" data-name="action">Action</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="panel">
    <div class="panel-heading">
    <h6 class="panel-title" >
        Recent Member(s)
        <span>
            <a href="" class="btn btn-danger  btn-sm">View all members</a>
        </span>
    </h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive"><table class="table table-striped table-bordered w-in-100" id="table" data-server-side="true" data-ajax="{{route('admin.members','recent')}}">
                        <thead>
                            <tr>
                                <th data-searchable="false" data-orderable="false" data-data="DT_RowIndex" data-name="DT_RowIndex">S.No</th>
                                <th data-data="member_name" data-name="member_name">Name</th>
                                <th data-data="member_phone" data-name="member_phone">Phone Number</th>
                                <th data-data="member_email" data-name="member_email">Email Address</th>
                                <th data-data="country" data-name="country">Country</th>
                                <th data-data="it_stage" data-name="it_stage">IT Stage</th>
                                <th data-data="msg" data-name="msg">Message</th>
                                <th data-data="created_at" data-name="created_at">Date Created</th>
                                <th data-class="text-nowrap" data-sortable="false" data-orderable="false"
                                    data-searchable="false" data-data="action" data-name="action">Action</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('scripts')
<script src="{{ asset('admin/plugins/select2/dist/js/select2.full.js') }}"></script>
<script src="{{ asset('admin/plugins/bootstrap3-editable/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('admin/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/js/data.js') }}"></script>
<script src="{{ asset('admin/js/payment.js') }}"></script>


<script src='{{ asset("admin/plugins/snap/snap.svg-min.js") }}'></script>
<script src="{{ asset('admin/plugins/fullcalendar/lib/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('admin/plugins/fullcalendar/gcal.js') }}"></script>
<script src="{{ asset('admin/plugins/sweet_alert/sweetalert.min.js') }}"></script>
<script src="{{ asset('admin/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/plugins/owl.carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>


@endsection