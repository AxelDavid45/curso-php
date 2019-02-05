<?php

require_once "autoload.php";
require_once "views/layout/header.php";
require_once "views/layout/aside.php";
//Comprueba que exista el controller
if(isset($_GET['controller'])) {
    $clase = $_GET['controller'].'Controller';
} else {
    echo "La pagina que buscas no existe";
    die();
}

if(class_exists($clase)) {
    $controler = new $clase();
    //Busca el metodo
    if(isset($_GET['method']) && method_exists($controler,$_GET['method'])) {
        $method = $_GET['method'];
        $controler->$method();
    } else {
        echo "La pagina que buscas no existe";
    }
} else {
    echo "La pagina que buscas no existe";
}

require_once "views/layout/footer.php";
?>

