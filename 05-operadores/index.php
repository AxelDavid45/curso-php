<?php
//operadores aritmeticos
/*
 * Tenemos operadores aritmeticos de:
 * Suma = +
 * Resta = -
 * Division = /
 * Multiplicacion = *
 * Modulo = %
 * */
//variables
$numero1 = 35;
$numero2 = 65;

//suma
/*echo 'La suma:'.($numero1 + $numero2).'<br>';
echo 'La resta:'.($numero1 - $numero2).'<br>';
echo 'La division:'.($numero1 / $numero2).'<br>';
echo 'La multiplicacion:'.($numero1 * $numero2).'<br>';
echo 'El modulo:'.($numero1 % $numero2).'<br>';*/

//OPERADORES DE INCREMENTO Y DECREMENTO

$year = 2019;
//--INCREMENTO
//$year++;

//----DECREMENTO
//$year--;
//-----PREINCREMENTO
//++$year;
//$year = 1 + $year;
//--PRE-DECREMENTO
//--$year;
echo '<h1>'.$year.'</h1>';

/*-----------
OPERADORES DE ASIGNACION
ATAJOS DE OPERADORES ARITMETICOS

Y asi como se realizo con la suma se puede hacer con todos los operadores aritmeticos
-------------*/

echo $numero1.'<br>';
echo ($numero1 += 5);

?>
