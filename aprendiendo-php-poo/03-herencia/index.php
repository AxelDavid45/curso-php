<?php
require_once "clases.php";
//Creamos la persona
$persona = new Persona();
var_dump($persona);
//Creamos el que hereda los metodos y atributos de la persona
$programador = new Programador();
var_dump($programador);
$tecnico = new TecnicoInformatico();
var_dump($tecnico);