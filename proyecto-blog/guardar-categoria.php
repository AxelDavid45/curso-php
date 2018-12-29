<?php
if (isset($_POST)) {
    //traemos la conexion
    require_once "includes/conexion.php";

    //recogemos los datos
    $nombre_cat = isset($_POST['nombre_cat']) ? mysqli_real_escape_string($conexion,$_POST['nombre_cat']) : null;

    if(!empty($nombre_cat) && !preg_match("/[0-9]/",$nombre_cat)) {
        $sql = "INSERT INTO categorias VALUES(null,'$nombre_cat');";
        $query = mysqli_query($conexion,$sql);
        if($query) {
            $_SESSION['cat_correcto'] = "Categoria generada correctamente";
        } else {
            $_SESSION['cat_error'] = "Error al crear la categoria";
        }
    } else {
        $_SESSION['cat_error'] = "Error al crear la categoria";
    }
}
header("Location:crear-categoria.php");