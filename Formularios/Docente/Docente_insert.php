<?php
session_start();
include_once('DocenteCollector.php');
//$id = $_POST['ID'];

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$curso = $_POST['curso'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$representante = $_POST['representante'];
$usuario = $_POST['usuario'];
$DocenteCollectorObj = new DocenteCollector();
$DocenteCollectorObj->insertDocente($cedula, $nombre, $apellido, $telefono, $curso, $email1, $email2, $representante, $usuario);
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

<!--/************************* IFRAME centro **************************************************************-->




<!--/************************* IFRAME centro **************************************************************-->

</form>
</body>
</html>