<?php
/**
 * 
 * 5. Array multidimensional:
 *      • Crea un array multidimensional con al menos 3 estudiantes y sus respectivas notas. Luego imprime cada estudiante con su promedio.
 * @author Kike MJ 
 */

$alunnos = array(
    "Kike" => array("DAWECL" => 6, "DAWES" => 7),
    "Jorge" => array("DAWECL" => 5, "DAWES" => 6),
    "Óscar" => array("DAWECL" => 3, "DAWES" => 2)
);

foreach ($alunnos as $nombre => $alumno) {
    echo "Alumno $nombre: <br/>";
    foreach ($alumno as $clave => $valor) {
        echo "$clave => $valor <br/>";
    }
}
