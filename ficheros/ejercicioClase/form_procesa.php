<?php
/**
 * 
 * 
 */
include("./config.php");

// Primero comprobamos si no está abierto y nos redirige al formulario
if (!isset($_POST['enviar'])) { 
    header('Location: test3.php');
} 

// Subida fichero CSV 

    // Obtengo la extensión dividiendo el array
$temp = explode('.', $_FILES['file']['name']); // file es el nombre del input del formulario => <input type="file" name="file" id=""file> <br/> <!--Botón para subir archivos-->
$extension = end($temp);

    // Comprobaciones
if(($_FILES["file"]["size"] < MAXSIZE  && in_array($_FILES["file"]["type"], $allowedFormat) && in_array($extension, $allowedExts))){
    if($_FILES["file"]["error"] > 0){ // Error debido a la subida del archivo
        echo "Return Code: " . $_FILES["file"]["error"] . "<br/>";
    } else {
        $filename = $_FILES["file"]["name"];
        // Codificamos el nombre del fichero en el servidor para que los ficheros no se llamen igual y no se sobreescriban
        $filename = uniqid().'.'.pathinfo($filename,PATHINFO_EXTENSION);

        // Si existe el fichero le decimos que existe. ESTO NO PASA PORQUE HEMOS CODIFICADO EL FICHERO CON NOMBRE ÚNICO.
        if(file_exists(DIRUPLOAD .$filename)){
            echo $_FILES["file"]["name"] . " already exists. ";
        } else{
            move_uploaded_file($_FILES["file"]["tmp_name"], DIRUPLOAD .$filename); // 
        }
        echo "<br/>";
        // Botón para volver atrás
        echo '<a href="javascript:history.back()">Volver</a>';
    }
}


$grupo = $_POST['grupo'];
$curso = $_POST['curso'];
$formato = $_POST['formato'];

echo $grupo . '<br/>';
echo $curso . '<br/>';
echo $formato . '<br/>';

