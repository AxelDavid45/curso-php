<h1>Registrate</h1>
<form action="index.php?controller=usuarios&method=save" method="POST">
    <label>
        <p>Nombre:</p>
        <input type="text" name="nombre">
    </label>
    <label>
        <p>Apellidos:</p>
        <input type="text" name="apellido">
    </label>
    <label>
        <p>Email:</p>
        <input type="email" name="email">
    </label>
    <label>
        <p>Contraseña</p>
        <input type="password" name="pass">
    </label>
    <input type="submit" value="Registrame">
</form>
