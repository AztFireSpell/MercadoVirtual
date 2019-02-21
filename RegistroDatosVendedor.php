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
       <form class="In_ses" action="index.html" method="post">
         <h1>CREAR CUENTA VENDEDOR</h1>
         <input type="text" maxlength="20" placeholder="Ingrese su nombre">
         <input type="text" maxlength="20" placeholder="Ingrese su apellido paterno">
         <input type="text" maxlength="20" placeholder="Ingrese su apellido materno">
         <input type="text" maxlength="20" placeholder="Ingrese su cuenta de banco">
         <input type="text" maxlength="20" placeholder="Ingrese su telefono">
         <input type="text" maxlength="20" placeholder="Ingrese su correo electronico">
         <input type="checkbox" />Acepto terminos y condiciones
         <button type="button">Registrarse</<button>
       </form>
     </div>

  </body>
</html>
