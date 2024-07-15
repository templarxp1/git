<?php
//for

//mostrar el promedio y la suma
$notas = [23,45,7,8];

function calSuma($notas)  {
    $s = 0;
    for ($i=0; $i < count($notas); $i++) {
        $s += $notas[$i];
        # code...
    }
    return $s;
}

echo calSuma($notas)."---";
echo calSuma($notas)/count($notas);