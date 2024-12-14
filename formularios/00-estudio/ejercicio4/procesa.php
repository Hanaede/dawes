<?php
include("./config.php");

if (isset($_POST['atras'])){
    header('Location: ./formulario.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mostrar hobbies seleccionados
    if (isset($_POST["hobbies"]) && is_array($_POST["hobbies"])) {
        echo "<h3>Hobbies seleccionados:</h3><ul>";
        foreach ($_POST["hobbies"] as $hobbie) {
            echo "<li>" . htmlspecialchars($hobbie) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No seleccionaste ningún hobby.</p>";
    }

    // Mostrar países seleccionados
    if (isset($_POST["paises"]) && is_array($_POST["paises"])) {
        echo "<h3>Países seleccionados:</h3><ul>";
        foreach ($_POST["paises"] as $pais) {
            echo "<li>" . htmlspecialchars($pais) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No seleccionaste ningún país.</p>";
    }
}
?>
<form action="" method="post">
    <label for="atras">
        <input type="submit" name="atras" value="Atras">
    </label>
</form>
