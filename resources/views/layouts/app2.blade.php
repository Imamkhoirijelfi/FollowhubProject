<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Followhub | @yield('title') </title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('images/favicons/site.webmanifest')}}">

    <!-- plugin scripts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href=" {{ asset('css/gilroy-extrabold.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/gilroy-light.css')}}">
    <link rel="stylesheet" href="{{ asset('css/gilroy-semibold.css')}}">
    <link rel="stylesheet" href="{{ asset('css/gilroy-bold.css')}}">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css')}}">
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
</head>
<body>
@yield('content')

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('js/TweenMax.min.js')}}"></script>
<script src="{{ asset('js/wow.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('js/isotope.js')}}"></script>

<!-- template scripts -->
<script src="{{ asset('js/theme.js')}}"></script>
</body>

</html>
