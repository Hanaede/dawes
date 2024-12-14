<?php
/**
 * 
 * 1. Formulario básico de registro:
 * • Crea un formulario con los campos nombre, email y contraseña. Valida que los campos no estén vacíos y muestra un mensaje de éxito si todo es correcto.
 * @author Kike MJ 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registro.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="emal">Correo</label>
        <input type="email" name="email" id="email" required>

        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" required>

        <input type="submit" name="enviar">
    </form>
</body>
</html>