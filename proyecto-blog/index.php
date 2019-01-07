<?php require_once "./includes/cabecera.php"; ?>
<?php require_once "./includes/aside.php"; ?>

<!--Principal-->
<div id="principal">
    <h1>Actividad reciente</h1>

    <?php $entradas = obtenerEntradas($conexion,3);
        if(!empty($entradas)) :

        while($entrada = mysqli_fetch_assoc($entradas)) :
    ?>
            <article class="entrada">
                <a href="entrada.php?id=<?=$entrada['id'];?>">
                    <h2><?=$entrada['titulo']; ?></h2>
                    <span><?=$entrada['categoria'].' | '.$entrada['fecha_creacion']; ?> | Creada por: <?= $entrada['usuario'];  ?></span>

                    <p><?= substr($entrada['descripcion'],0,150)."...ver más"; ?></p>
                </a>
            </article>


    <?php  endwhile; ?>
    <?php  else :?>
            <?php var_dump($entradas);?>
    <article class="entrada">
                    <h2>No se encontraron entradas</h2>
                    <p>Intenta mas tarde...</p>
            </article>
    <?php endif;?>

    <div id="ver-todas">
        <a href="vertodas.php">Ver todas las entradas</a>
    </div>
</div>

<!--FOOTER-->
<?php require_once "./includes/footer.php"; ?>


