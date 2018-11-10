<?php

function validarEmail($email) {
    if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = 0;
    } else {
        $error = 1;
    }
    return $error;
}

if(isset($_GET['email'])) {
    $error = validarEmail($_GET['email']);
    header("Location:ejercicio2.php?error=$error");
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio2</title>
</head>
<body>

<?php
    if(isset($_GET['error'])) :

        if($_GET['error'] == 1) :
            echo "<strong style='color: red'>Escribe correctamente el correo</strong>";
        endif;
        if($_GET['error'] == 0) :
            echo "<strong style='color: green'>Datos enviados exitosamente</strong>";
        endif;
    endif;
?>
<form action="./ejercicio2.php" method="GET">

    <input type="text" placeholder="Email" name="email">
    <input type="submit" value="Enviar">


</form>

</body>
</html>
