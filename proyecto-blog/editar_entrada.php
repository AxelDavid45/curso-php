<?php require_once './includes/redireccion.php'; ?>
<?php require_once "./includes/cabecera.php"; ?>
<?php require_once "./includes/aside.php"; ?>

    <div id="principal">
        <?php  $entrada_info = obtenerEntrada($conexion,$_GET['id']); ?>

        <h1>Estas editando la entrada: <?=$entrada_info['titulo'];  ?></h1>
        <!--        Muestra errores-->
        <?php  if (isset($_SESSION['e']['inf'])): ?>
            <div class="alerta">
                <?= $_SESSION['e']['inf'];?>
            </div>
        <?php  elseif (isset($_SESSION['e']['error'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['e']['error'];?>
            </div>
        <?php   endif;?>
        <?php  if(isset($_SESSION['errores-entrada'])): ?>
            <div class="alerta alerta-error">
                <?= isset($_SESSION['errores-entrada']['titulo']) ? $_SESSION['errores-entrada']['titulo'].'<br>' : ''?>
                <?= isset($_SESSION['errores-entrada']['descripcion']) ? $_SESSION['errores-entrada']['descripcion'].'<br>' : ''?>

                <?= isset($_SESSION['errores-entrada']['categoria']) ? $_SESSION['errores-entrada']['categoria'].'<br>' : ''?>
            </div>

        <?php  endif; ?>
        <!--        Fin de los errores -->
        <p>Edita los datos que necesites</p>
        <br>
        <form action="guardar-entrada.php?editar=<?=$entrada_info['categoria_id']?>&id=<?=$entrada_info['id']?>" method="POST">
            <label>
                Nombre de la entrada:
                <input type="text" name="nombre" value="<?= $entrada_info['titulo'];?>">
            </label>
            <label>
                Descripcion:
                <br>
                <textarea name="descripcion"><?= $entrada_info['descripcion'];?></textarea>
            </label>

            <label>
                Categoria:
                <select name="categoria_id">
                    <?php $categorias = obtenerCategorias($conexion);
                    if(!empty($categorias)): ?>
                        <?php  while ($categoria = mysqli_fetch_assoc($categorias)): ?>
                            <option value="<?=$categoria['id'];?>"
                                <?= ($categoria['id'] == $entrada_info['categoria_id']) ? "selected = selected" : ''; ?>>
                                <?=$categoria['nombre'];?>
                            </option>
                        <?php endwhile;?>
                    <?php endif; ?>
                </select>
            </label>
            <input type="submit" value="Guardar entrada">
        </form>
    </div>

<?php  borrarErrores(); ?>


<?php require_once "./includes/footer.php"; ?>