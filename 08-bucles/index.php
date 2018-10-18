<?php

/*Bucle while

El bucle se estara ejecutando hasta que la condicion que tenga sea falsa
*/

$numero = 0;

//El ciclo while
while($numero <= 100) {
    echo $numero;

    if($numero != 100) {
        echo ', ';
    }
    $numero++;
}

echo '<hr>';

//usamos isset para ver que la variable tenga algo y se pueda comprobar correctamente
if(isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}
//mostramos las tablas de multiplicar
echo "<h1>Las tablas de multiplicar del número $numero</h1>";

$contador = 1;

while($contador <= 10) {
    echo "$numero x $contador = ".($numero * $contador).'<br>';
    $contador++;
}



//var_dump($numero);


?>