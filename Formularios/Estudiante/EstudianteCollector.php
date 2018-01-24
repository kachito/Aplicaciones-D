<?php


include_once('Estudiante.php');
include_once('../../db/Collector.php');

class EstudianteCollector extends Collector
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
    if ($row["count"] == 0) {
      print('No Existen registros');
// insertas
    } else {
      print('Exite al menos un registro');
      $row = self::$db->getRow("SELECT * FROM usuario where nickname='ldyepez'");
      echo $row['cod_usuario'];
      $cas = 1;
      $usuario = $usuario . $cas;
      echo '<br></br>';
      echo $usuario;
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

