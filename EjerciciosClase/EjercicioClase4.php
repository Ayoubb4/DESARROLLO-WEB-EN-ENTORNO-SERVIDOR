<?php 
/*     class sistema{
        protected static $version = 1.0;

    }
        class Modulo extends sistema{

            public function mostrarVersion(){
                return "version del sistema: ". parent::$version;


            }   
        }
        $modulo = new Modulo();
        echo $modulo->mostrarVersion(); */
class Animal {
    public $nombre;
    public $especie;

    public function __construct($nombre, $especie) {
        $this->nombre = $nombre;
        $this->especie = $especie;
    }

    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Especie: " . $this->especie . "<br>";
    }
}
class Perro extends Animal {

    public function ladrar() {
        echo $this->nombre . " ladra<br>";
    }
}


$miPerro = new Perro("Jona", "Perro");
$miPerro->mostrarInformacion();
$miPerro->ladrar();

