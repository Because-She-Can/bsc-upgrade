@extends('layouts.master')

@section('title', 'December For Women Who Code')

@section('content')



<!-- Banner Start -->
<!-- <section class="main-banner">
        <div class="container start">
            <div class="slides-wrap">
                <div class="owl-carousel owl-theme">
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
                </div>

            </div>
            <div class="container pos-rel">
                <div class="funds-committed">
                    <small>Total Funds Committed</small>
                    <span class="counter">14,721</span>
                </div>
            </div>
        </div>
    </section> -->

<!-- About Us Style Start -->
<section>
    <div class="container banner-top">
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
                            <a href="javascript:void" class="become-volunteers-links" id="myBtn"><span
                                    class="tag-single">Become a Volunteer</span></a>
                            <img src="assets/images/dfwwc.jpg" alt="">
                        </div>

                        @include('website.volunteer_form')

                        <div class="content-wrap-single">
                            <div class="featured-cause-timer">
                                <h3><strong class="txt-orange">$690</strong> raised of <strong
                                        class="txt-blue">$5,000</strong></h3>
                                <div class="skillbar" data-percent="0.52%">
                                    <div class="skillbar-percent">
                                        <h3><strong>13.8%</strong></h3>
                                    </div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                <div class="d-md-flex align-items-end justify-content-between">
                                    <ul id="featured-cause" class="list-unstyled list-inline w-50">
                                        <li class="list-inline-item"><span class="daysx">46</span>
                                            <div class="days_text">Days</div>
                                        </li>
                                        <li class="list-inline-item"><span class="hours">13</span>
                                            <div class="hours_text">Hours</div>
                                        </li>
                                        <li class="list-inline-item"><span class="minutes">20</span>
                                            <div class="minutes_text">Minutes</div>
                                        </li>
                                        <li class="list-inline-item"><span class="seconds">10</span>
                                            <div class="seconds_text">Seconds</div>
                                        </li>
                                    </ul>
                                    <a class="btn-outline-default btn" href="donate">Donate Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="content-wrap-single border-top">

                            <p>Every day, a girl wakes up to a world with all its limitless opportunities before her.
                                One day, she comes to the realization that she too can be an instrument for change. She
                                recognizes her potential.
                                Because of this, she strives to be the best version of herself.
                                She learns along the way that success is wholly achieved when she has a community that
                                supports her dream.
                            </p>


                            <div class="row my-5">
                                <div class="col-md-6">
                                    <img src="assets/images/dfwwcmd1.JPEG" class="rounded" alt="">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/images/dfwwcmd2.JPEG" class="rounded" alt="">
                                </div>
                            </div>

                            <h3>Background</h3>
                            <p>The December for Women who code project is an annual fundraising event organised to
                                support women in Tech. This year, we are procuring laptops for women/girls who are
                                coding with phones/faulty laptops to support them in excelling in their Tech careers.
                                Your donation will make a huge difference in the life of an aspiring woman in Tech.</p>

                            <div class="my-5">
                                <blockquote>
                                    A digital revolution is impossible if the gender digital divide continues to widen.
                                </blockquote>
                            </div>

                            <h3>Challenge</h3>
                            <p>According to a report by UNESCO on the topic “Is the gender gap narrowing in science and
                                engineering?”It was recorded that there are only 30% of women in sub-saharan Africa in
                                Technology. Out of this, only 18% graduate in engineering and Tech with a staggering
                                6.6% in research. <br> <br>
                                A digital revolution is impossible if the gender digital divide continues to widen.
                                There are many women passionate about making a change and contributing significantly to
                                solving society’s problem. One of the leading barriers to women’s inability to pursue
                                their coding interests is the lack of access to resources like a well functioning
                                computer. <br> <br>
                                This December we are changing that narrative one girl, one laptop at a time.
                                To improve upon our society, we need to take up the mandate of working to see the change
                                happening. Let us support one another and contribute to bridging the gender digital gap.

                            </p>
                            <!-- <ul class="list-unstyled icons-listing theme-green mb-0 mt-4">
                                <li>Third spirit you behold don’t grass lesser divide they are man.</li>
                                <li>Can not two very was above man abundantly also second.</li>
                                <li>Together herb shall were bearing fill grass made fill heaven.</li>
                            </ul> -->
                        </div>

                        <div class="share-this-wrap">
                            <!-- <div class="share-line">
                                <div class="pr-4">
                                    <strong>Share This</strong>
                                </div>
                                <div class="pl-4">
                                    <ul class="list-unstyled list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-instagram"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-behance"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="icofont-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>

                    </div>
                    <!-- Causes Single Wrap -->

                </div>

            </div>

        </div>
    </div>
</section>
<!-- About Us Style Start -->



<!-- Banner Start -->

@if(session('status'))
@include('website.success_modal')
@endif


@endsection