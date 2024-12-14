<?php

/**
 * 
 * @author Daniel Fernández Balsera
 * 
 * 
 * Crear array que muestre los alumnos y sus notas
 * 
 */


 $notas = array(

    "Bermúdez González, Raúl" => 10,
    "Cañas González, Álvaro" => 7,
    "Carmona Cicchetti, Miguel" =>8, 
    "Carrasco Castellano, Alejandro" =>6,
    "Cherif Mouaki Almabouada, Mostafa" =>5,
    "Coronado Ortega, Alejandro" =>7, 
    "Delgado Morente, Juan Diego" => 8, 
    "Escoto García, Marlon Jafet" => 9, 
    "Fernández Ariza, Ángel" => 8, 
    "Fernández Arrayás, Alejandro" => 6, 
    "Fernández Balsera, Daniel" => 8, 
    "Ferrer López, Jesús" => 10, 
    "Frías Rojas, Jesús" =>5, 
    "Galán Navas, Manuel" => 6, 
    "García Báez, Víctor" =>7, 
    "García Díaz, Lucía" =>8, 
    "González Martínez, Adrián" =>10, 
    "Mariño Jiménez, Enrique" =>8, 
    "Martín-Castaño Carrillo, Oscar" =>9, 
    "Mayén Pérez, José María" =>4, 
    "Mérida Velasco, Pablo" => 6, 
    "Mora Sánchez, Héctor" =>8, 
    "Pérez Cantarero, Luis" =>7, 
    "Romero Romero, Carlos" =>9, 
    "Ruiz Molero, Javier" => 7, 
    "Vaquero Abad, Alejandro" => 9, 
    "Villén Moyano, Luís Miguel" => 5

 );

 
// Creamos la tabla

echo "<table border='1'>";
echo "<tr><th>NOTAS 2º DAW</th></tr>";
echo "<th>Alumno</th><th>Nota</th>";

foreach($notas as $alumno => $nota){

    echo "<tr><td>$alumno</td><td>$nota</td></tr>";
}

echo "</table>";