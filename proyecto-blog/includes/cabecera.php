<?php   require_once "conexion.php";?>
<?php  require_once "includes/helpers.php";?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Axel Espinosa</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<header id="cabecera">
    <!--    LOGO-->
    <div id="logo">
        <a href="#">
            Blog de Axel Espinosa
        </a>
    </div>
    <!--    NAVEGACION-->
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <?php
                $categorias = obtenerCategorias($conexion);
                while($categoria = mysqli_fetch_assoc($categorias)) :
            ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id'];?>"><?= $categoria['nombre'];?></a>
                    </li>
            <?php  endwhile; ?>
            <li>
                <a href="#">Sobre mi</a>
            </li>
            <li>
                <a href="#">Contacto</a>
            </li>
        </ul>
    </nav>
</header>
<div id="contenedor">