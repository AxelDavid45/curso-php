<?php

//Mostrando la cookie

if(isset($_COOKIE['basica'])) {
    echo "<h1> valor de ".$_COOKIE['basica']."</h1>";
} else {
    echo '<h1>Esta cookie no existe</h1>';
}

if(isset($_COOKIE['expiracion'])) {
    echo "<h1> valor de ".$_COOKIE['expiracion']."</h1>";
} else {
    echo '<h1>Esta cookie no existe</h1>';
}
?>

<a href="crear_cookies.php">Crear mis Galletas</a>
<a href="borrar_cookies.php">Borrar mis galletas</a>