<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AdministradoresColegio</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

 <!--Navbar -->
  <div class="container position-relative">
  <nav class="navbar navbar fixed-top navbar-expand-lg  navbar-light bg-light">
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
 
<header class="fondoAdmin h-50 w-100 ">
   <!-- <img src="img/img_1.jpg" alt="Imagen del Colegio" class=" img-fluid"> -->
   <div class="container justify-content-center align-items-center">
    <div class="row justify-content-center align-items-center">    
        <div class="text-center text-uppercase col-12 text-dark pt-3 mt-5">
          <h1 class="text-uppercase ">Colegio sin nombre</h1>
        </div>
    </div>
    <div class="row bg-lights justify-content-center align-items-center p-2 m-3"> 
      <div class="text-center text-dark col-md-6 col-sm-12">
          <h2>Administradores</h2>
          <img src="img/com_logo_ug1.png" alt="logo de la ug" class="img-fluid"/>
      </div>   
      <div class="text-center text-dark col-md-6 col-sm-12">        
         <h5>Esta seccion solo de debe ingresar personal autorizado en caso de no ser autorizado se procedera con una demanda por parte de esta institucion</h5>
       </div>
   </div>
   </div>
</header>

<div class="h-100"></div>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
