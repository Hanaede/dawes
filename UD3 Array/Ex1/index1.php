<?php
/**
 * 1. Definir un array que permita almacenar y mostrar la siguiente información.
 * a. Meses del año.
 * b. Tablero para jugar al juego de los barcos.
 * c. Nota de los alumnos de 2o DAW para el módulo DWES.
 * d. Verbos irregulares en inglés.
 * e. Información sobre continentes, países, capitales y banderas.
 */
?>

<?php

$base = array(
            "meses" => array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"),
            
            "notasDaw" => array(
                "Nombre" => "Alejandro",
                "Apellido" => "Arrayás",
                "Asignaturas" => array(
                    "DWES" => 5,
                    "DWEC" => 4,
                    "DIW" => 6
                )
            ),

            "irregularVerbs" => array(
                array("verb" => "Go", "past" => "Went", "participle" => "Gone"),
                array("verb" => "Be", "past" => "Was | were", "participle" => "Been"),
                array("verb" => "Have", "past" => "Had", "participle" => "Had"),
                array("verb" => "Do", "past" => "Did", "participle" => "Done"),
                array("verb" => "See", "past" => "Saw", "participle" => "Seen")
            ),

            "continentes" => array(
                "Europe" => array( 
                    "España" => array("capital" => "Madrid", "flag" => "ES"),
                    "Italy" => array("capital" => "Rome", "flag" => "IT") ,
                ),

                "America" => array(
                    "United-States" => array("capital" => "Washington D.C.", "flag" => "US"),
                    "Argentina" => array("capital" => "Buenos Aires", "flag" => "AR"),
                ),

                "Asia" => array(
                    "Japón" => array("capital" => "Tokio", "flag" => "JP"),
                    "China" => array("capital" => "Pekín", "flag" => "CN"),
                )
            
            )
);


echo "Meses del año <br/><br/>";
foreach ($base["meses"] as $mes){
    echo "$mes <br/>";
}

echo "<br/>Notas de los alumnos<br/><br/>";
echo "<h3>Información del estudiante</h3>";
echo "Nombre: " . $base["notasDaw"]["Nombre"] . "<br/>";
echo "Apellido: " . $base["notasDaw"]["Apellido"] . "<br/>";
echo "<h4>Asignaturas y notas:</h4>";

// Recorrer las asignaturas y sus notas
foreach ($base["notasDaw"]["Asignaturas"] as $asignatura => $nota) {
    echo "$asignatura: $nota<br/>";
}

echo "<br/>Irregular Verbs<br/><br/>";
foreach ($base["irregularVerbs"] as $verb) {
    echo "Verb: {$verb['verb']} --- Past: {$verb['past']} --- Participle: {$verb['participle']}<br/>";
}

echo "<br/>Continentes<br/><br/>";
foreach ($base["continentes"] as $continente => $country) {
    echo "<h2>$continente</h2>";
    foreach ($country as $pais => $value) {
        echo "<h3>$pais</h3>";
        echo "<p>{$value['capital']} -> {$value['flag']} </p><br/>";
    }
    
}

?>
