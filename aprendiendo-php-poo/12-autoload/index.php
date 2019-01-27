<?php
//Llamamos al autoloader de clases
require_once 'autoloader.php';

$user = new Usuario();
echo $user->nombre;
