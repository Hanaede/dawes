<?php
/**
 * 
 * 3. Formulario de suma de dos números:
 * • Escribe un formulario que pida dos números al usuario y, al enviarlo, muestre la suma de los dos números en la misma página.
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
    <form action="" method="post">
        <label for="number">Numero 1</label>
        <input type="number" name="numero1">

        <label for="number">Numero 2</label>
        <input type="number" name="numero2">

        <input type="submit" name="enviar">
    </form>
</body>
</html>

<?php
$suma = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "La suma de los dos número es: " . $_POST["numero1"] + $_POST["numero2"];
}