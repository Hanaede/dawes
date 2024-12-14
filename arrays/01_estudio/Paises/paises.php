<?php

/**
 * 
 * 
 * 
 * @author Daniel Fernández Balsera
 * 
 * Información sobre continentes, países, capitales y banderas.
 * 
 */


$banderas = array(

    "Argentina" => "BanderasPaises/argentina.png",
    "Australia" => "BanderasPaises/australia.png",
    "Brasil" => "BanderasPaises/brasil.png",
    "Canadá" => "BanderasPaises/canada.png",
    "China" => "BanderasPaises/china.png",
    "Francia" => "BanderasPaises/francia.png",
    "Alemania" => "BanderasPaises/alemania.png",
    "India" => "BanderasPaises/india.png",
    "Indonesia" => "BanderasPaises/indonesia.png",
    "Italia" => "BanderasPaises/italia.png",
    "Japón" => "BanderasPaises/japon.png",
    "México" => "BanderasPaises/mexico.png",
    "Rusia" => "BanderasPaises/rusia.png",
    "Arabia Saudita" => "BanderasPaises/arabia.png",
    "Sudáfrica" => "BanderasPaises/sudafrica.png",
    "Corea del Sur" => "BanderasPaises/coreasur.png",
    "Reino Unido" => "BanderasPaises/inglaterra.png",
    "Estados Unidos" => "BanderasPaises/eeuu.png",
    "Unión Europea" => "BanderasPaises/unioneuropea.png"




);

$paises = array(
    "pais1" => array(
        "Continente" => "América del Sur",
        "País" => "Argentina",
        "Capital" => "Buenos Aires",
        "Bandera" => $banderas['Argentina'],
    ),
    "pais2" => array(
        "Continente" => "Oceanía",
        "País" => "Australia",
        "Capital" => "Canberra",
        "Bandera" => $banderas['Australia'],
    ),
    "pais3" => array(
        "Continente" => "América del Sur",
        "País" => "Brasil",
        "Capital" => "Brasilia",
        "Bandera" => $banderas['Brasil'],
    ),
    "pais4" => array(
        "Continente" => "América del Norte",
        "País" => "Canadá",
        "Capital" => "Ottawa",
        "Bandera" => $banderas['Canadá'],
    ),
    "pais5" => array(
        "Continente" => "Asia",
        "País" => "China",
        "Capital" => "Pekín",
        "Bandera" => $banderas['China'],
    ),
    "pais6" => array(
        "Continente" => "Europa",
        "País" => "Francia",
        "Capital" => "París",
        "Bandera" => $banderas['Francia'],
    ),
    "pais7" => array(
        "Continente" => "Europa",
        "País" => "Alemania",
        "Capital" => "Berlín",
        "Bandera" => $banderas['Alemania'],
    ),
    "pais8" => array(
        "Continente" => "Asia",
        "País" => "India",
        "Capital" => "Nueva Delhi",
        "Bandera" => $banderas['India'],
    ),
    "pais9" => array(
        "Continente" => "Asia",
        "País" => "Indonesia",
        "Capital" => "Yakarta",
        "Bandera" => $banderas['Indonesia'],
    ),
    "pais10" => array(
        "Continente" => "Europa",
        "País" => "Italia",
        "Capital" => "Roma",
        "Bandera" => $banderas['Italia'],
    ),
    "pais11" => array(
        "Continente" => "Asia",
        "País" => "Japón",
        "Capital" => "Tokio",
        "Bandera" => $banderas['Japón'],
    ),
    "pais12" => array(
        "Continente" => "América del Norte",
        "País" => "México",
        "Capital" => "Ciudad de México",
        "Bandera" => $banderas['México'],
    ),
    "pais13" => array(
        "Continente" => "Europa/Asia",
        "País" => "Rusia",
        "Capital" => "Moscú",
        "Bandera" => $banderas['Rusia'],
    ),
    "pais14" => array(
        "Continente" => "Asia",
        "País" => "Arabia Saudita",
        "Capital" => "Riad",
        "Bandera" => $banderas['Arabia Saudita'],
    ),
    "pais15" => array(
        "Continente" => "África",
        "País" => "Sudáfrica",
        "Capital" => "Pretoria/Ciudad del Cabo",
        "Bandera" => $banderas['Sudáfrica'],
    ),
    "pais16" => array(
        "Continente" => "Asia",
        "País" => "Corea del Sur",
        "Capital" => "Seúl",
        "Bandera" => $banderas['Corea del Sur'],
    ),
    "pais17" => array(
        "Continente" => "Europa",
        "País" => "Reino Unido",
        "Capital" => "Londres",
        "Bandera" => $banderas['Reino Unido'],
    ),
    "pais18" => array(
        "Continente" => "América del Norte",
        "País" => "Estados Unidos",
        "Capital" => "Washington D.C.",
        "Bandera" => $banderas['Estados Unidos'],
    ),
    "pais19" => array(
        "Continente" => "Europa",
        "País" => "Unión Europea",
        "Capital" => "Bruselas",
        "Bandera" => $banderas['Unión Europea'],
    ),

);


echo "<table border='1' style='width:60%; border-collapse: collapse'>";
echo "<tr><th colspan='100'>PAISES G20</th></tr>";
echo "<tr style='text-align:center'><td>País</td><td>Capital</td><td>Continente</td><td>Bandera</td></tr>";

// Creamos la iteración para cada país


foreach($paises as $pais){

echo "<tr style='text-align:center'>";
echo "<td>{$pais['País']}</td>";
echo "<td>{$pais['Capital']}</td>";
echo "<td>{$pais['Continente']}</td>";
echo "<td><img src='{$pais['Bandera']}'></td>";
echo "</tr>";


}


echo "</table>";


?>