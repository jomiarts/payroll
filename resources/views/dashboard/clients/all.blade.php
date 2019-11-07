@extends('layouts.master')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Clients</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        @if(count($clients) > 0)
        <div class="card">
            <div class="card-header">
                <a href="#"><button class="btn btn-primary">Add New</button></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="client_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Client ID</th>
                                <th>Company name</th>
                                <th>Date of Contract</th>
                                <th>Date of Termination</th>
                                <th>Company Email</th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach($clients as $client)
                            <tr>
                                <td>{{$client->id}}</td>
                                <td><a href="/dashboard/clients/{{$client->id}}">{{$client->company_name}}</a></td>
                                <td>{{$client->date_of_contract}}</td>
                                <td>{{$client->date_of_termination}}</td>
                                <td>{{$client->company_email}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Client ID</th>
                                <th>Company name</th>
                                <th>Date of Contract</th>
                                <th>Date of Termination</th>
                                <th>Company Address</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        @else
        <p>No Records</p>
        @endif
    </section>
    <!-- / Main content -->

</div>

@endsection()


@section('javascript')
<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/dist/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/dist/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/dist/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<!--Datatables-->
<script src="/dist/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/dist/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $('#client_table').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

</script>

@stop