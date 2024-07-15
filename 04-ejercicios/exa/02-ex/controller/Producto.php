<?php 

include "../conf/interfaz.php";
include "../class/ModelProducto.php";
final class Producto implements interfaz
{
    static public function listgenral(){
        $alan = new ModelProducto();
        header('Content-Type: application/json');
        $data = [];
        foreach ($alan->listProducto() as $key => $value) {
            # code...
            $data []= array("nombre"=> $value["Nombre"], 
            "precioUnitario"=> $value["PrecioUnitario"]);
        }
        return $data;
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $perList = Producto::listgenral();
    echo json_encode($perList);
}
