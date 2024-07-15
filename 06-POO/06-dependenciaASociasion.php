<?php
//clase padre
final class Animal {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function mostratNombre() {
        return $this->nombre;
    }

    static public function nadar() {
        return "nadar";
    }

}


//clases hijas
//dependencia
class pez {
    public $nombreP;
    public function __construct($nombreP) {
        $this->nombreP = new Animal($nombreP);
    }
}
$nemo = new Pez("nemosss");
echo $nemo->nombreP::nadar();

//asociacion
class Perro{
    public function nost(Animal $nombre) {
        return $nombre->mostratNombre();
    }
}

//instancia
$roky = new Perro();
$pe = new Animal("ROKY");
echo $roky -> nost($pe);
//echo $roky;

