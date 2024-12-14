<?php
/**
 * @author Kike MJ
 */
include("./config.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesa_formulario.php" method="post">
        <label for="nombre">Nombre de jugador
            <input type="text" name="nombre" id="nombre">
        </label>

        <fieldset>
            <legend>Selecciona los personajes:</legend>
            <?php
            foreach ($personajes as $clave => $atributos) {
                echo '<label>';
                echo '<input type="radio" name="personajesNombre[]" value="' . $atributos['Nombre'] . '"> ' . $atributos['Nombre'];
                echo '</label><br>';
            }
            ?>
        </fieldset>
        
        <fieldset>
            <legend>Selecciona una raza</legend>
            <?php
            foreach ($personajes as $clave => $atributos) {
                echo '<label>';
                echo '<input type="radio" name="personajesRaza[]" value="' . $atributos['Raza'] . '"> ' . $atributos['Raza'];
                echo '</label><br>';
            }
            ?>
        </fieldset>

        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>
