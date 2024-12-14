<?php
/**
 * 2. Formulario de conversión de temperaturas:
 * • Crea un formulario que permita ingresar una temperatura en grados Celsius y que al enviarlo, muestre la temperatura convertida a Fahrenheit.
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
    <form action="procesa.php" method="post">
        <label for="teperatura">Introduce la temperatura en grados Celsius</label>
        <input type="number" name="temperatura" id="temperatura">
        <input type="submit" name="enviar" id="enviar">
    </form>
</body>
</html>