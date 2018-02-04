<?php
session_start();
include_once('EstudianteCollector.php');
//include_once('Estudiante.php');

$id_estudiante = $_POST['id_estudiante'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$representante = $_POST['representante'];
$curso = $_POST['curso'];

//echo  $cargo;

$EstudianteCollectorObj = new EstudianteCollector();
$EstudianteCollectorObj->updateEstudiante($id_estudiante,$nombre,$apellido,(int)$cedula,(int)$telefono,$email1,$email2,$representante,$curso);

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <title>B-Smart</title>
  <!-- Estilos CSS vinculados -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


</body>
</html>
