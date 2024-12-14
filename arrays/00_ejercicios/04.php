<?php
/**
 * 
 * 4. Buscar valor en un array:
 *      • Crea un programa que busque un valor específico dentro de un array y muestre si fue encontrado o no.
 * @author Kike MJ 
 */

$array = array(1, 3, "Hola");
$valor = 3;
$encontrado = false;

foreach ($array as $elemento) {
    if ($elemento == $valor) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "El elemento $valor fue encontrado";
}