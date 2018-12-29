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
    //Elimina errores de creacion de categorias
    if (isset($_SESSION['cat_correcto'])) {
        $_SESSION['cat_correcto'] = null;
        unset($_SESSION['cat_correctot']);
    }
    if (isset($_SESSION['cat_error'])) {
        $_SESSION['cat_error'] = null;
        unset($_SESSION['cat_cerror']);
    }
}
//Obtiene las categorias
function obtenerCategorias($conexion) {
    $resultado = [];
    $sql = "SELECT * FROM categorias ORDER BY id;";
    $categorias = mysqli_query($conexion,$sql);
    if($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = $categorias;
    }
    return $resultado;
}
//obtiene las categorias
function obtenerEntradas($conexion) {
    $resultado = [];
    $sql = "SELECT p.*,c.nombre AS 'categoria' FROM posts p INNER JOIN categorias c ON c.id = p.categoria_id ORDER BY p.fecha_creacion DESC;";
    $entradas = mysqli_query($conexion,$sql);

    if($entradas && mysqli_num_rows($entradas) >=1) {
        $resultado = $entradas;
    }
    return $resultado;
}