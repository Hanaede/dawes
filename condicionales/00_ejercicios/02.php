<?php
/**
 * 
 * Mayor de tres números:
 *  • Dado tres números, determina cuál es el mayor de los tres.
 * @author Kike MJ 
 */

 $numero1 = 3;
 $numero2 = 7;
 $numero3 = 7;

 switch (true) {
    case $numero1 > $numero2 && $numero1 > $numero3:
        echo $numero1 . " es el mayor";
        break;
    case $numero2 > $numero1 && $numero2 > $numero3:
        echo $numero2 . " es el mayor";
        break;
    case $numero3 > $numero1 && $numero3 > $numero2:
        echo $numero3 . " es el mayor";
        break;
    default:
    echo "Hay dos números o más iguales.";
 }