<?php
require_once "../db/db.php";

 class ModelUsuario 
{
    public $db;

    public function __construct() {
        $this->db = Db::conectar();
    }
    
    public function loginModel($tabla, $datos) {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("SELECT * FROM $tabla WHERE correo = :correo and password = :password");

            $prepar -> bindParam(':correo', $datos["correo"], PDO::PARAM_STR);
            $prepar -> bindParam(':password', $datos["password"], PDO::PARAM_STR);

            $prepar->execute();

            return $prepar->fetchAll(PDO::FETCH_ASSOC);

            unset($prepar);


        } catch(PDOException $e) {
            echo "error en lista de datos: ". $e;
            return null;
        }
    }
}
