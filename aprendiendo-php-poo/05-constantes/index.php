<?php
class User {
    // creamos la constante
    const URL_COMPLETA ='localhost';
    //atributos publicos
    public $nombre,$apellidos;

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }

}
//accedemos a la constante de forma estatica
echo User::URL_COMPLETA;
