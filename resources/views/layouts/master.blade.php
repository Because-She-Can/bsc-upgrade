<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Because She Can - WE'RE ON A MISSION TO CLOSE THE GENDER GAP IN TECH" />
    <meta name="author" content="waalatech.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title') - Showing HER That SHE Can</title>



    <!-- Links from Gracious -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/faviconbsc.ico" />

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
        .banner-top{
            margin-top:135px;
            position:relative;
        }
        @media (max-width: 767px){
        
            .banner-top{
            margin-top:5px;
            position:relative;
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

        .footer .footer-social a:hover {
            color: #ffffff;
            background: #0085ff;
            border-color: #0085ff;
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
            color: #0085ff;
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
            color: #0085ff;
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
            color: #0085ff;
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
            color: #0085ff;
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

        }
    </style>

    <!-- footer style end -->
</head>

@yield('css')

<body>

    <!-- Header Start -->
    <header class="fixed-top wow fadeInDown header-fullpage">
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
                            <a href="#"><i class="icofont-facebook"></i></a>
                            <a href="https://twitter.com/becauseshecan_?lang=en" target="_blank"><i
                                    class="icofont-twitter"></i></a>
                            <a href="#"><i class="icofont-instagram"></i></a>
                            <a href="#"><i class="icofont-linkedin"></i></a>
                            <a href="#"><i class="icofont-youtube-play"></i></a>
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

                    <a class="nav-link btn btn-default ml-3 donate-btn" href="donation">Donate</a>

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
                        <li class="nav-item ">
                            <a class="nav-link " href="/">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="program_list" aria-haspopup="true"
                                aria-expanded="false">Programs <i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="dfwwc_program">December For Women Who Code</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Bootcamps</a></li>
                                <li><a class="dropdown-item" href="#">Celebrating women in tech</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Webinars</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="get_involved">Get Involved </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Jobs <i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">See All Jobs</a></li>
                                <li><a class="dropdown-item" href="#">Post A Job</a></li>
                            </ul>
                        </li>


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
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                            <a href=""><i class="icofont-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-contact">
                        <h3>Get In Touch</h3>
                        <p>
                            <i data-feather="map"></i> Front St. Agyei-Kojo NC 27215
                        </p>
                        <p><i data-feather="phone"></i><a href="tel:+233501367305"
                                style="color: #999999; padding-left:5px"> (+233) 50 136
                                7305</a></p>

                        <p>
                            <i data-feather="mail"></i><a href="mailto:info@becauseshecan.tech"
                                style="color: #999999; padding-left:5px">
                                info@becauseshecan.tech</a>
                        </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-links">
                        <h3>Useful Links</h3>
                        <a href="dfwwc_program"><i class="icofont-rounded-right"></i>December 4 women who code</a>
                        <a href=""><i class="icofont-rounded-right"></i>Bootcamps </a>
                        <a href=""><i class="icofont-rounded-right"></i>Celebrating women in tech</a>
                        <a href=""><i class="icofont-rounded-right"></i>Webinars</a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-links">
                        <h3>About Us</h3>

                        Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat
                        rhoncus, lorem quam iaculis felis, sed lacus neque id eros



                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-newsletter">
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
        </div>
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

    <!-- Volunteer Modal Javascript  -->
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

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
    <!-- End Script From Gracious  -->
</body>
@yield('scripts')



</html>