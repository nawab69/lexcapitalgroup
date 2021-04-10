<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title','LEX Capital Group') </title>

{{-- #######################################  Template CSS  ########################################### --}}
<!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/frontend/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/preloader.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/meanmenu.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/animate.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/elegantFont.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/default.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/style.css">

{{--   ############################################################### Template CSS END ################################ --}}
    <!-- Custom fonts for this template-->
    <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">



    <livewire:styles />

    @yield('style')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <livewire:scripts />

    <!-- ####################### Js File Start ##################################### -->

    <!-- JS here -->
    <script src="{{url('/')}}/frontend/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{url('/')}}/frontend/js/vendor/waypoints.min.js"></script>
    <script src="{{url('/')}}/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/frontend/js/jquery.meanmenu.js"></script>
    <script src="{{url('/')}}/frontend/js/slick.min.js"></script>
    <script src="{{url('/')}}/frontend/js/jquery.fancybox.min.js"></script>
    <script src="{{url('/')}}/frontend/js/jquery.counterup.min.js"></script>
    <script src="{{url('/')}}/frontend/js/isotope.pkgd.min.js"></script>
    <script src="{{url('/')}}/frontend/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/frontend/js/ajax-form.js"></script>
    <script src="{{url('/')}}/frontend/js/wow.min.js"></script>
    <script src="{{url('/')}}/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{url('/')}}/frontend/js/main.js"></script>

    <!-- #################### Js File end ##################################### -->

    @yield('script')
    @include('sweetalert::alert')

</body>
</html>
