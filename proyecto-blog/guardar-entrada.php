<?php
if(isset($_POST)) {
    //importamos la conexion a la bd
    require_once 'includes/conexion.php';
    require_once 'includes/helpers.php';
    borrarErrores();
    //Recoleccion de datos
    $titulo = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion,$_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria_id']) ? (int)$_POST['categoria_id'] : false;
    $usuario_id = (int)$_SESSION['usuario']['id'];

    $errores = [];
    //comprobar que todo este correctamente rellenado
    if(empty($titulo)) {
        $errores['titulo'] = "El titulo contiene errores";
    }
    if(empty($descripcion)) {
        $errores['descripcion'] = "La descripcion contiene errores";
    }
    if(empty($categoria)) {
        $errores['categoria'] = "La categoria no es valida";
    }
    //Contamos los errores
    if(count($errores) == 0) {
        $id_get = (int)$_GET['id'];
        if(isset($_GET['editar'])) {
            $sql = "UPDATE posts SET titulo = '$titulo',descripcion = '$descripcion',categoria_id = $categoria ".
                    "WHERE id = $id_get AND usuario_id = $usuario_id;";
        } else {
            $sql = "INSERT INTO posts VALUES(null,$usuario_id,$categoria,'$titulo','$descripcion',CURDATE());";
        }

        $query = mysqli_query($conexion,$sql);
        if($query) {
            $_SESSION['e']['inf'] = "Guardado correctamente, dirigete al inicio";
        } else {
            $_SESSION['e']['error'] = "Hubo un problema al guardar el post";
        }
    } else {
        $_SESSION['errores-entrada'] = $errores;
    }

}
if(isset($_GET['editar'])) {
    header('Location:editar_entrada.php?id='.$id_get);
} else {
    header('Location:crear-entrada.php');
}
