<?php

//lo mas actualizado de php en funcion flecha
/**
 * las funciones con flechas fueron incorporados en la
 * version de 8
 * sintaxi:
 * fn() => return;
 * FUNCIONES ANONIMAS
 * $suma = fn() => return;
 */
//forma tradicional
 //$suma = function {
 //}
$suma = fn($a, $b) => $b+$a;


echo $suma(3,4);