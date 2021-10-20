@extends('layouts.master')

@section('title', 'December For Women Who Code')

@section('content')

<style>


  ul.tabs{
    text-align: center;
  }

  @media only screen and (max-width: 412px) {
    ul.tabs {
      text-align:left;
    }
  }
  @media only screen and (max-width: 412px) {
  #btp {
      display: none;
    }
  }
  .mega-menu .drop-down a, .mega-menu .drop-down-tab-bar a {
     padding: 0 0;
}
.welcome-broke-grid .container {
    position: relative;
    z-index: 99;
}
.social-space{
    margin-right: 15px;
    cursor: pointer;
}

.vl {
  border-left: 1px solid grey;
  height:100% ;
}
.causes-wrap .img-wrap img {
    border-radius: 10px 10px 0 0;
    width: 100%;
    height: 350px;
}


</style>
</head>

<body>

<!--=================================
  loading -->

 <!-- <div id="loading">
  <div id="loading-center">
      <img src="images/loader4.gif" alt="">
 </div>
</div> -->

<!--=================================
  loading -->






<!-- Welcome Home Style Start -->
        <section class="wide-tb-100 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>Showing Her That She Can</small>
                            What We Do
                        </h1>

                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s

                            <!-- Spacer For Medium -->
                            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                            <!-- Spacer For Medium -->
                          We're reaching girls around the world and are on track to close the gender gap in new entry-level tech jobs by 2030.

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
                                <img src="images/body-images/home/collaborate.jpeg"  alt="">
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
                                <img src="images/body-images/home/Change.jpeg"  alt="">
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


@endsection