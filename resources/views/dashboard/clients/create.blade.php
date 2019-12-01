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
                    <h1 class="m-0 text-dark">Add New Client</h1>
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <form action="{{ route('clients.store') }}" method="POST" novalidate id="add_client_form">
                {{ csrf_field() }}
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Date of Contract</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'"
                                            data-mask id="date_of_contract" name="date_of_contract" />
                                    </div>
                                    <!-- /.input group -->
                                    <small class="text-danger">{{ $errors->first('date_of_contract') }}</small>
                                </div>
                                <!-- /.form group -->

                            </div>

                            <div class="col-md-6">

                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Date of Termination</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'"
                                            data-mask id="date_of_termination" name="date_of_termination" />
                                    </div>
                                    <!-- /.input group -->
                                    <small class="text-danger">{{ $errors->first('date_of_termination') }}</small>
                                </div>
                                <!-- /.form group -->

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="company_name"
                                        id="company_name" />
                                    <small class="text-danger">{{ $errors->first('company_name') }}</small>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Address</label>
                                    <input type="text" class="form-control" placeholder="Enter ..."
                                        name="company_address" id="company_address" />
                                    <small class="text-danger">{{ $errors->first('company_address') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>BIR TIN Number</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." id="bir_tin_number"
                                        name="bir_tin_number" />
                                    <small class="text-danger">{{ $errors->first('bir_tin_number') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PEZA Number</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." id="peza_number"
                                        name="peza_number" />
                                    <small class="text-danger">{{ $errors->first('peza_number') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Official Company No</label>
                                    <input type="text" class="form-control" placeholder="Enter ..."
                                        id="official_company_no" name="official_company_no" />
                                    <small class="text-danger">{{ $errors->first('official_company_no') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_email">Company Email</label>
                                    <input type="email" class="form-control" id="company_email"
                                        placeholder="Enter email" name="company_email" id="company_email" />
                                    <small class="text-danger">{{ $errors->first('company_email') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card -->

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Contact Person</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i
                                    class="fa fa-remove"></i></button>
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                            <div class="field_wrapper">
                                <a href="javascript:void(0);" class="add_button" title="Add field">Add Fields</a>
                            </div>
                        <!--field_wrapper-->
                    </div>
                </div><!-- /.card -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Contract Rate</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i
                                    class="fa fa-remove"></i></button>
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contract Type</label>
                                    <select class="form-control select2" style="width: 100%;" name="contract_type">
                                        <option selected="selected">--Select Option--</option>
                                        <option value>A</option>
                                        <option>B</option>
                                    </select>
                                    <small class="text-danger">{{ $errors->first('contract_type') }}</small>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Basic Pay</label>
                                    <input type="text" name="basic_pay" id="basic_pay" placeholder="Enter ..."
                                        class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('basic_pay') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Overtime Pay</label>
                                    <input type="text" name="overtime_pay" id="overtime_pay" placeholder="Enter ..."
                                        class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('overtime_pay') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Night Differential Pay</label>
                                    <input type="text" name="night_differential_pay" id="night_differential_pay"
                                        placeholder="Enter ..." class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('night_differential_pay') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>COLA</label>
                                    <input type="text" name="cola" id="cola" placeholder="Enter ..."
                                        class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('cola') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>5 Days Incentive Pay</label>
                                    <input type="text" name="five_days_incentive_pay" id="five_days_incentive_pay"
                                        placeholder="Enter ..." class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('five_days_incentive_pay') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Uniform Allowance</label>
                                    <input type="text" name="uniform_allowance" id="uniform_allowance"
                                        placeholder="Enter ..." class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('uniform_allowance') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>13th Month Pay</label>
                                    <input type="text" name="thth_month_pay" id="thth_month_pay" placeholder="Enter ..."
                                        class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('thth_month_pay') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>SSS Premium</label>
                                    <input type="text" name="sss_premium" id="sss_premium" placeholder="Enter ..."
                                        class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('sss_premium') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PHILHEALTH</label>
                                    <input type="text" name="philhealth" id="philhealth" placeholder="Enter ..."
                                        class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('philhealth') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Insurance Fund</label>
                                    <input type="text" name="insurance_fund" id="insurance_fund" placeholder="Enter ..."
                                        class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('insurance_fund') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pag Ibig Fund</label>
                                    <input type="text" name="pag_ibig_fund" id="pag_ibig_fund" placeholder="Enter ..."
                                        class="form-control money_format">
                                    <small class="text-danger">{{ $errors->first('pag_ibig_fund') }}</small>
                                </div>
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
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Schedule of Cut-off</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'"
                                            data-mask id="schedule_of_cut_off" name="schedule_of_cut_off" />
                                    </div>
                                    <!-- /.input group -->
                                    <small class="text-danger">{{ $errors->first('schedule_of_cut_off') }}</small>
                                </div>
                                <!-- /.form group -->
                            </div>
                            <div class="col-md-6">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Schedule of Payroll</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'"
                                            data-mask id="schedule_of_payroll" name="schedule_of_payroll" />
                                    </div>
                                    <!-- /.input group -->
                                    <small class="text-danger">{{ $errors->first('schedule_of_payroll') }}</small>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
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
<script src="/dist/plugins/jquery-validation/jquery.validate.min.js"></script>
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
<!-- InputMask -->
<script src="/dist/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/dist/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/dist/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- datepicker -->
<script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- Smart Formatter -->
<script type="text/javascript" src="/dist/plugins/jquery_smart_form_formatter/jquery.formatCurrency.js"></script>
<!-- FastClick -->
<script src="/dist/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<script>
    $(function() {
        $('[data-mask]').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' });
        $('.money_format').blur(function() {
            $('.money_format').formatCurrency({
                symbol: ''
            });
        });

            dynimic_more_fix();
            field_validation();
              
    });

    function dynimic_more_fix() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        //var fieldHTML = '<div class="dynamic-more"> <div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Name</label> <input type="text" class="form-control" placeholder="Enter ..." id="name" name="name[]"/> <small class="text-danger">{{$errors->first("name")}}</small> </div></div><div class="col-md-6"> <div class="form-group"> <label>Position</label> <input type="text" class="form-control" placeholder="Enter ..." id="position" name="position[]"/> <small class="text-danger">{{$errors->first("position")}}</small> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Department</label> <input type="text" class="form-control" placeholder="Enter ..." id="department" name="department[]"/> <small class="text-danger">{{$errors->first("department")}}</small> </div></div><div class="col-md-6"> <div class="form-group"> <label>Email Address</label> <input type="text" class="form-control" placeholder="Enter ..." id="email_address" name="email_address[]"/> <small class="text-danger">{{$errors->first("email_address")}}</small> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Contact Number</label> <input type="text" class="form-control" placeholder="Enter ..." id="contact_number" name="contact_number[]"/> <small class="text-danger">{{$errors->first("contact_number")}}</small> </div></div></div><a href="javascript:void(0);" class="remove_button">Remove Fields</a></div>'; //New input field html 
        var x = 0; //Initial field counter is 1


        //Once add button is clicked
        $(addButton).click(function()
        {
            //Check maximum number of input fields
            
            if(x < maxField){

                $(wrapper).append('<div class="dynamic-more"> <div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Name</label> <input type="text" class="form-control contact_person_name" placeholder="Enter ..." id="name" name="contact_person['+ x +'][name]" /> <small class="text-danger">{{$errors->first("name")}}</small> </div></div><div class="col-md-6"> <div class="form-group"> <label>Position</label> <input type="text" class="form-control contact_person_position" placeholder="Enter ..." id="position" name="contact_person['+ x +'][position]"/> <small class="text-danger">{{$errors->first("position")}}</small> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Department</label> <input type="text" class="form-control contact_person_department" placeholder="Enter ..." id="department" name="contact_person['+ x +'][department]"/> <small class="text-danger">{{$errors->first("department")}}</small> </div></div><div class="col-md-6"> <div class="form-group"> <label>Email Address</label> <input type="text" class="form-control contact_person_email" placeholder="Enter ..." id="email_address" name="contact_person['+ x +'][email_address]"/> <small class="text-danger">{{$errors->first("email_address")}}</small> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Contact Number</label> <input type="text" class="form-control contact_person_number" placeholder="Enter ..." id="contact_number" name="contact_person['+ x +'][contact_number]"/> <small class="text-danger">{{$errors->first("contact_number")}}</small> </div></div></div><a href="javascript:void(0);" class="remove_button">Remove Fields</a></div>'); //Add field html
                x++; //Increment field counter
            }

           
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e)
        {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });

    }


    function field_validation() 
    {

        jQuery.validator.addClassRules('contact_person_name', {
            required: true
        });

        jQuery.validator.addClassRules('contact_person_email', {
            required: true,
            email: true
        });

        $('#add_client_form').validate({
            rules: {
                date_of_contract : 'required',
                date_of_termination : 'required',
                company_name : 'required',
                company_address : 'required',
                company_email : {
                    required: true,
                    email: true
                },

            }
        });

    

    }
  

</script>



@stop