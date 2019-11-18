<?php


class ModeloAbsoluto
{
    private $conexion;
    private $servidor = "127.0.0.1:3307";
    private $nombreusuario = "Administrador";
    private $contrasenia = "Admin123";
    private $basededatos = "controlescolar";
    private $consulta;

    public function __construct()
    {
        $this->conexion = new mysqli($this->getServidor(),$this->getNombreusuario(),$this->getContrasenia(),$this->getBasededatos());
        if($this->conexion->connect_error){
            throw new RuntimeException("Fallo al conectar con la base de datos");
        }
    }

    /**
     * @return mysqli
     */
    public function getConexion()
    {
        return $this->conexion;
    }

    /**
     * @param mysqli $conexion
     */
    public function setConexion($conexion)
    {
        $this->conexion = $conexion;
    }

    /**
     * @return string
     */
    public function getServidor()
    {
        return $this->servidor;
    }

    /**
     * @param string $servidor
     */
    public function setServidor($servidor)
    {
        $this->servidor = $servidor;
    }

    /**
     * @return string
     */
    public function getNombreusuario()
    {
        return $this->nombreusuario;
    }

    /**
     * @param string $nombreusuario
     */
    public function setNombreusuario($nombreusuario)
    {
        $this->nombreusuario = $nombreusuario;
    }

    /**
     * @return string
     */
    public function getContrasenia()
    {
        return $this->contrasenia;
    }

    /**
     * @param string $contrasenia
     */
    public function setContrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;
    }

    /**
     * @return string
     */
    public function getBasededatos()
    {
        return $this->basededatos;
    }

    /**
     * @param string $basededatos
     */
    public function setBasededatos($basededatos)
    {
        $this->basededatos = $basededatos;
    }

    /**
     * @return mixed
     */
    public function getConsulta()
    {
        return $this->consulta;
    }

    /**
     * @param mixed $consulta
     */
    public function setConsulta($consulta)
    {
        $this->consulta = $consulta;
    }



}