@extends('layouts/public_layout')
@section('register_select','active')
@section('content')
<section class="signup sign-in-up">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title text-center">Create an account</h2>
                <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                	@csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account fa-solid fa-user"></i></label>
                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" />
                        @if($errors->has('name'))
                        <div class="error-messege">
                            <span>*{{ $errors->first('name') }}</span>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="zmdi zmdi-email fa fa-phone" aria-hidden="true"></i>
                        </label>
                        <input type="phone" name="phone_no" placeholder="Your phone" value="{{ old('phone_no') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email fa fa-envelope" aria-hidden="true"></i></label>
                        <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}"/>
                        @if($errors->has('email'))
                        <div class="error-messege">
                            <span>*{{ $errors->first('email') }}</span>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock fa-solid fa-lock"></i></label>
                        <input type="password" name="password" id="password-field" placeholder="Password" />
                        @if($errors->has('password'))
                        <div class="error-messege">
                            <span>*{{ $errors->first('password') }}</span>
                        </div>
                        @endif
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <span class="i-b-tn">
                            <span class="i-btn" onmouseover="showPasswordInfo()" onmouseout="hidePasswordInfo()">i</span>
                            <span class="pass-info">
                            Password format rule: uppercase (A – Z) characters / lowercase characters (a – z) | digits (0 – 9)
                            </span>
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock fa-solid fa-lock"></i></label>
                        <input type="password" name="password_confirmation" placeholder="Repeat your password" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="checkbox" name="agree_term" id="flexCheckChecked" class="agree-term" />
                        <label for="flexCheckChecked" class="label-agree-term"><span><span></span></span>By clicking "SIGN UP" I agree to the <a href=""> Terms and Conditions</a> and<a href="">Privacy Policy</a>. </label>
                         @if($errors->has('agree_term'))
                        <div class="error-messege">
                            <span>*Please check term & condition</span>
                        </div>
                        @endif
                    </div>
                    <div class="form-group form-button d-flex justify-content-center">
                        <button class="btn btn-primary"> Sign up</button>
                    </div>

                </form>

                <div class="">
                    <div class="login-divider">
                        <span>Or login with</span>
                    </div>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center fa-brands zmdi-facebook fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter fa-brands fa-apple"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google fa-brands fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="signup-image d-flex align-items-center">
                <figure><img src="{{ asset('front/img/signup-image.jpg') }}" alt="sing up image"></figure>
            </div>
        </div>
    </div>
</section>
@endsection