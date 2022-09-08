@php
    use App\Http\Controllers\plantillaControl;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CTI APP</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Switchery css -->
    <link href=" {{ asset('template/plugins/switchery/switchery.min.css') }} " rel="stylesheet" />

    <!-- Font Awesome CSS -->
    <link href="{{ asset('template/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />

    <!-- Togle Swicht CHECKBOX CSS for this page -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">

    
    <!-- BEGIN CSS for this page -->
    <link href="{{ asset('template/plugins/datetimepicker/css/daterangepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />    
    <!-- END CSS for this page -->
    <script src="{{ asset('template/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/moment.min.js') }}"></script>


</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="https://cti.geodrill.biz/" class="logo"><img alt="logo" src="{{ asset('template/images/logo.png') }}" /> <span>CTI APP</span></a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('template/images/avatars/admin2.png') }}" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <!-- <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Hello, {{ auth()->user()->name }}</small> </h5>
                            </div> -->

                            <!-- item-->
                            <a href="{{ route('perfil') }}" class="dropdown-item notify-item">
                                <i class="fa fa-user"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="fa fa-power-off"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">
            <div class="sidebar-inner leftscroll">
                <div id="sidebar-menu">
                    <ul>
                        <li class="submenu">
                            <a class="{{ Route::currentRouteName() == 'inicio' ? 'active' : '' }}"
                                href="{{ route('inicio') }}"><i class="fa fa-fw fa-bars"></i><span>Home </span> </a>
                        </li>


                        @foreach(plantillaControl::ObtenerMenusPermiso() as $itemPermiso)
                                @php $menuIndividual = plantillaControl::ObtenerUnicoMenuById($itemPermiso->menu_id) @endphp
                            <li class="submenu">
                            {{ logger(Route::currentRouteName()) }}

                                <a class="{{ Route::currentRouteName() == $menuIndividual->menu_nombreformulario  ? 'active' : '' }}" href="{{ route($menuIndividual->menu_nombreformulario) }}"><i class="{{ $menuIndividual->menu_icono }}"></i><span> {{$menuIndividual->menu_nombre}} </span> </a>
                            </li>
                        @endforeach


          </ul>

          <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

      </div>

    </div>
    <!-- End Sidebar -->

            <!-- START content-page -->
            <div class="content-page">

                @yield('seccion')

            </div>
            <!-- END content-page -->


            <footer class="footer">
                <span class="text-right">
                    Copyright <a target="_blank" href="#">MRPU</a>
                </span>
                <span class="float-right">
                    Powered by <a target="_blank" href="#"><b>MRPU</b></a>
                </span>
            </footer>

    </div>
    <!-- END main -->

  <script src="{{ asset('template/js/modernizr.min.js') }}"></script>
  <script src="{{ asset('template/js/jquery.min.js') }}"></script>
  <script src="{{ asset('template/js/moment.min.js') }}"></script>

  <script src="{{ asset('template/js/popper.min.js') }}"></script>
  <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('template/js/detect.js') }}"></script>
  <script src="{{ asset('template/js/fastclick.js') }}"></script>
  <script src="{{ asset('template/js/jquery.blockUI.js') }}"></script>
  <script src="{{ asset('template/js/jquery.nicescroll.js') }}"></script>
  <script src="{{ asset('template/js/jquery.scrollTo.min.js') }}"></script>

  <!-- <script src="{{ asset('assets/js/jquery-1.10.2.min.js') }}"></script> -->
  <script src="{{ asset('template/js/jquery-ui.min.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
  <!-- <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script> -->
  <script src="{{ asset('template/js/jquery.validate.min.js') }}"></script>

  <script src="{{ asset('template/plugins/switchery/switchery.min.js') }}"></script>
  <script src="{{ asset('template/plugins/parsleyjs/parsley.min.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('template/js/pikeadmin.js') }}"></script>

  <!-- JS PROPIAS -->
  <script src="{{ asset('template/js/myfunctions.js') }}"></script>

  <!-- BEGIN Java Script for this page -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

  <!-- DATATABLE BUTTONS -->
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

  <!-- SELECT 2 -->  
  <script src="{{ asset('template/plugins/select2/js/select2.min.js') }} "> </script>

  <!-- Counter-Up-->
  <script src="{{ asset('template/plugins/waypoints/lib/jquery.waypoints.min.js') }} "> </script>
  <script src="{{ asset('template/plugins/counterup/jquery.counterup.min.js') }} ">  </script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"> </script>

  <!-- DatePickers-->
  <script src="{{ asset('template/plugins/datetimepicker/js/moment.min.js') }}"> </script>
  <script src="{{ asset('template/plugins/datetimepicker/js/daterangepicker.js') }}"> </script>

  <!-- SwetAlerts-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                  <!-- END Java Script for this page -->

</body>

</html>
