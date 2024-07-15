<?php
require_once "conf/BD.php";
final class Model_ingreso extends BD
{
    static function ingresar($data) {
        $conexion = parent::conectar();
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $conexion->prepare("SELECT * 
            FROM usuario u
            INNER JOIN personas p ON u.idPersona = p.id
            WHERE correo = :correo");
            //$prepar->bindParam(':corre',$data["correo"], PDO::PARAM_STR);
            $prepar->execute($data);

            return $prepar->fetch(PDO::FETCH_ASSOC);

            unset($prepar);


        } catch(PDOException $e) {
            echo "error en lista de datos: ". $e;
            return null;
        }
    }
    
    static function insertar($registro){}
    static function consulta(){
        
    }
    static function actualizar($registro){}
    static function eliminar($accion, $liminar){}
}
