<?php

include ('../modellogin/ModelLogIn.php');

try{
    $conexionbasededatos = new ModelLogIn();
    $conexionbasededatos->logInProcess($_POST['inputusuario'],$_POST['inputcontrasenia']);
    session_start();
    $_SESSION['usuario'] = $_POST['inputusuario'];
    header('Location: ../../registroestudiantes/viewregistro/EstudiantesRegistro.php');
}
catch(RuntimeException $excepcion){
    header('Location: ../view/index.php?error='.$excepcion->getMessage());
}