<?php

//Creacion de clase
class Usuario
{
    public $id;
    //Constructor
    public function __construct()
    {
        $this->id = 123;
    }

    public function getNombre() {
        return $this->id;
    }
    //Metodo magico tosstring
    public function __toString()
    {
        return "Llamaste al metodo magico __tostring";
    }

    //Creamos el destructor que se ejecuta al terminar la ejecucion
    public function __destruct()
    {
        $this->id = null;
        echo "Destruyendo";
    }
}

$usuario = new Usuario();
echo $usuario;
