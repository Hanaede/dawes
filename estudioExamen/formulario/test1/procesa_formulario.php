<?php
include("./config.php");


if (!isset($_POST['enviar'])) {
    header("location: ./formulario.php");
    exit();
}

// Mostrar nombre
if (isset($_POST["nombre"])) {
    echo "<h4>Nombre:</h4><ul>";
    echo $_POST['nombre'];
}
// Mostrar nombres de personajes seleccionados
if (isset($_POST["personajesNombre"]) && is_array($_POST["personajesNombre"])) {
    echo "<h4>Personajes seleccionados:</h4><ul>";
    foreach ($_POST["personajesNombre"] as $nombre) {
        echo "<li>" . htmlspecialchars($nombre) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No seleccionaste ningún personaje.</p>";
}

// Mostrar razas seleccionadas
if (isset($_POST["personajesRaza"]) && is_array($_POST["personajesRaza"])) {
    echo "<h4>Razas seleccionadas:</h4><ul>";
    foreach ($_POST["personajesRaza"] as $raza) {
        echo "<li>" . htmlspecialchars($raza) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No seleccionaste ninguna raza.</p>";
}
?>

<form action="formulario.php" method="post">
    <label for="atras">
        <input type="submit" name="atras" value="Atras">
    </label>
</form>