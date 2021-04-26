@extends('layouts.app')

@section('style')
    <!-- Custom styles for this page -->
    <link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css')}}" rel="stylesheet">

    <style>
        a:hover{
            text-decoration: none;
        }
    </style>
@stop

@section('content')

<x-breadcrumb title="Dashboard" name="Dashboard"/>

    <section class="blog__area pt-120 pb-120">
        <!-- Begin Page Content -->
        <div class="container">
            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-primary text-uppercase mb-1">BTC Balance</div>
                                    <div id="btc_amount" class="h3 mb-0 font-weight-bold text-gray-800">{{$btc->data->available_balance}} BTC</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-money fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-info text-uppercase mb-1">Current BTC Rate</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800">{{$price}} USD</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-warning text-uppercase mb-1">Pending Received</div>
                                    <div id="pending_amount" class="h3 mb-0 font-weight-bold text-gray-800">{{$btc->data->pending_received_balance}} BTC</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="{{url('send-btc')}}" class="d-block btn btn-block p-0 border-0">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <div class="h5">
                                    SEND BTC
                                </div>
                                <div class="text-white-50 small">{{$btc->data->available_balance}} BTC available</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="{{url('deposit')}}" class="d-block btn btn-block p-0 border-0">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            <div class="h5">
                                RECEIVE BTC
                            </div>
                            <div class="text-white-50 small">Click Here to get Your deposit Address</div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="https://sochain.com/address/BTC/{{auth()->user()->wallet->btc_address}}" class="d-block btn btn-block p-0 border-0">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            <div class="h5">
                               TRANSACTION HISTORY
                            </div>
                            <div class="text-white-50 small">All transaction of your wallet</div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="{{url('kyc')}}" class="d-block btn btn-block p-0 border-0">
                    <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                            <div class="h5">
                                KYC Verification
                            </div>
                            <div class="text-white-50 small">Verify your account from here</div>
                        </div>
                    </div>
                    </a>
                </div>

            </div>




                <!-- Content Row -->

            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary h3">RECEIVE HISTORY</h6>
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
                                        <th>Timestamp</th>
                                        <th>Comment</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Sender</th>
                                        <th>Recipient</th>
                                        <th>Confirmation</th>
                                        <th>Total Amount</th>
                                        <th>Timestamp</th>
                                        <th>Comment</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($receive_items as $key => $sent)
                                        <tr>
                                            <td>{{$sent->txid}}</td>
                                            <td>{{$sent->senders[0]}}</td>
                                            <td>{{$sent->amounts_received[0]->recipient}}</td>
                                            <td>{{$sent->confirmations}}</td>
                                            <td>{{$sent->amounts_received[0]->amount}}</td>
                                            <td>{{\Carbon\Carbon::parse($sent->time)}}</td>
                                            <td>{{$sent->comment}}</td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary h3">SENT HISTORY</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Sender</th>
                                        <th>Recipient</th>
                                        <th>Confirmation</th>
                                        <th>Total Amount</th>
                                        <th>Sent Amount</th>
                                        <th>Timestamp</th>
                                        <th>Comment</th>

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
                                        <th>Comment</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($sent_items as $key => $sent)
                                        <tr>
                                            <td>{{$sent->txid}}</td>
                                            <td>{{$user->wallet->btc_address}}</td>
                                            <td>{{$sent->amounts_sent[0]->recipient}}</td>
                                            <td>{{$sent->confirmations}}</td>
                                            <td>{{$sent->total_amount_sent}}</td>
                                            <td>{{$sent->amounts_sent[0]->amount}}</td>
                                            <td>{{\Carbon\Carbon::parse($sent->time)}}</td>
                                            <td>{{$sent->comment}}</td>

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
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");

        let btc_amount = parseFloat(document.getElementById("btc_amount").textContent);
        let escrow_amount = parseFloat(document.getElementById("escrow_amount").textContent);
        let pending_amount = parseFloat(document.getElementById("pending_amount").textContent);

        console.log(btc_amount);
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Main", "Escrow", "Pending"],
                datasets: [{
                    data: [btc_amount, escrow_amount, pending_amount],
                    backgroundColor: ['#4e73df', '#1cc88a', '#f3f222'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#ff9922'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: true,
                    caretPadding: 10,
                },
                legend: {
                    display: true
                },
                cutoutPercentage: 80,
            },
        });




    </script>
    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendor/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

    <script>
        $(document).ready(function() {

            const rule = {
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,

            };

            $('#dataTable').DataTable(rule);
            $('#dataTable2').DataTable(rule);
            $('#dataTable3').DataTable(rule);
        });
    </script>


@stop
