@extends('layouts.login-auth')

@section('title', 'Admin Login')

@section('content')


	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/mark - 1.png" alt="IMG">
				</div>
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                 @csrf
					<span class="login100-form-title">
					Because She Can <br>Admin Consol
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" type="email" class="input100  @error('email') is-invalid @enderror"   name="email"  @error('email') is-invalid @enderror placeholder="Email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus >
                        
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">

                        <input id="password" type="password" class="input100  @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password" placeholder="password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                        @enderror


						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
					
					<div class="container-login100-form-btn">
						<button type="submit"  class="login100-form-btn">
							Login
						</button>
                        {{-- <button type="submit" class="btn btn-primary btn-block button red">Log in</button> --}}

					</div>

					<div class="text-center p-t-12">
						<a href="#">
							<span class="txt1">
								Forgot
							</span>
							<a class="txt2" href="#">
								Password ?
							</a>
						</a>
						
					</div>

					
				</form>
				<div class="text-center p-t-136" style="text-align: center;">
					<a class="txt3" href="#" target="_blank">
                        
                        This project is powered by Waala tech
						<!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
					</a>
				</div>
			</div>
		
			
		</div>
	</div>
	
	

	
