<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
     <form action="" method="post">
          Nombre: <br><input type="text" name="nombre"> <br><br>
          Password:<br> <input type="password" name="password"><br><br>
          <input type="submit" name="login" value="Ingresar">
     </form>
     <?php
      if(isset($_POST["login"])){
        require_once("admin/usuario.php");
        // IDEA: instanciamos un nuevo objeto
          $obj= new Usuario();
          $nom= $_POST["nombre"];
          $pass= $_POST["password"];
          $bandera = $obj->validar($nom,$pass);
          if ($bandera==true) {
            header("Location: admin/index.php");
          }else {
            echo "<p>Revisar usuario y contraseña</p>";
          }
      }
      ?>
  </body>
</html>
