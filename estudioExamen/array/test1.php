<?php
/**
 * 
 * Array multidimensional
 * @author Kike MJ
 * 
 */

 $personajes = array(
    "Personaje1" => array(
        "Nombre" => "Kike",
        "Raza" => "Elfo oscuro",
        "Clase" => "Arquero",
        "Habilidades" => array(
            "Fuego" => "Lanzallamas",
            "Agua" => "Lluvia de escarchas"
        )
    ),
    "Personaje2" => array(
        "Nombre" => "Elena",
        "Raza" => "Elfo del bosque",
        "Clase" => "Bruja",
        "Habilidades" => array(
            "Fuego" => "Meteorito ardiente",
            "Agua" => "Sanamiento azul"
        )
    ),
    "Personaje3" => array(
        "Nombre" => "Salva",
        "Raza" => "Orco",
        "Clase" => "Berserker",
        "Habilidades" => array(
            "Fuego" => "Hacha ardiente",
            "Agua" => "Escudo acuático"
        )
    ),
);


// forma 1 de obtener los datos
echo "<table border='1' style='width: 100%; border-collapse: collapse' >";
echo "<tr><th colspan='4'>Personajes juego de rol</th></tr>";
echo "<tr><th>Nombre</th><th>Raza</th><th>Clase</th><th>Habilidades</th></tr>";

foreach ($personajes as $personaje) {
    echo "<tr style='text-align: center'>
    <td>{$personaje['Nombre']}</td>
    <td>{$personaje['Raza']}</td><td>{$personaje['Clase']}</td>
    <td>{$personaje['Habilidades']['Fuego']}, {$personaje['Habilidades']['Agua']}</td></tr>";

}
echo "</table>";

// forma 2 de obtener los datos

echo "<table border='1' style='width: 100%; border-collapse: collapse' >";
echo "<tr><th colspan='4'>Personajes juego de rol</th></tr>";
echo "<tr><th>Nombre</th><th>Raza</th><th>Clase</th><th>Habilidades</th></tr>";

foreach ($personajes as $personaje) {
    echo "<tr style='text-align: center'>";
    foreach ($personaje as $key => $value) {
        // Comprobamos si el valor es un array de habilidades
        if (is_array($value)) {
            echo "<td>" . implode(", ", $value) . "</td>";
        } else {
            echo "<td>{$value}</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

/*
// Forma de obtener datos sin tabla
foreach ($personajes as $key => $value) {

    echo $key . "<br>";
    foreach ($value as $key => $valor) {
        echo $valor . "<br>";
    }
}
*/


