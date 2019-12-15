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
          <h1 class="m-0 text-dark">{{__('Add New User')}}</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">{{__('Home')}}</a></li>
            <li class="breadcrumb-item active">{{__('Register')}}</li>
          </ol>
        </div><!-- /.col -->

      </div><!-- /.row -->

    </div><!-- /.container-fluid -->

  </div><!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <form action="{{ route('register') }}" method="POST" id="add_new_user">
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{__('User')}}</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                  <label>{{__('Full Name')}}</label>
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                    name="name" value="{{ old('name') }}" required autofocus />
                  @if ($errors->has('name'))
                  <small class="text-danger invalid-feedback">{{ $errors->first('name') }}</small>
                  @endif
                </div>

              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>{{__('Email')}}</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                    name="email" value="{{ old('email') }}" />
                  @if ($errors->has('email'))
                  <small class="text-danger invalid-feedback">{{ $errors->first('email') }}</small>
                  @endif
                </div>
              </div>
            </div><!-- /. row -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>{{__('Password')}}</label>
                  <input id="password" type="password"
                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>{{__('Confirm Password')}}</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    required />
                  @if ($errors->has('password'))
                  <small class="text-danger invalid-feedback">{{ $errors->first('password') }}</small>
                  @endif
                </div>
              </div>
            </div><!-- /. row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Role</label>
                  <select class="role" name="role[]" multiple="multiple" data-placeholder="Select a role" style="width: 100%;">
                    <option value="admin">{{__('Admin')}}</option>
                    <option value="employee">{{__('Employee')}}</option>
                  </select>
                  <small class="text-danger">{{ $errors->first('contract_type') }}</small>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6"></div>
            </div>
          </div>
        </div>
        <div class="btn-submit-container">
          <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
        </div>
      </form>
    </div>
    <!--/. container-fluid -->
  </section>

</div>
<!--/ .content-wrapper -->

@endsection


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
<!-- Select2 -->
<script src="/dist/plugins/select2/select2.full.min.js"></script>
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
        field_validation();
        $('.role').select2();
    });

    function field_validation() 
    {
        
        $('#add_new_user').validate({
            rules: {
              
                name: 'required',
                email: {
                  required: true,
                  email: true
                },
                password: 'required',
                password_confirmation: {
                  equalTo: "#password"
                },
                role: 'required'

            }
        });

    }

</script>



@stop