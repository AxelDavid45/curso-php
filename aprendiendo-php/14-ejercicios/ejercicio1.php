<?php

//funcion mostrar resultado
function mostrarArray($arrays) {
    $resultado = "";
    foreach ($arrays as $array) {
        $resultado .= $array.', ';
    }
    return $resultado;
}

$numeros = [1,3,9,5,6,75,4,6];

//Mostrando el arreglo
echo '<h1>Mostrando el array</h1>';
echo mostrarArray($numeros);


// Ordenando el arreglo
asort($numeros);
echo '<h1>El arreglo ordenado es: </h1>';
echo mostrarArray($numeros);

//Mostrando la longitud

echo '<h1>La longitud del arreglo es:'. ' '.count($numeros).'</h1>';

//Buscando un el numero que venga desde el parametro de la url
if(isset($_GET['numero'])) {
    $valorURL = $_GET['numero'];
    echo "<h1>Buscando el numero $valorURL en el arreglo</h1>";
    $metodo = array_search($valorURL,$numeros);

    if(!empty($metodo)) {
        echo "<p>El numero que buscas esta en el indice $metodo</p>";
    } else {
        echo '<p>El valor que buscas no existe en el arreglo</p>';
    }
}


?>