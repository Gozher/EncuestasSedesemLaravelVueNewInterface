<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<!--  <script src="{{asset('js/loader-chart-google.js')}}"></script>
    <script src="{{asset('js/loader-google-charts-bar.js')}}"></script>
    <script src="{{asset('js/jsapi-chart-google.js')}}"></script>-->

  <title>ENCUESTA</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/css/sb-admin-2.min.css')}}" rel="stylesheet">
    
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/inicio">
        <div class="sidebar-brand-icon rotate-n-1">
          <br>
          <img src="{{asset('img/logoEdoMex.png')}}" width="80" height="75">
          <br>
        </div>
        <div class="sidebar-brand-text mx-3">DESARROLLO SOCIAL</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <br>
        <a class="nav-link" href="{{route('Encuesta.create')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>

          <span>HOME</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu principal
      </div>

      <!-- Menu de registro-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-file-excel"></i>
          
          <span>Cargar datos</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Opciones</h6>
            <a class="collapse-item" href="{{route('importGet')}}">Importar excel</a>            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Menu de resultados -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesDos" aria-expanded="true" aria-controls="collapseUtilitiesDos">
          <!--<i class="fas fa-fw fa-wrench"></i>-->
          <i class="fas fa-book"></i>
          
          <span>Generar cuestionario</span>
        </a>
        <div id="collapseUtilitiesDos" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones</h6>
            <a class="collapse-item" href="{{route('Preguntas.create')}}">Crear pregunta</a>
            <a class="collapse-item" href="{{route('Respuestas.create')}}">Crear respuestas</a>
            
          </div>
        </div>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Menu de calificar -->
      <li class="nav-item">

        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilitiesTres" aria-expanded="true" aria-controls="collapseUtilitiesTres">
          <i class="fas fa-user-check"></i>
          <span>Entrevistar</span>
        </a>
       <div id="collapseUtilitiesTres" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones</h6>
            <a class="collapse-item" href="{{route('Muestra.create')}}">Realizar entrevista</a>
          </div>
        </div>
      </li>

   <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Menu de historial -->
      <li class="nav-item">

        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilitiesCuatro" aria-expanded="true" aria-controls="collapseUtilitiesCuatro">
          <i class="fas fa-chart-bar"></i>
          <span>Graficas</span>
        </a>
        <div id="collapseUtilitiesCuatro" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones</h6>
            <a class="collapse-item" href="{{route('Graficas.create')}}">Ver graficas</a>            
            <a class="collapse-item" href="{{route('GraficasPorcentajes.index')}}">graficas personalizadas</a> 
          </div>
        </div>
      </li>


      <!-- Heading -->
      <div class="sidebar-heading">

      </div>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>



                               <!-- Authentication Links-->
                               @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest                  

          </ul>

        </nav>
        <!-- End of Topbar -->



        <!-- Begin Page Content -->


        <div class="container">

            @yield('content')

        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->



      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>



</body>

</html>