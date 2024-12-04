<?php 
/* Crea una clase abstracta Freelancer con:
Propiedades: nombre, tarifaPorHora.
Un método abstracto calcularPagoMensual.

Crea una interfaz Proyectos con:
Un método calcularBonificacion.

Crea una clase FreelancerDesarrollador que:
Extiende Freelancer e implementa Proyectos.
Añade la propiedad horasTrabajadas.
Implementa los métodos necesarios. */


abstract class Freelancer{
    protected $nombre;
    protected $tarifaPorHora;

    public function __construct($nombre,$tarifaPorHora){
        $this->nombre = $nombre;
        $this->tarifaPorHora = $tarifaPorHora;
    }

    abstract function calcularPagoMensual();
}

interface Proyectos{
    public function calcularBonificacion();
}

class FreelancerDesarrollador extends Freelancer implements Proyectos{
    private $horasTrabajadas;

    public function __construct($nombre, $tarifaPorHora, $horasTrabajadas) {
        parent::__construct($nombre, $tarifaPorHora);
        $this->horasTrabajadas = $horasTrabajadas;
    }

    function calcularPagoMensual(){
        return $this->tarifaPorHora * $this->horasTrabajadas; 
    }
    function calcularBonificacion(){
        return $this->calcularPagoMensual() * 0.2;
    }
}



?>