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
                        <li>CUSTODY</li>
                    </ul>
                    <h2>CUSTODY</h2>
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
                    <h2>CUSTODY</h2>
                </div> <!-- /.theme-title -->
               <p>ITA is a custodian first and foremost. As such, we specialize in custodial services for both Fiat and various digital assets and cryptocurrencies. 
			   We operate on a secure and isolated network which allows us to ensure asset security and transparency for all involved parties.</p>
			   <br />
			   <p>Our services allow exchanges to operate smoothly and with plenty of buffers that let them move both their Fiat and digital assets to secure and trusted
			   third parties, who can increase an exchange’s credit and smooth out daily operations and transfers. ITA is proud to provide G10 Fiat currency transfer solutions
			   that provide safety and reduce FX risk, while at the same time allowing their clients to trade in the root currency their clients wish to use.</p>
			   <br />
			   <p>Likewise, when it comes to Brokers, ITA end-of-chain users have full control over their FIAT deposits in a wide range of currencies and supports multi-broker teams 
			   in the same unified environment. This allows the digital wallet they use to be associated with brokers who receive credit from ITA to trade with on behalf of end-users, 
			   while we maintain a watchful eye over the original assets and update the credit flow on a day-to-day basis.</p>

            </div> <!-- /.text -->
{{--            <img src="{{asset('frontend/images/inner-page/1.jpg')}}" alt="" class="float-left">--}}
        </div> <!-- /.top-content -->
    </div> <!-- /.container -->
</div> <!-- /.who-we-are -->


@endsection
