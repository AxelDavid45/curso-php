<?php
//Iniciamos la sesion
session_start();
//Comprobamos que exista el login
if(isset($_SESSION['usuario'])) {
    session_destroy(); //cerramos la sesión
}
//redireccion al index
header('Location: index.php');