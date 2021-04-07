@extends('layouts.app')

@section('style')
    <!-- Custom styles for this template-->
    <link href="{{asset('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
@stop

@section('content')



<!-- Begin Page Content -->
<div class="container" style="min-height: 50vh;">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Transfer to Escrow</h1>

        </div>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <livewire:send-escrow :btcaddress="auth()->user()->wallet->btc_address" :uid="auth()->user()->id"/>
        </div>
    </div>






{{--    <!-- Content Row -->--}}
{{--    <div class="row">--}}

{{--        <!-- Earnings (Monthly) Card Example -->--}}
{{--        <div class="col-xl-3 col-md-6 mb-4">--}}
{{--            <div class="card border-left-primary shadow h-100 py-2">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row no-gutters align-items-center">--}}
{{--                        <div class="col mr-2">--}}
{{--                            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">BTC Balance</div>--}}
{{--                            <div class="h3 mb-0 font-weight-bold text-gray-800">{{$btc->data->available_balance}} BTC</div>--}}
{{--                        </div>--}}
{{--                        <div class="col-auto">--}}
{{--                            <i class="fas fa-calendar fa-2x text-gray-300"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Earnings (Monthly) Card Example -->--}}
{{--        <div class="col-xl-3 col-md-6 mb-4">--}}
{{--            <div class="card border-left-success shadow h-100 py-2">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row no-gutters align-items-center">--}}
{{--                        <div class="col mr-2">--}}
{{--                            <div class="text-md font-weight-bold text-success text-uppercase mb-1">Escrow</div>--}}
{{--                            <div class="h3 mb-0 font-weight-bold text-gray-800">{{$wallet->escrow}} BTC</div>--}}
{{--                        </div>--}}
{{--                        <div class="col-auto">--}}
{{--                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Earnings (Monthly) Card Example -->--}}
{{--        <div class="col-xl-3 col-md-6 mb-4">--}}
{{--            <div class="card border-left-info shadow h-100 py-2">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row no-gutters align-items-center">--}}
{{--                        <div class="col mr-2">--}}
{{--                            <div class="text-md font-weight-bold text-info text-uppercase mb-1">Verification</div>--}}
{{--                            <div class="row no-gutters align-items-center">--}}
{{--                                <div class="col-auto">--}}
{{--                                    <div class="h3 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <div class="progress progress-sm mr-2">--}}
{{--                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-auto">--}}
{{--                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Pending Requests Card Example -->--}}
{{--        <div class="col-xl-3 col-md-6 mb-4">--}}
{{--            <div class="card border-left-warning shadow h-100 py-2">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row no-gutters align-items-center">--}}
{{--                        <div class="col mr-2">--}}
{{--                            <div class="text-md font-weight-bold text-warning text-uppercase mb-1">Pending Received</div>--}}
{{--                            <div class="h3 mb-0 font-weight-bold text-gray-800">{{$btc->data->pending_received_balance}} BTC</div>--}}
{{--                        </div>--}}
{{--                        <div class="col-auto">--}}
{{--                            <i class="fas fa-comments fa-2x text-gray-300"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="row">--}}
{{--        <!-- Area Chart -->--}}
{{--        <div class="col-xl-12 col-lg-12">--}}
{{--            <!-- DataTales Example -->--}}
{{--            <div class="card shadow mb-4">--}}
{{--                <div class="card-header py-3">--}}
{{--                    <h6 class="m-0 font-weight-bold text-primary h3">ESCROW TRANSACTION HISTORY</h6>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Transaction ID</th>--}}
{{--                                <th>Transaction Type</th>--}}
{{--                                <th>Amount</th>--}}
{{--                                <th>Status</th>--}}
{{--                                <th>Timestamp</th>--}}

{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tfoot>--}}
{{--                            <tr>--}}
{{--                                <th>Transaction ID</th>--}}
{{--                                <th>Transaction Type</th>--}}
{{--                                <th>Amount</th>--}}
{{--                                <th>Status</th>--}}
{{--                                <th>Timestamp</th>--}}
{{--                            </tr>--}}
{{--                            </tfoot>--}}
{{--                            <tbody>--}}

{{--                            @foreach($transactions as $tr)--}}
{{--                            <tr>--}}
{{--                                <td>{{$tr->tx_id}}</td>--}}
{{--                                <td>{{$tr->tx_type}}</td>--}}
{{--                                <td>{{$tr->amount}}</td>--}}
{{--                                <td>{{$tr->status}}</td>--}}
{{--                                <td>{{$tr->created_at}}</td>--}}
{{--                            </tr>--}}

{{--                            @endforeach--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

</div>
<!-- /.container-fluid -->

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
