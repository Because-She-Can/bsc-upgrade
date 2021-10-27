@extends('layouts.master')

@section('title', 'December For Women Who Code')

@section('content')
<style>
    .inner-intro {
        height: 660px;
        display: block;
    }

    .intro-title {
        display: table-cell;
        vertical-align: middle;
        padding-bottom: 30px;

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

    .owl-carousel .owl-item img {
        display: block;
        width: 100%;
        border-radius: 10px;
    }

    .topPad1 {
        padding-top: 150px;
    }

    .topPad {}

    .mega-menu.desktopTopFixed .menu-list-items {
        background: #323232;
        padding: 0px 30px 0px 30px;
    }

    .bg-img-6 {
        background-image: url(images/body-images/inclusion-policy.jpg);
        background-repeat: no-repeat;
        background-position: center center;
    }


    @media only screen and (max-width: 767px) {
        h1.heading-main {
            margin-bottom: 45px;
        }
    }

    .breadcrumbs-page {
        background-image: url(images/breadcrumbs.jpeg);
        background-repeat: no-repeat;
        background-position: top center !important;
        max-width: 100%;
        margin: 0 auto;
        z-index: 2;
        position: relative;
        border-radius: 0;
        padding-top: 158px;
    }

    .wide-tb-50 {
        padding-top: 50px;
        padding-bottom: 50px;
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
    }


    .ruu.container {
        max-width: 1316px;

    }


    .heading-main {
        color: #D59B2D;
        font-size: 1.80rem;
        position: relative;
        font-weight: 600;
        z-index: 1;
        margin-bottom: 1rem;
    }

    .inner-title {
        display: table-cell;
        vertical-align: bottom;
        padding-top: 200px;
        text-align: left;
    }

    .icon-fluid {
        width: 37px;
        height: 37px;
        margin: 0;

    }

    .tag {
        float: left;
        position: relative;
        display: table;
        vertical-align: middle;
    }

    .icon-label {
        position: relative;
    }

    .tag {
        padding-right: 19px;
    }

    .tag strong {
        display: table-cell;
        /*    vertical-align: inherit;*/
        position: relative;
    }

    .tag strong {
        line-height: 1.4705882353;
        font-size: 17px;
        padding-left: 11px;
        padding-top: 4px;
    }

    icon-label icon-fluid .tag figure img {
        display: block;
        position: relative;
        width: auto;
        height: auto;
        max-height: 100%;
        max-width: 100%;
    }

    .text h4 {
        line-height: 1.2058823529;
        font-size: 24px;
    }

    .breadcrumbs-page h1 {
        color: #FFF;
        text-transform: capitalize;
        font-size: 3.5rem;
        font-weight: 500;
        line-height: 1.2;
        padding: 10rem 0;
    }

    html {
        scroll-behavior: smooth;
    }

    .home-second-donation-form .funds-committed {
        padding-left: 130px;
    }
</style>
<!-- Page Breadcrumbs Start -->
<section class="breadcrumbs-page-wrap" style="margin-top:135px;position:relative;">
    <div class="bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <h1> Join our growing community of Tech Women
            </h1>
            <!-- <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Explore Programs</li>
                    </ol>
                </nav> -->
        </div>
    </div>
</section>
<!-- Page Breadcrumbs End -->
<!--=================================
 inner-intro -->


<!-- Donation Style Start -->
<section class="bg-white" id="V-form">
    <div class="ruu container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 order-lg-last">
                <div class="home-second-donation-form">
                    <div class="funds-committed">

                        <h3 class=" txt-white " style="align-items: center;">Become A Member</h3>
                    </div>

                    <form method="post" action="save_member" class="form-style">
                        {{csrf_field()}}
                        <h3 class="h3-sm fw-7 txt-white mb-3">On A Mission To Empower Women </h3>
                        <div class="form-group">
                            <label for="name"><strong>Full Name</strong></label>
                            <input type="text" class="form-control form-light" name="name" placeholder="e.g John Doe">
                        </div>
                        <div class="form-group">
                            <label for="email"><strong>Email Address</strong></label>
                            <input type="email" class="form-control form-light" name="email"
                                placeholder="e.g example@sitename.com">
                        </div>
                        <div class="form-group">
                            <label for="phone"><strong>Phone Number</strong></label>
                            <input type="tel" class="form-control form-light" name="phone" />
                        </div>

                        <div class="form-group">
                            <label for="refrence"><strong>Reference Contact</strong></label>
                            <input type="tel" class="form-control form-light" name="reference" />
                        </div>
                        <div class="form-group">
                            <label for="msg"><strong>Your Comments</strong></label>
                            <textarea class="form-control form-light" rows="5" name="msg"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default mt-3 btn-block">Send Request</button>
                    </form>
                </div>
            </div>


            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <div class="col-lg-7 col-md-12">
                <div>

                    <h5 class="heading-main">
                        <small>On A Mission To Empower Women</small>
                        Become a BSC member — it’s free!
                    </h5>
                    <p>Joining the Because She Can community means that you are joining a community of like-minded women
                        who care. You are joining a community who is interested in seeing you grow and is willing to
                        lend a hand and a listening ear.
                    </p>
                    <p>
                        As a member you’ll have the opportunity to connect directly with women in the Tech industry who
                        will help you grow professionally. You will learn about the variety of options, careers and
                        knowledge available to you in the world of Technology. Its free to join.

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
                                    <h3>14,800 <br> <span>Trusted Volunteers</span></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Map Icons Start -->
                    </div>

                </div>
            </div>

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->


        </div>
    </div>
</section>
<!-- Donation Style Start -->



<!--=================================
 our-service -->

<section class="our-service bg-white topPad1 " style="padding-bottom: 50px ;">
    <div class=" ruu container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img class="img-fluid" src="images/body-images/ImageGrid.jpeg" alt="about-content-image"
                    style="border-radius:7px">
            </div>


            <div class="inner-title col-lg-offset-6 col-lg-6 bg-overlay-black-90 text">
                <h4 class=""> <strong> We’re changing tech</strong> </h4>
                <p>
                    As a member, you’ll have access to in-person and virtual events and workshops designed to help
                    you grow professionally and personally. Plus, find a mentor, build meaningful relationships, and
                    take advantage of our Jobs Board to find a job that’s right for you. Best part? Membership is
                    free.
                </p>
                <div class="icon-label">
                    <span class="tag">
                        <figure class="icon-fluid">
                            <img class="img-fluid" src="images/body-images/EducationIcon.png" alt="about-content-image">
                        </figure>
                        <strong>Education</strong>

                    </span>


                    <!--   <span class="tag">
                    <figure class="icon-fluid">
                        <img class="img-fluid" src="images/body-images/ExperiencesIcon.png" alt="about-content-image" >

                    </figure>
                     <strong>Experiences</strong>
                </span> -->

                    <span class="tag">
                        <figure class="icon-fluid">
                            <img class="img-fluid" src="images/body-images/CommunityIcon.png" alt="about-content-image">

                        </figure>
                        <strong ">Community</strong>
                </span>

                 <span class=" tag">
                            <figure class="icon-fluid">
                                <img class="img-fluid" src="images/body-images/ExperiencesIcon.png"
                                    alt="about-content-image">

                            </figure>
                            <strong ">Community</strong>
                </span>
        </div>
        </div>

        </div>

       </div>
    </div>

  </section>

  <!--=================================
   our-service -->

     <!--=================================
 our-service -->

 <section class=" our-service bg-white topPad "  style=" padding-bottom: 50px ;">

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
                                                <img width="260" height="260" src="images/team/afi.jpeg" class="" alt=""
                                                    loading="lazy">
                                            </figure>
                                            <div class="text">
                                                <h4>Career Development</h4>
                                                <p>Add a new skill to your resume, or change career tracks. </p>
                                            </div>
                                        </div>
                                        <!-- imgae 2 -->
                                        <div class="col-12 col-md-4 text-center">
                                            <figure>
                                                <img width="260" height="260" src="images/team/otema.jpeg" class=""
                                                    alt="" loading="lazy">
                                            </figure>
                                            <div class="text">
                                                <h4>Connections & Guidance</h4>
                                                <p>Learn from a mentor, and connect with other professionals.</p>
                                            </div>
                                        </div>
                                        <!-- image 3 -->
                                        <div class="col-12 col-md-4 text-center">
                                            <figure>
                                                <img width="260" height="260" src="images/team/samira.jpeg" class=""
                                                    alt="" loading="lazy">
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
                                            <a class="nav-link btn btn-default ml-3 donate-btn" href="#V-form">Join
                                                For Free Today</a>
                                            <p>Be a part of something great. Membership is free.</p>
                                        </div>
                                    </div>
                                </div>
</section>

<!--=================================
   our-service -->



<!-- Images Gallery Style Start -->
<section class="wide-tb-100 bg-white">
    <div class="container">
        <div class="row img-gallery slider-link popup-video">
            <div class="col-lg-4">
                <h1 class="heading-main mb-lg-0">
                    <small>Images Gallery</small>
                    Project We Have Done
                </h1>
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="School Development">
                        <div class="gallery-content">
                            <div class="tag"><span>Jobs Board</span></div>
                            <h3>Discover the job that’s right for you.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Workshops</span></div>
                            <h3>Expand your skillset.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Personal Development</span></div>
                            <h3>Develop your soft skills.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Digital Events</span></div>
                            <h3>Webinars, virtual hackathons and more.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Local Events</span></div>
                            <h3>Find your next hire — or new friend</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Workshops</span></div>
                            <h3>Expand your skillset</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Mentorship</span></div>
                            <h3>Lean on an experienced member.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Conferences</span></div>
                            <h3>Build your skills — and your community</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

        </div>
    </div>
</section>
<!-- Images Gallery Style End -->

@endsection