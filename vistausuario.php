<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/vistausuario.css">
    <title></title>
  </head>
  <body>

        <h1>Vista de usuario</h1>
        <li> <a href="vistausuario.php">Usuario</a> </li>
        <li> <a href="vistaproductos.php">Productos</a> </li>
        <li> <a href="vistavende.php">Productos</a> </li>

      <?php
          require_once("admin/usuario.php");
          $obj = new usuario();

          if(isset($_POST["guardar"])) {
            $obj -> alta($_POST["nombre"],$_POST["pass"],$_POST["tipo"]);
          }
          $res=$obj->consulta();
       ?>

       <table>
         <tr>
           <th>Usuario</th>
           <th>Password</th>
           <th>Tipo</th>
           <th>Eliminar</th>
           <th>Modificar</th>
         </tr>
         <?php
                while ($fila=$res-> fetch_assoc()) {
                  echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>*************</td>";
                    echo "<td>".$fila["tipo"]."</td>";
                  echo "</tr>";
                }
          ?>
       </table>

    </section>

  </body>
</html>
