<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/img/logo.png" alt="Laravel Starter" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{config('app.name', 'Payroll')}}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"> {{auth()->user()->name!=null ? auth()->user()->name : "Administrator"}} </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview {!! classActivePath(1,'dashboard') !!}">
          <a href="#" class="nav-link {!! classActiveSegment(1, 'dashboard') !!}">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Clients
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/clients" class="nav-link {!! classActiveSegment(2, 'dashboard') !!}">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>All Clients</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/clients/create" class="nav-link">
                <i class="fa fa-circle-o nav-icon {!! classActiveSegment(2, 'dashboard') !!}"></i>
                <p>Add New</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview {!! classActivePath(1,'dashboard') !!}">
          <a href="#" class="nav-link {!! classActiveSegment(1, 'dashboard') !!}">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Users
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/users" class="nav-link {!! classActiveSegment(2, 'dashboard') !!}">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>All Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/register" class="nav-link">
                <i class="fa fa-circle-o nav-icon {!! classActiveSegment(2, 'dashboard') !!}"></i>
                <p>Add New</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>