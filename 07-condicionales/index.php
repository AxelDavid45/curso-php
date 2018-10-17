<?php
/*
 * La estructura condicional if tiene la siguiente forma
 * if(condicion) {
 *  instrucciones
 * } else {
 *  instrucciones
 * }
 * */

$year = 2010;

/*if($year == 2019) {

    echo '<h1> estamos en 2019</h1>';
    echo '<br>';
} else {
    echo '<h1>No estamos en 2019</h1>';
}*/

//elseif
//$dia = 7;
//
//if($dia == 1) {
//    echo 'Lunes';
//
//}elseif ($dia == 2) {
//    echo 'Martes';
//}elseif ($dia == 3) {
//    echo 'Miercoles';
//}elseif ($dia == 4) {
//    echo 'Jueves';
//}elseif ($dia == 5) {
//    echo 'Viernes';
//}else {
//    echo 'Fin de semana';
//}

echo '<hr>';

$pais = 'Colombia';

if($pais == 'Mexico' || $pais == 'Colombia' || $pais == 'Espana') {
    echo '<h1>En este pais se habla español</h1>';

}else {
    echo '<h1>En este pais no se habla español</h1>';
}


?>