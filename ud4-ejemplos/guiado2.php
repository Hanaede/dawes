<?php

/**
 * Borrar una cookie
 * 
 * @author
 */

if(isset($_COOKIE["cookie"])){
    setcookie("cookie", "Hola mundo", time() -60);
    echo "Cookie Borrada";
}


?>