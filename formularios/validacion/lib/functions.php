<?php
/**
 * script con las funciones generales para el proyecto
 *@author KIKE MJ  
 */

 /**
  * Función para limpiar los datos que vienen de un formulario.
  * @param mixed $data
  * @return string
  */
 function clearData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }