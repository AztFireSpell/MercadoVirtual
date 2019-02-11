<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php
        require_once("encabezado.php");
     ?>
    <form action="Desde aqui" method="post">
      <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="user_name">
      </div>
      <div>
        <label for="mail">Email:</label>
        <input type="text" id="mail" name="user_mail">
      </div>
      <div>
        <label for="msg">Mensaje:</label>
        <textarea id="msg" name="user_message" ></textarea>
      </div>
      <div class="boton">
        <button type="submit">Enviar</button>
      </div>
    </form>
  </body>
</html>
