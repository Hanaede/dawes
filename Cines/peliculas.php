<?php

session_start();

if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado'] = false;
    header('location:login.php');
    exit();
}

require_once('./conf/config.php');

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if(isset($_POST['reservar'])){
    $genero = $_POST['genero'];
    $index = $_POST['pelicula'];
    $horario = $_POST['horario'];
    $precio = $_POST['precio'];

    $peliculaSeleccionada = $peliculas[$genero][$index];
     
    $_SESSION['carrito'][] = [
        'titulo' => $peliculaSeleccionada['titulo'],
        'horario' => $horario,
        'precio' => $precio
    ];

    header('Location: carrito.php');
    exit();
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas disponibles</title>
</head>
<body>
    <h1>Peliculas</h1>
    <nav>
        <a href="carrito.php"> Ver carrito</a>
    </nav>

    <form action="" method="post">
        <?php foreach($peliculas as $categoria => $listaPeliculas): ?>
            <h2><?php echo ucfirst($categoria); ?></h2>
            <?php foreach($listaPeliculas as $index => $pelicula): ?>
            <div>
                <img src="img/<?php echo $pelicula['imagen']; ?>" width="150"><br>
                <strong> <?php echo $pelicula['titulo']; ?> </strong><br/>
                Duración: <?php echo $pelicula['duracion']; ?><br/>
                Clasificación por edad: <?php echo $pelicula['edad_minima']; ?><br/>
                Horario: <select name="horario">
                    <?php foreach($pelicula['horarios'] as $horario): ?>
                        <option value="<?php echo $horario; ?>"><?php echo $horario; ?></option>
                    <?php endforeach; ?> 
                </select><br/>
                Tipo de asiento: <select name="precio">
                    <?php foreach($pelicula['precio'] as $clave => $valor):?>
                        <option value="<?php echo $valor; ?>"><?php echo ucfirst($clave) . "-" . $valor . "€"; ?></option>
                    <?php endforeach; ?> 
                </select><br/>
                <input type="hidden" name="genero" value="<?php echo $categoria; ?>">
                <input type="hidden" name="pelicula" value="<?php echo $index; ?>"> 
                 <!-- Se hacen ocultos para que luego  se pueda localizar facilmente tanto la
                  categoria, como el nombre de la pelicula -->
                <input type="submit" name="reservar" value="Reservar">
            </div>
            <hr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </form>


    <a href="cierre2.php">Cerrar Sesión</a>
</body>
</html>