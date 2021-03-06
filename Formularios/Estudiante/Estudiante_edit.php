<?php
session_start();
$id = $_GET['id'];
// echo $id;
include_once('Estudiante.php');
include_once('EstudianteCollector.php');
$EstudianteCollectorObj = new EstudianteCollector();
$ObjEstudiante = $EstudianteCollectorObj->showEstudianteId($id);
include_once('../curso/CursoCollector.php');
$CursoCollectorObj = new CursoCollector();
//print_r($ObjTransportista);
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
</head><!--/head-->
<body class="homepage">
<header id="header" style=" width: 100%; position: fixed; z-index: 100;">
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="../../index.php"><img src="../../images/logo2.png" alt="logo" height="80%"></a>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../../users/home.php">Home</a></li>
          <li><a href="../../users/about-us.php">About Us</a></li>
          <li><a href="../Tarea/Tarea_list.php">Diario Virtual</a></li>
          <?php
          if ($_SESSION['usuario']['descripcion'] == 'Administrador') {
            echo '
              <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Herramientas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="../Docente/Docente_list.php">Docente</a></li>
              <li><a href="../Estudiante/Estudiante_list.php">Alumno</a></li>
              <li><a href="../Curso/Curso_list.php">Curso</a></li>
              <li><a href="../Materia/Materia_list.php">Materia</a></li>
              <li><a href="../Tarea/Tarea_list.php">Tarea</a></li>
              </ul>
          </li>
            ';
          } elseif ($_SESSION['usuario']['descripcion'] == 'Docente') {
            echo '
                <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Herramientas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="../Tarea/Tarea_list.php">Tarea</a></li>
                </ul>
          </li>
                ';
          }
          ?>
          <!-- target="info"-->
          <li><a href="../../contactenos.php">Contactenos</a></li>
          <li class=" dropdown">
            <a href="#" class="dropdown-toggle">
              <div class="fa fa-user-md"></div>
              <i></i> <?php
              echo $_SESSION['usuario']['nickname'];
              ?></a>
            <ul class="dropdown-menu">
              <li><a href="../../login/logout.php">
                  <div class="fa fa-sign-out"></div>
                  Cerrar Sesion</a></li>
              <?php
              echo '<li><a href="../password/Password_edit.php?id=' . $_SESSION['usuario']['cod_usuario'] . '">Cambiar Contraseña</a></li>'
              ?>
            </ul>
          </li>
      </div>
      </ul>
    </div>
    </div><!--/.container-->
  </nav><!--/nav-->
</header><!--/header-->
<!--/************************* IFRAME centro *************************************************************-->
<section>
  <br>
  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Estudiante</h2>
        <p class="lead">B-Smart</p>
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <form action="Estudiante_update.php" method="post" action="form-horizontal">
          <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
              <label>Cédula *</label>
              <input type="text" name="cedula" id="cedula" class="form-control" required="required" maxlength="10"
                     value="<?php echo $ObjEstudiante->getcedula(); ?>" onkeypress="return isNumber(event)" onkeyup="isCedula();">
              <span id="messageced"></span>
            </div>
            <div class="form-group">
              <label>Nombre *</label>
              <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $ObjEstudiante->getnombre(); ?>" required="required">
            </div>
            <div class="form-group">
              <label>Apellido *</label>
              <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $ObjEstudiante->getapellido(); ?>" required="required"
                     onkeyup="nicknam();">
            </div>
            <div class="form-group">
              <label>Teléfono</label>
              <input type="text" name="telefono" class="form-control" value="<?php echo $ObjEstudiante->gettelefono(); ?>" onkeypress="return isNumber(event)"
              ">
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Email Alumno*</label>
              <input type="email" name="email1" id="email1" class="form-control" value="<?php echo $ObjEstudiante->getemail1(); ?>" required="required"
                     onkeyup="validateEmailA();">
              <span id="messageemaila"></span>
            </div>
            <div class="form-group">
              <label>Email Representante*</label>
              <input type="email" id="email2" name="email2" class="form-control" required="required" value="<?php echo $ObjEstudiante->getemail2(); ?>"
                     onkeyup="validateEmailR();">
              <span id="messageemail"></span>
            </div>
            <div class="form-group">
              <label>Nombres y Apellidos del representante legal*</label>
              <input type="text" id="representante" name="representante" class="form-control" value="<?php echo $ObjEstudiante->getrepresentante(); ?>" required="required">
            </div>
            <div class="form-group">
              <label>curso: *</label>
              <select class="form-control" typeof="checkbox" name="curso">
                <?php
                foreach ($CursoCollectorObj->showCurso() as $c) {
                  echo '<option value=' . $c->getcod_curso() . '>';
                  echo $c->getdescripcion();
                  echo '</option>';
                }
                ?>
              </select>
            </div>
            <input type="text" name="usuario" id="usuario" style="visibility: hidden">
          </div>
          <div class="col-sm-8 col-sm-offset-4">
            <input type="number" name="id_estudiante" required="required" style="visibility:hidden" readonly
                   value="<?php echo $ObjEstudiante->getcod_alumno(); ?>">
          </div>
          <br>
          <div class="form-group">
            <div class="col-xs-offset-4 col-xs-8">
              <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">
              <input type="reset" class="btn btn-primary" value="Limpiar">
              <input type="submit" class="btn btn-primary" value="Actualizar">
            </div>
          </div>
        </form>
      </div><!--/.row-->
    </div><!--/.container-->
  </section>
</section>
<!--/************************* IFRAME centro **************************************************************-->
<!--/************************* Foot **************************************************************-->
<section id="bottom">
  <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3><a href="#">Actividades académicas</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3><a href="#">Calendario académico</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3><a href="#">Nuevos cursos</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3><a href="#">Anuncios de profesores</a></h3>
        </div>
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
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Faq</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!--/#footer-->
<script src="js/datos.js"></script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.prettyPhoto.js"></script>
<script src="../../js/jquery.isotope.min.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/wow.min.js"></script>
</body>
</html>