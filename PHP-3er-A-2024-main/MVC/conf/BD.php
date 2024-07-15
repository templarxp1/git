<?php

const DB = 'mysql';
const DB_SERVER = 'localhost';
const DB_CHARSET = 'utf8';

abstract class BD{
    private static $db_usuario = 'root';
    private static $db_pass = '';
    private static $db_servidor = DB_SERVER;
    private static $db_nombre = 'dbpersona';
    private static $db_charset = DB_CHARSET;
    private $conexion;

    static public function conectar(){
        try {
            
            $dsn = "mysql:host=".self::$db_servidor.";dbname=".self::$db_nombre;
            $pdo = new PDO($dsn, self::$db_usuario, self::$db_pass);
            $pdo->exec("SET CHARACTER SET ".SELF::$db_charset);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
            return $pdo;
            
        } catch (PDOException $e) {
            //throw $th;
            exit("error: ".$e->getMessage());
        }
    }

    private function desconectar(){
        $this->conexion = null;
    }
//interfaz
    abstract protected static function insertar($registro);
    abstract protected static function consulta();
    abstract protected static function actualizar($registro);
    abstract protected static function eliminar($accion, $liminar);

}
