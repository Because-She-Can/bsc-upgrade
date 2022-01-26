@extends('layouts.auth')

@section('title', 'Admin Login')

@section('content')
  <!--=================================
                                                                                                                                 inner-intro -->

 
    <section class="login-form page-section-ptb">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="card p-4 mt-4 bg-green">
                        
                    
                     <div class="card  p-4 section-title bg-orange text-center txt-white">
                        <h2>
                            <img src="assets/images/logo-light.png" alt="BSC Logo." style="max-width: 130px;">
                        </h2>
                        <h2 class="mt-2">
                        BSC ADMIN PORTAL testing mike 12</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="gray-form clearfix mt-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Email* </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Password">Password* </label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="remember-checkbox mb-4">
                                    <input type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember"
                                        id="one">
                                    <label for="one"> Remember me</label>
                                    <a href="#" class="float-right">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block button red">Log in</button>
                           
                        </form>
                    </div>
                    </div>
                    {{-- <div class="login-social text-center">
                        <h5>Login with Social media</h5>
                        <ul>
                            <li><a class="fb button" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a class="twitter button" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a class="pinterest button" href="#"><i class="fa fa-google-plus"></i> google+</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!--=================================
                                                                                                                                 login-form  -->

@endsection
