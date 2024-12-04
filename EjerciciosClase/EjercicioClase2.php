<?php
/* class Persona {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo "La persona: " . $nombre . " ha sido creada.<br>";
    }

    public function __destruct() {
        echo "La persona " . $this->nombre . " ha sido eliminada.<br>";
    }
}

$persona = new Persona("Juan"); */

class Animal {
    public $nombre;
    protected $especie;
    private $edad;

    public function __construct($nombre, $especie, $edad) {
        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->edad = $edad;
    }

    public function mostrarNombre() {
        echo "El Nombre es: " . $this->nombre . "<br>";
    }

    public function mostrarDetalles() {
        $this->mostrarEspecie();
        $this->mostrarEdad();
    }

    protected function mostrarEspecie() {
        echo "La Especie es: " . $this->especie . "<br>";
    }

    private function mostrarEdad() {
        echo "La edad es: " . $this->edad . "<br>";
    }
}

$miAnimal = new Animal("Nugget", "Perro", 5);
$miAnimal->mostrarNombre();
$miAnimal->mostrarDetalles();
?>