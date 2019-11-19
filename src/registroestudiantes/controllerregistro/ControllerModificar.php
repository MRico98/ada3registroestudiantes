<?php

include ('../modelregistro/ModelRegistro.php');

$modeloregistro = new ModelRegistro();

$modeloregistro->modificarAlumno($_POST["nombre"],$_POST["apellidopaterno"],$_POST["apellidomaterno"],$_POST["edad"],$_POST["matricula"]);

header('Location: ../viewregistro/EstudiantesRegistro.php');


