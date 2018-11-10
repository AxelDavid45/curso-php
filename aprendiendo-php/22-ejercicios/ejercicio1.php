<?php

/*
 * Ejercicio 1: crea una sesion que aumente su valor en 1 o disminuya en 1 en funcion de si el parametro get counter esta a uno o a cero
 *
 * */

session_start();

if(!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}
if(isset($_GET['counter']) && $_GET['counter'] == 1) {
    $_SESSION['numero'] += 1;
}
if(isset($_GET['counter']) && $_GET['counter'] == 0) {
    $_SESSION['numero'] -= 1;
}


?>

<h1>El valor de la sesion es <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar</a>
<a href="ejercicio1.php?counter=0">Disminuir</a>

