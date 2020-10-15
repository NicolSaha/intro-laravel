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
<!-- Header -->
@include('includes.header')

<!-- Main Content -->
@yield('content')

<!-- Footer -->
@include('includes.footer')

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
