<?php
/**
 * 5. Formulario de validación de email:
 * • Realiza un formulario que solicite el email del usuario. Valida si el email tiene un formato correcto antes de enviarlo y muestra un mensaje de error si es inválido.
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
        <label for="email">Introduce un email válido</label>
        <input type="email" name="email">
        
        <input type="submit" name="enviar">
    </form>
</body>
</html>

<?php
