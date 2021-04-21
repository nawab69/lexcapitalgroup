@include('partials.components.loader')

<!-- header area start -->
<header>
    <div class="header__area p-relative header__transparent">
        <div class="header__top d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-5 col-md-4">
                        <div class="header__social">
                            <ul>
                                <!--<li><a href="{{settings('facebook','#')}}"><i class="fab fa-facebook-f"></i></a></li>-->
                                <li><a href="{{settings('twitter','https://twitter.com/LEXCapitalGroup')}}"><i class="fab fa-twitter"></i></a></li>
{{--                                <li><a href="{{settings('linkedin','#')}}"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                                <li><a href="{{settings('pinterest','#')}}"><i class="fab fa-pinterest-p"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-8">
                        <div class="header__info f-right">
                            <ul>
                                <!--<li>-->
                                <!--    <a href="tel:{{settings('phone','(012) 345 - 6789')}}">-->
                                <!--        <i class="fal fa-phone-alt"></i>-->
                                <!--        {{settings('phone','(012) 345 - 6789')}}-->
                                <!--    </a>-->
                                <!--</li>-->
                                <li>
                                    <a href="mailto:{{settings('admin_mail','admin@mail.com')}}">
                                        <i class="fal fa-envelope"></i>
                                        {{settings('admin_mail','admin@mail.com')}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header__sticky" class="header__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="logo">
                            <a href="#">
                                <img src="{{url('/')}}/frontend/img/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="logo-gradient">
                            <a href="#">
                                <img src="{{url('/')}}/frontend/img/logo/logo-gradient.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-6 col-sm-6 col-6">
                        <div class="header__bottom-right d-flex justify-content-end align-items-center">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="#services">Services</a>
                                        </li>
                                        <li><a href="{{url('/about-us')}}">About Us </a></li>

                                        <li><a href="{{url('/contact-us')}}">Contact Us </a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__btn d-none d-sm-block d-lg-none d-xl-block ml-50">
                                @guest
                                <a href="{{route('login')}}" class="z-btn z-btn-white">Login</a>
                                <a href="{{route('register')}}" class="z-btn z-btn-white-3">Register</a>
                                @else
                                    <a href="{{route('home')}}" class="z-btn z-btn-white">Dashboard</a>
                                    <a href="#" class="z-btn z-btn-white-3" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                @endguest
                            </div>
                            <div class="sidebar__menu d-lg-none">
                                <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-overlay-2"></div>
    </div>
</header>
<!-- header area end -->

@include('partials.components.sidebar')























{{--<!-- ===================================================--}}
{{--        Loading Transition--}}
{{--    ==================================================== -->--}}
{{--<div id="loader-wrapper">--}}
{{--    <div id="loader"></div>--}}
{{--</div>--}}


{{--<!----}}
{{--=============================================--}}
{{--    Theme Header--}}
{{--==============================================--}}
{{---->--}}
{{--<header>--}}
{{--    <!-- ====================Top header================= -->--}}
{{--    <div class="top-header p-color-bg">--}}
{{--        <div class="container">--}}
{{--            <ul class="float-left">--}}
{{--                <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{settings('address')}}</li>--}}
{{--                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> {{settings('admin_mail')}}</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div> <!-- /.top-header -->--}}

{{--    <!-- ===================== Bottom Header ======================= -->--}}
{{--    <div class="bottom-header">--}}
{{--        <div class="container">--}}
{{--            <div class="wrapper clearfix">--}}
{{--                <div class="logo float-left"><a href="{{url('/')}}"><img src="{{asset('frontend/images/logo/logo2.png')}}" alt="Logo"></a></div>--}}
{{--                <div class="float-right right-side">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <i class="fa fa-phone p-color" aria-hidden="true"></i>--}}
{{--                            <h6>Contact us</h6>--}}
{{--                            <p>{{settings('phone')}}</p>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <i class="fa fa-clock-o p-color" aria-hidden="true"></i>--}}
{{--                            <h6>Working TIme</h6>--}}
{{--                            <p>{{settings('working_time')}}</p>--}}
{{--                        </li>--}}
{{--                        @auth--}}
{{--                        <li><a href="{{url('/home')}}" class="tran3s hvr-rectangle-in">Dashboard</a></li>--}}
{{--                        <li><a href="{{url('/logout')}}" class="tran3s hvr-rectangle-in"onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">Logout</a></li>--}}
{{--                        @else--}}
{{--                        <li><a href="{{url('/login')}}" class="tran3s hvr-rectangle-in">Login</a></li>--}}
{{--                        <li><a href="{{url('/register')}}" class="tran3s hvr-rectangle-in">Register</a></li>--}}
{{--                        @endauth--}}
{{--                    </ul>--}}
{{--                </div> <!-- /.right-side -->--}}
{{--            </div> <!-- /.wrapper -->--}}
{{--        </div> <!-- /.container -->--}}
{{--    </div> <!-- /.bottom-header -->--}}
{{--</header>--}}

{{--<!----}}
{{--=============================================--}}
{{--    Theme Main Menu--}}
{{--==============================================--}}
{{---->--}}
{{--<div class="theme-main-menu">--}}
{{--    <div class="container">--}}
{{--        <!-- ============== Menu Warpper ================ -->--}}
{{--        <nav id="mega-menu-holder" class="clearfix">--}}
{{--            <ul class="clearfix">--}}
{{--                    <li @if(Route::current()->getName() == 'welcome') class="active" @endif><a href="{{url('/')}}">Home</a></li>				--}}
{{--				    <li @if(Route::current()->getName() == 'about-us') class="active" @endif><a href="{{url('about-us')}}">About Us</a></li>--}}
{{--                    <li @if(Route::current()->getName() == 'terms-conditions') class="active" @endif><a href="{{url('terms-conditions')}}">Terms and Conditions</a></li>--}}
{{--                    <li @if(Route::current()->getName() == 'privacy-policy') class="active" @endif><a href="{{url('privacy-policy')}}">General Escrow Instructions</a></li>--}}
{{--                    <li @if(Route::current()->getName() == 'contact-us') class="active" @endif><a href="{{url('contact-us')}}">contact</a></li>--}}
{{--                @auth--}}
{{--                    <li><a href="{{url('/home')}}">Dashboard</a>--}}
{{--                    </li>--}}
{{--                    <li><a href="{{url('/logout')}}" onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">Logout</a>--}}
{{--                    </li>--}}

{{--                @else--}}
{{--                    <li>--}}
{{--                    </li>--}}
{{--                @endif--}}

{{--                <li class="float-right search-box">--}}
{{--                    <button id="search"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
{{--                    <form action="#" class="tran4s">--}}
{{--                        <input type="text" placeholder="Search...">--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav> <!-- /#mega-menu-holder -->--}}
{{--    </div> <!-- /.container -->--}}
{{--</div> <!-- /.theme-main-menu -->--}}
