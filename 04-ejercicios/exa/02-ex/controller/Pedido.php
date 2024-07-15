<?php 

include "../conf/interfaz.php";
include "../class/ModelPedido.php";
final class Pedido implements interfaz
{
    static public function listgenral(){
        $alan = new ModelPedido();
        header('Content-Type: application/json');
        $data = [];
        foreach ($alan->listPedido() as $key => $value) {
            # code...
            $data []= array("Cliente"=> $value["cliente"], 
            "Producto"=> $value["Nombre"],
            "cantidad"=> $value["Cantidad"],
            "PUnitario"=> $value["PrecioUnitario"], 
            "TotalPagar"=> $value["Cantidad"] *$value["PrecioUnitario"] );
        }
        return $data;
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $perList = Pedido::listgenral();
    echo json_encode($perList);
}
