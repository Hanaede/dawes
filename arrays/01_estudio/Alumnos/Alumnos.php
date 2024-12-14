<?php


/**
 * 
 * @author Daniel Fernández Balsera
 * 
 *  Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de ellos. El resultado debe mostrar nombre y fotografía.
 * 
 */

 // Creamos el array de los alumnos

 $fotoAlumno = array("foto" => "alumno.png");

 $alumnos = array(

   "alumno1" => array(
      "Nombre" => "Bermúdez González, Raúl",
      "Imagen" => $fotoAlumno,
   ),

   "alumno2" => array(
      "Nombre" => "Cañas González, Álvaro",
      "Imagen" => $fotoAlumno,
  ),
  "alumno3" => array(
      "Nombre" => "Carmona Cicchetti, Miguel",
      "Imagen" => $fotoAlumno,
  ),
  "alumno4" => array(
      "Nombre" => "Carrasco Castellano, Alejandro",
      "Imagen" => $fotoAlumno,
  ),
  "alumno5" => array(
      "Nombre" => "Cherif Mouaki Almabouada, Mostafa",
      "Imagen" => $fotoAlumno,
  ),
  "alumno6" => array(
      "Nombre" => "Coronado Ortega, Alejandro",
      "Imagen" => $fotoAlumno,
  ),
  "alumno7" => array(
      "Nombre" => "Delgado Morente, Juan Diego",
      "Imagen" => $fotoAlumno,
  ),
  "alumno8" => array(
      "Nombre" => "Escoto García, Marlon Jafet",
      "Imagen" => $fotoAlumno,
  ),
  "alumno9" => array(
      "Nombre" => "Fernández Ariza, Ángel",
      "Imagen" => $fotoAlumno,
  ),
  "alumno10" => array(
      "Nombre" => "Fernández Arrayás, Alejandro",
      "Imagen" => $fotoAlumno,
  ),
  "alumno11" => array(
      "Nombre" => "Fernández Balsera, Daniel",
      "Imagen" => $fotoAlumno,
  ),
  "alumno12" => array(
      "Nombre" => "Ferrer López, Jesús",
      "Imagen" => $fotoAlumno,
  ),
  "alumno13" => array(
      "Nombre" => "Frías Rojas, Jesús",
      "Imagen" => $fotoAlumno,
  ),
  "alumno14" => array(
      "Nombre" => "Galán Navas, Manuel",
      "Imagen" => $fotoAlumno,
  ),
  "alumno15" => array(
      "Nombre" => "García Báez, Víctor",
      "Imagen" => $fotoAlumno,
  ),
  "alumno16" => array(
      "Nombre" => "García Díaz, Lucía",
      "Imagen" => $fotoAlumno,
  ),
  "alumno17" => array(
      "Nombre" => "González Martínez, Adrián",
      "Imagen" => $fotoAlumno,
  ),
  "alumno18" => array(
      "Nombre" => "Mariño Jiménez, Enrique",
      "Imagen" => $fotoAlumno,
  ),
  "alumno19" => array(
      "Nombre" => "Martín-Castaño Carrillo, Oscar",
      "Imagen" => $fotoAlumno,
  ),
  "alumno20" => array(
      "Nombre" => "Mayén Pérez, José María",
      "Imagen" => $fotoAlumno,
  ),
  "alumno21" => array(
      "Nombre" => "Mérida Velasco, Pablo",
      "Imagen" => $fotoAlumno,
  ),
  "alumno22" => array(
      "Nombre" => "Mora Sánchez, Héctor",
      "Imagen" => $fotoAlumno,
  ),
  "alumno23" => array(
      "Nombre" => "Pérez Cantarero, Luis",
      "Imagen" => $fotoAlumno,
  ),
  "alumno24" => array(
      "Nombre" => "Romero Romero, Carlos",
      "Imagen" => $fotoAlumno,
  ),
  "alumno25" => array(
      "Nombre" => "Ruiz Molero, Javier",
      "Imagen" => $fotoAlumno,
  ),
  "alumno26" => array(
      "Nombre" => "Vaquero Abad, Alejandro",
      "Imagen" => $fotoAlumno,
  ),
  "alumno27" => array(
      "Nombre" => "Villén Moyano, Luís Miguel",
      "Imagen" => $fotoAlumno,
  )
);

// Si pulsamos mostrar, se crean las variables para los alumnos, y sus imagenes


if (isset($_POST['mostrar'])) {
   // Aquí se asignan las variables solo cuando el formulario es enviado
   $alumnoSeleccionado = $_POST['alumno'];
   $nombreAlumno = $alumnos[$alumnoSeleccionado]['Nombre'];
   $imagenAlumno = $alumnos[$alumnoSeleccionado]['Imagen']['foto']; // Se llama tanto a Imagen, como a foto
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet">
</head>
<body>

<h1>Selección de alumno</h1>

<!--  Creamos un formulario de tipo POST  !-->

<form action="" method="POST">

<select name="alumno">

<?php 
 foreach ($alumnos as $clave => $alumno) 

 echo "<option value={$clave}>{$alumno['Nombre']}</option>";
?>



</select>

<button type="submit" name="mostrar">Mostrar Información</button>



</form>

<?php

if ((isset($_POST['mostrar'])) && $nombreAlumno) {
   // Mostrar el nombre y la imagen solo si la variable $nombreAlumno tiene un valor
   ?>
   <div class="result">
      <br><br/>
       <strong>Alumno:</strong><br>
       <?php echo htmlspecialchars($nombreAlumno); ?><br><br>
       <img src="<?php echo htmlspecialchars($imagenAlumno)?>" alt="">
   </div>
   <?php
} ?>



   
</body>
</html>