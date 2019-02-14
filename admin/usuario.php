<?php
  require_once("conexion.php");
  class Usuario extends Conexion{  // IDEA: El nombre de la clase debe estar como se escribio anteriormente
      public function validar($us,$pass){
        $this->sentencia="Select * from usuario where nombre='$us' AND password ='$pass'";
        $resultado = $this->obtener_sentencia();
        if ($resultado->num_rows==1) {
          return true;
        }else {
          return false;
        }
      }
  }
 ?>
