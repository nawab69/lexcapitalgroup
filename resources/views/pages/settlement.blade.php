@extends('layouts.app')

@section('content')

<!--
			=============================================
				Theme Main Banner
			==============================================
			-->
<div class="inner-banner"
     style="background: url(frontend/images/inner-page/banner1.jpg) no-repeat center;
				 background-size: cover;
				 background-attachment: fixed;">
    <div class="opacity">
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <ul>
                        <li><a href="{{url('/')}}" class="tran3s">HOME</a></li>
                        <li><i class="icon flaticon-right"></i></li>
                        <li>SETTLEMENT</li>
                    </ul>
                    <h2>SETTLEMENT</h2>
                </div> <!-- /.title -->
            </div> <!-- /.wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.opacity -->
</div> <!-- /.inner-banner -->


<!--
=============================================
    Who We Are
==============================================
-->
<div class="who-we-are" style="margin-bottom: 50px">
    <div class="container">
        <div class="clearfix top-content">
            <div>
                <div class="theme-title" style="margin-bottom: 30px">
                    <h2>SETTLEMENT</h2>
                </div> <!-- /.theme-title -->
               <p>ITA is proud to be part of a carefully crafted network of liquidity providers, that consists of institutional interest and various exchanges who utilize
			   ITA to settle transactions and trades quickly, safely and effortlessly.</p>
			   <br />
			   <p>With the hard work of our Information Technology specialists and providers, ITA is able to provide institutional clients and verified investors an enclosed environment 
			   where large volume Fiat and digital asset trades can be settled instantly.</p>

            </div> <!-- /.text -->
{{--            <img src="{{asset('frontend/images/inner-page/1.jpg')}}" alt="" class="float-left">--}}
        </div> <!-- /.top-content -->
    </div> <!-- /.container -->
</div> <!-- /.who-we-are -->


@endsection
