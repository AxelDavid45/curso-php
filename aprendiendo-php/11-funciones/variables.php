<?php
//variables globales y locales

//variable global
$frase = "Hola axel soy una variable global";

function localyGlobal() {
//    para poder usar una variable como global se debe definir de la sig manera
    global $frase;

    echo $frase.'<hr>';
//    variable local no funcionara fuera de la funcion a menos que la retornemos
    $year = 2019;

    return $year;
}


echo localyGlobal();
//ejemplo de variable

//funciones variables
function buenasDias() {
    return '<h1>Buenas dias</h1>';
}
function buenasNoches() {
    return '<h1>Buenas Noches</h1>';
}
function buenasTardes() {
    return '<h1>Buenas Tardes</h1>';
}
//Guardamos el nombre tal cual de la funcion en un variable
$funcionVariable = "buenasTardes";

//ejecutamos la funcion agregangole a la variable los parentesis
echo $funcionVariable();




?>