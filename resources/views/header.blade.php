  
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
            <img src="assets/logo.png" width="130px" class="logoutama mx-1 my-1">      
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" style="color: darkslategray;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="z-index: 99;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link mx-5 my-2" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5 my-2" href="about">About Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5 my-2" href="story">Our Story<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <img src="assets/logo.png" width="200px" class="logonav mx-1 my-1">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5 my-2" href="contact">Contact Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5 my-2" href="getinvolved">Get Involved<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5 my-2 px-3" href="add" id="login">Login<span class="sr-only">(current)</span></a>
                    </li>
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
            <div class="row justify-content-center text-center" style="background-color: #FFB341; color:black">
                <div class="col-lg-12 col-sm-12 justify-content-center text-center mt-3 mb-3">
                    © Copyright<b> Rebuilding Project </b>2020. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
</body>
</html>