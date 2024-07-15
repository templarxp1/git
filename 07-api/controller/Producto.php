<?php 
include "../class/ModelProducto.php";

//get
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $alan = new ModelProducto();
    header('Content-Type: application/json');
    $ddd = $alan->listProdutco("productos");
    $data = [];
    foreach ($ddd as $key => $value) {
        # code...
        $data [] = array(
            "nombre" => $value["Nombre"],
            "Stock" => $value["stock"]
        );
    }
    //var_dump($ddd);
    echo json_encode($data);
}