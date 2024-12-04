<?php
/*Crea una clase abstracta Freelancer con:
Propiedades: nombre, tarifaPorHora.
Un método abstracto calcularPagoMensual.

Crea una interfaz Proyectos con:
Un método calcularBonificacion.

Crea una clase FreelancerDesarrollador que:
Extiende Freelancer e implementa Proyectos.
Añade la propiedad horasTrabajadas.
Implementa los métodos necesarios.*/
/* abstract class Freelancer {
    protected $nombre;
    protected $tarifaPorHora;

    public function __construct($nombre, $tarifaPorHora) {
        $this->nombre = $nombre;
        $this->tarifaPorHora = $tarifaPorHora;
    }

    abstract public function calcularPagoMensual();
}

interface Proyectos {
    public function calcularBonificacion();
}

class FreelancerDesarrollador extends Freelancer implements Proyectos {
    private $horasTrabajadas;

    public function __construct($nombre, $tarifaPorHora, $horasTrabajadas) {
        parent::__construct($nombre, $tarifaPorHora);
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function calcularPagoMensual() {
        return $this->tarifaPorHora * $this->horasTrabajadas;
    }

    public function calcularBonificacion() {
        return $this->calcularPagoMensual() * 0.20;
    }
}

$freelancer = new FreelancerDesarrollador("Juan", 8, 160);
echo "Pago mensual: " . $freelancer->calcularPagoMensual() . "<br>";
echo "Bonificacion: " . $freelancer->calcularBonificacion() . "<br>"; */


/* Crea una clase abstr que sea transporte q tiene las propiedades capacidad y vel maxima, un metodo abstracto que es calcular tiempo variable distancia, calcula tiempo para recorrer distancia dada, una interfaz que sea carga con  un metodo carga mercancia con variable peso, y una clase camion que extiende a transporte e implementa carga, aqui prop peso actual y metodo cargarmercancia */

/* abstract class Transporte{
    public $capacidad;
    public $velMaxima;

    public function __construct($capacidad, $velMaxima) {
        $this->capacidad = $capacidad;
        $this->velMaxima = $velMaxima;
    }

    abstract function calcularTiempo($distancia);
}

interface Carga{
    public function cargaMercancia($peso);
}

class Camion extends Transporte implements Carga{
    private $pesoActual;

    public function __construct($capacidad, $velMaxima, $pesoActual){
        parent::__construct($capacidad, $velMaxima);
        $this->pesoActual = $pesoActual;
    }

    public function calcularTiempo($distancia){
        return round($distancia/$this->velMaxima, 2);
    }

    public function cargaMercancia($peso){
        return $this->pesoActual + $peso;
    }

    public function cargarMercancia($peso){
        $pesoTotal = $this->pesoActual + $peso;

        if ($pesoTotal > $this->capacidad) {
            echo "No puedes cargar mas de la capacidad";
        }else{
            return "Camion cargado correctamente" . " quedan " . $this->capacidad-$pesoTotal . "kg <br>";
        }
    }
}

$camion = new Camion(10000,120,5000);
echo "El tiempo que va a tardar es: ". $camion ->calcularTiempo(200) . "horas <br>";
echo "El Peso total es: ".$camion->cargaMercancia(4000) . "kg <br>";
$camion->cargarMercancia(4000); */


/* clas abstracta habitacion con prop numero y precio x noche metodo abstracto calcular coste, con variable noches, crear clase habitacionSimple extendida habitacion, en esta un metodo calcularcoste, otra clase suite extend de habiytacion, calcularcoste */

abstract class Habitacion {
    public $numero;
    public $precioxNoche;

    public function __construct($numero, $precioxNoche) {
        $this->numero = $numero;
        $this->precioxNoche = $precioxNoche;
    }

    abstract function calcularCoste($noche);
}

class HabitacionSimple extends Habitacion {
    public function calcularCoste($noche) {
        return "El precio por noche en la habitacion es: " . ($this->precioxNoche * $noche) . "<br>";
    }
}

class Suite extends Habitacion {
    public function calcularCoste($noche) {
        return "El precio por noche en la suite es: " . ($this->precioxNoche * $noche) ."<br>";
    }
}

$habitacion777 = new HabitacionSimple(777, 25);
$suite555 = new Suite(555, 150);

echo $habitacion777->calcularCoste(5);
echo $suite555->calcularCoste(2);
?>
