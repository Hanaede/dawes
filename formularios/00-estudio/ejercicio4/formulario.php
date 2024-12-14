<?php
/**
 * 4. Formulario con checkbox y selección múltiple:
 * • Crea un formulario con opciones de checkbox para seleccionar hobbies y una lista de selección múltiple para elegir países. Al enviar el formulario, muestra las opciones seleccionadas.
 * @author Kike MJ 
 */
include("./config.php")
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Hobbies y Países</title>
</head>
<body>
    <h2>Formulario de Selección de Hobbies y Países</h2>
    <form action="procesa.php" method="post">

        <h3>Selecciona tus hobbies:</h3>
        <?php
            // Bucle para generar los checkboxes a partir del array $hobbies
            foreach ($hobbies as $hobbie) {
                echo "<label><input type='checkbox' name='hobbies[]' value='$hobbie'> $hobbie</label><br>";
            }
        ?>
        <br>

        <h3>Selecciona tus países favoritos:</h3>
        <select name="paises[]" multiple>
            <?php
                // Bucle para generar las opciones de selección múltiple a partir del array $paises
                foreach ($paises as $pais) {
                    echo "<option value='$pais'>$pais</option>";
                }
            ?>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
