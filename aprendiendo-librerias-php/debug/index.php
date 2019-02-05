<?php
//requerimos autoload veendor
require_once "../vendor/autoload.php";

//llamaamos a la clase estatica de fb
$array = [['nombre'=>'Axel Espinosa','edad'=>'2'],['nombre'=>'Diana','edad'=>'10']];
\FB::log($array);
echo "Hola mundo, checa la consola";
