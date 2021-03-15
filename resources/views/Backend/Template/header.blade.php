<!-- Logo -->
<a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>BKK</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>BKK</b>SMKN1LAHAT</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('AdminLTE/dist/img/admin.jpg')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{\Auth::user()->name}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{asset('AdminLTE/dist/img/admin.jpg')}}" class="img-circle" alt="User Image">

              <p>
                {{\Auth::user()->name}}
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull">
               <center><a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a></center>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>