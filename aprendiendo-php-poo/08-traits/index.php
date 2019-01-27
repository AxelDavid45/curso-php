<?php
//Creamos el trait que se compartira con cualquier clase que queramos
trait Utilidades {
    //Funcion que se podra usar sin tener que heredar ninguna clase
    public function hola() {
        echo "Hola";
    }
}

class Persona {
    public $nombre;

    public function getNombre() {
        return $this->nombre;
    }
    //Usamos el trait
    use Utilidades;
}

$persona = new Persona();
$persona->hola();
