<?php

//Creando el usuario controller aqui solo tendra acciones
class UsuarioController
{
    public function mostrarTodos()
    {
        //Llamamos al modelo de usuario
        require_once "model/usuario.php";
        $usuario = new Usuario();
        //Ponemos lo que regresa la consulta sql en una variable para mostrarlo en una vista
        $todos = $usuario->mostrarTodos('usuarios');
        //Llamamos a la vista para que podamos tener acceso a todo lo que esta arriba
        require_once "views/Usuario/mostrarTodos.php";
    }

    public function crear()
    {
        require_once "views/Usuario/crear.php";
    }
}
