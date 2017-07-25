<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultados</title>
  </head>
  <body>
    <?php
      error_reporting(0);

      $conexion = mysql_connect('127.0.0.1',"root","comunismo");
      mysql_select_db("neumaticos",$conexion);
      $usuario = $_POST['dni'];
      $password = $_POST['pass'];

      if ($conexion != false) {
          try {

              $consulta = mysql_query("select dni,contrasena from usuarios where dni='$usuario' and contrasena='$password'",$conexion);

          } catch (Exception $e) {
              echo "Esto no tira";
          }
      }
      else {
        echo "Fallo en la conexión";
      }
      if ($consulta != false) {
        try {
          $var1 = mysql_result($consulta,0,"dni");
          $var2 = mysql_result($consulta,0,"contrasena");

        } catch (Exception $e) {
          echo "Da fallo";
        }


        if ($var1 == $usuario && $var2 == $password){

          header("location:pagina_inicio.html");

          mysql_free_result($consulta);
          mysql_close($conexion);
        }
        else {
          echo "No Eres: ".$usuario;

          echo "<br/>";

          echo "Tu IP será bloqueada si sigues intentando entrar en la plataforma";
        }
      }
      else {
        echo "Joder Macho";
      }






    ?>
  </body>
</html>
