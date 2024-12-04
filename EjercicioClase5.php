<?php 
/* 
class Vehiculo{
    protected $marca;
    protected $vehiculo;


    public function __construct($marca, $vehiculo){
        $this->marca= $marca;
        $this->vehiculo= $vehiculo;
    }
    

    public function mostrarInformacion() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Vehiculo: " . $this->vehiculo . "<br>";
    }

}

class Coche extends Vehiculo{

    public function mostrarCoche(){
        echo "Marca:" . $this->marca . "<br>";
        echo "Vehiculo:" . $this->vehiculo . "<br>";
    }
}
    $miCoche = new Vehiculo("VW", "Sedan");
    $miCoche -> mostrarInformacion();
    
    $miCoche = new Coche("VW", "Sedan");
    $miCoche -> mostrarCoche();
 */

class Persona {
    public function saludar() {
        echo "Hola";
    }

    final public function despedir() {
        echo "Adios <br>";
    }
}

class Estudiante extends Persona {
    public function saludaEstudiante() {
        $this->saludar();
        echo ". Soy estudiante";
    }
}

    $miPersona = new Persona();
    $miPersona -> despedir();

    $miPersona = new Estudiante();
    $miPersona->saludaEstudiante();



?>