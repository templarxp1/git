<?php
//foreach como la version mejorada de for
//clave y valor
//
$datos = [
    "nombre" => "alan brito",
    "tefefono" => array(
        2522, 4566, 78
        )
    ];
foreach ($datos as $key => $value) {
    # code...
    //print_r($key);
    if("tefefono" === $key){
        for ($i=0; $i < count($value); $i++) { 
            # code...
            echo $value[$i]."---";
        }
    }
    
}

//incorporar la funcion calSuma() al problema.
//mostrar promedio y suma.