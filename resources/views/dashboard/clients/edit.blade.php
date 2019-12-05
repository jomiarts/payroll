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
                    <h1 class="m-0 text-dark">{{__('Edit Client')}}</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('Dashboard')}}</li>
                        <li class="breadcrumb-item">{{__('Client')}}</li>
                        <li class="breadcrumb-item">{{__('Edit')}}</li>
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
            <form action="{{ route('clients.update', $client->id) }}" method="POST" id="add_client_form">
                @method('PATCH')
                @csrf
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
                                            data-mask id="date_of_contract" name="date_of_contract"
                                            value="{{$client->date_of_contract}}" />
                                    </div>
                                    <!-- /.input group -->
                                    <small class="text-danger">{{ $errors->first('date_of_contract') }}</small>
                                </div>
                                <!-- /.form group -->

                            </div>

                            <div class="col-md-6">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>{{__('Date of Termination')}}</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'"
                                            data-mask id="date_of_termination" name="date_of_termination"
                                            value="{{$client->date_of_termination}}" />
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
                                    <label>{{__('Company Name')}}</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="company_name"
                                        id="company_name" value="{{$client->company_name}}" />
                                    <small class="text-danger">{{ $errors->first('company_name') }}</small>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Company Address')}}</label>
                                    <input type="text" class="form-control" placeholder="Enter ..."
                                        name="company_address" id="company_address"
                                        value="{{$client->company_address}}" />
                                    <small class="text-danger">{{ $errors->first('company_address') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('BIR TIN Number')}}</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." id="bir_tin_number"
                                        name="bir_tin_number" value="{{$client->bir_tin_number}}" />
                                    <small class="text-danger">{{ $errors->first('bir_tin_number') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('PEZA Number')}}</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." id="peza_number"
                                        name="peza_number" value="{{$client->peza_number}}" />
                                    <small class="text-danger">{{ $errors->first('peza_number') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Official Company No')}}</label>
                                    <input type="text" class="form-control" placeholder="Enter ..."
                                        id="official_company_no" name="official_company_no"
                                        value="{{$client->official_company_no}}" />
                                    <small class="text-danger">{{ $errors->first('official_company_no') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_email">{{__('Company Email')}}</label>
                                    <input type="email" class="form-control" id="company_email"
                                        placeholder="Enter email" name="company_email"
                                        value="{{$client->company_email}}" />
                                    <small class="text-danger">{{ $errors->first('company_email') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card -->

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Contact Person')}}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i
                                    class="fa fa-remove"></i></button>
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="field_wrapper">
                            <div class="add-field-container">
                                <a href="javascript:void(0);" class="add_button" title="Add field">Add Fields</a>
                            </div>
                            @if(count($client_contact_persons) >= 1)
                            @php($x=0)
                            @foreach($client_contact_persons as $client_contact_person)
                            <div class="dynamic-more">
                                <input type="hidden" name="contact_person[{{$x}}][client_contact_person_id]"
                                    value="{{$client_contact_person->id}}" id="client_contact_person_id"
                                    class="client_contact_person_id" />

                                <input type="hidden" name="contact_person[{{$x}}][client_contact_person_status]"
                                    value="0" id="client_contact_person_status" class="client_contact_person_status" />

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('Name')}}</label>
                                            <input type="text" class="form-control contact_person_name"
                                                placeholder="Enter ..." id="name" name="contact_person[{{$x}}][name]"
                                                value="{{$client_contact_person->name}}" /> <small
                                                class="text-danger">{{$errors->first("name")}}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('Position')}}</label>
                                            <input type="text" class="form-control contact_person_position"
                                                placeholder="Enter ..." id="position"
                                                name="contact_person[{{$x}}][position]"
                                                value="{{$client_contact_person->position}}" /> <small
                                                class="text-danger">{{$errors->first("position")}}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('Department')}}</label>
                                            <input type="text" class="form-control contact_person_department"
                                                placeholder="Enter ..." id="department"
                                                name="contact_person[{{$x}}][department]"
                                                value="{{$client_contact_person->department}}" /> <small
                                                class="text-danger">{{$errors->first("department")}}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('Email Address')}}</label>
                                            <input type="text" class="form-control contact_person_email"
                                                placeholder="Enter ..." id="email_address"
                                                name="contact_person[{{$x}}][email_address]"
                                                value="{{$client_contact_person->email}}" /> <small
                                                class="text-danger">{{$errors->first("email_address")}}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('Contact Number')}}</label>
                                            <input type="text" class="form-control contact_person_number"
                                                placeholder="Enter ..." id="contact_number"
                                                name="contact_person[{{$x}}][contact_number]"
                                                value="{{$client_contact_person->contact_number}}" /> <small
                                                class="text-danger">{{$errors->first("contact_number")}}</small>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="remove_button">{{__('Remove Fields')}}</a>
                            </div>
                            @php($x++)
                            @endforeach
                            @endif
                        </div>
                        <!--field_wrapper-->
                    </div>
                </div><!-- /.card -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Contract Rate')}}</h3>
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
                                    <label>{{__('Contract Type')}}</label>
                                    <select class="form-control select2" style="width: 100%;" name="contract_type">
                                        <option selected="selected" value=""
                                            {{ ($client_contract_rates->contract_rate_type == '') ? 'selected="selected"' : '' }}>
                                            {{__('--Select Option--')}}</option>
                                        <option value="A"
                                            {{ ($client_contract_rates->contract_rate_type == 'A') ? 'selected="selected"' : '' }}>
                                            {{'A'}}</option>
                                        <option value="B"
                                            {{ ($client_contract_rates->contract_rate_type == 'B') ? 'selected="selected"' : '' }}>
                                            {{'B'}}</option>
                                    </select>
                                    <small class="text-danger">{{ $errors->first('contract_type') }}</small>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Basic Pay')}}</label>
                                    <input type="text" name="basic_pay" id="basic_pay" placeholder="Enter ..."
                                        class="form-control money_format"
                                        value="{{ $client_contract_rates->basic_pay }}" />
                                    <small class="text-danger">{{ $errors->first('basic_pay') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Overtime Pay')}}</label>
                                    <input type="text" name="overtime_pay" id="overtime_pay" placeholder="Enter ..."
                                        class="form-control money_format"
                                        value="{{ $client_contract_rates->overtime_pay }}">
                                    <small class="text-danger">{{ $errors->first('overtime_pay') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Night Differential Pay')}}</label>
                                    <input type="text" name="night_differential_pay" id="night_differential_pay"
                                        placeholder="Enter ..." class="form-control money_format"
                                        value="{{ $client_contract_rates->night_differential_pay }}" />
                                    <small class="text-danger">{{ $errors->first('night_differential_pay') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('COLA')}}</label>
                                    <input type="text" name="cola" id="cola" placeholder="Enter ..."
                                        class="form-control money_format" value="{{ $client_contract_rates->cola }}" />
                                    <small class="text-danger">{{ $errors->first('cola') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('5 Days Incentive Pay')}}</label>
                                    <input type="text" name="five_days_incentive_pay" id="five_days_incentive_pay"
                                        placeholder="Enter ..." class="form-control money_format"
                                        value="{{ $client_contract_rates->five_days_incentive_pay }}" />
                                    <small class="text-danger">{{ $errors->first('five_days_incentive_pay') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Uniform Allowance')}}</label>
                                    <input type="text" name="uniform_allowance" id="uniform_allowance"
                                        placeholder="Enter ..." class="form-control money_format"
                                        value="{{ $client_contract_rates->uniform_allowance }}" />
                                    <small class="text-danger">{{ $errors->first('uniform_allowance') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('13th Month Pay')}}</label>
                                    <input type="text" name="thth_month_pay" id="thth_month_pay" placeholder="Enter ..."
                                        class="form-control money_format"
                                        value="{{ $client_contract_rates->thirteen_month_pay }}" />
                                    <small class="text-danger">{{ $errors->first('thth_month_pay') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('SSS Premium')}}</label>
                                    <input type="text" name="sss_premium" id="sss_premium" placeholder="Enter ..."
                                        class="form-control money_format"
                                        value="{{ $client_contract_rates->sss_premium }}" />
                                    <small class="text-danger">{{ $errors->first('sss_premium') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('PHILHEALTH')}}</label>
                                    <input type="text" name="philhealth" id="philhealth" placeholder="Enter ..."
                                        class="form-control money_format"
                                        value="{{ $client_contract_rates->philhealth }}" />
                                    <small class="text-danger">{{ $errors->first('philhealth') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Insurance Fund')}}</label>
                                    <input type="text" name="insurance_fund" id="insurance_fund" placeholder="Enter ..."
                                        class="form-control money_format"
                                        value="{{ $client_contract_rates->insurance_fund }}" />
                                    <small class="text-danger">{{ $errors->first('insurance_fund') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Pag Ibig Fund')}}</label>
                                    <input type="text" name="pag_ibig_fund" id="pag_ibig_fund" placeholder="Enter ..."
                                        class="form-control money_format"
                                        value="{{ $client_contract_rates->pag_ibig_fund }}" />
                                    <small class="text-danger">{{ $errors->first('pag_ibig_fund') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Payroll Details')}}</h3>
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
                                    <label>{{__('Schedule of Cut-off')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'"
                                            data-mask id="schedule_of_cut_off" name="schedule_of_cut_off"
                                            value="{{ $client->schedule_of_cut_off }}" />
                                    </div>
                                    <!-- /.input group -->
                                    <small class="text-danger">{{ $errors->first('schedule_of_cut_off') }}</small>
                                </div>
                                <!-- /.form group -->
                            </div>
                            <div class="col-md-6">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>{{__('Schedule of Payroll')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'"
                                            data-mask id="schedule_of_payroll" name="schedule_of_payroll"
                                            value="{{ $client->schedule_of_payroll }}" />
                                    </div>
                                    <!-- /.input group -->
                                    <small class="text-danger">{{ $errors->first('schedule_of_payroll') }}</small>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-submit-container">
                    <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                </div>
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
    $(function() 
    {
        $('[data-mask]').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' });
        dynimic_more_fix();
        field_validation();  
    });

    function dynimic_more_fix() 
    {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        @if(count($client_contact_persons) >= 1)
            var x = {{$contact_persons_last_index}}0;
        @else
            var x = 0;
        @endif

        //Once add button is clicked
        $(addButton).click(function()
        {
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                @if(count($client_contact_persons) >= 1)
                    $(wrapper).append('<div class="dynamic-more"><input type="hidden" name="contact_person['+x+'][client_contact_person_id]" value="{{$client_contact_person->id}}" id="client_contact_person_id" class="client_contact_person_id" /><input type="hidden" name="contact_person['+x+'][client_contact_person_status]" value="1" id="client_contact_person_status" class="client_contact_person_status" /><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Name</label> <input type="text" class="form-control contact_person_name" placeholder="Enter ..." id="name" name="contact_person['+ x +'][name]" /> <small class="text-danger">{{$errors->first("name")}}</small> </div></div><div class="col-md-6"> <div class="form-group"> <label>Position</label> <input type="text" class="form-control contact_person_position" placeholder="Enter ..." id="position" name="contact_person['+ x +'][position]"/> <small class="text-danger">{{$errors->first("position")}}</small> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Department</label> <input type="text" class="form-control contact_person_department" placeholder="Enter ..." id="department" name="contact_person['+ x +'][department]"/> <small class="text-danger">{{$errors->first("department")}}</small> </div></div><div class="col-md-6"> <div class="form-group"> <label>Email Address</label> <input type="text" class="form-control contact_person_email" placeholder="Enter ..." id="email_address" name="contact_person['+ x +'][email_address]"/> <small class="text-danger">{{$errors->first("email_address")}}</small> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Contact Number</label> <input type="text" class="form-control contact_person_number" placeholder="Enter ..." id="contact_number" name="contact_person['+ x +'][contact_number]"/> <small class="text-danger">{{$errors->first("contact_number")}}</small> </div></div></div><a href="javascript:void(0);" class="remove_button">Remove Fields</a></div>'); //Add field html
                @else
                    $(wrapper).append('<div class="dynamic-more"><input type="hidden" name="contact_person['+x+'][client_contact_person_id]" id="client_contact_person_id" class="client_contact_person_id" /><input type="hidden" name="contact_person['+x+'][client_contact_person_status]" value="1" id="client_contact_person_status" class="client_contact_person_status" /><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Name</label> <input type="text" class="form-control contact_person_name" placeholder="Enter ..." id="name" name="contact_person['+ x +'][name]" /> <small class="text-danger">{{$errors->first("name")}}</small> </div></div><div class="col-md-6"> <div class="form-group"> <label>Position</label> <input type="text" class="form-control contact_person_position" placeholder="Enter ..." id="position" name="contact_person['+ x +'][position]"/> <small class="text-danger">{{$errors->first("position")}}</small> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Department</label> <input type="text" class="form-control contact_person_department" placeholder="Enter ..." id="department" name="contact_person['+ x +'][department]"/> <small class="text-danger">{{$errors->first("department")}}</small> </div></div><div class="col-md-6"> <div class="form-group"> <label>Email Address</label> <input type="text" class="form-control contact_person_email" placeholder="Enter ..." id="email_address" name="contact_person['+ x +'][email_address]"/> <small class="text-danger">{{$errors->first("email_address")}}</small> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Contact Number</label> <input type="text" class="form-control contact_person_number" placeholder="Enter ..." id="contact_number" name="contact_person['+ x +'][contact_number]"/> <small class="text-danger">{{$errors->first("contact_number")}}</small> </div></div></div><a href="javascript:void(0);" class="remove_button">Remove Fields</a></div>'); //Add field html
                @endif;
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e)
        {
            e.preventDefault();
            $(this).parent('div').hide();
            $(this).parent('div').find('.client_contact_person_status').attr('value',"2");
            x--;
        });

    }


    function field_validation() 
    {
        $.validator.addMethod("currency", function (value, element) {
            var isValidMoney = /^\d{0,10}(\.\d{0,2})?$/.test(value);
            return this.optional(element) || isValidMoney;
        }, "Please specify a valid amount");

        
        jQuery.validator.addClassRules('contact_person_name', {
            required: true
        });

        jQuery.validator.addClassRules('contact_person_email', {
            required: true,
            email: true
        });

        jQuery.validator.addClassRules('money_format', {
            currency: true,
        });

        $('#add_client_form').validate({
            rules: {
                date_of_contract : {
                    required: true,
                    date: true
                },
                date_of_termination : {
                    required: true,
                    date: true
                },
                company_name : 'required',
                company_address : 'required',
                company_email : {
                    required: true,
                    email: true
                },

                schedule_of_cut_off: 'date',
                schedule_of_payroll : 'date'
                
            }
        });
    }

</script>

@stop