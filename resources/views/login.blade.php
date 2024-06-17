@extends('layouts/public_layout')
@section('login_select','active')
@section('customcss')
<style>
  /* Style for the info button */
  .info-button {
    display: inline-block;
    background-color: #3498db; /* Change the background color */
    color: #fff; /* Change the text color */
    border: none;
    border-radius: 50%; /* Make it a circle */
    padding: 10px;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s;
  }

  /* Change button background color on hover */
  .info-button:hover {
    background-color: #2980b9; /* Change the hover background color */
  }

  /* Style for the info icon */
  .info-icon {
    font-family: 'Arial', sans-serif; /* Choose a suitable font */
  }
</style>
@endsection
@section('content')
<section class="sign-in sign-in-up">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image d-flex align-items-center">
                        <figure><img src="{{ asset('front/img/signin-image.jpg') }}" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title text-center pb-2">Log in</h2>
                        <form method="" class="register-form my-3" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account fa-solid fa-user"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Email address"/>
                                <div class="error-messege">
                                  <!-- <span>*Email address field is required*</span> -->
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock fa-solid fa-lock"></i></label>
                                <input type="password" name="your_pass" id="password-field" placeholder="Password"/>
                                <div class="error-messege">
                                  <!-- <span>*Password field is required*</span> -->
                              </div>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button mt-4 d-flex justify-content-center">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                            <div class="form-group pt-3">
                                <p class="text-center">Don’t have an account ? <a href=""> Create an account</a></p>
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
                </div>
            </div>
        </section>
@endsection


@section('customjs')
<script>
    $(".toggle-password").click(function () {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
<script>
    document.getElementById('search-icon').addEventListener('click', function(event) {
  event.preventDefault();
  var megaMenu = document.getElementById('mega-menu');
  if (megaMenu.style.display === 'block') {
    megaMenu.style.display = 'none';
  } else {
    megaMenu.style.display = 'block';
  }
});
</script>
@endsection