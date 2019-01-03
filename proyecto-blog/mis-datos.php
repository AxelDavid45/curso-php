<?php require_once './includes/redireccion.php'; ?>
<?php require_once "./includes/cabecera.php"; ?>
<?php require_once "./includes/aside.php"; ?>

    <div id="principal">
        <h1>Actualizacion de datos</h1>
        <?php if (isset($_SESSION['completo'])): ?>
            <div class="alerta alerta-correcto ">
                <?=$_SESSION['completo'];?>
            </div>
        <?php elseif (isset($_SESSION['errores'])): ?>
            <?= isset($_SESSION['errores']['general']) ? mostrarErrores($_SESSION['errores'],'general') : '';    ?>
        <?php endif; ?>
        <br>
        <form action="actualizar-usuario.php" method="POST">
            <label>Nombre(s)
                <?= isset($_SESSION['errores']['nombre']) ? mostrarErrores($_SESSION['errores'],'nombre') : '';    ?>
                <input type="text" name="nombre" required
                       placeholder="<?= $_SESSION['usuario']['nombre']; ?>">
            </label>
            <label>Apellido(s)
                <?= isset($_SESSION['errores']['apellidos']) ? mostrarErrores($_SESSION['errores'],'apellidos') : '';    ?>
                <input type="text" name="apellidos" required
                       placeholder="<?= $_SESSION['usuario']['apellidos']; ?>">
            </label>
            <label>Email
                <?= isset($_SESSION['errores']['email']) ? mostrarErrores($_SESSION['errores'],'email') : '';    ?>
                <input type="email" name="email" required
                       placeholder="<?= $_SESSION['usuario']['email']; ?>">
            </label>
            <input type="submit" value="Registrame" name="submit">
        </form>
    </div>

<?php borrarErrores(); ?>


<?php require_once "./includes/footer.php"; ?>