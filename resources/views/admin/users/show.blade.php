@extends('adminlte::page')

@section('title', 'User Details - '.$user->username)

@section('content_header')
    <h1>User - {{$user->username}}</h1>
@stop

@section('content')



    <!-- Main content -->
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-8">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                Details
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="lead text-xl"><b>{{$user->first_name.' '.$user->last_name}}</b></h2>
                                        <p class="text-muted text-lg"><b>Username </b> {{$user->username}} </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <span class="flex justify-content-between">  <strong>Address: </strong> {{$user->kyc->address_1}}, {{$user->kyc->city}} {{$user->kyc->post_code}}, {{$user->kyc->state ?? ''}} {{$user->kyc->country}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <strong>Second Address:</strong> {{$user->kyc->address_2}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span><strong> Phone #:</strong> {{$user->phone}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> <strong>Email :</strong> {{$user->email}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-coins"></i></span> <strong>BTC Address :</strong> {{$user->wallet->btc_address}} </li>
                                        </ul>
                                        <hr>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="info-box bg-gradient-info">
                                            <span class="info-box-icon bg-white"><i class="fa fa-university"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Total BTC in Wallet</span>
                                                <span class="info-box-number">{{$balance['data']->available_balance}} BTC</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <livewire:send-btc :btcaddress="$user->wallet->btc_address"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@stop

{{--@section('css')--}}

{{--@stop--}}

{{--@section('js')--}}


{{--@stop--}}
