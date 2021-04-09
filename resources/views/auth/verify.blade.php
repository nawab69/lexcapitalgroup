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

    <x-breadcrumb title="Verify" name="Verify"/>


    <div class="login-19" style="background-color: #ccc;font-size: 1.6em">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-inner-form">
                        <div class="logo-2">
                            <h4>Verify</h4>
                        </div>
                        <div class="details">
                            @if(Session::has('message'))
                                Session::get('message')
                            @endif
                            <h3>Verify Your Email Address</h3>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
