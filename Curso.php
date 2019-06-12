<?php

// Parte B

//1. Reralizar un diagrama de clase que modele a la clase Curso.
class Curso
{
  //2. Implementar la clase creando los atributos necesarios
  private $nombreCurso;
  private $codigoCurso;
  private $cupo;

  public function __construct(string $unNombre, integer $unCodigo, integer $unCupo)
  {
    $this->nombreCurso = $unNombre;
    $this->codigoCurso = $unCodigo;
    $this->cupo = $unCupo;

  }

//3. Crear los getters y setters necesarios
  public function getNombre() {
    return $this->nombreCurso;
  }

  public function getCodigo() {
    return $this->codigoCurso;
  }

  public function setNombre($unNombre){
    $this->nombreCurso = $unNombre;
  }

  public function setCodigo($unCurso){
    $this->codigoCurso = $unCurso;
  }

}

 ?>
