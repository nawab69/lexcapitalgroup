@extends('layouts.app')

@section('content')


    <!--
			=============================================
				Theme Main Banner
			==============================================
			-->
    <div class="inner-banner"
         style="background: url(frontend/images/inner-page/banner3-1.jpg) no-repeat center;
				 background-size: cover;
				 background-attachment: fixed;">
        <div class="opacity">
            <div class="container">
                <div class="wrapper">
                    <div class="title">
                        <ul>
                            <li><a href="{{url('/')}}" class="tran3s">HOME</a></li>
                            <li><i class="icon flaticon-right"></i></li>
                            <li>General Escrow Instructions</li>
                        </ul>
                        <h2>General Escrow Instructions</h2>
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
                        <h2>General Escrow Instructions</h2>
                    </div> <!-- /.theme-title -->
                    {!! settings('privacy') !!}

                </div> <!-- /.text -->
                {{--            <img src="{{asset('frontend/images/inner-page/1.jpg')}}" alt="" class="float-left">--}}
            </div> <!-- /.top-content -->
        </div> <!-- /.container -->
    </div> <!-- /.who-we-are -->


@endsection
