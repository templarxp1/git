<?php 
include "class/persona.php";


/**
 * GET, solo para listar datos.
 * enviar datos por la url.
 */
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $alan = new Persona();
    header('Content-Type: application/json');
    echo json_encode($alan->listPersona());
}


//para mandar datos de manera cifrado.
if(isset($_POST["nombreG"])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $alan = new Persona();
        $datos = ["nombre" => $_POST["nombreG"],
                "telefono" => $_POST["telefono"],
                "direccion" => $_POST["direccion"] 
                ];
        header('Content-Type: application/json');
        echo json_encode($alan->guadarPersona($datos));
        # code...
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $alan = new Persona();
    $datos = $_GET["id"];
    header('Content-Type: application/json');
    echo json_encode($alan->eliminarPersona($datos));
    # code...
}

if(isset($_POST["id"])){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $alan = new Persona();
       $datos = [
            "id"=>$_POST["id"],
            "nombre" => $_POST["nombre"],
                "telefono" => $_POST["telefono"],
                "direccion" => $_POST["direccion"]
                ];
        header('Content-Type: application/json');
        echo json_encode($alan->updatePersona($datos));
        # code...
    }
}
