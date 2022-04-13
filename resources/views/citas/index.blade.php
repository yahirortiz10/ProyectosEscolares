<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Web</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
      <link rel="icon" type="image/png" href="{{ asset('img/ca.png') }}">
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
   <a href="/home" class="nav-link">Home</a>
      </li>
   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <a href="/home" class="brand-link">
    
      <span class="brand-text font-weight-light">Utp Maxcanu</span>
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
       
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Reservacion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <br>
              <center>
               <a class="btn btn-primary"href="{{ url ('citas/create')}}"> Agregar Cita</a>
               </center>
               <br>
            </ul>
          
          <li class="nav-header">informacion importante</li>
          <li class="nav-item">
            <a href="/information" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
                Covid-19 
              <br><br>
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 style="color:red;">Asignacion escolar</h2>
            <b>
          <h5>En esta seccion del sistema podra asignar laboratorios y los horarios</h5>
          </div>
          <div class="col-sm-6">
          
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<p>

    <!-- Main content -->    <!-- //aca empieza donde esta el CRUD --> 
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista De Asignaciones Realizada Por Los Docentes Y Administradores</h3>

          <div class="card-tools">
          
        
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Carrera
  </button>
  <div class="dropdown-menu">
     <div class="dropdown-divider"></div>
    TSU
    <a class="dropdown-item" >TSU TURISMO</a>
    <a class="dropdown-item" >TSU TECNOLOGIAS DE LA INFORMACION </a>
    <a class="dropdown-item" >TSU ADMINISTRACION</a>
    <a class="dropdown-item" >TSU TURISMO</a>
    <div class="dropdown-divider"></div>
    ING
    <a class="dropdown-item" >ING TURISMO</a>
    <a class="dropdown-item" >ING TECNOLOGIAS DE LA INFORMACION </a>
   
  </div>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Docentes
  </button>
  <div class="dropdown-menu">
    <div class="dropdown-divider"></div>
    Maestras
    <a class="dropdown-item" >Mtr Glendi</a>
    <a class="dropdown-item" >Mtr Carla </a>
       <div class="dropdown-divider"></div>
       Maestros
    <a class="dropdown-item" >MTR Herrera </a>
    <a class="dropdown-item" >MTR Juan</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Instalaciones
  </button>
  <div class="dropdown-menu">
     <div class="dropdown-divider"></div>
    Laboratorio
    <a class="dropdown-item" >Laboratorio De MAC</a>
    <a class="dropdown-item" >Laboratorio De Computo</a>
    <a class="dropdown-item" >Laboratorio De Prueba </a>
    <a class="dropdown-item" >Laboratorio De Exposiciones</a>
    <div class="dropdown-divider"></div>
    Salones
    <a class="dropdown-item" href="#">Salon No·1</a>
    <a class="dropdown-item" href="#">Salon No·2</a>
    <a class="dropdown-item" href="#">Salon No·3 </a>
    <a class="dropdown-item" href="#">Salon No.4 </a>
  </div>
</div>


  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
         <i class="fas fa-times"></i>
       </button>
 </div>
    </div>



@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Laboratorio o salon</th>
            <th>Carrera</th>
            <th>Docente</th>
            <th>Hora</th>
            <th>Fecha</th>
            <th>Acciones</th>
            
        </tr>
    </thead>

    <tbody>
    @foreach($citas as $cita)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$cita->Laboratorio}}</td>
            <td>{{$cita->Carrera}}</td>
            <td>{{$cita->Docente}}</td>
            <td>{{$cita->Hora}}</td>
            <td>{{$cita->Fecha}}</td>
            <td>   

            <a href="{{ url ('/citas/'.$cita->id.'/edit')}}">
             <i class="fa fa-edit"></i>
            Editar
            </a>

            <form method="post" action="{{ url ('/citas/'.$cita->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
              <button 
              type="submit" class="btn btn-danger">
              <i class="fa fa-trash"></i>
              </button>
            

            </form>
             </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</p>
</section>

<p>
</b>
</b>
<body>


   <!-- Main content -->
    <section class="content">
    <font  >
      <h2  style="color:red;">De Igual Manera...</h2>
            <b>
          <h5 style="color:black;">En este apartado del sistema podras consultar el calendario </h5>
         </font>
<br>
<br>


      <!-- Default box //aca empieza donde esta el CRUD --> 
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Calendario</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>


            </button>
          </div>
        </div>
      <div class="card-body">


<div class="calendar">
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>

    <div class="calendar__week">
        <div class="calendar__day calendar__item">Lunes</div>
        <div class="calendar__day calendar__item">Martes</div>
        <div class="calendar__day calendar__item">Miercoles</div>
        <div class="calendar__day calendar__item">Jueves</div>
        <div class="calendar__day calendar__item">Viernes</div>
        <div class="calendar__day calendar__item">Sabado</div>
        <div class="calendar__day calendar__item">Domingo</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>
</p>
</section>
     

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>

