<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
  <title>Editar Reservacion</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
<link rel="icon" type="image/png" href="{{ asset('img/e.png') }}">
    <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/style.css">  
   
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
              <i class="nav-icon fas fa-book"></i>
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
             <h2 style="color:red;">Editar Asigacion</h2>
            <b>
          <h5>En esta seccion del sistema podra realizar los ajustes de su solicitud</h5>
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

    <!-- Main content -->
    <section class="content">

      <!-- Default box //aca empieza donde esta el CRUD --> 
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Rellenar los campos requeridos</h3>
            
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
      
<br>

<form action="{{ url('/citas/' . $cita->id) }} "  method="post" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH') }}

  <center>
   <label for="Laboratorio">{{'Laboratorio'}}</label>
<input type="Laboratorio" class="form-control"  name="Laboratorio"  id="Laboratorio" value="{{ $cita->Laboratorio}}">
<br/>
<label for="Carrera">{{'Carrera'}}</label>
<input type="Carrera"  class="form-control" name="Carrera" id="Carrera" value="{{ $cita->Carrera}}">
<br/>
<label for="Docente">{{'Docente'}}</label>
<input type="Docente"  class="form-control" name="Docente" id="Docente" value="{{ $cita->Docente}}">
<br/>
<label for="Hora">{{'Hora'}} </label>
<input type="text" class="form-control"  name="Hora" id="Hora" value="{{ $cita->Hora}}">
<br/>
<label for="Fecha">{{'Fecha'}}</label>
<input type="text"  class="form-control" name="Fecha" id="Fecha" value="{{ $cita->Fecha}}">
<br/>



<style>
   .card-body{
	color: red; 
   font-size: 1.2rem;
    font-family:'Montserrat',sans-serif;
  
  }
   .form-control {
     border-radius: 5px;
     border: 1px solid #39c;
     width: 500px;
     padding: 1px;
    font-family:'Montserrat',sans-serif;
     
	    color: green }
   
   }
   
   </style>
                <button class="btn btn-success">Guardar</button>
                </br>
                 </br>
                <a href="{{ url ('citas')}}">Regresar a la lista</a>
            </form>
      
    


</center>
<br/>
<br/>

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
</body>


</html>