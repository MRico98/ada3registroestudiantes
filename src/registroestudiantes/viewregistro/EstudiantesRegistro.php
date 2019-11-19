<?php
session_start();
$nombresesion = $_SESSION['usuario'];

if($nombresesion == null || $nombresesion == ''){
    header('Location: ../../login/view/index.php?error=nosession');
    die();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="Description" content="Pagina de registro de todos los estudiantes">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" type="text/css" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="../../../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
</head>
<body>

</body>
</html>
