<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Educacion">
  <meta name="author" content="E-learning">
  <title>B-Smart</title>
  <!-- core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="images/ico/bs1.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body class="homepage">
<header id="header">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-4">
          <div class="top-number"><p><i class="fa fa-phone-square"></i> Call Us </p></div>
        </div>
        <div class="col-sm-6 col-xs-8">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
            <div class="search">
              <form role="form">
                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                <i class="fa fa-search"></i>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.container-->
  </div><!--/.top-bar-->
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="logo"></a>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diario Virtual <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="actividades/Actividad_list.php">Diario</a></li>
              <li><a href="horario.php">Horario de Clases</a></li>
            </ul>
            <!---doc     <ul class="dropdown-menu">
                 <li><a href="construccion.php">Diario</a></li>                                
                 <li><a href="horario.php">Horario de Clases</a></li>
                 <li><a href="construccion.php">Horario de Examenes</a></li>
             </ul>-->
          </li>
          <li><a href="costruccion.htl" class="dropdown-toggle" data-toggle="dropdown">Asignaturas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="materias.php">Materia</a></li>
            </ul>
            <!-- <ul class="dropdown-menu">
                <li><a href="materias.php">Materia</a></li>                                
                <li><a href="construccion.php">Cuestionarios</a></li>
                <li><a href="construccion.html">Otros...</a></li>
            </ul>-->
          </li>
          <li><a href="notas/form_notas.php">Calificaciones</a></li>
          <li><a class="dropdown-toggle" data-toggle="dropdown">Planificaciones <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="docente/form_docente.php">Docente</a></li>
              <!-- <li><a href="construccion.html">Alumnos</a></li> -->
              <li><a href="actividades/form_Actividad.php">Actividades</a></li>
              <li><a href="curso1/form_Curso.php">Cursos</a></li>
              <li><a href="notas/form_notas.php">Notas</a></li>
            </ul>
          </li>
          <!-- target="info"-->
          <li><a href="contactenos.php">Contactenos</a></li>
        </ul>
      </div>
    </div><!--/.container-->
  </nav><!--/nav-->
</header><!--/header-->
<!--/************************* IFRAME centro **************************************************************-->
<div class="section">
  <div class="container">
    <div class="row object-non-visible" data-animation-effect="fadeIn">
      <div class="col-md-12">
        <!-- isotope filters end -->
        <div class="modal-content">
          <div class="modal-body">
            <div class="item">
              <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="images/slider/animeC.jpg" class="img-responsive" alt="horario">
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="home.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/************************* IFRAME centro **************************************************************-->
<section id="bottom">
  <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <div class="widget">
          <h3><a href="actividades/Actividad_list.php">Actividades académicas</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-5 col-sm-6">
        <div class="widget">
          <h3><a href="horario.php"> Horarios de Clases</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-2 col-sm-6">
        <div class="widget">
          <h3><a href="curso1/Curso_list.php">Cursos</a></h3>
        </div>
      </div><!--/.col-md-3-->
    </div><!--/.col-md-3-->
  </div>
  </div>
</section><!--/#bottom-->
<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/"
                       title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights
        Reserved.
      </div>
      <div class="col-sm-6">
        <ul class="pull-right">
          <li><a href="home.php">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="contactenos.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!--/#footer-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>
