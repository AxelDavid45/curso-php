<?php
//El bucle for es parecido al anterior while
//En este ejemplo sumaremos los numeros comprendidos del 1 al 100

$i = 0;
$resultado = 0;

for($i; $i <= 100; $i++) {
    $resultado += $i;
    echo '<p>'.$resultado.'</p>';
}

echo "<h1>El resultado es $resultado </h1>";







?>