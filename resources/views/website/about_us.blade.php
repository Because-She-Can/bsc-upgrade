@extends('layouts.master')

@section('title', 'About Us')

@section('content')

<style>
    q {
            color: aliceblue; 
            font-size:20px;
        }
        h2.h2x{
            color: aliceblue;
            font-size:20px;
        }
    #tabs {
        margin: 0;
        padding: 0;
    }

    .section-title {
        margin-bottom: 60px;
        text-align: center;
    }

    #tabs .tabs {
        position: relative;
        margin: 0;
    }

    #tabs ul.tabs li.active,
    #tabs ul.tabs li.active:focus,
    #tabs ul.tabs li:hover {
        border-bottom: 3px solid #db2d2e;
    }

    #tabs .tabs li {
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
        border-bottom: 3px solid transparent;
        line-height: 25px;
        padding: 10px 10px;
        color: #363636;
        overflow: hidden;
        background: transparent;
        margin-bottom: 0px;
        display: inline-block;
        margin: 0;
        cursor: pointer;
        position: relative;
        transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
    }

    #tabs .tabcontent {
        overflow: hidden;
    }

    .tabcontent {
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .bg-overlay:before {
        background: rgba(0, 0, 0, 0.8);
        opacity: 0.6;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 0;
    }


    @media (max-width: 767px) {
        .section-title {
            margin-bottom: 40px;
        }


    }

    .centered {
        left: 50%;
        position: absolute;
        text-align: center;
        top: 40%;
        width: auto;
        transform: translate(-50%, -50%);
    }
</style>
<!-- style for tabs end -->
<style>
    .inner-intro {
        height: 660px;
        display: block;
    }

    .bg-1 {
        background: url(images/bg/aboutHeader2.jpg);
        background-clip: initial;
        background-color: rgba(0, 0, 0, 0.144);
        background-origin: initial;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover !important;
        position: relative;
        z-index: 0;
        /*background-attachment: fixed;*/
    }

    .faqs-wrap {
        background: url(../images/man_with_hand.jpg) no-repeat center center;

    }

    .pattern-orange {
        background-image: url(../images/topography-background.png);

    }

    .team-bg {
        background-image: url(../images/hands_bg.png);

    }

    .bg-overlay-black-70:before {
        background: rgba(0, 0, 0, 0.411);
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: -1;
    }

    @media only screen and (max-width: 600px) {
        .inner-intro {
            height: 410px;
            display: block;
        }

        .mobile-centered {
            padding-top: 20px !important;

        }

    }

    .mobile-centered {

        padding-top: 100px;

    }

    .bg-img-6 {
        background-image: url(images/body-images/inclusion-policy.jpg);
        background-repeat: no-repeat;
        background-position: center center;
    }

    @media (max-width: 699px) {
        .faqs-wrap {
            padding: 1rem;
        }

        ul.tabs {
            padding: 0px 0px 0px 0px;
            font-size: 16px;

        }

        #tabs .tabs li {
            padding: 5px !important;
        }

        q {
            color: aliceblue; 
            font-size:14px;
        }
        h2.h2x{
            color: aliceblue;
            font-size:20px;
        }
    }


</style>


<body>


    <!--=================================
inner-intro -->

    <section class="inner-intro  bg-1 bg-overlay-black-70 banner-top">
        <div class="container">
            <div class="row text-center mobile-centered ">
                <div class="col-12 d-inline-block">
                    <h2 class="h2x" style="">WE ARE ON A MISSION TO BRIDGE THE GENDER
                        DIGITAL DIVIDE</h2>
                    <br>
                    <q style="">The gender digital divide in connectivity, devices and use, skills and
                        jobs is real. It is an inequity and an exclusion gap across geographies and generations
                        that is
                        our challenge to address if the digital revolution is to be for all,<br> with all and by all. -UN 



                    </q>

                </div>

            </div>
        </div>
    </section>

    <!--=================================
inner-intro -->


    <!-- About Us Style Start -->
    <section class=" bg-white mb-spacer-md" style="padding:10vh 0px 30px 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1 class="heading-main">
                        <small>About Us</small>
                        Showing Her That She Can
                    </h1>

                    <p>
                        Because She Can LBG is a non-profit that is actively interested and involved in assisting women
                        looking to pursue careers in Technology mainly through mentorship and training opportunities


                        <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->
                    We are building Africa's biggest pipeline of women in technology at all levels.
                    We are open to collaborate with like minded organisations, interested individuals and industry women
                    and men in bridging the gender digital divide.

                    </p>


                </div>

                <!-- Spacer For Medium -->
                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div> 
                <!-- Spacer For Medium -->

                <div class="col-lg-6 col-md-12">
                    <img class="img-fluid" src="images/team/aboutside.png"  alt="about-content-image"
                        style="border-radius:7px">


                </div>
            </div>
        </div>
    </section>
    <!-- About Us Style End -->

    <!--=================================
our-service -->

    <section class="our-service bg-white topPad " style="padding-bottom: 60px ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img class="img-fluid" src="images/body-images/animation.png" alt="about-content-image"
                        style="border-radius:7px">
                </div>
                <div class="col-lg-offset-6 col-lg-6  bg-overlay-black-90">

                    <div class="row">
                        <div class="section-title text-left " style="padding-top: 0px !important;">
                            <div class="col-md-12">
                                <div id="tabs" class="">
                                    <ul class="tabs">
                                        <li data-tabs="tab1" class="active"><span aria-hidden="true"
                                                class="icon-list "></span>Our History
                                        </li>
                                        <li data-tabs="tab2" class=""> <span aria-hidden="true"
                                                class="icon-equalizer"></span> Our Vision
                                        </li>
                                        <li data-tabs="tab3" class=""> <span aria-hidden="true"
                                                class="icon-diamond"></span> Our Mission
                                        </li>

                                    </ul>
                                    <div id="tab1" class="tabcontent ">
                                        <div class="row" style="margin-left: 0px;">

                                            <p>

                                                Our organization was birthed from shared interest. From studying tech
                                                subjects in school, our co-founders gained first-hand experience on what
                                                it feels like to affirm their position in the male-dominated space. We
                                                realized that there is a very small representation of people who looked
                                                like us. We decided to be a force to change that and encourage more
                                                girls into the field. It’s for this reason we exist. We exist to guide
                                                people who have no idea on what career to venture into – we help them
                                                figure out if Tech will be a right fit or not.


                                            </p>
                                        </div>

                                    </div>
                                    <div id="tab2" class="tabcontent ">
                                        <div class="row " style="margin-left: 0px;">
                                            <p>
                                                Our Vision is to bridge the gap between women in Technology on the job
                                                and aspiring girls. We aim to grow a community of successful African
                                                girls in the field of technology who will in turn provide solutions to
                                                challenges around them and encourage others into the field of tech.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tabcontent ">
                                        <div class="row" style="margin-left: 0px;">
                                            <p>

                                                Because She Can is on a mission to encourage and empower women and girls
                                                to excel in technology disciplines and roles.

                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!--=================================
 our-service -->



    <!-- Faq's Style Start -->
    <section class="wide-tb-100 pattern-orange pt-0 mb-spacer-md" style="margin-top: 60px ;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="faqs-wrap pos-rel">
                        <div class="bg-overlay blue opacity-80"></div>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-12">
                                <h1 class="heading-main light-mode">
                                    Our Inclusion Policy
                                </h1>
                                <p>At Because She Can, we appreciate diversity — we celebrate it, we support it, and we
                                    thrive on it for the benefit of our employees and our community. We are an equal
                                    opportunity organisations and do not condone harassment or discrimination of any
                                    kind.
                                    You are welcome to join us as a member, to volunteer with us, and to mentor our
                                    girls irrespective of your race, ethnicity, gender, social status, religion,
                                    disability and age.
                                </p>
                                <a class="btn btn-default" href="get_involved">Join Us Now</a>
                            </div>

                            <!-- Spacer For Medium -->
                            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                            <!-- Spacer For Medium -->

                            <div class="col-12 col-lg-6 col-md-12">
                                <h1 class="heading-main light-mode">
                                    <small>Our Core Values and Commitments</small>
                                </h1>
                                <div class="theme-collapse light">
                                    <!-- Toggle Links 1 -->
                                    <div class="toggle arrow-down">
                                        <span class="icon">
                                            <i class="icofont-plus"></i>
                                        </span> Development focused
                                    </div>
                                    <!-- Toggle Links 1 -->

                                    <!-- Toggle Content 1 -->
                                    <div class="collapse show">
                                        <div class="content">
                                            We ensure that your tech career and personal development is moving from one
                                            phase to a better one.

                                        </div>
                                    </div>
                                    <!-- Toggle Content 1 -->

                                    <!-- Toggle Links 2 -->
                                    <div class="toggle">
                                        <span class="icon">
                                            <i class="icofont-plus"></i>
                                        </span>Accessible
                                    </div>
                                    <!-- Toggle Links 2 -->

                                    <!-- Toggle Content 2 -->
                                    <div class="collapse">
                                        <div class="content">
                                            We are a community of women, you can easily reach out to with no protocols
                                            involved.

                                        </div>
                                    </div>
                                    <!-- Toggle Content 2 -->

                                    <!-- Toggle Links 3 -->
                                    <div class="toggle">
                                        <span class="icon">
                                            <i class="icofont-plus"></i>
                                        </span> Openness
                                    </div>
                                    <!-- Toggle Links 3 -->

                                    <!-- Toggle Content 3 -->
                                    <div class="collapse">
                                        <div class="content">
                                            We are a community that is willing to expose the struggles women face in the
                                            tech industry and guide them to tackle one problem at a time.

                                        </div>
                                    </div>
                                    <!-- Toggle Content 3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq's Style End -->

    <!-- Our Proframs start -->
<!-- 
    <section class="wide-tb-100 bg-green  welcome-broke-grid">
        <div class="container"> -->
            <!-- <div class="welcome-icon"><i class="charity-love_hearts"></i></div> -->
            <!-- <div class="row">
                <div class="col-lg-5 col-md-12">
                    <h1 class="heading-main">
                        <small>Tech Needs You Just Are You Are</small>
                        Our Programs
                    </h1>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4"> -->
                    <!-- Icon Boxes Image Style -->
                    <!-- <div class="icon-box-with-img">
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
                    </div> -->
                    <!-- Icon Boxes Image Style -->
                <!-- </div>

                <div class="col-sm-6 col-md-6 col-lg-4"> -->
                    <!-- Icon Boxes Image Style -->
                    <!-- <div class="icon-box-with-img">
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
                    </div> -->
                    <!-- Icon Boxes Image Style -->
                </div>

                <!-- Spacer For Medium -->
                <!-- <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div> -->
                <!-- Spacer For Medium -->

                <!-- <div class="col-sm-6 col-md-6 col-lg-4"> -->
                    <!-- Icon Boxes Image Style -->
                    <!-- <div class="icon-box-with-img">
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
                    </div> -->
                    <!-- Icon Boxes Image Style -->
                <!-- </div>




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
    </section> -->


    <!-- Our Programs End -->

    <!-- Inclusion Policy Style Start -->
    <!-- <section class="wide-tb-150 bg-scroll bg-img-6 pos-rel callout-style-1">
  <div class="bg-overlay blue opacity-80"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <h4 class="heading-main light-mode" style="font-size: 20px;">
          <small>Our Inclusion Policy</small>
          A club set up to help only Females needs an inclusion policy ?
          It doesn’t include Men and that cancels all Inclusion talk.



        </h4>
        <p><small>ND: This is dummy Text, do not take it serious i beg</small></p>
      </div>
      <div class="col-sm-12 text-md-right">
        <a href="donate-page.html" class="btn btn-default">Join US</a>
      </div>
    </div>
  </div>
</section> -->
    <!-- Inclusion Policy  Style End -->

    <!-- New Our Team Works  -->
    <section class="wide-tb-100 team-bg mb-spacer-md">
        <div class="container">
            <div class="row justify-content-between align-items-end form-group">
                <div class="col-lg-4 col-md-6 ">
                    <h1 class="heading-main" style="text-transform: none; font-size: 40px;">
                        <small style="font-size:26px">Our Team</small>
                        <!-- Our Expert Team -->
                    </h1>
                </div>

            </div>

            <div class="row">
                <!-- Team Column One -->
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="team-section-wrap mb-0">
                        <div class="img green">
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/kweyakieblebo/" target="_blank"><i
                                        class="icofont-linkedin"></i></a>
                                <a href="https://twitter.com/_Afidede" target="_blank"><i
                                        class="icofont-twitter"></i></a>
                                <!-- <a href="#"><i class="icofont-instagram"></i></a> -->
                            </div>
                            <img src="images/team/Afi.jpeg" alt="Afi image" class="rounded-circle">
                        </div>
                        <h4>Kweyakie Afi Blebo</h4>
                        <h5>co-Founder || Programs Manager</h5>
                        <!-- <div class="text-md-right">
                            <a href="#" class="read-more-line"><span>Read More</span></a>
                        </div> -->
                    </div>
                </div>
                <!-- Team Column One -->

                <!-- Team Column One -->
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="team-section-wrap mb-0">
                        <div class="img navy-blue">
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/otemayirenkyi" target="_blank"><i
                                        class="icofont-linkedin"></i></a>
                                <!-- <a href="#"><i class="icofont-twitter"></i></a>
                            <a href="#"><i class="icofont-instagram"></i></a> -->
                            </div>
                            <img src="images/team/otema.png" alt="otema image" class="rounded-circle">
                        </div>
                        <h4>Otema Yirenkyi</h4>
                        <h5>co-Founder || Operations Manager</h5>
                        <!-- <div class="text-md-right">
                            <a href="#" class="read-more-line"><span>Read More</span></a>
                        </div> -->
                    </div>
                </div>
                <!-- Team Column One -->

                <!-- Spacer For Medium -->
                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                <!-- Spacer For Medium -->

                <!-- Team Column One -->
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="team-section-wrap mb-0">
                        <div class="img orange">
                            <div class="social-icons">
                                <a href="#"><i class="icofont-linkedin"></i></a>
                                <!-- <a href="#"><i class="icofont-twitter"></i></a>
                            <a href="#"><i class="icofont-instagram"></i></a> -->
                            </div>
                            <img src="images/team/tem4.jpeg" alt="Tema Member" class="rounded-circle">
                        </div>
                        <h4>Hillary Owusu</h4>
                        <h5>Brand and Content Strategist</h5>
                        <!-- <div class="text-md-right">
                            <a href="#" class="read-more-line"><span>Read More</span></a>
                        </div> -->
                    </div>
                </div>
                <!-- Team Column One -->

            </div>
        </div>
    </section>

    @endsection