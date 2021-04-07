@extends('adminlte::page')

@section('title', 'KYC Verifications')

@section('content_header')
    <h1>KYC Verifications</h1>
@stop

@section('content')



    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="card">
    <div class="card-header">
        <h3 class="card-title">KYC Verifications</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="users" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Status</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>

            @foreach($kycs as $kyc)
            <tr>
                <td>{{$kyc->id}}</td>
                <td>{{$kyc->user->username}}</td>
                <td>{{$kyc->id_status}}</td>
                <td><a href="{{route('kyc.show',$kyc->id)}}" class="btn btn-info"><i class="fa fa-list"></i> </a></td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Status</th>
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
                $('#users').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });

        </script>


@stop
