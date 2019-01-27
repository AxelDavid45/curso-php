<?php
function autoloader($nombreClase) {
    require_once 'clases/'.$nombreClase.'.php';
}

spl_autoload_register('autoloader');
