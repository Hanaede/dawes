<?php

session_start();

require_once('./lib/info.php');
$errorSesion = "";

if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado'] = false;
}

if(isset($_POST['enviar'])){
    if($_POST['usuario'] === USUARIO && $_POST['contrasenia'] === CONTRASENA){
        $_SESSION['autenticado'] = true;
        $_SESSION['usuario'] = $_POST['usuario'];
        header('location:peliculas.php');
        exit();
    } else {
        $errorSesion = "EL usuario o la contraseña son incorrectos";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Inicio de Sesión Cine</h1>
    <form action="" method="post">
        Usuario: <input type="text" name="usuario"><br/>
        Contraseña: <input type="text" name="contrasenia"><br/>
        <span style="color:red"><?php echo $errorSesion; ?></span><br/><br/>
        <input type="submit" name="enviar" value="Inciar Sesion">
    </form>
</body>
</html>