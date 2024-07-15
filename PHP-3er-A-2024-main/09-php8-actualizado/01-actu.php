<?php
//tipado dinamico, tipado debil, opcional tipogradual().
$gg = 12;

//forzado de tipos
$nmero = (int) 33;
var_dump($nmero);

//define
define('LOGO_S', 'ASD');
//const NONBRE = "ggg";

//el mach
$age = 12;
$outputAge = match ($age) {
     0, 1, 2 => "eres un bebe $age",
     3, 4, 5 => "eres un niño",
     default => "error"
};

echo $outputAge;

?>
