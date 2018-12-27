<?php
    $host = "localhost";
    $usr = "root";
    $password = "";
    $db = "blog_master";
    $conexion = mysqli_connect($host,$usr,$password,$db);

    mysqli_query($conexion,"SET NAMES utf8");

    //Iniciar la sesion
    session_start();

?>