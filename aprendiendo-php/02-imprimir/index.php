<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprimir por pantalla con php</title>
</head>
<body>
    <h1><?= 'mostramos un texto con el atajo del echo'?></h1>
    <?php
    //Estos son los comentarios de solo una linea en php

    /*
     * con esto nosotros ponemos comentarios
     * de varias lineas sin que se impriman en el codigo
     * */

    echo '<h1>Lista de juegos</h1>';
    echo '<ul>'
        .'<li>GTA</li>'
        .'<li>FIFA</li>'
        .'<li>Mario bros</li>'
        .'</ul>';
    echo '<p>Esto es todo de la lista'.' - '.'php</p>';

    ?>


</body>
</html>



