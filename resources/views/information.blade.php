<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Web Informacion</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
        <link rel="icon" type="image/png" href="{{ asset('img/iconcovid.png') }}">
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
          </input>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="/citas" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
                Reservacion 
              <br>
              
              </li>
            </a>
          <li class="nav-header">informacion importante</li>
          <li class="nav-item">
            <a href="/information" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
                Covid-19 
              <br><br>
             
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      
    </div>
    <!-- /.sidebar -->
  </aside>
  </body>
  <body>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
                  <div class="col-sm-6">
            <h1 style="color:red;">VIRUS COVID-19</h1>
            <b>
          <h5>En esta seccion del sistema podras consultar todo tipo de informacion referente al tema</h5>
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
 <div class="card">
        <div class="card-header">
           <h3 class="card-title">Conoce mas</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

      <div class="card-body"> <!--//lo que va adentro-->

<p style="color:red; font-size:30px">Que es el Coronavirus</p>
<h5>
 Los coronavirus son una familia de virus que causan
 enfermedades (desde el resfriado común hasta enfermedades respiratorias más graves) 
 <br>
 y circulan entre humanos y animales.
En este caso, se trata del SARS-COV2. Apareció en China en diciembre pasado 
y provoca una enfermedad llamada COVID-19, 
<br>
que se extendió por el mundo y fue declarada pandemia
 global por la Organización Mundial de la Salud
 </h5>
 <br>
 <center>
 <img src="/img/covid.png" width="200" height="100" alt="texto" >
 </center>
</div>
</section>

<!-- Main content -->
    <section class="content">

      <!-- Default box //aca empieza donde esta el CRUD --> 
      <div class="card">
        <div class="card-header">
           <h3 class="card-title">Reproducir Informacion</h3>
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
<b>
<p style="color:red; font-size:30px">Video Informativo</p>
</b>
<h5>
 en este siguiente apartado te enseñamos un video hacerca de la realizacion correcta de la saniticacion de aulas:<br> </h5>
<br>
<center>
<video src="/img/protocolo.mp4" width="600" height="440" autoplay muted loop></video>
</center>


 </div>
</section>

<!-- Main content -->
    <section class="content">

      <!-- Default box //aca empieza donde esta el CRUD --> 
      <div class="card">
        <div class="card-header">
        <h3 class="card-title">Informacion que ayuda</h3>
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
<b>
<p style="color:red; font-size:30px">Como Prevenir</p>
</b>
<h5>
 Toma las precauciones adecuadas e infórmate bien para protegerte y cuidar 
 de quienes te rodean. Sigue las recomendaciones de los organismos de salud pública de tu zona.
Para evitar la propagación de la COVID-19:<br> </h5>
<br>
<ol>
<li> Lávate las manos con frecuencia. </li>
<li>Usa agua y jabón o un desinfectante de manos a base de alcohol.</li>
<li> una distancia de seguridad con personas que tosan o estornuden.</li>
<li>Utiliza mascarilla cuando no sea posible mantener el distanciamiento físico.</li>
<li>No te toques los ojos, la nariz ni la boca.</li>
<li>Cuando tosas o estornudes, cúbrete la nariz y la boca con el codo flexionado o con un pañuelo.</li>
<li>Si no te encuentras bien, quédate en casa.</li>
<li>En caso de que tengas fiebre, tos o dificultad para respirar, busca atención médica.</li>
<li>Llama por teléfono antes de acudir a cualquier proveedor de servicios sanitarios para que</li>
 <li>te dirijan al centro médico adecuado. De esta forma, te protegerás a ti y evitarás la </li>
 propagación de virus y otras infecciones.</li>
 </ol>
 <p> <strong> Para mas informacion visite el sitio oficial dela OMS </strong><br>
 <a href="https://www.who.int/es">Sitio oficial </a>
 <br>
 <center>
 <img src="/img/prevenir.png" width="400" height="300" alt="texto" >
 </center>
 </div>
</section>


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



