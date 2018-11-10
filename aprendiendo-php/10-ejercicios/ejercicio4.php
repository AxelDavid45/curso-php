<?php
/*Escribir un script que recoja por el metodo GET dos numeros y con ellos hacer las
operaciones basicas de una calculadora
*/
if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET['numero2'];

    echo "<h2>El numero 1 es $numero1</h2>";
    echo "<h2>El numero 2 es $numero2</h2>";

    $suma = $numero1 + $numero2;
    echo "La suma de los numeros es $suma <br/>";

    $resta = $numero1 - $numero2;
    echo "La resta de los numeros es $resta <br/>";

    $multiplicacion = $numero1 * $numero2;
    echo "La multiplicacion de los numeros es $multiplicacion <br/>";

    $division = $numero1 / $numero2;
    echo "La division de los numeros es $division <br/>";
} else {
    echo '<p>Pasa dos valores como parametros por la url</p>';
}






?>