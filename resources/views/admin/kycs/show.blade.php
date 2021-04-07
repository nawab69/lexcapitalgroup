@extends('adminlte::page')

@section('title', 'KYC Verification of  '.$kyc->user->username)

@section('content_header')
    <h1>KYC User - {{$kyc->user->username}}</h1>
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
                                        <h2 class="lead text-xl"><b>{{$kyc->user->first_name.' '.$kyc->user->last_name}}</b></h2>
                                        <p class="text-muted text-lg"><b>Username </b> {{$kyc->user->username}} </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <span class="flex justify-content-between">  <strong>Address: </strong> {{$kyc->address_1}}, {{$kyc->city}} {{$kyc->post_code}}, {{$kyc->state ?? ''}} {{$kyc->country}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <strong>Second Address:</strong> {{$kyc->address_2}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span><strong> Phone #:</strong> {{$kyc->user->phone}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> <strong>Email :</strong> {{$kyc->user->email}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-coins"></i></span> <strong>BTC Address :</strong> {{$kyc->user->wallet->btc_address}} </li>
                                        </ul>
                                        <hr>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">KYC Document</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <div class="form-horizontal">
                                                <div class="card-body">
                                                    <div>
                                                        NID Front : <a target="_blank" href="{{asset('storage/'.$kyc->id_front)}}">File</a>
                                                    </div>
                                                    <div>
                                                        NID Back : <a target="_blank" href="{{asset('storage/'.$kyc->id_back)}}">File</a>
                                                    </div>
                                                    <div>
                                                        Address Document : <a target="_blank" href="{{asset('storage/'.$kyc->address_document)}}">File</a>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <!-- /.card-footer -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Verification Status</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <div class="form-horizontal">
                                                <div class="card-body">
                                                    <div>
                                                        Status : {{$kyc->id_status}}
                                                    </div>
                                                    <div class="mt-3 px-5">
                                                        <form action="{{route('kyc.approve',$kyc->id)}}" method="post">
                                                            @csrf

                                                            <input type="hidden" name="method" value="approved">

                                                            <button class="btn btn-info btn-block" type="submit">Approve</button>

                                                        </form>
                                                    </div>
                                                    <div class="mt-3 px-5">
                                                        <form action="{{route('kyc.approve',$kyc->id)}}" method="post">
                                                            @csrf

                                                            <input type="hidden" name="method" value="Declined">

                                                            <button class="btn btn-danger btn-block" type="submit">Decline</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <!-- /.card-footer -->
                                            </div>
                                        </div>
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
