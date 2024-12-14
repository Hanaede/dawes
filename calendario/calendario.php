<?php
$dia_actual = date("j");
$mes_actual = isset($_POST['mes']) ? (int)$_POST['mes'] : date("n");
$year_actual = isset($_POST['year']) ? (int)$_POST['year'] : date("Y");

// Validar mes y año
if ($mes_actual < 1 || $mes_actual > 12) {
    $mes_actual = date("n");
}
if ($year_actual < 1970 || $year_actual > 2100) {
    $year_actual = date("Y");
}

$dias_en_mes = cal_days_in_month(CAL_GREGORIAN, $mes_actual, $year_actual);
$dia_inicio = date("w", mktime(0, 0, 0, $mes_actual, 1, $year_actual));
$numeroX = ($dia_inicio == 0) ? 6 : $dia_inicio - 1;

$dias_festivos = [
    [1, 1, "nacional"],
    [6, 1, "nacional"],
    [28, 2, "comunidad"],
    [1, 5, "nacional"],
    [15, 8, "nacional"],
    [8, 9, "local"],
    [12, 10, "nacional"],
    [24, 10, "local"],
    [1, 11, "nacional"],
    [6, 12, "nacional"],
    [8, 12, "nacional"],
    [25, 12, "nacional"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Calendario PHP</title>
    <style>
        .comunidad {
            background-color: #FFCC00; /* Cambiado a amarillo */
            color: black;
        }
        .nacional {
            background-color: #FF3300; /* Cambiado a rojo oscuro */
            color: white;
        }
        .local {
            background-color: #66CCFF; /* Cambiado a azul claro */
            color: black;
        }
        .actual {
            background-color: #33CC33; /* Cambiado a verde claro */
            color: white;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            width: 14.28%; /* 100% / 7 días */
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Calendario de <?php echo $mes_actual ?> de <?php echo $year_actual ?></h1>
<form method="post" action="">
    <label for="mes">Mes:</label>
    <input type="number" id="mes" name="mes" min="1" max="12" value="<?php echo $mes_actual; ?>">
    <label for="year">Año:</label>
    <input type="number" id="year" name="year" min="1970" max="2100" value="<?php echo $year_actual; ?>">
    <input type="submit" value="Mostrar Calendario">
</form>
<table border="1">
    <tr>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sábado</th>
        <th>Domingo</th>
    </tr>
    <?php
    echo "<tr>";
    for ($i = 0; $i < $numeroX; $i++) {
        echo "<td></td>";
    }

    for ($dia = 1; $dia <= $dias_en_mes; $dia++) {
        $es_festivo = false;

        foreach ($dias_festivos as $festivo) {
            if ($festivo[0] == $dia && $festivo[1] == $mes_actual) {
                echo "<td class='{$festivo[2]}'>$dia</td>";
                $es_festivo = true;
                break;
            }
        }

        if (date("w", mktime(0, 0, 0, $mes_actual, $dia, $year_actual)) == 0) {
            echo "<td class='nacional'>$dia</td>";
            $es_festivo = true;
        }

        if (!$es_festivo && $dia == $dia_actual && $mes_actual == date("n") && $year_actual == date("Y")) {
            echo "<td class='actual'>$dia</td>";
        } elseif (!$es_festivo) {
            echo "<td>$dia</td>";
        }

        if (($dia + $numeroX) % 7 == 0 && $dia != $dias_en_mes) {
            echo "</tr><tr>";
        }
    }

    // Rellenar celdas vacías al final del mes
    if (($dias_en_mes + $numeroX) % 7 != 0) {
        for ($i = 0; $i < (7 - ($dias_en_mes + $numeroX) % 7); $i++) {
            echo "<td></td>";
        }
    }

    echo "</tr>";
    ?>
</table>
</body>
</html>