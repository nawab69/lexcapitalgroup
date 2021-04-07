@extends('layouts.app')

@section('content')

    <x-breadcrumb title="Terms and Conditions" name="Terms and Conditions"/>

<div class="who-we-are" style="margin-bottom: 50px; margin-top: 50px">
    <div class="container">
        <div class="clearfix top-content">
            <div>
                <div class="theme-title" style="margin-bottom: 30px">
                    <h2>TERMS AND CONDITIONS</h2>
                </div> <!-- /.theme-title -->
               {!! settings('terms') !!}

            </div> <!-- /.text -->
{{--            <img src="{{asset('frontend/images/inner-page/1.jpg')}}" alt="" class="float-left">--}}
        </div> <!-- /.top-content -->
    </div> <!-- /.container -->
</div> <!-- /.who-we-are -->


@endsection
