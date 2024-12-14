<?php
/**
 * Archivo de configuración del creador de personajes de rol
 * @author Kike MJ
 */

 $aGenero = array("Hombre", "Mujer", "Otro");

 $aOrigen = array("Roshar", "Braize", "Komashi", "Scadrial");

 $aRaza = array(
    array("codigo" => 1, "raza" => "Orco"),
    array("codigo" => 2, "raza" => "Alto Elfo"),
    array("codigo" => 3, "raza" => "Elfo del bosque"),
    array("codigo" => 4, "raza" => "Hobbit"),
    array("codigo" => 5, "raza" => "Enano"),
    array("codigo" => 6, "raza" => "Leviatán")
 );

 $aClase = array(
    array("estadistica" => "Fuerza", "clase" => "Guerrero"),
    array("estadistica" => "Destreza", "clase" => "Arquero"),
    array("estadistica" => "Magia", "clase" => "Hechicero"),
    array("estadistica" => "Vida", "clase" => "Paladín")
 );

$aVida = array("90", "100", "110", "120");

$aHabilidades = array(
    array("Fuego"=> array("Lanza de fuego", "Huracán incendiario")),
    array("Hielo" => array("Lanza de escarcha", "Lluvia congelada")),
    array("Electro" => array("Lanza de rayos", "Tormenta Eléctrica")),
    array("Agua" => array("Lanza de agua", "Huracán oleado"))
);

$aArmadura = array("Ligera", "Mediana", "Pesada");

$aArma = array("Espada", "Arco", "Bastón", "Escudo");

$aCompa = array("León", "Serpiente", "Gato");

$classImages = array(
    "Guerrero" => "images/guerrero.jpg",
    "Arquero" => "images/arquero.jpg",
    "Hechicero" => "images/hechicero.jpg",
    "Paladín" => "images/paladin.jpg"
);