<?php
require_once "clase.php";

//accedemos de forma estatica sin crear una instancia
Configuracion::setDbname('usersupercable');
echo Configuracion::getDbname();
