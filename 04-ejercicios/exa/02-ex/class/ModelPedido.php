<?php
require_once "../db/db.php";

final class ModelPedido 
{
    public $db;

    public function __construct() {
        $this->db = Db::conectar();
    }

    public function listPedido() {
        try {
            //listar datos de mi base de datos..... dbejmplo
            $prepar = $this->db->prepare("SELECT per.Nombre as cliente, po.Nombre, p.Cantidad, po.PrecioUnitario
            FROM pedidos p 
                INNER JOIN clientes c 
            ON p.ClienteID = c.ClienteID 
                INNER JOIN personas per
            ON per.id = c.PersonaId
                INNER JOIN productos po
            ON p.ProductoID = po.ProductoID");

            $prepar->execute();

            return $prepar->fetchAll(PDO::FETCH_ASSOC);

            unset($prepar);


        } catch(PDOException $e) {
            echo "error en lista de datos: ". $e;
            return null;
        }
    }
}
