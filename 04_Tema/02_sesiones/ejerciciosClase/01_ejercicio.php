<?php
session_start();

$_SESSION['intervaloTime'] = 1; 
if (!isset($_SESSION['inicioTime'])) {
    $_SESSION['inicioTime'] = time();
    $_SESSION['contador'] = 0; 
}

$tiempo_transcurrido = time();
$tiempo_maximo = $_SESSION['inicioTime'] + ($_SESSION['intervaloTime'] * 60);

if ($tiempo_transcurrido > $tiempo_maximo) {
    header("Location: salir.php"); 
    exit(); 
}

function pulsa() {
    $_SESSION['contador']++;
    $_SESSION['inicioTime'] = time(); 
}  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Pulsaciones</title>
</head>
<body>
    <h1>Contador de Pulsaciones</h1>
    <p>Pulsaciones actuales: <?php echo $_SESSION['contador']; ?></p>
    
    <a href=<?php pulsa();?> >¡Pulsa aquí!</a>
    
    <p>Tienes un minuto para pulsar de nuevo o el contador se reiniciará.</p>
</body>
</html>