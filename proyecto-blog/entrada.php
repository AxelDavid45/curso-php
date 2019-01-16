<?php require_once "./includes/cabecera.php"; ?>
<?php require_once "./includes/aside.php"; ?>

<!--Principal-->
<div id="principal">
    <?php  $entrada_actual = obtenerEntrada($conexion,$_GET['id']); ?>
    <h1><?=$entrada_actual['titulo']; ?></h1>
    <strong><?=$entrada_actual['fecha_creacion'];?></strong>
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id'];?>">
        <p><?=$entrada_actual['categoria_nombre']; ?></p>
    </a>
    <p><?=$entrada_actual['descripcion'];?></p>

    <?php   if(isset($_SESSION['usuario'])  && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']) : ?>
        <a href="editar_entrada.php?id=<?=$entrada_actual['id'];?>&cat=<?=$entrada_actual['categoria_id'];?>" class="boton boton-verde">Editar entrada</a>
        <a href="borrar_entrada.php?id=<?=$entrada_actual['id'];?>&cat=<?=$entrada_actual['categoria_id'];?>" class="boton boton-rojo">Borrar entrada</a>
    <?php  endif; ?>
</div>

<!--FOOTER-->
<?php require_once "./includes/footer.php"; ?>


