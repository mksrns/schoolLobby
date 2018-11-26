
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SchoolLobby | Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SchoolLobby') }} :: Home</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
    
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
	    <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                    <router-link to="/contact" class="nav-link">
                      
                      
                        <i class="nav-icon fa fa-headphones blue" aria-hidden="true"></i>
                      
                    </router-link>
                  </li>
        <!-- Authentication Links
       -->
    </ul>
   </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./images/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SchoolLobby</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
		   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                <router-link to="/home" class="nav-link">
                    <i class="nav-icon fa fa-home blue" aria-hidden="true"></i>
                  <p>
                    
                    Home
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                    <router-link to="/notice" class="nav-link">
                      <i class="nav-icon fa fa-th red"></i>
                      <p>
                        Notice Board
                        <!--<span class="right badge badge-danger">New</span>-->
                      </p>
                    </router-link>
                  </li>

          
          <li class="nav-item">
            <router-link to="/admission" class="nav-link">
                <i class="nav-icon fa fa-user orange" aria-hidden="true"></i>
              <p>
                Admissions
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/gallery" class="nav-link">
                <i class="nav-icon fa fa-photo pink" aria-hidden="true"></i>
              <p>
                Galleries
              </p>
            </router-link>
          </li>
          
          <li class="nav-item">
            <router-link to="/event" class="nav-link">
                <i class="nav-icon fa fa-envelope-o green" aria-hidden="true"></i>
              <p>
                Events
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/activity" class="nav-link">
                <i class="nav-icon fa fa-chart-line purple" aria-hidden="true"></i>
              <p>
                Activities
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/calendar" class="nav-link">
                <i class="nav-icon fa fa-calendar-alt cyan" aria-hidden="true"></i>
              <p>
                School Calendar
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/academic" class="nav-link">
                <i class="nav-icon fa fa-flag teal" aria-hidden="true"></i>
              <p>
                Academics
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/achievement" class="nav-link">
                <i class="nav-icon fa fa-trophy indigo" aria-hidden="true"></i>
              <p>
                Achievements
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/alumini" class="nav-link">
                <i class="nav-icon fa fa-graduation-cap pink" aria-hidden="true"></i>
              <p>
                Our Alumini
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/magazine" class="nav-link">
                <i class="nav-icon fa fa-newspaper yellow" aria-hidden="true"></i>
              <p>
                School Magazine
              </p>
            </router-link>
          </li>
          
        </ul>
   
   </nav>
   
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<router-view></router-view>
        
    <sticycontact-component></sticycontact-component>
    <sticysocial-component></sticysocial-component>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!-- Main Footer -->
  <footer class="main-footer">
    <footer-component></footer-component>
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Created by Worthslab softwares
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="https://www.worthslab.com">Worthslab Softwares</a>.</strong> All rights reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
