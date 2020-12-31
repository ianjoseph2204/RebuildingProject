  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rebuilding Project</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/logo.png">
    <link rel = "apple-touch-icon" type = "image/png" href = "assets/logo.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg fixed-top" id="navbarUtama">
            <img src="assets/logo.png" class="logoutama my-1">      
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" style="color: #0a0a0a;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="z-index: 99;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="home" class="nav-link mx-lg-3 mx-xl-5 my-2" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="about" class="nav-link mx-lg-3 mx-xl-5 my-2" href="about">About Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="story" class="nav-link mx-lg-3 mx-xl-5 my-2" href="story">Our Story<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <img src="assets/logo.png" width="200px" class="logonav mx-1 my-1">
                    </li>
                    <li class="nav-item">
                        <a id="contact" class="nav-link mx-lg-3 mx-xl-5 my-2" href="contact">Contact Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="getinvolved" class="nav-link mx-lg-3 mx-xl-5 my-2" href="getinvolved">Get Involved<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-lg-3 mx-xl-5 my-2 px-3" href="add" id="login">Add<span class="sr-only">(current)</span></a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </section>

    @yield('content')
    
   
    <footer class="footer mt-5" style="bottom: 0px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <img src="assets/foot.png" width="100%">
            </div>
            <div class="row justify-content-center" style="background-color: #FFB341; color:black">
                <div class="col-xl-4 col-lg-4 col-sm-12 col-10 justify-content-center text-center my-3">
                    <img src="assets/logofooter.png" width="100%"><br><br>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-phone iconfooter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="far fa-envelope iconfooter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram iconfooter"></i></a>
                </div>
                <!-- <div class="col-lg-1"></div> -->
                <div class="col-xl-3 col-lg-3 col-sm-6 col-10 text-center justify-content-center my-3">
                    <a href="about" style="text-decoration: none !important; color:#0a0a0a;">About </a> <br><br>
                    <a href="story" style="text-decoration: none !important; color:#0a0a0a;">Our Story</a> <br><br>
                    <a href="contact" style="text-decoration: none !important; color:#0a0a0a;">Contact </a> <br><br>
                    <a href="getinvolved" style="text-decoration: none !important; color:#0a0a0a;">Get Involved</a> <br>
                </div>
                 <div class="col-xl-3 col-lg-4 col-sm-6 col-10 justify-content-center my-3">
                    <a class="kontak"><i class="fab fa-instagram "></i> @rebuildingproject </a> <br><br>
                    <a class="kontak"><i class="fab fa-linkedin"></i> rebuildingproject</a> <br><br>
                    <a class="kontak"><i class="far fa-envelope"></i> RebuildingProject@gmail.com </a> <br><br>
                    <a class="kontak"><i class="fab fa-whatsapp"></i> (+62) 8123445678</a> <br>
                </div>
            </div>
            <div class="row justify-content-center text-center" style="background-color: #FFB341; color:black">
                <div class="col-lg-12 col-sm-12 justify-content-center text-center my-3">
                    © Copyright<b> Rebuilding Project </b>2020. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
</body>
</html>