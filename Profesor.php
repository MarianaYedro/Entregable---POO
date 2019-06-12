<?php

// Parte C

//1. Reralizar un diagrama de clase que modele a la clase Profesor.
class Profesor
{
  //2. Implementar la clase creando los atributos necesarios
  private $nombre;
  private $apellido;
  private $antiguedad;
  private $codigo;

//3. Crear los getters y setters necesarios
  public function getNombre() {
    return $this->nombre;
  }

  public function getApellido() {
    return $this->apellido;
  }

  public function getCodigo() {
    return $this->codigo;
  }

}

 ?>
