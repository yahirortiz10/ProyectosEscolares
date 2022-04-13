@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('img/house.png') }}">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">  
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse"
      <h1 style="text-align:center;">Universidad Tecnológica Del Poniente</h1>
    </nav>
    <center>

<section id="nosotros">
            <div class="contenido-seccion">
                <div class="container">
                    <div class="col-md-6">
                        <div class="texto-acerca-de">
                            <h3>Nosotros</h3>
                            <p class="lead">El siguiente sistema dedicada al manejo de asignaciones de aulas y laboratorios
                                de la insttitucion, la cual su principal objetivo es tener un mejor control y manejo de ellas mismas; siguiendo con el mejor<br> 
                                 protocolo de salud
                                </p>
                            <h3>Continuar Como:</h3>
                            <form method="get" action="/citas">
                               <button type="submit">Admintrador y Docente</button>
                            </form>
                            <br>
                            <form method="get" action="/intendente">
                               <button type="submit">Intendente</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
</section>

        </center>
        <footer id="footer-main">
            <div class="container">
            <div class="row">     
            <div class="col-sm-8">
            <h4 style="color:red;">Desarrolló</h4>
            <h5> Fernando Yahir Ortiz Uicab</h5>
              <a href="http://facebook.com" class="btn btn-sm btn-secondary-outline">Facebook</a>
            </div>
            <div class="col-sm-3">
            <h4 style="color:red;">Desarrolló</h4>
            <h5 style= "font-size:.8rem;" > Proyecto creado por estudiantes de la Universidad Tecnológica del Poniente Carrera: 
            Tecnologías de la Información Área Desarrollo de Software Multiplataforma</h5>
            </div>
            </div>
            </div>
        </footer>
</body>
 

<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<script src="/adminlte/dist/js/demo.js"></script>
</html>