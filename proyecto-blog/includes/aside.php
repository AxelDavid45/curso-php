

<aside id="sidebar">
    <?php if(isset($_SESSION['usuario'])) :  ?>
    <div id="login" class="bloque">
        <h3>Bienvenido <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
        <!---  Botones -->
        <a href="crear-entrada.php" class="boton">Crear entrada</a>
        <a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
        <a href="crear-categoria.php" class="boton boton-verde">Crear categoria</a>
        <a href="cerrar.php" class="boton boton-rojo">Cerrar Sesión</a>

    </div>
    <?php endif; ?>
    <?php  if(!isset($_SESSION['usuario'])) : ?>
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <?php if(isset($_SESSION['error_login'])) :  ?>
            <div class="alerta alerta-error">
                <?=$_SESSION['error_login'];?>
            </div>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <label>Email
                <input type="email" name="email">
            </label>
            <label>Password
                <input type="password" name="pass">
            </label>
            <input type="submit" value="Entrar" name="value">
        </form>
    </div>
    <div id="login" class="bloque">
        <h3>Registrate</h3>
        <?php  if(isset($_SESSION['completo'])): ?>
            <div class="alerta alerta-correcto">
                <?= $_SESSION['completo']; ?>
            </div>
        <?php  elseif (isset($_SESSION['errores'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general']; ?>
            </div>
        <?php  endif; ?>
        <form action="registro.php" method="POST">
            <label>Nombre(s)
                <input type="text" name="nombre" required>
                <?php  echo isset($_SESSION["errores"]) ? mostrarErrores($_SESSION['errores'],'nombre') : ''; ?>
            </label>
            <label>Apellido(s)
                <input type="text" name="apellidos" required>
                <?php  echo isset($_SESSION["errores"]) ? mostrarErrores($_SESSION['errores'],'apellidos') : ''; ?>
            </label>
            <label>Email
                <input type="email" name="email" required>
                <?php  echo isset($_SESSION["errores"]) ? mostrarErrores($_SESSION['errores'],'email') : ''; ?>
            </label>
            <label>Password
                <input type="password" name="pass" required>
                <?php  echo isset($_SESSION["errores"]) ? mostrarErrores($_SESSION['errores'],'pass') : ''; ?>
            </label>
            <input type="submit" value="Registrame" name="submit">
        </form>
        <?php borrarErrores();  ?>
    </div>
    <?php endif; ?>
</aside>