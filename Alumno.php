<?php

//Parte A

//1. Reralizar un diagrama de clase que modele a la clase Alumno.
class Alumno
{
  //2. Implementar la clase creando los atributos necesarios
  private $nombre;
  private $apellido;
  private $codigo;

//3. Crear un cosntructor para el alumno que tome por parámetro un nombre, un apellido y un código de alumno.
  public function __construct($elNombre, $elApellido, $elCodigo)
  {
    $this->nombre = $elNombre;
    $this->apellido = $elApellido;
    $this->codigo = $elCodigo;
  }

//4. Crear los getters y setters necesarios
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
