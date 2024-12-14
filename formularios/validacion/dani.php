<?php
/**
 * @author Daniel
 * Validacion de un formulario
 */

include("./config/config.php"); // Configuración de los arrays
include("./lib/functions.php"); // Funciones del programa

// Inicialización de variables
$nombre = $email = $genero = $color = $comentarios = $url = "";
$nombreError = $emailError = $cochesError = $vehiculosError = $generoError = $urlError = $colorError = "";

// Arrays para elementos seleccionados
$cochesSeleccionados = array();
$vehiculosSeleccionados = array();

// Banderas de procesamiento y error de validación
$procesaFormulario = false;
$errorValidacion = false;

if (isset($_POST["enviar"])) {
    $procesaFormulario = true;

    /** Validación del nombre */
    $nombre = clearData($_POST['nombre']);
    if (empty($nombre)) {
        $errorValidacion = true;
        $nombreError = $errores["nombre"];
    }

    /** Validación del correo */
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorValidacion = true;
        $emailError = $errores["email"];
    }

    /** Validación del género */
    if (empty($_POST['genero'])) {
        $errorValidacion = true;
        $generoError = $errores["genero"];
    } else {
        $genero = $_POST['genero'];
    }

    /** Validación del URL */
    $url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errorValidacion = true;
        $urlError = $errores["url"];
    }

    /** Validación del color 
    if (empty($_POST['color'])) {
        $errorValidacion = true;
        $colorError = $errores["color"];
    } else {
        $color = $_POST['color'];
    }*/



    /** Validación de coches seleccionados */
    if (empty($_POST['coches'])) {
        $errorValidacion = true;
        $cochesError = $errores["coches"];
    } else {
        $cochesSeleccionados = $_POST['coches'];
    }

    /** Validación de vehículos seleccionados */
    if (empty($_POST['vehiculos'])) {
        $errorValidacion = true;
        $vehiculosError = $errores["vehiculos"];
    } else {
        $vehiculosSeleccionados = $_POST['vehiculos'];
    }

    // Comentarios (sin validación)
    $comentarios = clearData($_POST['comentarios']);

    if ($errorValidacion) {
        $procesaFormulario = false;
    }
}

if ($procesaFormulario && !$errorValidacion) {
    echo "<h2>Datos seleccionados:</h2>";
    echo "Nombre: " . htmlspecialchars($nombre) . "<br/>";
    echo "Email: " . htmlspecialchars($email) . "<br/>";
    echo "URL: " . htmlspecialchars($url) . "<br/>";
    echo "Comentarios: " . htmlspecialchars($comentarios) . "<br/>";
    echo "Género: " . htmlspecialchars($genero) . "<br/>";
    echo "Color: " . htmlspecialchars($color) . "<br/>";
    echo "Coches seleccionados: " . implode(", ", $cochesSeleccionados) . "<br/>";
    echo "Vehículos seleccionados: " . implode(", ", $vehiculosSeleccionados) . "<br/>";
    echo "<br/><br/>";

    // Aquí agregamos el botón "Volver" para redirigir a la página inicial
    echo "<form method='post'>";
    echo "<input type='submit' value='Volver' name='volver'>";
    echo "</form>";

     // Comprobar si el botón "Volver" fue presionado
     if (isset($_POST['volver'])) {
        // header("Location: formulario.php");
        // exit(); // Detener la ejecución después de la redirección
        
    }
      

} else {
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<h1>FORMULARIO</h1>
<p class="error">Los campos con * son obligatorios</p>
<form method="post">
    <label for="nombre" style="font-weight: bold">Nombre: </label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
    <span class="error">*<?php echo $nombreError; ?></span>
    <br/><br/>

    <label for="email" style="font-weight: bold">Email: </label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>">
    <span class="error">*<?php echo $emailError; ?></span>
    <br/><br/>

    <label for="url" style="font-weight: bold">URL: </label>
    <input type="text" name="url" id="url" value="<?php echo $url; ?>">
    <span class="error">*<?php echo $urlError; ?></span>
    <br/><br/>

    <label style="font-weight: bold">Comentarios:</label>
    <textarea name="comentarios" id="comentarios"><?php echo $comentarios; ?></textarea>
    <br/><br/>

    <!-- Selección de género -->
    <br/>
    <label style="font-weight: bold">Género:</label>
    <span class="error">*<?php echo $generoError; ?></span><br/><br/>
    <?php foreach ($agenero as $valor): ?>
        <label>
            <?php echo $valor; ?>
            <input type="radio" name="genero" value="<?php echo $valor; ?>" <?php echo ($genero === $valor) ? 'checked' : ''; ?>> <!--($genero === $valor) ? 'checked' : '' !-->
        </label><br/>
    <?php endforeach; ?>

   <!-- Selección de color -->
    <br/>
    <label style="font-weight: bold">Color:</label>
    <span class="error"><?php echo $colorError; ?></span><br/><br/>
    <select name="color">
    <option value="">Selecciona un color</option>
    <?php foreach ($colores as $opcion): ?>
        <option value="<?php echo $opcion['color']; ?>" <?php echo ($color === $opcion['color']) ? 'selected' : ''; ?>>
            <?php echo $opcion['color']; ?>
        </option>
    <?php endforeach; ?>
    </select>
    <br/><br/>


    <!-- Selección de coches -->
    <br/>
    <label style="font-weight: bold">Coche:</label>
    <span class="error">*<?php echo $cochesError; ?></span><br/><br/>
    <?php foreach ($acoches as $valor): ?>
        <label>
            <input type="checkbox" name="coches[]" value="<?php echo $valor; ?>" <?php echo (in_array($valor, $cochesSeleccionados)) ? 'checked' : ''; ?>>
            <?php echo $valor; ?>
        </label><br/>
    <?php endforeach; ?>

    <!-- Selección de vehículos -->
    <br/>
    <label style="font-weight: bold">Vehículo:</label>
    <span class="error">*<?php echo $vehiculosError; ?></span><br/><br/>
    <?php foreach ($avehiculos as $valor): ?>
        <label>
            <input type="checkbox" name="vehiculos[]" value="<?php echo $valor; ?>" <?php echo (in_array($valor, $vehiculosSeleccionados)) ? 'checked' : ''; ?>>
            <?php echo $valor; ?>
        </label><br/>
    <?php endforeach; ?>
    <br/>
    <input type="submit" value="Enviar" name="enviar">
</form>
</body>
</html>

<?php
}
?>