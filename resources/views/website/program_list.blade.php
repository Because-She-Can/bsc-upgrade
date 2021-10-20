
@extends('layouts.master')

@section('title', 'December For Women Who Code')

@section('content')
<!--Volunteer Modal CSS -->
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            z-index: 1000;

        }


        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            color: #000;
        }

        /* The Close Button */
        .close {
            color: #160202;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 760px) {
            #Vol-side-text {
                display: none;
            }

        }
    </style>
    <!-- Volunteer Modal Css End -->

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* .main-banner {
            margin-top: 0px;
        } */

        /* .slides-wrap .owl-carousel .owl-nav {
            right: 100px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin: 0;
        } */
        .owl-carousel .owl-nav button.owl-prev {
            left: -125px;
        }

        .slides-wrap .owl-carousel .owl-nav {
            right: 100px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin: 0;
        }

        .owl-carousel:hover .owl-nav .owl-prev {
            left: -125px;
        }

        .owl-carousel:hover .owl-nav .owl-next {
            right: 0;
        }

        .mega-menu.desktopTopFixed .menu-list-items {
            background: #323232;
            padding: 0px 30px 0px 30px;
        }

        .welcome-broke-grid .container {
            position: relative;
            z-index: 99;
        }

        .make-white {
            color: #fff;
        }

        .bg-img-1 {
            background-image: url(../images/bg_1.jpg);

        }

        .main-banner::after {

            background: #d9e7db url(../images/topography-background.png) repeat center center;

        }
    </style>




<!-- Banner Start -->
<section class="main-banner">
    <div class="container start">
        <div class="slides-wrap">
            <div class="owl-carousel owl-theme">
                <!--/owl-slide-->
                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(assets/images/slider/slider_home_first_1.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start no-gutters">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h3 class="owl-slide-animated owl-slide-title">Raising Hope</h3>
                                    <h1 class="owl-slide-animated owl-slide-subtitle">
                                        Every Female Dev Deserves a Working Laptop
                                    </h1>
                                    <div class="owl-slide-animated owl-slide-cta">
                                        <a class="btn btn-default mr-3" href="#" role="button">Read More</a>
                                        <a class="slider-link popup-video"
                                           href="http://player.vimeo.com/video">Watch the video <i
                                                class="charity-play_button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->


                <!--/owl-slide-->
                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(assets/images/slider/slider_home_first_2.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start no-gutters">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h3 class="owl-slide-animated owl-slide-title">Raising Hope</h3>
                                    <h1 class="owl-slide-animated owl-slide-subtitle">
                                        Supporting 20 Dev women With Working Laptops
                                    </h1>
                                    <div class="owl-slide-animated owl-slide-cta">
                                        <a class="btn btn-default mr-3" href="#" role="button">Read More</a>
                                        <a class="slider-link popup-video"
                                           href="http://player.vimeo.com/video">Watch the video <i
                                                class="charity-play_button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/owl-slide-->
                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(assets/images/slider/slider_home_first_3.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start no-gutters">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h3 class="owl-slide-animated owl-slide-title">Raising Hope</h3>
                                    <h1 class="owl-slide-animated owl-slide-subtitle">
                                        December For Women Who Code
                                    </h1>
                                    <div class="owl-slide-animated owl-slide-cta">
                                        <a class="btn btn-default mr-3" href="#" role="button">Read More</a>
                                        <a class="slider-link popup-video"
                                           href="http://player.vimeo.com/video">Watch the video <i
                                                class="charity-play_button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
            </div>

        </div>
        <div class="container pos-rel">
            <div class="funds-committed">
                <small>Total Funds Committed</small>
                <span class="counter">14,721</span>
            </div>
        </div>
    </div>
</section>
<!-- Banner Start -->



<!-- Main Body Content Start -->
<main id="body-content" class="body-non-overflow">




    <section class="wide-tb-100 bg-green pt-0 welcome-broke-grid">

        <div class="container">
            <div class="welcome-icon"><i class="charity-love_hearts"></i></div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Icon Boxes Image Style -->
                    <div class="icon-box-with-img">
                        <div class="img">
                            <a href="#"><img src="assets/images/causes/causes_img_1.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <h3>DECEMBER FOR WOMEN WHO CODE</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-right">
                                <a href="dfwwc_program" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Boxes Image Style -->
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Icon Boxes Image Style -->
                    <div class="icon-box-with-img">
                        <div class="img">
                            <a href="#"><img src="assets/images/causes/causes_img_4.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <h3>MENTORSHIP</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-right">
                                <a href="#" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Boxes Image Style -->
                </div>

                <!-- Spacer For Medium -->
                <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
                <!-- Spacer For Medium -->

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Icon Boxes Image Style -->
                    <div class="icon-box-with-img">
                        <div class="img">
                            <a href="#"><img src="assets/images/causes/causes_img_3.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <h3>BOOTCAMPS</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-right">
                                <a href="#" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Boxes Image Style -->
                </div>




            </div>

            <div class="row">
                <div class="col-lg-7 mx-auto welcome-home-first">
                    <div class="text-center mt-5">
                        Girls Who Code values diversity, equity and inclusion as essential to our mission. We focus
                        our work not only on gender diversity but also on young women who are historically
                        underrepresented in computer science fields.


                    </div>


                </div>
            </div>
        </div>
    </section>


    <!-- Event Style Start -->
    <section class="wide-tb-100">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-lg-6 col-md-8">
                    <h1 class="heading-main">
                        <small>We Just Love What We Do</small>
                        Some OF Our Most Recent Projects
                    </h1>
                </div>

            </div>

            <div class="owl-carousel owl-theme" id="home-second-causes">

                <!-- Events Alternate Wrap -->
                <div class="item">
                    <div class="event-wrap-alternate">
                        <!-- Event Wrap -->
                        <div class="img-wrap">
                            <div class="date-box">
                                05 <span>Aug</span>
                            </div>
                            <a href="events-single.html"><img src="assets/images/events/event_alternate_img_1.jpg"
                                                              alt=""></a>
                            <div class="content-wrap">
                                <h3><a href="events-single.html">Everyone Let’s Run For The Humanity This Time</a>
                                </h3>
                                <div class="event-details">
                                    <div><i data-feather="clock"></i> 09:00 Am</div>
                                    <div><i data-feather="map-pin"></i> Midpoint Center</div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Wrap -->
                    </div>
                </div>
                <!-- Events Alternate Wrap -->

                <!-- Events Alternate Wrap -->
                <div class="item">
                    <div class="event-wrap-alternate">
                        <!-- Event Wrap -->
                        <div class="img-wrap">
                            <div class="date-box">
                                05 <span>Aug</span>
                            </div>
                            <a href="events-single.html"><img src="assets/images/events/event_alternate_img_2.jpg"
                                                              alt=""></a>
                            <div class="content-wrap">
                                <h3><a href="events-single.html">Everyone Let’s Run For The Humanity This Time</a>
                                </h3>
                                <div class="event-details">
                                    <div><i data-feather="clock"></i> 09:00 Am</div>
                                    <div><i data-feather="map-pin"></i> Midpoint Center</div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Wrap -->
                    </div>
                </div>
                <!-- Events Alternate Wrap -->

                <!-- Events Alternate Wrap -->
                <div class="item">
                    <div class="event-wrap-alternate">
                        <!-- Event Wrap -->
                        <div class="img-wrap">
                            <div class="date-box">
                                05 <span>Aug</span>
                            </div>
                            <a href="events-single.html"><img src="assets/images/events/event_alternate_img_3.jpg"
                                                              alt=""></a>
                            <div class="content-wrap">
                                <h3><a href="events-single.html">Everyone Let’s Run For The Humanity This Time</a>
                                </h3>
                                <div class="event-details">
                                    <div><i data-feather="clock"></i> 09:00 Am</div>
                                    <div><i data-feather="map-pin"></i> Midpoint Center</div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Wrap -->
                    </div>
                </div>
                <!-- Events Alternate Wrap -->

                <!-- Events Alternate Wrap -->
                <div class="item">
                    <div class="event-wrap-alternate">
                        <!-- Event Wrap -->
                        <div class="img-wrap">
                            <div class="date-box">
                                05 <span>Aug</span>
                            </div>
                            <a href="events-single.html"><img src="assets/images/events/event_alternate_img_4.jpg"
                                                              alt=""></a>
                            <div class="content-wrap">
                                <h3><a href="events-single.html">Everyone Let’s Run For The Humanity This Time</a>
                                </h3>
                                <div class="event-details">
                                    <div><i data-feather="clock"></i> 09:00 Am</div>
                                    <div><i data-feather="map-pin"></i> Midpoint Center</div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Wrap -->
                    </div>
                </div>
                <!-- Events Alternate Wrap -->

                <!-- Events Alternate Wrap -->
                <div class="item">
                    <div class="event-wrap-alternate">
                        <!-- Event Wrap -->
                        <div class="img-wrap">
                            <div class="date-box">
                                05 <span>Aug</span>
                            </div>
                            <a href="events-single.html"><img src="assets/images/events/event_alternate_img_5.jpg"
                                                              alt=""></a>
                            <div class="content-wrap">
                                <h3><a href="events-single.html">Everyone Let’s Run For The Humanity This Time</a>
                                </h3>
                                <div class="event-details">
                                    <div><i data-feather="clock"></i> 09:00 Am</div>
                                    <div><i data-feather="map-pin"></i> Midpoint Center</div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Wrap -->
                    </div>
                </div>
                <!-- Events Alternate Wrap -->

                <!-- Events Alternate Wrap -->
                <div class="item">
                    <div class="event-wrap-alternate">
                        <!-- Event Wrap -->
                        <div class="img-wrap">
                            <div class="date-box">
                                05 <span>Aug</span>
                            </div>
                            <a href="events-single.html"><img src="assets/images/events/event_alternate_img_6.jpg"
                                                              alt=""></a>
                            <div class="content-wrap">
                                <h3><a href="events-single.html">Everyone Let’s Run For The Humanity This Time</a>
                                </h3>
                                <div class="event-details">
                                    <div><i data-feather="clock"></i> 09:00 Am</div>
                                    <div><i data-feather="map-pin"></i> Midpoint Center</div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Wrap -->
                    </div>
                </div>
                <!-- Events Alternate Wrap -->

            </div>

            <!-- <div class="text-center mt-5">
                <a href="events-alternate.html" class="btn btn-outline-dark">View All Events</a>
            </div> -->
        </div>
    </section>

    <!-- Event Style End -->

    <!-- Callout Style Start -->
    <section class="wide-tb-100 bg-scroll bg-img-1 pos-rel callout-style-1">
        <div class="bg-overlay black opacity-50"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="heading-main light-mode orange">
                        <small>Our Statistics</small>
                        We Provide Effortless Help To People
                    </h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s </p>

                    <div class="row mt-5">
                        <!-- Counter Col Start -->
                        <div class="col col-12 col-lg-6 col-sm-6 mb-sm-0">
                            <div class="counter-style-box bg-dark-shade bg-green">
                                <div class="counter-txt"><span class="counter">180</span>+</div>
                                <h4 class="make-white ">Fundraising & Donation Campaign </h4>
                            </div>
                        </div>
                        <!-- Counter Col End -->

                        <!-- Counter Col Start -->
                        <div class="col col-12 col-lg-6 col-sm-6">
                            <div class="counter-style-box bg-dark-shade bg-orange">
                                <div class="counter-txt"><span class="counter">7120</span>+</div>
                                <h4>Success Full Project Complate</h4>
                            </div>
                        </div>
                        <!-- Counter Col End -->
                    </div>

                    <div class="spacer-40"></div>

                    <div class="row">
                        <!-- Counter Col Start -->
                        <div class="col col-12 col-lg-6 col-sm-6 offset-lg-2  mb-sm-0">
                            <div class="counter-style-box">
                                <div class="counter-txt"><span class="counter">250</span>+</div>
                                <h4>Award Winning Campaign</h4>
                            </div>

                        </div>
                        <!-- Counter Col End -->

                        <div class="col-lg-4 col-sm-6">
                            <div class="become-volunteers-links">
                                <a class="" id="myBtn">
                                    <i class="icofont-plus"></i>
                                    <h3 class="make-white ">Become a Volunteer</h3>
                                </a>
                            </div>
                            <!-- volunteer Modal Form -->


                            <!-- Trigger/Open The Modal -->

                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <section class="bg-white" id="V-form">
                                        <div class="ruu container">
                                            <div class="row align-items-center">
                                                <div class="col-lg-5 col-md-12 order-lg-last order-md-last">
                                                    <div class="home-second-donation-form">
                                                        <div class="funds-committed">

                                                            <h3 class=" txt-white " style="align-items: center;">
                                                                Become A Volunteer</h3>
                                                        </div>

                                                        <form class="form-style">
                                                            <h3 class="h3-sm fw-7 txt-white mb-3">On A Mission To
                                                                Empower Women </h3>
                                                            <div class="form-group">
                                                                <label for="name"><strong>Full Name</strong></label>
                                                                <input type="text" class="form-control form-light"
                                                                       id="name" placeholder="e.g John Doe">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email"><strong>Email
                                                                        Address</strong></label>
                                                                <input type="email" class="form-control form-light"
                                                                       id="email"
                                                                       placeholder="e.g example@sitename.com">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone"><strong>Phone
                                                                        Number</strong></label>
                                                                <input type="tel" class="form-control form-light"
                                                                       id="phone" />
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="refrence"><strong>Refrence
                                                                        Contact</strong></label>
                                                                <input type="tel" class="form-control form-light"
                                                                       id="refrence" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="msg"><strong>Your
                                                                        Comments</strong></label>
                                                                <textarea class="form-control form-light" rows="5"
                                                                          id="msg"></textarea>
                                                            </div>
                                                            <button type="submit"
                                                                    class="btn btn-default mt-3 btn-block">Send
                                                                Request</button>
                                                        </form>

                                                    </div>
                                                </div>

                                                <!-- Spacer For Medium -->
                                                <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60">
                                                </div>
                                                <!-- Spacer For Medium -->

                                                <div class="col-lg-7 col-md-12" id="Vol-side-text">
                                                    <div>

                                                        <h5 class="heading-main">
                                                            <small>We Are Accepting Volunteer Application </small>
                                                            Join Us, We Are changing The World!!!
                                                        </h5>
                                                        <p>That’s 14% of the world’s population. Put another way,
                                                            that's 1 in 8 people alive today
                                                            living without hope amongst trash, sewage, drugs, and
                                                            abuse in unimaginable conditions. Life
                                                            without secure housing is a life without basic needs
                                                            being met.</p>
                                                        <p>
                                                            As a Volunteer, you’ll have access to in-person and
                                                            virtual
                                                            events and workshops designed to
                                                            help you grow professionally and personally. Plus, find
                                                            a mentor, build meaningful
                                                            relationships, and take advantage of our Jobs Board to
                                                            find a job that’s right for you. Best
                                                            part? Volunteership is free.

                                                        </p>
                                                        <div class="row my-5 home-second-welcome">
                                                            <!-- Map Icons Start -->
                                                            <div class="col-sm-6 mb-md-0">
                                                                <div class="icon-box-1">
                                                                    <i class="charity-volunteer_people"></i>
                                                                    <div class="text">
                                                                        <h3>3,750 <br> <span>Memebers</span></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Map Icons Start -->

                                                            <!-- Map Icons Start -->
                                                            <div class="col-sm-6">
                                                                <div class="icon-box-1">
                                                                    <i class="charity-donate_money"></i>
                                                                    <div class="text">
                                                                        <h3>14,800 <br> <span>Trusted
                                                                                    Volunteers</span></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Map Icons Start -->
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Spacer For Medium -->
                                                <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60">
                                                </div>
                                                <!-- Spacer For Medium -->


                                            </div>
                                        </div>
                                    </section>
                                </div>

                            </div>
                            <!-- End Volunteer Modal Form  -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout Style End -->


    <!-- Our Partners Start -->
    <section class="wide-tb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h1 class="heading-main">
                        <small>Global Providers</small>
                        Our World Wide Partner
                    </h1>
                </div>
                <div class="col-sm-12">
                    <div class="owl-carousel owl-theme" id="home-clients">

                        <!-- Client Logo -->
                        <div class="item">
                            <div class="clients-logo">
                                <img src="assets/images/clients/client1.png" alt="">
                            </div>
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item">
                            <div class="clients-logo">
                                <img src="assets/images/clients/client2.png" alt="">
                            </div>
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item">
                            <div class="clients-logo">
                                <img src="assets/images/clients/client3.png" alt="">
                            </div>
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item">
                            <div class="clients-logo">
                                <img src="assets/images/clients/client4.png" alt="">
                            </div>
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item">
                            <div class="clients-logo">
                                <img src="assets/images/clients/client5.png" alt="">
                            </div>
                        </div>
                        <!-- Client Logo -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partners End -->







</main>



@endsection