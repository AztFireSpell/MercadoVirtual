<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/iniciarsesion.css">
    <title></title>
  </head>
  <body>
    <?php
    require_once("sections/encabezado.php");
     ?>
     <div class="formulario">
       <form class="" action="admin/validarusuario.php" method="post">
         <h1>INICIAR SESION</h1>
         <input id="caja" type="text" name="nombre" maxlength="30" placeholder="Ingrese su usuario">
         <input id="caja" type="password" name="password" maxlength="30" placeholder="Ingrese su contraseña">
         <button type="button" onclick="location.href='RegistroDatosVendedor.php'">Registrate</button>
         <input type="submit" name="login" value="Ingresar">
       </form>

     </div>
  </body>
</html>
