<?php
//Sesiones en php

//Iniciamos la sesion

session_start();

$_SESSION['usuario'] = '<h1>La sesion esta iniciada para el usuario Axel</h1>';

echo $_SESSION['usuario'];


?>

<ul>
    <li>
        <a href="logout.php">Cerrar Sesión</a>
    </li>
</ul>

