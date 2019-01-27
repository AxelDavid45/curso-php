<?php

//Creacion de la interfaz
interface Pc
{
    //Definimos los metodos
    public function encender();

    public function apagar();
}

//Clase que tendra la implementacion de la interfaz
class Mac implements Pc
{
    //Creamos estrictamente los metodos que tiene la interfaz
    public function encender()
    {
        return "Encendido";
    }
    public function apagar()
    {
        return "Apagado";
    }
}
