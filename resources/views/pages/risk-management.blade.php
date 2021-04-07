@extends('layouts.app')

@section('content')

<!--
			=============================================
				Theme Main Banner
			==============================================
			-->
<div class="inner-banner"
     style="background: url(frontend/images/inner-page/banner1-1.jpg) no-repeat center;
				 background-size: cover;
				 background-attachment: fixed;">
    <div class="opacity">
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <ul>
                        <li><a href="{{url('/')}}" class="tran3s">HOME</a></li>
                        <li><i class="icon flaticon-right"></i></li>
                        <li>RISK MANAGEMENT</li>
                    </ul>
                    <h2>RISK MANAGEMENT</h2>
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
                    <h2>RISK MANAGEMENT</h2>
                </div> <!-- /.theme-title -->
               <p>ITA operates strict financial industry standard compliance with all our clients and their end-users. Transparency, integrity and unfaltering trust is thus
			   established and maintained throughout our business operations.</p>
			   <br />
			   <p>We are also able to extend the same compliance tools and solutions to all of our clients, whether they are individual brokers, broker firms, exchanges and even ICOs.
			   ITA’s internal network of business partners and advanced strides in Information Technology provides reliability and security for investors of ICOs. They deposit
			   their funds or digital assets with ITA and entrust us with its custody until preset ICO roadmap goals have been met.</p>
			   <br />
			   <p>ICOs themselves are able to utilize the same secure internal network to manage their own exchange risk and liquidate their digital assets into Fiat at their
			   discretion on a day-to-day basis. ITA provides these services via partner companies and institutional entities who participate in the settlement and clearing process.</p>

            </div> <!-- /.text -->
{{--            <img src="{{asset('frontend/images/inner-page/1.jpg')}}" alt="" class="float-left">--}}
        </div> <!-- /.top-content -->
    </div> <!-- /.container -->
</div> <!-- /.who-we-are -->


@endsection
