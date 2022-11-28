<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Eshop</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('forntend/css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ url('forntend/css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('forntend/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ url('forntend/css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ url('forntend/css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ url('forntend/css/niceselect.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ url('forntend/css/animate.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ url('forntend/css/flex-slider.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ url('forntend/css/owl-carousel.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ url('forntend/css/slicknav.min.css') }}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ url('forntend/css/reset.css') }}">
    <link rel="stylesheet" href="{{ url('forntend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('forntend/css/responsive.css') }}">
    <!--model-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    @notifyCss
    <style type="text/css"> .notify{ z-index: 1000000; margin-top: 3%; } </style>

</head>

<body class="js">




    <!-- Header -->


    @include('Frontend.fixed.header')

     

    <!--/ End Header -->



   @yield('frontend_content')

   <x:notify-messages />


 
    <!-- Start Footer Area -->


    @include('Frontend.fixed.footer')


    <!-- /End Footer Area -->

    <!-- Jquery -->
    <script src="{{ url('forntend/js/jquery.min.js') }}"></script>
    <script src="{{ url('forntend/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ url('forntend/js/jquery-ui.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ url('forntend/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ url('forntend/js/bootstrap.min.js') }}"></script>
    <!-- Color JS -->
    <script src="{{ url('forntend/js/colors.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ url('forntend/js/slicknav.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ url('forntend/js/owl-carousel.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ url('forntend/js/magnific-popup.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ url('forntend/js/waypoints.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ url('forntend/js/finalcountdown.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ url('forntend/js/nicesellect.js') }}"></script>
    <!-- Flex Slider JS -->
    <script src="{{ url('forntend/js/flex-slider.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ url('forntend/js/scrollup.js') }}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ url('forntend/js/onepage-nav.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ url('forntend/js/easing.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ url('forntend/js/active.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
    <!-- model-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    @notifyJs
</body>

</html>
