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
        <a href="/dashboard/clients/{{$client->id}}/edit"><button class="btn btn-primary">Edit</button></a>
        <a href="#"><button class="btn btn-danger">Delete</button></a>
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Client</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>Date of Contract</label>
                        <p>{{ ($client->date_of_contract) ? $client->date_of_contract : 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <label>Date of Termination</label>
                        <p>{{ ($client->date_of_termination) ?  $client->date_of_termination : 'N/A' }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Company Name</label>
                        <p>{{ ($client->company_name) ? $client->company_name : 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
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
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Contact Person</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="client_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($client_contact_persons as $client_contact_person)
                            <tr>
                                <td>{{$client_contact_person->name}}</td>
                                <td>{{$client_contact_person->position}}</td>
                                <td>{{$client_contact_person->department}}</td>
                                <td>{{$client_contact_person->email}}</td>
                                <td>{{$client_contact_person->contact_number}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Contract Rate</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>Contract Type</label>
                        <p>{{ ($client_contract_rates->contract_rate_type) ?  $client_contract_rates->contract_rate_type : 'N/A' }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label>Basic Pay</label>
                        <p>{{ ($client_contract_rates->basic_pay) ?  number_format($client_contract_rates->basic_pay, 2) : 'N/A' }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Overtime Pay</label>
                        <p>{{ ($client_contract_rates->overtime_pay) ?  number_format($client_contract_rates->overtime_pay, 2) : 'N/A' }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label>Night Differential Pay</label>
                        <p>{{ ($client_contract_rates->night_differential_pay) ?  number_format($client_contract_rates->night_differential_pay, 2) : 'N/A' }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>COLA</label>
                        <p>{{ ($client_contract_rates->cola) ?  number_format($client_contract_rates->cola, 2) : 'N/A' }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label>5 Days Incentive Pay</label>
                        <p>{{ ($client_contract_rates->five_days_incentive_pay) ?  number_format($client_contract_rates->five_days_incentive_pay, 2) : 'N/A' }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Uniform Allowance</label>
                        <p>{{ ($client_contract_rates->uniform_allowance) ?  number_format($client_contract_rates->uniform_allowance, 2) : 'N/A' }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label>13th Month Pay</label>
                        <p>{{ ($client_contract_rates->thirteen_month_pay) ?  number_format($client_contract_rates->thirteen_month_pay, 2) : 'N/A' }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>SSS Premium</label>
                        <p>{{ ($client_contract_rates->sss_premium) ?  number_format($client_contract_rates->sss_premium, 2) : 'N/A' }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label>PHILHEALTH</label>
                        <p>{{ ($client_contract_rates->philhealth) ?  number_format($client_contract_rates->philhealth, 2) : 'N/A' }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Insurance Fund</label>
                        <p>{{ ($client_contract_rates->insurance_fund) ?  number_format($client_contract_rates->insurance_fund, 2) : 'N/A' }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label>Pag Ibig Fund</label>
                        <p>{{ ($client_contract_rates->pag_ibig_fund) ?  number_format($client_contract_rates->pag_ibig_fund, 2) : 'N/A' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Payroll Details</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>Schedule of Cut-off</label>
                        <p>{{ ($client->schedule_of_cut_off) ?  $client->schedule_of_cut_off : 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <label>Schedule of Payroll</label>
                        <p>{{ ($client->schedule_of_payroll) ?  $client->schedule_of_payroll : 'N/A' }}</p>
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