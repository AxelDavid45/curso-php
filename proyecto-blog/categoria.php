<?php require_once "./includes/cabecera.php"; ?>
<?php  $categoria_actual = obtenerCategoria($conexion,$_GET['id']);
        if(empty($categoria_actual)):
?>
        <?php header("Location:index.php");  ?>
<?php endif;?>
<?php require_once "./includes/aside.php"; ?>

<!--Principal-->
<div id="principal">


    <h1>Entradas de <?=$categoria_actual['nombre'];  ?> </h1>

    <?php $entradas = obtenerEntradas($conexion,null,$_GET['id']);
    if(!empty($entradas)) :

        while($entrada = mysqli_fetch_assoc($entradas)) :
            ?>
            <article class="entrada">
                <a href="#">
                    <h2><?=$entrada['titulo']; ?></h2>
                    <span><?=$entrada['categoria'].' | '.$entrada['fecha_creacion']; ?></span>
                    <p><?= substr($entrada['descripcion'],0,150)."...ver más"; ?></p>
                </a>
            </article>


        <?php  endwhile; ?>
    <?php  else :?>
        <article class="entrada">
            <h2>No se encontraron entradas</h2>
            <p>Intenta mas tarde...</p>
        </article>
    <?php endif;?>

</div>

<!--FOOTER-->
<?php require_once "./includes/footer.php"; ?>