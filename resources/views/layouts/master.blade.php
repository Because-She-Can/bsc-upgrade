<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Because She Can - WE'RE ON A MISSION TO CLOSE THE GENDER GAP IN TECH" />
    <meta name="author" content="waalatech.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title') - Because She Can </title>



    <!-- Links from Gracious -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- Animate CSSS -->
    <link href="assets/library/animate/animate.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Dropdown Hover CSS -->
    <link href="assets/library/bootstrap/css/bootstrap-dropdownhover.min.css" rel="stylesheet" />
    <!-- Icofont CSS -->
    <link href="assets/library/icofont/icofont.min.css" rel="stylesheet" />
    <!-- Owl Carousel CSS -->
    <link href="assets/library/owlcarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <!-- Select Dropdown CSS -->
    <link href="assets/library/select2/css/select2.min.css" rel="stylesheet" />
    <!-- Magnific Popup CSS -->
    <link href="assets/library/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <!-- Main Theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Links from Gracious end -->
    <!-- Home SLider CSS -->
    <link rel="stylesheet" href="assets/css/home-main.css">
    <!-- Links from Gracious end -->
    <!-- footer styles  -->

    <style>
        /* banner of header style not prt of footer */
        .banner-top {
            margin-top: 135px;
            position: relative;
        }

        @media (max-width: 992px) {

            .banner-top {
                margin-top: 5px;
                position: relative;
            }

        }

        @media only screen and (max-width: 760px) {

            #usefulLinks,
            #aboutus {
                display: none;
            }

        }

        /*END banner of header style not prt of footer */
        a {
            transition: .3s;
        }

        a:hover,
        a:active,
        a:focus {
            outline: none;
            text-decoration: none;
        }

        .footer {
            position: relative;
            padding-top: 45px;
            background: #121518;
        }

        .footer .footer-about,
        .footer .footer-contact,
        .footer .footer-links,
        .footer .footer-project {
            position: relative;
            margin-bottom: 45px;
            color: #999999;
        }

        .footer .footer-about h3,
        .footer .footer-contact h3,
        .footer .footer-links h3,
        .footer .footer-project h3 {
            position: relative;
            margin-bottom: 20px;
            padding-bottom: 10px;
            font-size: 20px;
            font-weight: 600;
            color: #eeeeee;
        }

        .footer .footer-about h3::after,
        .footer .footer-contact h3::after,
        .footer .footer-links h3::after,
        .footer .footer-project h3::after {
            position: absolute;
            content: "";
            width: 50px;
            height: 2px;
            left: 0;
            bottom: 0;
            background: #eeeeee;
        }

        .footer .footer-social {
            position: relative;
            margin-top: 20px;
        }

        .footer .footer-social a {
            display: inline-block;
            width: 35px;
            height: 35px;
            padding: 6px 0;
            text-align: center;
            color: #999999;
            font-size: 14px;
            border: 1px solid #999999;
            border-radius: 35px;
        }


        .footer .footer-contact p:hover {

            color: #F9F4E8;
        }

        a.tel-mail:hover {
            color: #F9F4E8 !important;
        }

        .footer .footer-social .twitter:hover {
            color: #F9F4E8;
            background: #1da1f2;
            border-color: #1da1f2;

        }

        .footer .footer-social .instagram:hover {
            color: #F9F4E8;
            background: #c32aa3;
            border-color: #c32aa3;

        }

        .footer .footer-social .facebook:hover {
            color: #F9F4E8;
            background: #1877f2;
            border-color: #1877f2;

        }

        .footer .footer-social .linkedin:hover {
            color: #F9F4E8;
            background: #0a66c2;
            border-color: #0a66c2;

        }

        .footer .footer-social .youtube:hover {
            color: #F9F4E8;
            background: #ff0000;
            border-color: #ff0000;

        }


        .footer .footer-contact p {
            margin-bottom: 10px;
            font-size: 16px;
            color: #999999;
        }

        .footer .footer-contact i {
            margin-right: 10px;
            font-size: 16px;
            color: #999999;
        }

        .footer .footer-contact a:last-child i {
            margin: 0;
        }

        .footer .footer-contact a:hover i {
            color: #F9F4E8;
        }

        .footer .footer-links a {
            display: block;
            margin-bottom: 4px;
            /* padding-left: 5px; */
            color: #999999;
        }

        .footer .footer-links a:last-child {
            margin: 0;
        }

        .footer .footer-links a:hover {
            color: #F9F4E8;
        }

        /* .footer .footer-links a::before {
            position: absolute;
            content: "\f105";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            left: 0;
        } */

        .footer .footer-project {
            float: left;
            font-size: 0;
        }

        .footer .footer-project a {
            padding: 0 8px 8px 0;
            display: block;
            width: 33.33%;
            float: left;
        }

        .footer .footer-project a img {
            width: 100%;
        }

        .footer .footer-newsletter {
            margin-bottom: 35px;
            max-width: 700px;
            text-align: center;
            color: #999999;
        }

        .footer .footer-newsletter input {
            height: 35px;
            border: none;
            border-radius: 5px;
            background: rgba(256, 256, 256, .15);
            margin-bottom: 15px;
        }

        .footer .footer-newsletter .btn {
            display: block;
            width: 100%;
            height: 35px;
            font-size: 14px;
            font-weight: 400;
            text-transform: uppercase;
            color: #ffffff;
            background: #e9414a;
            border-radius: 5px;
            border: none;
            transition: .3s;
        }

        .footer .footer-newsletter .btn:hover {
            color: #F9F4E8;
            background: #ffffff;
        }

        .footer .footer-newsletter .btn:focus {
            box-shadow: none;
        }


        .footer .copyright {
            position: relative;
            padding: 25px 0;
            background: #000000;
        }

        .footer .copyright .copy-text p {
            margin: 0;
            font-size: 16px;
            font-weight: 400;
            color: #999999;
        }

        .footer .copyright .copy-text p a {
            color: #999999;
            text-decoration: none;
        }

        .footer .copyright .copy-text p a:hover {
            color: #ff008c;
        }

        .footer .copyright .copy-menu {
            position: relative;
            font-size: 0;
            text-align: right;
        }

        .footer .copyright .copy-menu a {
            color: #999999;
            font-size: 16px;
            font-weight: 400;
            margin-right: 15px;
            padding-right: 15px;
            border-right: 1px solid rgba(255, 255, 255, .3);
        }

        .footer .copyright .copy-menu a:hover {
            color: #F9F4E8;
        }

        .footer .copyright .copy-menu a:last-child {
            margin-right: 0;
            padding-right: 0;
            border-right: none;
        }

        @media (max-width: 767.98px) {

            .footer .copyright .copy-text,
            .footer .copyright .copy-menu {
                text-align: center;
            }

            .footer .copyright .copy-text p {
                margin-bottom: 5px;
            }

            .w-50 {
                width: 100% !important;
            }

        }

        @media (max-width: 575px) {

            .top-bar-right .contact-info div:last-child,
            .donate-btn {
                display: block;
            }

        }

        .sup{
            color:red;
            font-size:14px;
        
        }

        /* 
        .gee {
            background-image: linear-gradient(to left, #51324c, #63425d, #75536f, #876481, #9a7694, #a885a2, #b695b0, #c5a5bf, #d1b6cc, #dec8da, #ead9e7, #f7ebf5);
        } */
    </style>

    <!-- footer style end -->
</head>

<!-- Page loader Start -->
<div id="pageloader">
    <div class="loader-item">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>
</div> 
<!-- Page loader End -->

@yield('css')

<body>

    <!-- Header Start -->
    <header id="gee" class="fixed-top wow fadeInDown header-fullpage ">
        <div class="top-bar-right d-flex align-items-center text-md-left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col d-flex align-items-center contact-info">
                        <div>
                            <i data-feather="phone"></i> <a href="tel:+233501367305">(+233) 50 136 7305</a>
                        </div>
                        <div>
                            <i data-feather="mail"></i> <a
                                href="mailto:info@becauseshecan.tech">info@becauseshecan.tech</a>
                        </div>
                        <!-- <div>
                            <i data-feather="clock"></i> Mon-Fri / 9:00 AM - 19:00 PM
                        </div> -->
                    </div>

                    <div class="col-md-auto">
                        <div class="social-icons">
                            <a class="facebook" href="https://www.facebook.com/becauseshecan.africa"><i
                                    class="icofont-facebook"></i></a>
                            <a class="twitter" href="https://twitter.com/becauseshecan_?lang=en" target="_blank"><i
                                    class="icofont-twitter"></i></a>
                            <a class="instagram" href="https://www.instagram.com/becauseshecan_/"><i
                                    class="icofont-instagram"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/company/becauseshecan"><i
                                    class="icofont-linkedin"></i></a>
                            <a class="youtube"
                                href="https://www.youtube.com/channel/UC_fmMEQ4ji0euE7FgQj9RMA/featured"><i
                                    class="icofont-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation Start -->
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container text-nowrap">
                <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                    <a class="navbar-brand rounded-bottom light-bg" href="/">
                        <img src="assets/images/logo-dark.png" alt="BSC Logo." style="max-width: 130px;">
                    </a>
                </div>
                <!-- Topbar Buttons Start -->
                <div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center">

                    <a class="nav-link btn btn-default ml-3 donate-btn" href="donate">Donate</a>

                    <!-- Toggle Button Start -->
                    <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Toggle Button End -->
                </div>
                <!-- Topbar Buttons End -->

                <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown"
                    data-animations="slideInUp slideInUp slideInUp slideInUp">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }} ">
                            <a class="nav-link " href="/">Home</a>

                        </li>
                        <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="about">About Us</a>
                        </li>
                        <li class="nav-item dropdown {{ request()->is('dfwwc_program') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Programs <i class="icofont-rounded-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- <li><a class="dropdown-item" href="program_list">All Programs</a>
                                </li> -->
                                <li><a class="dropdown-item" href="dfwwc_program">December For Women Who Code</a>
                                </li>
                                <!-- <li><a class="dropdown-item" href="#">Bootcamps</a></li>
                                <li><a class="dropdown-item" href="#">Celebrating women in tech</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Webinars</a></li> -->
                            </ul>
                        </li>

                        <li class="nav-item  {{ request()->is('get_involved') ? 'active' : '' }}">
                            <a class="nav-link " href="get_involved">Get Involved </a>

                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Jobs <i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">See All Jobs</a></li>
                                <li><a class="dropdown-item" href="#">Post A Job</a></li>
                            </ul>
                        </li> -->


                    </ul>
                    <!-- Main Navigation End -->
                </div>
            </div>
        </nav>
        
        <!-- Main Navigation End -->
    </header>
    <!-- Header Start -->



    <main id="body-content">

        @yield('content')

    </main>

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-about">

                        <a class="navbar-brand rounded-bottom light-bg" href="/">
                            <img src="assets/images/logo-light.png" alt="BSC Logo." style="max-width: 130px;">
                        </a>
                        <br><br>

                        <div class="footer-social">
                            <a class="twitter" href="https://twitter.com/becauseshecan_?lang=en" target="_blank"><i
                                    class="icofont-twitter"></i></a>
                            <a class="instagram" href="https://www.instagram.com/becauseshecan_/" target="_blank"><i
                                    class="icofont-instagram"></i></a>
                            <a class="facebook" href="https://www.facebook.com/becauseshecan.africa" target="_blank"><i
                                    class="icofont-facebook"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/company/becauseshecan" target="_blank"><i
                                    class="icofont-linkedin"></i></a>
                            <a class="youtube" href="https://www.youtube.com/channel/UC_fmMEQ4ji0euE7FgQj9RMA/featured"
                                target="_blank"><i class="icofont-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-contact">
                        <h3>Get In Touch</h3>
                        <p>
                            <i data-feather="map"></i> AD7 Community 11 Tema
                        </p>
                        <p><i data-feather="phone"></i><a class="tel-mail" href="tel:+233501367305"
                                style="color: #999999; padding-left:5px"> (+233) 50 136
                                7305</a></p>

                        <p>
                            <i data-feather="mail"></i><a class="tel-mail" href="mailto:info@becauseshecan.tech"
                                style="color: #999999; padding-left:5px">
                                info@becauseshecan.tech</a>
                        </p>

                    </div>
                </div>
                <div id="usefulLinks" class="col-md-6 col-lg-3">
                    <div class="footer-links">
                        <h3>Useful Links</h3>
                        <a href="dfwwc_program"><i class="icofont-rounded-right"></i>December 4 women who code</a>
                        <a href=""><i class="icofont-rounded-right"></i>Bootcamps </a>
                        <a href=""><i class="icofont-rounded-right"></i>Celebrating women in tech</a>
                        <a href=""><i class="icofont-rounded-right"></i>Webinars</a>

                    </div>
                </div>
                <div id="aboutus" class="col-md-6 col-lg-3">
                    <div class="footer-links">
                        <h3>About Us</h3>

                        Our Mission is to encourage & empower girls to pursue Tech roles by exposing them to women in
                        such fields through personal interactions and mentorship.



                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container footer-newsletter">
            <h5> Subscribe To Our News Letter</h5>

            <div class="row form">
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Your Name" name="" />
                </div>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Your Email" name="" />
                </div>
                <div class="col-sm-4">
                    <button class="btn">Subscribe</button>
                </div>
            </div>
        </div> -->
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copy-text">
                            <p>
                                ©
                                <a href="#" target="_blank">Because She Can </a>Copyright 2021 All Rights Reserved
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copy-menu">
                            <!-- <ul class="list-inline text-lg-right text-center">
                                <li>Developed By<a href="#">Waala Tech </a> |</li>
                                <li><a href="#">contact us </a></li>
                            </ul> -->

                            <a href="#" target="_blank"> Developed by Waala tech</a>

                            <a href="#">About</a>
                            <a href="#">Terms</a>
                            <a href="#">Privacy</a>
                            <!-- <a href="">Contact</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->


    <!-- Script From Gracious  -->

    <!-- Back To Top Start -->
    <a id="mkdf-back-to-top" href="#" class="off"><i data-feather="corner-right-up"></i></a>
    <!-- Back To Top End -->

   

    <!-- Needless link i do know why it give me issues when i take it out  -->

    <!-- jquery  -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <!-- bootstrap -->
    <script type="text/javascript" src="js/popper.js"></script>

    <!-- mega-menu -->
    <script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>



    <!-- custom -->
    <script type="text/javascript" src="js/custom.js"></script>


    <!-- end of this stupid code tf!! -->

    <!-- Volunteer Modal Javascript End  -->

    <!-- Jquery Library JS -->
    <script src="assets/library/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/library/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Dropdown JS -->
    <script src="assets/library/bootstrap/js/bootstrap-dropdownhover.min.js"></script>
    <!-- Feather Icon JS -->
    <script src="assets/library/feather-icons/feather.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/library/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- Select2 Dropdown JS -->
    <script src="assets/library/select2/js/select2.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/library/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Instagram Images JS -->
    <script src="assets/library/jquery-instagramFeed/jquery.instagramFeed.min.js"></script>
    <!-- Way Points JS -->
    <script src="assets/library/jquery-waypoints/jquery.waypoints.min.js"></script>
    <!-- Count Down JS -->
    <script src="assets/library/countdown/jquery.countdown.min.js"></script>
    <!-- Appear JS -->
    <script src="assets/library/jquery-appear/jquery.appear.js"></script>
    <!-- Jquery Easing JS -->
    <script src="assets/library/jquery-easing/jquery.easing.min.js"></script>
    <!-- Counter JS -->
    <script src="assets/library/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Form Validation JS -->
    <script src="assets/library/jquery-validate/jquery.validate.min.js"></script>
    <!-- Theme Custom -->
    <script src="assets/js/site-custom.js"></script>
    <!-- Home Slider (Only For Home pages) -->
    <script src="assets/js/home-slider.js"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });
    </script>

    <!-- @if (\Request::is('/'))
    <script>
        $('#gee').addClass("gee");
    </script>
    @endif -->
    <!-- End Script From Gracious  -->

    <!-- <script>
    function inpNum(e) {
        e = e || window.event;
        var charCode = (typeof e.which == "undefined") ? e.keyCode : e.which;
        var charStr = String.fromCharCode(charCode);
        if (!charStr.match(^[-+()][0-9][-+()0-9]$))
            e.preventDefault();
    }
</script> -->
    <!-- 
<script>
    function inpNum(e) {
        e = e || window.event;
        var charCode = (typeof e.which == "undefined") ? e.keyCode : e.which;
        var charStr = String.fromCharCode(charCode);
        if (!charStr.match(/^[0-9]+$/))
            e.preventDefault();
    }
</script> -->
    <script>
        var inputEl = document.getElementById('tel');
        var goodKey = '0123456789+ ';

        var checkInputTel = function (e) {
            var key = (typeof e.which == "number") ? e.which : e.keyCode;
            var start = this.selectionStart,
                end = this.selectionEnd;

            var filtered = this.value.split('').filter(filterInput);
            this.value = filtered.join("");

            /* Prevents moving the pointer for a bad character */
            var move = (filterInput(String.fromCharCode(key)) || (key == 0 || key == 8)) ? 0 : 1;
            this.setSelectionRange(start - move, end - move);
        }

        var filterInput = function (val) {
            return (goodKey.indexOf(val) > -1);
        }

        inputEl.addEventListener('input', checkInputTel);
    </script>
</body>
@yield('scripts')



</html>
