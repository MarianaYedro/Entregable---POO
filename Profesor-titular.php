<?php
// Modelo clase Profesor titular
  class ProfesorTitular extends Profesor
{
  private $especialidad;

  function __construct(string $unaEspecialidad)
  {
    $this->especialidad = $unaEspecialidad
  }

  public function getEspecialidad() {
    return $this->especialidad;
  }

  public function setEspecialidad() {
    $this->especialidad = $unaEspecialidad;
  }
}

 ?>
