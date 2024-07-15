<?php 
include "../class/ModelUsuario.php";

final class Usuario
{
    static function loginController()  {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $alan = new ModelUsuario();
            $datos = ["correo" => $_POST["correo"],
                    "password" => $_POST["password"]
                    ];
            header('Content-Type: application/json');
            return ($alan->loginModel("usuario",$datos));
            # code...
        }
    }
}




if(isset($_POST["correo"])){
    $perList = Usuario::loginController();
    echo json_encode($perList);
}
