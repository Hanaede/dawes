<?php
/**
 * 
 * 
 * @author Miguel Carmona
 * 
 */

//  require_once '../app/Models/Perro.php';
//  require_once '../app/Models/Persona.php';
    require_once '../vendor/autoload.php';

 use App\Models\Perro;
 use App\Models\Persona;

 $perro = new Perro('tana', 'negro');
 echo "Dame la pata";
 $perro->darPata();
 $perro->entrenar();
 $perro->entrenar();
 $perro->entrenar();
 $perro->entrenar();
 $perro->entrenar();
 $perro->entrenar();
 $perro->darPata();
 $perro->darPata();

?>