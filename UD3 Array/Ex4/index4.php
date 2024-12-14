<?php
/**
 * Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres.
 * Almacenar información incluyendo foto y mostrar los menús disponibles. Mostrar el
 * precio del menú suponiendo que éste se calcula sumando el precio de cada uno de
 * los platos incluidos y con un descuento del 20 %.
 * 
 * 
 * @author
 * 
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>
<body>
    <h1>Menú</h1>

    <?php
        $restaurante = array(
            "primeros" => array(
                array("Plato" => "Arroz con Bacalao", "Foto" => "img/arrozbacalao.jpg", "Precio" => "9"),
                array("Plato" => "Pechuga de pollo", "Foto" => "img/pechuga.jpg", "Precio" => "7"),
                array("Plato" => "Lentejas", "Foto" => "img/lentejas.jpg", "Precio" => "6")
            ),
            "segundos" => array(
                array("Plato" => "Ensalada Cesar", "Foto" => "img/ensaladacesar.jpg", "Precio" => "8"),
                array("Plato" => "Garbanzos", "Foto" => "img/garbanzos.jpg", "Precio" => "6"),
                array("Plato" => "Pollo teriyaki", "Foto" => "img/polloteriyaki.jpg", "Precio" => "9"),
                array("Plato" => "Salmorejo", "Foto" => "img/salmorejo.jpg", "Precio" => "7"),
                array("Plato" => "Tortilla de Patatas", "Foto" => "img/tortilla.jpg", "Precio" => "6")
            ),
            "postres" => array(
                array("Plato" => "Arroz con leche", "Foto" => "img/arrozconleche.jpg", "Precio" => "4"),
                array("Plato" => "Natillas", "Foto" => "img/natillas.jpg", "Precio" => "3")
            )
        );

        function calcularPrecioMenu($precioPrimero, $precioSegundo, $precioPostre){
            $precioTotal = $precioPrimero + $precioSegundo + $precioPostre;
            $precioConDescuento = $precioTotal * 0.8;
            return number_format($precioConDescuento, 2);
        }

        foreach($restaurante["primeros"] as $primero){
            foreach($restaurante["segundos"] as $segundo){
                foreach($restaurante["postres"] as $postre){
                    $precioMenu = calcularPrecioMenu($primero["Precio"], $segundo["Precio"], $postre["Precio"]); //Los mandamos como parametros
                    echo "<div style='border:1px solid #ccc; padding: 10px; margin: 10px;'>";
                    echo "<h2>Menú</h2>";

                    // Mostrar Primer Plato
                    echo "<h3>Primero: {$primero['Plato']}</h3>";
                    echo "<img src='{$primero['Foto']}' alt='{$primero['Plato']}' style='width:150px;'><br>";
                    echo "Precio: {$primero['Precio']}€<br>";

                    // Mostrar Segundo Plato
                    echo "<h3>Segundo: {$segundo['Plato']}</h3>";
                    echo "<img src='{$segundo['Foto']}' alt='{$segundo['Plato']}' style='width:150px;'><br>";
                    echo "Precio: {$segundo['Precio']}€<br>";

                    // Mostrar Postre
                    echo "<h3>Postre: {$postre['Plato']}</h3>";
                    echo "<img src='{$postre['Foto']}' alt='{$postre['Plato']}' style='width:150px;'><br>";
                    echo "Precio: {$postre['Precio']}€<br>";

                    // Mostrar Precio total del menú con descuento
                    echo "<h3>Precio del Menú (con 20% de descuento): {$precioMenu}€</h3>";
                    echo "</div>";
                }
            }
        }


    ?>



</body>
</html>

