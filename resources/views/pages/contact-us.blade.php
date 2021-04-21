@extends('layouts.app')

@section('content')

    <x-breadcrumb title="Contact Us" name="Contact Us"/>
    <!-- contact info area start -->
    <section class="contact__help p-relative pt-115 pb-150">
        <div class="contact__shape">
            <img class="dot" src="{{url('/')}}/frontend/img/icon/contact/dot.png" alt="">
            <img class="shape" src="{{url('/')}}/frontend/img/icon/contact/shape.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-1">
                    <div class="section__title section__title-3 mb-55">
                        <span class="fadeInUp wow" data-wow-delay=".2s">Contact</span>
                        <h2 class="fadeInUp wow" data-wow-delay=".4s">Help Center</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6 offset-xl-1">
                    <div class="contact__help-item white-bg text-center mb-30 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="contact__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/contact/headset.png" alt="">
                        </div>
                        <div class="contact__text">
                            <h3>Customer Support</h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                            <a href="#contact_form" class="z-btn z-btn-border">Visit Support Forum</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="contact__help-item white-bg text-center mb-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="contact__icon mb-35">
                            <img src="{{url('/')}}/frontend/img/icon/contact/msg.png" alt="">
                        </div>
                        <div class="contact__text">
                            <h3>Any Questions</h3>
                            <p>Naff the wireless barney bodge lurgy cuppa cheeky.</p>
                            <a href="#contact_form" class="z-btn z-btn-border">Contact Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info area end -->

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
