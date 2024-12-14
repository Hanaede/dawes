<?php
/**
 * 
 * 
 */

 session_start();
 if (!isset($_SESSION['nombre'])){
    $_SESSION['nombre'] = 'Kike';
    $_SESSION['apellidos'] = 'Mariño Jiménez';
 }