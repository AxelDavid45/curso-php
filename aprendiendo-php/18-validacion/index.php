<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion</title>
</head>
<body>

<h1>Validacion de formulario con php</h1>

<?php
    if(isset($_GET['error'])) {
        $error = $_GET['error'];

        if($error == 'faltan_valores') {
            echo '<strong style="color: red"> Faltan valores en el formulario, por favor rellenalos correctamente </strong>';
        }
        if($error == 'nombre') {
            echo '<strong style="color: red"> Ingresa correctamente el nombre </strong>';
        }
        if($error == 'apellidos') {
            echo '<strong style="color: red"> Ingresa correctamente el campo apellidos </strong>';
        }
        if($error == 'email') {
            echo '<strong style="color: red"> Ingresa un email valido </strong>';
        }
        if($error == 'pass') {
            echo '<strong style="color: red"> Ingresa una contraseña mayor a 5 caracteres </strong>';
        }
    }


?>

<form action="procesar_formulario.php" method="POST">

    <label>
        Nombre:
        <input type="text" placeholder="Nombres(s)" name="nombre">
    </label>
    <br>
    <label>
        Apellidos:
        <input type="text" placeholder="Apellido(s)" name="apellidos">
    </label>
    <br>
    <label>
        Email:
        <input type="email" placeholder="Email" name="email">
    </label>
    <br>
    <label>
        Contraseña:
        <input type="password" placeholder="Contraseña"  name="pass">
    </label>
    <br>
    <input type="submit" value="Enviar">

</form>

</body>
</html>