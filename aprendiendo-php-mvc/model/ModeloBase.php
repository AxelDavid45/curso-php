<?php
//Requerimos la config en el modelo base
require_once "config/database.php";
//Modelo base para heredar
class ModeloBase
{
    public $db;

    public function __construct() {
        $this->db = Database::conexion();
    }
    //Pensemos que este metodo hace una consulta ficticia a una bd y regresa la query
    public function mostrarTodos($tabla) {
        $sql = "SELECT * FROM {$tabla} ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query;

    }
}
