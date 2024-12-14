<?php

/**
 * 
 * @author Daniel Fernández Balsera
 * 
 * 
 */

// Creamos el array para el tablero de los barcos


 $tablero = array();


// Creamos una matriz en la que todos los valores, serán 0

 for($i=0; $i<10; $i++){

    for($j=0;$j<10;$j++){


        $tablero[$i][$j] = 0;
    
    }
 }


 // Imprimimos la tabla


 echo "<table border=1; style='border-collapse: collapse'>";

 for($i=0;$i<10;$i++){
    echo "<tr>";

    for($j=0; $j<10; $j++){


        if($i==0 && $j > 0){

            echo "<td style='width:30px; height:30px; text-align: center; background-color: lightblue'>".$tablero[0][0]."</td>";

        }
        else if($j==0 && $i > 0){

            echo "<td style='width:30px; height:30px; text-align: center; background-color: tan'>".$tablero[0][0]."</td>";

        }
        else if($i==0 && $j == 0){

            echo "<td style='width:30px; height:30px;'>".$tablero[$i][$j]=''."</td>";

        }
        else{

            echo "<td style='width:30px; height:30px;'>".$tablero[$i][$j]='a'."</td>";
        }
    }
echo "</tr>";

}
echo "</table>";
