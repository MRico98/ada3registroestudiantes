<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="Description" content="Pagina inicial con login">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="loginstyles.css">
    <script src="../../../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</head>
<body>
<?php
if(isset($_GET['error'])) {

    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error:</strong> <?php echo $_GET['error']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>
<section id="seccionprincipallogin">
    <form action="../controller/logincontroller.php" method="POST">
        <div class="form-group">
            <h1 id="titulologin">Log in</h1>
            <label class="sr-only" for="inputusuario">Usuario</label>
            <input id="inputusuario" type="text" class="form-control" placeholder="Usuario" name="inputusuario" required>
            <label class="sr-only" for="inputcontrasenia">Contraseña</label>
            <input id="inputcontrasenia" type="password" class="form-control" placeholder="Contraseña" name="inputcontrasenia" required>
            <input id="botonlogin" type="submit" class="btn btn-dark" value="Entrar">
        </div>
    </form>
</section>
</body>
</html>