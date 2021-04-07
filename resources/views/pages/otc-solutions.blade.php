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
                        <li>OTC SOLUTIONS</li>
                    </ul>
                    <h2>OTC SOLUTIONS</h2>
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
                    <h2>OTC SOLUTIONS</h2>
                </div> <!-- /.theme-title -->
               <p>ITA facilitates much simpler OTC transactions by utilizing our built in escrow and buffer systems. Both end-user types, seller and buyer, benefit from
			   this as they are both equally protected and can do business knowing their assets are being traded on a tailor made network.</p>

            </div> <!-- /.text -->
{{--            <img src="{{asset('frontend/images/inner-page/1.jpg')}}" alt="" class="float-left">--}}
        </div> <!-- /.top-content -->
    </div> <!-- /.container -->
</div> <!-- /.who-we-are -->


@endsection
