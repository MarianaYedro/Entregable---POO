<?php
//require_once "autoload.php";

// Parte F - Realizar un diagrama de clase que modele a la clase DigitalHouseManager. En principio, DigitalHouseManager tiene una lista de alumnos (Alumnos) , una lista de profesores (Profesores) y una lista de cursos (Cursos).

class DigitalHouseManager
{
  private $listaAlumnos = [];
  private $listaProfesores = [];
  private $listaCursos = [];

  function __construct($unaListaAlumnos, $unaListaProfesores, $unaListaCursos)
  {
    $this->listaAlumnos = $unaListaAlumnos;
    $this->$listaProfesores = $unaListaProfesores;
    $this->$listaCursos = $unaListaCursos;
  }

  public function setListaAlumnos($unaListaAlumnos){
    $this->listaAlumnos = $unaListaAlumnos;
  }

  public function getListaAlumnos() {
    return $this->listaAlumnos;
  }

  public function setListaPorfesores($unaListaProfesores){
    $this->listaProfesores = $unaListaProfesores;
  }

  public function getListaProfesores() {
    return $this->listaProfesores;
  }

  public function setListaCursos($unaListaCursos){
    $this->listaCursos = $unaListaCursos;
  }

  public function getListaCursos() {
    return $this->listaCursos;
  }
}

 ?>
