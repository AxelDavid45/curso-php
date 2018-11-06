<?php

$error = '';

if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['email']) &&
    !empty($_POST['pass'])) {

    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

//    Comprobando los datos individuales
    if(!is_string($nombre) || !preg_match("/[a-zA-Z ]+/",$nombre)) {
        $error = 'nombre';
    }
    if(!is_string($apellidos) || !preg_match("/[a-zA-Z ]+/",$apellidos)) {
        $error = 'apellidos';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }
    if(strlen($pass) < 5) {
        $error = 'pass';

    }

} else {
    $error = 'faltan_valores';
}

if($error != 'ok') {
    header("Location:index.php?error=$error");
}




?>