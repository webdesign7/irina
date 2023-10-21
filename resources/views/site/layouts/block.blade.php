<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cosminlazar.com/Webdesign7/eph.com/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/css/custom.css" />

    <title>{{TwillAppSettings::getTranslated('seo.seo.title')}}</title>
</head>
<body class="navbar-fixed">


<div class="navbar-wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark" aria-label="">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <img src="/images/logo-recatngular.png" alt=""/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    <li class="nav-item ms-md-4">
                        <div class="dropdown">
                            <button class="btn btn-tertiary dropdown-toggle ps-0 pe-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">English</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                                <li><a class="dropdown-item" href="#">French</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


@yield('content')


<div class="image-separator parallax-window" data-bleed="10" data-parallax="scroll"data-image-src="/images/paralax1.jpeg"></div>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="/" class="footer-brand">
                    <img src="/images/logo-square.png" alt=""/>
                </a>
            </div>
            <div class="col-md-3">
                <h5>Contact</h5>
                <ul>
                    <li><a href="mailto:info@physchologicalhelp.com">info@physchologicalhelp.com</a></li>
                    <li><a href="tel:020 - 020204413">020 - 020204413</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Follow</h5>
                <ul class="ss">
                    <li><a href="#"><i class="fa fa-twitter fa-1x"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube fa-1x"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook fa-1x"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Site navigation</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cosminlazar.com/Webdesign7/eph.com/js/scripts.min.js"></script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>
</html>


