<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/Registrovendedor.css">
    <title></title>
  </head>
  <body>
    <?php
    require_once("sections/encabezado.php");
     ?>
     <br>
     <div class="In_se">
       <form class="In_ses" action="admin/guardarvendedores.php" method="post" enctype="multipart/form-data">
         <h1>CREAR CUENTA VENDEDOR</h1>
         <input type="text" name="nombre" maxlength="30" placeholder="Ingrese su nombre">
         <input type="text" name="apppa" maxlength="30"  placeholder="Ingrese su apellido paterno">
         <input type="text" name="appma" maxlength="30"  placeholder="Ingrese su apellido materno">
         <input type="text" name="cuentabanco" maxlength="11"  placeholder="Ingrese su cuenta de banco">
         <input type="text" name="telefono" maxlength="11"  placeholder="Ingrese su telefono">
         <input type="email" name="correo" maxlength="30"  placeholder="Ingrese su correo electronico">
         <input type="password" name="contra" maxlength="11" placeholder="Ingrese su contraseña" value="">
         <input type="submit" name="" value="Aceptar"><br><br>
       </form>
     </div>
  </body>
</html>
