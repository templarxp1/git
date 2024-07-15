<?php 
include "../class/ModelProducto.php";
include "../conf/interfaz.php";

final class Pedido implements Controller
{
    static function guardar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $alan = new Persona();
            $datos = ["nombre" => $_POST["nombreG"],
                    "telefono" => $_POST["telefono"],
                    "direccion" => $_POST["direccion"] 
                    ];
            header('Content-Type: application/json');
            return ($alan->guadarPersona($datos));
            # code...
        }
    }
    static function eliminar(){
        $alan = new Persona();
        $datos = $_GET["id"];
        header('Content-Type: application/json');
        return($alan->eliminarPersona($datos));
        # code...
    }
    static function editar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $alan = new Persona();
           $datos = [
                "id"=>$_POST["id"],
                "nombre" => $_POST["nombre"],
                    "telefono" => $_POST["telefono"],
                    "direccion" => $_POST["direccion"]
                    ];
            header('Content-Type: application/json');
            return($alan->updatePersona($datos));
        }
    }
    static function listar(){
        $alan = new Persona();
        header('Content-Type: application/json');
        return $alan->listPersona();
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $perList = PersonaController::listar();
    echo json_encode($perList);
}


//para mandar datos de manera cifrado.
if(isset($_POST["nombreG"])){
    $perList = PersonaController::guardar();
    echo json_encode($perList);
}


if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $perList = PersonaController::eliminar();
    echo json_encode($perList);
}

if(isset($_POST["id"])){
    $perList = PersonaController::editar();
    echo json_encode($perList);
        # code...
   
}
