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
      <div class="formulario">
     <form class="fom" action="admin/guardarproductos.php" method="post" enctype="multipart/form-data"><br>
         <label for="nombre">Nombre:</label>
         <input type="text" required name="nombre" placeholder="Nombre..." value=""><br><br>
         <label for="id_categoria">Categoria:</label>
         <select class="" required name="id_categoria">
           <option value="1">Electronica</option>
           <option value="2">Herramienta</option>
           <option value="3">Moda</option>
           <option value="4">Ocio</option>
         </select>
         <br><br><label for="descripcion">Descripsion:</label>
         <input type="text" required name="descripcion" placeholder="Añada una descripcion" value=""><br><br>
         <label for="precio">Precio:</label>
         <input type="number" min="0" max="5000" required name="precio"  placeholder="Ingrese el precio del producto" value=""><br><br>
         <label for="id_vendedor">ID Vendedor</label>
         <input type="text" required name="id_vendedor" placeholder="ingrese el id del vendedor" value=""><br><br>
         <div class="imagen">
           <label for="imagen">Foto del producto:</label>
           <input type="file" required name="imagen" value=""><br><br>
         </div>
         <input type="submit" name="" value="Aceptar"><br><br>
     </form>
     </div>
   </center>
  </body>
</html>
