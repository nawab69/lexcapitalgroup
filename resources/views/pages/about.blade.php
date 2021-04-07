@extends('layouts.app')

@section('content')

    <x-breadcrumb title="About Us" name="About us"/>


    <!-- about area start -->
    <section class="about__area pb-150 pt-150">
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
                        <a href="about.html" class="z-btn wow fadeInUp" data-wow-delay="1.2s">What we do<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->


    <!-- faq area start -->
    <section class="faq__area p-relative pt-135 pb-120 grey-bg-12">
        <div class="faq__thumb" data-background="{{url('/')}}/frontend/img/faq/faq-1.jpg"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                    <div class="faq__wrapper">
                        <div class="section__title section__title-3 mb-25 wow fadeInUp" data-wow-delay=".2s">
                            <span>Thinking</span>
                            <h2>Knowledge is <br> the best investment</h2>
                        </div>
                        <div id="accordion">
                            <div class="card wow fadeInUp" data-wow-delay=".4s">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            No rocket science included
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Nancy boy it's all gone to pot grub absolutely bladdered some dodgy chav owt to do with me vagabond only.!
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-delay=".6s">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Blazing Site Performance
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Nancy boy it's all gone to pot grub absolutely bladdered some dodgy chav owt to do with me vagabond only.!
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-delay=".8s">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Bonus Plugins Included
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Nancy boy it's all gone to pot grub absolutely bladdered some dodgy chav owt to do with me vagabond only.!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq area end -->

    <!-- achievement area start -->
    <section class="achievement__area pt-135 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="achievement__content">
                        <div class="section__title section__title-3 mb-20">
                            <span class="wow fadeInUp" data-wow-delay=".2s">Achievement</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">We are certified financial experts</h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".6s">He nicked it fantastic well on your bike mate have it a I bum bag I twit easy peasy that, chimney pot amongst are you taking the piss daft show off show off pick.</p>
                        <div class="achievement__wrapper d-flex d-md-block d-lg-flex justify-content-between mb-35 wow fadeInUp" data-wow-delay=".8s">
                            <div class="achievement__item mb-30">
                                <img src="{{url('/')}}/frontend/img/icon/achievement/achievement-1.png" alt="achievement">
                                <h3>Acquisitions Finance Consulting</h3>
                            </div>
                            <div class="achievement__item mb-30 wow fadeInUp" data-wow-delay="1s">
                                <img src="{{url('/')}}/frontend/img/icon/achievement/achievement-2.png" alt="achievement">
                                <h3>Private Placement Consulting</h3>
                            </div>
                        </div>
                        <a href="about.html" class="z-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-xl-7 col-sm-6">
                            <div class="achievement__thumb m-img pl-30 text-right wow fadeInRight" data-wow-delay=".8s">
                                <img src="{{url('/')}}/frontend/img/achievement/achievement-1.jpg" alt="achievement-1">
                            </div>
                        </div>
                        <div class="col-xl-5 col-sm-6 d-md-none d-lg-none d-xl-block wow fadeInRight" data-wow-delay="1s">
                            <div class="achievement__thumb w-img">
                                <img src="{{url('/')}}/frontend/img/achievement/achievement-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- achievement area end -->

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


@endsection
