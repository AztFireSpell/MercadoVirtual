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

      public function alta($nombre,$pass,$tipo){
          $this->sentencia="INSERT INTO usuario VALUES(null,'$nombre','$pass','$tipo')";
          $this->ejecutar_sentencia();
          echo "<h2>Usuario Agregado</h2>";
      }

      public function consulta(){
        $this->sentencia= "SELECT * FROM usuario";
        return $this->obtener_sentencia();
      }

  }
 ?>
