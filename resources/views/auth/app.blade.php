<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('frontend/images/fav-icon/icon.png')}}">




    <!-- Fix Internet Explorer ______________________________________-->

<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{asset('frontend/vendor/html5shiv.js')}}"></script>
    <script src="{{asset('frontend/vendor/respond.js')}}"></script>
    <![endif]-->


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link type="text/css" rel="stylesheet" href="{{asset('logina/fonts/flaticon/font/flaticon.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('logina/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('logina/css/skins/default.css')}}">

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>--}}

    <!-- Scripts -->
{{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--    <!-- Fonts -->--}}
    {{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    {{--    <!-- Styles -->--}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


<div class="main-page-wrapper">

@include('partials.header')


@yield('content')


@include('partials.footer')


<!-- Js File_________________________________ -->

    <!-- j Query -->
    <script type="text/javascript" src="{{asset('frontend/vendor/jquery.2.2.3.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{asset('frontend/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Bootstrap Select JS -->
    <script type="text/javascript" src="{{asset('frontend/vendor/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>

    <!-- Vendor js _________ -->
    <!-- revolution -->
    <script src="{{asset('frontend/vendor/revolution/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/revolution/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/vendor/revolution/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/vendor/revolution/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/vendor/revolution/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/vendor/revolution/revolution.extension.kenburn.min.js')}}"></script>
    <!-- menu  -->
    <script type="text/javascript" src="{{asset('frontend/vendor/menu/src/js/jquery.slimmenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/vendor/jquery.easing.1.3.js')}}"></script>
    <!-- isotop -->
    <script type="text/javascript" src="{{asset('frontend/vendor/isotope.pkgd.min.js')}}"></script>
    <!-- fancy box -->
    <script type="text/javascript" src="{{asset('frontend/vendor/fancy-box/jquery.fancybox.pack.js')}}"></script>
    <!-- owl.carousel -->
    <script type="text/javascript" src="{{asset('frontend/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- js count to -->
    <script type="text/javascript" src="{{asset('frontend/vendor/jquery.appear.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/vendor/jquery.countTo.js')}}"></script>


    <!-- Theme js -->
    <script type="text/javascript" src="{{asset('frontend/js/theme.js')}}"></script>


    <script src="{{asset('logina/js/popper.min.js')}}"></script>


    @include('sweetalert::alert')



</div>


</body>
</html>
