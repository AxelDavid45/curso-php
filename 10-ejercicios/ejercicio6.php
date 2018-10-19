<?php
/*Ejercicio 6: Mostrar en una tabla HTML las tablas de multiplicar del 1 al 10*/


for($i = 1; $i <= 10; $i++) {
    echo '<table border="1">';
    echo '<tr>';
    echo "<th>Tabla de multiplicar del $i</th>";
    echo "<th>Resultado</th>";
    echo '</tr>';
    for($d = 1; $d <= 10; $d++) {
        echo "<tr>";
        echo "<td> $d x $d</td>";
        echo '<td>'.($d * $d).'</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '<br>';
}

?>