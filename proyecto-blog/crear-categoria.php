<?php require_once './includes/redireccion.php'; ?>
<?php require_once "./includes/cabecera.php"; ?>
<?php require_once "./includes/aside.php"; ?>

<div id="principal">
    <h1>Creacion de categorias</h1>
    <?php if(isset($_SESSION['cat_correcto'])) : ?>
        <div class="alerta">
            <?=$_SESSION['cat_correcto']; ?>
        </div>
    <?php elseif (isset($_SESSION['cat_error'])) : ?>
        <div class="alerta alerta-error">
            <?=$_SESSION['cat_error']; ?>
        </div>
    <?php endif;?>

    <p>Ingresa un nombre a la categoria para poder usarla, las categorias no pueden tener numeros</p>
    <br>
    <form action="guardar-categoria.php" method="POST">
        <label>
            Nombre de la categoria:
            <input type="text" name="nombre_cat">
            <input type="submit" value="Guardar categoria">
        </label>
    </form>
</div>
<?php  borrarErrores(); ?>





<?php require_once "./includes/footer.php"; ?>