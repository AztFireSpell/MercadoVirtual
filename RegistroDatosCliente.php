<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/Registroclientes.css">
    <title></title>
  </head>
  <body>
    <?php
    require_once("sections/encabezado.php");
     ?>
     <br>
     <div class="In_se">

       <form class="In_ses" action="" method="post">
         <h1>CREAR CUENTA CLIENTE</h1>
         <input type="text" name="nombre" maxlength="20" placeholder="Ingrese su nombre">
         <input type="text" name="ap_pat" maxlength="20" placeholder="Ingrese su apellido paterno">
         <input type="text" name="ap_mat" maxlength="20" placeholder="Ingrese su apellido materno">
         <input type="text" name="cuenta" maxlength="20" placeholder="Ingrese su cuenta de banco">
         <input type="text" name="telefono" maxlength="20" placeholder="Ingrese su telefono">
         <input type="text" name="email" maxlength="20" placeholder="Ingrese su correo electronico">
         <input type="submit" name="guardar" value="Guardar">
       </form>
     </div>

  </body>

  <footer>
      <p>Derechos reservados</p>
  </footer>
</html>
