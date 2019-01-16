<?php

//Creacion de una clase
class Coche {
    //Atributos
    public $color = "Rojo";
    public $marca = 'Ferrari';
    public $velocidad = 300;

    //Metodos
    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function Acelerar() {
        $this->velocidad++;
    }
    public function getVelocidad() {
        return $this->velocidad;
    }
}
$coche = new Coche();

$coche->Acelerar();
$coche->Acelerar();
$coche->Acelerar();
$coche->Acelerar();
echo $coche->getVelocidad();