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

    <x-breadcrumb title="Login" name="Login"/>

    <div class="login-19" style="background-color: #ccc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-inner-form">
                        <div class="logo-2">
                            <h4>Login</h4>
                        </div>
                        <div class="details">
                            @if(Session::has('message'))
                                Session::get('message')
                            @endif
                            <h3>Sign into your account</h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group form-box">
                                        <input type="email" name="email" class="input-text" placeholder="Email Address">
                                        <i class="flaticon-mail-2"></i>
                                    </div>
                                    @error('email')
                                    <small>{{ $message }}</small>
                                    @enderror
                                    <div class="form-group form-box">
                                        <input type="password" name="password" class="input-text" placeholder="Password">
                                        <i class="flaticon-password"></i>
                                    </div>
                                    @error('password')

                                    <small>{{ $message }}</small>

                                    @enderror
                                    <div class="checkbox mb-2">
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" name="remember" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="{{ route('password.request') }}">Forgot Password</a>
                                    </div>
                                    <div class="extra-login">
                                        <span>  </span>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn-md btn-theme btn-block">Login</button>
                                    </div>
                                    <div class="extra-login">
                                        <span>Don't have an Account? </span>
                                    </div>


                                </form>
                            <div class="form-group mb-0">
                                <button class="btn-md btn-theme btn-block"><a href="{{ route('register') }}"> Register Here</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{asset('logina/js/popper.min.js')}}"></script>
@endsection
