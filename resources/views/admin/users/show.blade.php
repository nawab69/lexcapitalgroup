@extends('adminlte::page')

@section('title', 'User Details - '.$user->username)

@section('content_header')
    <h1>User - {{$user->username}}</h1>
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
                                Details
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="lead text-xl"><b>{{$user->first_name.' '.$user->last_name}}</b></h2>
                                        <p class="text-muted text-lg"><b>Username </b> {{$user->username}} </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <span class="flex justify-content-between">  <strong>Address: </strong> {{$user->kyc->address_1}}, {{$user->kyc->city}} {{$user->kyc->post_code}}, {{$user->kyc->state ?? ''}} {{$user->kyc->country}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <strong>Second Address:</strong> {{$user->kyc->address_2}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span><strong> Phone #:</strong> {{$user->phone}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> <strong>Email :</strong> {{$user->email}}</li>
                                            <li class="text-md mb-3"><span class="fa-li"><i class="fas fa-lg fa-coins"></i></span> <strong>BTC Address :</strong> {{$user->wallet->btc_address}} </li>
                                        </ul>
                                        <hr>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="info-box bg-gradient-info">
                                            <span class="info-box-icon bg-white"><i class="fa fa-university"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Total BTC in Wallet</span>
                                                <span class="info-box-number">{{$balance['data']->available_balance}} BTC</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <livewire:send-btc :btcaddress="$user->wallet->btc_address"/>
                                    </div>

                                    <div class="col-md-12">
                                        <!-- Horizontal Form -->
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Create Titles Positions</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <div class="form-horizontal">
                                                <div class="card-body">

                                                    <form action="{{route('payment.add',$user->id)}}" method="post">
                                                        @csrf

                                                        <div class="form-group row">
                                                            <label for="date" class="col-sm-4 col-form-label">Date</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="date"  style="height: 35px;font-size: 16px" class="form-control" id="date" placeholder="Date">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="amount" class="col-sm-4 col-form-label">Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" step=".01" name="amount"  style="height: 35px;font-size: 16px" class="form-control" id="amount" placeholder="Amount">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="status" class="col-sm-4 col-form-label">Payment Status</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="status"  style="height: 35px;font-size: 16px" class="form-control" id="status" placeholder="Payment Status">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="notes" class="col-sm-4 col-form-label">Payment Note</label>
                                                            <div class="col-sm-8">
                                                                <textarea name="notes"  style="font-size: 16px" class="form-control" id="notes" placeholder="Payment Notes"></textarea>
                                                            </div>
                                                        </div>


                                                        <button type="submit" style="height: 35px;font-size: 16px" class="btn btn-info mr-5">Create</button>
                                                    </form>



                                                </div>
                                                <!-- /.card-body -->
                                                <!-- /.card-footer -->
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
                                            <th>Action</th>
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
                                            <th>Action</th>
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
                                                <td><form action="{{route('users.comment',$user->id)}}" method="post">
                                                        @csrf
                                                        <input class="form-control mb-1" type="text" placeholder="comment" value="{{$sent->comment}}" name="comment" />
                                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                                        <input type="hidden" name="tx_id" value="{{$sent->txid}}">
                                                        <button type="submit" class="btn btn-primary">Update Comment</button>
                                                    </form>
                                                </td>
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
                                            <th>Action</th>
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
                                            <th>Action</th>
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
                                                <td><form action="{{route('users.comment',$user->id)}}" method="post">
                                                        @csrf
                                                        <input class="form-control mb-1" type="text" placeholder="comment" value="{{$sent->comment}}" name="comment" />
                                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                                        <input type="hidden" name="tx_id" value="{{$sent->txid}}">
                                                        <button type="submit" class="btn btn-primary">Update Comment</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-12">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary h3">Titles Positions</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Payment Status</th>
                                            <th>Payments Note</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Payment Status</th>
                                            <th>Payments Note</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        @foreach($user->payments as $key => $payment)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$payment->date}}</td>
                                                <td>${{$payment->amount}}</td>
                                                <td>{{$payment->status}}</td>
                                                <td>{{$payment->notes}}</td>
                                                <td>
                                                    <a class="btn btn-info" href="{{route('payment.edit',$payment->id)}}">Edit</a>
                                                    <form action="{{route('payment.delete',$payment->id)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="Submit" class="btn btn-danger">
                                                            DELETE
                                                        </button>
                                                    </form>
                                                </td>
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
        </div>
    </section>




@stop

{{--@section('css')--}}

{{--@stop--}}

@section('js')

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
