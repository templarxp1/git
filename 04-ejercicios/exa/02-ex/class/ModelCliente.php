<?php
require_once "../db/db.php";
final class ModelCliente
{
    
    public $db;

    public function __construct() {
        $this->db = Db::conectar();
    }
    public function listCliente() {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("SELECT Nombre, RazonSocial FROM clientes c INNER JOIN personas p ON c.ClienteID = p.id");

            $prepar->execute();

            return $prepar->fetchAll(PDO::FETCH_ASSOC);

            unset($prepar);


        } catch(PDOException $e) {
            echo "error en lista de datos: ". $e;
            return null;
        }
    }
}
