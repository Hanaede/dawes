<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p style='color: green;'>Registro completado con éxito.</p>";
    }
    ?>

<form action="" method="post">
    <label for="atras">
        <input type="submit" name="atras" value="Atras">
    </label>
</form>

<?php
if (isset($_POST['atras'])){
    header('Location: ./formulario.php');
}
?>