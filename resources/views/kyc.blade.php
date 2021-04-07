@extends('layouts.app')

@section('style')

    <style>
        a:hover{
            text-decoration: none;
        }
    </style>
@stop

@section('content')

    <x-breadcrumb title="KYC VERIFICATION" name="kyc"/>
    <section>

        <!-- Begin Page Content -->
        <div class="container" style="min-height: 50vh;">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <livewire:kyc />
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

@stop

@section('script')
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbadmin/')}}vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sbadmin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sbadmin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('sbadmin/js/demo/chart-pie-demo.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@stop
