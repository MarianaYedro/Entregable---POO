<?php
// Modelo clase Profesor adjunto
  class ProfesorAdjunto extends Profesor
{
  private $horasConsulta;

  function __construct(string $horas)
  {
    $this->horasConsulta = $horas;
  }

  public function getHorasConsulta() {
    return $this->horasConsulta;
  }

  public function setHorasConsulta() {
    $this->horasConsulta = $horas;
  }
}

 ?>
