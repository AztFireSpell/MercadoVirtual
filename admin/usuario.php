<?php
  require_once("conexion.php");
  class usuario extends Conexion{  // IDEA: El nombre de la clase debe estar como se escribio anteriormente
      public function validar($us,$pass){
        $this->sentencia="Select * from vendedores where nombre='$us' AND contrasena ='$pass'";
        $resultado = $this->obtener_sentencia();
        if ($resultado->num_rows==1) {
          return true;
        }else {
          return false;
        }
      }

      public function alta($nombre,$pass,$tipo){
          $this->sentencia="INSERT INTO vendedores VALUES(null,'$nombre','$pass','$tipo')";
          $this->ejecutar_sentencia();
          echo "<h2>Usuario Agregado</h2>";
      }

      public funtion eliminar($id){
        $this->sentencia="DELETE from usuario where id="$id"";
        $this->ejecutar_sentencia();
        echo "<h2>Usuario Eliminado</h2>";
      }


      public function altaprod($nombre,$pass,$tipo){
          $this->sentencia="INSERT INTO usuario VALUES(null,'$nombre','$pass','$tipo')";
          $this->ejecutar_sentencia();
          echo "<h2>Usuario Agregado</h2>";
      }

      public function consulta(){
        $this->sentencia= "SELECT * FROM usuario";
        return $this->obtener_sentencia();
      }

      public function consulta_pro(){
        $this->sentencia= "SELECT * FROM producto";
        return $this->obtener_sentencia();
      }

      public function consulta_ven(){
        $this->sentencia= "SELECT * FROM vendedores ";
        return $this->obtener_sentencia();
      }

      public function consulta_elect(){
        $this->sentencia= "SELECT * FROM productos where id_categoria=1 ";
        return $this->obtener_sentencia();
      }

      public function consulta_herra(){
        $this->sentencia= "SELECT * FROM productos where id_categoria=2 ";
        return $this->obtener_sentencia();
      }

      public function consulta_moda(){
        $this->sentencia= "SELECT * FROM productos where id_categoria=3 ";
        return $this->obtener_sentencia();
      }

      public function consulta_ocio(){
        $this->sentencia= "SELECT * FROM productos where id_categoria=4 ";
        return $this->obtener_sentencia();
      }
  }
 ?>
