<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $usuario = $_POST['usuario'];
      $password = $_POST['password'];

      echo "Eres: ".$usuario." y tu contraseña es: ".$password;
    ?>
  </body>
</html>
