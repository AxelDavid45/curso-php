<?php
class Persona
{
    private $nombre, $edad, $ciudad;

    public function __construct($nombre,$edad,$ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    //Creamos el metodo que muestra los errores cuando no exiten metodos
    public function __call($name, $arguments)
    {
        return "NO existe el metodo llamado";
    }
}

$persona = new Persona('Axel',18,"TGZ,CHIS");
//Metodo inexistente en el objeto
echo $persona->setNombre();
