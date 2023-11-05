<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('dashboard')}}" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Plane
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('sanbay')}}" class="nav-link {{ Route::currentRouteNamed('sanbay') ? 'active' : ' ' }}">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Airport
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('flight')}}" class="nav-link {{ Route::currentRouteNamed('flight') ? 'active' : ' ' }}">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Flight
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('seatclass')}}" class="nav-link {{ Route::currentRouteNamed('seatclass') ? 'active' : ' ' }}">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Seat Class
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('customer')}}" class="nav-link {{ Route::currentRouteNamed('customer') ? 'active' : ' ' }}">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Customer
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('ticket')}}" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Ticket
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('order')}}" class="nav-link {{ Route::currentRouteNamed('order') ? 'active' : ' ' }}">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Order
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Account
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('feedback')}}" class="nav-link {{ Route::currentRouteNamed('feedback') ? 'active' : ' ' }}">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Feedback
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="content-wrapper">