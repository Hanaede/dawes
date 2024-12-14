<?php 
/**
 * @author Alejandro Fernandez Arrayas
 */
include("./config/config.php");
include("./lib/function.php");

//inicializacion de las variables
$nombre = $email = $genero = $vehiculo = $comment = $url = "";
$eNombre = $eEmail = $eGenero = $eComment = $eUrl = $eCoches = $eVehiculos = "";

$cochesSelec = array();
$coloresSelec = array();
$vehiculosSelec = array();

$procesaForm = false;
$eValidacion = false;

if(isset($_POST["enviar"])){
    $procesaForm = true;

    //Validamos el nombre
    if(empty($_POST["name"])){
       $eValidacion = true;
       $eNombre = "* El nombre es obligatorio"; 
    }else{
        $nombre = $_POST["name"];
    }

    //Validamos el Email
    $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $eValidacion = true;
        $eEmail = "* El email no es correcto";
    }

    //Validamos el genero
    if(empty($_POST["genero"])){
        $eValidacion = true;
        $eGenero = "* Seleccionar el genero es obligatorio";
    }else{
        $genero = $_POST["genero"];
    }

    //Validamos coches
    if(empty($_POST["coches"])){
        $eValidacion = true;
        $eCoches = "* Selecciona al menos un coche";
    }else{
        $cochesSelec = $_POST["coches"];
    }

    //Validamos vehiculos
    if(empty($_POST["vehiculo"])){
        $eValidacion = true;
        $eVehiculos = "* Selecciona al menos un vehiculo";
    }else{
        $vehiculosSelec = $_POST["vehiculo"];
    }
}

if($eValidacion){
    $procesaForm=false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./estilos/styles.css">
</head>
<body>
    <?php 
    if($procesaForm){
        echo "funciona";
    }else{
        include "./view/form_view.php";
    }
    ?>
</body>
</html>