<?php
/**
 * 
 * 5. Factorial de un número:
 *      • Calcula el factorial de un número dado usando un bucle for.
 */

 $numero = 2; 
 $factorial = 1;
 
 for ($i = 1; $i <= $numero; $i++) {
     $factorial *= $i;
 }
 
 echo "El factorial de $numero es: " . $factorial;