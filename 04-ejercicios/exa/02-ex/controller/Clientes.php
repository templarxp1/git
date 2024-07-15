<?php 

include "../conf/interfaz.php";
include "../class/ModelCliente.php";

final class Clientes implements interfaz
{
    static public function listgenral(){
        
            $alan = new ModelCliente();
            header('Content-Type: application/json');
            return $alan->listCliente();
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $perList = Clientes::listgenral();
    echo json_encode($perList);
}
