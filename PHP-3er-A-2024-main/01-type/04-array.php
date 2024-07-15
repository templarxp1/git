<?php

/**
 * dos forma para poder crear array
 * funcion array
 * []
 * 
 * funcion array--- arrelos multidimencionales
 * array asociativas, array convinatoria, array indexadas.
 * 
 * [] --- se implemento apartir de la version 5.7
 * array asociativas, array indexadas, array convinatoria.
 */

 /**
  * dos formas para ver los array
  *var_dump -- indexacion, el tamaño, tipo.
  *print_r -- solo ver el contenido del array
  */
 $numeroNaturales = array(1,2,3,4,5);

 //var_dump($numeroNaturales);
 echo "</br>-------------------------</br>";
 //print_r($numeroNaturales);
//asignacion de nuevos datos y ver datos especificos de array por 
//pocision.
 //echo $numeroNaturales[2];
 $numeroNaturales[0] = 234;
 //var_dump($numeroNaturales);

 //array convinatoria
 $persona = array("alan Brito", 23, true, 2.60);
 //var_dump($persona);

 //array asociativas
 $datosPersonales = ["nombre" => "alan brito",
 "edad" => 23,
 "estado" => false,
 "estatura" => 1.50];

 var_dump($datosPersonales["edad"]);

