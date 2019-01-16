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
    }
    if (isset($_SESSION['completo'])) {
        $_SESSION['completo'] = null;
    }
    /*===============================================
     ELIMINA LOS ERRORES DE LA CREACION DE CATEGORIAS
     ================================================*/
    if (isset($_SESSION['cat_correcto'])) {
        $_SESSION['cat_correcto'] = null;
    }
    if (isset($_SESSION['cat_error'])) {
        $_SESSION['cat_error'] = null;
    }
    /*===============================================
     FIN  ERRORES DE LA CREACION DE CATEGORIAS
     ================================================*/
    /*================================================
     * BORRA LOS ERRORES DE LA SECCION CREAR ENTRADA
     * ===============================================*/
    if (isset($_SESSION['e'])) {
        $_SESSION['e'] = null;
    }
    if (isset($_SESSION['errores-entrada'])) {
        $_SESSION['errores-entrada'] = null;
    }
    /*================================================
     * FIN ERRORES DE LA SECCION CREAR ENTRADA
     * ===============================================*/
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
function obtenerCategoria($conexion,$id) {
    $resultado = [];
    $sql = "SELECT * FROM categorias WHERE id = {$id} ORDER BY id ;";
    $categorias = mysqli_query($conexion,$sql);
    if($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = mysqli_fetch_assoc($categorias);
    }
    return $resultado;
}

//obtiene las categorias
function obtenerEntradas($conexion, $limit = null, $id = null,$busqueda = null) {
    $resultado = [];
    $sql = "SELECT p.*,c.nombre AS 'categoria', CONCAT(u.nombre,' ',u.apellidos) AS 'usuario' FROM posts p INNER JOIN categorias c ON c.id = p.categoria_id ".
            "INNER JOIN usuarios u ON u.id = p.usuario_id";

    if($id) {
        $sql .= " WHERE c.id = $id";
    }
    if($busqueda) {
        $sql.= " WHERE p.titulo LIKE '%{$busqueda}%' OR p.descripcion LIKE '%{$busqueda}%' ";
    }
    $sql .=  " ORDER BY p.fecha_creacion DESC";
    if($limit != null) {
        $sql .= " LIMIT $limit";
    }
    //Comprueba que exista el limite
    $entradas = mysqli_query($conexion,$sql);

    if($entradas && mysqli_num_rows($entradas) >=1) {
        $resultado = $entradas;
    }
    return $resultado;
}

//Obtiene solo una entradda
function obtenerEntrada($conexion,$id) {
    $resultado = [];
    $sql = "SELECT p.*, c.nombre AS 'categoria_nombre' FROM posts p ".
            "INNER JOIN categorias c ON c.id = p.categoria_id ".
            "WHERE p.id = {$id}";
    $entrada = mysqli_query($conexion,$sql);
    if($entrada && mysqli_num_rows($entrada) >= 1) {
        $resultado = mysqli_fetch_assoc($entrada);
    }
    return $resultado;
}