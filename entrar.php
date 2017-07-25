<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultados</title>
  </head>
  <body>
    <?php
      $conexion = mysql_connect('127.0.0.1',"root","comunismo");
      mysql_select_db("neumaticos",$conexion);
      $usuario = $_POST['user'];
      $password = $_POST['pass'];

      if ($conexion != false) {

        $consulta = mysql_query("select nombre,contrasena from usuarios where nombre=".$usuario.",contrasena=".$password.",",$conexion);

      }

      $var1 = mysql_result($consulta,0,"nombre");
      $var2 = mysql_result($consulta,0,"contrasena");

      if ($var1 == $usuario && $var2 == $password){

        echo "Access Granted";
        echo "<br/>";
        echo "<a href=pagina_inicio.html>Click Aquí</a>";

        mysql_free_result($consulta);
        mysql_close($conexion);
      }
      else {
        echo "No Eres: ".$usuario"";

        echo "<br/>";

        echo "Tu IP será bloqueada si sigues intentando entrar en la plataforma";
      }




    ?>
  </body>
</html>
