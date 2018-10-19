<?php

/*
 * Ejercicio2: escribir un script que nos muestre por pantalla todos los numeros pares
 * que existen del 1 al 100
 */


for($i = 1; $i <= 100; $i++) {
    if($i%2 == 0) {
        echo "<p>$i</p>";
    }
}


?>