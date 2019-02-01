<?php
//Clase con metodos staticos para usarlos despue
class Database
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost","root","","notas_master");
        $conexion->query("SET NAMES utf8");

        return $conexion;
    }
}
