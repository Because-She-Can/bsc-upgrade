@extends('layouts.master')

@section('title', 'December For Women Who Code')

@section('content')

<style>
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
#tabs ul.tabs li.active, #tabs ul.tabs li.active:focus, #tabs ul.tabs li:hover {
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
@media (max-width: 767px){
    .section-title {
    margin-bottom: 40px;
}

}

    </style>
    <!-- style for tabs end -->
    <style>
  
        .inner-intro {
            height: 660px;
            display: block;
        }

        .bg-1 {
            background: url(images/bg/aboutHeader.jpeg);
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

        @media only screen and (max-width: 412px) {
            .inner-intro {
                height: 410px;
                display: block;
            }

        }

        .bg-img-6 {
            background-image: url(images/body-images/inclusion-policy.jpg);
            background-repeat: no-repeat;
            background-position: center center;
        }

        
    </style>

</head>

<body>
<!--=================================
loading -->

<!-- <div id="loading">
    <div id="loading-center">
      <img src="images/loader.gif" alt="" />
    </div>
  </div> -->

<!--=================================
loading -->

<!--=================================
header -->

<!--=================================
inner-intro -->

<section class="inner-intro  bg-1 bg-overlay-black-70" style="margin-top:135px;position:relative;">
    <div class="container">
        <div class="row text-center intro-title">
            <!-- <div class="col-8  d-inline-block">
                <h2 style="color: aliceblue;">Hi, We're Stack</h2>
                <br>
                <p style="color: aliceblue;">Galley of bled it lorem Ipsum is simply dummy textit lorem Ipsum is simply dummy
                    textit lorem Ipsum is simply dummy text of the k a to make a type book. but also the leap into electronic
                    typesetting.

                </p>
            </div> -->

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
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s

                    <!-- Spacer For Medium -->
                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                <!-- Spacer For Medium -->
                We're reaching girls around the world and are on track to close the gender gap in new entry-level tech jobs by
                2030.

                </p>


            </div>

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <div class="col-lg-6 col-md-12">
                <img class="img-fluid" src="images/body-images/aboutSide.png" alt="about-content-image"
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
                                    <li data-tabs="tab1" class="active"><span aria-hidden="true" class="icon-list "></span>Our Mission
                                    </li>
                                    <li data-tabs="tab2" class=""> <span aria-hidden="true" class="icon-equalizer"></span> Our Vission
                                    </li>
                                    <li data-tabs="tab3" class=""> <span aria-hidden="true" class="icon-diamond"></span> Our History
                                    </li>

                                </ul>
                                <div id="tab1" class="tabcontent ">
                                    <div class="row" style="margin-left: 0px;">
                                        <!--   <h3>SmartCEO Mastermind is where we help you get ready to pitch your business to potential investors and strategic partners.
                                          </h3> -->
                                        <p>In 1995, 37% of computer scientists were women. Today, it’s only 24%. The percent will continue
                                            to decline if we do nothing. We know that the biggest drop off of girls in computer science is
                                            between the ages of 13 and 17.

                                            <!-- Spacer For Medium -->
                                        <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                                        <!-- Spacer For Medium -->
                                        We're reaching girls around the world and are on track to close the gender gap in new entry-level
                                        tech jobs by 2030.

                                        </p>
                                    </div>
                                    <div class="row custom-block-5-content">
                                        <div class="col">
                                            <div class="feature-box-1">

                                                <div class="content">
                                                    <h5 class="">% of women in Tech </h5>
                                                    <!-- Animated Skillbars Start -->
                                                    <div class="skillbar-wrap">
                                                        <div class="clearfix">
                                                            Entry Level
                                                        </div>
                                                        <div class="skillbar" data-percent="37%">
                                                            <div class="skillbar-percent">37%</div>
                                                            <div class="skillbar-bar"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Animated Skillbars Start -->

                                                    <!-- Animated Skillbars Start -->
                                                    <div class="skillbar-wrap">
                                                        <div class="clearfix">
                                                            Senior Level
                                                        </div>
                                                        <div class="skillbar" data-percent="19%">
                                                            <div class="skillbar-percent">19%</div>
                                                            <div class="skillbar-bar"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Animated Skillbars Start -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="tab2" class="tabcontent ">
                                    <div class="row custom-block-5-content">
                                        <div class="col-md-6">
                                            <!-- <div class="feature-box-1">
                                            <div class="icon">
                                              <i class="glyph-icon flaticon-beetle "></i>
                                             </div>
                                             <div class="content">
                                              <h5 class="">All brands</h5>
                                              <p class="">Galley simply dummy text lorem Ipsum is of the printin k a of type and </p>
                                            </div>
                                           </div> -->
                                            <div class="feature-box-1">
                                                <div class="icon">
                                                    <i class="fa fa-code" aria-hidden="true"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="">December For Women Who Code</h5>
                                                    <p class="">Printin k a of typelorem Ipsum is of the printin k a of type and and lorem Ipsum
                                                        is simply dummy lorem Ipsum is of the printin k a of type and text of the galley lorem
                                                        Ipsum is of the printin k a of type and</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!--  <div class="feature-box-1">
                                            <div class="icon">
                                              <i class="glyph-icon flaticon-interface-1 "></i>
                                             </div>
                                             <div class="content">
                                              <h5 class="">FREE SUPPORT </h5>
                                              <p class="">Text of the printin lorem ipsum the is simply k a type text and galley of </p>
                                            </div>
                                           </div> -->
                                            <div class="feature-box-1">
                                                <div class="icon">
                                                    <i class="fa fa-code" aria-hidden="true"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="">December For Women Who Code</h5>
                                                    <p class="">Printin k a of typelorem Ipsum is of the printin k a of type and and lorem Ipsum
                                                        is simply dummy lorem Ipsum is of the printin k a of type and text of the galley lorem
                                                        Ipsum is of the printin k a of type and</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tabcontent ">
                                    <div class="row custom-block-5-content">
                                        <div class="col-md-6">
                                            <div class="feature-box-1">
                                                <div class="icon">
                                                    <i class="fa fa-code" aria-hidden="true"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="">December For Women Who Code</h5>
                                                    <p class="">Printin k a of typelorem Ipsum is of the printin k a of type and and lorem Ipsum
                                                        is simply dummy lorem Ipsum is of the printin k a of type and text of the galley lorem
                                                        Ipsum is of the printin k a of type and</p>
                                                </div>
                                            </div>
                                            <!--  <div class="feature-box-1">
                                            <div class="icon">
                                              <i class="glyph-icon flaticon-key "></i>
                                             </div>
                                             <div class="content">
                                              <h5 class="">DEALERSHIP</h5>
                                              <p class="">Printin k a of type and lorem Ipsum is simply dummy text of the galley</p>
                                            </div>
                                           </div> -->
                                        </div>
                                        <div class="col-md-6">
                                            <!--  <div class="feature-box-1">
                                            <div class="icon">
                                              <i class="glyph-icon flaticon-interface-1 "></i>
                                             </div>
                                             <div class="content">
                                              <h5 class="">FREE SUPPORT </h5>
                                              <p class="">Text of the printin lorem ipsum the is simply k a type text and galley of </p>
                                            </div>
                                           </div> -->
                                            <div class="feature-box-1">
                                                <div class="icon">
                                                    <i class="fa fa-code" aria-hidden="true"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="">December For Women Who Code</h5>
                                                    <p class="">Printin k a of typelorem Ipsum is of the printin k a of type and and lorem Ipsum
                                                        is simply dummy lorem Ipsum is of the printin k a of type and text of the galley lorem
                                                        Ipsum is of the printin k a of type and</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<section class="wide-tb-100 pattern-orange pt-0 mb-spacer-md"  style="margin-top: 60px ;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="faqs-wrap pos-rel">
                    <div class="bg-overlay blue opacity-80"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-12">
                            <h1 class="heading-main light-mode">
                                <small>A Building A Safe Teh Space For All</small>
                                Our Inclusion Policy
                            </h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s</p>
                            <a class="btn btn-default" href="get-involved.html">Join Us Now</a>
                        </div>

                        <!-- Spacer For Medium -->
                        <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                        <!-- Spacer For Medium -->

                        <div class="col-12 col-lg-6 col-md-12">
                            <div class="theme-collapse light">
                                <!-- Toggle Links 1 -->
                                <div class="toggle arrow-down">
                    <span class="icon">
                      <i class="icofont-plus"></i>
                    </span> Our Philosophy
                                </div>
                                <!-- Toggle Links 1 -->

                                <!-- Toggle Content 1 -->
                                <div class="collapse show">
                                    <div class="content">
                                        Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis
                                        maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                                    </div>
                                </div>
                                <!-- Toggle Content 1 -->

                                <!-- Toggle Links 2 -->
                                <div class="toggle">
                    <span class="icon">
                      <i class="icofont-plus"></i>
                    </span> Our Organization
                                </div>
                                <!-- Toggle Links 2 -->

                                <!-- Toggle Content 2 -->
                                <div class="collapse">
                                    <div class="content">
                                        Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis
                                        maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                                    </div>
                                </div>
                                <!-- Toggle Content 2 -->

                                <!-- Toggle Links 3 -->
                                <div class="toggle">
                    <span class="icon">
                      <i class="icofont-plus"></i>
                    </span> Know More About Adoption
                                </div>
                                <!-- Toggle Links 3 -->

                                <!-- Toggle Content 3 -->
                                <div class="collapse">
                                    <div class="content">
                                        Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis
                                        maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
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
        <a href="donation-page.html" class="btn btn-default">Join US</a>
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
                    <small>Our Team</small>
                    Our Expert Team
                </h1>
            </div>

        </div>

        <div class="row">
            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6">
                <div class="team-section-wrap mb-0">
                    <div class="img green">
                        <div class="social-icons">
                            <a href="#"><i class="icofont-facebook"></i></a>
                            <a href="#"><i class="icofont-twitter"></i></a>
                            <a href="#"><i class="icofont-instagram"></i></a>
                        </div>
                        <img src="images/team/Afi.jpeg" alt="Afi image" class="rounded-circle">
                    </div>
                    <h4>Aunty Afi</h4>
                    <h5>co-Founder</h5>
                    <div class="text-md-right">
                        <a href="#" class="read-more-line"><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <!-- Team Column One -->

            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6">
                <div class="team-section-wrap mb-0">
                    <div class="img navy-blue">
                        <div class="social-icons">
                            <a href="#"><i class="icofont-facebook"></i></a>
                            <a href="#"><i class="icofont-twitter"></i></a>
                            <a href="#"><i class="icofont-instagram"></i></a>
                        </div>
                        <img src="images/team/Otema.jpeg" alt="otema image" class="rounded-circle">
                    </div>
                    <h4>Aunty Otema</h4>
                    <h5>co-Founder</h5>
                    <div class="text-md-right">
                        <a href="#" class="read-more-line"><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <!-- Team Column One -->

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6">
                <div class="team-section-wrap mb-0">
                    <div class="img orange">
                        <div class="social-icons">
                            <a href="#"><i class="icofont-facebook"></i></a>
                            <a href="#"><i class="icofont-twitter"></i></a>
                            <a href="#"><i class="icofont-instagram"></i></a>
                        </div>
                        <img src="images/team/Samira.jpeg" alt="Tema Member" class="rounded-circle">
                    </div>
                    <h4>Aunty Agartha</h4>
                    <h5>Head Of Operations</h5>
                    <div class="text-md-right">
                        <a href="#" class="read-more-line"><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <!-- Team Column One -->

            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6">
                <div class="team-section-wrap mb-0">
                    <div class="img beige">
                        <div class="social-icons">
                            <a href="#"><i class="icofont-facebook"></i></a>
                            <a href="#"><i class="icofont-twitter"></i></a>
                            <a href="#"><i class="icofont-instagram"></i></a>
                        </div>
                        <img src="images/team/tem4.jpeg" alt="Team member" class="rounded-circle">
                    </div>
                    <h4>Aunty Samira</h4>
                    <h5>Business Lead</h5>
                    <div class="text-md-right">
                        <a href="#" class="read-more-line"><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <!-- Team Column One -->
        </div>
    </div>
</section>
@endsection