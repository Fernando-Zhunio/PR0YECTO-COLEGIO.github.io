<?php
session_start();
if(!isset($_SESSION['Cedula'])){
header("location:MainMenuColegio.php");
echo '<h3> No autorizado</h3>';
die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ProfesoresColAnonimo</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="css/morris.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-white">
<header class="bg-danger view h-25">
  
    <video src="animation-intro.mp4" autoplay loop>

    </video>
  
    <div class="mask h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="text-center ">
           <h2>Colegio sin nombre</h2> 
           <h5>Dir: Guayaquil</h5>
        </div>
      </div>     
    </div>

</header>

  <!-- Start your project here-->
 <!--Navbar -->
 <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Calificaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Asistencia</a>
        </li><li class="nav-item">
          <a class="nav-link" href="#">Historial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estado</a>
        </li> 
       
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> 
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Iniciar Sesion
          <img src="img/img_1.jpg" class="img-fluid" width="35px">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="#">Mensaje</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="CerrarSesion.php"> Cerrar Sesión</a>
        </div>
      </li>
      </ul>     
    </div>
  </nav>
 </div>
  <!--/.Navbar -->
<!-- Section: Features v.3 -->
<div class="container">
<section class="my-5 ">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Tus porcentajes</h2>
  <!-- Section description -->
  <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
    veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 text-center text-lg-left">
      <!-- <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/screens-section.jpg" alt="Sample image"> -->
      <div id="myfirstchart" style="height: 250px;"></div>
    </div>


    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Asistencia</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
            quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Promedio</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
            quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!--Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Historial</h5>
          <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima
            veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!--Grid row-->

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
</div>

<!-- Section: Features v.3 -->
    
  <div class= bg-dark"></div>

 
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
  <!--------------------------- scripts para graficos ---------------------------------->
  <script type="text/javascript" src="js/raphael-min.js"></script>
  <script type="text/javascript" src="js/morris.min.js"></script>
  <script type="text/javascript" src="js/grafica1.js"></script>

  <!-- --------------------------------------------------------------------------------->
  <script type="text/javascript" src="js/llenarDatosPage.js"></script>
  


</body>
</html>