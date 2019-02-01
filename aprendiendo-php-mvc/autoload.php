<?php
// autocarga de clases
function autoload($classname)
{
    require_once 'controller/'.$classname.'.php';
}
//ejecutamos el autoload
spl_autoload_register('autoload');
