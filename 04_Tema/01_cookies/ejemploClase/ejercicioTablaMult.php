<?php
/**
 * En el array guardado pares de filas y columnas. Si
 * Array de números aleatorios; Hacer dos for anidados para crear la tabla (de 1 hasta 10 y de 1 hasta 10). Con eso escribo fila y columna. SIN CABECERAS
 * Las cabeceras van por separado, no puede haber huecos ahí.el 1 después de la cabecera es el 0,0
 * 
 * 
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num_huecos = (int) $_POST['num_huecos']; // El número de huecos
    $multiplicacion = [];
    $inputs = [];

    // Generar tabla 10x10 con la tabla de multiplicar
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $multiplicacion[$i][$j] = $i * $j;
        }
    }

    // Generar posiciones aleatorias para los huecos
    $posiciones = [];
    while (count($posiciones) < $num_huecos) {
        $posicion = [rand(1, 10), rand(1, 10)];
        if (!in_array($posicion, $posiciones)) {
            $posiciones[] = $posicion;
        }
    }

    echo '<form method="post" action="comprobar.php">';
    echo '<table border="1">';

    // Dibujar la tabla con huecos
    foreach ($multiplicacion as $i => $fila) {
        echo '<tr>';
        foreach ($fila as $j => $valor) {
            if (in_array([$i, $j], $posiciones)) {
                echo '<td><input type="text" name="respuesta[' . $i . '][' . $j . ']" size="3"></td>';
                $inputs[$i][$j] = $valor; // Guardar las respuestas correctas
            } else {
                echo '<td>' . $valor . '</td>';
            }
        }
        echo '</tr>';
    }

    echo '</table>';
    
    // Guardar las respuestas correctas en un campo oculto
    echo '<input type="hidden" name="respuestas_correctas" value="' . htmlentities(serialize($inputs)) . '">';
    echo '<input type="submit" value="Comprobar">';
    echo '</form>';
} else {
?>
    <!-- Formulario para introducir el número de huecos -->
    <form method="post" action="">
        <label for="num_huecos">Número de huecos (1-100): </label>
        <input type="number" id="num_huecos" name="num_huecos" min="1" max="100" required>
        <input type="submit" value="Generar tabla">
    </form>
<?php
}
?>
