<?php

//Clases abstractas
abstract class Ordenador
{
    public $encendido;

    //Definimos un metodo abstracto
    abstract public function encender();

    //Metodo normal
    public function apagar()
    {
        $this->encendido = false;
    }
}

//Clase que hereda
class Lenovo extends Ordenador
{
    public $software;

    public function encender()
    {
        $this->encendido = true;
    }
    public function setSoftware($property)
    {
        $this->software = $property;
    }

}

$pc = new Lenovo();
$pc->encender();
var_dump($pc);
