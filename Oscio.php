<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/ocio.css">
    <title></title>
  </head>
  <body>
    <?php
      require_once("sections/encabezado.php");
     ?>

     <?php
     require_once("sections/pie.php");
      ?>

      <center>
            <table border ="2">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>descripcion</th>
                <th>Precio</th>
                <th>Imagen</th>

              </tr>
              </thead>
            <tbody>
                <?php

                        include("admin/conexion2.php");
                        $query="SELECT nombre,descripcion,precio,imagen FROM producto where id_categoria=4";
                        $resultado=$conexion->query($query);
                        while ($row = $resultado->fetch_assoc()) {

                 ?>
                      <tr>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                        <td> <img height="90px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"> </td>
                      </tr>
                 <?php
               }
                  ?>
            </tbody>
            </table>
      </center>


  </body>
</html>
