<?php

// Parte B

// 1. Reralizar un diagrama de clase que modele a la clase Curso.
class Curso
{
  // 2. Implementar la clase creando los atributos necesarios
  protected $nombreCurso;
  protected $codigoCurso;
  protected $cupo; // E - Agrego cupo de alumnos
  protected $profesorTitular;
  protected $profesorAdjunto;
  protected $listaAlumnos = [];

  public function __construct(string $unNombre, int $unCodigo, int $unCupo)
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

  public function setProfesorAdjunto(ProfesorAdjunto $profesor) {
    $this->profesorAdjunto = $profesor;
  }

  public function setProfesorTitular(ProfesorTitular $profesor) {
    $this->profesorTitular = $profesor;
  }

  public function getProfesorAdjunto(){
    return $this->profesorAdjunto;
  }

  public function getProfesorTitular(){
    return $this->profesorTitular;
  }

 // Agrego un alumno a la ultima posicion de la lista
  public function setListaAlumnos(Alumno $nuevoAlumno) {
    $this->listaAlumnos[] = $nuevoAlumno;
  }

  public function getListaAlumnos(){
    return $this->listaAlumnos;
  }

 // Punto E - Listar alumnos
  public function listarAlumnos(){
    foreach ($this->listaAlumnos as $alumno) {
      echo $alumno->getNombre() . "<br>";
    }
  }

  // Parte G

  }

 ?>
