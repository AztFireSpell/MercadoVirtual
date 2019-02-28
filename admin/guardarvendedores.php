<?php

 include("conexion2.php");

 $nombre = $_POST['nombre'];
 $appat = $_POST['apppa'];
 $appmat = $_POST['appma'];
 $banco = $_POST['cuentabanco'];
 $telefono = $_POST['telefono'];
 $correo = $_POST['correo'];
 $contras = $_POST['contra'];
 $query = "INSERT into vendedores (nombre,apppat,appmat,cuentabanco,telefono,correo,contrasena) values('$nombre','$appat','$appmat','$banco','$telefono','$correo','$contras')";
 $resultado = $conexion ->query($query);

 if ($resultado) {
   ("Location: ../index.php");
 }else {
   echo "No se ha guardado";
 }

 ?>
