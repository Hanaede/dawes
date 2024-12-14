<?php
/**
 * 
 * 4. Días de la semana:
 *  • Crea un script que reciba un número entre 1 y 7, y muestre el día de lasemana correspondiente (1 es Lunes, 7 es Domingo).
 * @author Kike MJ
 */

 $diaSemana = 1;

 switch ($diaSemana) {
    case $diaSemana == 1:
        echo "Hoy es lunes";
        break;
    case $diaSemana == 2:
        echo "Hoy es martes.";
        break;
    case $diaSemana == 3:
        echo "Hoy es miércoles.";
        break;
    case $diaSemana == 4:
        echo "Hoy es jueves.";
        break;
    case $diaSemana == 5:
        echo "Hoy es viernes.";
        break;
    case $diaSemana == 6:
        echo "Hoy es sábado.";
        break;
    case $diaSemana == 7:
        echo "Hoy es domingo.";
        break;
    default:
        echo "No es un día de la semana";
 }