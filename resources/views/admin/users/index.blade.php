@extends('adminlte::page')

@section('title', 'User List')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')



    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="card">
    <div class="card-header">
        <h3 class="card-title">Users</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="users" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>On Escrow</th>
                <th>Status</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>
                    {{$user->first_name}}
                </td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                @if($user->wallet)
                <td>{{round( $user->wallet->escrow, 8, PHP_ROUND_HALF_DOWN)}}</td>
                @else
                <td>0</td>
                @endif
            
                <td>{{$user->status}}</td>
                <td><a href="{{route('users.show',$user->id)}}" class="btn btn-info"><i class="fa fa-list"></i> </a></td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>On Escrow</th>
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
