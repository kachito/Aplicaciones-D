<?php
session_start();
include_once('EstudianteCollector.php');
include_once('Estudiante.php');
$id = $_GET['id'];
$EstudianteCollectorObj = new EstudianteCollector();
$EstudianteCollectorObj->deleteEstudiante($id);
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
</html></html>