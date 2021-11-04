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





    @media (max-width: 990px) {

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
                                        <a class="slider-link popup-video"
                                            href="https://www.youtube.com/watch?v=tQ0Ff7zv_JQ">Watch
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
                Because She Can is on a mission to encourage and empower women and girls to excel in technology
                disciplines and roles.

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
            <div class="col-sm-6 col-md-6 col-lg-4">

                <div class="team-section-wrap mb-0">
                    <div class="img green">

                        <img src="images/body-images/home/sisterhood.jpeg" alt="" class="rounded-circle">
                    </div>
                    <h4>Community</h4>
                    <h5>We are introducing you to a family of women who are concerned about your holistic development
                        from career to professional growth. We have your best interests at heart.</h5>

                </div>
                <!-- Icon Boxes Image Style -->
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <!-- Icon Boxes Image Style -->
                <div class="team-section-wrap mb-0">
                    <div class="img green">

                        <img src="images/body-images/home/collaborate.jpeg" alt="" class="rounded-circle">
                    </div>
                    <h4>Mentorship</h4>
                    <h5>We present to you all-year round mentorship where you get to interact with women in the
                        Technology field. Regardless at whatever stage you find yourself, you have access to all levels
                        of mentorships, whether one-on-one, peer etc.</h5>

                </div>
                <!-- Icon Boxes Image Style -->
            </div>

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <div class="col-sm-6 col-md-6 col-lg-4">
                <!-- Icon Boxes Image Style -->
                <div class="team-section-wrap mb-0">
                    <div class="img green">

                        <img src="images/body-images/home/Community.jpeg" alt="" class="rounded-circle">
                    </div>
                    <h4>Training Opportunities</h4>
                    <h5>You are exposed to training opportunities available to you in the industry of Technology. We
                        help you identify your right fit in the world of Tech and give you the platform to learn as much
                        as you can.</h5>

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




<!-- Main Body Content Start -->
<main id="body-content" class="body-non-overflow">


    <!--=================================
 Member benefits -->

    <section class="wide-tb-100 our-service bg-white topPad " style=" padding-bottom: 50px ;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>A membership that takes you from one phase of <br> your career in Tech to a better one</h2>
                    <p>There is a place for everyone in this community. We appreciate diversity and <br> inclusion and
                        whether you are starting your career in tech, transitioning <br> or an established woman, we
                        have
                        benefits curated just for you.</p>
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
                        <h4>Development focused</h4>
                        <p>We ensure that your tech career and personal development is moving from one phase to a better
                            one.</p>
                    </div>
                </div>
                <!-- imgae 2 -->
                <div class="col-12 col-md-4 text-center">
                    <figure>
                        <img width="260" height="260" src="images/body-images/home/Change.jpeg" class="" alt="">
                    </figure>
                    <div class="text">
                        <h4>Accessible</h4>
                        <p>We are a community of women, you can easily reach out to with no protocols involved.</p>
                    </div>
                </div>
                <!-- image 3 -->
                <div class="col-12 col-md-4 text-center">
                    <figure>
                        <img width="260" height="260" src="images/body-images/home/Change.jpeg" class="" alt="">
                    </figure>
                    <div class="text">
                        <h4>Openness</h4>
                        <p>We are a community that is willing to expose the struggles women face in the tech industry
                            and guide them to tackle one problem at a time.
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
                    <p>You are welcome. Membership is free.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
Member Benefits-->



</main>



@endsection