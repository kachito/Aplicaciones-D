<?php


include_once('Estudiante.php');
include_once('../../db/Collector.php');

class DocenteCollector extends Collector
{

  function showEstudiante()
  {
    $rows = self::$db->getRows("SELECT * FROM alumno ");
    $arrayEstudiante = array();
    foreach ($rows as $c) {
      $aux = new Estudiante($c{'id_estudiante'}, $c{'nombre'}, $c{'apellido'}, $c{'edad'}, $c{'cedula'}, $c{'genero'}, $c{'email'});

      array_push($arrayEstudiante, $aux);
    }
    return $arrayEstudiante;
  }

  function showEstudianteId($id)
  {

    $row = self::$db->getRow("SELECT * FROM estudiante where id_estudiante = '$id'");

    $Estudiante = new Estudiante($row{'id_estudiante'}, $row{'nombre'}, $row{'apellido'}, $row{'edad'}, $row{'cedula'}, $row{'genero'}, $row{'email'});
    return $Estudiante;
  }


  function updateEstudiante($id_estudiante, $nombre, $apellido, $edad, $cedula, $genero, $email)
  {

    //echo $cargo;
    $update = self::$db->getRow("Update estudiante set nombre='$nombre',apellido='$apellido',edad='$edad',cedula='$cedula',genero='$genero',email='$email' where id_estudiante='$id_estudiante'");
    return 1;
  }

  function deleteEstudiante($id)
  {

    $delete = self::$db->getRow("Delete from estudiante where id_estudiante= '$id'");
    return 1;
  }

  function insertEstudiante($cedula, $nombre, $apellido, $telefono, $curso, $email1, $email2, $representante, $usuario)
  {
    $tipo = 3;
    $password = password_hash($cedula, PASSWORD_BCRYPT);

    echo $usuario;

    $row = self::$db->getRow("SELECT COUNT (nickname) FROM usuario where nickname = '$usuario'");
    echo '<br></br>';


    // no existen usuarios con ese nickname
    if ($row["count"] == 0) {

      $new_row = self::$db->getRow("Insert into usuario (nickname,password,tipo_cod) values ('$usuario','$password','$tipo')");
      $row = self::$db->getRow("SELECT * FROM usuario where nickname='$usuario'");
      $id_user=$row['cod_usuario'];
      $new_row = self::$db->getRow("Insert into alumno (mail_rep,curso_cod,usuario_cod,representante) values ('$email2','$curso','$id_user','$representante')");
      $row = self::$db->getRow("SELECT * FROM alumno where usuario_cod='$id_user'");
      $id_user=$row['cod_alumno'];
      $new_row = self::$db->getRow("Insert into persona (cedula,nombre,apellido, telefono,mail,alumno_cod) values ('$cedula','$nombre','$apellido', '$telefono','$email1','$id_user')");

      echo '<h3>Usuario asignado es:</h3>';
      print '<h>'.$usuario.'</h>';





// insertas
    } else {

      $row = self::$db->getRow("SELECT * FROM usuario where nickname='ldyepez'");
       $cas = 1;
      $usuario = $usuario . $cas;
      echo '<br></br>';



      echo'<div class="container">

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
                      <h1>'.$usuario.'</h1>

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
            <a href="Docente_list.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';









      print('Exite al menos un registro');

// ya existe un registro con ese id
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

