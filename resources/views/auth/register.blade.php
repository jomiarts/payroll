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
      <form action="{{ route('register') }}" method="POST">
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
                  <select class="form-control select2" style="width: 100%;" name="role">
                    <option selected="selected" value="">{{__('--Select Option--')}}</option>
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