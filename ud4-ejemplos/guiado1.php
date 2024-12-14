<?php

/**
 * Crear Cookie de duracion limitada
 * 
 * @author
 */
echo "Inicio";
echo "<br>";

setcookie("cookie", "Hola mundo", time() +60);

if(isset($_COOKIE["cookie"])){
    echo $_COOKIE["cookie"];
}

echo "<br>";
echo "Fin";




?>

