<?php
session_start();
if (isset($_SESSION['usuario'])) {
  /*   if($_SESSION['usuario']['descripcion']!='Administrador' && $_SESSION['usuario']['descripcion']!='Alumno' && $_SESSION['usuario']['descripcion']!='Docente' ){
  header('Location:../visit/home.php');
} */
} else {
  header('Location:../../index.php');
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
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/font-awesome.min.css" rel="stylesheet">
  <link href="../../css/animate.min.css" rel="stylesheet">
  <link href="../../css/prettyPhoto.css" rel="stylesheet">
  <link href="../../css/main.css" rel="stylesheet">
  <link href="../../css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="../../js/html5shiv.js"></script>
  <script src="../../js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="../../images/ico/bs1.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">

  <!--/************************* Head Calendario **************************************************************-->



  <!-- Bootstrap -->

  <link href="style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<!--/************************* Head Calendario **************************************************************-->


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
              <a class="top-number " href="../../login/logout.php">Cerrar Sesion</a>
              <li><a href="../../login/logout.php"><i class="fa fa-sign-out"></i></a></li>
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
        <a class="navbar-brand" href="../../index.php"><img src="../../images/logo2.png" alt="logo"></a>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diario Virtual <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="../../horario.php">Diario</a></li>
              <li><a href="../../horario.php">Notificaciones</a></li>
              <li><a href="../../horario.php">Horario</a></li>
              <li><a href="../../horario.php">Calendario</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Planificaciones <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="../../form_docente.php">Anual</a></li>
              <li><a href="../../actividades/form_Actividad.php">Bloque</a></li>
              <li><a href="../../tipo/form_Tipo.php">Semanal</a></li>
            </ul>
          </li>
          <?php
          if ($_SESSION['usuario']['descripcion'] == 'Administrador' ) {
            echo "<li class=\"dropdown\">
            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Herramientas <i
                class=\"fa fa-angle-down\"></i></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"docente/../../form_docente.php\">Docente</a></li>
              <li><a href=\"../../actividades/form_Actividad.php\">Alumno</a></li>
              <li><a href=\"../../tipo/form_Tipo.php\">Curso</a></li>
              <li><a href=\"../../tipo/form_Tipo.php\">Tarea</a></li>
            </ul>
          </li>";
          }
          elseif ($_SESSION['usuario']['descripcion'] == 'Docente' ) {
            echo "<li>
            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Herramientas <i
                class=\"fa fa-angle-down\"></i></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"../../tipo/form_Tipo.php\">Tarea</a></li>
            </ul>
          </li>";
          }
          ?>

          <!-- target="info"-->
          <li><a href="../../contactenos.php">Contactenos</a></li>
        </ul>
      </div>
    </div><!--/.container-->
  </nav><!--/nav-->
</header><!--/header-->

<!--/************************* IFRAME centro **************************************************************-->
<section class="carousel slide" data-ride="carousel" id="main-slider" class="no-margin" >

<!-- menu -->
<div id="menu" class="col-md-12 text-right">
  <div class="container">
    <a class="btn btn-primary" href="horario_list.php"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</a>
    <button class="btn btn-warning" data-toggle="modal" data-target="#myModal"><i class="fa fa-calendar-check-o"></i> Nuevo Horario</button>
  </div>
</div>
<!-- menu -->


<!-- container -->
<div class="container">
  <div id="clockindex" class="col-sm-12 text-center">
    <i class="fa fa-calendar-plus-o icon-clock-index animated infinite pulse" aria-hidden="true"></i>
  </div>
  <div id="mynew" class="col-sm-12">

  </div>
</div>
<!-- container -->



<!-- modal nuevo horario -->
<div class="modal fade animated bounceInLeft" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close cancel-new" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar"></i> Nuevo Horario</h4>
      </div>
      <div class="modal-body">

        <form id="horariofrm">
          <label>Nombre:</label>
          <input class="form-control" type="text" name="nombre" >
          <label>Descripción:</label>
          <textarea class="form-control" name="descripcion" rows="3"></textarea>
          <label>Dias:</label>
          <div id="days-list" class="col-sm-12">
            <a data-day="1" class="day-option">Lunes</a>
            <a data-day="2" class="day-option">Martes</a>
            <a data-day="3" class="day-option">Miercoles</a>
            <a data-day="4" class="day-option">Jueves</a>
            <a data-day="5" class="day-option">Viernes</a>
            <a data-day="6" class="day-option">Sabado</a>
            <a data-day="7" class="day-option">Domingo</a>
          </div>
          <input id="days-chose" class="form-control" type="text" name="days" >
          <label>Inicio:</label>
          <input class="form-control" type="text" id="time1" name="tiempo1">
          <label>Final:</label>
          <input class="form-control" type="text" id="time2" name="tiempo2">
          <label>Dividir Entre:</label>
          <select class="form-control" name="minutos">
            <option></option>
            <option value="35">35 Minutos</option>
            <option value="45">45 minutos</option>
            <option value="60">1 Hora</option>
          </select>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="create-horario btn btn-success"><i class="fa fa-calendar-check-o"></i> Crear</button>
        <button type="button" class="cancel-new btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- modal nuevo horario -->


<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Agregar Tarea</h4>
      </div>
      <div class="modal-body">

        <form id="taskfrm">
          <label>Tarea</label>
          <input class="form-control" type="text" id="nametask" >
          <label>Color:</label>
          <select class="form-control" id="idcolortask">
            <option value="purple-label">Purpura</option>
            <option value="red-label">Rojo</option>
            <option value="blue-label">Azul</option>
            <option value="pink-label">Rosa</option>
            <option value="green-label">Verde</option>
          </select>
          <input id="tede" type="hidden" name="tede" >
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="savetask btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
        <button type="button" class="canceltask btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- append modal set data -->




<!-- alert danger -->
<div id="alert-error"><i class="fa fa-times fa-2x"></i></div>
<!-- alert danger -->




</section>

<!--/************************* IFRAME centro **************************************************************-->
<section id="bottom">
  <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <div class="widget">
          <h3><a href="../../actividades/Actividad_list.php">Actividades académicas</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-5 col-sm-6">
        <div class="widget">
          <h3><a href="../../horario.php"> Horarios de Clases</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-2 col-sm-6">
        <div class="widget">
          <h3><a href="../../curso1/Curso_list.php">Cursos</a></h3>
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
          <li><a href="../../home.php">Home</a></li>
          <li><a href="../../about-us.php">About Us</a></li>
          <li><a href="../../contactenos.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!--/#footer-->
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.prettyPhoto.js"></script>
<script src="../../js/jquery.isotope.min.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/wow.min.js"></script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- datetimepicker -->
<script src="js/moment-with-locales.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<!-- validate -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<!-- script -->
<script src="js/script.js"></script>



</body>
</html>
