<?php
/**
 * 
 * Test para comprobar el manejo del fichero de texto.
 * @author Kike MJ 
 */
include "./config.php";

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
    echo $alumno_minuscula . "<br/>";
}

fclose($file);