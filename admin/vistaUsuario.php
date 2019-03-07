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
      if (isset($_POST["eliminar"])) {
        //$obj->eliminar($_POST["id"]);

        $res=$obj->consulta();
        ?>
        <script type="text/javascript">
          var valor = confirm("¿Deseas eliminar al usuario?");
          if (valor==true) {
            $obj->eliminar($_POST["id"]);
          }
        </script>
      }


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
                echo "<td>
                <form action ='' method=''>
                <input type='hidden' value='".$fila["id"]."' name='id'>
                <input type='submit' name='eliminar' value='Eliminar'>
                </form>
                </td>";
              echo "</tr>";
            }
      ?>
   </table>

</section>
