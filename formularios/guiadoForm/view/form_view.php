<form method="post">

        <label for="name">Nombre *: </label>
        <input type="text" value="<?php echo "" .$nombre;?>" name="name" id="name">
        <span class="error"><?php echo $eNombre;?></span> <br><br>

        <label for="email">Email *: </label>
        <input type="email" name="email" id="email" value="<?php echo "" .$email;?>"> 
        <span class="error"><?php echo $eEmail;?></span><br><br>

        <label for="url">Url: </label>
        <input type="text" name="url" id="url"><br><br>


        <label>Comentarios: </label>
        <textarea id="comentarios" rows="" cols=""></textarea> <br><br>

        <label>Genero *: </label>
        <?php 
            foreach ($aGenero as $clave => $valor) {
                $check="";
                if($genero == $valor){
                    $check='checked';
                }
                echo '<input type="radio" name="genero" value="'.$valor.'" '.$check.'>'.$valor.'';
            }
        ?>
        <span class="error"><?php echo $eGenero;?></span><br><br>

        <label>Vehiculos *: </label>
        <?php 
            foreach ($aVehiculos as $clave => $valor) {
                $check = "";
                if(in_array($valor, $vehiculosSelec)){
                    $check= "checked";
                }
                echo '<input type="checkbox" name="vehiculo[]" value="'.$valor.'" '.$check.'>'.$valor.'';
            }
        ?>
        <span class="error"><?php echo $eVehiculos;?></span><br><br>

        <label>Coches *: </label>
        <?php 
            foreach ($aCoches as $clave => $valor) {
                $check = "";
                if(in_array($valor, $cochesSelec)){
                    $check='checked';
                }
                echo '<input type="checkbox" name="coches[]" value="'.$valor.'" '.$check.'>'.$valor.'';
            }
        ?>
        <span class="error"><?php echo $eCoches;?></span><br><br>

        <input type="submit" name="enviar" id="enviar">

    </form>