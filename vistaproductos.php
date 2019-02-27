<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/vistausuario.css">
    <title></title>
  </head>
  <body>

        <h1>Vista de productos</h1>
        <li> <a href="vistausuario.php">Usuario</a> </li>
        <li> <a href="vistaproductos.php">Productos</a> </li>
        <li> <a href="vistavende.php">Vendedores</a> </li>

      <?php
          require_once("admin/usuario.php");
          $obj = new usuario();

          $res=$obj->consulta_pro();
       ?>

       <table>
         <tr>
           <th>Producto</th>
           <th>Categoria</th>
           <th>Descripcion</th>
           <th>Precio</th>
           <th>id_vendedor</th>
         </tr>
         <?php
                while ($fila=$res-> fetch_assoc()) {
                  echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["id_categoria"]."</td>";
                    echo "<td>".$fila["descripcion"]."</td>";
                    echo "<td>".$fila["precio"]."</td>";
                    echo "<td>".$fila["id_vendedor"]."</td>";
                  echo "</tr>";
                }
          ?>
       </table>

    </section>

  </body>
</html>
