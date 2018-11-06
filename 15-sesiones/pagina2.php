<?php
//imprimimos la varible que esta en la sesion
//Iniciamos la sesion

session_start();

echo $_SESSION['usuario'];

?>

<ul>
    <li>
        <a href="logout.php">Cerrar Sesión</a>
    </li>
</ul>
