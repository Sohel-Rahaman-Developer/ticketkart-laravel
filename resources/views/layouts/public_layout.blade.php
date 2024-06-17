<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home:ticketkart</title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="img/" type="image/x-icon" /> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Include -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,700;1,800;1,900&family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
            <!--....................bootstrap..................-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!--....................bootstrap..................-->
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('front/css/mdb.min.css') }}" />
    <!-- Custom Style-->
    <link rel="stylesheet" href="{{ asset('front/css/tkv3.css') }}" />
    <!---Owl Carousel--->
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />

    <style>
    /* Style for the info button */
    .info-button {
        display: inline-block;
        background-color: #3498db;
        /* Change the background color */
        color: #fff;
        /* Change the text color */
        border: none;
        border-radius: 50%;
        /* Make it a circle */
        padding: 10px;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s;
    }

    /* Change button background color on hover */
    .info-button:hover {
        background-color: #2980b9;
        /* Change the hover background color */
    }

    /* Style for the info icon */
    .info-icon {
        font-family: 'Arial', sans-serif;
        /* Choose a suitable font */
    }
  
    </style>

    @yield('customcss')
</head>

<body>

@include('layouts/public_header')


@yield('content')


@include('layouts/public_footer')

     
    <!-- password eye button toggle start -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
<!-- password eye button toggle end -->

  <!-- MDB -->
  <script type="text/javascript" src="{{ asset('front/js/mdb.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front/js/owl-custom.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  

  @yield('customjs')
</body>

</html>