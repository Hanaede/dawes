<?php
$procesarformulario = false;

if (!isset($_POST['enviar'])) {
   header("Location: formulario.php");
} else {
    $procesarformulario = true;
    if ($nombre != $nombreSaneado) {
        error();
    }
    if ($email != $emailSaneado) {
        error();
    }

function error() {
    $procesarformulario = false;
    header("Location: formulario.php");
}
// Carga de valores iniciales => procesa formulario está a falso
// comprobamos si le he dado a enviar en negativo. Si no lo he hecho lo echo fuera.
// Si le he dado a enviar cambio los datos por los $_post. si no son correctos lo mando al formulario con los datos anteriores
//En todos los value del formulario habrá una variable php value= "<?php --- echo $valuenombre 


// RADIO BUTTON
