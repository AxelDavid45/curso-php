<?php
/*  Este archivo hace que si no existe una sesion no te deje entrar a funciones del blog
 * */

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['usuario'])) {
    header('Location:index.php');
}