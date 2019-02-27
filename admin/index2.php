<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stile.css">
    <title></title>
  </head>
  <body>
    <ul>
      <a href="?sec=us"><li>Usuario</li></a>
    </ul>
    <?php
    if (isset($_GET["sec"])) {
      if($_GET["sec"]=="us") {
          require_once("vistaUsuario.php");
      }
    }
  ?>
  </body>
</html>
