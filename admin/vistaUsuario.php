<section>

  <form class="" action="" method="post">
    Nombre: <input type="text" name="nombre" value="">
    <br>
    Password: <input type="password" name="pass" value="">
    <br>
    Tipo:
    <select class="" name="tipo">
      <option value="1">Admin</option>
      <option value="2">Usuario</option>
    </select>
    <br>
    <input type="submit" name="guardar" value="Guardar">
  </form>

  <?php
      require_once("usuario.php");
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
