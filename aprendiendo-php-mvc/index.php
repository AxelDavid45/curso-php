<h1>Bienvenidos</h1>
<?php

require_once "autoload.php";

//Hacemos que se concatene la palabra controller
if(isset($_GET['controller'])) {
    $clase = $_GET['controller'].'Controller';
} else {
    echo "La pagina que buscas no existe";
    die();
}
//Hacemos que busque dinamicamente el controlador

//Esto se llama controlador frontal
if(class_exists($clase)) {
    $controlador = new $clase();
    if (isset($_GET['action']) && method_exists($controlador,$_GET['action'])) {
        $method = $_GET['action'];
        $controlador->$method();
    } else {
        echo "No existe ningun metodo con ese nombre";
    }
} else {
    echo "No existe ningun metodo con ese nombre";
}

?>
