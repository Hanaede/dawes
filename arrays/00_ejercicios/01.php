<?php
/**
 * 
 * 1. Array de días de la semana:
 *      • Crea un array con los días de la semana e imprime cada uno de ellos en una nueva línea.
 * @author Kike MJ
 */

 $diasSemana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

 for ($i = 0; $i < count($diasSemana); $i++) { // Longitud del array
    echo $diasSemana[$i] . "<br/>";
 }
echo "<br/>";
 foreach ($diasSemana as $diaSemana) {
   echo "". $diaSemana . "<br/>";
 }