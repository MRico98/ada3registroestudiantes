<?php

include("../../model/ModeloAbsoluto.php");

try{
    $conexionbasededatos = new ModeloAbsoluto();

}
catch(RuntimeException $excepcion){
    header('Location: ../view/index.php?error='.$excepcion->getMessage());
}