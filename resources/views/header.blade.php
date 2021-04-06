<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rebuilding Project</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/header-footer/logo.png')}}">
    <link rel="apple-touch-icon" type="image/png" href="{{asset('assets/header-footer/logo.png')}}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
<section id="navbar">
    <nav class="navbar navbar-expand-lg fixed-top" id="navbarUtama">
        <div class="collapse navbar-collapse" id="navbarNav" style="z-index: 99; width: fit-content;">
            <ul class="navbar-nav">
                <li class="navbar-brand">
                    <img src="{{asset('assets/header-footer/logo.png')}}" class="nav-logo mx-1 my-1 logonav"
                         width="150px">
                </li>
                <li class="nav-item">
                    <a id="home" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a id="about" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/about')}}">About Us<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a id="story" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/stories')}}">Our Story<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a id="contact" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/contact')}}">Contact Us<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a id="get-involved" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/get-involved')}}">Get
                        Involved<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</section>

@yield('content')


<footer class="footer mt-5" style="bottom: 0;">
    <div class="justify-content-center" id="back-footer">
        <div class="row justify-content-center" style="color:black; align-self: flex-end;">
            <div class="col-xl-4 col-lg-4 col-sm-12 col-10 justify-content-center text-center my-3">
                <img src="{{asset('assets/header-footer/Logo_black.png')}}" width="250px" alt="footer-logo"><br><br>
                <a href="https://www.instagram.com/rebuildingproject/" target="_blank"><i
                        class="fab fa-instagram footer-icon"></i></a>
                <a href="https://www.facebook.com/reproes/" target="_blank"><i class="fab fa-facebook-f footer-icon"
                                                                               style="width: 55px;"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="far fa-envelope footer-icon"></i></a>
            </div>

            <div class="col-xl-2 col-lg-2 col-sm-5 col-8 justify-content-center my-3" style="font-family: Poppins;">
                <a href="{{url('about')}}" style="text-decoration: none !important;  color:#545454">About Us</a>
                <br><br>
                <a href="{{url('stories')}}" style="text-decoration: none !important;  color:#545454">Our Story</a>
                <br><br>
                <a href="{{url('contact')}}" style="text-decoration: none !important;  color:#545454">Contact Us</a>
                <br><br>
                <a href="{{url('get-involved')}}" style="text-decoration: none !important;  color:#545454">Get
                    Involved</a> <br>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-7 col-11 justify-content-center my-3" style="font-family: Poppins;">
                <a class="contact" style="color:#545454"><i class="fab fa-instagram footer-left"></i> @rebuildingproject
                </a> <br><br>
                <a class="contact" style="color:#545454"><i class="fab fa-facebook-f footer-left"></i> @reproes</a> <br><br>
                <a class="contact" style="color:#545454"><i class="far fa-envelope footer-left"></i>
                    rebuildinglivesforchildren@gmail.com </a> <br><br>
            </div>

            <div class="row justify-content-center text-center" style="color:#545454; font-family: Poppins">
                <div class="col-lg-12 col-sm-12 justify-content-center text-center my-3">
                    © Copyright Rebuilding Project 2020. All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
