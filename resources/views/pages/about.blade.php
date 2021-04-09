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
                                            Custody
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Being a custodian first and foremost, our web application allows market users to engage in business with an added layer of security and advanced technology that LEX provides.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-delay=".6s">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Risk Management
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        LEX  strives to empower traders in their daily needs by providing a safe, secure and transparent environment for business.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-delay=".8s">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Settlement
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Your financial transactions, affiliate networks and business connections at a glance, protected by LEX proprietary encryption and digital security.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-delay="1s">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            OTC SOLUTIONS
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        Secure and trusted solutions for digital asset and cryptocurrency markets.
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
                        <p class="wow fadeInUp" data-wow-delay=".6s">offers high quality custody, clearing and settlement services across multiple asset classes. We guarantee secure safekeeping of your financial instruments and funds via segregated accounts at investment rated counterparties (banks, investment banks, brokerages, custodians)</p>
                        <div class="achievement__wrapper d-flex d-md-block d-lg-flex justify-content-between mb-35 wow fadeInUp" data-wow-delay=".8s">
                            <div class="achievement__item mb-30">
                                <img src="{{url('/')}}/frontend/img/icon/achievement/achievement-1.png" alt="achievement">
                                <h3>Dedicated support</h3>
                            </div>
                            <div class="achievement__item mb-30 wow fadeInUp" data-wow-delay="1s">
                                <img src="{{url('/')}}/frontend/img/icon/achievement/achievement-2.png" alt="achievement">
                                <h3>Personal service</h3>
                            </div>
                        </div>
                        <a href="#" class="z-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12">
                            <div class="achievement__thumb m-img pl-30 text-right wow fadeInRight" data-wow-delay=".8s">
                                <img src="{{url('/')}}/frontend/img/achievement/achievement-1.jpg" alt="achievement-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- achievement area end -->


@endsection
