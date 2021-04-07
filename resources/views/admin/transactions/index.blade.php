@extends('adminlte::page')

@section('title', 'User List')

@section('content_header')
    <h1>Transactions</h1>
@stop

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container">
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
                <th>Transaction id</th>
                <th>Username</th>
                <th>Transaction Type</th>
                <th>Amount</th>
                <th>status</th>
                <th>Comment</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>

            @foreach($transactions as $tx)
            <tr>
                <td>{{$tx->tx_id}}</td>
                <td>{{$tx->user->username}}</td>
                <td>
                    {{$tx->tx_type}}
                </td>
                <td>{{$tx->amount}}</td>
                <td>{{$tx->status}}</td>
                <td>{{$tx->comment}}</td>
                <td><a href="#" class="btn btn-info"><i class="fa fa-list"></i> </a></td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Transaction id</th>
                <th>Username</th>
                <th>Transaction Type</th>
                <th>Amount</th>
                <th>status</th>
                <th>Comment</th>
                <th>Details</th>
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
