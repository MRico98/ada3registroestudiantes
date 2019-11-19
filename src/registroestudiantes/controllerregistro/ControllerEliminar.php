<?php

include ('../modelregistro/ModelRegistro.php');

$modeloregistro = new ModelRegistro();
$modeloregistro->eliminarAlumno($_POST["matricula"]);
header('Location: ../viewregistro/EstudiantesRegistro.php');