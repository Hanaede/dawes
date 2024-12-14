<?php
define("LINE_CABECERA", 1);
define("A_INICIO", 2010);
define("A_FINAL", 2030);

define("DIRUPLOAD", 'upload/'); // Directorio para la subida del archivo.
define("MAXSIZE", 200000); // Tamaño máximo

// Proceso de subida de archivo
$allowedExts = array("csv"); // Extensión
$allowedFormat = array("text/csv"); // Tipo de archivo

$caracteresBusqueda = array("Á", "á", "É", "é", "Í", "í", "Ó", "ó", "Ú", "ú", "Ú", "ü", "Ñ", "ñ", ",", "\"");

$caracteresRemplaza = array("A", "a", "E", "e", "I", "i", "O", "o", "U", "u","N", "n", " ", " ");

$grupos = array("1 DAW", "2 DAW", "1 ASIR", "2 ASIR");
$formatos = array("Linux", "MySQL");
