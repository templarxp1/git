<?php
//array_map
$notas = [23,45,7,5];
 



//primera forma
function mul($num) {
    return $num *= 2;
}
$resul = array_map("mul", $notas);
//print_r($resul);

//segunda forma con funciones anonimas.
$resul2 = array_map(function ($num) {
    return $num *= 2;
}, $notas);
//print_r($resul2);

//tercera forma con funcion flecha
$resul3 = array_map(fn ($num) => $num *= 2, $notas);
//print_r($resul3);

//array_map ---- array indexada , no devuelve array asociativa
function iterarAsoci($k, $v) {
    return "$k and $v";
}


//array_map --- donde utilizamos array map, cuando forma un nuvo array
//


//forma antigua
// $array2 =[];
// for ($i=0; $i < count($notas); $i++) { 
//     # code...
//     $$array2[$i] = $notas[$i] * 2; 
// }

//$rest = array_map(fn (string $k, string $v) :string => "$k and $v", array_keys($datos), array_values($datos));

//ejemplo
$datos = [
    "nombre" => "alan brito",
    "tefefono" => array(
        2, 3, 7
        )
    ];
//$rest = array_map(fn (string $k, string $v) :string => "$k and $v", array_keys($datos), array_values($datos));
//var_dump($rest);

$rest; 

foreach ($datos as $key => $value) {
    # code...
    if($key === "tefefono"){
        $rest = array_map(fn ($data) => $data*= 2, $value);
    }
}
//var_dump($rest);


