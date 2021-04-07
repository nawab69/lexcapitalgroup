@extends('layouts.app')

@section('style')
    <!-- Custom styles for this page -->
    <link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <style>
        a:hover{
            text-decoration: none;
        }
    </style>
@stop

@section('content')
    <x-breadcrumb title="Send BTC" name="Send BTC"/>
    <section>

        <!-- Begin Page Content -->
        <div class="container" style="min-height: 50vh;">


            <div class="row my-auto pt-5">
                <div class="col-md-6 mx-auto">
                    <livewire:send-btc :btcaddress="auth()->user()->wallet->btc_address"/>
                </div>
            </div>



            <div class="row pt-5">
                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary h3">SENT HISTORY</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Sender</th>
                                        <th>Recipient</th>
                                        <th>Confirmation</th>
                                        <th>Total Amount</th>
                                        <th>Sent Amount</th>
                                        <th>Timestamp</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Sender</th>
                                        <th>Recipient</th>
                                        <th>Confirmation</th>
                                        <th>Total Amount</th>
                                        <th>Sent Amount</th>
                                        <th>Timestamp</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($sents->data->txs as $sent)
                                    <tr>
                                        <td>{{$sent->txid}}</td>
                                        <td>{{$wallet->btc_address}}</td>
                                        <td>{{$sent->amounts_sent[0]->recipient}}</td>
                                        <td>{{$sent->confirmations}}</td>
                                        <td>{{$sent->total_amount_sent}}</td>
                                        <td>{{$sent->amounts_sent[0]->amount}}</td>
                                        <td>{{\Carbon\Carbon::parse($sent->time)}}</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
