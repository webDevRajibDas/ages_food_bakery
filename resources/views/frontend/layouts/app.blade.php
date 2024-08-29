<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->currentLocale()) }}" dir="{{ language_direction() }}">

<head>
    <meta charset="utf-8" />
    <link href="{{ asset('img/favicon.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link type="image/png" href="{{ asset('img/favicon.png') }}" rel="icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">
    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">
    <link type="image/ico" href="{{ asset('img/favicon.png') }}" rel="icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Web Fonts  -->

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="themes/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="themes/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="themes/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="themes/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="themes/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="themes/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="themes/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="themes/css/theme.css">
    <link rel="stylesheet" href="themes/css/theme-elements.css">
    <link rel="stylesheet" href="themes/css/theme-blog.css">
    <link rel="stylesheet" href="themes/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="themes/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="themes/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="themes/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="themes/vendor/circle-flip-slideshow/css/component.css">

    <!-- Demo CSS -->

    <!-- Skin CSS -->
    <link rel="stylesheet" href="themes/css/skins/default.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="themes/css/custom.css">
    <!-- Head Libs -->
    <script src="themes/vendor/modernizr/modernizr.min.js"></script>

{{--  <!-- @vite(['resources/css/app-frontend.css', 'resources/js/app-frontend.js']) -->--}}

    @livewireStyles
    @yield('page-styles')
    @stack('after-styles')


</head>

<body>
<div class="body">
    @include('frontend.includes.header')
    <div role="main" class="main">
        @yield('content')
    </div>
    @include('frontend.includes.footer')
</div>


    <!-- Vendor -->
    <script src="themes/vendor/jquery/jquery.min.js"></script>
    <script src="themes/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="themes/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="themes/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="themes/vendor/popper/umd/popper.min.js"></script>
    <script src="themes/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/vendor/common/common.min.js"></script>
    <script src="themes/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="themes/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="themes/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="themes/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="themes/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="themes/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="themes/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="themes/vendor/vide/jquery.vide.min.js"></script>
    <script src="themes/vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <script src="js/views/view.home.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>
    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>


    @livewireScripts
    @stack('after-scripts')
</body>

</html>
