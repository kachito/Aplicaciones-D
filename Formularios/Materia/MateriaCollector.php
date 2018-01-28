<?php

include_once('Materia.php');
include_once('../../db/Collector.php');

class MateriaCollector extends Collector
{

  function showMateria()
  {
    $rows = self::$db->getRows("SELECT * FROM nota ");
    $arrayMateria = array();
    foreach ($rows as $c) {
      $aux = new Materia($c{'id_nota'}, $c{'anio'}, $c{'nota1'}, $c{'nota2'}, $c{'nota3'}, $c{'nota4'}, $c{'promedio'}, $c{'recuperacion'});

      array_push($arrayMateria, $aux);
    }
    return $arrayMateria;
  }

  function showMateriaId($id)
  {

    $row = self::$db->getRow("SELECT * FROM nota where id_nota = '$id'");

    $Materia = new Materia($row{'id_nota'}, $row{'anio'}, $row{'nota1'}, $row{'nota2'}, $row{'nota3'}, $row{'nota4'}, $row{'promedio'}, $row{'recuperacion'});
    return $Materia;
  }


  function updateMateria($id_nota, $anio, $nota1, $nota2, $nota3, $nota4, $promedio, $recuperacion)
  {

    //echo $cargo;
    $update = self::$db->getRow("Update nota set anio='$anio',nota1='$nota1',nota2='$nota2',nota3='$nota3',nota4='$nota4',promedio='$promedio',recuperacion='$recuperacion' where id_nota='$id_nota'");
    return 1;
  }

  function deleteMateria($id)
  {

    $delete = self::$db->getRow("Delete from nota where id_nota= '$id'");
    return 1;
  }

  function insertMateria($descripcion, $elec_array)
  {




    $new_row = self::$db->getRow("Insert into materia (descripcion) values ('$descripcion')");
    $row = self::$db->getRow("SELECT * FROM materia where descripcion='$descripcion'");
    $id_mate=$row['cod_materia'];

    foreach ($elec_array as $c){

      $new_row = self::$db->getRow("Insert into matexcurso (materia_cod,curso_cod) values ('$id_mate','$c')");


    }









//insertar
      /* $consulta = "insert into publicacion(metodo)
 values ( '$elec_array' )";

       $result = mysql_query($consulta, $conexion);
     }
 //validacion
     if ($result) {
      echo "Se ingreso correctamente la informaicon del checkbox $";

      $row = self::$db->getRow("SELECT * FROM materia where descripcion='Ciencias Naturales'");
      $id_user = $row['cod_materia'];
      foreach ($elec_array as $value) {
        print $value;
      }





    /*
     $row = self::$db->getRow("SELECT * FROM materia where descripcion='Ciencias Naturales'");
     $id_user=$row['cod_materia'];
     $new_row = self::$db->getRow("Insert into matexcurso (materia_cod,curso_cod) values ('$id_user','$selec_array')");


     foreach ($selec_array as $valor) {
       $new_row = self::$db->getRow("Insert into matexcurso (materia_cod,curso_cod) values ('$id_user','$selec_array[$valor]')");
     }

 */


    return 1;
  }


}

?>
