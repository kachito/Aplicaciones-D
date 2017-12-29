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
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  Call Us </p></div>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diario Virtual <i class="fa fa-angle-down"></i></a>
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
                        <li><a href="costruccion.htl" class="dropdown-toggle" data-toggle="dropdown">Asignaturas <i class="fa fa-angle-down"></i></a>



                            <ul class="dropdown-menu">
                                <li><a href="materias.php">Materia</a></li>                                
                            
                            </ul>



                            <!-- <ul class="dropdown-menu">
                                <li><a href="materias.php">Materia</a></li>                                
                                <li><a href="construccion.php">Cuestionarios</a></li>
                                <li><a href="construccion.html">Otros...</a></li>
                            </ul>-->
                        </li>   

                        <li><a href="notas/form_notas.php" >Calificaciones</a></li>  


                        <li><a href="costruccion.html" class="dropdown-toggle" data-toggle="dropdown">Planificaciones <i class="fa fa-angle-down"></i></a>
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
<section id="about-us">
        <div class="container">
            
            <!-- about us slider -->
            <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                       </div>
                       <div class="item">
                            <img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                       </div> 
                       <div class="item">
                            <img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                       </div> 
                    </div>
                    
                    <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i> 
                    </a>
                    
                    <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i> 
                    </a>
                </div> <!--/#carousel-slider-->
            </div><!--/#about-slider-->
            
            
            <!-- Nosotros - Our Skill -->
            <div class="skill-wrap clearfix">
            
                <div class="center wow fadeInDown">
                    <h2>Nosotros</h2>
                    <p class="lead">Somos un equipo de creativos con carácter innovador que brindan asesoramiento, estrategias e ideas creativas para solucionar sus problemas de comunicación visual.<br><br></p>
                    
                    <h3>Misi&oacute;n</h3>
                    <p class="lead">Satisfacer los problemas comunicacionales entre Docentes, Estudiantes y Padres de familia ofreciendo una educación de calidad, aplicando nuestra creatividad y destreza en el desarrollo de propuestas novedosas generando así respuestas efectivas, logrando la resultados positivos para nuestros clientes.<br><br></p>

                    <h3>Visi&oacute;n</h3>
                    <p class="lead">Ser referentes en comunicación visual en todo el Ecuador, como una empresa de servicios especializada en tecnologías Web y móviles para terceras empresas.<br><br></p>
                </div>
                
                
    
            </div><!--/.our-skill-->
            

            <!-- Equipo de trabajo - our-team -->
            <div class="team">
                <div class="center wow fadeInDown">
                    <h2>Equipo de trabajo</h2>
                    <p class="lead">Contamos con un excelente equipo de creativos y apasionados por <br> solucionar problemas y producir mejores resultados</p>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6"> 
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Lenin Y&eacute;pez</h4>
                                    <h5>Diseñador y Programador</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">.NET</a></li>
                                        <li class="btn"><a href="#">Php</a></li>
                                    </ul>
                                    
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>Futuro Ingeniero en Computación y Multimedia en la Universidad Superior Politécnica del Litoral. Cuenta con varios años de experiencia en la creación de aplicaciones móviles y dando soporte técnico a las mismas, actualmente es el Jefe del área de Desarrollo y Mantenimiento.</p>
                        </div>
                    </div><!--/.col-lg-4 -->
                    
                    
                    <div class="col-md-4 col-sm-6 col-md-offset-2"> 
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Fernando Rizzo</h4>
                                    <h5>Programador</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Canvas</a></li>
                                        <li class="btn"><a href="#">Java</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>Futuro Licenciado en Diseño Web y Aplicaciones Multimedia en la Universidad Superior Politécnica del Litoral. Lleva pocos años trabajando en su área, sin embargo, su gran intelecto lo ha llevado a formar parte de nuestro equipo de trabajo. Actualmente es nuestro programador senior.</p>
                        </div>
                    </div><!--/.col-lg-4 -->                    
                </div> <!--/.row -->
                <div class="row team-bar">
                    <div class="first-one-arrow hidden-xs">
                        <hr>
                    </div>
                    <div class="first-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="second-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="third-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="fourth-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                </div> <!--skill_border-->       

                <div class="row clearfix">   
                    <div class="col-md-4 col-sm-6 col-md-offset-2"> 
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <h4>Nicole Obando</h4>
                                    <h5>Diseñadora Web</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Illustrater</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>Licenciada en Diseño Gráfico Publicitario en la Escuela Superior Politécnica del Litoral. Cuenta con más de 6 años de experiencia trabajando en su área y actualmente es la Directora de proyectos en Diseño Gráfico y Multimedia en el Ecuador.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man4.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Jos&eacute; Catagua</h4>
                                    <h5>Diseñador Web y Multimedia</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Multimedia</a></li>
                                        <li class="btn"><a href="#">.NET</a></li>
                                        <li class="btn"><a href="#">Android</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>Futuro Licenciado en Diseño Web y Aplicaciones Multimedia en la Escuela Superior Politécnica del Litoral. Lleva pocos años trabajando en su área, pero a través de sus conocimientos empezó a formar parte del selecto equipo de trabajo.</p>
                        </div>
                    </div>
                </div>  <!--/.row-->
            </div><!--section-->
        </div><!--/.container-->
    </section><!--/about-us--><!--/#main-slider-->










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
                    &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
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
