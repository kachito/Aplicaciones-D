<?php
session_start();
 include_once('PasswordCollector.php');
 //include_once('Estudiante.php');

 $cod_usuario = $_POST['cod_usuario'];
 $password = $_POST['password'];


//echo  $cargo;		

 $PasswordCollectorObj = new PasswordCollector();
 $PasswordCollectorObj->updatePassword($cod_usuario,$password);

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
   
   <h3>Actualizacion Exitosamente</h3>
   </head>
<body>
  
      <form action="Password_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
