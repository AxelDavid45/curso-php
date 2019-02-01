<?php
//Modelo a heredar
require_once "ModeloBase.php";

class Nota extends ModeloBase
{
    //atributos
    public $usuario_id,$titulo,$descripcion;

    //Heredamos la conexion db del padre
    public function __construct() {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * @param mixed $usuario_id
     */
    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }


    //metodo del modelo que guarda una nota nueva
    public function guardar() {
        $sql = "INSERT INTO notas(usuario_id,titulo,descripcion,fecha_creacion) VALUES({$this->usuario_id},'{$this->titulo}','{$this->descripcion}',CURDATE());";
        $save = $this->db->query($sql);
        return $save;
    }



}
