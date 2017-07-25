<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>

    <?php
    error_reporting(0);

    $conexion = mysql_connect('127.0.0.1',"root","comunismo");
    mysql_select_db("neumaticos",$conexion);

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $empresa = $_POST['empresa'];
    $email = $_POST['correo'];
    $dni = $_POST['dni'];
    $contrasena = $_POST['pass'];

    if ($conexion != false) {
      $resultado = mysql_query("insert into usuarios values ('$nombre','$contrasena','$apellidos','$empresa','$dni')");
    }

     ?>

  </body>
</html>
