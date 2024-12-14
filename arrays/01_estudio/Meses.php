<?php   

/**
 * 
 * @author Daniel Fernández Balsera
 * 
 * 
 * Crear array que muestre los meses del año
 * 
 */

$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

$cantidadMeses = count($meses);

// Creamos la tabla

echo "<table border='1'>";
echo "<tr><th>MESES DEL AÑO</th></tr>";

// Creamos bucle for para iterar el array

/*
for($i=0; $i<$cantidadMeses; $i++){

    echo "<tr><th>$meses[$i]</th></tr>";
}
*/
foreach ($meses as $mes) {
    echo "<tr><th>$mes</th></tr>";
}

echo "</table>";