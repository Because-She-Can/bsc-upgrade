@extends('layouts.master')

@section('title', 'Home')

@section('content')

<style>
    ul.tabs {
        text-align: center;
    }

    @media only screen and (max-width: 412px) {
        ul.tabs {
            text-align: left;
        }
    }

    @media only screen and (max-width: 412px) {
        #btp {
            display: none;
        }
    }

    .mega-menu .drop-down a,
    .mega-menu .drop-down-tab-bar a {
        padding: 0 0;
    }

    .welcome-broke-grid .container {
        position: relative;
        z-index: 99;
    }

    .social-space {
        margin-right: 15px;
        cursor: pointer;
    }

    .vl {
        border-left: 1px solid grey;
        height: 100%;
    }

    .causes-wrap .img-wrap img {
        border-radius: 10px 10px 0 0;
        width: 100%;
        height: 350px;
    }

    .fluid-space {
        max-width: 1346px;
        margin-top: 50px;

    }

    .no-padding {
        padding: 0px;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        color: #fff;
        text-transform: capitalize;
        padding: 0.5rem 0.9rem;
        font-weight: 700;
        font-size: 1rem;
    }

    .centered {
        color: white;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
    }

    /*.textnow {
        vertical-align: middle;
    }*/

    .wrapper {
        height: 100vh;
        /*This part is important for centering*/
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .typing-demo {
        width: 27ch;
        animation: typing 2s steps(22), blink .5s step-end infinite alternate;
        white-space: nowrap;
        overflow: hidden;
        border-right: 3px solid;
        font-family: Recoleta-Bold;
        font-size: 2em;
    }

    @keyframes typing {
        from {
            width: 0
        }
    }

    @keyframes blink {
        50% {
            border-color: transparent
        }
    }
</style>

<body>
    <!-- Banner Start -->
    <section class="gee" style="margin-top:125px;position:relative;">
        <div class="container-fluid wrapper " style="min-height: 650px; padding:60px 0px;">
            <h1 class="centered typing-demo"
                style="text-align: center;font-size:50px;background: rgba(20, 16, 16, 0.308);">WE'RE
                BUILDING THE
                WORLD'S
                LARGEST PIPELINE
                OF
                FUTURE FEMALE ENGINEERS.
            </h1>


            <!-- 
            <div class="row">

                <div style="text-align: left; max-width:40%">
                    <img src="/assets/images/h3.jpg" alt="">

                </div>

                <div style="text-align:center; max-width:32%; padding-top:15%;">
                    <img src="/assets/images/h1.jpg" alt="">

                </div>
                <div style="text-align: right; max-width:28%">
                    <img src="/assets/images/h2.jpg" alt="">

                </div>

            </div> -->

            <!-- 
            <div class="row">


                <div class="col-5 no-padding" style="border: dotted;">

                </div>

                <div class="col-4 no-padding" style="border: dotted red; margin-top:100px">
                    <img src="/assets/images/video_img.png" alt="">
                </div>
                <div class="col-3 no-padding" style="border: dotted red;">
                    <img src="/assets/images/video_img.png" alt="">

                </div>
            </div> -->
        </div>

    </section>






    <!-- Welcome Home Style Start -->
    <section class="wide-tb-100 pb-0 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <h1 class="heading-main">
                        <small>Showing Her That She Can</small>
                        <!-- What We Do -->
                    </h1>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s

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
    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>

    <section class="wide-tb-100 bg-green pt-0 welcome-broke-grid">

        <div class="container">
            <div class="welcome-icon"><i class="charity-love_hearts"></i></div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Icon Boxes Image Style -->
                    <div class="icon-box-with-img">
                        <div class="img">
                            <img src="images/body-images/home/sisterhood.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h3>SisterHood</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-right">
                                <a href="#" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Boxes Image Style -->
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Icon Boxes Image Style -->
                    <div class="icon-box-with-img">
                        <div class="img">
                            <img src="images/body-images/home/collaborate.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h3>Collaborate</h3>
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

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Icon Boxes Image Style -->
                    <div class="icon-box-with-img">
                        <div class="img">
                            <img src="images/body-images/home/Community.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h3>Get Involved</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-right">
                                <a href="#" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Boxes Image Style -->
                </div>


                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Icon Boxes Image Style -->
                    <div class="icon-box-with-img">
                        <div class="img">
                            <img src="images/body-images/home/Change.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h3>Change</h3>
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
                <div class="col-lg-10 mx-auto welcome-home-first">

                    <div class="text-center mt-2 text-md-right">
                        <a href="about_us" class="btn btn-default">Read About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

        jQuery(document).ready(function ($) {
            $('#gee').addClass("gee");
        });


    </script>
    @endsection