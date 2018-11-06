<?php
//Ejercicio3

if(isset($_GET['miVariable']) && isset($_GET['texto'])) {
    $miVariable = $_GET['miVariable'];
    $texto = strtolower($_GET['texto']);

    if(empty($miVariable)) {
        echo "<p>Relleno la variable con $texto en minusculas</p>";

        $miVariable = $texto;
        echo "<p>Mostrando el texto en mayusculas</p>";
        echo '<h1>'.strtoupper($miVariable).'</h1>';
    }
} else {
    echo 'pasa los parametros mivariable y texto por la url';
}





?>