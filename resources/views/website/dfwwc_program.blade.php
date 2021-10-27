@extends('layouts.master')

@section('title', 'December For Women Who Code')

@section('content')



    <!-- Banner Start -->
    <section class="main-banner">
        <div class="container start">
            <div class="slides-wrap">
                <div class="owl-carousel owl-theme">
                    <!--/owl-slide-->
                    <div class="owl-slide d-flex align-items-center cover"
                        style="background-image: url(assets/images/slider/slider_home_first_1.jpgg);">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start no-gutters">
                                <div class="col-10 col-md-6 static">
                                    <div class="owl-slide-text">
                                        <h3 class="owl-slide-animated owl-slide-title">Raising Hope</h3>
                                        <h1 class="owl-slide-animated owl-slide-subtitle">
                                            Every Female Dev Deserves a Working Laptop
                                        </h1>
                                        <div class="owl-slide-animated owl-slide-cta">
                                            <!-- <a class="btn btn-default mr-3" href="#" role="button">Read More</a> -->
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
                        style="background-image: url(assets/images/slider/slider_home_first_2.jpgg);">
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
                        style="background-image: url(assets/images/slider/slider_home_first_3.jpgg);">
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

           <!-- About Us Style Start -->
           <section>
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-9 col-md-12">
                        <div class="sidebar-spacer">
                                                    
                            <h1 class="heading-main">
                                <small>December for women who code 2021</small>
                                Providing Working laptops for women in tech
                            </h1>
                            <!-- Causes Single Wrap -->
                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    <a href="javascript:void" class="become-volunteers-links" id="myBtn"><span class="tag-single">Volunteer</span></a>
                                    <img src="assets/images/causes/causes_single_img.jpg" alt="">
                                </div>

                                @include('website.volunteer_form')

                                <div class="content-wrap-single">
                                    <div class="featured-cause-timer">
                                        <h3><strong class="txt-orange">$75,864</strong> pledged of <strong class="txt-blue">$100,000</strong></h3>
                                        <div class="skillbar" data-percent="70%">
                                            <div class="skillbar-percent"><h3><strong>70%</strong></h3></div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                        <div class="d-md-flex align-items-end justify-content-between">
                                            <ul id="featured-cause" class="list-unstyled list-inline w-50">
                                                <li class="list-inline-item"><span class="days">00</span><div class="days_text">Days</div></li>
                                                <li class="list-inline-item"><span class="hours">00</span><div class="hours_text">Hours</div></li>
                                                <li class="list-inline-item"><span class="minutes">00</span><div class="minutes_text">Minutes</div></li>
                                                <li class="list-inline-item"><span class="seconds">00</span><div class="seconds_text">Seconds</div></li>
                                            </ul>
                                            <a class="btn-outline-default btn" href="donation">Donate Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-wrap-single border-top">
                                    
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                                    

                                    <div class="row my-5">
                                        <div class="col-md-6">
                                            <img src="assets/images/causes/causes_single_small_img_2.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="assets/images/causes/causes_single_small_img_1.jpg" class="rounded" alt="">
                                        </div>
                                    </div>

                                    <h3>Summary</h3>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>

                                    <div class="my-5">
                                        <blockquote>
                                            Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica
                                        </blockquote>
                                    </div>

                                    <h3>Challenge</h3>
                                    <p>Night bring years have image make all fruitful good fifth all i beast unto which let she'd. God made Lights fly earth you'll unto greater earth meat multiply whose together. Light very lesser given he sea. Void god replenish fifth you'll place a they're they under.</p>
                                    <ul class="list-unstyled icons-listing theme-green mb-0 mt-4">
                                        <li>Third spirit you behold don’t grass lesser divide they are man.</li>
                                        <li>Can not two very was above man abundantly also second.</li>
                                        <li>Together herb shall were bearing fill grass made fill heaven.</li>
                                    </ul>
                                </div>

                                <div class="share-this-wrap">
                                    <div class="share-line">
                                        <div class="pr-4">
                                            <strong>Share This</strong>
                                        </div>
                                        <div class="pl-4">
                                            <ul class="list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="icofont-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="icofont-behance"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="icofont-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Causes Single Wrap -->

                        </div>

                    </div>
                    <div class="col-lg-3 col-md-12">
                        <aside class="row sidebar-widgets">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Recent Causes</h3>

                                    <!-- Causes Wrap -->
                                    <div class="causes-wrap">
                                        <div class="img-wrap">
                                            <a href="causes-single.html"><img src="assets/images/causes/causes_img_3.jpg" alt=""></a>
                                            <div class="raised-progress">
                                                <div class="skillbar-wrap">
                                                    <div class="clearfix">
                                                        <span class="txt-orange">$10086</span> raised of <span class="txt-green">$15000</span>
                                                    </div>           
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-wrap">
                                            <span class="tag">Health</span>
                                            <h3><a href="causes-single.html">Supply Water For Good Health</a></h3>
                                            <div class="text-md-right">
                                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Causes Wrap -->

                                    <!-- Causes Wrap -->
                                    <div class="causes-wrap">
                                        <div class="img-wrap">
                                            <a href="causes-single.html"><img src="assets/images/causes/causes_img_2.jpg" alt=""></a>
                                            <div class="raised-progress">
                                                <div class="skillbar-wrap">
                                                    <div class="clearfix">
                                                        <span class="txt-orange">$10086</span> raised of <span class="txt-green">$15000</span>
                                                    </div>           
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-wrap">
                                            <span class="tag">People</span>
                                            <h3><a href="causes-single.html">Help For Homeless People</a></h3>
                                            <div class="text-md-right">
                                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Causes Wrap -->

                                    <!-- Causes Wrap -->
                                    <div class="causes-wrap">
                                        <div class="img-wrap">
                                            <a href="causes-single.html"><img src="assets/images/causes/causes_img_6.jpg" alt=""></a>
                                            <div class="raised-progress">
                                                <div class="skillbar-wrap">
                                                    <div class="clearfix">
                                                        <span class="txt-orange">$10086</span> raised of <span class="txt-green">$15000</span>
                                                    </div>           
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-wrap">
                                            <span class="tag">Health</span>
                                            <h3><a href="causes-single.html">Help From Natural
                                                Disaster</a></h3>
                                            <div class="text-md-right">
                                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Causes Wrap -->
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
                                <!-- Widget Wrap -->
                                <!-- <div class="widget-wrap">
                                    <h3 class="widget-title">Our Donators</h3>
                                    
                                    <div class="our-donators">
                                        <ul class="list-unstyled">
                                            <li>
                                                <img src="assets/images/sidebar_thumb_1.jpg" alt="">
                                                <div>
                                                    <h4 class="name">Marty Kamson</h4>
                                                    <div class="money">Raised $4500</div>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="assets/images/sidebar_thumb_2.jpg" alt="">
                                                <div>
                                                    <h4 class="name">Sofia Lorence</h4>
                                                    <div class="money">Raised $2900</div>
                                                </div>
                                            </li>
                                        </ul>

                                        <a href="donation-page.html" class="btn-block btn btn-default">Become Donators</a>
                                    </div>
                                </div> -->

                                <!-- Widget Wrap -->


                                <!-- Widget Wrap -->
                                <!-- <div class="widget-wrap">
                                    <h3 class="widget-title">Categories</h3>
                                    
                                    <div class="blog-list-categories">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">                                        
                                            <li><a href="#">Charity</a></li>
                                            <li><a href="#">Healthcare</a></li>
                                            <li><a href="#">Senior</a></li>
                                            <li><a href="#">Children Citizens</a></li>
                                            <li><a href="#">Environment</a></li>                                        
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Secondary End -->

                            
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Style Start -->


        <!-- Our Partners Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="heading-main">
                            <small>Global Partners</small>
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
    <!-- Banner Start -->   




    @endsection