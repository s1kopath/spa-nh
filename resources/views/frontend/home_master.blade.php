<!DOCTYPE html>
<html lang="en">

<head>
    @php
        $siteInfo = \App\SiteInfo::first();
    @endphp
    <meta charset="utf-8">
    <title>{{$siteInfo->site_title}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="SPA, ngo, charity, non-profit, organization">
    <meta name="description" content="{{$siteInfo->site_title}}">
    <meta name="author" content="http://www.spabd.org/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/frontend_resources/img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('public/frontend_resources/img/favicon.ico')}}" type="image/x-icon">
    {{--<link rel="shortcut icon" href="img/favicon.ico">--}}
<!-- Font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Font Awesome Icons -->
    <link href='{{asset('public/frontend_resources/css/font-awesome.min.css')}}' rel='stylesheet' type='text/css'/>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/frontend_resources/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend_resources/css/hover-dropdown-menu.css')}}" rel="stylesheet">
    <!-- Icomoon Icons -->
    <link href="{{asset('public/frontend_resources/css/icons.css')}}" rel="stylesheet">
    <!-- Revolution Slider -->
    <link href="{{asset('public/frontend_resources/css/revolution-slider.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend_resources/rs-plugin/css/settings.css')}}" rel="stylesheet">
    <!-- Animations -->
    <link href="{{asset('public/frontend_resources/css/animate.min.css')}}" rel="stylesheet">
    <!-- Owl Carousel Slider -->
    <link href="{{asset('public/frontend_resources/css/owl/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend_resources/css/owl/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend_resources/css/owl/owl.transitions.css')}}" rel="stylesheet">
    <!-- PrettyPhoto Popup -->
    <link href="{{asset('public/frontend_resources/css/prettyPhoto.css')}}" rel="stylesheet">
    <!-- Custom Style -->
    <link href="{{asset('public/frontend_resources/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend_resources/css/responsive.css')}}" rel="stylesheet">
    <!-- Color Scheme -->
    <link href="{{asset('public/frontend_resources/css/color.css')}}" rel="stylesheet">
</head>
<body>
<div id="page">
    <!-- Page Loader -->
    <div id="pageloader">
        <div class="loader-item fa fa-spin text-color"></div>
    </div>
    <!-- Header -->
    @include('frontend.partials.header')
    <!-- /Header -->

    <!--home content start-->
    @yield('home_content')
    <!--home content end-->

    <!-- make donation quote -->
    @include('frontend.partials.donation_tag')
    <!-- /make donation quote -->

    <!-- Footer -->
    @include('frontend.partials.footer')
    <!-- /Footer -->

</div>
<!-- page -->

<!-- Scripts -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend_resources/js/bootstrap.min.js')}}"></script>
<!-- Menu jQuery plugin -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/hover-dropdown-menu.js')}}"></script>
<!-- Menu jQuery Bootstrap Addon -->
<script type="text/javascript"
        src="{{asset('public/frontend_resources/js/jquery.hover-dropdown-menu-addon.js')}}"></script>
<!-- Scroll Top Menu -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.easing.1.3.js')}}"></script>
<!-- Sticky Menu -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.sticky.js')}}"></script>
<!-- Bootstrap Validation -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/bootstrapValidator.min.js')}}"></script>
<!-- Revolution Slider -->
<script type="text/javascript"
        src="{{asset('public/frontend_resources/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/frontend_resources/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend_resources/js/revolution-custom.js')}}"></script>
<!-- Portfolio Filter -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.mixitup.min.js')}}"></script>
<!-- Animations -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend_resources/js/effect.js')}}"></script>
<!-- Owl Carousel Slider -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/owl.carousel.min.js')}}"></script>
<!-- Pretty Photo Popup -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<!-- Product Zoom -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.prettyPhoto.js')}}"></script>
<!-- Parallax BG -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.parallax-1.1.3.js')}}"></script>
<!-- Fun Factor / Counter -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.countTo.js')}}"></script>
<!-- Twitter Feed -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/tweet/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend_resources/js/tweet/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend_resources/js/tweet/tweetie.min.js')}}"></script>
<!-- Background Video -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/jquery.mb.YTPlayer.js')}}"></script>
<!-- Custom Js Code -->
<script type="text/javascript" src="{{asset('public/frontend_resources/js/custom.js')}}"></script>
<!-- Scripts -->
</body>

</html>
