<?php
/**
 * 
 * 3. Suma de los elementos de un array:
 *      • Escribe un script que sume todos los elementos de un array numérico.
 * @author Kike MJ 
 */

 $numeros = array(2, 4, 6, 8 , 10);

 $suma = 0;

foreach($numeros as $numero) {
    $suma += $numero;
}

echo "La suma de todos los números es " . $suma;