@extends('adminlte::page')

@section('title', 'User Details - '.$payment->user->username)

@section('content_header')
    <h1>User - {{$payment->user->username}}</h1>
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
                                Update
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Horizontal Form -->
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Edit Titles Positions</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <div class="form-horizontal">
                                                <div class="card-body">

                                                    <form action="{{route('payment.update',$payment->id)}}" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <div class="form-group row">
                                                            <label for="date" class="col-sm-4 col-form-label">Date</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" name="date"  style="height: 35px;font-size: 16px" class="form-control" id="date" placeholder="Date" value="{{$payment->date}}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="amount" class="col-sm-4 col-form-label">Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" step=".01" name="amount"  style="height: 35px;font-size: 16px" class="form-control" id="amount" placeholder="Amount" value="{{$payment->amount}}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="status" class="col-sm-4 col-form-label">Payment Status</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="status"  style="height: 35px;font-size: 16px" class="form-control" id="status" placeholder="Payment Status" value="{{$payment->status}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="notes" class="col-sm-4 col-form-label">Payment Note</label>
                                                            <div class="col-sm-8">
                                                                <textarea name="notes"  style="font-size: 16px" class="form-control" id="notes" placeholder="Payment Notes">{{$payment->notes}}</textarea>
                                                            </div>
                                                        </div>


                                                        <button type="submit" style="height: 35px;font-size: 16px" class="btn btn-info mr-5">Update</button>
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
