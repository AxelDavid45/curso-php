<?php
class usuariosController {
    public function index() {
        echo "Controlador de Usuarios";
    }

    /*---------------------------------
       REGISTRO DE USUARIOS FORM
     *------------------------------- */
    public function registro() {
        //Renderizamos la vista
        require_once "views/usuarios/registro.php";
    }

    /*-------------------------------------
    GUARDA EL USUARIO EN LA BD
     --------------------------------------*/
    public function save() {
        if(isset($_POST)) {
            var_dump($_POST);
        }

    }
}
