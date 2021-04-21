<!-- footer area start -->
<footer>
    <div class="footer__area grey-bg pt-100">
        <div class="footer__top pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="footer__widget mb-45 wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer__widget-title">
                                <h4>Pages</h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <li><a href="{{url('about-us')}}">About Us</a></li>
                                        <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                        <li><a href="{{url('/terms-conditions')}}">Terms And Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="footer__widget mb-45 wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer__widget-title">
                                <h4>Others</h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <li><a href="{{url('home')}}">Dashboard</a></li>
                                        <li><a href="{{url('login')}}">Login</a></li>
                                        <li><a href="{{url('register')}}">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-5 col-sm-6">
                        <div class="footer__widget mb-45 wow fadeInUp" data-wow-delay=".8s">
                            <div class="footer__widget-title">
                                <h4>Information</h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__info">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="fal fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">
                                                <span>{{settings('address')}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon theme-color ">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="text theme-color ">
                                                <span><a href="mailto:{{settings('admin_mail')}}">{{settings('admin_mail')}}</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon theme-color">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="text theme-color">
                                                <span><a href="tel:{{settings('phone')}}">{{settings('phone')}}</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer__copyright-text">
                            <p>Copyright © 2021 All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer__social theme-social f-right">
                            <ul>
                                <li>
                                    <a href="{{settings('facebook')}}">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{settings('twitter')}}">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{settings('linkedin')}}">
                                        <i class="fab fa-linkedin"></i>
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
