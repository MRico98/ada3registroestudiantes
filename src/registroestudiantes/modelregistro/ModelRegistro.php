<?php

include('../../model/ModeloAbsoluto.php');

class ModelRegistro extends ModeloAbsoluto
{

    public function getAllAlumnos(){
        $peticion = 'SELECT Matricula,Nombre,ApellidoPaterno,ApellidoMaterno,Edad FROM controlescolar.estudiantes;';
        return $this->getConexion()->query($peticion);
    }

    public function modificarAlumno($nombre,$apellidopaterno,$apellidomaterno,$edad,$matricula){
        $peticion = 'UPDATE controlescolar.estudiantes SET Nombre = "'.$nombre.'", ApellidoPaterno = "'.$apellidopaterno.'",ApellidoMaterno = "'.$apellidomaterno.'",Edad = '.$edad.' WHERE (Matricula = '.$matricula.');';
        $this->getConexion()->query($peticion);
    }

}