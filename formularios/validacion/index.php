<?php
/**
 * @author Kike MJ 
 * Validación de un formulario
 */

 // Incluimos archivo de configuración con los array y funciones
include("./config/config.php");
include("./lib/functions.php");

// Inicialización de las variables
$nombre = $email = $genero = $comentarios = $url = "";
$nombreError = $emailError = $generoError = $comentariosError = $urlError = $vehiculosError = $cochesError = "";

$cochesSeleccionados = array();
$vehiculosSeleccionados = array();
$coloresSeleccionados = array();
$lProcesaFormulario = false;
$lerrorValidacion = false;

// 
if (isset($_POST["enviar"])) {
    $lProcesaFormulario = true;

    // Validación de nombre
    clearData($_POST['nombre']);
    if (empty($_POST['nombre'])) {
        $lerrorValidacion = true;
        $nombreError = 'El nombre es obligatorio';
    } else {
        $nombre = $_POST['nombre'];
    }

    // Validación de email
    filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $lerrorValidacion = true;
        $emailError = 'El email no es válido';
    } else {
        $email = $_POST['email'];
    }

    // Validación de género (radio-buttom)
    if (empty($_POST['genero'])) {
        $lerrorValidacion = true;
        $generoError = 'El género es obligatorio';
    } else {
        $genero = $_POST['genero'];
    }

    // comentarios sin validación pero con saneamiento
    clearData($_POST['comentario']);
    $comentarios = $_POST['comentario'];

    // URL con validación
    filter_var($_POST['url'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($_POST['url'], FILTER_VALIDATE_EMAIL)) {
        $lerrorValidacion = true;
        $urlError = 'El email no es válido';
    } else {
        $url = $_POST['url'];
    }

    // Validación coches
    if (empty($_POST['coches'])) {
        $lerrorValidacion = true;
        $cochesError = "Es obligatorio seleccionar un coche";
    } else {
        $cochesSeleccionados = $_POST["coches"];
    }

    // Validación vehículos
    if (empty($_POST['vehiculos'])) {
        $lerrorValidacion = true;
        $vehiculosError = "Es obligatorio seleccionar un vehículo";
    } else {
        $vehiculosSeleccionados = $_POST["vehiculos"];
    }
    //var_dump($_POST);
}

// Comprobamos si hay algún error
if ($lerrorValidacion) {
    $lProcesaFormulario = false;
}
?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
 </head>
 <body>
    <h1>Validación del formulario</h1>
    <p class="error">* campo requerido</p>
    <form action="" method="post">
        <label for="name">Nombre:
            <input type="text" name="nombre" value="<?php echo "". $nombre;?>">
            <span class="error">*<?php echo $nombreError;?></span> <br><br>
        </label>
        <br/>
        <br/>

        <label for="email">Email:
            <input type="email" name="email" value="<?php echo "". $email;?>">
            <span class="error">*<?php echo $emailError;?></span> <br><br>
        </label>
        <br/>
        <br/>

        <label for="url">URL:
            <input type="url" name="url">
        </label>
        <br/>
        <br/>

        <label for="comentario">Comentarios:
            <textarea name="comentario" rows="" cols=""></textarea>
        </label>
        <br/>
        <br/>
        
        <label for="genero">Género:
            <?php
                foreach ($agenero as $valor) {
                    $check = "";
                    if ($genero == $valor) {
                        $check = 'checked';
                    }
                    echo '<input type="radio" name="genero" value=" '. $valor .'"' . $check . '>' . $valor .'';                
                }
                echo '<span class="error">*'.  $generoError. '</span>';
            ?>
        </label>
        <br/>
        <br/>

        <label for="coches">Coches:
            <?php
                foreach ($acoches as $clave => $valor) {
                    if (in_array($valor, $cochesSeleccionados)) {
                        $check = 'checked';
                    }
                    echo '<input type="checkbox" name="coches[]" value=" '. $valor . '"' . $check . '>' . $valor . '';
                }
                echo '<span class="error">*'.  $cochesError. '</span>';
            ?>
        </label>
        <br/>

        <label for="vehiculos">Vehículos:
            <?php
                foreach ($avehiculos as $valor) {
                    if (in_array($valor, $vehiculosSeleccionados)) {
                        $check = 'checked';
                    }
                    echo '<input type="checkbox" name="vehiculos[]" value=" '. $valor . '" ' . $check . '>' . $valor . '';
                }
                echo '<span class="error">*'.  $vehiculosError. '</span>';
            ?>
        </label>
        <br/>
        <br/>

        <input type="submit" name="enviar">
    </form>
 </body>
 </html>
