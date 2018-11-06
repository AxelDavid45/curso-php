<?php

//Comprobamos que existan las varibales
if (isset($_POST['usuario']) && isset($_POST['pass'])) {
    echo '<h1> Usuario registrado: '.$_POST['usuario'].'</h1>';
    echo '<h2> Contraseña: '.$_POST['pass'].'</h2>';
}




?>