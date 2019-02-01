<?php
//Llamamos al autoloader de clases
require_once 'autoloader.php';

//Llamamos a los namespaces
use Admin\User;
use Login\Usuario as UserLogin;

class Principal {
    public $nombre;
    public $userLogin;

    public function __construct() {
        $this->nombre = new User();
        $this->userLogin = new UserLogin();
    }

    /**
     * @return User
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param User $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return UserLogin
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * @param UserLogin $userLogin
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
    }

}

$principal = new Principal();
//Buscamos los metodos de una clase
$metodos = get_class_methods($principal);
var_dump($metodos);

//Para comprobar si tenemos alguna clase
$clase_buscada = @class_exists("Login\Usuarioa");
if($clase_buscada){
    echo "La clase si existe";
}
