@extends('website.layouts.master')
@section('title', 'Login')
@section('content')

    <!--=================================
                                                                                                                                                     inner-intro -->

    <section class="inner-intro bg-1 bg-overlay-black-70">
        <div class="container">
            <div class="row text-center intro-title">
                <div class="col-md-6 text-md-left d-inline-block">
                    <h1 class="text-white"> Email Verification</h1>
                </div>
                <div class="col-md-6 text-md-right float-right">
                    <ul class="page-breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                        <li><span>Email Verification</span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
                                                                                                                                                     inner-intro -->

    <!--=================================
                                                                                                                                                     login-form  -->

    <section class="login-form page-section-ptb">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="#">
                                @csrf
                                <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--=================================
                                                                                                                                                     login-form  -->

@endsection
