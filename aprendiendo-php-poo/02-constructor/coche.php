<?php
//Creacion de una clase
class Coche {
    //Atributos
    //PUBLIC: Podemos acceder a ellos y modificarlos desde cualquier lugar.
    public $color;
    //PROTECTED: A ellos solamente podemos acceder desde la clase que los crea y desde
    // clases que hereden la clase para obtener los valores o modificarlos hay que crear metodos publicos.
    protected $marca;
    // PRIVATE: Solo se puede acceder a ellos desde la clase que los crea, de igual forma hay que crear metodos
    // especificos para poder obtener su valor o modificarlo.

    private $velocidad;

    //Constructor siempre publico
    public function __construct($color,$marca,$velocidad) {
        $this->color = $color;
        $this->marca = $marca;
        $this->velocidad = $velocidad;
    }

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
    //Tipado de parametros
    public function mostrarInformacion(Coche $objeto) {
        if(is_object($objeto)) {
            $informacion = "<h1>Datos del objeto Coche</h1>";
            $informacion .= "<br>Color : {$objeto->color}";
            $informacion .= "<br>Velocidad : {$objeto->velocidad}";
            $informacion .= "<br>marca : {$objeto->marca}";
        } else {
            $informacion = "El dato que pasaste no es un objeto tipo coche";
        }

        return $informacion;

    }
}