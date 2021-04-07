@extends('adminlte::page')

@section('title', 'Faq Page')

@section('content_header')
    <h1>Faq Page</h1>
@stop

@section('content')



    <!-- Main content -->
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-8">
                        <div class="card bg-light">

                            <div class="card-body pt-0">

                                <livewire:faq />

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
