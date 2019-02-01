<?php
//Creaamos el controlador de la nota

class NotaController
{
    public function listar()
    {
        require_once "model/Nota.php";
        //Logica del comportamiento del controlador
        $nota = new Nota();
        $notas = $nota->mostrarTodos('notas');
        //Mandamos todo a la vista
        require_once "views/Nota/listar.php";
    }

    public function crear() {
        require_once "model/Nota.php";
        $nota = new Nota();
        $nota->setUsuarioId(1);
        $nota->setTitulo('Nota desde MVC PHP');
        $nota->setDescripcion('Esta nota se genera por MVC');
        $nota->guardar();

        //redireccion a listar
        header('Location:index.php?controller=Nota&action=listar');
    }

}
