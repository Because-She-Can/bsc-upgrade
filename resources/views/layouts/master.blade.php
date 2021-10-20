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
                        <img src="assets/images/logo-dark.png" alt="BSC Logo." style="max-width: 150px;">
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
                            <a class="nav-link dropdown-toggle-mob" href="program_list" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Programs <i
                                    class="icofont-rounded-down"></i></a>
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

</body>


</html>