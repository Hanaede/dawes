<?php
/**
 * Creador de personajes de rol
 * @author Kike MJ
 */
include("./config/config.php");
include("./lib/function.php");

// Inicializamos variables
$nombre = $origen = $clase = $vida = $armadura = $biografia = $compa = "";
$nombreError = $origenError = $claseError = $vidaError = $armaduraError = $generoError = $razaError = $habilidadesError = $armaError = $biografiaError ="";

// Seleccionamos un género por defecto
$genero = $aGenero[0];

// Creamos variables que serán arrays
$raza = array();
$habilidades = array();
$arma = array();

// Iniciamos variables booleanas para procesar el formulario
$lProcesaFormulario = false;
$errorValidacion = false;

// Comprobar si el formulario se ha enviado
if (isset($_POST["enviar"])) {
    // Procesa formulario true y empiezo a leer variables y comprobar errores
    $lProcesaFormulario = true;
    $nombre = clearData($_POST["nombre"]);
    $biografia = clearData($_POST["biografia"]);

    // Validamos el género
    if (isset($_POST["genero"])) {
        $genero = $_POST["genero"];
    } else {
        $generoError = "Debe seleccionar un género";
        $errorValidacion = true;
    }

    // Validamos nombre
    if (empty($nombre)) {
        $nombreError = "Debe introducir un nombre";
        $errorValidacion = true;
    }

    // Validamos biografía
    if (empty($biografia)) {
        $biografiaError = "Debe escribir su biografía";
        $errorValidacion = true;
    }

    // Validamos origen
    if (isset($_POST["origen"])) {
        $origen = $_POST["origen"];
    } else {
        $origenError = "Debe seleccionar un origen";
        $errorValidacion = true;
    }

    // Validamos clase
    if (isset($_POST["clase"])) {
        $clase = $_POST["clase"];
    } else {
        $claseError = "Debe seleccionar una clase";
        $errorValidacion = true;
    }

    // Validamos vida
    if (isset($_POST["vida"])) {
        $vida = $_POST["vida"];
    } else {
        $vidaError = "Debe seleccionar un valor para la vida";
        $errorValidacion = true;
    }

    // Validamos armadura
    if (isset($_POST["armadura"])) {
        $armadura = $_POST["armadura"];
    } else {
        $armaduraError = "Debe seleccionar un tipo de armadura";
        $errorValidacion = true;
    }

    // Validamos raza
    if (isset($_POST["raza"])) {
        $raza = $_POST['raza'];
    } else {
        $razaError = "Debe seleccionar al menos una raza";
        $errorValidacion = true;
    }

    // Validamos habilidades
    if (isset($_POST["habilidades"])) {
        $habilidades = $_POST['habilidades'];
    } else {
        $habilidadesError = "Debe seleccionar al menos una habilidad";
        $errorValidacion = true;
    }

    // Validamos armas
    if (isset($_POST["arma"])) {
        $arma = $_POST["arma"];
    } else {
        $armaError = "Debe seleccionar al menos un arma";
        $errorValidacion = true;
    }

    // Validamos compa
    if (isset($_POST["compa"])) {
        $compa = $_POST["compa"];
    }
}

// si tenemos algún error al validar no mostramos los datos y devolvemos al formulario
if ($errorValidacion) {
    $lProcesaFormulario = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creador de personajes de rol</title>
    <style>
        .error {
            color: red;
        }
        .class-image {
            margin-top: 20px;
            max-width: 300px;
        }
    </style>
</head>

<body>
    <h1>Creador de personajes de rol</h1>
    <?php
    // Proceso el formulario y muestro los datos
    if ($lProcesaFormulario) {
        echo "Nombre: $nombre <br>";
        echo "Género: $genero <br>";
        echo "Origen: $origen <br>";
        echo "Clase: $clase <br>";
        echo "Razas: " . implode(", ", $raza) . "<br>";
        echo "Vida: $vida<br>";
        echo "Habilidades: " . implode(", ", $habilidades) . "<br>";
        echo "Armadura: $armadura<br>";
        echo "Armas: " . implode(", ", $arma) . "<br>";
        echo "Compañero: $compa <br>";

        if (isset($classImages[$clase])) {
            echo "<img src='" . $classImages[$clase] . "' alt='$clase' class='class-image'><br>";
        }
    } else {
        ?>
        <p class="error">* Campos requeridos</p>
        <form action="" method="post">
            <!-- Nombre -->
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $nombre ?>" />
                <span class="error"><?php echo "* " . $nombreError ?></span>
            </div>

            <!--Género -->
            <div>
                <label>Género:</label>
                <?php
                foreach ($aGenero as $value) {
                    $confirmado1 = $value == $genero ? "checked" : "";
                    echo "<input type='radio' name='genero' value='$value' $confirmado1/> $value";
                }
                ?>
                <span class="error"><?php echo "* " . $generoError ?></span>
            </div>

            <!-- Origen -->
            <div>
                <label>Origen:</label>
                <?php
                foreach ($aOrigen as $value) {
                    $confirmado2 = $value == $origen ? "checked" : "";
                    echo "<input type='radio' name='origen' value='$value' $confirmado2/> $value";
                }
                ?>
                <span class="error"><?php echo "* " . $origenError ?></span>
            </div>

            <!-- Clase -->
            <div>
                <label>Clase:</label>
                <?php
                foreach ($aClase as $claseItem) {
                    $value = $claseItem["clase"];
                    $confirmado3 = $value == $clase ? "checked" : "";
                    echo "<input type='radio' name='clase' value='$value' $confirmado3/> $value";
                }
                ?>
                <span class="error"><?php echo "* " . $claseError ?></span>
            </div>

            <!-- Vida -->
            <div>
                <label>Vida:</label>
                <select name="vida">
                    <?php
                    foreach ($aVida as $vidaItem) {
                        $seleccionado1 = $vidaItem == $vida ? "selected" : "";
                        echo "<option value='$vidaItem' $seleccionado1>$vidaItem</option>";
                    }
                    ?>
                </select>
                <span class="error"><?php echo "* " . $vidaError ?></span>
            </div>

            <!-- Armadura -->
            <div>
                <label>Armadura:</label>
                <?php
                foreach ($aArmadura as $value) {
                    $seleccionado2 = $value == $armadura ? "checked" : "";
                    echo "<input type='radio' name='armadura' value='$value' $seleccionado2/> $value";
                }
                ?>
                <span class="error"><?php echo "* " . $armaduraError ?></span>
            </div>

            <!-- Raza -->
            <div>
                <label>Raza:</label>
                <?php
                foreach ($aRaza as $razaItem) {
                    $nombreRaza = $razaItem["raza"]; // Usamos el nombre de la raza
                    $seleccionado3 = in_array($nombreRaza, $raza) ? "checked" : "";
                    echo "<input type='checkbox' name='raza[]' value='$nombreRaza' $seleccionado3/> $nombreRaza";
                }
                ?>
                <span class="error"><?php echo "* " . $razaError ?></span>
            </div>

            <!-- Habilidades -->
            <div>
                <label>Habilidades:</label>
                <?php
                foreach ($aHabilidades as $grupo) {
                    foreach ($grupo as $categoria => $habilidadesArray) {
                        echo "<strong>$categoria:</strong><br>";
                        foreach ($habilidadesArray as $habilidad) {
                            $seleccionado = in_array($habilidad, $habilidades) ? "checked" : "";
                            echo "<input type='checkbox' name='habilidades[]' value='$habilidad' $seleccionado/> $habilidad<br>";
                        }
                    }
                }
                ?>
                <span class="error"><?php echo "* " . $habilidadesError ?></span>
            </div>

            <!-- Arma -->
            <div>
                <label>Armas:</label>
                <?php
                foreach ($aArma as $value) {
                    $seleccionado = in_array($value, $arma) ? "checked" : "";
                    echo "<input type='checkbox' name='arma[]' value='$value' $seleccionado/> $value";
                }
                ?>
                <span class="error"><?php $armaError ?></span>
            </div>

            <!--Compa-->
            <div>
            <label>Nivel ingles:</label>
            <select name="compa">
                <?php
                    foreach($aCompa as $clave => $valor){
                        $seleccionado4 = $compa == $valor?"selected":"";
                        echo "<option value='$valor' $seleccionado4/> $valor";
                    }
                ?>
            </select>
            <span class="error"><?php echo "* " ?></span></br>

            </div>

            <!-- Biografia -->
            <div>
                <label>Biografía:</label>
                <textarea name="biografia"><?php echo $biografia ?></textarea><span
                    class="error"><?php echo "* " . $biografiaError ?></span></br>
            </div>

            <div>
                <button type="submit" name="enviar" value="enviar">Enviar</button>
            </div>
        </form>
        <?php
    }
    ?>
</body>
</html>