@extends('layouts.master')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"># {{$client->id}}</h1>
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
        <div class="card">
            <div class="card-header">{{ $client->company_name }}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="date_of_contract">Date of Contract</label>
                        <p>{{ ($client->date_of_contract) ? $client->date_of_contract : 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <label for="date_of_termination">Date of Termination</label>
                        <p>{{ ($client->date_of_termination) ?  $client->date_of_termination : 'N/A' }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="company_address">Company Address</label>
                        <p>{{ ($client->company_address) ?  $client->company_address : 'N/A' }}</p>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="bir_tin_number">Bir Tin Number</label>
                        <p>{{ ($client->bir_tin_number) ?  $client->bir_tin_number : 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <label for="bir_tin_number">Peza Number</label>
                        <p>{{ ($client->peza_number) ?  $client->peza_number : 'N/A' }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="official_company_no">Official Company No.</label>
                        <p>{{ ($client->official_company_no) ?  $client->official_company_no : 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <label for="company_email">Company Email</label>
                        <p>{{ ($client->company_email) ?  $client->company_email : 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>
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



@stop