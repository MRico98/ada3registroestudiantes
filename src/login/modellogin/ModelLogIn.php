<?php

include ('../../model/ModeloAbsoluto.php');

class ModelLogIn extends ModeloAbsoluto
{

    public function logInProcess($username,$password){
        $peticion = 'SELECT * FROM controlescolar.estudiantes WHERE Matricula LIKE "'.$username.'" AND Contrasenia LIKE "'.$password.'";';
        $query = $this->getConexion()->query($peticion);
        if($query->num_rows == 0){
            throw new RuntimeException("IncorrectCredentials");
        }
    }

}