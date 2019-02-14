<?php

  // IDEA: A partir de la version  5 podemos usar programacion orientada a objetos

  class Conexion{
    private $host="localhost"; // IDEA: El nombre del dominio
    private $usuario="root";   // IDEA: El nombre del usuario
    private $password="admin";       // IDEA: Aqui va la constraseña
    private $base="mercadoupvt"; // IDEA: Aqui va el nombre de la base de datos
    private $conexion;
    public $sentencia;


    private function abrir_conexion(){
      $this->conexion = new mysqli($this->host,$this->usuario,$this->password, $this->base);   // IDEA: De la version 5 para a abajo solo se agrega mysql
    }

    private function cerrar_conexion(){
      $this->conexion->close();
    }

    public function ejecutar_sentencia(){
      $this->abrir_conexion();
      $this->conexion->query($this->$sentencia);
      $this->cerrar_conexion();
    } // IDEA: Esto es solo para insertar, eliminar o modificar.

    public function obtener_sentencia(){
      $this->abrir_conexion();
      $res= $this-> conexion->query($this->sentencia);
      return $res;
    } // IDEA: Esto es solo para consultas

  }
 ?>
