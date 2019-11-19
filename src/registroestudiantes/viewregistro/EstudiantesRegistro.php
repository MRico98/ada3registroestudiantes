<?php
session_start();
$nombresesion = $_SESSION['usuario'];
if($nombresesion == null || $nombresesion == ''){
    header('Location: ../../login/view/index.php?error=Aun+no+ha+iniciado+sesion');
    die();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="Description" content="Pagina de registro de todos los estudiantes">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" type="text/css" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../registrostyles/RegistroStyles.css">
    <script src="../../../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<header id="cabeceraprincipal">
    <p><h1>Registro de estudiantes</h1><h1 id="segundotitulo">Sesion iniciada por: <?php echo $nombresesion ?></h1></p>
</header>
<section>
    <h2>Lista de estudiantes</h2>
    <table id="tablaestudiantes" style="width:100%" class="table table-striped">
        <tr>
            <td>January</td>
            <td>$100</td>
            <td><button type="button" class="btn-secondary">Modificar</button></td>
            <td><button type="button" class="btn-secondary">Borrar</button></td>
        </tr>
        <tr>
            <td>February</td>
            <td>$50</td>
            <td><button type="button" class="btn-secondary">Modificar</button></td>
            <td><button type="button" class="btn-secondary">Borrar</button></td>
        </tr>
    </table>
</section>
</body>
</html>
