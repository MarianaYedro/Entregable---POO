<?php
require_once 'partials/autoload.php';
// Instancio Alumnos
$jose = new Alumno("Jose " , "Perez" , 245);
$ana = new Alumno ("Ana" , "Rodriguez" , 124);
$pedro = new Alumno ("Pedro" , "Alonzo" , 22);

// Instancio profesores
$ramon= new ProfesorAdjunto("Ramon" , "Perez" , 24 , 345, 9 );
$enrique= new ProfesorTitular("Enrique" , "Romero" , 2 , 1200 , "Ed.fisica");

// Instancio Curso
$fullstack = new curso ("FullStack" , 153 , 30);

//setters

//seteo los 2 profesores tanto el adjunto como el titular
$fullstack->setProfesorAdjunto($ramon);
$fullstack->setProfesorTitular($enrique);

//seteo lista de alumbnos con 3 alumnos creados
$fullstack->setListaAlumnos($jose);
$fullstack->setListaAlumnos($pedro);
$fullstack->setListaAlumnos($ana);


// pruebo la funcion para listar los nombres de los alumnos sin necesidad de traer qa todo el objeto solo el nombre.
$fullstack->listarAlumnos();
echo "<pre>";
var_dump($fullstack);
echo "</pre>";


$pruebacupo= new curso ("prueba" , 200 , 2);





/*
echo "<pre>";
var_dump($fullstack);
echo "</pre>";
