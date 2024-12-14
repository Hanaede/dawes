<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if (isset($_POST["enviar"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            $suma = $num1 + $num2;
        }
    ?>
    <form method="post">
        <label for="num1">Inserta el número 1</label>
        <input type="number" id="num1" name="num1">

        <label for="num1">Inserta el número 2</label>
        <input type="number" id="num2" name="num2">

        <input type="submit" name="enviar" value="Sumar">
    </form>

    <p>
        <?php
            if (isset($_POST["enviar"])) {
                echo $suma;
            }
        ?>
    </p>
</body>
</html>