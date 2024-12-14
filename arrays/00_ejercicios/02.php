<?php
/**
 * 
 * 2. Promedio de notas:
 *      • Dado un array de calificaciones, calcula el promedio.
 * @author Kike MJ 
 */

 $notas = array(2, 4, 5, 7, 8);
 $suma = 0;

 foreach ($notas as $nota) {
    $suma += $nota;
} 

$promedio = $suma / count($notas);

 echo "El promedio es " . $promedio;