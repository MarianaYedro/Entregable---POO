<?php

// Parte B

// 1. Reralizar un diagrama de clase que modele a la clase Curso.
class Curso
{
  // 2. Implementar la clase creando los atributos necesarios
  private $nombreCurso;
  private $codigoCurso;
  private $cupo; // E - Agrego cupo de alumnos
  private $profesorTitular;
  private $profesorAdjunto;
  private $listaAlumnos = [];

  public function __construct(string $unNombre, integer $unCodigo, integer $unCupo)
  {
    $this->nombreCurso = $unNombre;
    $this->codigoCurso = $unCodigo;
    $this->cupo = $unCupo;
  }

// 3. Crear los getters y setters necesarios
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

// Crear un método que permita obtener a los profesores
  public function setProfesorAdjunto(profesorAdjunto $profesor) {
    $this->profesorAdjunto = $profesor;
  }

  public function setProfesorTitular(profesorTitular $profesor) {
    $this->profesorAdjunto = $profesor;
  }

// Crear un método que permita listar alumnos
  public function setListaAlumnos(listaAlumnos $listaAlumnos) {
    $this->listaAlumnos = $listaAlumnos;
  }

// Parte G - Crear un método en la clase Curso que permita agregar un alumno a la lista. El método devolverá true si el alumno puede agregarse o false en caso de que no haya cupo disponible.

  public function agregarUnAlumno(Alumno $unAlumno){
    if ($cupo) {
      return true;
    } else {
      return false;
    }
  }
}

 ?>
