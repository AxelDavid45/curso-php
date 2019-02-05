<?php
require_once "../vendor/autoload.php";

//Foto original ruta
$foto_original = "./academico.jpg";

//Nombre y destino de la editada
$destino = "aca_edit.jpg";

//Creacion del objeto thumb y pasamos la foto que editaremos
$thumb = new PHPThumb\GD($foto_original);
ob_clean();
//Redimensionando la imagen
$thumb->resize(300,300);

//Mostramos la imagen en pantalla
$thumb->show();

//La guaramos
$thumb->save($destino);


