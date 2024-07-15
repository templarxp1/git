<?php
session_start();
final class Ingreso 
{
    function login() {
        if(isset($_POST["correo"])){
            $data = array("correo"=> $_POST["correo"]);
            $respueta = Model_ingreso::ingresar($data);
            if($respueta != ""){
                if($respueta["password"] == $_POST["password"]){
                    echo '<script>alert("Bienvenido")</script>';
                    $_SESSION["estado"] = true;
                    $_SESSION["usuasrio"] = $respueta["Nombre"];
                    $_SESSION["correo"] = $respueta["correo"];
                    $_SESSION["idUsuario"] = $respueta["idusuario"];
                    header('Location: home');
                }else{
                    echo '<script>alert("Contrasena incorrecta")</script>';
                }
            }else{
                echo '<script>alert("Usuario incorrecta")</script>';
            }
            
        }
    }
}
