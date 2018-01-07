<?php
session_start();
if (isset($_SESSION['usuario'])) {
  /*   if($_SESSION['usuario']['descripcion']!='Administrador' && $_SESSION['usuario']['descripcion']!='Alumno' && $_SESSION['usuario']['descripcion']!='Docente' ){
  header('Location:../visit/home.php');
} */
} else {
  header('Location:../index.php');
}
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
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/prettyPhoto.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <link href="../css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="../js/html5shiv.js"></script>
  <script src="../js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="../images/ico/bs1.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body class="homepage">
<header id="header">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-4">
          <div class="top-number ">
            <ul class="social-share">
              <li><a><i class="fa fa-user-md"></i></a></li>
            </ul>
            <?php
            echo $_SESSION['usuario']['nickname'];
            ?>
          </div>
          <!-- <div class="top-number"><p><i class="fa fa-phone-square"></i> Call Us </p></div> -->
        </div>
        <div class="col-sm-6 col-xs-8">
          <div class="social">
            <!--<ul class="social-share">
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
              </form>-->
            <ul class="social-share">
              <a class="top-number " href="../login/logout.php">Cerrar Sesion</a>
              <li><a href="../login/logout.php"><i class="fa fa-sign-out"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/.container-->
  </div><!--/.top-bar-->
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php"><img src="../images/logo2.png" alt="logo"></a>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../home.php">Home</a></li>
          <li><a href="../about-us.php">About Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diario Virtual <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="../horario.php">Diario</a></li>
              <li><a href="../horario.php">Notificaciones</a></li>
              <li><a href="../horario.php">Horario</a></li>
              <li><a href="../horario.php">Calendario</a></li>
            </ul>
          </li>
          <?php
          if ($_SESSION['usuario']['descripcion'] == 'Alumno') {
            echo "<li><a href=\"../costruccion.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Asignaturas <i
                class=\"fa fa-angle-down\"></i></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"construccion.php\">Materia</a></li>";
          }
          ?>
          </li>
          <li><a href="" class="dropdown-toggle" data-toggle="dropdown">Planificaciones <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="docente/../form_docente.php">Anual</a></li>
              <li><a href="../actividades/form_Actividad.php">Bloque</a></li>
              <li><a href="../tipo/form_Tipo.php">Semanal</a></li>
            </ul>
          </li>
          <li><a href="" class="dropdown-toggle" data-toggle="dropdown">Herramientas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="docente/../form_docente.php">Docente</a></li>
              <li><a href="../actividades/form_Actividad.php">Alumno</a></li>
              <li><a href="../tipo/form_Tipo.php">Curso</a></li>
              <li><a href="../tipo/form_Tipo.php">Tarea</a></li>
            </ul>
          </li>
          <!-- target="info"-->
          <li><a href="../contactenos.php">Contactenos</a></li>
        </ul>
      </div>
    </div><!--/.container-->
  </nav><!--/nav-->
</header><!--/header-->

<!--/************************* IFRAME centro **************************************************************-->
<section id="main-slider" class="no-margin">
  <div class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active" style="background-image: url(../images/slider/anime3.png)">
        <div class="container">
          <div class="row slide-margin">
            <div class="col-sm-6">
              <div class="carousel-content">
                <h1 class="animation animated-item-1">B-Smart</h1>
                <h2 class="animation animated-item-2"> Accede el material visto en clases</h2>
                <a class="btn-slide animation animated-item-3" href="../materias.php">Leer Más...</a>
              </div>
            </div>
            <div class="col-sm-6 hidden-xs animation animated-item-4">
              <div class="slider-img">
                <img src="../images/slider/anime1.png" alt="b-smart" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </div><!--/.item-->
      <div class="item" style="background-image: url(../images/slider/anime3.png)">
        <div class="container">
          <div class="row slide-margin">
            <div class="col-sm-6">
              <div class="carousel-content">
                <h1 class="animation animated-item-1">B-smart</h1>
                <h2 class="animation animated-item-2">Revisa tu horario de clases</h2>
                <a class="btn-slide animation animated-item-3" href="../horario.php">Leer Más...</a>
              </div>
            </div>
            <div class="col-sm-6 hidden-xs animation animated-item-4">
              <div class="slider-img">
                <img src="../images/slider/img2.png" alt="b-smart" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </div><!--/.item-->
      <div class="item" style="background-image: url(../images/slider/anime3.png)">
        <div class="container">
          <div class="row slide-margin">
            <div class="col-sm-6">
              <div class="carousel-content">
                <h1 class="animation animated-item-1">B-smart</h1>
                <h2 class="animation animated-item-2">Mantente pendiente de tus acctividades
                  académicas</h2>
                <a class="btn-slide animation animated-item-3" href="../actividades/Actividad_list.php">Leer
                  Más...</a>
              </div>
            </div>
            <div class="col-sm-6 hidden-xs animation animated-item-4">
              <div class="slider-img">
                <img src="../images/slider/img03.png" alt="b-smart" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </div><!--/.item-->
    </div><!--/.carousel-inner-->
  </div><!--/.carousel-->
  <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
    <i class="fa fa-chevron-left"></i>
  </a>
  <a class="next hidden-xs" href="#main-slider" data-slide="next">
    <i class="fa fa-chevron-right"></i>
  </a>
</section><!--/#main-slider-->
<!--/************************* IFRAME centro **************************************************************-->
<section id="bottom">
  <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <div class="widget">
          <h3><a href="../actividades/Actividad_list.php">Actividades académicas</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-5 col-sm-6">
        <div class="widget">
          <h3><a href="../horario.php"> Horarios de Clases</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-2 col-sm-6">
        <div class="widget">
          <h3><a href="../curso1/Curso_list.php">Cursos</a></h3>
        </div>
      </div><!--/.col-md-3-->
    </div><!--/.col-md-3-->
  </div>
</section><!--/#bottom-->
<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/"
                       title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>.
        All Rights
        Reserved.
      </div>
      <div class="col-sm-6">
        <ul class="pull-right">
          <li><a href="../home.php">Home</a></li>
          <li><a href="../about-us.php">About Us</a></li>
          <li><a href="../contactenos.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!--/#footer-->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.prettyPhoto.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/wow.min.js"></script>
</body>
</html>
