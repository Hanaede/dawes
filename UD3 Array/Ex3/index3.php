<?php
/**
 * Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de 
 * ellos. El resultado debe mostrar nombre y fotografía.
 * 
 * @author
 */

?>

<?php
    $alumnos = array(
        array("Nombre" => "Bermúdez González, Raúl", "Foto" => "img/foto1.jpg"),
        array("Nombre" => "Borreguero redondo, Carlos", "Foto" => "img/foto2.jpg"),
        array("Nombre" => "Cañas González, Álvaro", "Foto" => "img/foto3.jpg"),
        array("Nombre" => "Carmona Cicchetti, Miguel", "Foto" => "img/foto4.jpg"),
        array("Nombre" => "Carrasco Castellano, Alejandro", "Foto" => "img/foto5.jpg"),
        array("Nombre" => "Coronado Ortega, Alejandro", "Foto" => "img/foto6.jpg"),
        array("Nombre" => "Delgado Morente, Juan Diego", "Foto" => "img/foto7.jpg"),
        array("Nombre" => "Fernández Ariza, Ángel", "Foto" => "img/foto8.jpg"),
        array("Nombre" => "Fernández Arrayás, Alejandro", "Foto" => "img/foto9.jpg"),
        array("Nombre" => "Ferrer López, Jesús", "Foto" => "img/foto10.jpg")
    );

    $indiceAlumno = array_rand($alumnos);
    $alumnoMostrar = $alumnos[$indiceAlumno];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccion Aleatoria</title>
    <style>
        #elementos{
            justify-content: center;
        }
    </style>
</head>
<body>
    <div id="elementos">
    <h2><?php echo "{$alumnoMostrar["Nombre"]}" ?> </h2>
    <img width ="400px" height="400px" src="<?php  
        echo "{$alumnoMostrar["Foto"]}"
    ?>">
    </div>
</body>
</html>