<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style.css">
    <title></title>
  </head>
  <body>
    <?php
    require_once("sections/encabezado.php");
     ?>

     <div class="In_se">
       <form class="In_ses" action="index.html" method="post">
         <h1>INICIAR SESION</h1>
         <input type="text" maxlength="20" placeholder="Ingrese su usuario">
         <input type="password" maxlength="20" placeholder="Ingrese su contraseña">
         <button type="button">Registrarse</<button>
         <button type="submit">Iniciar Sesion</button>
       </form>
     </div>

  </body>
</html>
