<?php
$nombres = ['Axel', 'Juan', 'Pedro','2pac','Salinas'];
$numeros = [1,4,5,19,34,3];

//Ordenar los arreglos de forma alfabetica
asort($nombres);
var_dump($nombres);
//Forma alfabetica inversa
arsort($nombres);
var_dump($nombres);
//sort para ordenar numeros y letas alfabeticamente
sort($nombres);
var_dump($nombres);
sort($numeros);
var_dump($numeros);

//Añadir un elemento al final del arreglo con array_push
array_push($nombres,'Moises');
var_dump($nombres);

//Eliminar el ultimo elemento del array
array_pop($nombres);
var_dump($nombres);

//Eliminar un indice en particular
unset($nombres[3]);
var_dump($nombres);

//Sacar un elemento aleatorio
$resultado = array_rand($nombres);
echo "<br> $nombres[$resultado]<br>";

//Invertir un los elementos del array
var_dump(array_reverse($nombres));

//Buscar un elemento dentro de un array
var_dump(array_search('Axl',$nombres));

//Forma de contar números
echo '<br>'.count($nombres);
echo '<br>'.sizeof($nombres);







?>