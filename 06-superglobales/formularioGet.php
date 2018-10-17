<!--Este ejercicio se realizo con el metodo GET los parametros viajan por la url-->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Ingresa tus datos</h1>
    <form action="recibirDatosGet.php" method="GET">
        <label>
            Nombre:
            <input type="text" placeholder="Escribe tu nombre" name="nombre">
        </label>
        <label>
            Apellidos:
            <input type="text" placeholder="Escribe tus apellidos" name="apellido">
        </label>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>