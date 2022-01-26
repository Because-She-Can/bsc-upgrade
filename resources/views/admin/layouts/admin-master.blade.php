<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <title>BSC Admin | @yield('title') </title>

    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#212121">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#212121">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#212121">

    <!-- BEGIN BASE CSS STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/essential.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css">
    @yield('css')
    <!-- BEGIN END BASE CSS STYLE -->
</head>

<body class="@can('areAdmins') sidebar_menu @endcan top_nav_fixed">

    <!-- BEGIN PAGE-LOADER -->
    <div class="preloader">
        <div class="loading">
            <div class="lds-circle">
                <div></div>
            </div>
        </div>
    </div>
    <!-- END PAGE-LOADER -->

    <div id="header">

        <!-- BEGIN TOP NAV ABR -->
        <div class="navbar navbar-default navbar-fixed-top bordered">
            <div class="navbar-header">
                <ul class="nav navbar-nav m-l-0 pull-left">

                    <li id="minimizeSidebar" class="navbar-toggler">
                        <a href="/">
                            <img src="{{asset('assets/images/logo-dark.png')}}"
                                alt="Company Logo" class="w-115">
                        </a>
                    </li>

                    
                </ul>

                
            </div>

            <div class="navbar-collapse collapse" id="mobile_nav">
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <li id="toggleFullScreen" class="hidden-xs">
                            <a href="javascript:void(0)">
                                <i class="fa fa-desktop"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="visible-xs-inline-block position-right">Notification(s)</span>
                                <span class="pulse hidden-xs"></span>
                            </a>

                            <div class="dropdown-menu dropdown-content">
                                <div class="dropdown-content-heading">
                                    Notification(s)
                                    <ul class="icons-list">
                                        <li><a href="javascript:void(0)" class="f-s-10 m-t-5">View All</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-toggle="dropdown">

                                <span>{{ Auth::user()->name }}</span>
                                <i class="caret"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header navigations">Navigation</li>
                                <li class="navigations">
                                    <a href="javascript:void(0)">
                                        <span class="badge badge-primary pull-right">0</span>
                                        <i class="fa fa-comment"></i> Notifications
                                    </a>
                                </li>
                                <li class="navigations">
                                    <a href="">
                                        <i class="fa fa-user"></i> My profile
                                    </a>
                                </li>
                                
                                <li class="divider navigations"></li>
                                <li class="navigations">

                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                        <i data-feather="log-in"></i>
                                        <span>{{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER -->

    <!-- BEGIN PAGE CONTENT -->
    <div class="page-container" id="page-container">

        <!-- BEGIN MAIN CONTENT -->
        <div class="main_content">
            <!-- BEGIN WRAPPER -->
            <div class="content-wrapper">

                @yield('page-content')

            </div>
            <!-- END WRAPPER -->
        </div>
        <!-- END MAIN CONTENT -->
    </div>

    <!-- BEGIN FOOTER -->
    <div class="navbar navbar-default footer">
        <footer id="footer" class="footer footer-inverse">
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-7 col-sm-7">
                        <div class="text-xs-center text-sm-left">
                            <ul class="footer-menu">
                                <li>
                                    <a href="" class="p-l-0"
                                        target="_blank">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}" target="_blank">Website</a>
                                </li>
                            </ul>

                            <div class="copyright">
                                <ul class="copy-links">
                                    <li>
                                        © 2021 <a href="#" target="_blank">Because She Can</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank">Terms</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank">License</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank">Privacy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN TO TOP -->
    <a href="javascript:void(0)" class="back-to-top btn-back-to-top"></a>
    <!-- END TO TOP -->   
    <!-- BEGIN BASE JS -->
    <script src="{{ asset('admin/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/nicescroll/nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery.slimscroll.min/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.js') }}"></script>

    <script src="{{ asset('admin/js/app.js') }}"></script>
    @yield('scripts')
    <!-- END PAGE LEVEL JS -->
</body>

</html>
