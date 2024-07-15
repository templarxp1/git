<?php
//problema: forma un array indexado datos personales de estudiante y 
//otro array indexado de las nuevas notas mas 20 punto.
//salida [alan birto, av. siempre triste]
//salida [22,23,27,54]

//mostra una array asociativa con los nuevos datos
//utilizando foreach, array_map
$datos = [
    "nombre" => "alan brito",
    "direccion" => "av. siempre viva",
    "notas" => array(
        2, 3, 7,34
        )
    ];
print_r($datos);
//solucion:
$pers =[];
$persnotas =[];
$i = 0;
foreach ($datos as $key => $value) {
    # code...
    if($key === "notas"){
        $persnotas = array_map(fn($val) => $val += 20, $value);
    }else if($key === "direccion"){
        $pers[$i] = "av. siempre triste";
        $i += 1;
    }else{
        $pers[$i] = $value;
        $i += 1;
    }
    
}
 $datos = [
    "nombre" => $pers[0],
    "direccion" =>  $pers[1],
    "notas" => $persnotas
    ];
print_r($datos);