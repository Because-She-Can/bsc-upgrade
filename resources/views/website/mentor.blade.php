@extends('layouts.master')

@section('title', 'BSC Mentorship Program')

@section('content')



<!-- Banner Start -->


<!-- About Us Style Start -->
<section>
    <div class="container banner-top">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="sidebar-spacer">

                    <h1 class="heading-main">
                        <small>Help Guide A Sister In Tech</small>
                        BSC Mentorship Program - Mentor Feedback Form
                    </h1>
                    <p> BSC Mentorship Program - Mentor Feedback Form
                        The Because She Can Mentorship program is a program meant support women and girls in the Technology space gain knowledge from industry professionals. 
                        
                        Over a 12-week period you will be paired with a mentor to work on:
                        <br> <br>
                         <strong> - Building your portfolio</strong> 
                        <br>
                        <strong> - Job search navigation and strategy</strong> 
                        <br>
                        <strong> - Industry specific skill building</strong>
                        <br>
                        <strong> - Resume and interview preparation</strong></p>
                    <!-- Causes Single Wrap -->
                    <div class="causes-wrap single">
                    

                       

                        <div class="content-wrap-single border-top">

                            <p>
                             
                                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeyqybBmUHGLyvyARKdSHseC3fa5CffOps18ca17jSxfzVYow/viewform?embedded=true" width="100%" height="3586" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                            </p>

                        </div>

                        <div class="share-this-wrap">
                            <div class="share-line">
                                <div class="pr-4">
                                    <strong>Share This</strong>
                                </div>
                                <div class="pl-4">
                                    <ul class="list-unstyled list-inline mb-0">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//becauseshecan.tech/bscmentor"><i class="icofont-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="https://twitter.com/intent/tweet?url=https://becauseshecan.tech/bscmentor&text=join%20this%20amazing%20program&hashtags=womenInTech,Mentorship" target="blank">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-instagram"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-behance"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="icofont-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div>
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