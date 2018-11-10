<?php


//creamos una constante con la funcion define
define('nombre','Axel Espinosa');

//para mostrarla solo hace falta ponerla en un echo sin el dollar
echo nombre;
//las constantes no pueden modificar su valor

//CONSTANTES PREDEFINIDAS

echo '<br>'.PHP_VERSION; //Esta constante predefinida nos indica la version php
echo '<br>'.PHP_EXTENSION_DIR; // Esta constante nos indica la ruta de las extensiones php
echo '<br>'.__LINE__; //Esta constante nos indica la linea de codigo que se esta ejecutando
echo '<br>'.__FILE__; //Esta constante nos indica el archivo que estamos trabajando.
?>
