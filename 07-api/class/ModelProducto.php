<?php
require_once "../db/db.php";

 class ModelProducto 
{
    public $db;

    public function __construct() {
        $this->db = Db::conectar();
    }
    
    public function listProdutco($tabla) {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("SELECT * FROM $tabla WHERE stock >= 100");

            $prepar->execute();

            return $prepar->fetchAll(PDO::FETCH_ASSOC);

            unset($prepar);


        } catch(PDOException $e) {
            echo "error en lista de datos: ". $e;
            return null;
        }
    }
}
