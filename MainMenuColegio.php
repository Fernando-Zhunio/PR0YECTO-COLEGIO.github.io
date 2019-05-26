<?php 

session_start();
if(isset($_SESSION['Cedula'])){
header("location:Profesores.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-primary">
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">FAZReyes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Estudiante
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Calificaciones</a>
            <a class="dropdown-item" href="#">Estado</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="#">Asistencia</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Docentes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Calificaciones</a>
            <a class="dropdown-item" href="#">Cursos</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="#">Horarios</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> 
       
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Iniciar Sesion
          <img src="img/img_1.jpg" class="img-fluid" width="35px">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalMensaje" >Iniciar sesion</a>
          <a class="dropdown-item disabled" href="#">Perfi</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item disabled" href="#" >Mensajes</a>
        </div>
      </li>
      </ul>   
    </div>

    
    <!-- modal de inicio de sesion   -->

   <div class="modal fade" id="modalMensaje" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content w-75 container">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Ingresar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Tu Email o cedula</label>
          </div>
  
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Tu contraseña</label>
          </div>
  
        </div>
        <div   class="modal-footer d-flex justify-content-center">
          <button type="submit"id="loginButton" class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>
  



  </nav>
 </div>

  <!--/.Navbar -->


<!-- Section: Features v.2 -->
<div class="container">
   <section class="my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5 white-text">Porqué somos Geniales?</h2>
    <!-- Section description -->
    <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam.</p>
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-5">
  
        <!-- Grid row -->
        <div class="row">
  
          <!-- Grid column -->
          <div class="col-lg-2 col-md-3 col-2">
            <i class="fas fa-bullhorn blue-text fa-2x"></i>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold white-text">Comunicacion</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="btn btn-primary btn-sm">Learn more</a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-5">
  
        <!-- Grid row -->
        <div class="row">
  
          <!-- Grid column -->
          <div class="col-lg-2 col-md-3 col-2">
            <i class="fas fa-cogs pink-text fa-2x"></i>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold white-text">Profesores</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="btn btn-pink btn-sm">Learn more</a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-md-4">
  
        <!-- Grid row -->
        <div class="row">
  
          <!-- Grid column -->
          <div class="col-lg-2 col-md-3 col-2">
            <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold white-text">Educacion</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="btn btn-purple btn-sm">Learn more</a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->
  
      </div>
      <!-- Grid column -->
  
    </div>

    <!-- Grid row -->
    <div class="row mt-5">
  
        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-5">
    
          <!-- Grid row -->
          <div class="row">
    
            <!-- Grid column -->
            <div class="col-lg-2 col-md-3 col-2">
              <i class="fas fa-bullhorn blue-text fa-2x"></i>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-lg-10 col-md-9 col-10">
              <h4 class="font-weight-bold white-text">Comunicacion</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <a class="btn btn-primary btn-sm">Learn more</a>
            </div>
            <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-5">
    
          <!-- Grid row -->
          <div class="row">
    
            <!-- Grid column -->
            <div class="col-lg-2 col-md-3 col-2">
              <i class="fas fa-cogs pink-text fa-2x"></i>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-lg-10 col-md-9 col-10">
              <h4 class="font-weight-bold white-text">Profesores</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <a class="btn btn-pink btn-sm">Learn more</a>
            </div>
            <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-md-4">
    
          <!-- Grid row -->
          <div class="row">
    
            <!-- Grid column -->
            <div class="col-lg-2 col-md-3 col-2">
              <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-lg-10 col-md-9 col-10">
              <h4 class="font-weight-bold white-text">Educacion</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <a class="btn btn-purple btn-sm">Learn more</a>
            </div>
            <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
        <!-- Grid column -->
    
      </div>
    <!-- Grid row -->
  
   </section>

</div>


  <!-- Section: Features v.2 -->


















 <!--Carousel Wrapper-->
<div class="container m-auto">
<div id="video-carousel-example2" class="carousel slide carousel-fade mt-5" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
      <li data-target="#video-carousel-example2" data-slide-to="1"></li>
      <li data-target="#video-carousel-example2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!-- First slide -->
      <div class="carousel-item active">
        <!--Mask color-->
        <div class="view">
          <!--Video source-->
          <video class="video-fluid" autoplay loop muted>
            <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
          </video>
          <div class="mask rgba-indigo-light"></div>
        </div>
  
        <!--Caption-->
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h3 class="h3-responsive">Light mask</h3>
            <p>First text</p>
          </div>
        </div>
        <!--Caption-->
      </div>
      <!-- /.First slide -->
  
      <!-- Second slide -->
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <!--Video source-->
          <video class="video-fluid" autoplay loop muted>
            <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
          </video>
          <div class="mask rgba-purple-slight"></div>
        </div>
  
        <!--Caption-->
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h3 class="h3-responsive">Super light mask</h3>
            <p>Secondary text</p>
          </div>
        </div>
        <!--Caption-->
      </div>
      <!-- /.Second slide -->
  
      <!-- Third slide -->
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <!--Video source-->
          <video class="video-fluid" autoplay loop muted>
            <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
          </video>
          <div class="mask rgba-black-strong"></div>
        </div>
  
        <!--Caption-->
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h3 class="h3-responsive">Strong mask</h3>
            <p>Third text</p>
          </div>
        </div>
        <!--Caption-->
      </div>
      <!-- /.Third slide -->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>

</div>


  <!--Carousel Wrapper-->
    
  <div class= bg-dark"></div>
  <div class= bg-dark"></div>
  <div class="h-100 bg-dark"></div>
 
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

  <script type="text/javascript" src="validarLogin.js"></script>
  
</body>
</html>
