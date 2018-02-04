<?php
include_once('Estudiante.php');
include_once('../../db/Collector.php');
class EstudianteCollector extends Collector
{
  function showEstudiante()
  {
    $rows = self::$db->getRows("SELECT cedula,nombre,apellido,telefono,docente_cod,alumno_cod,mail,curso,cod_alumno,
                                    mail_rep,curso_cod,usuario_cod,representante,nickname,descripcion 
                                FROM persona   JOIN alumno ON alumno.cod_alumno=persona.alumno_cod  JOIN usuario 
                              ON usuario.cod_usuario=alumno.usuario_cod JOIN curso ON curso.cod_curso=alumno.curso_cod");
    $arrayEstudiante = array();
    foreach ($rows as $c) {
      $aux = new Estudiante($c{'cedula'}, $c{'nombre'}, $c{'apellido'}, $c{'telefono'}, $c{'docente_cod'},
        $c{'alumno_cod'}, $c{'mail'}, $c{'descripcion'}, $c{'cod_alumno'}, $c{'mail_rep'}, $c{'curso_cod'},
        $c{'usuario_cod'}, $c{'representante'}, $c{'nickname'});
      array_push($arrayEstudiante, $aux);
    }
    return $arrayEstudiante;
  }
  function showEstudianteId($id)
  {
    $row = self::$db->getRow("SELECT cedula,nombre,apellido,telefono,docente_cod,alumno_cod,mail FROM persona where alumno_cod= '$id'");
    $row2 = self::$db->getRow("SELECT cod_alumno, mail_rep,curso_cod,usuario_cod,representante FROM alumno where cod_alumno= '$id'");
    $id2 = $row2['curso_cod'];
    $row3 = self::$db->getRow("SELECT descripcion FROM curso where cod_curso= '$id2'");
    $id2 = $row2['usuario_cod'];
    $row4 = self::$db->getRow("SELECT nickname FROM usuario where cod_usuario= '$id2'");
    $Estudiante = new Estudiante($row{'cedula'}, $row{'nombre'}, $row{'apellido'}, $row{'telefono'}, $row{'docente_cod'},
      $row{'alumno_cod'}, $row{'mail'}, $row3{'descripcion'}, $row{'alumno_cod'}, $row2{'mail_rep'}, $row2{'curso_cod'}
      , $row2{'usuario_cod'}, $row2{'representante'}, $row4{'nickname'});
    return $Estudiante;
    return 1;
  }
  function updateEstudiante($id_estudiante, $nombre, $apellido, $cedula, $telefono, $email1, $email2, $representante, $curso)
  {
    //echo $cargo;
    $update = self::$db->getRow("Update alumno set  mail_rep='$email2',representante='$representante'
      ,curso_cod='$curso' where cod_alumno='$id_estudiante'");
    $update = self::$db->getRow("Update persona set nombre='$nombre',apellido='$apellido',cedula='$cedula',
      telefono='$telefono',mail='$email1' where alumno_cod='$id_estudiante'");
    echo ' <br><br><br><div class="container">
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
                    <div class="col-md-8 col-sm-6">
                      <img src="../../images/slider/insertar.jpg" class="img-responsive" alt="horario">
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <br>
                      <br>
                      
                      <br>
                      <h2>Actualización Exitosa</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="Estudiante_list.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';


    return 1;
  }
  function deleteEstudiante($id)
  {
    $delete = self::$db->getRow("Delete from persona where alumno_cod= '$id'");
    $delete = self::$db->getRow("Delete from alumno where cod_alumno= '$id'");

    echo ' <br><br><br><div class="container">
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
                    <div class="col-md-8 col-sm-6">
                      <img src="../../images/slider/insertar.jpg" class="img-responsive" alt="horario">
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <br>
                      <br>
                      <br><br><br><br>
                      <br>
                      <h2>Elimización Exitosa</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="Estudiante_list.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';


    return 1;
  }
  function insertEstudiante($cedula, $nombre, $apellido, $telefono, $curso, $email1, $email2, $representante, $usuario)
  {
    $tipo = 3;
    $password = password_hash($cedula, PASSWORD_BCRYPT);
    $row = self::$db->getRow("SELECT COUNT (cedula) FROM persona where cedula = '$cedula'");
    if ($row['count'] == 0) {
      $row = self::$db->getRow("SELECT COUNT (nickname) FROM usuario where nickname = '$usuario'");
      echo '<br></br>';
      // no existen usuarios con ese nickname
      if ($row["count"] == 0) {
        $new_row = self::$db->getRow("Insert into usuario (nickname,password,tipo_cod) values ('$usuario','$password','$tipo')");
        $row = self::$db->getRow("SELECT * FROM usuario where nickname='$usuario'");
        $id_user = $row['cod_usuario'];
        $new_row = self::$db->getRow("Insert into alumno (mail_rep,curso_cod,usuario_cod,representante) values ('$email2','$curso','$id_user','$representante')");
        $row = self::$db->getRow("SELECT * FROM alumno where usuario_cod='$id_user'");
        $id_user = $row['cod_alumno'];
        $new_row = self::$db->getRow("Insert into persona (cedula,nombre,apellido, telefono,mail,alumno_cod) values ('$cedula','$nombre','$apellido', '$telefono','$email1','$id_user')");
        echo '<div class="container">
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
                    <div class="col-md-8 col-sm-6">
                      <img src="../../images/slider/insertar.jpg" class="img-responsive" alt="horario">
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <br>
                      <br>
                      <br>
                      <br>
                      <h2>El usuario signado es:</h2>
                      <h1>' . $usuario . '</h1>
                      <br>
                      <br>
                      <br>
                      <h2>Ingresado Exitosamente</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="form_Estudiante.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';
// insertas
      } else {
        $row = self::$db->getRow("SELECT * FROM usuario where nickname='ldyepez'");
        $cas = 1;
        $usuario = $usuario . $cas;
        echo '<div class="container">
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
                    <div class="col-md-8 col-sm-6">
                      <img src="../../images/slider/insertar.jpg" class="img-responsive" alt="horario">
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <br>
                      <br>
                      <br>
                      <br>
                      <h2>El usuario signado es:</h2>
                      <h1>' . $usuario . '</h1>
                      <br>
                      <br>
                      <br>
                      <h2>Ingresado Exitosamente</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="form_Estudiante.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';
// ya existe un registro con ese id
      }
    } else {
      echo "Daniel es puto";
    }
    /*
    $dbconn = Collector::$db;
    $resultado=pg_query($row,$dbconn ) or die ('La consulta fallo: ');
    if (pg_num_rows($resultado)==0)
    {
      print('Exite al menos un registro');
    } else {
      print('No Existen registros');
    }
        if(count($row)!= 0){
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
        }
        else{
        echo "hola";
        }
    /*
     *
     *
     *
     *
     * $new_row = self::$db->getRow("Insert into usuario (nickname,password,tipo_cod) values ('$usuario','$password','$tipo')");
       // $a = self::$db->getRow("SELECT cod_curso FROM curso where cod = '$curso'");
        $b = self::$db->getRow("SELECT cod_usuario FROM usuario where nickname = '$usuario'");
        $new_row = self::$db->getRow("Insert into alumno (mail_rep,curso_cod,usuario_cod,representante) values ('$email2',$curso,$b,'$representante')");
        $c = self::$db->getRow("SELECT cod_alumno FROM alumno where mail = '$email2'");
        $new_row = self::$db->getRow("Insert into persona (cedula,nombre,apellido, telefono,mail,alumno_cod) values ('$cedula','$nombre','$apellido', '$telefono','$email1','$c')");
        return 1;
        }
        else{
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
          //header('Location: form_estudiante.php');
        if($row==Null){
        echo ('listo');
        }
        else{
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
          //header('Location: form_estudiante.php');
        }*/
  }
}
?>