<?php
$duracion_cookie = 60;

// Verificar si se debe crear la cookie
if (isset($_GET['accion']) && $_GET['accion'] == 'crear') {
    // Crear la cookie con duración limitada
    setcookie('mi_cookie', 'valor_cookie', time() + $duracion_cookie);
    echo "Cookie creada con éxito!<br>";
}

// Verificar si se debe comprobar la cookie
if (isset($_GET['accion']) && $_GET['accion'] == 'comprobar') {
    // Comprobar si la cookie existe
    if (isset($_COOKIE['mi_cookie'])) {
        echo "La cookie 'mi_cookie' está presente. Valor: " . $_COOKIE['mi_cookie'] . "<br>";
    } else {
        echo "La cookie 'mi_cookie' no está presente o ha expirado.<br>";
    }
}

// Verificar si se debe destruir la cookie
if (isset($_GET['accion']) && $_GET['accion'] == 'destruir') {
    // Destruir la cookie estableciendo una fecha de caducidad en el pasado
    setcookie('mi_cookie', '', time() - 3600);
    echo "La cookie ha sido destruida.<br>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Cookies</title>
</head>
<body>
    <h1>Gestión de Cookies en PHP</h1>
    <a href="?accion=crear">Crear cookie</a><br>
    <a href="?accion=comprobar">Comprobar estado de la cookie</a><br>
    <a href="?accion=destruir">Destruir cookie</a><br>
</body>
</html>
