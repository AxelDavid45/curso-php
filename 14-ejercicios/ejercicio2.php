<?php

function mostrarElementos($array) {
    $resultado = '';
    foreach ($array as $a) {
        $resultado .= $a.'<br>';
    }
    return $resultado;

}

$vacio = array();

while(sizeof($vacio) < 120) {
    array_push($vacio,rand(1,500));
}

echo '<h1>Mostrando los elementos</h1>';
echo mostrarElementos($vacio);

?>