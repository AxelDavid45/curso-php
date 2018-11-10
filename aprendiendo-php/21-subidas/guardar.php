<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
$name_temp = $archivo['tmp_name'];


if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif') {

//    Comprobamos si existe la carpeta
    if(!is_dir('images')) {
        mkdir('images',0777);
    }

//    Movemos el fichero subido al directorio imagenes
    move_uploaded_file($name_temp,'images/'.$nombre);

    echo '<h1>El archivo se subio correctamente</h1>';

    header("Refresh:5, URL=index.php");

} else {
    header("Refresh:5, URL=index.php");
    echo '<h1>El archivo no se pudo subir, selecciona un archivo valido</h1>';

}


?>