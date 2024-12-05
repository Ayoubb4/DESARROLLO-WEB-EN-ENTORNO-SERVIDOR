<?php 
/* Crea una entidad que represente un vehículo con propiedades para capacidad y velocidad máxima. Añade un método para calcular el tiempo necesario para recorrer una distancia. Implementa otra funcionalidad para manejar una carga, verificando si se excede el límite permitido. */

abstract class Vehiculo{
    protected $capacidad;
    protected $velocidadMaxima;
    public function __construct($capacidad, $velocidadMaxima){
        $this->capacidad = $capacidad;
        $this->velocidadMaxima = $velocidadMaxima;
    }

    abstract public function calcularTiempo($distancia);
}

interface Carga{
    public function manejarCarga($carga);
}

class Camion extends Vehiculo implements Carga{

    private $pesoActual;

    public function __construct($capacidad, $velocidadMaxima, $pesoActual){
        parent::__construct($capacidad,$velocidadMaxima);
        $this->pesoActual = $pesoActual;
    }

    function calcularTiempo($distancia){
        return $distancia / $this->velocidadMaxima;
    }

    function manejarCarga($carga) {
        if ($carga > $this->capacidad - $this->pesoActual) {
            return "Rechazado";
        } else {
            $this->pesoActual += $carga;
            return "Aceptado";
        }
    }

}



?>