
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>Carrito</h1>

    <ul>
        <?php foreach($_SESSION['carrito'] as $item): ?>
        <li>
            Pelicula: <?php echo $item['titulo']; ?><br/>
            Horario: <?php echo $item['horario']; ?><br/>
            Precio: <?php echo $item['precio']; ?><br/>
        </li>
        <?php endforeach; ?>
    </ul>
    <form action="" method="post">
        <input type="submit" name="limpiar_carrito" value="Limpiar Carrito"><br/>
        <input type="submit" name="ticket" value="Sacar Ticket"><br/>
    </form>
    <a href="peliculas.php">Volver a Peliculas</a>
</body>
</html>