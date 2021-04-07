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
                                <span data-animation="fadeInUp" data-delay=".3s">We’ve added a new exciting feature in v2.0.</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Get all the essentials <br> in a lightweight package</h1>
                                <div class="slider__btn" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="contact.html" class="z-btn z-btn-transparent">Get a quote</a>
                                </div>
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
                                <span data-animation="fadeInUp" data-delay=".3s">We’ve added a new exciting feature in v2.0.</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Get all the essentials <br> in a lightweight package</h1>
                                <div class="slider__btn" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="contact.html" class="z-btn z-btn-transparent">Get a quote</a>
                                </div>
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
                            <div class="features__thumb" data-background="{{url('/')}}/frontend/img/features/features-1.jpg"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_book_alt"></i>
                                </div>
                                <h3>Ifrs and Management Reporting </h3>
                                <div class="features__btn">
                                    <a href="services-details.html" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb" data-background="{{url('/')}}/frontend/img/features/features-1.jpg"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_lightbulb_alt"></i>
                                </div>
                                <h3>See term life insurance rates </h3>
                                <div class="features__btn">
                                    <a href="services-details.html" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb" data-background="{{url('/')}}/frontend/img/features/features-1.jpg"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_house_alt"></i>
                                </div>
                                <h3>Get health insurance quotes </h3>
                                <div class="features__btn">
                                    <a href="services-details.html" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb" data-background="{{url('/')}}/frontend/img/features/features-1.jpg"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_document_alt"></i>
                                </div>
                                <h3>Boat and Yacht Insurance </h3>
                                <div class="features__btn">
                                    <a href="services-details.html" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb" data-background="{{url('/')}}/frontend/img/features/features-1.jpg"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_lock_alt"></i>
                                </div>
                                <h3>Umbrella Insurance </h3>
                                <div class="features__btn">
                                    <a href="services-details.html" class="link-btn">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="features__item text-center">
                            <div class="features__thumb" data-background="{{url('/')}}/frontend/img/features/features-1.jpg"></div>
                            <div class="features__content">
                                <div class="features__icon">
                                    <i class="icon_ribbon_alt"></i>
                                </div>
                                <h3>How we think and work </h3>
                                <div class="features__btn">
                                    <a href="services-details.html" class="link-btn">
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
                        <p>Why I say old chap that is spiffing do one, cup of char bite your arm off lavatory bugger all mate bog-standard bits and bobs I'm telling barmy blow.</p>
                        <div class="about__list">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay=".6s"><span><i class="far fa-check"></i>Innovative ideas</span></li>
                                <li class="wow fadeInUp" data-wow-delay=".8s"><span><i class="far fa-check"></i>Professional assistance</span></li>
                                <li class="wow fadeInUp" data-wow-delay="1s"><span><i class="far fa-check"></i>Financial advisory</span></li>
                            </ul>
                        </div>
                        <a href="services.html" class="z-btn wow fadeInUp" data-wow-delay="1.2s">What we do<i class="far fa-long-arrow-right"></i></a>
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
                            <h2 class="white-color">Strategy-led design in every detail</h2>
                        </div>
                        <div class="capabilities__list">
                            <ol>
                                <li class="wow fadeInUp" data-wow-delay=".6s">Analysis & Idea</li>
                                <li class="wow fadeInUp" data-wow-delay=".8s">Design & Development</li>
                                <li class="wow fadeInUp" data-wow-delay="1s">Testing & Launch</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- capabilities area end -->

    <!-- services area start -->
    <section class="services__area pt-115 pb-80">
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
                            <h3><a href="services-details.html">Expense reporting</a></h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".6s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-2.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="services-details.html">Tax Advisory</a></h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay=".8s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-3.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="services-details.html">Consulting</a></h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-4.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="services-details.html">Audit & Assurance</a></h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-5.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="services-details.html">Finance Analytics</a></h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1.4s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-6.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="services-details.html">Cord Processing</a></h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-7.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="services-details.html">Development</a></h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item mb-90 wow fadeInUp" data-wow-delay="1.8s">
                        <div class="services__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/services/services-8.png" alt="services">
                        </div>
                        <div class="services__content">
                            <h3><a href="services-details.html">Financial audit</a></h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
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
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item text-center mb-30">
                            <h2 class="counter">1749</h2>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item text-center mb-30">
                            <h2 class="counter">796</h2>
                            <span>Project Completed</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item text-center mb-30">
                            <h2 class="counter">573</h2>
                            <span>Support Given</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item text-center mb-30">
                            <h2 class="counter">2739</h2>
                            <span>Offices Worldwide</span>
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
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4">
                    <div class="team__more d-flex justify-content-sm-end mb-85">
                        <a href="team.html" class="z-btn z-btn-border">View all<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-1.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="team-details.html">Berlin Corleone</a></h3>
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
                            <h3><a href="team-details.html">Berlin Corleone</a></h3>
                            <span>CEO & founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-2.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="team-details.html">Norman Gordon</a></h3>
                                <span>Associate Consultant</span>
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
                            <h3><a href="team-details.html">Norman Gordon</a></h3>
                            <span>Associate Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-3.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="team-details.html">Indigo Violet</a></h3>
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
                            <h3><a href="team-details.html">Indigo Violet</a></h3>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay="1s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-4.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="team-details.html">Dylan Meringue</a></h3>
                                <span>Support</span>
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
                            <h3><a href="team-details.html">Dylan Meringue</a></h3>
                            <span>Support</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-5.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="team-details.html">Berlin Corleone</a></h3>
                                <span> App Developer</span>
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
                            <h3><a href="team-details.html">Berlin Corleone</a></h3>
                            <span> App Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay="1.4s">
                        <div class="team__thumb mb-25">
                            <img src="{{url('/')}}/frontend/img/team/team-6.jpg" alt="team">
                            <div class="team__info text-left">
                                <h3><a href="team-details.html">Shahnewaz Sakil</a></h3>
                                <span>Web Developer</span>
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
                            <h3><a href="team-details.html">Shahnewaz Sakil</a></h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item team__item-add p-relative text-center fix mb-30 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="team__add">
                            <a href="team.html"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end -->

    <!-- cta area start -->
    <section class="cta__area pt-180 pb-155" data-background="{{url('/')}}/frontend/img/cta/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="cta__content text-center">
                        <span class="wow fadeInUp" data-wow-delay=".2s">We’ve added a new exciting feature in v2.0.</span>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">Do you have any question? Feel free to contact us</h1>
                        <div class="cta__btn wow fadeInUp" data-wow-delay=".6s">
                            <a href="contact.html" class="z-btn z-btn-white mb-30">Contact Us</a>
                            <a href="contact.html" class="z-btn z-btn-transparent mb-30">Work with us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

    <!-- price area start -->
    <section class="price__area pt-115 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section__title section__title-3 mb-85 text-center">
                        <span>Our Team</span>
                        <h2>Flexible Pricing Packages</h2>
                        <p>join and get 20% off coupon</p>
                    </div>
                    <div class="price__tab d-flex justify-content-center mb-50">
                        <div class="price__offer">
                            <span>Save 20%</span>
                            <img src="{{url('/')}}/frontend/img/icon/price/line.png" alt="">
                        </div>
                        <ul class="nav nav-tabs justify-content-center" id="price-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="yearly-tab" data-toggle="tab" href="#yearly" role="tab" aria-controls="yearly" aria-selected="true">Yearly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="price__tab-content">
                <div class="tab-content" id="price-tab-content">
                    <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="price__item p-relative transition-3 text-center fix mb-30 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="price__shape transition-3 p-absolute">
                                        <img src="{{url('/')}}/frontend/img/icon/price/triangle.png" alt="">
                                    </div>
                                    <div class="price__inner p-relative">
                                        <p>Free</p>
                                        <div class="price__tag mb-45">
                                            <h1>$0</h1>
                                            <span>Per month</span>
                                        </div>
                                        <div class="price__features text-left mb-55">
                                            <ul>
                                                <li><span>Upload Your Logo</span></li>
                                                <li><span>Stock photos & videos</span></li>
                                                <li><span>Video Templates Library</span></li>
                                            </ul>
                                        </div>
                                        <a href="contact.html" class="price-btn">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="price__item active p-relative transition-3 text-center fix mb-30 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="price__shape transition-3 p-absolute">
                                        <img src="{{url('/')}}/frontend/img/icon/price/triangle.png" alt="">
                                    </div>
                                    <div class="price__inner p-relative">
                                        <p>Premium</p>
                                        <div class="price__tag mb-45">
                                            <h1>$47</h1>
                                            <span>Per month</span>
                                        </div>
                                        <div class="price__features text-left mb-55">
                                            <ul>
                                                <li><span>Upload Your Logo</span></li>
                                                <li><span>Stock photos & videos</span></li>
                                                <li><span>Video Templates Library</span></li>
                                            </ul>
                                        </div>
                                        <a href="contact.html" class="price-btn">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="price__item p-relative transition-3 text-center fix mb-30 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="price__shape transition-3 p-absolute">
                                        <img src="{{url('/')}}/frontend/img/icon/price/triangle.png" alt="">
                                    </div>
                                    <div class="price__inner p-relative">
                                        <p>Enterprise</p>
                                        <div class="price__tag mb-45">
                                            <h1>$74</h1>
                                            <span>Per month</span>
                                        </div>
                                        <div class="price__features text-left mb-55">
                                            <ul>
                                                <li><span>Upload Your Logo</span></li>
                                                <li><span>Stock photos & videos</span></li>
                                                <li><span>Video Templates Library</span></li>
                                            </ul>
                                        </div>
                                        <a href="contact.html" class="price-btn">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="price__item p-relative transition-3 text-center fix mb-30 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="price__shape transition-3 p-absolute">
                                        <img src="{{url('/')}}/frontend/img/icon/price/triangle.png" alt="">
                                    </div>
                                    <div class="price__inner p-relative">
                                        <p>Enterprise</p>
                                        <div class="price__tag mb-45">
                                            <h1>$49</h1>
                                            <span>Per month</span>
                                        </div>
                                        <div class="price__features text-left mb-55">
                                            <ul>
                                                <li><span>Upload Your Logo</span></li>
                                                <li><span>Stock photos & videos</span></li>
                                                <li><span>Video Templates Library</span></li>
                                            </ul>
                                        </div>
                                        <a href="contact.html" class="price-btn">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="price__item active p-relative transition-3 text-center fix mb-30 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="price__shape transition-3 p-absolute">
                                        <img src="{{url('/')}}/frontend/img/icon/price/triangle.png" alt="">
                                    </div>
                                    <div class="price__inner p-relative">
                                        <p>Premium</p>
                                        <div class="price__tag mb-45">
                                            <h1>$79</h1>
                                            <span>Per month</span>
                                        </div>
                                        <div class="price__features text-left mb-55">
                                            <ul>
                                                <li><span>Upload Your Logo</span></li>
                                                <li><span>Stock photos & videos</span></li>
                                                <li><span>Video Templates Library</span></li>
                                            </ul>
                                        </div>
                                        <a href="contact.html" class="price-btn">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="price__item p-relative transition-3 text-center fix mb-30 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="price__shape transition-3 p-absolute">
                                        <img src="{{url('/')}}/frontend/img/icon/price/triangle.png" alt="">
                                    </div>
                                    <div class="price__inner p-relative">
                                        <p>Professional</p>
                                        <div class="price__tag mb-45">
                                            <h1>$99</h1>
                                            <span>Per month</span>
                                        </div>
                                        <div class="price__features text-left mb-55">
                                            <ul>
                                                <li><span>Upload Your Logo</span></li>
                                                <li><span>Stock photos & videos</span></li>
                                                <li><span>Video Templates Library</span></li>
                                            </ul>
                                        </div>
                                        <a href="contact.html" class="price-btn">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- price area end -->

    <!-- brand area start -->
    <section class="brand__area p-relative pt-160 pb-50">
        <div class="brand__shape">
            <img class="square" src="{{url('/')}}/frontend/img/icon/brand/square.png" alt="">
            <img class="circle" src="{{url('/')}}/frontend/img/icon/brand/circle.png" alt="">
            <img class="circle-2" src="{{url('/')}}/frontend/img/icon/brand/circle-2.png" alt="">
            <img class="triangle" src="{{url('/')}}/frontend/img/icon/brand/trianlge.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 offset-xl-1 col-lg-4 offset-lg-1">
                    <div class="section__title mb-30">
                        <span>Our Clients</span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="section__title section__title-3 wow fadeInUp" data-wow-delay=".2s">
                        <h2>More than 7,962 designers use konsul.</h2>
                    </div>
                    <div class="brand__subtitle mb-90 wow fadeInUp" data-wow-delay=".4s">
                        <p>Design anything from simple icons to fully featured websites and applications.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand__slider owl-carousel wow fadeInUp" data-wow-delay=".6s">
                        <div class="brand__item-wrapper">
                            <div class="brand__item">
                                <img src="{{url('/')}}/frontend/img/brand/brand-1.png" alt="">
                            </div>
                            <div class="brand__item">
                                <img src="{{url('/')}}/frontend/img/brand/brand-5.png" alt="">
                            </div>
                        </div>
                        <div class="brand__item-wrapper">
                            <div class="brand__item">
                                <img src="{{url('/')}}/frontend/img/brand/brand-2.png" alt="">
                            </div>
                            <div class="brand__item">
                                <img src="{{url('/')}}/frontend/img/brand/brand-6.png" alt="">
                            </div>
                        </div>
                        <div class="brand__item-wrapper">
                            <div class="brand__item">
                                <img src="{{url('/')}}/frontend/img/brand/brand-3.png" alt="">
                            </div>
                            <div class="brand__item">
                                <img src="{{url('/')}}/frontend/img/brand/brand-7.png" alt="">
                            </div>
                        </div>
                        <div class="brand__item-wrapper">
                            <div class="brand__item">
                                <img src="{{url('/')}}/frontend/img/brand/brand-4.png" alt="">
                            </div>
                            <div class="brand__item">
                                <img src="{{url('/')}}/frontend/img/brand/brand-8.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end -->

    <!-- contact area start -->
    <section class="contact__area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="contact__map">
                        <iframe src="https://maps.google.com/maps?hl=en&amp;q=Dhaka+()&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"></iframe>
                        <div class="contact__wrapper d-md-flex justify-content-between">
                            <div class="contact__info mr-100">
                                <h3>Get in touch</h3>
                                <ul>
                                    <li>
                                        <h4>Address</h4>
                                        <p>24 Parking Plaza, Suite 506 <br> Ardmore, SA 19004</p>
                                    </li>
                                    <li>
                                        <h4>call us</h4>
                                        <p><a href="tel:(404)-888-123-456">(404) 888 123 456</a></p>
                                        <p><a href="tel:(204)-888-234-674">(204) 888 234 674</a></p>
                                    </li>
                                    <li>
                                        <h4>Email Address</h4>
                                        <p><a href="mailto:Info@example.com">Info@example.com</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__form">
                                <form action="#">
                                    <input type="text" placeholder="Your Name" class="wow fadeInUp" data-wow-delay=".2s">
                                    <input type="email" placeholder="Your Email" class="wow fadeInUp" data-wow-delay=".4s">
                                    <textarea placeholder="Your Message" class="wow fadeInUp" data-wow-delay=".6s"></textarea>
                                    <button type="submit" class="z-btn wow fadeInUp" data-wow-delay=".8s">Send Message</button>
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
