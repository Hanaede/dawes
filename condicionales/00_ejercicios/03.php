<?php
/**
 * 
 * 3. Clasificación por edades:
 *  • Escribe un programa que clasifique a una persona según su edad: "niño", "adolescente", "adulto" o "anciano".
 * @author Kike MJ
 */

 $edad = 60;

 switch($edad) {
    case $edad < 18:
        echo "Eres un niño";
        break;
    case $edad >= 18 && $edad < 30 :
        echo "Eres un adolescente";
        break;
    case $edad >= 30 && $edad < 60:
        echo "Eres un adulto";
        break;
    case $edad >= 60:
        echo "Eres un anciano";
        break;
 }