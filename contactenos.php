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
          <li><a href="about-us.html">About Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diario Virtual <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="construccion.html">Diario</a></li>
              <li><a href="horario.html">Horario de Clases</a></li>
              <li><a href="construccion.html">Horario de Examenes</a></li>
            </ul>
          </li>
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Asignaturas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="materias.html">Materia</a></li>
              <li><a href="construccion.html">Cuestionarios</a></li>
              <li><a href="construccion.html">Otros...</a></li>
            </ul>
          </li>
          <!-- target="info"-->
          <li><a href="construccion.html">Calificaciones</a></li>
          <li><a href="construccion.html">Planificaciones</a></li>
          <li><a href="contactenos.html">Contactenos</a></li>
        </ul>
      </div>
    </div><!--/.container-->
  </nav><!--/nav-->
</header><!--/header-->
<!--/************************* IFRAME centro **************************************************************-->
<section id="contact-info">
  <div class="center">
    <h2>¿Cómo Llegar?</h2>
    <p class="lead">Nos encontramos, en la cuidadela "EL Recreo".</p>
  </div>
  <div class="gmap-area">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 text-center">
          <div class="gmap">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7973.910829086441!2d-79.80600705026248!3d-2.1706538449761856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6bc00e9ac545%3A0x5d985e1de0f90856!2sUnnamed+Rd%2C+Dur%C3%A1n%2C+Ecuador!5e0!3m2!1sen!2s!4v1426440589502"
              width="600" height="450" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
        <div class="col-sm-7 map-content">
          <ul class="row">
            <li class="col-sm-6">
              <address>
                <p>Unidad Educativa</p>
                <p>Ciudad de Ariel</p>
                <p>Ciudade el recreo 5ta Etapa,<br>
                  Diagonal a la empresa electrica</p>
                <p><br>
                </p>
              </address>
            </li>
 
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>  <!--/gmap_area -->
<section id="contact-page">
  <div class="container">
    <div class="center">
      <h2>Deja tu mensaje</h2>
      <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="row contact-wrap">
      <div class="status alert alert-success" style="display: none"></div>
      <!--<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php"> -->
      <div class="col-sm-5 col-sm-offset-1">
        <div class="form-group">
          <label>Name *</label>
          <input type="text" name="name" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Email *</label>
          <input type="email" name="email" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="number" class="form-control">
        </div>
        <div class="form-group">
          <label>Company Name</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-group">
          <label>Subject *</label>
          <input type="text" name="subject" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Message *</label>
          <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
        </div>
        <div class="form-group">
          <a href="construccion.html">
            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message
            </button>
          </a>
        </div>
      </div>
      <!--    </form>-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/#contact-page-->
<!--/************************* IFRAME centro **************************************************************-->
<!--/************************* IFRAME centro **************************************************************-->
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>
