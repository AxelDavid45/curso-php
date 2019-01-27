<?php
//importamos la clase coche
require_once "coche.php";

$coche = new Coche("Amarillo","Ferrari",300);
$coche2 = new Coche("Azul","For",100);

echo $coche->mostrarInformacion($coche2);


//var_dump($coche);
//var_dump($coche2);