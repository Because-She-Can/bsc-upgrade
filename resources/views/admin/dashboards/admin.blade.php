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

<div class="page-header page-header-default row">
    <div class="col-md-6 col-xs-12 page-header-content ">
        <div class="page-title  ">
            <h5><span class="f-w-700">Dashboard</span> - Administrator</h5>

            <ul class="breadcrumb">
                <li><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                <li class="active">Admin Dashboard</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-xs-12 " style="text-align:right">
        <ul class="breadcrumb ">
            <li>
                <h5><a href="/" style="color: #4076e0;"><strong>Back To Website </strong> </a></h5>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-primary text-center pvr-icon-box">
                            <i class="icon-car text-light"><img src="{{ asset('admin/images/car.png') }}" width="40px"
                                    height="40px"></i>
                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Total Cars</h5>
                        <p class="m-b-0 m-t-3">{{ $data['total_cars'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-danger text-center pvr-icon-box">
                            <i class="icon- text-light f-s-24"><img src="{{ asset('admin/images/car.png') }}"
                                    width="40px" height="40px"></i>
                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">New Cars </h5>
                        <p class="m-b-0 m-t-3">{{ $data['new'] }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-info text-center pvr-icon-box">
                            <i class="icon- text-light f-s-24"><img src="{{ asset('admin/images/car.png') }}"
                                    width="40px" height="40px"></i>
                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Foreign Used</h5>
                        <p class="m-b-0 m-t-3">{{ $data['foreign_used'] }}
                            <span class="float-right text-success"> </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-success text-center pvr-icon-box">
                            <i class="icon- text-light f-s-24"><img src="{{ asset('admin/images/car.png') }}"
                                    width="40px" height="40px"></i>
                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Registered Used</h5>
                        <p class="m-b-0 m-t-3">{{ $data['registered_used'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="bg-primary text-center pvr-icon-box">
                            <i class="icon-car text-light"><img src="{{ asset('admin/images/car.png') }}" width="40px"
                                    height="40px"></i>
                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Companies</h5>
                        <p class="m-b-0 m-t-3">{{ $data['total_companies'] }}</p>
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
                        <span class="bg-danger text-center pvr-icon-box">
                            <i class="icon- text-light f-s-24"><img src="{{ asset('admin/images/car.png') }}"
                                    width="40px" height="40px"></i>
                        </span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <h5 class="m-t-5 m-b-0 f-s-18">Users </h5>
                        <p class="m-b-0 m-t-3">{{ $data['total_users'] }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="panel">
    <div class="panel-heading" style="  background-image: linear-gradient(to right, white , #4076e0);">
        <h6 class="panel-title" style="color: #4076e0">Pending Cars</h6>
        <div class="heading-elements" style="background-color: rgba(0,0,0,0);">
            <ul class="icons-list">
                <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                <li class="close_element"><a href="javascript:void(0)"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <a href="{{ route('admin.cars.create') }}"><button type="button" class="btn btn-primary pull-right">Add New
                Car</button></a><br><br><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered w-in-100" id="table" data-server-side="true"
                        data-ajax="{{ route('admin.dashboard.admin') }}">
                        <thead>
                            <tr>
                                <th data-searchable="false" data-orderable="false" data-data="DT_RowIndex"
                                    data-name="DT_RowIndex">S.No</th>
                                <th data-data="image" data-name="image">Image</th>
                                <th data-data="make" data-name="make">Make</th>
                                <th data-data="model" data-name="model">Model</th>
                                <th data-data="mileage" data-name="mileage">Mileage</th>
                                <th data-data="status" data-name="status">Status</th>
                                <th data-data="price" data-name="price">Price</th>
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
    <div class="panel-heading" style="  background-image: linear-gradient(to right, #4076e0 , #4076e0);">
        <h6 class="panel-title" style="color: white">Pending Dealerships</h6>
        <div class="heading-elements" style="background-color: rgba(0,0,0,0);">
            <ul class="icons-list">
                <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                <li class="close_element"><a href="javascript:void(0)"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <a href="{{ route('admin.company') }}"><button type="button" class="btn btn-primary pull-right">View all
                companies</button></a><br><br><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered w-in-100">
                        <thead>
                            <tr>
                                <th data-searchable="false" data-orderable="false" data-data="logo" data-name="logo">
                                    Logo</th>
                                <th data-data="company_name" data-name="company_name">Name</th>
                                <th data-data="company_phone" data-name="company_phone">Primary Phone</th>
                                <th data-data="latitude" data-name="latitude">Latitude</th>
                                <th data-data="longitude" data-name="longitude">Longitude</th>
                                <th data-data="location" data-name="location">Location</th>
                                <th data-data="created_at" data-name="created_at">Date Created</th>
                                <th data-class="text-nowrap" data-sortable="false" data-orderable="false"
                                    data-searchable="false" data-data="action" data-name="action">Action</th>
                            </tr>
                        </thead>
                        @foreach($data['pending_companies'] as $company)
                        <tr>
                            <th data-searchable="false" data-orderable="false" data-data="logo" data-name="logo"><img
                                    src="/{{$company->logo}}" width="100px" hieght="100px" style="border-radius:10px">
                            </th>
                            <th data-data="company_name" data-name="company_name">{{$company->company_name}}</th>
                            <th data-data="company_phone" data-name="company_phone">{{$company->company_phone}}</th>
                            <th data-data="latitude" data-name="latitude">{{$company->latitude}}</th>
                            <th data-data="longitude" data-name="longitude">{{$company->longitude}}</th>
                            <th data-data="location" data-name="location">{{$company->location->name}}</th>
                            <th data-data="created_at" data-name="created_at">{{$company->created_at}}</th>
                            <th data-class="text-nowrap" data-sortable="false" data-orderable="false"
                                data-searchable="false" data-data="action" data-name="action">
                                <a href="/admin/company/approve/{{$company->slug}}">
                                    <button class='btn btn-dark btn-sm crud-button'><i
                                            class='fa fa-check'></i>Approve</button>
                                </a>
                                <a href="{{route('admin.company_details',$company->slug)}}"
                                    class='btn btn-dark btn-sm crud-button' id='company_update'><i
                                        class='fa fa-eye'></i></a>
                            </th>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row">
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h6 class="panel-title">Car Ratings</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                        <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                        <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                        <li class="close_element"><a href="javascript:void(0)"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <a href="{{ route('admin.cars.create') }}"><button type="button" class="btn btn-dark pull-right">Add
                        View All</button></a><br><br><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered w-in-100" id="" data-server-side="true"
                                data-ajax="{{ route('admin.cars.index') }}">
                                <thead>
                                    <tr>


                                        <th data-data="make" data-name="make">Make</th>
                                        <th data-data="model" data-name="model">Rating</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Toyata LE</td>
                                        <td>*****</td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h6 class="panel-title">Favourites</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                        <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                        <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                        <li class="close_element"><a href="javascript:void(0)"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <a href="{{ route('admin.cars.create') }}"><button type="button" class="btn btn-dark pull-right">Add
                        View All </button></a><br><br><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered w-in-100" id="" data-server-side="true"
                                data-ajax="{{ route('admin.cars.index') }}">
                                <thead>
                                    <tr>

                                        <th data-data="make" data-name="make">Make</th>
                                        <th data-data="model" data-name="model">Favourites</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Toyota LE</td>
                                        <td>24</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> --}}





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


<script src='{{ asset(' admin/plugins/snap/snap.svg-min.js') }}'></script>
<script src="{{ asset('admin/plugins/fullcalendar/lib/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('admin/plugins/fullcalendar/gcal.js') }}"></script>
<script src="{{ asset('admin/plugins/sweet_alert/sweetalert.min.js') }}"></script>
<script src="{{ asset('admin/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/plugins/owl.carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>
{{--
<script src="{{ asset('admin/js/index.js') }}"></script> --}}

@endsection