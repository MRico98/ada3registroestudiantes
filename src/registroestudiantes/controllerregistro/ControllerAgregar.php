<?php

include('../modelregistro/ModelRegistro.php');

$modelregistro = new ModelRegistro();
$modelregistro->agregarAlumno($_POST["nombre"],$_POST["apellidopaterno"],$_POST["apellidomaterno"],$_POST["edad"],$_POST["contrasenia"]);
header('Location: ../viewregistro/EstudiantesRegistro.php');