<?php
session_start();

//Finalizamos la sesion
session_destroy();
echo '<h1>La sesion ha finalizado</h1>'

?>

<ul>
    <li>
        <a href="index.php">Iniciar Sesión</a>
    </li>
</ul>
