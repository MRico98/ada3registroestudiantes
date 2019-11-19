<?php

include ('../modelregistro/ModelRegistro.php');

class ControllerRegistro
{
    private $modeloregistro;

    /**
     * ControllerRegistro constructor.
     * @param $modeloregistro
     */
    public function __construct()
    {
        $this->modeloregistro = new ModelRegistro();
    }

    public function getInfoAlumnos(){
        return $this->modeloregistro->getAllAlumnos();
    }

    /**
     * @return mixed
     */
    public function getModeloregistro()
    {
        return $this->modeloregistro;
    }

    /**
     * @param mixed $modeloregistro
     */
    public function setModeloregistro($modeloregistro)
    {
        $this->modeloregistro = $modeloregistro;
    }

    public function cerrarConexion(){
        $this->modeloregistro->getConexion()->close();
    }

}