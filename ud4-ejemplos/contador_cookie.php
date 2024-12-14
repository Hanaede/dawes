<?php
/**
 * Contador
 * 
 * 
 * @author
 */

if (!isset($_COOKIE["contador"])){
    //Si no existe cookie creamos una
    setcookie("contador", 0 ,time() +3600);
}else {
    $aumento = $_COOKIE["contador"] + 1;
    setcookie("contador", $aumento ,time() +3600);
}

echo $_COOKIE["contador"];











?>