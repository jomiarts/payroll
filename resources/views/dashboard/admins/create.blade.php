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
                    <h1 class="m-0 text-dark">{{__('Add New Admin')}}</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item">{{__('Dashboard')}}</li>
                        <li class="breadcrumb-item">{{__('Admins')}}</li>
                        <li class="breadcrumb-item active">{{__('Create')}}</li>
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
            <h3>{{__('Under Construction')}}</h3>
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