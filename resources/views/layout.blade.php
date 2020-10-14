<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
    <!-- Icons -->
    <link href="assets/vendor/nucleo/css/nucleo-icons.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="assets/css/argon-design-system.min.css" rel="stylesheet">
    <!-- Star Rating -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" href="assets/css/rating.css" rel="stylesheet">
    <title>Cocktail Bar</title>
</head>
<body class="landing-page">

<!-- HEADER-->
<nav class="navbar navbar-main navbar-expand-lg navbar-light navbar-transparent headroom">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/img/cocktail.svg" width="25%"/>COCKTAIL BAR</a>
        <div id="navbar-default">
            <ul class="navbar-nav ml-lg-auto flex-row">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <span class="{{ Request::path() === '/' ? 'text-white' : '' }}">Home</span>
                    </a>
                </li>
                <li class="nav-item ml-4">
                    <a class="nav-link" href="/reviews">
                        <span class="{{ Request::path() === '/reviews' ? 'text-white' : '' }}">Reviews</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="section section-hero section-shaped">
    <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
    </div>
    <img src="assets/img/cocktailbar.jpg" class="img-fluid my-4" alt="Cocktail Bar Picture">
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>

@yield('content')

<!-- FOOTER-->
<footer class="footer">
    <div class="container">
        <div class="row row-grid align-items-center mb-5">
            <div class="col-lg-6">
                <h4 class="mb-0 font-weight-normal">Let's get in touch...</h4>
                <br/>
                <h6 class="mb-0 font-weight-light">Marie-joselaan 23 <br/> 8370 <br/> Blankenberge <br/> Belgium </h6>
                <br/>
                <h6 class="font-weight-light"><strong>Opened Daily</strong> from 17.30-01.30h</h6>
                <h6 class="font-weight-light"><i>Mondays Closed</i></h6>
                <span class="badge badge-success badge-pill my-2">
                    <i class="fa fa-star checked" aria-hidden="true"></i>
                    <i class="fa fa-star checked" aria-hidden="true"></i>
                    <i class="fa fa-star checked" aria-hidden="true"></i>
                    <i class="fa fa-star checked" aria-hidden="true"></i>
                    <i class="fa fa-star " aria-hidden="true"></i>
                    Overall Rating</span>
            </div>
            <div class="col-lg-6 text-lg-center btn-wrapper">
                <button target="_blank" href="#" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
                    <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                </button>
                <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                    <span class="btn-inner--icon"><i class="fab fa-linkedin" aria-hidden="true"></i></span>
                </button>
                <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
                    <span class="btn-inner--icon"><i class="fab fa-github" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-6">
                <div class="copyright">
                    © 2020 <a href="https://github.com/NicolSaha/intro-laravel" target="_blank">Nicol Saha</a>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-footer justify-content-end">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/reviews" class="nav-link">Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Star Rating JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
<script src="assets/ratingfunction.js" type="text/javascript"></script>
<!-- Core JS -->
<script src="assets/vendor/jquery/jquery.min.js" defer></script>
<script src="assets/vendor/popper/popper.min.js" defer></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js" defer></script>
<!-- Theme JS -->
<script src="assets/js/argon-design-system.min.js" defer></script>
<script src="assets/vendor/headroom/headroom.min.js"></script>

</body>
</html>