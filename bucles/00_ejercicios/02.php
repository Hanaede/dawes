<?php
/**
 * 
 * 2. Suma de los primeros 50 números:
 *      • Calcula la suma de los primeros 50 números naturales usando un bucle while.
 */
$suma = 0;
$contador = 1;

while ($contador <= 50) {
    $suma += $contador;
    $contador++;
}

echo "La suma de los primeros 50 números es: " . $suma;