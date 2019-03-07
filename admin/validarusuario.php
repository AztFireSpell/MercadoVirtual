<?php

  include("conexion2.php");
  $nombre = $_POST['nombre'];
  $contra = $_POST['password'];
  $query="select * from vendedores where nombre='$nombre' and contrasena='$contra'";
  $resultado= $conexion->query($query);

  if ($resultado) {
    header("Location: ../index.php");
  }else {
    echo "No se ha guardado";
  }

?>
