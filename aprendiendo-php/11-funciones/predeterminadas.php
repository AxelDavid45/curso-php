<?php

/*Funciones predeterminadas en php*/

//Funcion de debuggeo
$nombre = 'Axel';
echo var_dump($nombre);
echo '<br>';

//funciones para fechas
echo date('d-m-y');
echo '<br>';

//funciones redondeo
echo 'Funcion redondeo que tiene dentro a pi otra funcion '.round(pi(),6);
echo '<br>';

//funcion numero random
echo 'Este es un numero random: '.rand(10,1030303);
echo '<br>';

//funcion para conseguir el tipo de variable
echo '<br>';
echo gettype($nombre);

//funcion para detectar el tipado de la variable
echo '<br>';
if(is_string($nombre)) {
    echo '$nombre es un string';
}

//funcion para comprobar que exista la variable en el codigo
echo '<br>';
if(isset($nino)) {
    echo 'La variable nino esta declarada';
} else {
    echo 'La variable no existe :(';
}

//funcion para remover los espacios antes y despues de un string, esto hace que se vea mejor
echo '<br>';
$prueba = '                    contenido             ';
echo var_dump($prueba);
echo var_dump(trim($prueba)); //poniendo a prueba trim();

//funcion para comprobar si una variable esta vacia o no empty()
echo '<br>';
$axel=1;

if(!empty($axel)) {
    echo 'Esta variable tiene contenido';
} else {
    echo 'Esta variable esta vacia';
}

//funcion para contar los caracteres de un string
echo '<br>';
$axel = 'axel';
echo strlen($axel);

echo '<br>';
//funcion para buscar palabras o letras dentro de un string
echo strpos($axel,'e'); //primero colocamos la variable y despues el paramtro

echo '<br>';
//funcion para remplazar parte de un string

$palabra = 'No me gustas'; //variable sin manipular
echo $palabra;
echo '<br>';
echo str_replace('No','Si',$palabra); //manipulamos poniendo primero la busqueda,remplazo y varibale

//funcion para poner todo en minusculas
echo '<br>';
echo strtolower($palabra);
echo '<br>';
echo strtoupper($palabra);












?>