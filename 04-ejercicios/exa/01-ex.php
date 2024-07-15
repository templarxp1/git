<?php

$datos = array(
    [
    "nombre" => "alan brito",
    "direccion" => "av. siempre viva",
    "notas" => array(
        5, 25, 7,34
        )
    ],
    [
    "nombre" => "alan brito malo",
    "direccion" => "av. siempre triste",
    "notas" => array(
        2, 3, 46,34
        )
    ],
    [
    "nombre" => "alan brito enojado",
    "direccion" => "av. siempre eneojado",
    "notas" => array(
        2, 48, 78,34
        )
    ],
    [
    "nombre" => "alan brito feliz",
    "direccion" => "av. siempre feliz",
    "notas" => array(
        2, 3, 7,34
        )
    ],
);

///SOLUCION DEL EXAMEN.

//echo json_encode($datos);

$pers =[];
$persoT = [];
$persnotas =[];
$promedioT = [];
$promedioTT = 0;
$promedio = 0;
$toyal = 0;
foreach ($datos as $key => $value) {

    foreach ($value as $key => $valu) {
        if($key === "notas"){
            foreach ($valu as $key => $value) {
                $toyal += $value;
            }
            if($toyal / 4 < 20){
                $persnotas = array_map(fn($val) => $val += 20, $valu);
                $toyal += 80;
            }else{
                $persnotas = array_map(fn($val) => $val, $valu);
            }
            $promedioT [] = $toyal / 4;
            $promedioTT += $toyal / 4;
            
            $pers["notas"] = $persnotas;
        }else if($key == "direccion"){
            $pers["direccion"] = $valu;
        }else{
            $pers["nombre"] = $valu;
        }
        $pers["promedio"] = $toyal / 4;
        $toyal = 0;
    }
    $persoT [] = $pers;
    $pers =[];
    
}
//echo  count($datos);
header('Content-Type: application/json');
echo json_encode(array("promedioG"=>$promedioTT/count($datos),"datatosFinales"=>$persoT));