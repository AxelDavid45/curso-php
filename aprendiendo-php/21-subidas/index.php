<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subida de archivos en PHP</title>
</head>
<body>
<h1>Subiendo archivos al servidor</h1>

<form action="guardar.php" method="POST" enctype="multipart/form-data">

    <label>
        Selecciona el archivo:
        <input type="file" name="archivo">
    </label>
    <input type="submit" value="Subir">
</form>

<!--    Galeria-->
<div>
    <?php

    $gestor = opendir('./images');

    if($gestor) :
        while(($image = readdir($gestor)) != false) :

            if($image != '.' && $image != '..') :
                echo "<img src='./images/$image' width='250px' height='auto'>";

            endif;

        endwhile;

    endif;
    ?>

</div>



</body>
</html>