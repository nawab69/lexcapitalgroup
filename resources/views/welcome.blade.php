@extends('layouts.app')

@section('content')

    <!-- slider area start -->
    <section class="slider__area">
        <div class="slider-active">
            <div class="single-slider slider__height d-flex align-items-center" data-background="{{url('/')}}/frontend/img/slider/slider-1.jpg">
                <div class="slider__shape">
                    <img class="shape triangle" src="{{url('/')}}/frontend/img/icon/slider/triangle.png" alt="triangle">
                    <img class="shape dotted-square" src="{{url('/')}}/frontend/img/icon/slider/dotted-square.png" alt="dotted-square">
                    <img class="shape solid-square" src="{{url('/')}}/frontend/img/icon/slider/solid-square.png" alt="solid-square">
                    <img class="shape circle" src="{{url('/')}}/frontend/img/icon/slider/circle.png" alt="circle">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10 col-sm-10">
                            <div class="slider__content">
{{--                                <span data-animation="fadeInUp" data-delay=".3s">We’ve added a new exciting feature in v2.0.</span>--}}
                                <h1 data-animation="fadeInUp" data-delay=".5s">Creating the right opportunities for you and your business.</h1>
{{--                                <div class="slider__btn" data-animation="fadeInUp" data-delay=".7s">--}}
{{--                                    <a href="contact.html" class="z-btn z-btn-transparent">Get a quote</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2">
                            <div class="slider__play" data-animation="fadeInRight" data-delay=".9s">
                                <a href="https://youtu.be/yJg-Y5byMMw" class="slider__play-btn" data-fancybox><i class="fal fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider__height d-flex align-items-center" data-background="{{url('/')}}/frontend/img/slider/slider-2.jpg">
                <div class="slider__shape">
                    <img class="shape triangle" src="{{url('/')}}/frontend/img/icon/slider/triangle.png" alt="triangle">
                    <img class="shape dotted-square" src="{{url('/')}}/frontend/img/icon/slider/dotted-square.png" alt="dotted-square">
                    <img class="shape solid-square" src="{{url('/')}}/frontend/img/icon/slider/solid-square.png" alt="solid-square">
                    <img class="shape circle" src="{{url('/')}}/frontend/img/icon/slider/circle.png" alt="circle">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10 col-sm-10">
                            <div class="slider__content">
{{--                                <span data-animation="fadeInUp" data-delay=".3s">We’ve added a new exciting feature in v2.0.</span>--}}
                                <h1 data-animation="fadeInUp" data-delay=".5s">Creating the right opportunities for you and your business.</h1>
{{--                                <div class="slider__btn" data-animation="fadeInUp" data-delay=".7s">--}}
{{--                                    <a href="contact.html" class="z-btn z-btn-transparent">Get a quote</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2">
                            <div class="slider__play" data-animation="fadeInRight" data-delay=".9s">
                                <a href="/" class="slider__play-btn" data-fancybox><i class="fal fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- features area start -->
    <section class="features__area pb-100 mt--100 wow fadeInUp" data-wow-delay=".5s">
        <div class="container">
            <div class="features__inner fix">
                <div class="row no-gutters">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_book_alt"></i>
                                </div>
                                <h3>Read out Terms and Conditions </h3>
                                <div class="features__btn">
                                    <a href="{{url('terms-and-conditions')}}" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_lightbulb_alt"></i>
                                </div>
                                <h3>Sign up for an account </h3>
                                <div class="features__btn">
                                    <a href="{{route('register')}}" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_house_alt"></i>
                                </div>
                                <h3>Pass our quick and easy KYC </h3>
                                <div class="features__btn">
                                    <a href="#" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_document_alt"></i>
                                </div>
                                <h3> Send over your digital assets </h3>
                                <div class="features__btn">
                                    <a href="#" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_lock_alt"></i>
                                </div>
                                <h3> Get in touch with sales regarding allocation </h3>
                                <div class="features__btn">
                                    <a href="#" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_ribbon_alt"></i>
                                </div>
                                <h3>Enjoy your profits </h3>
                                <div class="features__btn">
                                    <a href="#" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features area end -->

    <!-- about area start -->
    <section class="about__area pb-200 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pr-0 col-lg-6">
                    <div class="about__thumb m-img wow fadeInLeft" data-wow-delay=".2s">
                        <img src="{{url('/')}}/frontend/img/about/about-1.jpg" alt="">
                        <div class="about__shape">
                            <img src="{{url('/')}}/frontend/img/about/red-shape.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1">
                    <div class="about__content wow fadeInRight" data-wow-delay=".4">
                        <div class="section__title mb-25">
                            <span>Who we are</span>
                            <h2>We Unlock Potential</h2>
                        </div>
                        <p>At LEX , we understand the critical role that custodians play in helping to ensure the safety of assets in the global financial markets.</p>
                        <div class="about__list">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay=".6s"><span><i class="far fa-check"></i>Innovative ideas</span></li>
                                <li class="wow fadeInUp" data-wow-delay=".8s"><span><i class="far fa-check"></i>Professional assistance</span></li>
                                <li class="wow fadeInUp" data-wow-delay="1s"><span><i class="far fa-check"></i>Financial advisory</span></li>
                            </ul>
                        </div>
                        <a href="#" class="z-btn wow fadeInUp" data-wow-delay="1.2s">What we do<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- capabilities area strar -->
    <section class="capabilities__area p-relative black-bg-2 pt-180 pb-155 fix">
        <div class="capabilities__thumb p-absolute" data-background="{{url('/')}}/frontend/img/capabilities/capabilities-img.jpg"></div>
        <div class="capabilities__shape p-absolute wow fadeInLeft" data-wow-delay=".2s">
            <img src="{{url('/')}}/frontend/img/capabilities/capabilities-shape.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="capabilities__content wow fadeInUp" data-wow-delay=".4s">
                        <div class="section__title section__title-2 mb-60">
                            <span class="white-color">Capabilities</span>
                            <h2 class="white-color">Strategy led approach in every detail</h2>
                        </div>
                        <div class="capabilities__list">
                            <ol>
                                <li class="wow fadeInUp" data-wow-delay=".6s">Asset protection</li>
                                <li class="wow fadeInUp" data-wow-delay=".8s">Risk Management</li>
                                <li class="wow fadeInUp" data-wow-delay="1s">Diversification</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- capabilities area end -->

    <!-- services area start -->
    <section id="services" class="services__area pt-115 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section__title section__title-3 text-center mb-90 wow fadeInUp" data-wow-delay=".2s">
                        <span>Our Services</span>
                        <h2>Provide awesome customer service with our tools.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".4s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-1.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="#">CUSTODY</a></h3>
                            <p>Being a custodian first and foremost, our web application allows market users to engage in business with an added layer of security and advanced technology that LEX provides.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".6s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-2.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="#">RISK MANAGEMENT</a></h3>
                            <p>LEX strives to empower traders in their daily needs by providing a safe, secure and transparent environment for business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".8s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-3.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="#">SETTLEMENT</a></h3>
                            <p>Your financial transactions, affiliate networks and business connections at a glance, protected by LEX proprietary encryption and digital security.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-4.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="#">OTC SOLUTIONS</a></h3>
                            <p>Secure and trusted solutions for digital asset and cryptocurrency markets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services area end -->

    <!-- counter area start -->
    <section class="counter__area pb-100">
        <div class="container">
            <div class="counter__inner white-bg wow fadeInUp" data-wow-delay=".2s">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item text-center mb-30">
                            <h2 class="counter">1749</h2>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item text-center mb-30">
                            <h2 class="counter">796</h2>
                            <span>Project Completed</span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item text-center mb-30">
                            <h2 class="counter">573</h2>
                            <span>Support Given</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->

    <!-- team area start -->
    <section class="team__area pt-30 pb-110">
        <div class="container">
            <div class="row align-items-center mb-55">
                <div class="col-xl-6 col-lg-8 col-md-8 col-sm-8">
                    <div class="section__title section__title-3 mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <span>Our Team</span>
                        <h2>We help to create visual strategies.</h2>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-1.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="#">Andrew M. Hodge</a></h3>
                                <span>CEO & founder</span>
                            </div>
                            <div class="team__social theme-social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-vimeo-v"></i>
                                            <i class="fab fa-vimeo-v"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__content">
                            <h3><a href="#">Andrew M. Hodge</a></h3>
                            <span>CEO & founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-2.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="#">William J. Bowens</a></h3>
                                <span>Co - founder</span>
                            </div>
                            <div class="team__social theme-social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-vimeo-v"></i>
                                            <i class="fab fa-vimeo-v"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__content">
                            <h3><a href="#">William J. Bowens</a></h3>
                            <span>Co - founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-3.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="#">Karl R. Hackett</a></h3>
                                <span>Project Manager</span>
                            </div>
                            <div class="team__social theme-social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-vimeo-v"></i>
                                            <i class="fab fa-vimeo-v"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__content">
                            <h3><a href="#">Karl R. Hackett</a></h3>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end -->

    <!-- contact area start -->
    <section class="contact__area" id="contact_form">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d642.3848472056861!2d54.357603373825405!3d24.48673478667116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e667b1423d881%3A0x1ffe9e4e0dc9528e!2sWTCAD%20(World%20Trade%20Center%20Abu%20Dhabi)!5e0!3m2!1sen!2sbd!4v1618831813858!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="contact__wrapper d-md-flex justify-content-between wow fadeInUp" data-wow-delay=".3s">
                            <div class="contact__info mr-100">
                                <h3>Get in touch</h3>
                                <ul>
                                    <li>
                                        <h4>Address</h4>
                                        <p>{{settings('address')}}</p>
                                    </li>
<!--                                    <li>-->
<!--                                        <h4>call us</h4>-->
<!--                                        <p><a href="tel:{{settings('phone')}}">{{settings('phone')}}</a></p>-->
<!--{{--                                        <p><a href="tel:(204)-888-234-674">(204) 888 234 674</a></p>--}}-->
<!--                                    </li>-->
                                    <li>
                                        <h4>Email Address</h4>
                                        <p><a href="mailto:{{settings('admin_mail')}}">{{settings('admin_mail')}}</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__form">
                                <form action="{{route('mail')}}" method="post" autocomplete="off">
                                    @csrf
                                    <input name="first_name" type="text" placeholder="First Name">
                                    <input name="last_name" type="text" placeholder="Last Name">
                                    <input name="email" type="email" placeholder="Your Email">
                                    <input name="phone" type="text" placeholder="Phone">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                    <button type="submit" class="z-btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
@endsection
