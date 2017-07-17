<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultados</title>
  </head>
  <body>
    <?php
      $conexion = mysql_connect('127.0.0.1',"root","comunismo");
      mysql_select_db("prueba",$conexion);
      $usuario = $_POST['user'];
      $password = $_POST['pass'];

      if ($conexion != false) {

        $consulta = mysql_query("select frase1,frase2,frase3 from frases",$conexion);

      }
      $var1 = mysql_result($consulta,0,"frase1");
      $var2 = mysql_result($consulta,0,"frase2");
      $var3 = mysql_result($consulta,0,"frase3");

      $conjunto = $var1." ".$var2." ".$var3;
      mysql_free_result($consulta);
      mysql_close($conexion);

      echo "Eres: ".$usuario." y tu contraseña es: ".$password;

      echo "<br/>";

      echo "El resultado es: ".$conjunto;
    ?>
  </body>
</html>
