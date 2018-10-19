<?php
/*Ejercicio 6: Hacer un programa que muestre todos los numeros entre dos numeros que nos vengan por la url*/
if(isset($_GET['n1']) && isset($_GET['n2'])) {
    $n1 = (int) $_GET['n1'];
    $n2 = (int) $_GET['n2'];

    $i = $n1 + 1;
    if($n1 < $n2) {
        for($i; $i < $n2; $i++) {
            echo $i.'<br>';
        }
    } else {
        echo '<h1>El numero 1 debe ser menor que el numero 2</h1>';
    }

} else {
    echo '<h1>Escribe un parametro por la url</h1>';
}



?>