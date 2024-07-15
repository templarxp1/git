<?php
require_once "conf/BD.php";
final class Model_cliente extends BD
{
    static function insertar($registro){}
    //listar Datos
    static function consulta(){
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = BD::conectar()->prepare("SELECT * FROM clientes");

            $prepar->execute();

            return $prepar->fetchAll(PDO::FETCH_ASSOC);

            unset($prepar);


        } catch(PDOException $e) {
            echo "error en lista de datos: ". $e;
            return null;
        }
    }
    static function actualizar($registro){}
    static function eliminar($accion, $liminar){}
}
