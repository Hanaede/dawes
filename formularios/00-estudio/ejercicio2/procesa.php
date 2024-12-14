<?php
$temperaturaFarenheit= 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperaturaFarenheit = ($_POST['temperatura'] * 1.8) + 35;
        echo $temperaturaFarenheit;
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