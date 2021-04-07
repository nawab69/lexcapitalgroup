@extends('adminlte::page')

@section('title', 'Escrow')

@section('content_header')
    <h1>Escrow</h1>
@stop

@section('content')



    <!-- Main content -->
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-12">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                Escrow Details
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
{{--                                    <div class="col-12">--}}
{{--                                        <h2 class="lead text-xl"><b>{{$user->first_name.' '.$user->last_name}}</b></h2>--}}
{{--                                        <p class="text-muted text-lg"><b>Username </b> {{$user->username}} </p>--}}
{{--                                        <ul class="ml-4 mb-0 fa-ul text-muted">--}}
{{--                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <span class="flex justify-content-between">  <strong>Address: </strong> {{$user->kyc->address_1}}, {{$user->kyc->city}} {{$user->kyc->post_code}}, {{$user->kyc->state ?? ''}} {{$user->kyc->country}}</li>--}}
{{--                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <strong>Second Address:</strong> {{$user->kyc->address_2}}</li>--}}
{{--                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span><strong> Phone #:</strong> {{$user->phone}}</li>--}}
{{--                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> <strong>Email :</strong> {{$user->email}}</li>--}}
{{--                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-coins"></i></span> <strong>BTC Address :</strong> {{$user->wallet->btc_address}} </li>--}}
{{--                                        </ul>--}}
{{--                                        <hr>--}}
{{--                                    </div>--}}
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info"><i class="fa fa-university"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Total BTC in Escrow</span>
                                                <span class="info-box-number">{{$arr}} BTC</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box bg-gradient-info">
                                            <span class="info-box-icon bg-white"><i class="fa fa-university"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Available BTC in Wallet</span>
                                                <span class="info-box-number">{{$balance['data']->available_balance}} BTC</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
{{--                                        <livewire:send-btc :btcaddress="settings('admin_wallet')"/>--}}
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="card card-danger">
                                            <div class="card-header">
                                                <h3 class="card-title">Pending Escrow Withdraw Request</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <div class="form-horizontal">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Transactions</h3>
                                                                </div>
                                                                <!-- /.card-header -->
                                                                <div class="card-body">
                                                                    <table id="trx" class="table table-bordered table-striped">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Username</th>
                                                                            <th>Withdraw Amount</th>
                                                                            <th>Fee</th>
                                                                            <th>Total Amount</th>
                                                                            <th>status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        @foreach($withdraws as $withdraw)
                                                                            <tr>
                                                                                <td>{{$withdraw->id}}</td>
                                                                                <td>{{$withdraw->user->username}}</td>
                                                                                <td>
                                                                                    {{$withdraw->amount}}
                                                                                </td>
                                                                                <td>{{$withdraw->fee}}</td>
                                                                                <td>{{$withdraw->total}}</td>
                                                                                <td>{{$withdraw->status}}</td>
                                                                                <td>
                                                                                    <form action="{{route('admin.withdraw',$withdraw->id)}}" method="post">
                                                                                        @csrf
                                                                                        <button type="submit" class="btn btn-success"> Approve </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                        <tfoot>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Username</th>
                                                                            <th>Withdraw Amount</th>
                                                                            <th>Fee</th>
                                                                            <th>Total Amount</th>
                                                                            <th>status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>
                                                            <!-- /.card -->

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <!-- /.card-footer -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
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


@section('js')
    <script>

        $(document).ready(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#trx').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,

            });
        });

    </script>


@stop

