<?php
session_start();
$nombresesion = $_SESSION['usuario'];
if($nombresesion == null || $nombresesion == ''){
    header('Location: ../../login/view/index.php?error=Aun+no+ha+iniciado+sesion');
    die();
}
include ('../controllerregistro/ControllerRegistro.php');
$controlador = new ControllerRegistro();
$infoalumnos = $controlador->getInfoAlumnos();
$controlador->cerrarConexion();
/**
 * INSERT INTO `controlescolar`.`estudiantes` (`Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Edad`, `Contrasenia`) VALUES ('Eduardo', 'Aguilar', 'Martin', '23', 'Administrador');
 * UPDATE `controlescolar`.`estudiantes` SET `Nombre` = 'Edua', `ApellidoPaterno` = 'Agui', `ApellidoMaterno` = 'Mar', `Edad` = '25' WHERE (`Matricula` = '3');
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="Description" content="Pagina de registro de todos los estudiantes">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" type="text/css" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="registrostyles/RegistroStyles.css">
    <link rel="stylesheet" type="text/css" href="../../../node_modules/jquery-modal/jquery.modal.min.css">
    <script src="../../../node_modules/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="../../../node_modules/jquery-modal/jquery.modal.min.js"  type="text/javascript"></script>
</head>
<body>
<header id="cabeceraprincipal">
    <p><h1>Registro de estudiantes</h1><h1 id="segundotitulo">Sesion iniciada por: <?php echo $nombresesion ?></h1></p>
</header>
<section id="secciontabla">
    <h2>Lista de estudiantes</h2>
    <table id="tablaestudiantes" class="table table-striped">
        <?php
        while($fila = $infoalumnos->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo  $fila["Matricula"]?></td>
                <td><?php echo  $fila["Nombre"].' '.$fila["ApellidoPaterno"].' '.$fila["ApellidoMaterno"] ?></td>
                <td>
                    <div id="ex1" class="modal">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" value="<?php echo   $fila["Nombre"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="apellidopaterno">Apellido paterno</label>
                            <input type="text" class="form-control" id="apellidopaterno" value="<?php echo $fila["ApellidoPaterno"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="apellidomaterno">Apellido materno</label>
                            <input type="text" class="form-control" id="apellidomaterno" value="<?php echo $fila["ApellidoMaterno"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="matricula">Matricula</label>
                            <input type="text" class="form-control" id="matricula" value="<?php echo $fila["Matricula"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="text" class="form-control" id="edad" value="<?php echo   $fila["Edad"] ?>" readonly>
                        </div>
                    </div>
                    <p><a href="#ex1" rel="modal:open"><button type="button">Ver mas</button></a></p>
                </td>
                <td>
                    <div id="ex2" class="modal">
                        <form action="../controllerregistro/ControllerModificar.php" method="post">
                            <div class="form-group">
                                <label for="nombremodificar">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombremodificar" value="<?php echo $fila["Nombre"] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidopaternomodificar">Apellido paterno</label>
                                <input type="text" name="apellidopaterno" class="form-control" id="apellidopaternomodificar" value="<?php echo $fila["ApellidoPaterno"] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidomaternomodificar">Apellido materno</label>
                                <input type="text" name="apellidomaterno" class="form-control" id="apellidomaternomodificar" value="<?php echo $fila["ApellidoMaterno"] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="edadmodificar">Edad</label>
                                <input type="text" name="edad" class="form-control" id="edadmodificar" value="<?php echo   $fila["Edad"] ?>" required>
                            </div>
                            <input type="hidden" name="matricula" value="<?php echo $fila["Matricula"] ?>" >
                            <input type="submit" class="btn btn-primary" value="Modificar usuario">
                        </form>
                    </div>
                    <p><a href="#ex2" rel="modal:open"><button type="button">Modificar</button></a></p>
                </td>
                <td><button type="button" class="btn-secondary">Borrar</button></td>
            </tr>
            <?php
        }
        ?>
    </table>
</section>
</body>
</html>
