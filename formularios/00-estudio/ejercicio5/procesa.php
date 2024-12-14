<?php
if (isset($_POST['atras'])){
    header('Location: ./formulario.php');
}

$email = $_POST['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$email) {
        echo "No puedes dejar el email vacío";
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $email;
    }
    else {
        echo "Formato incorrecto";
    }
}
?>
<form action="" method="post">
    <label for="atras">
        <input type="submit" name="atras" value="Atras">
    </label>
</form>

