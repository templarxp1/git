<?php
// una funcion statica---- no permite
/**
 * no crear un objeto, si no relizar una instancia directa al metodo. 
 */

 class Db
 {
    private $usuario;
    private $contrasena;
    private $nombreDb;
    private $conexion;

    static public function conectar()  {
        return "conectado";
    }
 }
//crear el objeto y la instancia
 $pepe = new Db();
 $pepe->conectar();

 //otra forma con static

 echo Db::conectar();
 