<?php
//Funcion que muestra las alertas en la pagina
function mostrarErrores($errores,$campo) {
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)) {

        $alerta = "<div class='alerta alerta-error'> $errores[$campo]</div>";

    }
    return $alerta;
}

//Cierra la sesion y no muestra mas informacion
function borrarErrores() {
//    $session_end = session_destroy();
    if(isset($_SESSION['errores'])) {
        $_SESSION["errores"] = null;
        unset($_SESSION['errores']);
    }
    if (isset($_SESSION['completo'])) {
        $_SESSION['completo'] = null;
        unset($_SESSION['completo']);
    }
}