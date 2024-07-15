<?php

//herencia
//clase padre

//clase abtracta -- nose puede hacer la instancia con
//una clase abtracta.

abstract class Producto{

 public $nombre;
 private $marca;

//crear el constructor
    public function __construct($nombre, $marca) {

        $this->nombre = $nombre;
        $this->marca = $marca;

    }

    //metodos:
    public function get(){
        return $this->nombre;
    }

    function guaradr(){
        
    }
}

//clase hija
//extend
class ProductosEspecificos extends Producto{
    private $cod;
    private $modelo;
    private $descripcion;
    private $precioEntrada;
    private $precioVenta;

    public function __construct($nombre,$marca,$cod, $modelo, $descripcion, $precioEntrada, $precioVenta) {
        //realizo el llamado del construc tor producto
        parent::__construct($nombre, $marca);

        $this->cod = $cod;
        $this->modelo = $modelo;
        $this->descripcion = $descripcion;
        $this->precioEntrada = $precioEntrada;
        $this->precioVenta = $precioVenta;
    }

    function venta() {
        
    }

    function ventMayor() {
        
    }
}

$pro =new Producto("nose", "nose");
$pro->get();

$teclado = new ProductosEspecificos("tecla de escritorio MEC", "delux","0-25", 2014, "teclado mecanico", 85, 125);
// el metodo
echo $teclado->get();
