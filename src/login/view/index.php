<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="Description" content="Pagina inicial con login">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="loginstyles.css"
    <script src="../../../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<section id="seccionprincipallogin">
    <form action="../controller/logincontroller.php" method="POST">
        <div class="form-group">
            <h1 id="titulologin">Log in</h1>
            <label class="sr-only" for="inputusuario">Usuario</label>
            <input id="inputusuario" type="text" class="form-control" placeholder="Usuario" name="inputusuario">
            <label class="sr-only" for="inputcontrasenia">Contraseña</label>
            <input id="inputcontrasenia" type="password" class="form-control" placeholder="Contraseña">
            <input id="botonlogin" type="submit" class="btn btn-dark" value="Entrar">
        </div>
    </form>
</section>
</body>
</html>