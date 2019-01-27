<?php

//Clase estatica
class Configuracion
{
    //Atributos estaticos
    public static $password, $server, $dbname;

    public static function getPassword()
    {
        return self::$password;
    }

    public static function setPassword($password)
    {
        self::$password = $password;
    }


    public static function getServer()
    {
        return self::$server;
    }

    public static function setServer($server)
    {
        self::$server = $server;
    }

    public static function getDbname()
    {
        return self::$dbname;
    }

    /**
     * @param mixed $dbname
     */
    public static function setDbname($dbname)
    {
        self::$dbname = $dbname;
    }

}