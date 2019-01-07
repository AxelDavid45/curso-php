<?php
require_once "includes/conexion.php";
if(isset($_SESSION['usuario']) && isset($_GET['id']) && isset($_GET['cat']) ) {

    $id_post = $_GET['id'];
    $cat_id = $_GET['cat'];
    $usuario_id = $_SESSION['usuario']['id'];

    $sql = "DELETE FROM posts WHERE usuario_id = $usuario_id AND id = $id_post";
    $realizar = mysqli_query($conexion,$sql);
    if($realizar) {
        header("Location:categoria.php?id=$cat_id");
    }
} else {
    header('Location: index.php');

}
