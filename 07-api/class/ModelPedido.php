<?php 
final class ModelPedido
{
    public $db;

    public function __construct() {
        $this->db = Db::conectar();
    }

    public function listPersona() {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("SELECT * FROM personas");

            $prepar->execute();

            return $prepar->fetchAll(PDO::FETCH_ASSOC);

            unset($prepar);


        } catch(PDOException $e) {
            echo "error en lista de datos: ". $e;
            return null;
        }
    }

    //guaradar
    //priema forma con variables para el paso de parametros
    //public function guadarPersona($nombre, $telefono, $direccion)

    //con una aaray asociativa
    public function guadarPersona($datos) {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("INSERT INTO personas (nombre, telefono, direccion) VALUES (:nombre, :telefono, :direccion)");

            $prepar -> bindParam(':nombre', $datos["nombre"], PDO::PARAM_STR);
            $prepar -> bindParam(':telefono', $datos["telefono"], PDO::PARAM_INT);
            $prepar -> bindParam(':direccion', $datos["direccion"], PDO::PARAM_STR);

            if($prepar->execute()){
                return json_encode(
                    array("estado" => 200, 
                    "report"=> "ok")
                );
            }else{
                return json_encode(
                    array("estado" => 400, 
                    "report"=> "NO se pudo realizar la operacion")
                );
            }
            //unset($prepar);

        } catch(PDOException $e) {
            echo "error al conectar a la base de datos: ". $e;
            return null;
        }
    }

    public function eliminarPersona($datos) {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("DELETE FROM personas WHERE idPersona = :id");

            $prepar -> bindParam(':id', $datos, PDO::PARAM_INT);

            if($prepar->execute()){
                return json_encode(
                    array("estado" => 200, 
                    "report"=> "ok")
                );
            }else{
                return json_encode(
                    array("estado" => 400, 
                    "report"=> "NO se pudo realizar la operacion")
                );
            }
            //unset($prepar);

        } catch(PDOException $e) {
            echo "error al conectar a la base de datos: ". $e;
            return null;
        }
    }
    public function updatePersona($datos) {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("UPDATE personas SET nombre = :nombre, telefono = :telefono, direccion = :direccion WHERE idPersona = :id");

            $prepar -> bindParam(':nombre', $datos["nombre"], PDO::PARAM_STR);
            $prepar -> bindParam(':telefono', $datos["telefono"], PDO::PARAM_INT);
            $prepar -> bindParam(':direccion', $datos["direccion"], PDO::PARAM_STR);
            $prepar -> bindParam(':id', $datos["id"], PDO::PARAM_INT);


            if($prepar->execute()){
                return json_encode(
                    array("estado" => 200, 
                    "report"=> "ok")
                );
            }else{
                return json_encode(
                    array("estado" => 400, 
                    "report"=> "NO se pudo realizar la operacion")
                );
            }
            //unset($prepar);

        } catch(PDOException $e) {
            echo "error al conectar a la base de datos: ". $e;
            return null;
        }
    }
}
