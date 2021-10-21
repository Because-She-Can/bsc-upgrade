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

    .select2-container {
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

    .main-banner {
        margin-top: 138px;
        position: relative;
        margin-bottom: 100px;

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
                                        <a class="slider-link popup-video" href="http://player.vimeo.com/video">Watch
                                            the video <i class="charity-play_button"></i></a>
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
                                        <a class="slider-link popup-video" href="http://player.vimeo.com/video">Watch
                                            the video <i class="charity-play_button"></i></a>
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
                                        <a class="slider-link popup-video" href="http://player.vimeo.com/video">Watch
                                            the video <i class="charity-play_button"></i></a>
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
                                    <!-- About Us Style Start -->
                                    <section style="margin-top:20px;position:relative;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">


                                                    <p>
                                                        We’re here for our girls, their families, and our communities
                                                        during this challenging time. Join us by making a gift today to
                                                        ensure that girls continue to have access to our educational
                                                        experiences, programming and our incredible sisterhood. Because
                                                        when you teach a girl to code, she’ll change the world.
                                                    </p>

                                                    <div class="donation-wrap">


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="name"
                                                                        placeholder="First Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                        id="last_name" placeholder="Last Name" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="email"
                                                                        placeholder="Your Email" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="tel" class="form-control"
                                                                        id="card_name"
                                                                        placeholder="Your Phone number" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <select
                                                                        class=" theme-combo donation-select js-example-basic-single form-control"
                                                                        name="state"
                                                                        style="height: 400px; width: 100% !important;;">
                                                                        <option>Select Country</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa
                                                                        </option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">
                                                                            Antigua & Barbuda
                                                                        </option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">
                                                                            Bosnia & Herzegovina
                                                                        </option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">
                                                                            British Indian Ocean Ter
                                                                        </option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands
                                                                        </option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands
                                                                        </option>
                                                                        <option value="Central African Republic">
                                                                            Central African Republic
                                                                        </option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands
                                                                        </option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">
                                                                            Christmas Island
                                                                        </option>
                                                                        <option value="Cocos Island">Cocos Island
                                                                        </option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands
                                                                        </option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">
                                                                            Dominican Republic
                                                                        </option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">
                                                                            Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">
                                                                            Falkland Islands
                                                                        </option>
                                                                        <option value="Faroe Islands">Faroe Islands
                                                                        </option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana
                                                                        </option>
                                                                        <option value="French Polynesia">
                                                                            French Polynesia
                                                                        </option>
                                                                        <option value="French Southern Ter">
                                                                            French Southern Ter
                                                                        </option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain
                                                                        </option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">
                                                                            Marshall Islands
                                                                        </option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands
                                                                        </option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">
                                                                            Netherland Antilles
                                                                        </option>
                                                                        <option value="Netherlands">
                                                                            Netherlands (Holland, Europe)
                                                                        </option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia
                                                                        </option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island
                                                                        </option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island
                                                                        </option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">
                                                                            Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island
                                                                        </option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">
                                                                            Republic of Montenegro
                                                                        </option>
                                                                        <option value="Republic of Serbia">
                                                                            Republic of Serbia
                                                                        </option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy
                                                                        </option>
                                                                        <option value="St Eustatius">St Eustatius
                                                                        </option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis
                                                                        </option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">
                                                                            St Pierre & Miquelon
                                                                        </option>
                                                                        <option value="St Vincent & Grenadines">
                                                                            St Vincent & Grenadines
                                                                        </option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American
                                                                        </option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">
                                                                            Sao Tome & Principe
                                                                        </option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">
                                                                            Trinidad & Tobago
                                                                        </option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Turks & Caicos Is">
                                                                            Turks & Caicos Is
                                                                        </option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom
                                                                        </option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">
                                                                            United Arab Emirates
                                                                        </option>
                                                                        <option value="United States of America">
                                                                            United States of America
                                                                        </option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">
                                                                            Vatican City State
                                                                        </option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">
                                                                            Virgin Islands (Brit)
                                                                        </option>
                                                                        <option value="Virgin Islands (USA)">
                                                                            Virgin Islands (USA)
                                                                        </option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">
                                                                            Wallis & Futana Is
                                                                        </option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="zip"
                                                                        placeholder="Zip Code" />
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <h3 class="h3-sm fw-5 txt-blue mb-3 mt-3">Talk To Us</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="how-you-know-us"><strong>How did you
                                                                            hear about us</strong></label>

                                                                    <select class="pos-rel" id="how-you-know-us"
                                                                        name="Causes" style=" width: 100% !important;;">
                                                                        <option>Please Select</option>
                                                                        <option value="DECEMBER FOR WOMEN WHO CODE">
                                                                            Twitter</option>
                                                                        <option value="MIDYEAR BOOTCAMP">Facebook
                                                                        </option>
                                                                        <option value="WEBINARS AND DISCUSSIONS">
                                                                            Instagram</option>
                                                                        <option value="MENTORSHIP">linkedin</option>
                                                                        <option value="MENTORSHIP">Google Searh /
                                                                            Website</option>
                                                                        <option value="MENTORSHIP">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="specify-other"
                                                                        style="visibility: hidden;"><strong>How did you
                                                                            hear about us</strong></label>

                                                                    <div class="pos-rel">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="If Other please specify" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="tech-Experience "><strong>What Stage
                                                                            Would You Put Yourself In</strong></label>

                                                                    <select class="theme-combo donation-select"
                                                                        id="tech-Experience " name="tech-Experience "
                                                                        style="height: 400px; width: 100% !important;;">
                                                                        <option>Please Select</option>
                                                                        <option value="DECEMBER FOR WOMEN WHO CODE">
                                                                            I have established myself in a Tech field
                                                                            (3+ years or expereinece)</option>
                                                                        <option value="MIDYEAR BOOTCAMP">I literally
                                                                            just started my carrer in Tech (0-1year
                                                                            expereince)</option>
                                                                        <option value="WEBINARS AND DISCUSSIONS">
                                                                            I have a growing interest in Tech</option>
                                                                        <option value="MENTORSHIP">I have no clue what i
                                                                            am doing in life</option>
                                                                        <option value="MENTORSHIP">Tech seems cool. I am
                                                                            curious about what i can learn at BSC
                                                                        </option>
                                                                        <option value="MENTORSHIP">I just want to join
                                                                            this awesomem family and spread the word
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>





                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="msg"><strong>Your
                                                                            Comments</strong></label>

                                                                    <textarea class="form-control form-light" rows="5"
                                                                        name="msg"></textarea>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <button class="btn btn-default">
                                                                    <i data-feather="heart"></i> Send Request
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </section>
                                    <!-- About Us Style Start -->
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