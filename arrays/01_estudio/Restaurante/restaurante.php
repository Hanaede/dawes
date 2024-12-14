<?php

/**
 * 
 * @author Daniel Fernández Balsera
 * 
 *  Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres.
    Almacenar información incluyendo foto y mostrar los menús disponibles. Mostrar el
    precio del menú suponiendo que éste se calcula sumando el precio de cada uno de
    los platos incluidos y con un descuento del 20 %.
 * 
 * 
 */


 // Creamos el array con la imagen de los platos


 $fotoPlato = array(

    "cochinillo" => "cochinillo.jpg",
    "ensalada" => "ensalada.jpg",
    "fabada" => "fabada.jpg",
    "flan" => "flan.png",
    "gazpacho" => "gazpacho.jpg",
    "natillas" => "natillas.jpg",
    "paella" => "paella.jpg",
    "pastelCatalan" => "pastelcatalan.jpg",
    "pulpo" => "pulpo.jpg",
    "salmorejo" => "salmorejo.jpg",
    "tortilla" => "tortilla.jpeg"



 );

 // Creamos el array multidimensional para los menus

 $menu = array(


    // Array multidimensional para el primer plato

    "primerPlato" => array(

        // Lo dividimos en 3 arrays, 1 por plato

        "primero1" => array(

            "Nombre" => "Tortilla de patatas",
            "Precio" => 5,
            "Imagen" => $fotoPlato["tortilla"]


        ),
        "primero2" => array(

            "Nombre" => "Cochinillo",
            "Precio" => 8,
            "Imagen" => $fotoPlato["cochinillo"]


        ),
        "primero3" => array(

            "Nombre" => "Salmorejo",
            "Precio" => 4,
            "Imagen" => $fotoPlato["salmorejo"]


        ),

    ),



    // Array multidimensional para el segundo plato

    "segundoPlato" => array(

        // Lo dividimos en 5 arrays, 1 por plato

        "segundo1" => array(

            "Nombre" => "Ensalada",
            "Precio" => 6,
            "Imagen" => $fotoPlato["ensalada"]


        ),
        "segundo2" => array(

            "Nombre" => "Fabada",
            "Precio" => 10,
            "Imagen" => $fotoPlato["fabada"]


        ),
        "segundo3" => array(

            "Nombre" => "Gazpacho",
            "Precio" => 6,
            "Imagen" => $fotoPlato["gazpacho"]


        ),
        "segundo4" => array(

            "Nombre" => "Paella",
            "Precio" => 12,
            "Imagen" => $fotoPlato["paella"]


        ),
        "segundo5" => array(

            "Nombre" => "Pulpo",
            "Precio" => 6,
            "Imagen" => $fotoPlato["pulpo"]


        ),

    ),



    // Array multidimensional para el postre

    "Postre" => array(

        // Lo dividimos en 3 arrays, 1 por postre

        "postre1" => array(

            "Nombre" => "Flan",
            "Precio" => 2,
            "Imagen" => $fotoPlato["flan"]


        ),
        "postre2" => array(

            "Nombre" => "Natillas",
            "Precio" => 3,
            "Imagen" => $fotoPlato["natillas"]


        ),
        "postre3" => array(

            "Nombre" => "Pastel Catalán",
            "Precio" => 6,
            "Imagen" => $fotoPlato["pastelCatalan"]


        ),
       
    ),


 );




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <title>Carta del Restaurante</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #f3cf6f;
            font-family: 'Playfair Display', serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        header {
            background-color: #fcdc91;
            width: 100%;
            text-align: center;
            padding: 15px 0;
        }

        #tituloRestaurante {
            background-color: #d3955f;
            padding: 10px;
            color: white;
            font-size: 2.5em;
        }

        #selecciones {
            background-color: beige;
            width: 40vw;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        #tituloSeleccion {
            font-size: 1.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 1.2em;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #d3955f;
            color: white;
            font-size: 1.2em;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        button:hover {
            background-color: #c88b4a;
        }

        .seleccionado {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            padding: 10px;
            background-color: beige;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .seleccionado img {
            width: 80px;
            height: auto;
            border-radius: 5px;
        }

        .seleccionado p {
            font-size: 1.1em;
            margin-left: 20px;
        }

        .precio {
            background-color: beige;
            padding: 20px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 40vw;
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<header>
    <h2 id="tituloRestaurante">CARTA DEL RESTAURANTE</h2>
</header>

<div class="container">
    <div id="selecciones">
        <h1 id="tituloSeleccion">Selecciona un menú</h1>
        <form action="" method="POST">
            <select name="primerPlato">
                <?php foreach($menu['primerPlato'] as $clave => $plato): ?>
                    <option value="<?= $clave ?>"><?= $plato['Nombre'] ?></option>
                <?php endforeach; ?>
            </select>

            <select name="segundoPlato">
                <?php foreach($menu['segundoPlato'] as $clave => $plato): ?>
                    <option value="<?= $clave ?>"><?= $plato['Nombre'] ?></option>
                <?php endforeach; ?>
            </select>

            <select name="postre">
                <?php foreach($menu['Postre'] as $clave => $plato): ?>
                    <option value="<?= $clave ?>"><?= $plato['Nombre'] ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit" name="enviar">Seleccionar menú</button>
        </form>
    </div>

    <?php
    if (isset($_POST['enviar'])) {
        $primerPlato = $_POST['primerPlato'];
        $segundoPlato = $_POST['segundoPlato'];
        $postre = $_POST['postre'];

        $nombrePlato1 = $menu["primerPlato"][$primerPlato]["Nombre"];
        $nombrePlato2 = $menu["segundoPlato"][$segundoPlato]["Nombre"];
        $nombrePostre = $menu["Postre"][$postre]["Nombre"];

        $precioPlato1 = $menu["primerPlato"][$primerPlato]["Precio"];
        $precioPlato2 = $menu["segundoPlato"][$segundoPlato]["Precio"];
        $precioPostre = $menu["Postre"][$postre]["Precio"];

        $precioTotal = ($precioPlato1 + $precioPlato2 + $precioPostre) * 0.8;

        $imagenPlato1 = $menu["primerPlato"][$primerPlato]["Imagen"];
        $imagenPlato2 = $menu["segundoPlato"][$segundoPlato]["Imagen"];
        $imagenPostre = $menu["Postre"][$postre]["Imagen"];
    ?>
        <div class="seleccionado">
            <img src="<?= htmlspecialchars($imagenPlato1) ?>" alt="<?= htmlspecialchars($nombrePlato1) ?>">
            <p>Primer Plato: <?= htmlspecialchars($nombrePlato1) ?></p>
        </div>

        <div class="seleccionado">
            <img src="<?= htmlspecialchars($imagenPlato2) ?>" alt="<?= htmlspecialchars($nombrePlato2) ?>">
            <p>Segundo Plato: <?= htmlspecialchars($nombrePlato2) ?></p>
        </div>

        <div class="seleccionado">
            <img src="<?= htmlspecialchars($imagenPostre) ?>" alt="<?= htmlspecialchars($nombrePostre) ?>">
            <p>Postre: <?= htmlspecialchars($nombrePostre) ?></p>
        </div>

        <div class="precio">
            <p>Precio Total: <?= number_format($precioTotal, 2) ?> €</p>
        </div>
    <?php } ?>
</div>
</body>
</html>