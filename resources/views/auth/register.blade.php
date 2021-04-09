@extends('layouts.app')

@section('style')
    <link type="text/css" rel="stylesheet" href="{{asset('logina/fonts/flaticon/font/flaticon.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('logina/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('logina/css/skins/default.css')}}">

    <style>
        a:hover{
            text-decoration: none;
        }
    </style>
@endsection

@section('content')

    <x-breadcrumb title="Register" name="Register"/>

    <!-- Login 19 start -->
    <div class="login-19" style="background-color: #ccc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="login-inner-form">
                        <div class="logo-2">
                            <h4>Register</h4>
                        </div>
                        <div class="details-reg">
                            <h3>Create an account</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf



                                <div class="form-group form-box">
                                    <input type="text" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus class="input-text" placeholder="Username">
                                    <i class="flaticon-user"></i>
                                </div>


                                <div class="form-group form-box">
                                    <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="input-text" placeholder="Email Address">
                                    <i class="flaticon-mail-2"></i>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-box">
                                            <input type="password" name="password" required autocomplete="new-password" class="input-text" placeholder="Password">
                                            <i class="flaticon-password"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-box">
                                            <input type="password" name="password_confirmation" required autocomplete="new-password" class="input-text" placeholder="Confirm Password">
                                            <i class="flaticon-password"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="checkbox">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe" required>
                                        <label class="form-check-label" for="rememberMe">I agree to the &nbsp <a href="{{route('terms-conditions')}}"> terms of service</a></label>
                                    </div>
                                </div>


                                <div class="extra-login">
                                    <span></span>
                                </div>

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn-md btn-theme btn-block">Register</button>
                                </div>
                                <div class="extra-login">
                                    <span>Already have an account?</span>
                                </div>

                            </form>
                            <button type="submit" class="btn-md btn-theme btn-block"><a href="{{route('login')}}">Login Here</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login 19 end -->

@endsection

@section('scripts')
    <script src="{{asset('logina/js/popper.min.js')}}"></script>
@endsection

