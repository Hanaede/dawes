<?php
/**
 * 
 * Test para comprobar el manejo del fichero de texto.
 * @author Kike MJ 
 */
include "./config.php";
$aUsuarios = array();
$desglose = []; // array
$alumno = "";
$nombreUsuario="";
$contador = 1;

// Abrir fichero
$file = fopen("./RegMisAlu.csv","r");

// Despreciamos línea cabecera
for ($i=0; $i < LINE_CABECERA; $i++) { 
    fgets($file);
}

// Recorrer fichero utilizando hasta final de fichero (feof)
while (!feof($file)) {
    $alumno = fgets($file);
    //Remplaza caracteres especiales
    $alumno_st = str_replace($caracteresBusqueda, $caracteresRemplaza, $alumno);
    // pasamos a minúsculas
    $alumno_minuscula = strtolower($alumno_st);
    //echo $alumno_minuscula . "<br/>";
    $desglose = explode(" ", $alumno_minuscula);
    $nombreUsuario = substr($desglose[0], 0, 2) . substr($desglose[1], 0, 2) . substr($desglose[2] ?? "", 0, 2);

    // Verificar si no está en el array antes de agregar
    $nombreUsuarioComprobado = $nombreUsuario;
    while (in_array($nombreUsuario, $aUsuarios)) {
        $nombreUsuario = $nombreUsuarioComprobado . $contador;
        $contador++;
    }
    $contador = 1;

    array_push($aUsuarios, $nombreUsuario);
    echo $nombreUsuario . "</br>";
}
fclose($file);