<?php

  include("conexion2.php");

  $nombre = $_POST['nombre'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $categoria = $_POST['id_categoria'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $vendedor = $_POST['id_vendedor'];
  $query = "INSERT into producto (nombre,id_categoria,descripcion,precio,id_vendedor,imagen) values('$nombre','$categoria','$descripcion','$precio','$vendedor','$imagen')";
  $resultado = $conexion ->query($query);

  if ($resultado) {
    header("Location: ../index.php");
  }else {
    echo "No se ha guardado";
  }

 ?>
