<?php

//Clase principal
class Persona
{
    public $nombre, $apellido, $edad, $altura;
    public function __construct()
    {
        $this->nombre = 'Axel';
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function respirar() {
        return "Estoy respirando";
    }

    public function caminar() {
        return "Estoy caminando";
    }
}

//Clase que hereda Persona
class Programador extends Persona {
    public $nLenguajes;
    //Acciones de un programador
    public function programar() {
        return "Estoy programando";
    }

    public function aprenderLenguaje() {
        return "Voy a aprender PHP";
    }
}

class TecnicoInformatico extends Programador {
    public $Ofimatica,$añosProgramando;

    public function __construct() {
        //heredamos el constructor padre
        parent::__construct();
        //Asignamos el valor estaticamente
        $this->añosProgramando = 12;
        $this->Ofimatica = 'Word';
}
}