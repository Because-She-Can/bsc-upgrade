@extends('layouts.master')

@section('title', 'Home')

@section('content')

<style>
    html {
        scroll-behavior: smooth;
    }


    /* 
    .bg-img-1 {
        background-image: url(../images/bg_1.jpg);

    } */

    /* #show-on-mobile {
            display: block !important;
        } */
    owl-carousel .owl-dots {
        text-align: center;
        margin-top: 10px;
    }

    @media (min-width: 1020px) {
        #show-on-mobile {
            display: none !important;
        }
    }

    @media (max-width: 600px) {

        #wipe-on-mobile {
            display: none !important;
        }

        #show-on-mobile {
            display: block !important;
        }

    }

    @media screen (min-width:768) {
        #show-on-mobile {
            display: none !important;
        }
        
    }

    @media (max-width: 990px) {

        #show-on-mobile {
            display: none !important;
        }

        .spacer-60 {
            min-height: 10px;
        }

    }

    .mx-auto2 {
        margin-right: 0 !important;
        margin-left: auto !important;

    }

    .mt-2x {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }
</style>


<!-- Banner Start -->
<section class="main-banner banner-top">
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
                                    <h3 class="owl-slide-animated owl-slide-title">December For Women Who Code</h3>
                                    <h1 class="owl-slide-animated owl-slide-subtitle">
                                        Every Female Dev Deserves a Working Laptop
                                    </h1>
                                    <div class="owl-slide-animated owl-slide-cta">
                                        <a class="btn btn-default mr-3" href="dfwwc_program" role="button">Join Us</a>
                                        <a class="slider-link popup-video" href="https://www.youtube.com/watch?v=tQ0Ff7zv_JQ">Watch
                                            the video <i class="icofont-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->


                <!--/owl-slide-->
                <!-- <div class="owl-slide d-flex align-items-center cover"
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
                                        <a class="slider-link popup-video" href="http://player.vimeo.com/video">Watch
                                            the video <i class="charity-play_button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!--/owl-slide-->
                <!-- <div class="owl-slide d-flex align-items-center cover"
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
                                        <a class="slider-link popup-video" href="http://player.vimeo.com/video">Watch
                                            the video <i class="charity-play_button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--/owl-slide-->
            </div>

        </div>
        <!-- <div class="container pos-rel">
            <div class="funds-committed">
                <small>Total Funds Committed</small>
                <span class="counter">14,721</span>
            </div>
        </div> -->
    </div>
</section>
<!-- Banner Start -->

<!-- Welcome Home Style Start -->
<section class="pt-0 pb-0 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <h1 class="heading-main">
                    <small>WELCOME TO BECAUSE SHE CAN</small>
                    <!-- What We Do -->
                </h1>

                <p>
                    We are a beautiful community of women who are passionate about creating an enabling and encouraging
                    environment for all women to thrive in the Technology space.

                    <!-- Spacer For Medium -->
                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                <!-- Spacer For Medium -->
                We're reaching girls around the world and are on track to close the gender gap in new entry-level
                tech jobs by 2030.

                </p>
            </div>
        </div>
    </div>
</section>
<div class="ww-100 d-none d-sm-block d-lg-none spacer-60"></div>


<section class=" pb-0 bg-green pt-0 welcome-broke-grid">

    <div class="container" id="wipe-on-mobile">
        <!-- <div class="welcome-icon"><i class="charity-love_hearts"></i></div> -->
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">

                <div class="team-section-wrap mb-0">
                    <div class="img green">

                        <img src="images/body-images/home/sisterhood.jpeg" alt="" class="rounded-circle">
                    </div>
                    <h4>SisterHood</h4>
                    <h5>A wonderful serenity has taken possession of my entire soul A wonderful serenity has
                        taken possession of my entire soul</h5>

                </div>
                <!-- Icon Boxes Image Style -->
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <!-- Icon Boxes Image Style -->
                <div class="team-section-wrap mb-0">
                    <div class="img green">

                        <img src="images/body-images/home/collaborate.jpeg" alt="" class="rounded-circle">
                    </div>
                    <h4>Collaborate</h4>
                    <h5> A wonderful serenity has taken possession of my entire soul A wonderful serenity
                        has taken possession of my entire soul </h5>

                </div>
                <!-- Icon Boxes Image Style -->
            </div>

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <div class="col-sm-6 col-md-6 col-lg-3">
                <!-- Icon Boxes Image Style -->
                <div class="team-section-wrap mb-0">
                    <div class="img green">

                        <img src="images/body-images/home/Community.jpeg" alt="" class="rounded-circle">
                    </div>
                    <h4>Get Involved</h4>
                    <h5>A wonderful serenity has taken possession of my entire soul A wonderful serenity has
                        taken possession of my entire soul</h5>

                </div>
                <!-- Icon Boxes Image Style -->
            </div>


            <div class="col-sm-6 col-md-6 col-lg-3">
                <!-- Icon Boxes Image Style -->
                <div class="team-section-wrap mb-0">
                    <div class="img green">

                        <img src="images/body-images/home/Change.jpeg" alt="" class="rounded-circle">
                    </div>
                    <h4> Change</h4>
                    <h5>A wonderful serenity has taken possession of my entire soul A wonderful serenity has
                        taken possession of my </h5>

                </div>
                <!-- Icon Boxes Image Style -->
            </div>

        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto2 welcome-home-first">

                <div class="text-center mt-2x text-md-right">
                    <a href="about_us" class="btn btn-default">Read About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vissible only on mobile -->
<section id="show-on-mobile" class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="home-client-testimonials">

                    <!-- Client Testimonials Slider Item -->
                    <div class="item">
                        <div class="client-testimonial dark">
                            <!-- Team Column One -->
                            <div class="team-section-wrap mb-0">
                                <div class="img green">

                                    <img src="images/body-images/home/sisterhood.jpeg" alt="" class="rounded-circle">
                                </div>
                                <h4>SisterHood</h4>
                                <h5>A wonderful serenity has taken possession of my entire soul A wonderful serenity has
                                    taken possession of my entire soul</h5>

                            </div>

                        </div>
                    </div>
                    <!-- Client Testimonials Slider Item -->

                    <!-- Client Testimonials Slider Item -->
                    <div class="item">
                        <div class="client-testimonial dark">
                            <!-- Team Column One -->
                            <div class="team-section-wrap mb-0">
                                <div class="img green">

                                    <img src="images/body-images/home/collaborate.jpeg" alt="" class="rounded-circle">
                                </div>
                                <h4>Collaborate</h4>
                                <h5> A wonderful serenity has taken possession of my entire soul A wonderful serenity
                                    has taken possession of my entire soul </h5>

                            </div>
                        </div>
                    </div>
                    <!-- Client Testimonials Slider Item -->

                    <!-- Client Testimonials Slider Item -->
                    <div class="item">
                        <div class="client-testimonial dark">
                            <!-- Team Column One -->
                            <div class="team-section-wrap mb-0">
                                <div class="img green">

                                    <img src="images/body-images/home/Community.jpeg" alt="" class="rounded-circle">
                                </div>
                                <h4>Get Involved</h4>
                                <h5>A wonderful serenity has taken possession of my entire soul A wonderful serenity has
                                    taken possession of my entire soul</h5>

                            </div>
                        </div>
                    </div>
                    <!-- Client Testimonials Slider Item -->

                    <!-- Client Testimonials Slider Item -->
                    <div class="item">
                        <div class="client-testimonial dark">
                            <!-- Team Column One -->
                            <div class="team-section-wrap mb-0">
                                <div class="img green">

                                    <img src="images/body-images/home/Change.jpeg" alt="" class="rounded-circle">
                                </div>
                                <h4> Change</h4>
                                <h5>A wonderful serenity has taken possession of my entire soul A wonderful serenity has
                                    taken possession of my entire soul Change possession f my entire soul Change
                                    possession </h5>

                            </div>
                        </div>
                    </div>
                    <!-- Client Testimonials Slider Item -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Visible only on mobile  -->



<!-- Main Body Content Start -->
<main id="body-content" class="body-non-overflow">


    <!--=================================
 Member benefits -->

    <section class="wide-tb-100 our-service bg-white topPad " style=" padding-bottom: 50px ;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>A membership that gives <br> you what you need</h2>
                    <p>You’re going places. And whether you’re just starting your career or
                        you’re contemplating a <br> career change, Girls in Tech is here to
                        help lift you up. </p>
                </div>
            </div>
        </div>
        <div class="container three-columns columns-wrap">
            <div class="row" style="text-align: center;">
                <!-- image 1 -->

                <div class="col-12 col-md-4 text-center">
                    <figure>
                        <img width="260" height="260" src="images/body-images/home/Change.jpeg" alt="">
                    </figure>
                    <div class="text">
                        <h4>Career Development</h4>
                        <p>Add a new skill to your resume, or change career tracks. </p>
                    </div>
                </div>
                <!-- imgae 2 -->
                <div class="col-12 col-md-4 text-center">
                    <figure>
                        <img width="260" height="260" src="images/body-images/home/Change.jpeg" class="" alt="">
                    </figure>
                    <div class="text">
                        <h4>Connections & Guidance</h4>
                        <p>Learn from a mentor, and connect with other professionals.</p>
                    </div>
                </div>
                <!-- image 3 -->
                <div class="col-12 col-md-4 text-center">
                    <figure>
                        <img width="260" height="260" src="images/body-images/home/Change.jpeg" class="" alt="">
                    </figure>
                    <div class="text">
                        <h4>The Right Job</h4>
                        <p>Make your next move. Our Jobs Board has new listings every week.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a class="nav-link btn btn-default ml-3 donate-btn" href="get_involved">Join
                        For Free Today</a>
                    <p>Be a part of something great. Membership is free.</p>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
Member Benefits-->

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
                                <h4 style="color:#fff !important;">Success Full Project Complate</h4>
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
                            @include('website.volunteer_form')
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