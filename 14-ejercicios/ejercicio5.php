<?php

$tabla = [

    'ACCION' => [
        'GTA','COD','PUGB'
    ],
    'AVENTURA' => [
        'ASSASINS', 'CRASH', 'Prince Of Persia'
    ],
    'DEPORTES' => [
        'FIFA 19', 'PES 19', 'MOTO GP 19'
    ],
    'CARRERAS' => [
        'NFS', 'RACING', 'FORZA'
]

];

//Usamos la funcion array_keys para obtener los indices

$categorias = array_keys($tabla);
//var_dump($categorias);
?>

<table border="1">
    <!--    Encabezados -->
    <?php require_once 'ejercicio5/encabezados.php'?>
    <!--    Filas -->
    <?php require_once 'ejercicio5/filas0.php'?>
    <?php require_once 'ejercicio5/filas1.php'?>
    <?php require_once 'ejercicio5/filas2.php'?>


</table>


