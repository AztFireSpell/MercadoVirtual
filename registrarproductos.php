<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/registrarprod.css">
    <title></title>
  </head>
  <body>
    <?php
    require_once("sections/encabezado.php");
    require_once("sections/pie.php");
     ?>
    <center>
     <form class="" action="admin/guardarproductos.php" method="post" enctype="multipart/form-data"><br>
         <input type="text" required name="nombre" placeholder="Nombre..." value=""><br><br>
         <select class="" required name="id_categoria">
           <option value="1">Electronica</option>
           <option value="2">Herramienta</option>
           <option value="3">Moda</option>
           <option value="4">Ocio</option>
         </select>
         <br><br><input type="text" required name="descripcion" placeholder="Añada una descripcion" value=""><br><br>
         <input type="text" required name="precio"  placeholder="Ingrese el precio del producto" value=""><br><br>
         <input type="text" required name="id_vendedor" placeholder="ingrese el id del vendedor" value=""><br><br>
         <input type="file" required name="imagen" value=""><br><br>
         <input type="submit" name="" value="Aceptar"><br><br>
     </form>
   </center>
  </body>
</html>
