<?php
//crear una clase en php

class Producto{

    //atributos
    /**
     * public: se ´peuda ver
     * private: no se puede ver, solo dentro de la clase.
     * protected: solo se pude ver los que extiendan de la clase.
     * 
     * final: se pude hacer la herencia.
     */

     public $nombre;
     private $tipo;
     private $marca;
     private $modelo;

    //crear el constructor
    public function __construct($nombre, $tipo, $marca, $modelo) {

        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->modelo = $modelo;

    }

    //metodos:
    public function get(){
        return $this->nombre;
    }

    function guaradr(){
        
    }
}

//intacia de una clase o crean un objeto
$teclado = new Producto("tecla de escritorio", "mecanico", "delux", 2014);
// el metodo
echo $teclado->get();