<?php   

include_once('Curso.php');
include_once('../../db/Collector.php');

class CursoCollector extends Collector
{


function showCurso() {
    $rows = self::$db->getRows("SELECT * FROM curso ");        
    $arrayCurso= array();        
    foreach ($rows as $c){
      $aux = new Curso($c{'cod_curso'},$c{'descripcion'},$c{'paralelo'});

      array_push($arrayCurso, $aux);
    }
    return $arrayCurso;        
  }

  function showCursoId($id) {

    $row = self::$db->getRow("SELECT * FROM curso where cod_curso = '$id'");
    $Curso = new Curso($row{'cod_curso'},$row{'descripcion'},$row{'paralelo'},$row{'materia_cod'},$row{'horarios_id'});
    return $Curso;        
  }
 
  function updateCurso($cod_curso,$descripcion, $paralelo) {
  
  //echo $cargo;
    $update = self::$db->getRow("Update curso set descripcion='$descripcion',paralelo='$paralelo' where cod_curso='$cod_curso'");
 return 1;  
  }

  function deleteCurso($id) {

 $delete = self::$db->getRow("Delete from curso where cod_curso= '$id'");
   return 1;          
  }

  function insertCurso($descripcion, $paralelo, $id) {
    $new_row = self::$db->getRow("Insert into curso (paralelo,descripcion) values ('$paralelo','$descripcion')");

 return 1;               
  }



}
?>



